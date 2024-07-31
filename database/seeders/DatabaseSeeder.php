<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Course;
use App\Models\Rent;
use App\Models\Student;
use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Tenant::factory(10)->create();
        Rent::factory(20)->create();
        // Rent::factory(10)->create(['tenant_id' => $tenant->id]);

      

        // one to many seed
        // 10 authors with 5 books Create 5 books for each author
        // Author::factory(10)->create()->each(function ($author) {
            
        //     Book::factory(5)->create(['author_id' => $author->id]);
        // });
     

        // many to many seeder
         // Create 10 students
        //  $students = Student::factory(10)->create();

         // Create 5 courses
        //  $courses = Course::factory(5)->create();
 
         // Attach each student to 2 random courses
        //  $students->each(function ($student) use ($courses) {
        //      $student->courses()->attach(
        //          $courses->random(2)->pluck('id')->toArray()
        //      );
        //  });

    }
}
