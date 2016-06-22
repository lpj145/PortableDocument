<?php

namespace PortableDocument\Element;

use PortableDocument\Style\StyleInterface;

interface StylishInterface
{
    public function setStyle(StyleInterface $style);
}