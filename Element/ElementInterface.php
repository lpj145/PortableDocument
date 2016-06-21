<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/06/2016
 * Time: 22:43
 */

namespace PortableDocument\Element\Element;


interface ElementInterface
{
    public function rect($width, $height);
    public function circle($width, $height, $radius);
    public function roundRect($width, $height, $leftCorner, $rightCorner, $topCorner, $botCorner);
    public function text($text = '', $fontSize = 8);

}