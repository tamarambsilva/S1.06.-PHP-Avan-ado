<?php

require_once "Theme.php";
require_once "Type.php";

class Didatic
{
    public string $name;
    public Theme $theme;
    public string $url;
    public Type $type;

    public function __construct(
        string $name,
        Theme $theme,
        string $url,
        Type $type
    ) {
        $this->name = $name;
        $this->theme = $theme;
        $this->url = $url;
        $this->type = $type;
    }
}