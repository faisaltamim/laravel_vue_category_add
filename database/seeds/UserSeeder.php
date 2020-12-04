<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->defaultUserSeed();

        $faker = Faker\Factory::create();
        foreach ( range( 1, 10 ) as $index ) {

            User::create( [
                'name'     => $faker->name,
                'email'    => $faker->email,
                'password' => bcrypt( '12345' ),
            ] );

        }

    }

    function defaultUserSeed() {
        User::create( [
            'name'     => "Faisal Tamim",
            'email'    => "mdf41401@gmail.com",
            'password' => bcrypt( '12345' ),
        ] );
    }
}
