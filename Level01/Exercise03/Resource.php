<?php

class Resource
{
    private string $name;
    private Subject $subject;
    private string $url;
    private ResourceType $type;

    public function __construct(
        string $name,
        Subject $subject,
        string $url,
        ResourceType $type
    ) {
        $this->name = $name;
        $this->subject = $subject;
        $this->url = $url;
        $this->type = $type;
    }

    public function __toString(): string
    {
        return "Name: " . $this->name .
            " | Subject: " . $this->subject->value .
            " | URL: " . $this->url .
            " | Type: " . $this->type->value;
    }
}