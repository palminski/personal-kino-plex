<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private bool $rabit = true;

    private function swapRabit() {
        $this->rabit = !$this->rabit;
        return $this->rabit;
    }

    public function index()
    {
        $willVariable = 776;
        $this->swapRabit();
        $this->swapRabit();
        return view(
            'home',
            ['willVariable' => $willVariable,
            'rabit' => $this->rabit]
        );
    }
}
