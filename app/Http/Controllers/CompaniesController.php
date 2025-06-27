<?php
namespace App\Http\Controllers;

use App\Models\Employer;

class CompaniesController extends Controller
{
    public function index()
    {
        $employers = Employer::with('user')->get();
        return view('companies', compact('employers'));
    }
}
