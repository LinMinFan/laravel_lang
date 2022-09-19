<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter_type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class WebsiteCounter_typeController extends AdminController
{

        public function index(Content $content)
    {
        $type = Counter_type::all();

        return $content->title('案例類別')
            ->view('admin::website.counter_types', ['type'=>$type]);
    }
    
    public function update($id)
    {
        $data=[];
        $data['name']=$_POST['name'];
        Counter_type::find($id)->update($data);
         return redirect('admin/website/counter_types'); 
    }
}
