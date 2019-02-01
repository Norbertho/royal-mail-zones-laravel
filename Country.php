<?php

namespace App;

class Country
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $this->normalize($name);
    }

    public function inUk(): bool
    {
        return in_array($this->name, config('countries.uk'));
    }
    public function inEu(): bool
    {
        return in_array($this->name, config('countries.eu'));
    }
    public function inZ2(): bool
    {
        return in_array($this->name, config('countries.z2'));
    }

    private function normalize(string $name): string
    {
        return (strtoupper($name));
    }
}