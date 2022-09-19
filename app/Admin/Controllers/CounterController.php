<?php

namespace App\Admin\Controllers;

use App\Models\Counter;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CounterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Counter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Counter());

        $grid->column('id', __('Id'));
        $grid->column('name', __('名稱'));
        $grid->column('text', __('內容'));
        $grid->column('img', __('圖片'));
        $grid->column('type', __('分類'));
        $grid->column('len', __('語系'));
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
        $show = new Show(Counter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('名稱'));
        $show->field('text', __('內容'));
        $show->field('img', __('圖片'));
        $show->field('type', __('分類'));
        $show->field('len', __('語系'));
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
        $form = new Form(new Counter());

        $form->text('name', __('名稱'));
        $form->textarea('text', __('內容'));
        $form->image('img', __('圖片'));
        $form->number('type', __('分類'));
        $form->number('len', __('語系'));

        return $form;
    }
}
