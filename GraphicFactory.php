<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 8/13/14
 * Time: 10:32 AM
 */

include_once('Creator.php');
include_once('GraphicProduct.php');

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product=new GraphicProduct();
        return($product->getProperties());
    }
}
