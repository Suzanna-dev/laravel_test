<?php

namespace App\Models;
use Illuminate\Support\Arr;

final class Job {

    public static function all():array {

        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '100000',
                'location' => 'Remote',
            ],
            [
                'id' => 2,
                'title' => 'Data Scientist',
                'salary' => '120000',
                'location' => 'New York',
            ],
            [
                'id' => 3,    
                'title' => 'Product Manager',
                'salary' => '110000',
                'location' => 'San Francisco',
            ]
    ];

    }
    

    public static function find(int $id):array{
        
        $job =  Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }
        return $job;
    }
}
