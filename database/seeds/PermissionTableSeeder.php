<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User as User;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = array(['name' => '----','create'=>false,'read'=>false,'update'=>false,'delete'=>false],
        ['name' => 'crud','create'=>true,'read'=>true,'update'=>true,'delete'=>true],
        ['name' => '-r--','create'=>false,'read'=>true,'update'=>false,'delete'=>false]);
    	DB::table('permissions')->insert( $permissions );
    }
}
