<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class posthandler extends Controller
{
    public static function postingan(){
        $dbs = DB::table('tb-forum-tmp')->get();
        $dbslik = DB::table('tbforumlikfunc')->get();
        return view('home', compact("dbs","dbslik"));
    }

    public static function likepost(){
        $dbs = DB::table('tb-forum-tmp')->get();
        DB::insert('insert into tbforumlikfunc (username, idpost, likestatus) values (?, ?, ?)', ['tester', $_GET['idpost'], 1]);
        return view('home', compact("dbs"));
    }
}