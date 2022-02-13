<?php


namespace App\classes;


class Product
{
    public  function  getAllProduct()
    {
        return[
            0 => [
                'id' => 1,
                'name' => 'New Product',
                'price' => '4500',
                'description' =>'description',
                'image'=> 'p1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'New T-Shirt',
                'price' => '5500',
                'description' =>'description',
                'image'=> 'p2.jpg'
            ],
            2 => [
                'id' => 3,
                'name' => 'New Shari',
                'price' => '10500',
                'description' =>'description',
                'image'=> 'p3.jpg'
            ]
        ];
    }
}