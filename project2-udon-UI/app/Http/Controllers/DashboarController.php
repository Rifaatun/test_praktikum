<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Cashout;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasRole('admin')) {

            return view('dashboard');

    } return view('dashboard2');
}
}