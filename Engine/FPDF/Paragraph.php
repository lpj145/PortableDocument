<?php

namespace PortableDocument\Engine\FPDF;

use PortableDocument\Element\ElementInterface;
use PortableDocument\Element\Paragraph as ParagraghElement;
use PortableDocument\Engine\Command;

class Paragraph extends Command
{
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
     * @param ElementInterface|ParagraghElement $element
     */
    public function render(ElementInterface $element)
    {
        $this->renderParagraph($element);
    }

    private function renderParagraph(ParagraghElement $element)
    {
        $this->getEngine()->Cell($element->getXPosition(), $element->getYPosition(), $element->getText());
    }
}
