<?php

namespace App\Http\Controllers;

use App\Services\Page\GroupTrainingService;

class GroupTrainingController extends Controller
{
    public function __construct(protected GroupTrainingService $groupTrainingService)
    {
    }

    public function __invoke()
    {
        $page = $this->groupTrainingService->getData();

        return view('training', compact('page'));
    }
}
