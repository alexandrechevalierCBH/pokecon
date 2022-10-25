<?php

// a dressor has a name and a collection of pokecons
class Dresseur
{
    use Collection;

    private string $name;

    public function __construct(string $name, array $collection)
    {
        $this->setName($name);
        $this->setCollection($collection);
    }

    /**
     * Get the value of name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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

    public function __toString(): string
    {
        return $this->getName() . " a " . count($this->getCollection()) . " pokecons: \n" . implode(" \n ", $this->getCollection()) . "\n";
    }
}
