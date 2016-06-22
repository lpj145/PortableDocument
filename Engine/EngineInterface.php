<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 21/06/2016
 * Time: 15:13
 */

namespace Engine;


interface EngineInterface
{
    /*
     * Engine provides ways to draw
     */
    public function label();
    public function text();
    public function rect();
    public function roundRect();
    public function circle();
    public function image();


    /*
     * output
     */
    public function output();
    public function setStyle();
    public function addPage();
    public function setPage();
}
