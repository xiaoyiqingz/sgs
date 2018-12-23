<?php
namespace SgS\Libraries\Core\Skills;

use SgS\Libraries\Core\Heros\Hero;

class RenDe extends AbstractSkill
{
    public function __construct(Hero $hero)
    {
        parent::__construct();

        $this->name = '[仁德]';
        $this->description = '出牌阶段，你可以将至少一张手牌交给一名其他角色，若你于此阶段内给出的牌首次达到两张，你回复1点体力。';
        $this->type = parent::SKILL_TYPE_NORMAL;

        $this->hero = $hero;
    }

    public function handle()
    {
        echo sprintf("%s 发动了 技能 %s\n", $this->hero->name, $this->name);
    }

    public function available()
    {
        return $true;
    }
}
