<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Convert\Type; use stdClass; class ConvertArray extends Common { public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu) { array_walk($uomewyckeuqoqocu, static function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) { if (is_numeric($eqgoocgaqwqcimie)) { goto ykueywmasoqoewaw; } if (is_array($eqgoocgaqwqcimie)) { goto usskmqqiuiamwmwc; } goto aciwwsakaoomyacw; ykueywmasoqoewaw: $eqgoocgaqwqcimie = (int) $eqgoocgaqwqcimie; goto aciwwsakaoomyacw; usskmqqiuiamwmwc: $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie); aciwwsakaoomyacw: }); return $uomewyckeuqoqocu; } public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass { $mksyucucyswaukig = new stdClass(); foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (array_key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) { goto qwyquiaeiiiuugie; } if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui, true)) { goto keakyuoeecukqmgs; } goto gaumeyyqioaqyske; qwyquiaeiiiuugie: if (!is_numeric($uusmaiomayssaecw)) { goto kceseecakiymkgcq; } $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw]; kceseecakiymkgcq: unset($yygmoeguaqyumuui[$uusmaiomayssaecw]); goto gaumeyyqioaqyske; keakyuoeecukqmgs: unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui, true)]); gaumeyyqioaqyske: $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok; siacckagyggsgoyc: } asioykyqsgswmgou: if (!(count($yygmoeguaqyumuui) > 0)) { goto kwyoiqawaqmqkoey; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) { goto oguyuegsimwwswyo; } $mksyucucyswaukig->{$uusmaiomayssaecw} = null; oguyuegsimwwswyo: cgqskwwqiuciqgsk: } qwkmqwwwemyqycga: kwyoiqawaqmqkoey: return $mksyucucyswaukig; } public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array { $mguygkocuoaoqqkg = []; if (!is_array($uomewyckeuqoqocu)) { goto eqowouaiymcoysqk; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!is_array($igqsaukqcqscimok)) { goto ismmgaiaiwmwwicc; } $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui); ismmgaiaiwmwwicc: wqsawukekkyakkuu: } kigqsomigymgyaia: eqowouaiymcoysqk: return $mguygkocuoaoqqkg; } public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string { return implode($kyckqucegowukmcm, $uomewyckeuqoqocu); } }
