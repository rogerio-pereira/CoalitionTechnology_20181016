<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ProductForm extends Form
{
    public function buildForm()
    {
        $this->add('name', 
                'password', 
                [
                    'label' => 'Product Name', 
                    'placeholder' => 'Product Name',
                    'wrapper' => [
                        'class' => 'col-md-12 form-group'
                    ]
                ])
            ->add('stock', 
                'number', 
                [
                    'label' => 'Quantity in stock', 
                    'placeholder' => 'Quantity in stock',
                    'wrapper' => [
                        'class' => 'col-md-6 form-group'
                    ]
                ])
            ->add('price', 
                'number', 
                [
                    'label' => 'Price', 
                    'placeholder' => 'Price',
                    'wrapper' => [
                        'class' => 'col-md-6 form-group'
                    ]
                ])
            ->add('submit', 
                'submit', 
                [
                    'label' => '<i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> Salvar',
                    'wrapper' => [
                        'class' => 'form-group col-md-4 col-md-offset-4 text-center'
                    ],
                    'attr' => [
                        'class' => 'btn btn-primary'
                    ]
                ]);
    }
}
