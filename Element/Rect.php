<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 21/06/2016
 * Time: 14:28
 */

namespace Element;


use Engine\EngineInterface;

class Rect extends Element
{
    public function __construct( $width, $height, $radius, $positionX, $positionY)
    {
        $this->width = $width;
        $this->height = $height;
        $this->radius = $radius;
        $this->positionX = $positionX;
        $this->positionY = $positionY;
    }

}
