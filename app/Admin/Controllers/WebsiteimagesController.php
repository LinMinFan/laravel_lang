<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class WebsiteimagesController extends AdminController
{

    public function index(Content $content)
    {
        $imgs = Image::all();

        return $content->title('幻燈片管理')
            ->view('admin::website.images', ['imgs'=>$imgs]);
    }
    
    public function update($id)
    {
        $data=[];
        $data['name']=$_POST['name'];
        $data['text']=$_POST['text'];
        $data['img']=$_POST['img'];
        Image::find($id)->update($data);
         return redirect('admin/website/images');
    }
}
