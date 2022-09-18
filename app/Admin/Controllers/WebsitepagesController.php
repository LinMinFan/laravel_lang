<?php

namespace App\Admin\Controllers;

use App\Models\Pages;
use App\Models\Length;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WebsitepagesController extends AdminController
{
    public function index(Content $content)
    {
        $pages = Pages::all();
        $type = Length::all();

        return $content->title('頁面管理')
            ->view('admin::website.pages', ['pages'=>$pages,'type'=>$type]);
    }
}
