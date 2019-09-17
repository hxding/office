<?php

namespace App\Admin\Controllers;

use App\Models\Citie;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CitieController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Citie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Citie);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('city_id', __('City id'));
        $grid->column('province_id', __('Province id'));

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
        $show = new Show(Citie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('city_id', __('City id'));
        $show->field('province_id', __('Province id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Citie);

        $form->text('name', __('Name'));
        $form->text('city_id', __('City id'));
        $form->text('province_id', __('Province id'));

        return $form;
    }
}
