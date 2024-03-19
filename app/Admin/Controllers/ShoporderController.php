<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Shoporder;
use Illuminate\Support\Carbon;
use OpenAdmin\Admin\Controllers\AdminController;

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
        $grid->column('description', __('Description'))->display(function ($description) {
            // 将描述字段每30个字符换行
            $description = wordwrap($description, 100, "<br>\n", true);
            // 如果超过200个字符，只显示前200个字符
            $description = strlen($description) > 200 ? substr($description, 0, 200) . '...' : $description;
            return $description;
        });
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'))->display(function ($createdAt) {
            // 将 UTC 时间转换为韩国当地时间
            return Carbon::parse($createdAt)->timezone('Asia/Seoul')->toDateTimeString();
        });

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
