<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view("data.index", ['portfolios' => $portfolios]);
    }

}
