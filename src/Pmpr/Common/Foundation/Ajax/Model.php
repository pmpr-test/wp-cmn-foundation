<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model as ORMModel; class Model extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $mguygkocuoaoqqkg = []; if (!($euoagoueguiyeggu = $icwicymcioeyeyek[Constants::squoamkioomemiyi])) { goto koyswyqcemwusuku; } foreach ($euoagoueguiyeggu as $egkyssmuqcwaciya) { $egkyssmuqcwaciya = str_replace("\x5c\x5c", "\134", $egkyssmuqcwaciya); if (!class_exists($egkyssmuqcwaciya)) { goto mqckeqywkyewukku; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof ORMModel) { goto eisakkewoaeqqeqi; } if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto ykocaswauweieysc; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->gqaysymikgeawkqa(); if (!($qwcmueausqgiwigy = $icwicymcioeyeyek[Constants::yayciqueeakqwese])) { goto scmyekuemcoeeggy; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); scmyekuemcoeeggy: $gmwiogsuisuoiwqu = $owgumcsyqsamiemg->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::wosqwewmqmyweqea => false]); $mguygkocuoaoqqkg = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; goto aaksksikokoywwqw; ykocaswauweieysc: $mguygkocuoaoqqkg = $owgumcsyqsamiemg->cwkywyqksyucoyia([$owgumcsyqsamiemg->kumuygiiqswoyasy() => [Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); aaksksikokoywwqw: if (is_array($mguygkocuoaoqqkg)) { goto kcsegweogmaqiwco; } $mguygkocuoaoqqkg = [$mguygkocuoaoqqkg]; kcsegweogmaqiwco: foreach ($mguygkocuoaoqqkg as $uusmaiomayssaecw => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [Constants::gouqcwikiiygyasc => $owgumcsyqsamiemg->keeuqgyooycqoygw($mksyucucyswaukig), Constants::uissasisiuymwsmu => $owgumcsyqsamiemg->uikgwcuascgeissw($mksyucucyswaukig), Constants::squoamkioomemiyi => $owgumcsyqsamiemg->oyeskqayoscwciem()->giiayuqckuiecosm()]); aosyiicmoiuswsce: } sqigasuoiqyqqokc: eisakkewoaeqqeqi: mqckeqywkyewukku: semsywguyogigssk: } mqkmsmceakcwuykg: koyswyqcemwusuku: return $mguygkocuoaoqqkg; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { $gyskaqycyaywiiyi = parent::ooyiwkyooyaiqumk($igqsaukqcqscimok); if ($gyskaqycyaywiiyi) { goto mqaemqqgquyscwgg; } $gyskaqycyaywiiyi = (array) $igqsaukqcqscimok; mqaemqqgquyscwgg: return $gyskaqycyaywiiyi; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu); } }
