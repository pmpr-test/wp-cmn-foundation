<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model as ORMModel; class Model extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $mguygkocuoaoqqkg = []; if (!($euoagoueguiyeggu = $icwicymcioeyeyek[Constants::squoamkioomemiyi])) { goto cmewqmeamawkiigk; } foreach ($euoagoueguiyeggu as $egkyssmuqcwaciya) { $egkyssmuqcwaciya = str_replace("\x5c\134", "\x5c", $egkyssmuqcwaciya); if (!class_exists($egkyssmuqcwaciya)) { goto iaawguyeskggqumi; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof ORMModel) { goto umkuoceaqoiucmim; } if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto iyuykukkmuayayya; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->gqaysymikgeawkqa(); if (!($qwcmueausqgiwigy = $icwicymcioeyeyek[Constants::yayciqueeakqwese])) { goto yaagosqmegoeuayu; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); yaagosqmegoeuayu: $gmwiogsuisuoiwqu = $owgumcsyqsamiemg->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::wosqwewmqmyweqea => false]); $mguygkocuoaoqqkg = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; goto qcococyiuemmqkyy; iyuykukkmuayayya: $mguygkocuoaoqqkg = $owgumcsyqsamiemg->cwkywyqksyucoyia([$owgumcsyqsamiemg->kumuygiiqswoyasy() => [Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); qcococyiuemmqkyy: if (is_array($mguygkocuoaoqqkg)) { goto cycegeagomyaqcyk; } $mguygkocuoaoqqkg = [$mguygkocuoaoqqkg]; cycegeagomyaqcyk: foreach ($mguygkocuoaoqqkg as $uusmaiomayssaecw => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [Constants::gouqcwikiiygyasc => $owgumcsyqsamiemg->keeuqgyooycqoygw($mksyucucyswaukig), Constants::uissasisiuymwsmu => $owgumcsyqsamiemg->uikgwcuascgeissw($mksyucucyswaukig), Constants::squoamkioomemiyi => $owgumcsyqsamiemg->oyeskqayoscwciem()->giiayuqckuiecosm()]); swymgyikwmgeocwc: } ycmkeyowaosmeqcq: umkuoceaqoiucmim: iaawguyeskggqumi: aykqwyescqmocguo: } qkuyaaweimgsaqww: cmewqmeamawkiigk: return $mguygkocuoaoqqkg; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { $gyskaqycyaywiiyi = parent::ooyiwkyooyaiqumk($igqsaukqcqscimok); if ($gyskaqycyaywiiyi) { goto owcacaiiayyowwaq; } $gyskaqycyaywiiyi = (array) $igqsaukqcqscimok; owcacaiiayyowwaq: return $gyskaqycyaywiiyi; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu); } }
