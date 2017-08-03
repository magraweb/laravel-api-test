<?php
use Illuminate\Database\Seeder;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        $this->call('ArticlesTableSeeder');
    }
}
