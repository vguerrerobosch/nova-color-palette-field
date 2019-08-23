<?php

namespace Vguerrerobosch\ColorPalette;

use Laravel\Nova\Fields\Field;

class ColorPalette extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color-palette';

    public function colors($value)
    {
        return $this->withMeta([
            'colors' => $value,
        ]);
    }
}
