<?php

namespace App\Http\Controllers;

use App\Services\Page\PersonalTrainingService;
use Illuminate\Http\Request;

class PersonalTrainingController extends Controller
{
    public function __construct(protected PersonalTrainingService $personalTrainingService)
    {
    }

    public function __invoke()
    {
        $page = $this->personalTrainingService->getData();

        return view('training', compact('page'));
    }
}
