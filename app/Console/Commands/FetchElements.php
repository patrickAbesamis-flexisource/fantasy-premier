<?php

namespace App\Console\Commands;

use App\Element;
use Illuminate\Console\Command;
use GuzzleHttp\Stream\Stream;
use GuzzleHttp\Client;
use App\Services\ElementService;

class FetchElements extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elements:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches the elements from the https://fantasy.premierleague.com/api/bootstrap-static/ endpoint';

    protected $elementService;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ElementService $elementService)
    {
        parent::__construct();
        $this->elementService = $elementService;
    }

    /**
     * Execute the console command.
     *
     * @return boolean
     */
    public function handle()
    {
        $fetchedElements = $this->elementService->fetchElementsGuzzle();
        return $this->elementService->storeFetchedElements($fetchedElements);
    }
}
