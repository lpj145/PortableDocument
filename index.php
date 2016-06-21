<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/06/2016
 * Time: 23:43
 */


require_once 'Page/PageInterface.php';
require_once 'Page/Page.php';



$page = new \PortableDocument\Page\Page\Page('A4');

$page->setMargins(10, 10, 10, 10);

var_dump($page);

echo 'Deu certo!';