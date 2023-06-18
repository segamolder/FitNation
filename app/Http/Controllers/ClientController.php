<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function save(ClientRequest $request)
    {
        $client = Client::create($request->validated());

        return redirect()->back();
    }
}
