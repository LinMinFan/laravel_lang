<?php

namespace App\Admin\Controllers;

use App\Models\Articles;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WebsitearticlesController extends AdminController
{
    public function index(Content $content)
    {
        $arts = Articles::all();

        return $content->title('文章管理')
            ->view('admin::website.articles', ['arts'=>$arts]);
    }
}
