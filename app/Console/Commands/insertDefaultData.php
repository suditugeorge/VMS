<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use App\BlogCategories;

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
        $this->insertBlogCategories();
    }

    private function insertBlogCategories()
    {
        $sCategoriePrincipala = config('constants.BLOG_CATEGORIE_PRINCIPALA');
        $oBlogCategorie = BlogCategories::where('bcategory_name', '=', $sCategoriePrincipala)->first();
        if ($oBlogCategorie) {
            return true;
        }
        $oBlogCategorie = new BlogCategories();
        $oBlogCategorie->bcategory_name = $sCategoriePrincipala;
        $oBlogCategorie->save();
    }

    private function insertRoles()
    {
        $oRole = Role::where('role_name', '=', 'Admin')->first();
        if ($oRole) {
            return true;
        }
        $oRole = new Role();
        $oRole->role_name = 'Admin';
        $oRole->save();
    }

    private function insertUsers()
    {
        $oUser = User::where('email', '=', 'suditugeorge94@gmail.com')->first();
        if (!$oUser) {
            $oUser = new User();
            $oUser->email = 'suditugeorge94@gmail.com';
            $oUser->password = Hash::make('kodacolor94');
            $oUser->nume = 'Suditu';
            $oUser->prenume = 'George';
            $oUser->telefon = '0755823880';
            $oUser->role_id = 1;
            $oUser->save();
        }

        $oUser = User::where('email', '=', 'cabinet@tetravet.ro')->first();
        if (!$oUser) {
            $oUser = new User();
            $oUser->email = 'cabinet@tetravet.ro';
            $oUser->password = Hash::make('tetravet#1999');
            $oUser->nume = 'Cabinet';
            $oUser->prenume = 'Tetravet';
            $oUser->telefon = '0214305415';
            $oUser->role_id = 1;
            $oUser->save();
        }

    }
}
