<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model as ORMModel; class Model extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $mguygkocuoaoqqkg = []; if (!($euoagoueguiyeggu = $icwicymcioeyeyek[Constants::squoamkioomemiyi])) { goto agosuskgagmqkcqq; } foreach ($euoagoueguiyeggu as $egkyssmuqcwaciya) { $egkyssmuqcwaciya = str_replace("\x5c\x5c", "\x5c", $egkyssmuqcwaciya); if (!class_exists($egkyssmuqcwaciya)) { goto mqkkmgeccukekuus; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof ORMModel) { goto oicqseawwmwcgsua; } if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto mycaymeeoakigqwk; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->gqaysymikgeawkqa(); if (!($qwcmueausqgiwigy = $icwicymcioeyeyek[Constants::yayciqueeakqwese])) { goto yymmsiqcoeikoges; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); yymmsiqcoeikoges: $gmwiogsuisuoiwqu = $owgumcsyqsamiemg->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::wosqwewmqmyweqea => false]); $mguygkocuoaoqqkg = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; goto wosiwcgiequysoiq; mycaymeeoakigqwk: $mguygkocuoaoqqkg = $owgumcsyqsamiemg->cwkywyqksyucoyia([$owgumcsyqsamiemg->kumuygiiqswoyasy() => [Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); wosiwcgiequysoiq: if (is_array($mguygkocuoaoqqkg)) { goto ecicsgkwsukqmquo; } $mguygkocuoaoqqkg = [$mguygkocuoaoqqkg]; ecicsgkwsukqmquo: foreach ($mguygkocuoaoqqkg as $uusmaiomayssaecw => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [Constants::gouqcwikiiygyasc => $owgumcsyqsamiemg->keeuqgyooycqoygw($mksyucucyswaukig), Constants::uissasisiuymwsmu => $owgumcsyqsamiemg->uikgwcuascgeissw($mksyucucyswaukig), Constants::squoamkioomemiyi => $owgumcsyqsamiemg->oyeskqayoscwciem()->giiayuqckuiecosm()]); iiymmyommkikmyqa: } cqkkmgicucyoeqca: oicqseawwmwcgsua: mqkkmgeccukekuus: cwaksqcggwcaucmo: } oyiogyamekukoqce: agosuskgagmqkcqq: return $mguygkocuoaoqqkg; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { $gyskaqycyaywiiyi = parent::ooyiwkyooyaiqumk($igqsaukqcqscimok); if ($gyskaqycyaywiiyi) { goto cwuiegmgmaoasqys; } $gyskaqycyaywiiyi = (array) $igqsaukqcqscimok; cwuiegmgmaoasqys: return $gyskaqycyaywiiyi; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu); } }
