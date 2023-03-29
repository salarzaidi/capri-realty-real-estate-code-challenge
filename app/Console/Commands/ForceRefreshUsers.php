<?php

namespace App\Console\Commands;

use App\Traits\Users;
use Illuminate\Console\Command;

class ForceRefreshUsers extends Command
{
    use Users;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:force-refresh-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'flush local db data and repopulate with new data from https://cspf-dev-challenge.herokuapp.com/';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->refreshUserData();
    }
}
