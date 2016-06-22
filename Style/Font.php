<?php
/**
 * Created by PhpStorm.
 * User: aspinelli
 * Date: 6/22/16
 * Time: 9:27 AM
 * @author Antonio Spinelli <antonio.spinelli@kanui.com.br>
 */

namespace PortableDocument\Style;

class Font
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $size;

    /**
     * Font constructor.
     * @param string $name
     * @param int $size
     */
    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
}
