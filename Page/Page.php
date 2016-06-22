<?php

namespace PortableDocument\Page;

use PortableDocument\DocumentInterface;
use PortableDocument\Element\Element;
use PortableDocument\Element\ElementInterface;
use PortableDocument\Style\Font;
use PortableDocument\Style\StyleInterface;

class Page implements PageInterface
{
    /**
     * @var Size
     */
    private $size;
    /**
     * @var Orientation
     */
    private $orientation;
    /**
     * @var DocumentInterface
     */
    private $document;
    /**
     * @var ElementInterface[]
     */
    private $elements;
    /**
     * @var Cursor
     */
    private $cursor;
    /**
     * @var Font
     */
    private $font;
    /**
     * @var StyleInterface
     */
    private $style;
    /**
     * Page constructor.
     * @param Size|null $size
     * @param Orientation|null $orientation
     */
    public function __construct(Size $size = null, Orientation $orientation = null)
    {
        if (is_null($size)) {
            $size = Size::create(Size::A4);
        }

        $this->size = $size;

        if (is_null($orientation)) {
            $orientation = Orientation::create(Orientation::PORTRAIT);
        }

        $this->orientation = $orientation;
        $this->elements = [];
        $this->cursor = new Cursor();
        $this->font = new Font('Arial', 10);
    }

    /**
     * @return StyleInterface
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param StyleInterface $style
     * @return Page
     */
    public function setStyle(StyleInterface $style)
    {
        $this->style = $style;
        return $this;
    }
    /**
     * @return Font
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * @param Font $font
     * @return Page
     */
    public function setFont(Font $font)
    {
        $this->font = $font;
        return $this;
    }

    /**
     * @return Size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return Orientation
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param DocumentInterface $document
     * @return PageInterface
     */
    public function setDocument(DocumentInterface $document)
    {
        $this->document = $document;
        return $this;
    }

    public function addElement(Element $element)
    {
        $element->setPosition($this->cursor->getHorizontal(), $this->cursor->getVertical());
        $this->elements[] = $element;
    }

    /**
     * @return \PortableDocument\Element\ElementInterface[]
     */
    public function getElements()
    {
        return $this->elements;
    }
}
