<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e84f05bca             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; class Storage { protected static array $once = []; protected static array $components = [Constants::goqwwcuaqoyouoya => [], Constants::wcwmcocqaeiwwuss => [], Constants::kicaioiokgkqqywe => [], Constants::mgwgygugyckeocqo => [], Constants::ycaueuokiswkqaoc => []]; protected static array $instances = []; public static function iawcusqgkeieicug() : ?array { return self::$instances; } public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array { $mqkkuqaimswumeww = self::$components; if ($sqeykgyoooqysmca) { $mqkkuqaimswumeww = $mqkkuqaimswumeww[$sqeykgyoooqysmca] ?? []; } else { $mqkkuqaimswumeww = Foundation::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->kaucoswaceqcuyam($mqkkuqaimswumeww); } return $mqkkuqaimswumeww; } public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw, array $ywmkwiwkosakssii = []) : ?Component { $wksoawcgagcgoask = null; if ($mksyucucyswaukig instanceof Container) { $ymqmyyeuycgmigyo = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($mksyucucyswaukig); $sqeykgyoooqysmca = $mksyucucyswaukig->caokeucsksukesyo()->cqusmgskowmesgcg()->gueasuouwqysmomu($mksyucucyswaukig); if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) { if ($ywmkwiwkosakssii) { $ywmkwiwkosakssii = $mksyucucyswaukig->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => '', Constants::wuowaiyouwecckaw => '']); } $wksoawcgagcgoask = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw, $ywmkwiwkosakssii); self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = $wksoawcgagcgoask; } } return $wksoawcgagcgoask; } public static function has(string $aiieyweysaukqemc) { return self::iawcusqgkeieicug()[$aiieyweysaukqemc] ?? false; } public static function update(object $owgumcsyqsamiemg) { $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey(); self::remove($aiieyweysaukqemc); self::add($aiieyweysaukqemc, $owgumcsyqsamiemg); } public static function cqusmgskowmesgcg($wksoawcgagcgoask = null) { if (is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\x77\x71\x73\147\165\x69\x69\157\x63\x6f\157\165\x73\165\161")) { $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq(); } $wksoawcgagcgoask = self::misumgawyweoagic()[$wksoawcgagcgoask] ?? null; if ($wksoawcgagcgoask) { $wksoawcgagcgoask = apply_filters("\160\155\160\x72\137\147\x65\164\137\143\157\155\160\x6f\x6e\145\156\164", $wksoawcgagcgoask); } return $wksoawcgagcgoask; } public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg) { self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg; } public static function iigqkgiamcykcwcm($iakkeikwceeomgyq) { return $iakkeikwceeomgyq; } public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm); $owgumcsyqsamiemg = null; if (isset(self::$instances[$uusmaiomayssaecw]) && ($owgumcsyqsamiemg = self::$instances[$uusmaiomayssaecw])) { unset(self::$instances[$uusmaiomayssaecw]); } return $owgumcsyqsamiemg; } public static function get(bool $ykuqcwwmuyqmkisq, string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii) { $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm); $owgumcsyqsamiemg = self::has($uusmaiomayssaecw); if (@defined("\120\122\137\x44\105\x42\x55\107") && PR_DEBUG) { if ($ykuqcwwmuyqmkisq) { if (isset(self::$once[$uusmaiomayssaecw])) { wp_die($egkyssmuqcwaciya . "\x3a\72\x67\145\x74\x49\156\x73\164\141\156\143\145\117\156\143\145\40\x63\141\154\x6c\145\x64\40\142\x75\164\40\164\x68\x69\x73\x20\x6f\x62\152\x65\x63\164\40\143\141\154\x6c\145\144\x20\155\157\162\x65\40\x74\150\141\156\40\x6f\156\x65\163"); } } self::$once[$uusmaiomayssaecw] = 1; } if (!$owgumcsyqsamiemg) { $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya); if ($aokagokqyuysuksm) { $ywmkwiwkosakssii[] = $aokagokqyuysuksm; } try { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii); if (!$ykuqcwwmuyqmkisq) { self::add($uusmaiomayssaecw, $owgumcsyqsamiemg); } } catch (Exception $wgaoewqkwgomoaai) { $smgswawakqcsecka = $wgaoewqkwgomoaai->getTraceAsString(); wp_die($smgswawakqcsecka); } } return $owgumcsyqsamiemg; } public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string { return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}"; } }
