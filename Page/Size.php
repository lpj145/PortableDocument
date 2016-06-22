<?php

namespace PortableDocument\Page;

/**
 * Class Size
 * @package PortableDocument\Page
 * @method Size createA3 createA3()
 * @method Size createA4 createA4()
 * @method Size createA5 createA5()
 * @method Size createLetter createLetter()
 * @method Size createLegal createLegal()
 */
class Size
{
    const A3 = 0;
    const A4 = 1;
    const A5 = 2;
    const LETTER = 3;
    const LEGAL = 4;
    /**
     * All available measures for page.
     * @var array It is
     */
    private static $measures = [
        Size::A3 => [841.89, 1190.55],
        Size::A4 => [595.28, 841.89],
        Size::A5 => [420.94, 595.28],
        Size::LETTER => [612, 792],
        Size::LEGAL => [612, 1008],
    ];
    private $width;
    private $height;

    /**
     * Size constructor.
     * @param $width
     * @param $height
     */
    private function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function is($type)
    {
        $size = static::create($type);
        return $this->equalsTo($size);
    }

    public function equalsTo(Size $size)
    {
        return ($this->getWidth() === $size->getWidth() && $this->getHeight() && $size->getHeight());
    }

    public static function create($size)
    {
        if (!isset(static::$measures[$size])) {
            throw new \InvalidArgumentException("The measure not found for {$size}");
        }
        return new static(static::$measures[$size][0], static::$measures[$size][1]);
    }

    public static function __callStatic($name, $arguments)
    {
        $size = strtoupper(str_replace('create', '', $name));
        $value = constant('static::' . $size);
        return static::create($value);
    }
}
