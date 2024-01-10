<?php

namespace App\Http\Controllers\SuperAdminPanelControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminPanelController extends Controller
{
    public function superDashboard(){
        return view('SuperAdminPanel.home');
    }
}
