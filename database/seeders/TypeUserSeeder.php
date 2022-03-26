<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
            {
                        $type_user = [
                            [
                                'name' => 'Admin',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Dokter',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                            [
                                'name' => 'Pasien',
                                'created_at' => '2022-03-26 00:00:00',
                                'updated_at' => '2022-03-26 00:00:00',
                            ],
                        ];

                    TypeUser::insert($type_user);
            }
}

