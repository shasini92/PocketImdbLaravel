<?php

namespace App\Console\Commands;

use App\Movie;
use Illuminate\Console\Command;

class IndexMoviesTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:index';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert Movies table into an Elasticsearch index';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $console = new \Symfony\Component\Console\Output\ConsoleOutput();
        $console->writeln("ElasticSearch Indexer has started..");
        Movie::deleteIndex();
        Movie::createIndex();
        $movies = Movie::all();
        foreach ($movies as $movie) {
            $movie->addToIndex();
        }


        if ($movie === "success") {
            return $console->writeln("Movies table was successfully indexed");
        }
        return $console->writeln($movie);
    }
}
