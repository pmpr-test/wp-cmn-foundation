<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d16a012f73             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model as ORMModel; class Model extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $mguygkocuoaoqqkg = []; if ($euoagoueguiyeggu = $icwicymcioeyeyek[Constants::squoamkioomemiyi]) { foreach ($euoagoueguiyeggu as $egkyssmuqcwaciya) { $egkyssmuqcwaciya = str_replace("\x5c\134", "\134", $egkyssmuqcwaciya); if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if ($owgumcsyqsamiemg instanceof ORMModel) { $gkioossaaiumqqsq = $owgumcsyqsamiemg->iekyeyicoyyawomk(); if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $mguygkocuoaoqqkg = $gkioossaaiumqqsq->cieaqygkucwoqwke([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim($owgumcsyqsamiemg->kumuygiiqswoyasy(), $eqgoocgaqwqcimie)]); } else { $siykeiywomwwuoiw = $gkioossaaiumqqsq->gqaysymikgeawkqa(); if ($qwcmueausqgiwigy = $icwicymcioeyeyek[Constants::yayciqueeakqwese]) { $siykeiywomwwuoiw = $gkioossaaiumqqsq->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); } $gmwiogsuisuoiwqu = $gkioossaaiumqqsq->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::wosqwewmqmyweqea => false]); $mguygkocuoaoqqkg = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; } if (!is_array($mguygkocuoaoqqkg)) { $mguygkocuoaoqqkg = [$mguygkocuoaoqqkg]; } foreach ($mguygkocuoaoqqkg as $uusmaiomayssaecw => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [Constants::gouqcwikiiygyasc => $owgumcsyqsamiemg->mwyqswsaeeewsosm($mksyucucyswaukig), Constants::uissasisiuymwsmu => $owgumcsyqsamiemg->uikgwcuascgeissw($mksyucucyswaukig), Constants::squoamkioomemiyi => $owgumcsyqsamiemg->giiayuqckuiecosm()]); } } } } } return $mguygkocuoaoqqkg; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { $gyskaqycyaywiiyi = parent::ooyiwkyooyaiqumk($igqsaukqcqscimok); if (!$gyskaqycyaywiiyi) { $gyskaqycyaywiiyi = (array) $igqsaukqcqscimok; } return $gyskaqycyaywiiyi; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu); } }
