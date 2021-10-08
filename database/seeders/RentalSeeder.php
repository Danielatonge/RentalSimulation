<?php

namespace Database\Seeders;

use App\Models\Rental;
use Illuminate\Database\Seeder;


class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rentalQuantity = 20;

        Rental::factory()->times($rentalQuantity)->create();
    }
}
