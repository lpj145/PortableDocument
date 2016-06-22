<?php

namespace PortableDocument\Page;

class Orientation
{
    const PORTRAIT = 0;
    const LANDSCAPE = 1;
    /**
     * All available measures for page.
     * @var array
     */
    private static $types = [
        Orientation::PORTRAIT,
        Orientation::LANDSCAPE,
    ];
    /**
     * @var string
     */
    private $orientation;

    /**
     * Size constructor.
     * @param $orientation
     */
    private function __construct($orientation)
    {
        $this->orientation = $orientation;
    }

    public function is($type)
    {
        return $type === $this->orientation;
    }

    public function isPortrait()
    {
        return $this->is(static::PORTRAIT);
    }

    public function isLandscape()
    {
        return $this->is(static::LANDSCAPE);
    }

    public static function create($orientation)
    {
        if (!in_array($orientation, static::$types)) {
            throw new \InvalidArgumentException("The orientation {$orientation} was not found");
        }
        return new static($orientation);
    }

    /**
     * Creates a Portrait Orientation
     * @return Orientation
     */
    public static function createPortrait()
    {
        return static::create(static::PORTRAIT);
    }

    /**
     * Creates a Landscape Orientation
     * @return Orientation
     */
    public static function createLandscape()
    {
        return static::create(static::LANDSCAPE);
    }
}
