<?php

namespace Database\Seeders;

use App\Models\AddEmployee;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            AddEmployee::create([
                'position' => $faker->numberBetween(0, 7),
                'start_date' => $faker->date(),
                'designation' => $faker->randomElement([
                    'Software Developer',
                    'Laravel Developer',
                    'Backend Engineer',
                    'Full Stack Developer',
                    'Frontend Developer',
                    'React.js Developer',
                    'Vue.js Developer',
                    'Mobile App Developer',
                    'DevOps Engineer',
                    'Data Analyst',
                    'Data Scientist',
                    'AI/ML Engineer',
                    'PHP Developer',
                    'Java Developer',
                    'Python Developer',
                    'Cloud Engineer',
                    'QA Engineer',
                    'Cybersecurity Analyst'
                ]),
                'name' => $faker->name,
                'contact_no' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'age' => $faker->numberBetween(22, 40),
                'country' => $faker->country,
                'city' => $faker->city,
                'prevoius_joining_date' => $faker->date(),
                'prevoius_employeer' => $faker->company,
                'last_withdran_salary' => $faker->numberBetween(20000, 100000),
                'prevoius_designation' => $faker->jobTitle,
                'prevoius_location' => $faker->city,
                'total_years_of_working' => $faker->numberBetween(1, 20),
                'employee_profile' => 'https://i.pravatar.cc/150?img=' . $faker->numberBetween(1, 70), // profile image
            ]);
        }
    }
}
