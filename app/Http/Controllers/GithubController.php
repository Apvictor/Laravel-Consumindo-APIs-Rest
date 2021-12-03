<?php

namespace App\Http\Controllers;

use App\Services\GithubService;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function buscar(GithubService $githubService)
    {
        $repositorios = $githubService->buscarRepositorios();
        
        return view('github.buscar', compact('repositorios'));
    }
}
