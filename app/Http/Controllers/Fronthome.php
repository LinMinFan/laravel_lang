<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article_type;
use App\Models\Articles;
use App\Models\Counter_type;
use App\Models\Counter;
use App\Models\Image;
use App\Models\Length;
use App\Models\Pages;
use Illuminate\Support\Facades\App;





class Fronthome extends Controller
{
    public function index(Request $request,$local)
    {
        
        App::setLocale($local);
        $languge_array=['zh-TW'=>1,'zh-CN'=>2,'en'=>3,'ja'=>4];
        $counters = Counter::all();
        $cou_type = Counter_type::all();
        $arts = Articles::all();
        $art_type = Article_type::all();
        $lan = Length::all();
        $imgs = Image::all();
        $pages = Pages::all();
        return view('index',['counters'=>$counters,'cou_type'=>$cou_type,'arts'=>$arts,'art_type'=>$art_type,'lan'=>$lan,'imgs'=>$imgs,'pages'=>$pages,'local'=>$local,'languge_array'=>$languge_array]);
    }

    public function counters($id,$local)
    {
        $counter = Counter::find($id);
        return view('counters',['counter'=>$counter,'local'=>$local]);
    }
}

