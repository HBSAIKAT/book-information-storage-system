<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Dummy data for the books table
        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publisher' => 'J.B. Lippincott & Co.',
            'year_published' => 1960,
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'publisher' => 'Secker & Warburg',
            'year_published' => 1949,
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publisher' => 'Charles Scribner\'s Sons',
            'year_published' => 1925,
        ]);

        Book::create([
            'title' => 'Moby Dick',
            'author' => 'Herman Melville',
            'publisher' => 'Harper & Brothers',
            'year_published' => 1851,
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'publisher' => 'T. Egerton, Whitehall',
            'year_published' => 1813,
        ]);
    }
}
