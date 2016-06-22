<?php

namespace PortableDocument\Engine;

use PortableDocument\Element\ElementInterface;

abstract class Command
{
    /**
     * @var mixed
     */
    protected $engine;

    /**
     * Command constructor.
     * @param $engine
     */
    public function __construct($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @param ElementInterface $element
     * @param EngineInterface $engine
     * @return Command
     */
    public static function create(ElementInterface $element, EngineInterface $engine)
    {
        $commandName = static::discoverCommandName($element);
        $commandClass = 'PortableDocument\Engine\\' . $engine->getName() . '\\' . $commandName;
        return new $commandClass($engine->getEngine());
    }

    protected static function discoverCommandName(ElementInterface $element)
    {
        return substr(strrchr(get_class($element), '\\'), 1);
    }

    /**
     * @param ElementInterface $element
     * @return void
     */
    abstract public function render(ElementInterface $element);
}
