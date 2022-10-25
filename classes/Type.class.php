<?php

abstract class Type
{
    private string $element;

    public function __construct(string $element)
    {
        $this->setElement($element);
    }

    /**
     * Get the value of element
     * @return string
     */
    public function getElement(): string
    {
        return $this->element;
    }

    /**
     * Set the value of element
     *
     * @return  self
     */
    private function setElement($element): self
    {
        $this->element = ucfirst($element);

        return $this;
    }
}
