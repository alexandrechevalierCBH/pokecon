<?php

class Pokecon extends Type
{
    private string $name;
    private int $level;

    public function __construct(string $name, int $level, string $element)
    {
        parent::__construct($element);
        $this->setName($name);
        $this->setLevel($level);
    }

    /**
     * Get the value of name
     *@return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of level
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    private function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */
    private function setLevel($level): self
    {
        $this->level = $level;

        return $this;
    }

    public function __toString()
    {
        return $this->getName() . ' de niveau ' . $this->getLevel() . " et de type " . $this->getElement() . "\n";
    }
}
