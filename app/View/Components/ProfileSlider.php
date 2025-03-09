<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public $listImage;
    public function __construct($listImage)
    {
        $this->listImage = $listImage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile-slider');
    }
}
