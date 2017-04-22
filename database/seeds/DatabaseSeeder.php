<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->call('AdminTableSeeder');

        $this->command->info('Admin table seeded!');
    }

}

class AdminTableSeeder extends Seeder {

    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Initial Admin',
            'email' =>'admin@pt.com',
            'password' => bcrypt('adminpass'),
        ]);
    }


}
