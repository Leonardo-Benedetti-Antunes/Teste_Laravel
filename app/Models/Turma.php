<?php

namespace App\models;

use Illuminate\Support\Arr;

class Turma{
    public static function all(): array
    {   
        return [
            [
                "id" => 1,
                "turma" => "ADM",
                "sala" => "Sala 1"
            ],
            [
                "id" => 2,
                "turma" => "Contábeis",
                "sala" => "Laboratório de informática"
            ],
            [
                "id" => 3,
                "turma" => "ADS",
                "sala" => "Sala 2"
            ]
        ];
    }

    public static function find(int $id): array
    {
        $turmas = Arr::first(static::all(), fn($turmas) => $turmas["id"] == $id);

        if (! $turmas   ){
            abort(404);
        }

        return $turmas;
    }
}