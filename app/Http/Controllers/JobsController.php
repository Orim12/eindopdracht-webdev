<?php
namespace App\Http\Controllers;

use App\Models\Position;

class JobsController extends Controller
{
    public function index()
    {
        $positions = Position::with(['employer', 'tags'])->latest()->paginate(10);
        return view('jobs', compact('positions'));
    }
}
