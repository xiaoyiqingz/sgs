<?php
namespace SgS\Libraries\Core\Cards;

class Card
{
    protected $num;
    protected $color;
    protected $type;

    public function __construct($num, CardColorEnum $color)
    {
        $this->num = $num;
        $this->color = $color;
    }

    public function createCard($num, CardColorEnum $color)
    {
        return new self($num, $color);
    }

    public function __toString()
    {
        return sprintf('card:[%s, %s]', $this->num, $this->color);
    }
}
