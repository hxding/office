<?php

namespace App\Admin\Controllers;

use App\Models\CustomerBank;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerBankController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\CustomerBank';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerBank);

        $grid->column('id', __('Id'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('type', __('Type'));
        $grid->column('bank_account_name', __('Bank account name'));
        $grid->column('bank_account_no', __('Bank account no'));
        $grid->column('bank_name', __('Bank name'));
        $grid->column('bank_province', __('Bank province'));
        $grid->column('bank_cities', __('Bank cities'));
        $grid->column('bank_countries', __('Bank countries'));
        $grid->column('branch_name', __('Branch name'));
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
        $show = new Show(CustomerBank::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('type', __('Type'));
        $show->field('bank_account_name', __('Bank account name'));
        $show->field('bank_account_no', __('Bank account no'));
        $show->field('bank_name', __('Bank name'));
        $show->field('bank_province', __('Bank province'));
        $show->field('bank_cities', __('Bank cities'));
        $show->field('bank_countries', __('Bank countries'));
        $show->field('branch_name', __('Branch name'));
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
        $form = new Form(new CustomerBank);

        $form->number('customer_id', __('Customer id'));
        $form->switch('type', __('Type'));
        $form->text('bank_account_name', __('Bank account name'));
        $form->text('bank_account_no', __('Bank account no'));
        $form->text('bank_name', __('Bank name'));
        $form->text('bank_province', __('Bank province'));
        $form->text('bank_cities', __('Bank cities'));
        $form->text('bank_countries', __('Bank countries'));
        $form->text('branch_name', __('Branch name'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
