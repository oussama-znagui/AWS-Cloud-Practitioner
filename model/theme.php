<?php
class Theme
{
    private $idTheme;
    private $theme;

    public function __construct()
    {
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }
}
