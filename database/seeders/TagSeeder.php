<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    private array $tags = [
        'Учебный',
        'Продакшн',
    ];

    public function run()
    {
        collect($this->tags)->each(fn($tag) => Tag::create(['value' => $tag]));
    }
}
