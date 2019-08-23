<?php

namespace App\Forms\Product;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class ProductForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'label' => 'Produto',
                'rules' => 'required'
            ])
            ->add('amount', Field::TEXT, [
                'label' => 'Quantidade',
                'rules' => 'required'
            ])
            ->add('vendor', Field::TEXT, [
                'label' => 'Fabricante',
                'rules' => 'required'
            ])
            ->add('brand', Field::TEXT, [
                'label' => 'Marca',
                'rules' => 'required'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Salvar'
            ]);
    }
}
