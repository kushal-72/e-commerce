<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductMaterialType;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materialType = [
            ['name' => 'Cotton', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Poplin Cotton', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Percale Cotton', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Muslin Cotton', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denim Cotton', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Canvas Cotton', 'created_at' => now(), 'updated_at' => now()],


            ['name' => 'Linen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Damask Linen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tussar Linen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Irish Linen', 'created_at' => now(), 'updated_at' => now()],


            ['name' => 'Wool', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tweed Wool', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Flannel Wool', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cashmere Wool', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Merino Wool', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gabardine Wool', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Silk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chiffon Silk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taffeta Silk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Satin Silk', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Polyester', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nylon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spandex', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rayon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Acrylic', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Denim', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stretch Denim', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Velvet', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Silk Velvet', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cotton Velvet', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Satin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jersey', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cotton Jersey', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Modal Jersey', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Muslin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khaki', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cotton Khaki', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Twill Khaki', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Rayon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chambray', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cotton Chambray', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Linen Chambray', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Chiffon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Silk Chiffon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Polyester Chiffon', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Polyurethane (PU) Leather', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Faux Leather', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vegan Leather', 'created_at' => now(), 'updated_at' => now()],

        ];
        ProductMaterialType::insert($materialType);
    }
}
