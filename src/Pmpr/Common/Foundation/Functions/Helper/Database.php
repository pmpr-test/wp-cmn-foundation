<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\_ORM\Traits\SchemaTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; use WP_Query; use wpdb; class Database extends Common { use SchemaTrait; public function flush() { $ooggeikkseeqyyek = $this->uuqwaeygaeemceik(); if (!$ooggeikkseeqyyek) { goto suwciqqmccskgmkg; } $ooggeikkseeqyyek->flush(); suwciqqmccskgmkg: } public function uuqwaeygaeemceik() : ?wpdb { global $wpdb; $ooggeikkseeqyyek = null; if (!$wpdb instanceof wpdb) { goto isqiaewwwiusyaoy; } $ooggeikkseeqyyek = $wpdb; isqiaewwwiusyaoy: return $ooggeikkseeqyyek; } private function owicscwgeuqcqaig() : ?WP_Query { global $wp_query; $gqgemcmoicmgaqie = null; if (!$wp_query instanceof WP_Query) { goto asgykkakkoeygiwm; } $gqgemcmoicmgaqie = $wp_query; asgykkakkoeygiwm: return $gqgemcmoicmgaqie; } public function ccwowuakmqoemoem($gqgemcmoicmgaqie, $kekecymwqwcwocya) { if (!($kekecymwqwcwocya && $gqgemcmoicmgaqie instanceof WP_Query)) { goto egoyuuqcqmgkswyg; } foreach ($kekecymwqwcwocya as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $gqgemcmoicmgaqie->set($uusmaiomayssaecw, $eqgoocgaqwqcimie); aguqiwwiooqqgywi: } mwqqssomwmsmaaqk: egoyuuqcqmgkswyg: return $gqgemcmoicmgaqie; } public function get($gygawogosumsgmme, $ggauoeuaesiymgee = '') { $gqgemcmoicmgaqie = $this->owicscwgeuqcqaig(); $sogksuscggsicmac = $ggauoeuaesiymgee; if (!$gqgemcmoicmgaqie) { goto jiiiygsseagcmycw; } $sogksuscggsicmac = $gqgemcmoicmgaqie->get($gygawogosumsgmme, $ggauoeuaesiymgee); jiiiygsseagcmycw: return $sogksuscggsicmac; } public function ciqgsyoasskoiukm(array $ywmkwiwkosakssii = []) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aasascamegmwqmqk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ugsuecoyuqcamsac, ''); $sogksuscggsicmac = ''; if (!$aasascamegmwqmqk) { goto amkeeqecmwsmwqma; } $uoomaookgsyciacm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iowgsqgiaamyuswi, []); $siykeiywomwwuoiw = []; if (!(is_array($uoomaookgsyciacm) && $uoomaookgsyciacm)) { goto qioeuukaqkcsiiwk; } foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::ciyoccqkiamemcmm, $gqgemcmoicmgaqie); $yummaigqmauwcyou = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::euoaaiqkqcqcgeco, Constants::qmesccgukkkogskw); switch ($yummaigqmauwcyou) { case Constants::qmesccgukkkogskw: $qsycuegoicqcqkmo = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::cwsguekoagqkaesm, Constants::weaykmmocuacwekg); $cackiyicawmkyqqg = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::eugyciakiowwcuwm, "\75"); if (!is_numeric($qgoqiacsiccwoawi)) { goto uiakqoyqmcwokgse; } $qgoqiacsiccwoawi = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::meisqwykgaymauka, $qgoqiacsiccwoawi); uiakqoyqmcwokgse: if (!isset($siykeiywomwwuoiw[Constants::qmesccgukkkogskw])) { goto wkokasiqoeycyukq; } if (is_array($eqgoocgaqwqcimie)) { goto uecycmeaoqgqcomm; } $eqgoocgaqwqcimie = "{$qgoqiacsiccwoawi}\x20{$cackiyicawmkyqqg}\x20{$eqgoocgaqwqcimie}"; goto siiwoymcomqegmya; uecycmeaoqgqcomm: if (!isset($eqgoocgaqwqcimie[Constants::ugsuecoyuqcamsac])) { goto gquyeowwseuycuoq; } $eqgoocgaqwqcimie = $this->ciqgsyoasskoiukm($eqgoocgaqwqcimie); if (in_array($cackiyicawmkyqqg, ["\x49\116", "\116\x4f\x54\40\111\116"])) { goto oksimyciqsugcami; } $cackiyicawmkyqqg = "\x49\x4e"; oksimyciqsugcami: $eqgoocgaqwqcimie = "{$cackiyicawmkyqqg}\x20\50\x20{$eqgoocgaqwqcimie}\x20\51"; gquyeowwseuycuoq: siiwoymcomqegmya: $eqgoocgaqwqcimie = "{$qsycuegoicqcqkmo}\40{$eqgoocgaqwqcimie}"; $sqqewmoeaekuyyas = 50; goto cgqmyikikqgmksgg; wkokasiqoeycyukq: $eqgoocgaqwqcimie = "\127\110\105\x52\x45\x20{$qgoqiacsiccwoawi}\x20{$cackiyicawmkyqqg}\x20{$eqgoocgaqwqcimie}"; $sqqewmoeaekuyyas = 25; cgqmyikikqgmksgg: $siykeiywomwwuoiw[Constants::qmesccgukkkogskw] = [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; goto qiokyyweaoysyeci; } kmkwsqgumkwgemwc: qiokyyweaoysyeci: magaykaioygmiciq: } osiemgqgiycaymio: qioeuukaqkcsiiwk: if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto cycwiouaowuswkmk; } $sikaymiwcesagayc = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($sikaymiwcesagayc, Constants::ciyoccqkiamemcmm, $sikaymiwcesagayc); $umwqusowiqmyseom = $gkyciwoiiisgywcs->get($sikaymiwcesagayc, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko); $siykeiywomwwuoiw[Constants::cqcimoqckgmaacyw] = [Constants::ciyoccqkiamemcmm => "\117\x52\x44\105\x52\x20\x42\x59\40{$eqgoocgaqwqcimie}\x20{$umwqusowiqmyseom}", Constants::iuqumwggccmcuyem => 90]; cycwiouaowuswkmk: if (!isset($ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw])) { goto aoiwocgacociakoy; } $siykeiywomwwuoiw[Constants::cgiswgcumueqgcmw] = [Constants::ciyoccqkiamemcmm => "\x4c\111\115\x49\124\x20{$ywmkwiwkosakssii[Constants::cgiswgcumueqgcmw]}", Constants::iuqumwggccmcuyem => 100]; aoiwocgacociakoy: if (!(($ooggeikkseeqyyek = $this->uuqwaeygaeemceik()) && $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::euugkeokkewisqmi, ''))) { goto sguosuigwgwkikgs; } $aasascamegmwqmqk = "{$ooggeikkseeqyyek->prefix}{$aasascamegmwqmqk}"; sguosuigwgwkikgs: $aasascamegmwqmqk = $gkyciwoiiisgywcs->get($ooggeikkseeqyyek, $aasascamegmwqmqk, $aasascamegmwqmqk); if (!$aasascamegmwqmqk) { goto wgkamcmqescgqcyw; } $sogksuscggsicmac = implode("\x20", $gkyciwoiiisgywcs->yaeiiwwyckwugsem($siykeiywomwwuoiw)); $wkkweuacukumqmya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::soquiwyuimckgiow, "\x2a"); if (!is_array($wkkweuacukumqmya)) { goto ycyueqmkqyycmaus; } $wkkweuacukumqmya = implode("\x2c\x20", $wkkweuacukumqmya); ycyueqmkqyycmaus: $sogksuscggsicmac = "\x53\x45\x4c\105\103\x54\40{$wkkweuacukumqmya}\40\106\x52\x4f\115\x20{$aasascamegmwqmqk}\x20{$sogksuscggsicmac}"; wgkamcmqescgqcyw: amkeeqecmwsmwqma: return $sogksuscggsicmac; } public function yqccgscwmeeyigkg($cmwygeyygwqaemaq) : string { $sogksuscggsicmac = ''; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto vkmscascaoysaqoc; } $sogksuscggsicmac = $ooggeikkseeqyyek->esc_like($cmwygeyygwqaemaq); vkmscascaoysaqoc: return $sogksuscggsicmac; } public function delete($aasascamegmwqmqk, $icsywsyukqcciiky, $saqmwwmqiwmkiwaa) { $meisgakuwcmwosms = false; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto soskeqqausokwugo; } $meisgakuwcmwosms = $ooggeikkseeqyyek->delete($aasascamegmwqmqk, $icsywsyukqcciiky, $saqmwwmqiwmkiwaa); soskeqqausokwugo: return $meisgakuwcmwosms; } public function prepare(string $gqgemcmoicmgaqie, ...$ywmkwiwkosakssii) : string { if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto ioqmgaeuiicymgky; } $gqgemcmoicmgaqie = (string) $ooggeikkseeqyyek->prepare($gqgemcmoicmgaqie, ...$ywmkwiwkosakssii); ioqmgaeuiicymgky: return $gqgemcmoicmgaqie; } public function qaumqeeagueuqkcg($gqgemcmoicmgaqie, int $iegmsyuiekaayqqy = 0, int $ymsweociooeskgwg = 0) : ?string { $ooggeikkseeqyyek = $this->uuqwaeygaeemceik(); $sogksuscggsicmac = null; if (!$ooggeikkseeqyyek) { goto gcgsyyiismkwoyck; } if (!is_array($gqgemcmoicmgaqie)) { goto ywmcuouqguawueqm; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); ywmcuouqguawueqm: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto gkoaywyuyqemyiqw; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_var($gqgemcmoicmgaqie, $iegmsyuiekaayqqy, $ymsweociooeskgwg); gkoaywyuyqemyiqw: gcgsyyiismkwoyck: return $sogksuscggsicmac; } public function maewiqmcygmeuaso($gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $sogksuscggsicmac = null; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto qywueycgouwamkso; } if (!is_array($gqgemcmoicmgaqie)) { goto aswikmsouwkequca; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); aswikmsouwkequca: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto ycgsmkkioyqqawyk; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_results($gqgemcmoicmgaqie, $aqykuigiuwmmcieu); ycgsmkkioyqqawyk: qywueycgouwamkso: return $sogksuscggsicmac; } public function gmogewiwceqokqmy($gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, int $ymsweociooeskgwg = 0) { $sogksuscggsicmac = null; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto qaykqsyoyscaqsce; } if (!is_array($gqgemcmoicmgaqie)) { goto wecgakiimqymkmiy; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); wecgakiimqymkmiy: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto uggisigeswwyqmqi; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_row($gqgemcmoicmgaqie, $aqykuigiuwmmcieu, $ymsweociooeskgwg); uggisigeswwyqmqi: qaykqsyoyscaqsce: return $sogksuscggsicmac; } public function imeeqegecykawmmi($gqgemcmoicmgaqie, int $iegmsyuiekaayqqy = 0) : ?array { $sogksuscggsicmac = null; if (!($ooggeikkseeqyyek = $this->uuqwaeygaeemceik())) { goto ysykemiscamquoce; } if (!is_array($gqgemcmoicmgaqie)) { goto cuqwswgmwuwmgkwe; } $gqgemcmoicmgaqie = $this->ciqgsyoasskoiukm($gqgemcmoicmgaqie); cuqwswgmwuwmgkwe: if (!($gqgemcmoicmgaqie && is_string($gqgemcmoicmgaqie))) { goto twusqqkmqgswisei; } $sogksuscggsicmac = $ooggeikkseeqyyek->get_col($gqgemcmoicmgaqie, $iegmsyuiekaayqqy); twusqqkmqgswisei: ysykemiscamquoce: return $sogksuscggsicmac; } public function union($uoomaookgsyciacm) { $sogksuscggsicmac = false; $swwmymiaiosiyqis = $siykeiywomwwuoiw = null; foreach ($uoomaookgsyciacm as $egkyssmuqcwaciya => $gqgemcmoicmgaqie) { if (!is_subclass_of($egkyssmuqcwaciya, Model::class)) { goto gcgwqksqskumiumq; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof Model) { goto awcgiyqmoemqumeg; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->kqewyqqqiyiouaou($gqgemcmoicmgaqie); if (!$swwmymiaiosiyqis) { goto ukugqakgsqqmgege; } $siykeiywomwwuoiw->union($swwmymiaiosiyqis); ukugqakgsqqmgege: $swwmymiaiosiyqis = $siykeiywomwwuoiw; awcgiyqmoemqumeg: gcgwqksqskumiumq: $sogksuscggsicmac = $siykeiywomwwuoiw; mwmwmswiueocaeug: } oaimckymswkqoysq: return $sogksuscggsicmac; } }
