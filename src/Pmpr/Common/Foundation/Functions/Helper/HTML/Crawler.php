<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671439f5ea337             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use DOMAttr; use DOMDocument; use DOMElement; use DOMNode; use Exception; use InvalidArgumentException; use Pmpr\Common\Foundation\Interfaces\Constants; use Symfony\Component\DomCrawler\Crawler as DOMCrawler; class Crawler extends Common { public function uaqiwssauwwuyueg(DOMCrawler $kasgukgceywckyou) : DOMDocument { return $this->wugqmqwisygwoeas($kasgukgceywckyou)->ownerDocument; } public function has($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : bool { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); return $this->ygmcsmegcysyeoss($this->find($kasgukgceywckyou, $yuumukkaswwoywya)) > 0; } public function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMNode) { $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode; $this->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom); $nsmgceoqaqogqmuw = $this->skkueuquuqweeyqo($kwmksuuciqkiymek); break; } } } return $nsmgceoqaqogqmuw; } public function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw) { return $this->gqskweuukuceuaoq($ymyisaeksssueeik->ownerDocument, $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw))->documentElement); } public function wuuawmeqqyyyemsw($ymyisaeksssueeik) : array { $siquossayskcwkea = []; if ($ymyisaeksssueeik instanceof DOMElement) { foreach ($ymyisaeksssueeik->attributes as $sicussmmuqmeqygw) { $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue; } } return $siquossayskcwkea; } public function kqgwgkuykuumwcgw($ikwqcaqmyuemessi, $uuswugicgoqcyiiy) { $sogksuscggsicmac = false; if ($ikwqcaqmyuemessi instanceof DOMElement) { $omwmuycmeqcqokom = $ikwqcaqmyuemessi->parentNode; if ($omwmuycmeqcqokom) { $sogksuscggsicmac = $omwmuycmeqcqokom->insertBefore($uuswugicgoqcyiiy, $ikwqcaqmyuemessi); } } return $sogksuscggsicmac; } public function owgokkumqicyuyiy($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : bool { $sogksuscggsicmac = false; if ($ymyisaeksssueeik instanceof DOMElement) { $sogksuscggsicmac = $ymyisaeksssueeik->hasAttribute($ymqmyyeuycgmigyo); } return $sogksuscggsicmac; } public function cqieekgkogamcsqk($ymyisaeksssueeik, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $sogksuscggsicmac = false; if ($ymyisaeksssueeik instanceof DOMElement) { $sogksuscggsicmac = $ymyisaeksssueeik->setAttribute($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } return $sogksuscggsicmac; } public function guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : string { $wisgiwskwawciiee = ''; if ($ymyisaeksssueeik instanceof DOMElement) { $wisgiwskwawciiee = $ymyisaeksssueeik->getAttribute($ymqmyyeuycgmigyo); } return $wisgiwskwawciiee; } public function qeeokkmmskuyoecg($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : bool { $sogksuscggsicmac = false; if ($ymyisaeksssueeik instanceof DOMElement) { $sogksuscggsicmac = $ymyisaeksssueeik->removeAttribute($ymqmyyeuycgmigyo); } return $sogksuscggsicmac; } public function aaqqksicmumkuycy($kqywgoqsmuswammk, $nsmgceoqaqogqmuw) { } public function wkwyyyeomkqggggw($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : int { $gaeqamemwmwsyukm = 0; if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss($this->find($kasgukgceywckyou, $yuumukkaswwoywya)); } return $gaeqamemwmwsyukm; } public function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $kqywgoqsmuswammk, $ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $ycqsugugqomewkke = false; foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMElement && ($koaqiaecmascwuyy = $this->auokmyiaciikcekk($kqywgoqsmuswammk, $ewgwqamkygiqaawc, $wwgucssaecqekuek, $ymyisaeksssueeik))) { if ($pmeuqieyyceuacis = $ymyisaeksssueeik->nextSibling) { $this->kqgwgkuykuumwcgw($pmeuqieyyceuacis, $koaqiaecmascwuyy); } else { $this->cgeyeoimiuyogose($ymyisaeksssueeik->parentNode, $koaqiaecmascwuyy); } $ycqsugugqomewkke = true; } } if ($ycqsugugqomewkke) { $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) { if ($uumwowmewaqyggce instanceof DOMNode) { $okcscwesammossuq = []; foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) { $okcscwesammossuq[] = $wcgsoqmmciswkmiq; } $uuswugicgoqcyiiy = $this->auokmyiaciikcekk($ymqmyyeuycgmigyo, null, [], $uumwowmewaqyggce); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->cgeyeoimiuyogose($uuswugicgoqcyiiy, $wcgsoqmmciswkmiq); } foreach ($uumwowmewaqyggce->attributes as $sicussmmuqmeqygw) { $this->cqieekgkogamcsqk($uuswugicgoqcyiiy, $sicussmmuqmeqygw->nodeName, $sicussmmuqmeqygw->nodeValue); } $this->caqmeawgoiceoymu($uumwowmewaqyggce, $uuswugicgoqcyiiy); } } } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { if (is_array($sgksuwkwyimqgaii)) { foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $this->soeaagycqiykaymg($kasgukgceywckyou, $yuumukkaswwoywya); } } else { $this->soeaagycqiykaymg($kasgukgceywckyou, $sgksuwkwyimqgaii); } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function kkisyguyosoyymqs($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : bool { $umuecysoywoumgwo = false; if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { if ($ksiyqouuaoymsycg = $this->find($kasgukgceywckyou, $yuumukkaswwoywya)) { $muiaiuymwoiaiwwm = $ksiyqouuaoymsycg->children()->count(); $umuecysoywoumgwo = $muiaiuymwoiaiwwm > 0; } } return $umuecysoywoumgwo; } public function ogaeogwycyqqckeu($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::yaeeqsosiaimuqma), $nsmgceoqaqogqmuw); } public function maakiyaweemewuao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::kkiywioiccuqokis), $nsmgceoqaqogqmuw); } public function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::REPLACE), $nsmgceoqaqogqmuw); } public function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii), $nsmgceoqaqogqmuw); } public function muuoqyqmayuwucao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::scucyuqmgoscisoa), $nsmgceoqaqogqmuw); } public function mqyacwaaocgcsyag($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMElement) { $msqkueqksqwmskak = array_keys($siquossayskcwkea); foreach ($ymyisaeksssueeik->attributes as $sicussmmuqmeqygw) { $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName; if (in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak, true)) { $this->cqieekgkogamcsqk($ymyisaeksssueeik, $siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue); } } } } } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee) : string { $eqgoocgaqwqcimie = ''; if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMElement) { $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); if ($eqgoocgaqwqcimie) { break; } } } } return $eqgoocgaqwqcimie; } public function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : array { $siquossayskcwkea = []; if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $siquossayskcwkea = $this->wuuawmeqqyyyemsw($ymyisaeksssueeik); if ($siquossayskcwkea) { break; } } } return $siquossayskcwkea; } public function skciuoqgiqoawwwe($kqywgoqsmuswammk, bool $ewgwqamkygiqaawc = false) { if ($ewgwqamkygiqaawc) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($kqywgoqsmuswammk, "\164\x65\x78\x74\x43\157\156\164\145\156\164"); } else { $nsmgceoqaqogqmuw = $this->skkueuquuqweeyqo($kqywgoqsmuswammk); } return $nsmgceoqaqogqmuw; } public function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, bool $qmeuaeiseuacgiqc = true, string $yuumukkaswwoywya = Constants::cikssaguawsukusm) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $omwmuycmeqcqokom); if ($ymyisaeksssueeik instanceof DOMNode) { $this->agmamqsgiugeeayw($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc, $yuumukkaswwoywya); } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, bool $ewgwqamkygiqaawc = false) : string { $aqykuigiuwmmcieu = ''; if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya); if ($ymyisaeksssueeik instanceof DOMNode) { if ($ewgwqamkygiqaawc) { $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent; } else { $aqykuigiuwmmcieu .= $this->skkueuquuqweeyqo($ymyisaeksssueeik); } } } return $aqykuigiuwmmcieu; } public function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, bool $ewgwqamkygiqaawc = false) : array { $sogksuscggsicmac = []; if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMNode) { $this->cygiccaaumeiwwmk($ymyisaeksssueeik); $sogksuscggsicmac[] = $this->skciuoqgiqoawwwe($ymyisaeksssueeik, $ewgwqamkygiqaawc); } } } return $sogksuscggsicmac; } public function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', bool $uuksaskqamgouosy = true) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMNode) { if ($uuksaskqamgouosy) { $ymyisaeksssueeik->nodeValue = ''; if ($goiaaeekgeqqmaqo) { $this->iuioyckswgesgsqw($ymyisaeksssueeik, $goiaaeekgeqqmaqo); } } else { $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo; } } } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, int $uuyoeicyoayimaoa = 0, bool $ksaameoqigiaoigg = true) : string { if (is_callable($ekiuyucoiagmscgy) && ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) { if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) { break; } if ($ymyisaeksssueeik instanceof DOMElement && !call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) { break; } } if ($ksaameoqigiaoigg) { $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function wesimowqwekiqiow($nsmgceoqaqogqmuw, string $eeqsmkqmsowmicwi = Constants::wwukgkqwyakeqwqk, bool $cussukyecoaeayqk = true) : string { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kswaimykcacqyaay = $this->wugqmqwisygwoeas($kasgukgceywckyou, "\150\145\x61\x64\x20\x3e\x20{$eeqsmkqmsowmicwi}"); $ewgwqamkygiqaawc = ''; if ($kswaimykcacqyaay instanceof DOMNode) { $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, "\133\x73\x74\171\154\145\135"); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMElement) { $yuumukkaswwoywya = Constants::wwukgkqwyakeqwqk; $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $yuumukkaswwoywya); if ($eqgoocgaqwqcimie) { $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $yuumukkaswwoywya); $omasqoksqewuwwkq = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5); if (!$cussukyecoaeayqk) { $eqgoocgaqwqcimie = str_replace("\41\x69\x6d\x70\157\x72\x74\141\x6e\164", '', $eqgoocgaqwqcimie); } $acqqmqmcquukaqsc = "\56{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\175"; $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc; $egkyssmuqcwaciya = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\154\x61\163\x73"); $egkyssmuqcwaciya .= "\x20{$omasqoksqewuwwkq}"; $this->cqieekgkogamcsqk($ymyisaeksssueeik, "\143\154\x61\x73\x73", $egkyssmuqcwaciya); } } } if ($kswaimykcacqyaay instanceof DOMElement) { $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc; } else { $this->pmouaioykaoceyag($kasgukgceywckyou, "\150\x65\x61\x64", $ewgwqamkygiqaawc); } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, bool $egomoiciasmiesww = false) : string { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya); if ($ymyisaeksssueeik instanceof DOMNode) { if (!$egomoiciasmiesww) { $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc; } $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc; } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, array $eagcmyswaakcwyec = [], string $omwmuycmeqcqokom = "\144\x69\166", bool $qmeuaeiseuacgiqc = true) { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $okcscwesammossuq = ''; $ygickiygyemsowyo = null; foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMNode) { $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode; $this->cygiccaaumeiwwmk($ymyisaeksssueeik); $okcscwesammossuq .= $this->skkueuquuqweeyqo($ymyisaeksssueeik); } } if ($ygickiygyemsowyo) { $omwmuycmeqcqokom = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq); $this->agmamqsgiugeeayw($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc); $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, string $ymkomoccmymcoiea = Constants::wwukgkqwyakeqwqk, string $wamcomkuwysqgwgk = "\x25\x73\x3b") : string { if ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if ($ymyisaeksssueeik instanceof DOMElement) { $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ccamueccusigaaio); $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ccamueccusigaaio); if ($eqgoocgaqwqcimie) { $yeacayasgueouoqc = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymkomoccmymcoiea); if ($wamcomkuwysqgwgk) { $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie); } if (Constants::wwukgkqwyakeqwqk === $ymkomoccmymcoiea) { $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\73") . "\73"; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}")); } } } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } private function gkksucgseqqemesc($nsmgceoqaqogqmuw) : DOMCrawler { if ($nsmgceoqaqogqmuw instanceof DOMCrawler) { $kasgukgceywckyou = $nsmgceoqaqogqmuw; } else { $nsmgceoqaqogqmuw = preg_replace("\x7e\x3e\x5c\163\x2a\x5c\x6e\x5c\163\52\x3c\176", "\x3e\x3c", $nsmgceoqaqogqmuw); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->memaocoueygwyomc($nsmgceoqaqogqmuw); $kasgukgceywckyou = new DOMCrawler($nsmgceoqaqogqmuw); } return $kasgukgceywckyou; } private function skkueuquuqweeyqo($ymyisaeksssueeik) { $ksaameoqigiaoigg = ''; if ($ymyisaeksssueeik instanceof DOMNode) { $ksaameoqigiaoigg = $ymyisaeksssueeik->ownerDocument->saveHTML($ymyisaeksssueeik); } return $ksaameoqigiaoigg; } private function ygmcsmegcysyeoss($kasgukgceywckyou) : int { $gaeqamemwmwsyukm = 0; if ($kasgukgceywckyou instanceof DOMCrawler) { $gaeqamemwmwsyukm = $kasgukgceywckyou->count(); } return $gaeqamemwmwsyukm; } private function caqmeawgoiceoymu($msqkueqksqwmskak, $uwomkgseoiegeume) { if ($msqkueqksqwmskak instanceof DOMNode && $uwomkgseoiegeume instanceof DOMNode) { $msqkueqksqwmskak->parentNode->replaceChild($uwomkgseoiegeume, $msqkueqksqwmskak); } } public function cygiccaaumeiwwmk(DOMNode $ymyisaeksssueeik) { $this->uwqgywaceaaymckg($ymyisaeksssueeik); } private function soeaagycqiykaymg($kasgukgceywckyou, $yuumukkaswwoywya) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $this->cygiccaaumeiwwmk($ymyisaeksssueeik); } } private function wgqqgewcmcemoewo($gykwsaeqegqowywy, $ggauoeuaesiymgee = '') : string { try { if ($ggauoeuaesiymgee instanceof DOMCrawler) { $ggauoeuaesiymgee = $ggauoeuaesiymgee->html(); } $ikoqkmiqkckowcgg = "\74\41\x44\x4f\x43\x54\x59\120\105\40\150\x74\155\154\x3e"; $kkkqocwqmaokqcmc = stripos($ggauoeuaesiymgee, $ikoqkmiqkckowcgg) !== false; if ($gykwsaeqegqowywy instanceof DOMCrawler) { if ($kkkqocwqmaokqcmc) { $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->outerHtml(); $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw; } else { $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee); $nsmgceoqaqogqmuw = preg_replace(["\x2f\50\74\51\50\x68\145\141\x64\51\50\x5b\136\76\135\x2a\77\x29\50\x5c\57\77\x5c\163\x2a\x3e\x29\x7c\74\x5c\x2f\150\x65\x61\x64\x3e\x2f", "\x2f\x28\x3c\x29\x28\x62\157\x64\x79\x29\x28\133\x5e\76\135\x2a\77\51\x28\x5c\x2f\x3f\x5c\163\x2a\76\x29\174\74\x5c\x2f\x62\x6f\x64\x79\76\x2f", "\57\50\160\141\162\x65\156\x74\75\42\x29\50\133\141\x2d\x7a\x41\x2d\132\x30\x2d\x39\72\73\134\x2e\x5c\x73\x5c\x28\x5c\x29\x5c\55\x5c\x2c\135\x2a\x29\50\x22\x29\57"], '', $nsmgceoqaqogqmuw); } } else { if ($gykwsaeqegqowywy instanceof DOMDocument) { $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->saveHTML(); } else { if (is_string($gykwsaeqegqowywy)) { $nsmgceoqaqogqmuw = $gykwsaeqegqowywy; } else { throw new InvalidArgumentException(); } } } } catch (Exception $wgaoewqkwgomoaai) { $nsmgceoqaqogqmuw = $ggauoeuaesiymgee; } if (!is_string($nsmgceoqaqogqmuw)) { $nsmgceoqaqogqmuw = $ggauoeuaesiymgee; } return $nsmgceoqaqogqmuw; } private function find($kasgukgceywckyou, $yuumukkaswwoywya) : ?DOMCrawler { if ($kasgukgceywckyou instanceof DOMCrawler) { if (!is_string($yuumukkaswwoywya)) { $mmeioagwmyscwumo = 1; } $kasgukgceywckyou = $kasgukgceywckyou->filter($yuumukkaswwoywya); } return $kasgukgceywckyou; } public function cgeyeoimiuyogose(&$omwmuycmeqcqokom, $wcgsoqmmciswkmiq) : void { if ($omwmuycmeqcqokom instanceof DOMNode && $wcgsoqmmciswkmiq instanceof DOMNode) { if ($wcgsoqmmciswkmiq = $this->gqskweuukuceuaoq($omwmuycmeqcqokom->ownerDocument, $wcgsoqmmciswkmiq)) { $omwmuycmeqcqokom->appendChild($wcgsoqmmciswkmiq); } } } private function agmamqsgiugeeayw($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, bool $qmeuaeiseuacgiqc = true, string $yuumukkaswwoywya = Constants::cikssaguawsukusm) { if ($omwmuycmeqcqokom instanceof DOMNode) { if ($nsmgceoqaqogqmuw instanceof DOMNode) { if ($qmeuaeiseuacgiqc) { $this->cgeyeoimiuyogose($omwmuycmeqcqokom, $nsmgceoqaqogqmuw); } else { $osoycceiygogkecu = $omwmuycmeqcqokom->firstChild; $this->kqgwgkuykuumwcgw($osoycceiygogkecu, $nsmgceoqaqogqmuw); } } else { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $ymyisaeksssueeik = $this->gqskweuukuceuaoq($omwmuycmeqcqokom->ownerDocument, $ymyisaeksssueeik); $this->agmamqsgiugeeayw($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc); } } } } private function iuioyckswgesgsqw(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw) { $qeaoumiemyikogys = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw)); $kuukgsmqkagwaciu = $qeaoumiemyikogys->getElementsByTagName("\142\157\x64\x79")->item(0); if ($kuukgsmqkagwaciu) { foreach ($kuukgsmqkagwaciu->childNodes as $ymyisaeksssueeik) { $this->cgeyeoimiuyogose($omwmuycmeqcqokom, $ymyisaeksssueeik); } } } public function auokmyiaciikcekk($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie = null, array $wwgucssaecqekuek = [], $ymyisaeksssueeik = null) { $kqywgoqsmuswammk = null; if (!$ymyisaeksssueeik) { $ymyisaeksssueeik = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc("\x3c\144\x69\166\76\x3c\57\x64\x69\x76\x3e")); } if ($ymyisaeksssueeik instanceof DOMNode) { try { if ($ymyisaeksssueeik->ownerDocument) { $ymyisaeksssueeik = $ymyisaeksssueeik->ownerDocument; } $kqywgoqsmuswammk = $ymyisaeksssueeik->createElement($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); if ($wwgucssaecqekuek) { foreach ($wwgucssaecqekuek as $wisgiwskwawciiee => $giueyucwwwwiooim) { $this->cqieekgkogamcsqk($kqywgoqsmuswammk, $wisgiwskwawciiee, $giueyucwwwwiooim); } } } catch (Exception $wgaoewqkwgomoaai) { } } return $kqywgoqsmuswammk; } private function gqskweuukuceuaoq($kgcekiucekagcgai, $ymyisaeksssueeik) { $ksaameoqigiaoigg = false; if ($kgcekiucekagcgai instanceof DOMDocument) { $ksaameoqigiaoigg = $kgcekiucekagcgai->importNode($ymyisaeksssueeik, true); } return $ksaameoqigiaoigg; } private function uwqgywaceaaymckg($ymyisaeksssueeik, $omwmuycmeqcqokom = null) : ?DOMNode { $ksaameoqigiaoigg = null; if ($ymyisaeksssueeik instanceof DOMNode) { if (!$omwmuycmeqcqokom) { $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode; } $ksaameoqigiaoigg = $omwmuycmeqcqokom->removeChild($ymyisaeksssueeik); } return $ksaameoqigiaoigg; } private function owoeecswcugcquqy(DOMCrawler $kasgukgceywckyou, $nsmgceoqaqogqmuw) : DOMNode { $qeaoumiemyikogys = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw)); $kgcekiucekagcgai = $this->uaqiwssauwwuyueg($kasgukgceywckyou); return $this->gqskweuukuceuaoq($kgcekiucekagcgai, $qeaoumiemyikogys->documentElement); } private function wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya = null, $kuuiuigeacouwmaa = 0) : ?DOMNode { $kasgukgceywckyou = $this->gkksucgseqqemesc($kasgukgceywckyou); if ($yuumukkaswwoywya) { $kasgukgceywckyou = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); } return $kasgukgceywckyou->getNode($kuuiuigeacouwmaa); } private function aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = Constants::UPDATE) { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); if ($kasgukgceywckyou) { foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, "\160\141\x72\x65\x6e\x74"); if ($kwmksuuciqkiymek && $omwmuycmeqcqokom) { try { $kwmksuuciqkiymek = $kwmksuuciqkiymek->ancestors(); } catch (Exception $wgaoewqkwgomoaai) { continue; } } if ($kwmksuuciqkiymek) { foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { $momcykaoccoymeig = 0; $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss($kwmksuuciqkiymek); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $this->ewmocgymgsyqumms($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig); $momcykaoccoymeig++; } } } } return $kasgukgceywckyou; } return $nsmgceoqaqogqmuw; } private function ewmocgymgsyqumms($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig) { if (is_callable($eqgoocgaqwqcimie)) { $cusosqmyoqiykqgw = $eqgoocgaqwqcimie($momcykaoccoymeig, $gaeqamemwmwsyukm); } else { $cusosqmyoqiykqgw = $eqgoocgaqwqcimie; } if ($ymyisaeksssueeik instanceof DOMElement) { $ymyqweogikqywwqc = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymkomoccmymcoiea); switch ($aiamqeawckcsuaou) { case Constants::yaeeqsosiaimuqma: if (is_numeric($ymkomoccmymcoiea)) { $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $eqgoocgaqwqcimie); $cusosqmyoqiykqgw = null; } else { $geqcesmqwkeayoiu = "\x20"; $cusosqmyoqiykqgw = implode($geqcesmqwkeayoiu, array_diff(explode($geqcesmqwkeayoiu, $ymyqweogikqywwqc), explode($geqcesmqwkeayoiu, $cusosqmyoqiykqgw))); if (!$cusosqmyoqiykqgw) { $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); } } break; case Constants::kkiywioiccuqokis: $cusosqmyoqiykqgw = null; if ($this->owgokkumqicyuyiy($ymyisaeksssueeik, $ymkomoccmymcoiea)) { $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); $this->cqieekgkogamcsqk($ymyisaeksssueeik, $eqgoocgaqwqcimie, $ymyqweogikqywwqc); } break; case Constants::REPLACE: case Constants::UPDATE: if ($aiamqeawckcsuaou === Constants::REPLACE) { $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); } else { if ("\143\154\141\163\x73" === $ymkomoccmymcoiea && $ymyqweogikqywwqc) { $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\40{$cusosqmyoqiykqgw}"; } } break; case Constants::scucyuqmgoscisoa: if ($this->owgokkumqicyuyiy($ymyisaeksssueeik, $ymkomoccmymcoiea)) { $this->cqieekgkogamcsqk($ymyisaeksssueeik, $cusosqmyoqiykqgw, $ymyqweogikqywwqc); $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); } $cusosqmyoqiykqgw = null; break; } if ($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw))) { $this->cqieekgkogamcsqk($ymyisaeksssueeik, $ymkomoccmymcoiea, $cusosqmyoqiykqgw); } } } public function imwekacqceyomgia($ewgwqamkygiqaawc) { libxml_use_internal_errors(true); return simplexml_load_string($ewgwqamkygiqaawc); } public function mwkkiugcgoacioke($sqysweaqqiuacswu, string $uusmaiomayssaecw = "\x75\162\154", string $magsskwwgciuwwoa = "\x6c\x6f\143") : array { if (is_string($sqysweaqqiuacswu)) { $sqysweaqqiuacswu = $this->imwekacqceyomgia($sqysweaqqiuacswu); } $sogksuscggsicmac = []; if (false !== $sqysweaqqiuacswu) { $gaeqamemwmwsyukm = count($sqysweaqqiuacswu->{$uusmaiomayssaecw}); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $gaeqamemwmwsyukm; $ciyackuwsqkoqese++) { if ($eqgoocgaqwqcimie = (string) $sqysweaqqiuacswu->{$uusmaiomayssaecw}[$ciyackuwsqkoqese]->{$magsskwwgciuwwoa}) { $sogksuscggsicmac[] = $eqgoocgaqwqcimie; } } } return $sogksuscggsicmac; } }
