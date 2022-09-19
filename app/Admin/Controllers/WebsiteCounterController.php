<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Counter_type;
use App\Models\Length;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class WebsiteCounterController extends AdminController
{

        public function index(Content $content)
    {
        $counters = Counter::all();
        $len = Length::all();
        $type = Counter_type::all();

        return $content->title('案例管理')
            ->view('admin::website.counter', ['counters'=>$counters,'len'=>$len,'type'=>$type]);
    }
    
    public function update($id)
    {
        $data=[];
        $data['name']=$_POST['name'];
        $data['text']=$_POST['text'];
        $data['img']=$_POST['img'];
        $data['type']=$_POST['type'];
        $data['len']=$_POST['len'];
        Counter::find($id)->update($data);
         return redirect('admin/website/counters'); 
    }
}
