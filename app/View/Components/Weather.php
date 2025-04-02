<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Weather extends Component
{
    public function __construct(private \App\service\Weather $weather)
    {}

    public function render(): View|Closure|string
    {
        return view('components.weather', ["isSunny" => $this->weather->isSunnyTomorow()]);
    }
}
