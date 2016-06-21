<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/06/2016
 * Time: 23:43
 */


require_once 'DocumentInterface.php';
require_once 'PortableDocument.php';
require_once 'Page/PageInterface.php';
require_once 'Page/Page.php';
require_once 'Element/ElementInterface.php';
require_once 'Element/Element.php';

use Page\Page;
use PortableDocument\PortableDocument;
use Element\Element;

$page = new Page();
$PortableDocument = new PortableDocument();
$element = new Element();

$PortableDocument->addPage( $page );
$PortableDocument->render();

echo 'Deu certo!';