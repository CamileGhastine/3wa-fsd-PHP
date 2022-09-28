<?php

/**
 * Exercice 5
 */

//Ecrire votre classe ici

class Rectangle
{
    private float $length;
    private float $width;

    public function __construct(string $length, string $width)
    {
        $this->length = (float)$length;
        $this->width = (float)$width;
    }

    public function is_square(): bool
    {
        return $this->length === $this->width;
    }

    public function area(): float
    {
        return $this->length * $this->width;
    }


    /**
     * Get the value of length
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}
