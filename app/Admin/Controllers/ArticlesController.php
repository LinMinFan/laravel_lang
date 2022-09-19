<?php

namespace App\Admin\Controllers;

use App\Models\Articles;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticlesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Articles';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Articles());

        $grid->column('id', __('編號'));
        $grid->column('name', __('文章名稱'));
        $grid->column('text', __('文章內容'));
        $grid->column('img', __('圖片'));
        $grid->column('type', __('分類'));
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
        $show = new Show(Articles::findOrFail($id));

        $show->field('id', __('編號'));
        $show->field('name', __('文章名稱'));
        $show->field('text', __('文章內容'));
        $show->field('img', __('圖片'));
        $show->field('type', __('分類'));
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
        $form = new Form(new Articles());

        $form->text('name', __('文章名稱'));
        $form->textarea('text', __('文章內容'));
        $form->image('img', __('圖片'));
        $form->number('type', __('分類'));

        return $form;
    }
}
