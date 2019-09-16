<?php

namespace App\Admin\Controllers;

use App\Models\Customer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '客户信息';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Customer);

        $grid->column('id', __('Id'));
        $grid->column('product_id', __('Product id'));
        $grid->column('product_user_id', __('Product user id'));
        $grid->column('credit_level', __('Credit level'));
        $grid->column('star_level', __('Star level'));
        $grid->column('priority_level', __('Priority level'));
        $grid->column('customer_type', __('Customer type'));
        $grid->column('ip', __('Ip'));
        $grid->column('status', __('Status'));
        $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Customer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_id', __('Product id'));
        $show->field('product_user_id', __('Product user id'));
        $show->field('credit_level', __('Credit level'));
        $show->field('star_level', __('Star level'));
        $show->field('priority_level', __('Priority level'));
        $show->field('customer_type', __('Customer type'));
        $show->field('ip', __('Ip'));
        $show->field('status', __('Status'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Customer);

        $form->number('product_id', __('Product id'));
        $form->number('product_user_id', __('Product user id'));
        $form->switch('credit_level', __('Credit level'));
        $form->switch('star_level', __('Star level'));
        $form->switch('priority_level', __('Priority level'));
        $form->switch('customer_type', __('Customer type'))->default(1);
        $form->ip('ip', __('Ip'))->default('0.0.0.0');
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
