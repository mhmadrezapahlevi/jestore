<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Package;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        // Data Games
        $games = [
            [
                'code' => 'ml',
                'name' => 'Mobile Legends',
                'developer' => 'Moonton',
                'icon' => '⚔️',
                'bg_gradient' => 'linear-gradient(160deg,#1a2f6b,#0a1230)',
                'currency' => 'Diamond',
                'is_popular' => true,
            ],
            [
                'code' => 'ff',
                'name' => 'Free Fire',
                'developer' => 'Garena',
                'icon' => '🔥',
                'bg_gradient' => 'linear-gradient(160deg,#c96a10,#3d1c02)',
                'currency' => 'Diamond',
                'is_popular' => true,
            ],
            [
                'code' => 'ffx',
                'name' => 'Free Fire MAX',
                'developer' => 'Garena',
                'icon' => '💥',
                'bg_gradient' => 'linear-gradient(160deg,#8a1010,#2a0404)',
                'currency' => 'Diamond',
                'is_popular' => true,
            ],
            [
                'code' => 'hok',
                'name' => 'Honor of Kings',
                'developer' => 'Yostar Games',
                'icon' => '👑',
                'bg_gradient' => 'linear-gradient(160deg,#6b5a10,#2a2202)',
                'currency' => 'Token',
                'is_popular' => true,
            ],
            [
                'code' => 'pubg',
                'name' => 'PUBG Mobile',
                'developer' => 'Yostar Games',
                'icon' => '🎖️',
                'bg_gradient' => 'linear-gradient(160deg,#4a5a1a,#141c04)',
                'currency' => 'UC',
                'is_popular' => true,
            ],
            [
                'code' => 'val',
                'name' => 'Valorant',
                'developer' => 'Riot Games',
                'icon' => '🎯',
                'bg_gradient' => 'linear-gradient(160deg,#a02020,#2a0505)',
                'currency' => 'VP',
                'is_popular' => true,
            ],
            [
                'code' => 'gi',
                'name' => 'Genshin Impact',
                'developer' => 'HoYoverse',
                'icon' => '🌟',
                'bg_gradient' => 'linear-gradient(160deg,#1a5a6b,#041a20)',
                'currency' => 'Genesis',
                'is_popular' => true,
            ],
            [
                'code' => 'aov',
                'name' => 'Arena of Valor',
                'developer' => 'Level Infinite',
                'icon' => '🛡️',
                'bg_gradient' => 'linear-gradient(160deg,#5a1a6b,#1a0420)',
                'currency' => 'Voucher',
                'is_popular' => false,
            ],
            [
                'code' => 'mcg',
                'name' => 'Magic Chess Go Go',
                'developer' => 'Moonton',
                'icon' => '♟️',
                'bg_gradient' => 'linear-gradient(160deg,#205a2a,#04180a)',
                'currency' => 'Magic',
                'is_popular' => false,
            ],
            [
                'code' => 'cod',
                'name' => 'Call of Duty Mobile',
                'developer' => 'Garena',
                'icon' => '🔫',
                'bg_gradient' => 'linear-gradient(160deg,#3a3a3a,#0d0d0d)',
                'currency' => 'CP',
                'is_popular' => false,
            ],
        ];

        // Insert Games
        foreach ($games as $gameData) {
            Game::create($gameData);
        }

        // Data Packages
        $packages = [
            'ml' => [
                ['name' => '86 (78+8)', 'price' => 21000],
                ['name' => '172 (156+16)', 'price' => 41000],
                ['name' => '257 (234+23)', 'price' => 62000],
                ['name' => '344 (312+32)', 'price' => 82000],
                ['name' => '429 (405+24)', 'price' => 102000],
                ['name' => '514 (468+46)', 'price' => 122000],
                ['name' => '706 (624+82)', 'price' => 167000],
                ['name' => '1050 (936+114)', 'price' => 249000],
                ['name' => '2010 (1782+228)', 'price' => 476000],
                ['name' => 'Weekly Diamond', 'price' => 28000],
                ['name' => 'Twilight Pass', 'price' => 150000],
                ['name' => 'Membership Mingguan', 'price' => 66000],
            ],
            'ff' => [
                ['name' => '5 Diamond', 'price' => 7000],
                ['name' => '12 Diamond', 'price' => 16000],
                ['name' => '50 Diamond', 'price' => 68000],
                ['name' => '70 Diamond', 'price' => 94000],
                ['name' => '140 Diamond', 'price' => 185000],
                ['name' => '355 Diamond', 'price' => 465000],
                ['name' => '720 Diamond', 'price' => 930000],
                ['name' => 'Membership Mingguan', 'price' => 27000],
                ['name' => 'Level Up Pass', 'price' => 25000],
            ],
            'ffx' => [
                ['name' => '5 Diamond', 'price' => 7000],
                ['name' => '12 Diamond', 'price' => 16000],
                ['name' => '50 Diamond', 'price' => 68000],
                ['name' => '140 Diamond', 'price' => 185000],
                ['name' => '355 Diamond', 'price' => 465000],
                ['name' => 'Membership Mingguan', 'price' => 27000],
            ],
            'hok' => [
                ['name' => '28 Token', 'price' => 5000],
                ['name' => '88 Token', 'price' => 15000],
                ['name' => '257 Token', 'price' => 42000],
                ['name' => '688 Token', 'price' => 105000],
                ['name' => '1888 Token', 'price' => 275000],
                ['name' => 'Weekly Card', 'price' => 20000],
            ],
            'pubg' => [
                ['name' => '60 UC', 'price' => 13000],
                ['name' => '325 UC', 'price' => 66000],
                ['name' => '660 UC', 'price' => 130000],
                ['name' => '1800 UC', 'price' => 330000],
                ['name' => '3850 UC', 'price' => 660000],
                ['name' => '8100 UC', 'price' => 1320000],
            ],
            'val' => [
                ['name' => '475 VP', 'price' => 55000],
                ['name' => '1000 VP', 'price' => 110000],
                ['name' => '1000+50 VP', 'price' => 120000],
                ['name' => '2050 VP', 'price' => 220000],
                ['name' => '3650 VP', 'price' => 385000],
                ['name' => '5350+150 VP', 'price' => 550000],
            ],
            'gi' => [
                ['name' => '60 Genesis', 'price' => 15000],
                ['name' => '330 Genesis', 'price' => 75000],
                ['name' => '1090 Genesis', 'price' => 235000],
                ['name' => '2240 Genesis', 'price' => 470000],
                ['name' => '3880 Genesis', 'price' => 790000],
                ['name' => 'Blessing of Welkin', 'price' => 80000],
            ],
            'aov' => [
                ['name' => '40 Voucher', 'price' => 10000],
                ['name' => '210 Voucher', 'price' => 50000],
                ['name' => '430 Voucher', 'price' => 100000],
                ['name' => '1100 Voucher', 'price' => 250000],
            ],
            'mcg' => [
                ['name' => '80 Magic', 'price' => 12000],
                ['name' => '400 Magic', 'price' => 58000],
                ['name' => '830 Magic', 'price' => 118000],
                ['name' => '1700 Magic', 'price' => 235000],
            ],
            'cod' => [
                ['name' => '80 CP', 'price' => 12000],
                ['name' => '420 CP', 'price' => 60000],
                ['name' => '800 CP', 'price' => 115000],
                ['name' => '2400 CP', 'price' => 330000],
            ],
        ];

        // Insert Packages
        foreach ($packages as $gameCode => $packageList) {
            $game = Game::where('code', $gameCode)->first();
            if ($game) {
                foreach ($packageList as $packageData) {
                    Package::create([
                        'game_id' => $game->id,
                        'name' => $packageData['name'],
                        'price' => $packageData['price'],
                    ]);
                }
            }
        }
    }
}