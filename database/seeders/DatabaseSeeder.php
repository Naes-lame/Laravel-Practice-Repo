<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Department;
use App\Models\Section;
use App\Models\Student;
use App\Models\Profile;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $department = Department::create(['name' => 'Computer Department']);
        $sections = ['Animations', 'IT', 'Computer Science'];

        foreach ($sections as $name) {
            $section = Section::create([
                'name' => $name,
                'department_id' => $department->id,
            ]);

            Student::factory()
                ->count(20)
                ->create(['section_id' => $section->id])
                ->each(function ($student) {
                    $student->profile()->create([
                        'address' => fake()->address(),
                        'birthday' => fake()->date('Y-m-d', '2005-01-01'),
                    ]);
                });
        }

    }
}
