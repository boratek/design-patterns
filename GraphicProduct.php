<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 8/13/14
 * Time: 10:34 AM
 */

include_once('Product.php');

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct="This is a graphic.<3";
        return $this->mfgProduct;
    }
}
