<?php
/*
 * Require FPDF class
 */

namespace Engine;


$fpdfClass = 'fpdf.php';

if ( file_exists($fpdfClass)) {
    require_once $fpdfClass;
} else {
    die('Não foi encontrada a lib fpdf');
}


class FPDF implements EngineInterface
{
    public function label()
    {
        // TODO: Implement label() method.
    }

    public function text()
    {
        // TODO: Implement text() method.
    }

    public function rect()
    {
        // TODO: Implement rect() method.
    }

    public function roundRect()
    {
        // TODO: Implement roundRect() method.
    }

    public function circle()
    {
        // TODO: Implement circle() method.
    }

    public function image()
    {
        // TODO: Implement image() method.
    }


    /*
     * Dont touch area
     */

    public function output()
    {
        // TODO: Implement output() method.
    }


    public function setStyle()
    {
        // TODO: Implement setStyle() method.
    }

    public function addPage()
    {
        // TODO: Implement addPage() method.
    }

    public function setPage()
    {
        
    }

}