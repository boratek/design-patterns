<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 8/13/14
 * Time: 10:30 AM
 */

abstract class Creator
{
    protected abstract function factoryMethod();
    public function startFactory()
    {
        $mfg= $this->factoryMethod();
        return $mfg;
    }
}