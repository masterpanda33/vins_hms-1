<?php

namespace euro_hms\Http\Controllers;

use Brotzka\DotenvEditor\DotenvEditor;

class EnvController extends Controller
{
    public function test()
    {
        $env = new DotenvEditor();
    }
}
