<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class insertDefaultData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'default:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adauga datele default ai aplicatiei';

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
        $this->insertRoles();
        $this->insertUsers();
    }

    private function insertRoles()
    {
        $role = new Role();
        $role->role_name = 'Admin';
        $role->save();
    }

    private function insertUsers()
    {
        $user = new User();
        $user->email = 'suditugeorge94@gmail.com';
        $user->password = Hash::make('kodacolor94');
        $user->nume = 'Suditu';
        $user->prenume = 'George';
        $user->telefon = '0755823880';
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->email = 'cabinet@tetravet.ro';
        $user->password = Hash::make('tetravet#1999');
        $user->nume = 'Cabinet';
        $user->prenume = 'Tetravet';
        $user->telefon = '0214305415';
        $user->role_id = 1;
        $user->save();
    }
}
