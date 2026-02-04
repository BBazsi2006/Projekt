<?php

namespace App\Http\Controllers;

use App\Models\Ember;
use Illuminate\Http\Request;

class EmberController extends Controller
{
    public function index()
    {
        return Ember::all();
    }
}
