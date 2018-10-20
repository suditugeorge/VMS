<?php

namespace App\Http\Util;

use Illuminate\Support\Facades\Auth;

class AdminUtil
{
    public $sidebar;
    public $user;

    public function __construct()
    {
        $this->user = Auth::user()->toArray();
        $this->sidebar = $this->getSidebar();
    }

    public function getGeneralData()
    {
        return [
            'sidebar' => $this->sidebar,
            'auth_user' => $this->user,
        ];
    }

    private function getSidebar()
    {
        $siderbar = [
            'auth_user' => [
                'nume' => $this->user['nume']. ' '. $this->user['prenume'],
                'submeniu' => [
                    0 => ['text' => 'Profilul meu', 'small_text' => 'PM', 'url' => url('/vms-admin/my-profile')]
                ]
            ],
            'other_items' => [
                0 => ['text' => 'Dashboard', 'icon' => 'now-ui-icons design_app' ,'url' => url('/vms-admin/')],
                1 => ['text' => 'Blog', 'icon' => 'fab fa-blogger', 'url' => url('/vms-admin/blogs')]
            ],
        ];

        return $siderbar;
    }
}
