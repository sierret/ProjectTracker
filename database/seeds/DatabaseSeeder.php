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
            'coursename' => 'Web Systems',
            'courseCode' => 'INFO 3410',
             'degree' => 'Information Technology',
            'year' => 2000,
            'github' => 'https://github.com/preesytt/ProjectTracker',
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
            'pic' => 'https://img.rasset.ie/000d5252-800.jpg',
            'email' =>'another@user.com',
            'password' => bcrypt('password'),
            'status' => 'APPROVED',

        ]);
        DB::table('users')->insert([
            'firstname' => 'Another',
            'lastname' => 'Person',
            'pic' => 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjvvti967_TAhWDZiYKHWvzA2kQjRwIBw&url=http%3A%2F%2Fwww.channel4.com%2Fprogrammes%2Ftravel-man-48-hours-in&psig=AFQjCNFoQ515ECrFQVCopYKumYbSoQ9Elg&ust=1493217585055501',
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