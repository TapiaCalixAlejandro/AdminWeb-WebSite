<?php

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name' => 'Subategoría 1',
            'slug' => 'subcategoría-1'
        ]);
        Subcategory::create([
            'name' => 'Subategoría 2',
            'slug' => 'subcategoría-2'
        ]);
        Subcategory::create([
            'name' => 'Subategoría 3',
            'slug' => 'subcategoría-3'
        ]);
        Subcategory::create([
            'name' => 'Subategoría 4',
            'slug' => 'subcategoría-4'
        ]);
        Subcategory::create([
            'name' => 'Subategoría 5',
            'slug' => 'subcategoría-5'
        ]);
    }
}
