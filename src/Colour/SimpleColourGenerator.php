<?php

namespace Deployer\Colour;

/**
 * Class SimpleColourGenerator
 * @package Deployer\Colour
 */
final class SimpleColourGenerator implements ColourGenerator
{
    const HIMMELBLAU = '#4d91f7';

    public function getColour(): string
    {
        return self::HIMMELBLAU;
    }
}