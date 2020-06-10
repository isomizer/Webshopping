<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use App\Productyong;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportProductyong;

class productyongController extends Controller
{
    public function index(){
        return view('productyong.addProductPage');
      }
    
    public function import() 
      {
          Excel::import(new ImportProductyong, request()->file('file'));
             
          return back();
      }
    }

