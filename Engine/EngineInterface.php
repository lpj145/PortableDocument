<?php

namespace PortableDocument\Engine;

use PortableDocument\DocumentInterface;

interface EngineInterface
{
    /**
     * @return string Returns engine name
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getEngine();

    public function render(DocumentInterface $document);

    /**
     * @param string $filename
     * @throws \RuntimeException
     * @return bool
     */
    public function save($filename);
}
