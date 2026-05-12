<?php

namespace Molitor\Theme\Services;

abstract class Theme
{
    abstract public function getName(): string;

    abstract public function getSlug(): string;

    public function getDescription(): string
    {
        return '';
    }

    public function getPreview(): string
    {
        return '';
    }

    public function getConfig(): array
    {
        return [];
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'slug' => $this->getSlug(),
            'description' => $this->getDescription(),
            'preview' => $this->getPreview(),
            'config' => $this->getConfig(),
        ];
    }
}
