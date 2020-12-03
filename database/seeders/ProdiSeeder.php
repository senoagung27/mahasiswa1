<?php
 
use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;
 
class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
        	
        	DB::table('fakultas')->insert([
        		'nama_prodi' => $faker->nama_prodi,
        	]);
 
        }
 
    }
}