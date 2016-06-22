<?php

namespace PortableDocument\Element;

class Paragraph extends Element
{
    /**
     * @var string
     */
    private $text;

    /**
     * Paragraph constructor.
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string) $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}