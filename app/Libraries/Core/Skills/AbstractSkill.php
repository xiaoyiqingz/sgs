<?php
namespace SgS\Libraries\Core\Skills;

abstract class AbstractSkill
{
    const SKILL_TYPE_NORMAL = 1;
    const SKILL_TYPE_LOCK = 2;
    const SKILL_TYPE_LIMIT = 3;
    const SKILL_TYPE_KING = 4;
    const SKILL_TYPE_AWAKEN = 5;

    public $name;

    public $descroption;

    public $type;

    private $hero;

    public function __construct()
    {

    }

    abstract public function handle();

    abstract public function available();

    public function descroption()
    {
        echo $this->descroption;
    }
}
