<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function index()
    {

        $date = date('Y-m-d');
        $first = DB::table('sales')->where('sales_date', $date)->first();
        //firstは単一のデータを取得するので、stdClassオブジェクトが返されます。stdClassは直接配列に変換することが出来ないので、一度JSONに変換してから配列に変換する手順を踏みます。
        $data = json_decode(json_encode($first), true);
        $data['date'] = $date;
        // $data['year'] = date('Y', strtotime($date));
        // $data['month'] = date('m', strtotime($date));
        // $data['day'] = date('d', strtotime($date));

        return view("sales", $data);

    }

    public function fetch(Request $request)
    {

        $date = $request->sales_date;
        $first = DB::table('sales')->where('sales_date', $date)->first();
        //firstは単一のデータを取得するので、stdClassオブジェクトが返されます。stdClassは直接配列に変換することが出来ないので、一度JSONに変換してから配列に変換する手順を踏みます。
        $data = json_decode(json_encode($first), true);
        $data['date'] = $date;
        return $data;
    }

}
