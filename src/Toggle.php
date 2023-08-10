<?php

namespace Davidpiesse\NovaToggle;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Toggle extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-toggle';

    public function readonly($isReadonly = true)
    {
        return $this->withMeta([
            'readonly' => $isReadonly,
        ]);
    }

    public function trueLabel($label)
    {
        return $this->withMeta([
            'true_label' => $label,
        ]);
    }

    public function falseLabel($label)
    {
        return $this->withMeta([
            'false_label' => $label,
        ]);
    }

    public function showLabels()
    {
        return $this->withMeta([
            'show_true_label' => true,
            'show_false_label' => true,
        ]);
    }

    public function showOnlyTrueLabel()
    {
        return $this->withMeta([
            'show_true_label' => true,
            'show_false_label' => false,
        ]);
    }

    public function showOnlyFalseLabel()
    {
        return $this->withMeta([
            'show_true_label' => false,
            'show_false_label' => true,
        ]);
    }

    public function resolveDefaultValue(NovaRequest $request)
    {
        return Field::resolveDefaultValue($request);
    }
}
