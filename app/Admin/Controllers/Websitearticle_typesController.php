<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Models\Article_type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class Websitearticle_typesController extends AdminController
{

    public function index(Content $content)
    {
        $type = Article_type::all();

        return $content->title('文章類別')
            ->view('admin::website.article_types', ['type'=>$type]);
    }
    
    public function update($id)
    {
        $form =$this->form();
        Article_type::find($id)->update($form);
         return redirect()->action(
            [Websitearticle_typesController::class,'index']
        ); 
    }
}
