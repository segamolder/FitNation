<?php

namespace App\Http\Controllers;

use App\Services\Page\CardioZoneService;

use Illuminate\Http\Request;

class CardioZoneController extends Controller
{
    public function __construct(protected CardioZoneService $cardioZoneService)
    {
    }

    public function __invoke()
    {
        $page = $this->cardioZoneService->getData();

        return view('training', compact('page'));
    }
}
