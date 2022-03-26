<?php

namespace Database\Seeders;


use App\Models\MasterData\ConfigPayment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_payment = [
                [
                    'fee' => '150000',
                    'vat' => '20', //vat is percentage
                    'created_at' => '2022-03-26 00:00:00',
                    'updated_at' => '2022-03-26 00:00:00',
                ],
        ];

        ConfigPayment::insert($config_payment);
    }
}
