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
            'current_url' => url()->current(),
        ];
    }

    private function getSidebar()
    {
        $siderbar = [
            'auth_user' => [
                'nume' => $this->user['nume']. ' '. $this->user['prenume'],
                'submeniu' => [
                    0 => ['text' => 'Profilul meu', 'small_text' => 'PM', 'url' => url('/vms-admin/my-profile')],
                    1 => ['text' => 'Logout', 'small_text' => 'LG', 'url' => url('/vms-admin/logout')],
                ]
            ],
            'other_items' => [
                0 => ['text' => 'Dashboard', 'icon' => 'now-ui-icons design_app' ,'url' => url('/vms-admin/')],
                1 => [
                    'text' => 'Blog',
                    'icon' => 'fab fa-blogger',
                    'collapse_id' => str_random(10),
                    'submeniu' => [
                        0 => ['text' => 'Categorii Blog', 'small_text' => 'CB', 'url' => url('/vms-admin/blog-categories')],
                        1 => ['text' => 'Postari Blog', 'small_text' => 'PB', 'url' => url('/vms-admin/blog-posts')]
                    ]
                ],
            ],
        ];

        return $siderbar;
    }
}
