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
require_once 'Element/Rect.php';
require_once 'Element/Text.php';

use Element\Rect;
use Element\Text;
use Page\Page;

$container = [];

$page = new Page();

$page->element( new Rect(20, 50, 0, 10, 10) );
$page->element( new Text('Aqui o seu texto') );

