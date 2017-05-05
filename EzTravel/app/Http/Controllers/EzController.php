<?php

namespace App\Http\Controllers;

use App\Models\Ez;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EzController extends Controller
{
    public function index()
    {
        $list_kota = DB::table('city')->get();
        return view('ez/home',['list_kota'=>$list_kota]);
    }
    public function showtour(Ez $kota)
    {
        return view('ez.tour',compact('kota'));
    }

//    public function show($id)
//    {
//        $nilai = 'nilainya adalah '.$id;
//        $unescaped = '<script> alert("$nilai") </script>';
//
//        //$namanama = DB::table('users')->WHERE('username', 'like', '%a%')->get();
//
//        /*tanpa eloquent*/
//        /*DB::table('users')->insert([
//           ['username'=>'test', 'password'=>'2124']
//        ]);
//
//        DB::table('users')  ->where('id', '4')
//                            ->update(['username'=>'test','password'=>'2124']);
//
//        DB::table('users')->where('id','>',3)->delete();*/
//
//        $namanama = DB::table('admin')->get();
//        //dd($namanama);
//
//
//
//        return view('ez/coba',['nilai'=>$nilai, 'namanama'=>$namanama, 'unescaped'=>$unescaped]);
//    }


}
