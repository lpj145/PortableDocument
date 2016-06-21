<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/06/2016
 * Time: 23:05
 */

namespace PortableDocument\Page\Page;


interface PageInterface
{
    const FORMAT_A4;
    public function setMargins($leftMargin, $rightMargin, $topMargin, $botMargin);

}