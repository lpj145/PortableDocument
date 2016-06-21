<?php

/*
 * Portable Document - Element Interfaces
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

namespace PortableDocument\Element\Element;


class Element implements ElementInterface
{
    private $positionX;
    private $positionY;

    public function rect($width, $height)
    {
        // TODO: Implement rect() method.
    }

    public function circle($width, $height, $radius)
    {
        // TODO: Implement circle() method.
    }

    public  function roundRect($width, $height, $leftCorner, $rightCorner, $topCorner, $botCorner)
    {
        // TODO: Implement roundRect() method.
    }

    public function text($text = '', $fontSize = 8)
    {
        // TODO: Implement text() method.
    }

    public function lineBreak( )
    {
        // Implementar a quebra de linha com tracejados
    }

}