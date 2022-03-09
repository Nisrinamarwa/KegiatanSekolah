<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Student;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $admin = factory(User::class)->create([
            'name'     => 'Kim Taehyung',
            'email'    => 'taehyung@bighit.com',
            'email_verified_at' => now(),
            'password' => bcrypt('bighit'),
        ]);

        $admin->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($admin->email);
        $this->command->warn('Password is "bighit"');

        // bendahara
        $bendahara = factory(User::class)->create([
            'name'     => 'Kim Namjoon',
            'email'    => 'namjoon@bighit.com',
            'email_verified_at' => now(),
            'password' => bcrypt('bighit'),
        ]);

        $bendahara->assignRole('bendahara');

        $this->command->info('>_ Here is your bendahara details to login:');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "bighit"');

        // siswa
        $student = factory(User::class)->create([
            'name'     => 'Jeon Jungkook',
            'email'    => 'jungkook@bighit.com',
            'email_verified_at' => now(),
            'password' => bcrypt('bighit'),
        ]);

        if($student->save()){
            $anggota = Student::create([
                'user_id'   => $student->id,
            ]);
        };

        $student->assignRole('student');

        $this->command->info('>_ Here is your student details to login:');
        $this->command->warn($student->email);
        $this->command->warn('Password is "bighit"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}