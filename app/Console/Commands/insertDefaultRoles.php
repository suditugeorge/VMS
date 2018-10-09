<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Role;

class insertDefaultRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'default:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adauga rolurile default din aplicatie';

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
        $role = new Role();
        $role->role_name = 'Admin';
        $role->save();
    }
}
