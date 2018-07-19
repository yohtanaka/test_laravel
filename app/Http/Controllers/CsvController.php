<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use SplFileObject;
use Exception;

class CsvController extends Controller
{
  public function csv()
  {
    return view('csv.csv');
  }

  public function import()
  {
    $filePath = "../public/storage/csv_export/" . $_FILES["csvFile"]["name"];
    if (move_uploaded_file($_FILES["csvFile"]["tmp_name"], $filePath))
    {
      chmod($filePath, 0644);
    }else{
        // ファイルの読み込みに失敗しました
    }
    $objFile = new SplFileObject($filePath);
    $objFile->setFlags(SplFileObject::READ_CSV);
    $objFile->setCsvControl("\t", "\"");

    foreach ($objFile as $key => $line)
    {
      foreach ($line as $buf)
      {
        $buf = mb_convert_encoding($buf, "UTF-8", "sjis-win");
        $records[$key][] = $buf;
      }
    }
    foreach (glob("../public/storage/csv_export/*.csv") as $delFile) unlink($delFile);

    return view('csv.import', compact('records'));
  }

  public function export()
  {
    try {
      $stores = Store::latest()->get();
      $csvFileName = '../public/storage/csv_export/' . time() . rand() . '.csv';
      $res = fopen($csvFileName, 'w');
      if ($res === FALSE) {
        throw new Exception('ファイルの書き込みに失敗しました');
      }
      $dataList[] = array("名前", "カテゴリ", "オススメポイント", "10段階評価", "最近行った日");
      $categories = ["食事", "デザート", "飲み", "テイクアウト", "その他"];
      foreach ($stores as $store) {
        $dataList[] = array($store['name'], $categories[$store['category']], $store['discription'], $store['rating'], $store['date'], );
      }
      foreach($dataList as $dataInfo) {
        mb_convert_variables('SJIS', 'UTF-8', $dataInfo);
        fputcsv($res, $dataInfo);
      }
      fclose($res);

      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=sampaleCsv.csv');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: ' . filesize($csvFileName));
      readfile($csvFileName);

    } catch(Exception $e) {
      echo $e->getMessage();
    }
  }
}
