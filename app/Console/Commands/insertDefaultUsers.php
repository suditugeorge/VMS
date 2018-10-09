<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Illuminate\Support\Facades\Hash;

class insertDefaultUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'default:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adauga userii default ai aplicatiei';

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
        $user = new User();
        $user->user_email = 'suditugeorge94@gmail.com';
        $user->user_password = Hash::make('kodacolor94');
        $user->role_id = 1;
        $user->save();
    }
}
