<?php
/*
 * Portable Document
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

namespace PortableDocument;

use PortableDocument\Engine\EngineInterface;
use PortableDocument\Page\PageInterface;

class PortableDocument implements DocumentInterface
{
    /**
     * @var EngineInterface
     */
    private $engine;
    /**
     * @var array
     */
    private $pages;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
        $this->pages = [];
    }

    /**
     * @return EngineInterface
     */
    public function getEngine()
    {
        return $this->engine;
    }

    public function addPage(PageInterface $page)
    {
        $page->setDocument($this);
        $this->pages[] = $page;
    }

    /**
     * @return PageInterface[]
     */
    public function getPages()
    {
        return $this->pages;
    }

    public function save($filename)
    {
        $this->engine->render($this);
        $this->engine->save($filename);
    }
}