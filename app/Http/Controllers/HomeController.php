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

    public function index(Request $request)
    {
        $willVariable = 776;
        $this->swapRabit();
        $this->swapRabit();

        $formData = $request->session()->get('formData', []);

        return view(
            'home',
            ['willVariable' => $willVariable,
            'rabit' => $this->rabit,
            'formData' => $formData]
        );
    }
}
