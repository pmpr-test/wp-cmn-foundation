<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671269d6639fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; class Storage { protected static array $instances = []; protected static array $once = []; protected static array $components = [Constants::goqwwcuaqoyouoya => [], Constants::wcwmcocqaeiwwuss => [], Constants::kicaioiokgkqqywe => [], Constants::mgwgygugyckeocqo => [], Constants::ycaueuokiswkqaoc => []]; public static function iawcusqgkeieicug() : ?array { return self::$instances; } public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array { $mqkkuqaimswumeww = self::$components; if ($sqeykgyoooqysmca) { $mqkkuqaimswumeww = $mqkkuqaimswumeww[$sqeykgyoooqysmca] ?? []; } else { $mqkkuqaimswumeww = Foundation::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->kaucoswaceqcuyam($mqkkuqaimswumeww); } return $mqkkuqaimswumeww; } public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw, array $ywmkwiwkosakssii = []) : ?Component { $wksoawcgagcgoask = null; if ($mksyucucyswaukig instanceof Container) { $ymqmyyeuycgmigyo = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($mksyucucyswaukig); $sqeykgyoooqysmca = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->gueasuouwqysmomu($mksyucucyswaukig); if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) { if ($ywmkwiwkosakssii) { $ywmkwiwkosakssii = $mksyucucyswaukig->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => '', Constants::wuowaiyouwecckaw => '']); } $wksoawcgagcgoask = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw, $ywmkwiwkosakssii); self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = $wksoawcgagcgoask; } } return $wksoawcgagcgoask; } public static function has(string $aiieyweysaukqemc) { return self::iawcusqgkeieicug()[$aiieyweysaukqemc] ?? false; } public static function update(object $owgumcsyqsamiemg) { $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey(); self::remove($aiieyweysaukqemc); self::add($aiieyweysaukqemc, $owgumcsyqsamiemg); } public static function cqusmgskowmesgcg($wksoawcgagcgoask = null) { if (is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\x77\161\x73\147\165\x69\151\157\143\x6f\x6f\165\x73\x75\x71")) { $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq(); } $wksoawcgagcgoask = self::misumgawyweoagic()[$wksoawcgagcgoask] ?? null; if ($wksoawcgagcgoask) { $wksoawcgagcgoask = apply_filters("\160\x6d\x70\162\x5f\x67\x65\164\137\143\157\x6d\x70\x6f\x6e\145\156\164", $wksoawcgagcgoask); } return $wksoawcgagcgoask; } public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg) { self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg; } public static function iigqkgiamcykcwcm($iakkeikwceeomgyq) { return $iakkeikwceeomgyq; } public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm); $owgumcsyqsamiemg = null; if (isset(self::$instances[$uusmaiomayssaecw]) && ($owgumcsyqsamiemg = self::$instances[$uusmaiomayssaecw])) { unset(self::$instances[$uusmaiomayssaecw]); } return $owgumcsyqsamiemg; } public static function get(bool $ykuqcwwmuyqmkisq, string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm); $owgumcsyqsamiemg = self::has($uusmaiomayssaecw); if (defined("\120\122\137\x44\x45\x42\125\x47") && PR_DEBUG) { if ($ykuqcwwmuyqmkisq) { if (isset(self::$once[$uusmaiomayssaecw])) { wp_die($egkyssmuqcwaciya . "\72\72\147\x65\x74\x49\156\x73\164\x61\156\143\145\117\x6e\143\145\x20\x63\141\x6c\154\145\144\x20\142\165\x74\x20\164\150\x69\x73\x20\x6f\x62\x6a\x65\143\164\40\143\x61\x6c\154\145\144\40\x6d\157\x72\x65\40\x74\x68\141\x6e\40\157\x6e\x65\163"); } } self::$once[$uusmaiomayssaecw] = 1; } if (!$owgumcsyqsamiemg) { $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya); if ($aokagokqyuysuksm) { $ywmkwiwkosakssii[] = $aokagokqyuysuksm; } try { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii); if (!$ykuqcwwmuyqmkisq) { self::add($uusmaiomayssaecw, $owgumcsyqsamiemg); } } catch (Exception $wgaoewqkwgomoaai) { $smgswawakqcsecka = $wgaoewqkwgomoaai->getTraceAsString(); wp_die($smgswawakqcsecka); } } return $owgumcsyqsamiemg; } public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string { return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}"; } }
