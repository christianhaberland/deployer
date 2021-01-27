<?php

namespace Deployer\Colour;

/**
 * Interface ColourGenerator
 * @package Deployer\Colour
 */
interface ColourGenerator
{
    /**
     * @return string
     */
    public function getColour(): string;
}