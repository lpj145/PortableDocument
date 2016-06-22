<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/06/2016
 * Time: 23:43
 */


require_once __DIR__ . '/vendor/autoload.php';

use Page\Page;

$page = new Page();

$page->setElement( new Rect(20, 50, 0, 10, 10) );
$page->setElement( new Text('Aqui o seu texto') );


var_dump($page->getElements());

