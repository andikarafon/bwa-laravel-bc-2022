<?php

namespace Database\Seeders;

use App\Models\MasterData\Specialist;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialist = [
                            [
                                'name' => 'Dermatology',
                                'price' => '250000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Dentist',
                                'price' => '450000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Endodontics',
                                'price' => '150000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'General Dentistry',
                                'price'  => '120000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Oral and Maxillofacial Surgery',
                                'price' => '80000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Orthodontics',
                                'price' => '900000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Pediatric Dentistry',
                                'price' => '300000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Periodontics',
                                'price' => '250000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Prosthodontics',
                                'price' => '250000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Radiology',
                                'price' => '250000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Surgery',
                                'price' => '250000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Urology',
                                'price' => '250000',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                ];

                //array data 

                Specialist::insert($specialist);
    }
}
