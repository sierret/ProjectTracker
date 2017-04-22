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
        
        $this->call('ProjectTableSeeder');
        
        $this->command->info('Projects table seeded!');
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
class ProjectTableSeeder extends Seeder {

    public function run()
    {
        DB::table('projects')->insert([
            'projectName' => 'UWI Sport(Fake Data for Exhibition)',
            'upload' => 'https://app.box.com/s/v87lgj24w43lkv5hgi477xbacp9jpr78',
            'coursename' => 'Mind Spec',
            'courseCode' => 'COCR 1001',
             'degree' => 'Sports Management',
            'year' => 2000,
            'github' => 'https://github.com/akacoombs/StudentProjectTracker',
            'description' => 'Fake Data to test site functionality ',
            'groupMembers' => 'newuser@user.com',
        ]);
    }

}
