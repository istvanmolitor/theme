<?php

namespace Molitor\Theme\Services;

use Molitor\Setting\Services\SettingForm;

class ThemeSettingForm extends SettingForm
{
    public function getSlug(): string
    {
        return 'theme';
    }

    public function getLabel(): string
    {
        return 'Theme Settings';
    }

    public function getForm(): array
    {
        return [
            'name' => 'Theme Settings',
            'schema' => [
                'primary_color' => [
                    'type' => 'color',
                    'label' => 'Primary Color',
                    'default' => '#3b82f6',
                ],
                'secondary_color' => [
                    'type' => 'color',
                    'label' => 'Secondary Color',
                    'default' => '#10b981',
                ],
            ],
        ];
    }

    public function getFormFields(): array
    {
        return [
            'primary_color',
            'secondary_color',
        ];
    }

    public function getDefaults(): array
    {
        return [
            'primary_color' => '#3b82f6',
            'secondary_color' => '#10b981',
        ];
    }
}
