<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581610eed2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\ORM\Traits\QueryTrait; use Pmpr\Common\Foundation\ORM\Traits\SchemaTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use wpdb; class Database extends Common { use QueryTrait, SchemaTrait; public function flush() { $ooggeikkseeqyyek = $this->uuqwaeygaeemceik(); if ($ooggeikkseeqyyek) { $ooggeikkseeqyyek->flush(); } } public function uuqwaeygaeemceik() : ?wpdb { global $wpdb; $ooggeikkseeqyyek = null; if ($wpdb instanceof wpdb) { $ooggeikkseeqyyek = $wpdb; } return $ooggeikkseeqyyek; } private function owicscwgeuqcqaig() : ?WP_Query { global $wp_query; $gqgemcmoicmgaqie = null; if ($wp_query instanceof WP_Query) { $gqgemcmoicmgaqie = $wp_query; } return $gqgemcmoicmgaqie; } public function ccwowuakmqoemoem($gqgemcmoicmgaqie, $kekecymwqwcwocya) { if ($kekecymwqwcwocya && $gqgemcmoicmgaqie instanceof WP_Query) { foreach ($kekecymwqwcwocya as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $gqgemcmoicmgaqie->set($uusmaiomayssaecw, $eqgoocgaqwqcimie); } } return $gqgemcmoicmgaqie; } public function get($gygawogosumsgmme, $ggauoeuaesiymgee = '') { $gqgemcmoicmgaqie = $this->owicscwgeuqcqaig(); $sogksuscggsicmac = $ggauoeuaesiymgee; if ($gqgemcmoicmgaqie) { $sogksuscggsicmac = $gqgemcmoicmgaqie->get($gygawogosumsgmme, $ggauoeuaesiymgee); } return $sogksuscggsicmac; } public function ciqgsyoasskoiukm(array $ywmkwiwkosakssii = []) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aasascamegmwqmqk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ugsuecoyuqcamsac, ''); $sogksuscggsicmac = ''; if ($aasascamegmwqmqk) { $uoomaookgsyciacm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iowgsqgiaamyuswi, []); $siykeiywomwwuoiw = []; if (is_array($uoomaookgsyciacm) && $uoomaookgsyciacm) { foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::ciyoccqkiamemcmm, $gqgemcmoicmgaqie); $yummaigqmauwcyou = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::euoaaiqkqcqcgeco, Constants::qmesccgukkkogskw); switch ($yummaigqmauwcyou) { case Constants::qmesccgukkkogskw: $qsycuegoicqcqkmo = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::cwsguekoagqkaesm, Constants::weaykmmocuacwekg); $cackiyicawmkyqqg = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::eugyciakiowwcuwm, "\x3d"); if (is_numeric($qgoqiacsiccwoawi)) { $qgoqiacsiccwoawi = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::meisqwykgaymauka, $qgoqiacsiccwoawi); } if (!isset($siykeiywomwwuoiw[Constants::qmesccgukkkogskw])) { $eqgoocgaqwqcimie = "\127\110\105\x52\x45\x20{$qgoqiacsiccwoawi}\x20{$cackiyicawmkyqqg}\x20{$eqgoocgaqwqcimie}"; $sqqewmoeaekuyyas = 25; } else { if (is_array($eqgoocgaqwqcimie)) { if (isset($eqgoocgaqwqcimie[Constants::ugsuecoyuqcamsac])) { $eqgoocgaqwqcimie = $this->ciqgsyoasskoiukm($eqgoocgaqwqcimie); if (!in_array($cackiyicawmkyqqg, ["\111\x4e", "\x4e\117\124\x20\x49\116"])) { $cackiyicawmkyqqg = "\x49\116"; } $eqgoocgaqwqcimie = "{$cackiyicawmkyqqg}\x20\x28\x20{$eqgoocgaqwqcimie}\x20\51"; } } else { $eqgoocgaqwqcimie = "{$qgoqiacsiccwoawi}\x20{$cackiyicawmkyqqg}\40{$eqgoocgaqwqcimie}"; } $eqgoocgaqwqcimie = "{$qsycuegoicqcqkmo}\x20{$eqgoocgaqwqcimie}"; $sqqewmoeaekuyyas = 50; } $siykeiywomwwuoiw[Constants::qmesccgukkkogskw] = [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; break; } } } if (isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { $sikaymiwcesagayc = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($sikaymiwcesagayc, Constants::ciyoccqkiamemcmm, $sikaymiwcesagayc); $umwqusowiqmyseom = $gkyciwoiiisgywcs->get($sikaymiwcesagayc, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko); $siykeiywomwwuoiw[Constants::cqcimoqckgmaacyw] = [Constants::ciyoccqkiamemcmm => "\x4f\x52\x44\x45\122\x20\x42\131\x20{$eqgoocgaqwqcimie}\40{$umwqusowiqmyseom}", Constants::iuqumwggccmcuyem => 90]; } if (isset($ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw])) { $siykeiywomwwuoiw[Constants::cgiswgcumueqgcmw] = [Constants::ciyoccqkiamemcmm => "\114\111\x4d\111\124\40{$ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw]}", Constants::iuqumwggccmcuyem => 100]; } if (($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) && $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::euugkeokkewisqmi, '')) { $aasascamegmwqmqk = "{$ooggeikkseeqyyek->prefix}{$aasascamegmwqmqk}"; } $aasascamegmwqmqk = $gkyciwoiiisgywcs->get($ooggeikkseeqyyek, $aasascamegmwqmqk, $aasascamegmwqmqk); if ($aasascamegmwqmqk) { $sogksuscggsicmac = implode("\40", $gkyciwoiiisgywcs->yaeiiwwyckwugsem($siykeiywomwwuoiw)); $wkkweuacukumqmya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::soquiwyuimckgiow, "\x2a"); if (is_array($wkkweuacukumqmya)) { $wkkweuacukumqmya = implode("\x2c\40", $wkkweuacukumqmya); } $sogksuscggsicmac = "\x53\105\x4c\x45\103\x54\x20{$wkkweuacukumqmya}\x20\106\x52\117\x4d\x20{$aasascamegmwqmqk}\40{$sogksuscggsicmac}"; } } return $sogksuscggsicmac; } public function yqccgscwmeeyigkg($cmwygeyygwqaemaq) : string { $sogksuscggsicmac = ''; if ($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) { $sogksuscggsicmac = $ooggeikkseeqyyek->esc_like($cmwygeyygwqaemaq); } return $sogksuscggsicmac; } public function delete($aasascamegmwqmqk, $icsywsyukqcciiky, $saqmwwmqiwmkiwaa) { $meisgakuwcmwosms = false; if ($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) { $meisgakuwcmwosms = $ooggeikkseeqyyek->delete($aasascamegmwqmqk, $icsywsyukqcciiky, $saqmwwmqiwmkiwaa); } return $meisgakuwcmwosms; } public function prepare(string $gqgemcmoicmgaqie, ...$ywmkwiwkosakssii) : string { if ($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) { $gqgemcmoicmgaqie = (string) $ooggeikkseeqyyek->prepare($gqgemcmoicmgaqie, ...$ywmkwiwkosakssii); } return $gqgemcmoicmgaqie; } public function qaumqeeagueuqkcg($gqgemcmoicmgaqie, int $iegmsyuiekaayqqy = 0, int $ymsweociooeskgwg = 0) : ?string { $ooggeikkseeqyyek = $this->uuqwaeygaeemceik(); $sogksuscggsicmac = null; if ($ooggeikkseeqyyek) { if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); } if ($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie)) { $sogksuscggsicmac = $ooggeikkseeqyyek->get_var($gqgemcmoicmgaqie, $iegmsyuiekaayqqy, $ymsweociooeskgwg); } } return $sogksuscggsicmac; } public function maewiqmcygmeuaso($gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $sogksuscggsicmac = null; if ($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) { if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); } if ($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie)) { $sogksuscggsicmac = $ooggeikkseeqyyek->get_results($gqgemcmoicmgaqie, $aqykuigiuwmmcieu); } } return $sogksuscggsicmac; } public function gmogewiwceqokqmy($gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, int $ymsweociooeskgwg = 0) { $sogksuscggsicmac = null; if ($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) { if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); } if ($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie)) { $sogksuscggsicmac = $ooggeikkseeqyyek->get_row($gqgemcmoicmgaqie, $aqykuigiuwmmcieu, $ymsweociooeskgwg); } } return $sogksuscggsicmac; } public function imeeqegecykawmmi($gqgemcmoicmgaqie, int $iegmsyuiekaayqqy = 0) : ?array { $sogksuscggsicmac = null; if ($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) { if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); } if ($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie)) { $sogksuscggsicmac = $ooggeikkseeqyyek->get_col($gqgemcmoicmgaqie, $iegmsyuiekaayqqy); } } return $sogksuscggsicmac; } public function wgiecqcgakkauywu($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($eqgoocgaqwqcimie, $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw(), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc()); } else { $eqgoocgaqwqcimie = "\55"; } return $eqgoocgaqwqcimie; } }
