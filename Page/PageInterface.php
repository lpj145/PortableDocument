<?php

namespace PortableDocument\Page;

use PortableDocument\DocumentInterface;
use PortableDocument\Element\Element;
use PortableDocument\Element\ElementInterface;
use PortableDocument\Element\StylishInterface;
use PortableDocument\Style\Font;

interface PageInterface extends ElementInterface, StylishInterface
{
    /**
     * @return Size
     */
    public function getSize();

    /**
     * @return Orientation
     */
    public function getOrientation();

    /**
     * @return Font
     */
    public function getFont();
    /**
     * @param DocumentInterface $document
     * @return PageInterface
     */
    public function setDocument(DocumentInterface $document);

    /**
     * @param Element $element
     * @return PageInterface
     */
    public function addElement(Element $element);

    /**
     * @return ElementInterface[]
     */
    public function getElements();
}
