<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        return view('dashboard', compact('clients'));
    }
}
