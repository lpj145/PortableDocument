<?php
/*
 * Portable Document - PageInterface
 *
 * 2016 - Code @lpj145
 *
 * This library is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU Lesser General Public
 *  License as published by the Free Software Foundation; either
 *  version 2.1 of the License, or (at your option) any later version.
 *
 *  This library is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 *  Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public
 *  License along with this library; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */


namespace Page;

use Element\ElementInterface;

class Page implements PageInterface
{
    private $height;
    private $width;
    private $orientation;

    private $leftMargin;
    private $righMargin;
    private $topMargin;
    private $botMargin;

    private $cursorX;
    private $cursorY;

    /*
     * Page containt strucutre Elements
     */
    private $containerElement = array();

    /*
     * Definição da folha
     * Por padrão adota folha A4
     * Orientação em modo retrato
     * P - Portrait
     * L - Landscape
     */
    public function __construct($format = 'A4', $orientation = 'P')
    {
        switch ($format) {
            case 'A4':
                $this->width = 2480;
                $this->height = 3508;
                break;
            default:
                break;
        }

        $this->orientation = $orientation;
    }

    public function setMargins($leftMargin = 0, $rightMargin = 0, $topMargin = 0, $botMargin = 0)
    {
        $this->leftMargin = $leftMargin;
        $this->righMargin = $rightMargin;
        $this->topMargin  = $topMargin;
        $this->botMargin  = $botMargin;
    }

    public function setElement(ElementInterface $element)
    {
        $this->containerElement[] = $element;
    }

    public function getElements()
    {
        return $this->containerElement;
    }

    public  function setPage(PageInterface $page)
    {

    }

}
