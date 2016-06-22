<?php

namespace PortableDocument\Engine\FPDF;

use PortableDocument\Element\ElementInterface;
use PortableDocument\Element\Paragraph as ParagraghElement;
use PortableDocument\Engine\Command;
use PortableDocument\Page\Orientation;
use PortableDocument\Page\PageInterface;
use PortableDocument\Page\Size;

class Page extends Command
{
    /**
     * @var array
     */
    private $mappedSizes = [
        Size::A3 => 'A3',
        Size::A4 => 'A4',
        Size::A5 => 'A5',
        Size::LETTER => 'LETTER',
        Size::LEGAL => 'LEGAL',
    ];
    private $mappedOrientations = [
        Orientation::LANDSCAPE => 'L',
        Orientation::PORTRAIT => 'P',
    ];

    /**
     * Paragraph constructor.
     * @param \FPDF $engine
     */
    public function __construct(\FPDF $engine)
    {
        parent::__construct($engine);
    }

    /**
     * @return \FPDF
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param ElementInterface|PageInterface $element
     */
    public function render(ElementInterface $element)
    {
        $this->renderPage($element);
    }

    private function renderPage(PageInterface $page)
    {
        $this->getEngine()->AddPage($this->getOrientation($page), $this->getSize($page));
        $this->getEngine()->SetFont($page->getFont()->getName(), '', $page->getFont()->getSize());
    }

    private function getSize(PageInterface $page)
    {
        $size = $page->getSize();
        foreach ($this->mappedSizes as $mappedSize => $engineSize) {
            if ($size->is($mappedSize)) {
                return $engineSize;
            }
        }

        return 'A4';
    }

    private function getOrientation(PageInterface $page)
    {
        $orientation = $page->getOrientation();
        foreach ($this->mappedOrientations as $mappedOrientation => $engineOrientation) {
            if ($orientation->is($mappedOrientation)) {
                return $engineOrientation;
            }
        }
        return 'P';
    }

}
