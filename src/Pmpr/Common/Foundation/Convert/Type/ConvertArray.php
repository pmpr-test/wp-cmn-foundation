<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c53dd59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Convert\Type; use stdClass; class ConvertArray extends Common { public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu) { array_walk($uomewyckeuqoqocu, static function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) { if (is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = (int) $eqgoocgaqwqcimie; } elseif (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie); } }); return $uomewyckeuqoqocu; } public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass { $mksyucucyswaukig = new stdClass(); foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (array_key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) { if (is_numeric($uusmaiomayssaecw)) { $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw]; } unset($yygmoeguaqyumuui[$uusmaiomayssaecw]); } elseif (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui, true)) { unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui, true)]); } $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok; } if (count($yygmoeguaqyumuui) > 0) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($mksyucucyswaukig->{$uusmaiomayssaecw})) { $mksyucucyswaukig->{$uusmaiomayssaecw} = null; } } } return $mksyucucyswaukig; } public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array { $mguygkocuoaoqqkg = []; if (is_array($uomewyckeuqoqocu)) { foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui); } } } return $mguygkocuoaoqqkg; } }
