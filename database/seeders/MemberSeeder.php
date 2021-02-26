<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('members')
     ->insert([
         "name"=>str::random(10),
         "email"=>str::random(10)."@gmail.com",
         "address"=>str::random(10)
     ]); 
    }
}
