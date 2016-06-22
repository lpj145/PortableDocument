<?php

require_once __DIR__ . '/vendor/autoload.php';

use PortableDocument\Engine\FPDF as FPDFEngine;
use PortableDocument\Page\Page;
use PortableDocument\PortableDocument;

$engine = new FPDFEngine();
$document = new PortableDocument($engine);

$page = new Page();
$page->setFont(new \PortableDocument\Style\Font('Arial', 10));
$page->addElement(new \PortableDocument\Element\Paragraph('First text'));

$document->addPage($page);

$document->save(__DIR__ . '/test-document.pdf');
