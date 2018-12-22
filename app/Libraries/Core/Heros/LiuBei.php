<?php
namespace SgS\Libraries\Core\Heros;

use SgS\Libraries\Core\Hero;

class LiuBei extends Hero
{
    public function __construct()
    {
        parent::__construct();

        $this->name = '刘备';

        $this->hp = 4;
    }
}
