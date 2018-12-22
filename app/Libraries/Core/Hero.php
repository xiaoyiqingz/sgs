<?php

namespace SgS\Libraries\Core;

class Hero
{
    public $name;

    public $hp;

    public function __construct()
    {

    }

    public function __toString()
    {
        return sprintf("武将[%s]生成-(hp:%d) \n", $this->name, $this->hp);
    }
}
