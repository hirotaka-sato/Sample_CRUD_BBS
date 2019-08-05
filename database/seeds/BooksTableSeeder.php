<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        for ($i=1; $i<=50; $i++) {
            $book = [
                'name' => '本の名前（書籍）' . $i,
                'bookdetail_id' => $i,
                'author_id' => $i,
                'publisher_id' => $i,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('books')->insert($book);
        }
    }
}
