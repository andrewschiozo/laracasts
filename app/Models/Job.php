<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => 'R$ 10.000,00'],
            ['id' => 2, 'title' => 'Developer', 'salary' => 'R$ 8.000,00'],
            ['id' => 3, 'title' => 'Designer', 'salary' => 'R$ 6.000,00']
        ];
    }

    public static function find($id): array
    {
        $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

        if(!$job) {
            abort(404);
        }
        return $job;
    }
}
