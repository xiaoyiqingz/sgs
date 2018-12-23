<?php
namespace SgS\Libraries\Core\Heros;

use SgS\Libraries\Core\Hero\Heros;
use SgS\Libraries\Core\Skills\RenDe;
use SgS\Libraries\Core\Skills\JiJiang;

class LiuBei extends Hero
{
    public function __construct()
    {
        parent::__construct();

        $this->name = '刘备';

        $this->hp = 4;

        $this->init_skills();
    }

    public function init_skills()
    {
        $renDe = new RenDe($this);
        array_push($this->normals, $renDe);

        $jiJang = new JiJiang($this);
        array_push($this->kings, $jiJang);

        $this->skills['renDe'] = $renDe;
        $this->skills['jiJang'] = $jiJang;
    }

    public function handle($skill)
    {
        if (isset($this->skills[$skill])) {
            $this->skills[$skill]->handle();
        } else {
            sprintf("[%s]无此技能\n", $skill);
        }
    }
}
