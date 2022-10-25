<?php

trait Collection
{
    private array $collection = [];

    public function getCollection(): array
    {
        return $this->collection;
    }

    public function setCollection(array $collection): self
    {
        $this->collection = $collection;
        return $this;
    }

    public function __toString(): string
    {
        return implode(" \n ", $this->getCollection()) . "\n";
    }

    public function addPokecon(Pokecon $pokecon): self
    {
        $this->collection[] = $pokecon;
        return $this;
    }
}
