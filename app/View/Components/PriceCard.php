<?php

namespace App\View\Components;

use App\DataTransferObjects\PriceCardDto;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PriceCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public PriceCardDto $priceCard
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.price-card');
    }
}
