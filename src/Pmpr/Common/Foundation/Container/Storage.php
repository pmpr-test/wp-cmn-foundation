<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d13e4bc148             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; class Storage { protected static array $instances = []; protected static array $once = []; protected static array $components = [Constants::goqwwcuaqoyouoya => [], Constants::wcwmcocqaeiwwuss => [], Constants::kicaioiokgkqqywe => [], Constants::mgwgygugyckeocqo => [], Constants::ycaueuokiswkqaoc => []]; public static function iawcusqgkeieicug() : ?array { return self::$instances; } public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array { $mqkkuqaimswumeww = self::$components; if ($sqeykgyoooqysmca) { $mqkkuqaimswumeww = $mqkkuqaimswumeww[$sqeykgyoooqysmca] ?? []; } else { $mqkkuqaimswumeww = Foundation::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->kaucoswaceqcuyam($mqkkuqaimswumeww); } return $mqkkuqaimswumeww; } public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw, array $ywmkwiwkosakssii = []) : ?Component { $wksoawcgagcgoask = null; if ($mksyucucyswaukig instanceof Container) { $ymqmyyeuycgmigyo = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($mksyucucyswaukig); $sqeykgyoooqysmca = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->gueasuouwqysmomu($mksyucucyswaukig); if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) { if ($ywmkwiwkosakssii) { $ywmkwiwkosakssii = $mksyucucyswaukig->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => '', Constants::wuowaiyouwecckaw => '']); } $wksoawcgagcgoask = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw, $ywmkwiwkosakssii); self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = $wksoawcgagcgoask; } } return $wksoawcgagcgoask; } public static function has(string $aiieyweysaukqemc) { return self::iawcusqgkeieicug()[$aiieyweysaukqemc] ?? false; } public static function update(object $owgumcsyqsamiemg) { $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey(); self::remove($aiieyweysaukqemc); self::add($aiieyweysaukqemc, $owgumcsyqsamiemg); } public static function cqusmgskowmesgcg($wksoawcgagcgoask = null) { if (is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\x77\161\163\x67\x75\151\x69\157\x63\x6f\157\165\163\165\x71")) { $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq(); } $wksoawcgagcgoask = self::misumgawyweoagic()[$wksoawcgagcgoask] ?? null; if ($wksoawcgagcgoask) { $wksoawcgagcgoask = apply_filters("\x70\x6d\160\x72\137\147\145\x74\x5f\x63\x6f\x6d\x70\x6f\x6e\145\156\x74", $wksoawcgagcgoask); } return $wksoawcgagcgoask; } public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg) { self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg; } public static function iigqkgiamcykcwcm($iakkeikwceeomgyq) { return $iakkeikwceeomgyq; } public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm); $owgumcsyqsamiemg = null; if (isset(self::$instances[$uusmaiomayssaecw]) && ($owgumcsyqsamiemg = self::$instances[$uusmaiomayssaecw])) { unset(self::$instances[$uusmaiomayssaecw]); } return $owgumcsyqsamiemg; } public static function get(bool $ykuqcwwmuyqmkisq, string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm); $owgumcsyqsamiemg = self::has($uusmaiomayssaecw); if (defined("\x50\122\137\104\105\102\125\x47") && PR_DEBUG) { if ($ykuqcwwmuyqmkisq) { if (isset(self::$once[$uusmaiomayssaecw])) { wp_die($egkyssmuqcwaciya . "\x3a\72\x67\x65\164\x49\156\x73\164\x61\156\x63\x65\x4f\156\x63\x65\40\143\141\154\154\x65\144\40\142\165\164\x20\x74\x68\151\163\40\x6f\x62\152\x65\143\164\40\143\141\154\x6c\145\x64\x20\x6d\157\162\x65\x20\x74\150\141\156\x20\157\x6e\145\x73"); } } self::$once[$uusmaiomayssaecw] = 1; } if (!$owgumcsyqsamiemg) { $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya); if ($aokagokqyuysuksm) { $ywmkwiwkosakssii[] = $aokagokqyuysuksm; } try { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii); if (!$ykuqcwwmuyqmkisq) { self::add($uusmaiomayssaecw, $owgumcsyqsamiemg); } } catch (Exception $wgaoewqkwgomoaai) { $smgswawakqcsecka = $wgaoewqkwgomoaai->getTraceAsString(); wp_die($smgswawakqcsecka); } } return $owgumcsyqsamiemg; } public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string { return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}"; } }
