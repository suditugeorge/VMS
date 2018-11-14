<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 11/8/2018
 * Time: 11:28 AM
 */

namespace App\Http\Util;

class UrlUtil
{
    public function get_data($url) {
        $ch = curl_init();
        $timeout = 50;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}
