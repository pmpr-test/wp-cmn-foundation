<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model as ORMModel; class Model extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $mguygkocuoaoqqkg = []; if (!($euoagoueguiyeggu = $icwicymcioeyeyek[Constants::squoamkioomemiyi])) { goto mkiiuusasqaucucm; } foreach ($euoagoueguiyeggu as $egkyssmuqcwaciya) { $egkyssmuqcwaciya = str_replace("\134\134", "\134", $egkyssmuqcwaciya); if (!class_exists($egkyssmuqcwaciya)) { goto oqycocwaiqmyaeow; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof ORMModel) { goto goyyumqwuiywaimq; } if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto ukgsemksqoiukgoc; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->gqaysymikgeawkqa(); if (!($qwcmueausqgiwigy = $icwicymcioeyeyek[Constants::yayciqueeakqwese])) { goto aoqycegeggwwkwya; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); aoqycegeggwwkwya: $gmwiogsuisuoiwqu = $owgumcsyqsamiemg->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::wosqwewmqmyweqea => false]); $mguygkocuoaoqqkg = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; goto wkigieqkikmiqqgw; ukgsemksqoiukgoc: $mguygkocuoaoqqkg = $owgumcsyqsamiemg->cwkywyqksyucoyia([$owgumcsyqsamiemg->kumuygiiqswoyasy() => [Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); wkigieqkikmiqqgw: if (is_array($mguygkocuoaoqqkg)) { goto ekeokeoweycsyqos; } $mguygkocuoaoqqkg = [$mguygkocuoaoqqkg]; ekeokeoweycsyqos: foreach ($mguygkocuoaoqqkg as $uusmaiomayssaecw => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [Constants::gouqcwikiiygyasc => $owgumcsyqsamiemg->keeuqgyooycqoygw($mksyucucyswaukig), Constants::uissasisiuymwsmu => $owgumcsyqsamiemg->uikgwcuascgeissw($mksyucucyswaukig), Constants::squoamkioomemiyi => $owgumcsyqsamiemg->oyeskqayoscwciem()->giiayuqckuiecosm()]); gcmiayguaqqeiese: } wcowkmqskaouuqsm: goyyumqwuiywaimq: oqycocwaiqmyaeow: geakuimqwgsiaask: } qawgegcsiawquqcm: mkiiuusasqaucucm: return $mguygkocuoaoqqkg; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { $gyskaqycyaywiiyi = parent::ooyiwkyooyaiqumk($igqsaukqcqscimok); if ($gyskaqycyaywiiyi) { goto scoaiameyouasusa; } $gyskaqycyaywiiyi = (array) $igqsaukqcqscimok; scoaiameyouasusa: return $gyskaqycyaywiiyi; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu); } }
