<?php

namespace App\Http\Controllers\ClientPanelControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientPanelController extends Controller
{
    public function clientDashboard(){
        return view('ClientPanel.home');
    }
}
