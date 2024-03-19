<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Siteorder;
use Illuminate\Support\Carbon;
use OpenAdmin\Admin\Controllers\AdminController;

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
        // 添加自定义列来显示图片
        $grid->column('first_image', __('First Image'))->display(function () {
            // 获取订单的第一张图片
            $firstImage = $this->siteorder_images->first();

            if ($firstImage) {
                return '<img src="../' . $firstImage->image . '" width="100">';
            }
        });


        $grid->column('site', __('Site'))->display(function () {
            // 将 "site" 字段截取为最多 20 个字符
            $site = strlen($this->site) > 20 ? substr($this->site, 0, 20) . '...' : $this->site;
            return '<a href="' . $this->site . '" target="_blank">' . $site . '</a>';
        });

        $grid->column('description', __('Description'))->display(function ($description) {
            // 将描述字段每30个字符换行
            $description = wordwrap($description, 100, "<br>\n", true);
            // 如果超过200个字符，只显示前200个字符
            $description = strlen($description) > 200 ? substr($description, 0, 200) . '...' : $description;
            return $description;
        });
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
