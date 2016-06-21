<?php
/*
 * Interface PortableDocument
*/

namespace PortableDocument;


interface DocumentInterface
{
    /*
     * return EngineInterface
    */
    public function getEngine();
    public function addPage( PageInterface $page );
    public function render();
    public function save( $filename );

}