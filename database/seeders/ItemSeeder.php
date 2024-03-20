<?php

namespace Database\Seeders;

use Database\Factories\ItemFactory;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            'キャンディー',
            'チョコ',
            'クッキー',
            'プリン',
            '飴',
            'バナナ',
            'りんご',
            'チーズ',
            'トマト',
            'きゅうり',
            'にんじん',
            'だいこん',
            'しいたけ',
        ])->each(
            fn ($name) => ItemFactory::new()->create([
                'name' => $name,
            ])
        );
    }
}
