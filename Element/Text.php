<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 21/06/2016
 * Time: 14:51
 */

namespace PortableDocument\Element;


class Text extends Element
{
    //Length text
    public $length;
    public $text;

    /*
     * Construct text on surface
     * cut text on pass length with format
     */
    public function __construct($text, array $lengthCut = null)
    {
        if (empty($length)) {
            $this->length = $lengthCut['letters'];
            $this->text = substr($text, 0, $lengthCut['letters']).$lengthCut['format'];
        }

        $this->length = strlen($text);
        $this->text = $text;
    }

}