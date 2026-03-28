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

    /**
     * A téma saját view-könyvtárának elérési útja.
     * Ha null, a ThemeHelper az eredeti view-t tölti be.
     * Alapértelmezetten a csomag resources/views/themes/{slug} könyvtára.
     */
    public function getViewPath(): ?string
    {
        $path = realpath(__DIR__.'/../../resources/views/themes/'.$this->getSlug());

        return $path ?: null;
    }

    public function toArray()
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
