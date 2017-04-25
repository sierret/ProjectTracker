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
         $this->call('CourseTableSeeder');
        
        $this->command->info('Course table seeded!');
        
        $this->call('ProjectTableSeeder');
        
        $this->command->info('Projects table seeded!');
        $this->call('AdminTableSeeder');
        
        $this->command->info('Admin table seeded!');
         $this->call('UserTableSeeder');
        
        $this->command->info('User table seeded!');
         $this->call('UserTableSeeder');
        
        $this->command->info('User table seeded!');
         $this->call('CourseTableSeeder');
        
        $this->command->info('Course table seeded!');
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
            'projectName' => 'UWI Sport',
            'upload' => 'https://app.box.com/s/v87lgj24w43lkv5hgi477xbacp9jpr78',
            'coursename' => 'Web Systems',
            'courseCode' => 'INFO 3410',
             'degree' => 'Information Technology',
            'year' => 2000,
            'github' => 'https://github.com/akacoombs/StudentProjectTracker',
            'description' => 'Fake Data to test site functionality ',
            'groupMembers' => 'newuser@user.com person@user.com',
        ]);
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'New',
            'lastname' => 'User',
            'email' =>'another@user.com',
            'password' => bcrypt('password'),

        ]);
        DB::table('users')->insert([
            'firstname' => 'Another',
            'lastname' => 'Person',
            'email' =>'person@user.com',
            'password' => bcrypt('password'),

        ]);
    }
}
class CourseTableSeeder extends Seeder {

    public function run()
    {
        DB::table('courses')->insert([
            'coursename' => 'Web Systems',
            'coursecode' => 'INFO 3410',

        ]);
        DB::table('courses')->insert([
            'coursename' => 'Database Administration for Professionals',
            'coursecode' => 'INFO 3520',

        ]);
        DB::table('courses')->insert([
            'coursename' => 'Networking For Professionals',
            'coursecode' => 'INFO 3500',

        ]);
    }
}