<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = Author::create(['name' => 'John Lockdown']);
        $author2 = Author::create(['name' => 'Yanti Karantina']);
        $author3 = Author::create(['name' => 'Sari Corouna']);

        $book1 = Book::create(['title' => 'Kupinang Kau Dengan Basmalah', 'amount' => 3, 'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Lamar Aku Dengan Setangkai Bawang Merah', 'amount' => 2, 'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Berikan Aku Hati Mu', 'amount' => 3, 'author_id' => $author3->id]);
        $book4 = Book::create(['title' => 'Menyelami Lautan Jiwa', 'amount' => 4, 'author_id' => $author3->id]);
    }
}
