<?php
use Encore\Admin\Admin;


/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Encore\Admin\Form::forget(['map', 'editor']);

Admin::favicon('/your/favicon/path');
//Admin::js('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js');
//Admin::js('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js');
//Admin::js('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
//Admin::js('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js');
//Admin::css('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');