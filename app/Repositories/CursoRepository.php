<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class CursoRepository
{

    public function list()
    {
        $response = Http::get('http://172.24.192.1:3002/api/treinaweb/curso');

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }
    public function show(string $id)
    {
        $response = Http::get("http://172.24.192.1:3002/api/treinaweb/curso?id={$id}");

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }

    public function create(array $dados)
    {
        $response = Http::post('http://172.24.192.1:3002/api/treinaweb/curso', $dados);

        return $response->successful();
    }

    public function update(string $id, array $dados)
    {
        $response = Http::put("http://172.24.192.1:3002/api/treinaweb/curso?id={$id}",  $dados);

        return $response->successful();
    }

    public function delete(string $id)
    {
        $response = Http::delete("http://172.24.192.1:3002/api/treinaweb/curso?id={$id}");

        return $response->successful();
    }
}
