<?php

namespace SgS\Libraries\Core\Heros;

class Hero
{
    public $name;

    public $hp;

    public $normals = [];

    public $locks = [];

    public $limits = [];

    public $kings = [];

    public $awakens = [];

    public $skills = [];

    public function __construct()
    {

    }

    public function __toString()
    {
        $text = sprintf("武将[%s]生成-(hp:%d) \n", $this->name, $this->hp);

        foreach ($this->skills as $key => $skill) {
            $skill_desc = sprintf("  技能%s:%s|%s \n", $key, $skill->name, $skill->description);

            $text .= $skill_desc;
        }

        return $text;
    }

    public function skill_normals()
    {
        return $this->normals;
    }

    public function skill_locks()
    {
        return $this->locks();
    }

    public function skill_limits()
    {
        return $this->limits;
    }

    public function skill_kings()
    {
        return $this->kings;
    }

    public function skill_awakens()
    {
        return $this->awakens;
    }

    public function skills()
    {
        return array_keys($this->skills);
    }
}
