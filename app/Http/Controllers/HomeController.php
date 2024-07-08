<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id', 'DESC')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderBy('brand_id', 'DESC')->get();
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderBy('product_id', 'DESC')->get();
        return view('pages.home')->with('category', $cate_product)->with('brand', $brand_product)->with('all_product', $all_product);
    }
    
}
