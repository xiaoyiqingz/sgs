<?php
namespace SgS\Libraries\Core\Skills;

use SgS\Libraries\Core\Heros\Hero;

class JiJiang extends AbstractSkill
{
    public function __construct(Hero $hero)
    {
        parent::__construct();

        $this->name = '[激将]';
        $this->description = '主公技，每当你需要使用或打出一张杀时，你可以令其他蜀势力角色选择是否打出一张杀（视为由你使用或打出）。';
        $this->type = parent::SKILL_TYPE_KING;

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
