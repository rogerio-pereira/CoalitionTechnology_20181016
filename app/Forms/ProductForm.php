<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ProductForm extends Form
{
    public function buildForm()
    {
        $this->add('name', 
                'text', 
                [
                    'label' => 'Product Name', 
                    'placeholder' => 'Product Name',
                    'wrapper' => [
                        'class' => 'col-md-12 form-group',
                    ],
                    'attr' => [
                        'id' => 'name'
                    ]
                ])
            ->add('stock', 
                'text', 
                [
                    'label' => 'Quantity in stock', 
                    'placeholder' => 'Quantity in stock',
                    'wrapper' => [
                        'class' => 'col-md-6 form-group',
                    ],
                    'attr' => [
                        'id' => 'stock'
                    ]
                ])
            ->add('price', 
                'text', 
                [
                    'label' => 'Price', 
                    'placeholder' => 'Price',
                    'wrapper' => [
                        'class' => 'col-md-6 form-group',
                    ],
                    'attr' => [
                        'id' => 'price'
                    ]
                ])
            /*->add('submit', 
                'submit', 
                [
                    'label' => '<i class="far fa-save"></i> Save',
                    'wrapper' => [
                        'class' => 'form-group col-md-4 col-md-offset-4 text-center'
                    ],
                    'attr' => [
                        'class' => 'btn btn-primary'
                    ]
                ])*/
            ->add('button', 
                'button', 
                [
                    'label' => '<i class="far fa-save"></i> Save',
                    'wrapper' => [
                        'class' => 'form-group col-md-4 col-md-offset-4 text-center'
                    ],
                    'attr' => [
                        'class' => 'btn btn-primary',
                        'id' => 'saveButton'
                    ]
                ]);
    }
}
