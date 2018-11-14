<?php

namespace App\Console\Commands;

use App\RaseAnimale;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Http\Util\StringUtil;
use App\Role;
use App\User;
use App\BlogCategories;
use App\SpeciiAnimale;

use Symfony\Component\DomCrawler\Crawler;
use App\Http\Util\UrlUtil;


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
        $bar = $this->output->createProgressBar(6);
        $this->downloadAndInsertRaseAnimale('canide');
        $bar->advance();
        $this->downloadAndInsertRaseAnimale('feline');
        $bar->advance();
        $this->insertRoles();
        $bar->advance();
        $this->insertUsers();
        $bar->advance();
        $this->insertBlogCategories();
        $bar->advance();
        $this->insertSpeciiAnimale();
        $bar->finish();
        echo "\n";
    }

    private function downloadAndInsertRaseAnimale($sSpecieCod = null)
    {
        $oSpecie = SpeciiAnimale::where('code', '=', $sSpecieCod)->first();
        if($sSpecieCod == 'canide'){
            $sUrl = 'https://ro.wikipedia.org/wiki/List%C4%83_de_rase_de_c%C3%A2ini';
        }elseif ($sSpecieCod == 'feline'){
            $sUrl = 'https://ro.wikipedia.org/wiki/List%C4%83_de_rase_de_pisici';
        }

        if(!$oSpecie){
            return;
        }

        $this->downloadRase($sUrl, $oSpecie->id);

    }

    private function downloadRase($sUrl, $iSpecieID)
    {
        $oUrlUtil = new UrlUtil();
        $sHtml = $oUrlUtil->get_data($sUrl);
        $oCrawler = new Crawler($sHtml);
        $oListaFiltrata = $oCrawler->filter('.mw-parser-output')->filter('ul');

        foreach ($oListaFiltrata as $oListaUL){
            foreach ($oListaUL->childNodes as $oListaLI){
                if(!$oListaLI instanceof \DOMElement){
                    continue;
                }
                $this->insertRasaAnimal($oListaLI->firstChild->nodeValue, $iSpecieID);
            }
        }
    }

    private function insertRasaAnimal($sNume, $iSpecieID)
    {
        $oRasaAnimal = new RaseAnimale();
        $oRasaAnimal->name = trim($sNume);
        $oRasaAnimal->code = StringUtil::formatUrl(trim($sNume));
        $oRasaAnimal->active = true;
        $oRasaAnimal->animal_species_id = $iSpecieID;
        $oRasaAnimal->save();
    }

    private function insertSpeciiAnimale()
    {
        $aSpeciiAnimeleDefault = config('constants.SPECII_ANIMLE');
        foreach ($aSpeciiAnimeleDefault as $specie_animal_defalut){
            $code = StringUtil::formatUrl($specie_animal_defalut);
            $oSpecieAnimal = SpeciiAnimale::where('code', '=', $code)->first();
            if($oSpecieAnimal){
               continue;
            }
            $oSpecieAnimal = new SpeciiAnimale();
            $oSpecieAnimal->name = $specie_animal_defalut;
            $oSpecieAnimal->code = $code;
            $oSpecieAnimal->save();
        }
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
        $oBlogCategorie->code = StringUtil::formatUrl($oBlogCategorie->bcategory_name);
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
