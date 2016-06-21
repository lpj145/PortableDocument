<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/06/2016
 * Time: 23:05
 */

namespace Page;


use Element\ElementInterface;

interface PageInterface
{
    public function setMargins($leftMargin, $rightMargin, $topMargin, $botMargin);
    public function elements(ElementInterface $element);

}