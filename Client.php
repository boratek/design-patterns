<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 8/13/14
 * Time: 10:35 AM
 */

include_once('GraphicFactory.php');
include_once('TextFactory.php');

class Client
{
    private $someGraphicObject;
    private $someTextObject;

    public function __construct()
    {
        $this->someGraphicObject=new GraphicFactory();
        echo $this->someGraphicObject->startFactory() . "<br />";
        $this->someTextObject=new TextFactory();
        echo $this->someTextObject->startFactory() . "<br />";
    }
}

$worker=new Client();
