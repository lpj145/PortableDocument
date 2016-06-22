<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 21/06/2016
 * Time: 13:52
 */

namespace Config;


interface StyleeInterface
{
    public function getStyle($filename);
    public function setStyle();
    
}