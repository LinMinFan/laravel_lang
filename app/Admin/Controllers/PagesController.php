<?php

namespace App\Admin\Controllers;

use App\Models\Pages;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Pages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pages());

        $grid->column('id', __('編號'));
        $grid->column('title', __('標題'));
        $grid->column('keyword', __('關鍵字'));
        $grid->column('content', __('內容'));
        $grid->column('type', __('語系'));
        $grid->column('created_at', __('建立時間'));
        $grid->column('updated_at', __('更新時間'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Pages::findOrFail($id));

        $show->field('id', __('編號'));
        $show->field('title', __('標題'));
        $show->field('keyword', __('關鍵字'));
        $show->field('content', __('內容'));
        $show->field('type', __('語系'));
        $show->field('created_at', __('建立時間'));
        $show->field('updated_at', __('更新時間'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pages());

        $form->text('title', __('Title'));
        $form->textarea('keyword', __('Keyword'));
        $form->textarea('content', __('Content'));
        $form->text('type', __('Type'));

        return $form;
    }
}
