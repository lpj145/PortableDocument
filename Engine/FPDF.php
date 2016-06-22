<?php

namespace PortableDocument\Engine;

use PortableDocument\DocumentInterface;
use PortableDocument\Element\ElementInterface;
use PortableDocument\Page\PageInterface;

class FPDF implements EngineInterface
{
    /**
     * @var \FPDF
     */
    private $engine;

    /**
     * FPDF constructor.
     * @param \FPDF $engine
     */
    public function __construct(\FPDF $engine = null)
    {
        if (is_null($engine)) {
            $engine = new \FPDF();
        }
        $this->engine = $engine;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getName()
    {
        return 'FPDF';
    }

    public function render(DocumentInterface $document)
    {
        foreach ($document->getPages() as $page) {
            $this->renderPage($page);
        }
    }

    public function save($filename)
    {
        $directory = dirname($filename);
        if (!is_writable($directory)) {
            throw new \RuntimeException("The directory ($directory) is not writable");
        }
        $this->engine->Output('F', $filename);
        return true;
    }

    private function renderPage(PageInterface $page)
    {
        $this->renderElement($page);
        foreach ($page->getElements() as $element) {
            $this->renderElement($element);
        }
    }

    private function renderElement(ElementInterface $element)
    {
        $command = Command::create($element, $this);
        $command->render($element);
    }
}