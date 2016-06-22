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

namespace PortableDocument\Element;

use PortableDocument\Style\StyleInterface;

class Element implements ElementInterface, PositionInterface, StylishInterface
{
    /**
     * @var float
     */
    protected $xPosition;
    /**
     * @var float
     */
    protected $yPosition;
    /**
     * @var StyleInterface
     */
    protected $style;

    /**
     * @param float $horizontal
     * @param float $vertical
     */
    public function setPosition($horizontal, $vertical)
    {
        $this->xPosition = (float) $horizontal;
        $this->yPosition = (float) $vertical;
    }

    /**
     * @param StyleInterface $style
     */
    public function setStyle(StyleInterface $style)
    {
        $this->style = $style;
    }

    /**
     * @return StyleInterface
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @return float
     */
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * @return float
     */
    public function getYPosition()
    {
        return $this->yPosition;
    }

}