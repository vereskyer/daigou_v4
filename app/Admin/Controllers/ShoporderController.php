<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Shoporder;

class ShoporderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Shoporder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shoporder());

        $grid->model()->with('user')->orderBy('id', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('user.name', __('User name'));
        $grid->column('shop_name', __('Shop name'));
        $grid->column('building', __('Building'));
        $grid->column('position', __('Position'));
        $grid->column('phone', __('Phone'));
        $grid->column('description', __('Description'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));

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
        $show = new Show(Shoporder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('shop_name', __('Shop name'));
        $show->field('building', __('Building'));
        $show->field('position', __('Position'));
        $show->field('phone', __('Phone'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Shoporder());

        $form->number('user_id', __('User id'));
        $form->text('shop_name', __('Shop name'));
        $form->text('building', __('Building'));
        $form->text('position', __('Position'));
        $form->phonenumber('phone', __('Phone'));
        $form->textarea('description', __('Description'));
        $form->text('status', __('Status'));

        return $form;
    }
}
