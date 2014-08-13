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
        $this->mfgProduct="<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct.="<title>Map Factory</title>";
        $this->mfgProduct.="</head><body>";
        $this->mfgProduct.="<img src='ml-map.gif' width='500' height='500' alt='mali map'/>";
        $this->mfgProduct.="<h1>This is a graphic.<3</h1>";
        $this->mfgProduct.="</body></html>";

        return $this->mfgProduct;
    }
}
