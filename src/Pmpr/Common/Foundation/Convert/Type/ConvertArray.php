<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Convert\Type; use stdClass; class ConvertArray extends Common { public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu) { array_walk($uomewyckeuqoqocu, static function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) { if (is_numeric($eqgoocgaqwqcimie)) { goto fwycqcmswcqkuwkm; } if (is_array($eqgoocgaqwqcimie)) { goto sowisusioymmasmc; } goto wuucyikacikiycik; fwycqcmswcqkuwkm: $eqgoocgaqwqcimie = (int) $eqgoocgaqwqcimie; goto wuucyikacikiycik; sowisusioymmasmc: $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie); wuucyikacikiycik: }); return $uomewyckeuqoqocu; } public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass { $mksyucucyswaukig = new stdClass(); foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (array_key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) { goto sgcgckugkyqioygc; } if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui, true)) { goto sqmakgoukwggqguc; } goto qwamowwuqewiekys; sgcgckugkyqioygc: if (!is_numeric($uusmaiomayssaecw)) { goto eycqiquyywmsaimu; } $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw]; eycqiquyywmsaimu: unset($yygmoeguaqyumuui[$uusmaiomayssaecw]); goto qwamowwuqewiekys; sqmakgoukwggqguc: unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui, true)]); qwamowwuqewiekys: $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok; swyogqkgcygqewgk: } suameigqeemygecw: if (!(count($yygmoeguaqyumuui) > 0)) { goto oggigasguykseuqs; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) { goto cqeoyiaqowgumgqi; } $mksyucucyswaukig->{$uusmaiomayssaecw} = null; cqeoyiaqowgumgqi: uuywoaoyegumicic: } sgkkgysqkisuckcc: oggigasguykseuqs: return $mksyucucyswaukig; } public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array { $mguygkocuoaoqqkg = []; if (!is_array($uomewyckeuqoqocu)) { goto seoyoigiqioiakyq; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!is_array($igqsaukqcqscimok)) { goto oaeuicecqcyymume; } $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui); oaeuicecqcyymume: oiokgqmqeiooeksu: } goqgqygaasmeogqc: seoyoigiqioiakyq: return $mguygkocuoaoqqkg; } public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string { return implode($kyckqucegowukmcm, $uomewyckeuqoqocu); } }
