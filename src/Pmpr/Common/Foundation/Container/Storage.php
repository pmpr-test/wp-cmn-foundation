<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169394df54             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; class Storage { protected static array $once = []; protected static array $components = [Constants::goqwwcuaqoyouoya => [], Constants::wcwmcocqaeiwwuss => [], Constants::kicaioiokgkqqywe => [], Constants::mgwgygugyckeocqo => [], Constants::ycaueuokiswkqaoc => []]; protected static array $instances = []; public static function iawcusqgkeieicug() : ?array { return self::$instances; } public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array { $mqkkuqaimswumeww = self::$components; if ($sqeykgyoooqysmca) { $mqkkuqaimswumeww = $mqkkuqaimswumeww[$sqeykgyoooqysmca] ?? []; } else { $mqkkuqaimswumeww = Foundation::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->kaucoswaceqcuyam($mqkkuqaimswumeww); } return $mqkkuqaimswumeww; } public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw, array $ywmkwiwkosakssii = []) : ?Component { $wksoawcgagcgoask = null; if ($mksyucucyswaukig instanceof Container) { $ymqmyyeuycgmigyo = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($mksyucucyswaukig); $sqeykgyoooqysmca = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->gueasuouwqysmomu($mksyucucyswaukig); if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) { if ($ywmkwiwkosakssii) { $ywmkwiwkosakssii = $mksyucucyswaukig->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => '', Constants::wuowaiyouwecckaw => '']); } $wksoawcgagcgoask = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw, $ywmkwiwkosakssii); self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = $wksoawcgagcgoask; } } return $wksoawcgagcgoask; } public static function has(string $aiieyweysaukqemc) { return self::iawcusqgkeieicug()[$aiieyweysaukqemc] ?? false; } public static function update(object $owgumcsyqsamiemg) { $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey(); self::remove($aiieyweysaukqemc); self::add($aiieyweysaukqemc, $owgumcsyqsamiemg); } public static function cqusmgskowmesgcg($wksoawcgagcgoask = null) { if (is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, 'kwqsguiiocoousuq')) { $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq(); } $wksoawcgagcgoask = self::misumgawyweoagic()[$wksoawcgagcgoask] ?? null; if ($wksoawcgagcgoask) { $wksoawcgagcgoask = apply_filters('pmpr_get_component', $wksoawcgagcgoask); } return $wksoawcgagcgoask; } public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg) { self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg; } public static function iigqkgiamcykcwcm($iakkeikwceeomgyq) { return $iakkeikwceeomgyq; } public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm); $owgumcsyqsamiemg = null; if (isset(self::$instances[$uusmaiomayssaecw]) && ($owgumcsyqsamiemg = self::$instances[$uusmaiomayssaecw])) { unset(self::$instances[$uusmaiomayssaecw]); } return $owgumcsyqsamiemg; } public static function get(bool $ykuqcwwmuyqmkisq, string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm); $owgumcsyqsamiemg = self::has($uusmaiomayssaecw); if (@defined('PR_DEBUG') && PR_DEBUG) { if ($ykuqcwwmuyqmkisq) { if (isset(self::$once[$uusmaiomayssaecw])) { wp_die($egkyssmuqcwaciya . '::getInstanceOnce called but this object called more than ones'); } } self::$once[$uusmaiomayssaecw] = 1; } if (!$owgumcsyqsamiemg) { $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya); if ($aokagokqyuysuksm) { $ywmkwiwkosakssii[] = $aokagokqyuysuksm; } try { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii); if (!$ykuqcwwmuyqmkisq) { self::add($uusmaiomayssaecw, $owgumcsyqsamiemg); } } catch (Exception $wgaoewqkwgomoaai) { $smgswawakqcsecka = $wgaoewqkwgomoaai->getTraceAsString(); wp_die($smgswawakqcsecka); } } return $owgumcsyqsamiemg; } public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string { return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}"; } }
