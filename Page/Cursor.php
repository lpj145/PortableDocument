<?php

namespace PortableDocument\Page;

class Cursor
{
    /**
     * @var int
     */
    private $horizontal;
    /**
     * @var int
     */
    private $vertical;

    /**
     * Cursor constructor.
     * @param int $horizontal
     * @param int $vertical
     */
    public function __construct($horizontal = 0, $vertical = 0)
    {
        $this->horizontal = $horizontal;
        $this->vertical = $vertical;
    }

    /**
     * @return int
     */
    public function getHorizontal()
    {
        return $this->horizontal;
    }

    /**
     * @return int
     */
    public function getVertical()
    {
        return $this->vertical;
    }

    public function offsetHorizontal($position)
    {
        return new static($this->getHorizontal() + $position, $this->getVertical());
    }

    public function offsetVertical($position)
    {
        return new static($this->getHorizontal(), $this->getVertical() + $position);
    }
}
