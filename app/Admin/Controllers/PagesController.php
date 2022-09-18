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

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('keyword', __('Keyword'));
        $grid->column('content', __('Content'));
        $grid->column('type', __('Type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('keyword', __('Keyword'));
        $show->field('content', __('Content'));
        $show->field('type', __('Type'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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
