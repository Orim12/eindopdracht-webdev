<?php
namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPositions = Position::with(['employer', 'tags'])->latest()->take(2)->get();
        $recentPositions = Position::with(['employer', 'tags'])->latest()->skip(2)->take(2)->get();
        $tags = Tag::all();
        return view('welcome', [
            'featuredPositions' => $featuredPositions,
            'recentPositions' => $recentPositions,
            'tags' => $tags,
        ]);
    }
}
