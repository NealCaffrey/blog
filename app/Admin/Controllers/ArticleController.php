<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);

        $grid->column('id', __('Id'));
        $grid->column('type', __('Type'))->display(function ($type){
            return Category::find($type)->title;
        });
        $grid->column('title', __('Title'));
        $grid->column('visits', __('Visits'));
        $grid->column('star', __('Star'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->filter(function ($filter) {
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            $filter->like('title', 'title');
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
        $show = new Show(Article::findOrFail($id));

        $show->field('type', __('Type'));
        $show->field('title', __('Title'));
        $show->field('introduction', __('Introduction'));
        $show->field('content', __('Content'));
        $show->field('visits', __('Visits'));
        $show->field('star', __('Star'));
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
        $form = new Form(new Article);

        $form->select('type')->options('/admin/api/category');
        $form->text('title', __('Title'));
        $form->editor('content', __('Content'))->rules('required');

        return $form;
    }

}
