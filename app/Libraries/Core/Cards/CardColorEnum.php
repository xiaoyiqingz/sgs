<?php
namespace SgS\Libraries\Core\Cards;

class CardColorEnum
{
    const HEARTS = 1;
    const DIAMOND = 2;
    const SPADE = 3;
    const CLUB = 4;

    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function __toString()
    {
        switch ($this->color) {
            case self::HEARTS:
                return 'H';
            case self::DIAMOND:
                return 'D';
            case self::SPADE:
                return 'S';
            case self::CLUB:
                return 'C';
        }
    }
}
