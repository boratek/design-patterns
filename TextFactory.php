<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 8/13/14
 * Time: 10:31 AM
 */

include_once('Creator.php');
include_once('TextProduct.php');

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product=new TextProduct();
        return($product->getProperties());
    }
} 