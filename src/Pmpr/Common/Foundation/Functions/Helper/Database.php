<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\_ORM\Traits\SchemaTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; use WP_Query; use wpdb; class Database extends Common { use SchemaTrait; public function flush() { $ooggeikkseeqyyek = $this->uuqwaeygaeemceik(); if (!$ooggeikkseeqyyek) { goto uuooygauoaumkemu; } $ooggeikkseeqyyek->flush(); uuooygauoaumkemu: } public function uuqwaeygaeemceik() : ?wpdb { global $wpdb; $ooggeikkseeqyyek = null; if (!$wpdb instanceof wpdb) { goto osgaygqiwagaowsq; } $ooggeikkseeqyyek = $wpdb; osgaygqiwagaowsq: return $ooggeikkseeqyyek; } private function owicscwgeuqcqaig() : ?WP_Query { global $wp_query; $gqgemcmoicmgaqie = null; if (!$wp_query instanceof WP_Query) { goto kecaqcyccioyaoaa; } $gqgemcmoicmgaqie = $wp_query; kecaqcyccioyaoaa: return $gqgemcmoicmgaqie; } public function ccwowuakmqoemoem($gqgemcmoicmgaqie, $kekecymwqwcwocya) { if (!($kekecymwqwcwocya && $gqgemcmoicmgaqie instanceof WP_Query)) { goto caseeeggigkaoswu; } foreach ($kekecymwqwcwocya as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $gqgemcmoicmgaqie->set($uusmaiomayssaecw, $eqgoocgaqwqcimie); qsmmausewiocaesg: } csuyaisqcmkkyqiw: caseeeggigkaoswu: return $gqgemcmoicmgaqie; } public function get($gygawogosumsgmme, $ggauoeuaesiymgee = '') { $gqgemcmoicmgaqie = $this->owicscwgeuqcqaig(); $sogksuscggsicmac = $ggauoeuaesiymgee; if (!$gqgemcmoicmgaqie) { goto cwuqamaiywoeieyw; } $sogksuscggsicmac = $gqgemcmoicmgaqie->get($gygawogosumsgmme, $ggauoeuaesiymgee); cwuqamaiywoeieyw: return $sogksuscggsicmac; } public function ciqgsyoasskoiukm(array $ywmkwiwkosakssii = []) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aasascamegmwqmqk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ugsuecoyuqcamsac, ''); $sogksuscggsicmac = ''; if (!$aasascamegmwqmqk) { goto egoyuuqcqmgkswyg; } $uoomaookgsyciacm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iowgsqgiaamyuswi, []); $siykeiywomwwuoiw = []; if (!(is_array($uoomaookgsyciacm) && $uoomaookgsyciacm)) { goto smqiciaewkmmyswu; } foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::ciyoccqkiamemcmm, $gqgemcmoicmgaqie); $yummaigqmauwcyou = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::euoaaiqkqcqcgeco, Constants::qmesccgukkkogskw); switch ($yummaigqmauwcyou) { case Constants::qmesccgukkkogskw: $qsycuegoicqcqkmo = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::cwsguekoagqkaesm, Constants::weaykmmocuacwekg); $cackiyicawmkyqqg = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::eugyciakiowwcuwm, "\75"); if (!is_numeric($qgoqiacsiccwoawi)) { goto qqowaeggkimumgei; } $qgoqiacsiccwoawi = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::meisqwykgaymauka, $qgoqiacsiccwoawi); qqowaeggkimumgei: if (!isset($siykeiywomwwuoiw[Constants::qmesccgukkkogskw])) { goto ewaqcgwowgogwaqi; } if (is_array($eqgoocgaqwqcimie)) { goto cwuakumskisqyogc; } $eqgoocgaqwqcimie = "{$qgoqiacsiccwoawi}\x20{$cackiyicawmkyqqg}\40{$eqgoocgaqwqcimie}"; goto ymiiquygeeucsgaq; cwuakumskisqyogc: if (!isset($eqgoocgaqwqcimie[Constants::ugsuecoyuqcamsac])) { goto yqqueamqmkcwimeq; } $eqgoocgaqwqcimie = $this->ciqgsyoasskoiukm($eqgoocgaqwqcimie); if (in_array($cackiyicawmkyqqg, ["\111\116", "\116\117\124\x20\111\116"])) { goto kckkiuumaegucsqg; } $cackiyicawmkyqqg = "\111\x4e"; kckkiuumaegucsqg: $eqgoocgaqwqcimie = "{$cackiyicawmkyqqg}\40\x28\x20{$eqgoocgaqwqcimie}\40\x29"; yqqueamqmkcwimeq: ymiiquygeeucsgaq: $eqgoocgaqwqcimie = "{$qsycuegoicqcqkmo}\40{$eqgoocgaqwqcimie}"; $sqqewmoeaekuyyas = 50; goto cqeyqcauamscauiq; ewaqcgwowgogwaqi: $eqgoocgaqwqcimie = "\127\x48\105\x52\x45\40{$qgoqiacsiccwoawi}\x20{$cackiyicawmkyqqg}\x20{$eqgoocgaqwqcimie}"; $sqqewmoeaekuyyas = 25; cqeyqcauamscauiq: $siykeiywomwwuoiw[Constants::qmesccgukkkogskw] = [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; goto mgqqigauyucewouk; } kwigwuwessmseqik: mgqqigauyucewouk: siawaquisuoeysqa: } giemwgcqeogmauao: smqiciaewkmmyswu: if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto suwciqqmccskgmkg; } $sikaymiwcesagayc = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($sikaymiwcesagayc, Constants::ciyoccqkiamemcmm, $sikaymiwcesagayc); $umwqusowiqmyseom = $gkyciwoiiisgywcs->get($sikaymiwcesagayc, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko); $siykeiywomwwuoiw[Constants::cqcimoqckgmaacyw] = [Constants::ciyoccqkiamemcmm => "\117\122\104\x45\x52\40\x42\131\x20{$eqgoocgaqwqcimie}\40{$umwqusowiqmyseom}", Constants::iuqumwggccmcuyem => 90]; suwciqqmccskgmkg: if (!isset($ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw])) { goto isqiaewwwiusyaoy; } $siykeiywomwwuoiw[Constants::cgiswgcumueqgcmw] = [Constants::ciyoccqkiamemcmm => "\x4c\x49\115\x49\x54\40{$ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw]}", Constants::iuqumwggccmcuyem => 100]; isqiaewwwiusyaoy: if (!(($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) && $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::euugkeokkewisqmi, ''))) { goto asgykkakkoeygiwm; } $aasascamegmwqmqk = "{$ooggeikkseeqyyek->prefix}{$aasascamegmwqmqk}"; asgykkakkoeygiwm: $aasascamegmwqmqk = $gkyciwoiiisgywcs->get($ooggeikkseeqyyek, $aasascamegmwqmqk, $aasascamegmwqmqk); if (!$aasascamegmwqmqk) { goto aguqiwwiooqqgywi; } $sogksuscggsicmac = implode("\40", $gkyciwoiiisgywcs->yaeiiwwyckwugsem($siykeiywomwwuoiw)); $wkkweuacukumqmya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::soquiwyuimckgiow, "\x2a"); if (!is_array($wkkweuacukumqmya)) { goto mwqqssomwmsmaaqk; } $wkkweuacukumqmya = implode("\x2c\40", $wkkweuacukumqmya); mwqqssomwmsmaaqk: $sogksuscggsicmac = "\123\105\x4c\105\x43\x54\40{$wkkweuacukumqmya}\x20\106\122\117\115\40{$aasascamegmwqmqk}\40{$sogksuscggsicmac}"; aguqiwwiooqqgywi: egoyuuqcqmgkswyg: return $sogksuscggsicmac; } public function yqccgscwmeeyigkg($cmwygeyygwqaemaq) : string { $sogksuscggsicmac = ''; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto jiiiygsseagcmycw; } $sogksuscggsicmac = $ooggeikkseeqyyek->esc_like($cmwygeyygwqaemaq); jiiiygsseagcmycw: return $sogksuscggsicmac; } public function delete($aasascamegmwqmqk, $icsywsyukqcciiky, $saqmwwmqiwmkiwaa) { $meisgakuwcmwosms = false; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto osiemgqgiycaymio; } $meisgakuwcmwosms = $ooggeikkseeqyyek->delete($aasascamegmwqmqk, $icsywsyukqcciiky, $saqmwwmqiwmkiwaa); osiemgqgiycaymio: return $meisgakuwcmwosms; } public function prepare(string $gqgemcmoicmgaqie, ...$ywmkwiwkosakssii) : string { if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto magaykaioygmiciq; } $gqgemcmoicmgaqie = (string) $ooggeikkseeqyyek->prepare($gqgemcmoicmgaqie, ...$ywmkwiwkosakssii); magaykaioygmiciq: return $gqgemcmoicmgaqie; } public function qaumqeeagueuqkcg($gqgemcmoicmgaqie, int $iegmsyuiekaayqqy = 0, int $ymsweociooeskgwg = 0) : ?string { $ooggeikkseeqyyek = $this->uuqwaeygaeemceik(); $sogksuscggsicmac = null; if (!$ooggeikkseeqyyek) { goto uiakqoyqmcwokgse; } if (!is_array($gqgemcmoicmgaqie)) { goto qiokyyweaoysyeci; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); qiokyyweaoysyeci: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto kmkwsqgumkwgemwc; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_var($gqgemcmoicmgaqie, $iegmsyuiekaayqqy, $ymsweociooeskgwg); kmkwsqgumkwgemwc: uiakqoyqmcwokgse: return $sogksuscggsicmac; } public function maewiqmcygmeuaso($gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $sogksuscggsicmac = null; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto uecycmeaoqgqcomm; } if (!is_array($gqgemcmoicmgaqie)) { goto oksimyciqsugcami; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); oksimyciqsugcami: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto gquyeowwseuycuoq; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_results($gqgemcmoicmgaqie, $aqykuigiuwmmcieu); gquyeowwseuycuoq: uecycmeaoqgqcomm: return $sogksuscggsicmac; } public function gmogewiwceqokqmy($gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, int $ymsweociooeskgwg = 0) { $sogksuscggsicmac = null; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto cgqmyikikqgmksgg; } if (!is_array($gqgemcmoicmgaqie)) { goto siiwoymcomqegmya; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); siiwoymcomqegmya: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto wkokasiqoeycyukq; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_row($gqgemcmoicmgaqie, $aqykuigiuwmmcieu, $ymsweociooeskgwg); wkokasiqoeycyukq: cgqmyikikqgmksgg: return $sogksuscggsicmac; } public function imeeqegecykawmmi($gqgemcmoicmgaqie, int $iegmsyuiekaayqqy = 0) : ?array { $sogksuscggsicmac = null; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto aoiwocgacociakoy; } if (!is_array($gqgemcmoicmgaqie)) { goto qioeuukaqkcsiiwk; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); qioeuukaqkcsiiwk: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto cycwiouaowuswkmk; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_col($gqgemcmoicmgaqie, $iegmsyuiekaayqqy); cycwiouaowuswkmk: aoiwocgacociakoy: return $sogksuscggsicmac; } public function union($uoomaookgsyciacm) { $sogksuscggsicmac = false; $swwmymiaiosiyqis = $siykeiywomwwuoiw = null; foreach ($uoomaookgsyciacm as $egkyssmuqcwaciya => $gqgemcmoicmgaqie) { if (!is_subclass_of($egkyssmuqcwaciya, Model::class)) { goto vkmscascaoysaqoc; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof Model) { goto amkeeqecmwsmwqma; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->kqewyqqqiyiouaou($gqgemcmoicmgaqie); if (!$swwmymiaiosiyqis) { goto wgkamcmqescgqcyw; } $siykeiywomwwuoiw->union($swwmymiaiosiyqis); wgkamcmqescgqcyw: $swwmymiaiosiyqis = $siykeiywomwwuoiw; amkeeqecmwsmwqma: vkmscascaoysaqoc: $sogksuscggsicmac = $siykeiywomwwuoiw; ycyueqmkqyycmaus: } sguosuigwgwkikgs: return $sogksuscggsicmac; } }
