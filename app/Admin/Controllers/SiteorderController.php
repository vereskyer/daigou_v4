<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Siteorder;

class SiteorderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Siteorder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Siteorder());

        $grid->model()->with('user')->orderBy('id', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('user.name', __('User name'));
        $grid->column('name', __('Name'));
        $grid->column('site', __('Site'));
        $grid->column('description', __('Description'));
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
        $show = new Show(Siteorder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('site', __('Site'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Siteorder());

        $form->number('user_id', __('User id'));
        $form->text('name', __('Name'));
        $form->text('site', __('Site'));
        $form->textarea('description', __('Description'));

        return $form;
    }
}
