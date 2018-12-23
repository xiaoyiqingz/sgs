<?php
namespace SgS\Libraries\Core\Heros;

use SgS\Libraries\Core\Hero\Heros;

class CaoCao extends Hero
{
    public function __construct()
    {
        parent::__construct();

        $this->name = '曹操';

        $this->hp = 4;
    }
}
