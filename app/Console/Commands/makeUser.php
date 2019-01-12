<?php

namespace App\Console\Commands;

use App\Contact;
use Illuminate\Console\Command;

class makeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:makeUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes a contact user every minute';

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
        echo "Inserting user\n";
        $user = new Contact();
        $user->name = "testcron";
        $user->email = "testtest@testtest.be";
        $user->user_id = "1";
        $user->save();
        echo "Job done\n";
    }
}
