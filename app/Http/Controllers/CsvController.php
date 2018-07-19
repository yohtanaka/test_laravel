<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class CsvController extends Controller
{
  public function csv()
  {
    return view('csv.csv');
  }

  public function import()
  {
    return view('csv.import');
  }

  public function export()
  {
    try {
      $stores = Store::latest()->get();
      $csvFileName = '../public/storage/csv_export/' . time() . rand() . '.csv';
      $res = fopen($csvFileName, 'w');
      if ($res === FALSE) {
        throw new Exception('ファイルの書き込みに失敗しました。');
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
