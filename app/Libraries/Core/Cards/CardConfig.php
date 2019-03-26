<?php
namespace SgS\Libraries\Core\Cards;

class CardConfig
{
    public static function cards()
    {
        $nums = [
            'A', '2', '3', '4', '5', '6', '7', '8', '9', '10',
            'J', 'Q', 'K',
        ];

        $colors = [
            new CardColorEnum(CardColorEnum::HEARTS),
            new CardColorEnum(CardColorEnum::DIAMOND),
            new CardColorEnum(CardColorEnum::SPADE),
            new CardColorEnum(CardColorEnum::CLUB),
        ];

        $cards = [];
        foreach ($nums as $num) {
            foreach ($colors as $color) {
                $cards[] = ['num' => $num, 'color' => $color];
            }
        }

        return $cards;
    }
}
