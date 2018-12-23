<?php

namespace SgS\Http\Controllers;

use Illuminate\Http\Request;

use SgS\Libraries\Core\Heros\CaoCao;
use SgS\Libraries\Core\Heros\LiuBei;

class TestController extends Controller
{
    public function test(Request $request)
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
}
