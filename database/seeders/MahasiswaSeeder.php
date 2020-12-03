<?php
 
use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;
 
class MahasiswaSeeder extends Seeder
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
 
        	
        	DB::table('mahasiswa')->insert([
        		'nama' => $faker->nama,
                'jenis_kelamin' => $faker->jenis_kelamin,
                'agama' => $faker->agama,
                'tanggal_lahir' => $faker->tanggal_lahir,
                'alamat' => $faker->alamat,
        	]);
 
        }
 
    }
}