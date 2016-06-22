<?php
/*
 * Interface PortableDocument
*/

namespace PortableDocument;

use PortableDocument\Engine\EngineInterface;
use PortableDocument\Page\PageInterface;

interface DocumentInterface
{
    /**
     * @return EngineInterface
     */
    public function getEngine();

    /**
     * @param PageInterface $page
     * @return bool
     */
    public function addPage(PageInterface $page);

    /**
     * @return PageInterface[]
     */
    public function getPages();

    /**
     * @param string $filename
     * @return bool
     */
    public function save($filename);
}