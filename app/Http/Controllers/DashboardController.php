<?php

namespace App\Http\Controllers;

use App\Http\Resources\DashboardResource;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DashboardResource::collection(User::all());
        return Inertia::render('Dashboard', compact('users'));
    }
}
