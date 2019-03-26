<?php
namespace SgS\Libraries\Core\Cards;

class CardsFactory
{
    public $deck = [];

    public $count = 1;

    public function creator($count=1)
    {
        $this->count = $count;

        $deckCard = CardConfig::cards();
        do {
            $cards = [];
            foreach ($deckCard as $card) {
                $cards[] = new Card($card['num'], $card['color']);
            }

            // 随机排序
            shuffle($cards);
            $this->deck[] = $cards;

            $count--;
        } while ($count > 0);

        return $this->deck;
    }
}
