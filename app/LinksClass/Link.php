<?php

namespace App\LinksClass;

class Link {
    private bool $external = false;

    public function __construct(
        private string $name,
        private ?string $url = "#",
    )
    {}

    public function setExternal(): self
    {
        $this->external = true;
        return $this;
    }

    public function isExternal(): bool {
        return $this->external;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getUrl(): string {
        return $this->url;
    }

}