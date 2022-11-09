<?php

namespace App\Http\Controllers;

use App\Http\Resources\CaseResource;
use App\Models\CovidCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CaseController extends Controller
{
    public function index()
    {
        return CaseResource::collection(Cache::remember('cases', 60*60*24, function () {
            return CovidCase::all();
        }));
    }
}
