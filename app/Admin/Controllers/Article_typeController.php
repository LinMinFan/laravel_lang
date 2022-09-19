<?php

namespace App\Admin\Controllers;

use App\Models\Article_type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Article_typeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article_type';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article_type());

        $grid->column('id', __('編號'));
        $grid->column('name', __('分類名稱'));
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
        $show = new Show(Article_type::findOrFail($id));

        $show->field('id', __('編號'));
        $show->field('name', __('分類名稱'));
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
        $form = new Form(new Article_type());

        $form->text('name', __('分類名稱'));

        return $form;
    }
}
