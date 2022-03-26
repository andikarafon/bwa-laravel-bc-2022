<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //create data seeder   
        $consultation = [
            [
                'name' => 'Jantung Sesak',
                'created_at' => '2022-03-26 00:00:00',
                'updated_at' => '2022-03-26 00:00:00',
            ],
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => '2022-03-26 00:00:00',
                'updated_at' => '2022-03-26 00:00:00',
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => '2022-03-26 00:00:00',
                'updated_at' => '2022-03-26 00:00:00',
            ],
    ];

    Consultation::insert($consultation);
    }
}
