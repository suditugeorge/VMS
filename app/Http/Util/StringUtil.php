<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 10/28/2018
 * Time: 7:37 PM
 */

namespace App\Http\Util;

class StringUtil
{
    public static function cleanDiacritics($sString)
    {
        return str_replace(['ă', 'â', 'î', 'ș', 'ş', 'ț', 'ţ', 'Ă', 'Â', 'Î', 'Ș', 'Ş', 'Ț', 'Ţ', 'ü', 'Ü', 'ß', 'ä', 'Ä', 'ö', 'Ö', 'ô', 'ø', 'é'],
            ['a', 'a', 'i', 's', 's', 't', 't', 'A', 'A', 'I', 'S', 'S', 'T', 'T', 'ue', 'UE', 'ss', 'ae', 'AE', 'oe', 'OE', 'o', 'o', 'e'], $sString);
    }

    public static function formatUrl($str)
    {
        if (empty($str)) {
            return '';
        }
        //$str = str_replace('&amp;', '-', $str);
        $str = html_entity_decode($str, ENT_HTML5, 'UTF-8');
        $str = self::cleanDiacritics($str);
        $str = mb_strtolower($str);
        $str = trim(preg_replace('`\W`', '-', $str), '-');
        $len = mb_strlen($str);
        $ret = '';
        for ($i = 0; $i < $len; $i++) {
            if ($i == 0 || $str{$i - 1} != '-' || $str{$i} != '-') {
                $ret .= $str{$i};
            }
        }
        if (empty($ret)) {
            $ret = '-';
        }
        return $ret;
    }
}
