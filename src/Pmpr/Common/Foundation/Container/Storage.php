<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; class Storage { protected static array $instances = []; protected static array $once = []; protected static array $components = [Constants::goqwwcuaqoyouoya => [], Constants::wcwmcocqaeiwwuss => [], Constants::kicaioiokgkqqywe => [], Constants::mgwgygugyckeocqo => [], Constants::ycaueuokiswkqaoc => []]; public static function iawcusqgkeieicug() : ?array { return self::$instances; } public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array { $mqkkuqaimswumeww = self::$components; if ($sqeykgyoooqysmca) { goto cgqiiiguusawsoea; } $mqkkuqaimswumeww = Foundation::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->kaucoswaceqcuyam($mqkkuqaimswumeww); goto ceacoumkeoymekka; cgqiiiguusawsoea: $mqkkuqaimswumeww = $mqkkuqaimswumeww[$sqeykgyoooqysmca] ?? []; ceacoumkeoymekka: return $mqkkuqaimswumeww; } public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw, array $ywmkwiwkosakssii = []) : ?Component { $wksoawcgagcgoask = null; if (!$mksyucucyswaukig instanceof Container) { goto keweqmmmgqwgmkcq; } $ymqmyyeuycgmigyo = $mksyucucyswaukig->akuociswqmoigkas(); $sqeykgyoooqysmca = $mksyucucyswaukig->yegwayqakokyuiok(); if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) { goto maiaaawkmagymaca; } if (!$ywmkwiwkosakssii) { goto sassuokyqmykuaak; } $ywmkwiwkosakssii = $mksyucucyswaukig->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => '', Constants::wuowaiyouwecckaw => '']); sassuokyqmykuaak: $wksoawcgagcgoask = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw, $ywmkwiwkosakssii); self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = $wksoawcgagcgoask; maiaaawkmagymaca: keweqmmmgqwgmkcq: return $wksoawcgagcgoask; } public static function has(string $aiieyweysaukqemc) { return self::iawcusqgkeieicug()[$aiieyweysaukqemc] ?? false; } public static function update(object $owgumcsyqsamiemg) { $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey(); self::remove($aiieyweysaukqemc); self::add($aiieyweysaukqemc, $owgumcsyqsamiemg); } public static function cqusmgskowmesgcg($wksoawcgagcgoask = null) { if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\153\x77\161\163\147\165\151\151\x6f\143\157\157\x75\x73\165\161"))) { goto aciwwsakaoomyacw; } $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq(); aciwwsakaoomyacw: $wksoawcgagcgoask = self::misumgawyweoagic()[$wksoawcgagcgoask] ?? null; if (!$wksoawcgagcgoask) { goto ykueywmasoqoewaw; } $wksoawcgagcgoask = apply_filters("\x70\155\160\162\x5f\x67\145\x74\137\143\x6f\x6d\160\x6f\156\145\x6e\x74", $wksoawcgagcgoask); ykueywmasoqoewaw: return $wksoawcgagcgoask; } public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg) { self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg; } public static function iigqkgiamcykcwcm($iakkeikwceeomgyq) { return $iakkeikwceeomgyq; } public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm); $owgumcsyqsamiemg = null; if (!(isset(self::$instances[$uusmaiomayssaecw]) && ($owgumcsyqsamiemg = self::$instances[$uusmaiomayssaecw]))) { goto usskmqqiuiamwmwc; } unset(self::$instances[$uusmaiomayssaecw]); usskmqqiuiamwmwc: return $owgumcsyqsamiemg; } public static function get(bool $ykuqcwwmuyqmkisq, string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm); $owgumcsyqsamiemg = self::has($uusmaiomayssaecw); if (!(defined("\x50\x52\137\x44\x45\102\x55\x47") && PR_DEBUG)) { goto kceseecakiymkgcq; } if (!$ykuqcwwmuyqmkisq) { goto siacckagyggsgoyc; } if (!isset(self::$once[$uusmaiomayssaecw])) { goto asioykyqsgswmgou; } wp_die($egkyssmuqcwaciya . "\x3a\x3a\x67\x65\x74\x49\156\163\x74\x61\156\x63\145\x4f\156\x63\x65\x20\143\141\154\154\x65\144\40\142\165\x74\x20\x74\x68\151\x73\40\x6f\x62\x6a\x65\x63\x74\x20\143\141\154\x6c\x65\144\40\155\157\162\145\40\164\150\141\156\40\x6f\156\145\x73"); asioykyqsgswmgou: siacckagyggsgoyc: self::$once[$uusmaiomayssaecw] = 1; kceseecakiymkgcq: if ($owgumcsyqsamiemg) { goto keakyuoeecukqmgs; } $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya); if (!$aokagokqyuysuksm) { goto gaumeyyqioaqyske; } $ywmkwiwkosakssii[] = $aokagokqyuysuksm; gaumeyyqioaqyske: try { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii); if ($ykuqcwwmuyqmkisq) { goto qwyquiaeiiiuugie; } self::add($uusmaiomayssaecw, $owgumcsyqsamiemg); qwyquiaeiiiuugie: } catch (Exception $wgaoewqkwgomoaai) { $smgswawakqcsecka = $wgaoewqkwgomoaai->getTraceAsString(); wp_die($smgswawakqcsecka); } keakyuoeecukqmgs: return $owgumcsyqsamiemg; } public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string { return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}"; } }
