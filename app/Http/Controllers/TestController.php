<?php

namespace SgS\Http\Controllers;

use Illuminate\Http\Request;

use SgS\Libraries\Core\Heros\CaoCao;
use SgS\Libraries\Core\Heros\LiuBei;

use SgS\Libraries\Core\Cards\CardsFactory;

class TestController extends Controller
{
    public function hero(Request $request)
    {
        $liubei = new LiuBei;
        echo $liubei;

        echo "\n";

        $caocao = new CaoCao;
        echo $caocao;

        echo "\n";

        $liubei_skills = $liubei->skills();

        foreach ($liubei_skills as $skill) {
            $liubei->handle($skill);
        }

        return ['code' => 20000, 'message' => 'Success'];
    }

    public function cards(Request $request)
    {
        $factory = new CardsFactory();
        $decks = $factory->creator(5);

        foreach ($decks as $deck) {
            echo "-----------\n";
            echo 'count:' . count($deck) . "\n";
            foreach ($deck as $card) {
                echo $card . "\n";
            }

            echo "------------\n";
        }

        return ['code' => 20000, 'message' => 'Success'];
    }
}
