<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Edu;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $experiences = Experience::latest()->get();
        $portfolios = Portfolio::latest()->get();
        $edus = Edu::latest()->get();

        return view('index', [
            'experiences' => $experiences,
            'portfolios' => $portfolios,
            'edus' => $edus,
        ]);
    }
}
