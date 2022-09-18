<?php

namespace App\Admin\Controllers;

use App\Models\Length;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LengthController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Length';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Length());

        $grid->column('id', __('編號'));
        $grid->column('name', __('語系'));
        $grid->column('sh', __('顯示'));
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
        $show = new Show(Length::findOrFail($id));

        $show->field('id', __('編號'));
        $show->field('name', __('語系'));
        $show->field('sh', __('顯示'));
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
        $form = new Form(new Length());

        $form->text('name', __('Name'));
        $form->number('sh', __('Sh'));

        return $form;
    }
}
