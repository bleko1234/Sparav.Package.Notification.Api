<?php


namespace Sparav\Notification\Model;


class Template
{

    public string $slug;
    public array $globalVariables = [];

    public function __construct(string $slug, array $globalVariables = [])
    {
        $this->slug = $slug;
        $this->globalVariables = $globalVariables;
    }

}
