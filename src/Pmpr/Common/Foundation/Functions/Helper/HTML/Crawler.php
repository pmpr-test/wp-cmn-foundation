<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use DOMAttr; use DOMDocument; use DOMElement; use DOMNode; use Exception; use InvalidArgumentException; use Pmpr\Common\Foundation\Interfaces\Constants; use Symfony\Component\DomCrawler\Crawler as DOMCrawler; class Crawler extends Common { public function uaqiwssauwwuyueg(DOMCrawler $kasgukgceywckyou) : DOMDocument { return $this->wugqmqwisygwoeas($kasgukgceywckyou)->ownerDocument; } public function has($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : bool { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); return $this->ygmcsmegcysyeoss($this->find($kasgukgceywckyou, $yuumukkaswwoywya)) > 0; } public function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto mgkgeuqasqcaimou; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto eyiigmyweugmgckw; } $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode; $this->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom); $nsmgceoqaqogqmuw = $this->skkueuquuqweeyqo($kwmksuuciqkiymek); goto qakcamuiqmiscugu; eyiigmyweugmgckw: qguqeweisuimgyqk: } qakcamuiqmiscugu: mgkgeuqasqcaimou: return $nsmgceoqaqogqmuw; } public function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw) { return $this->gqskweuukuceuaoq($ymyisaeksssueeik->ownerDocument, $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw))->documentElement); } public function wuuawmeqqyyyemsw($ymyisaeksssueeik) : array { $siquossayskcwkea = []; if (!$ymyisaeksssueeik instanceof DOMElement) { goto qmgwqgkuucwysswc; } foreach ($ymyisaeksssueeik->attributes as $sicussmmuqmeqygw) { $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue; wcsicmaoskwcaqou: } syycscyugcgsquwm: qmgwqgkuucwysswc: return $siquossayskcwkea; } public function kqgwgkuykuumwcgw($ikwqcaqmyuemessi, $uuswugicgoqcyiiy) { $sogksuscggsicmac = false; if (!$ikwqcaqmyuemessi instanceof DOMElement) { goto acyuamggaiuqmsoa; } $omwmuycmeqcqokom = $ikwqcaqmyuemessi->parentNode; if (!$omwmuycmeqcqokom) { goto aiqskweckwoegquq; } $sogksuscggsicmac = $omwmuycmeqcqokom->insertBefore($uuswugicgoqcyiiy, $ikwqcaqmyuemessi); aiqskweckwoegquq: acyuamggaiuqmsoa: return $sogksuscggsicmac; } public function owgokkumqicyuyiy($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : bool { $sogksuscggsicmac = false; if (!$ymyisaeksssueeik instanceof DOMElement) { goto oykmqmogcwumacqq; } $sogksuscggsicmac = $ymyisaeksssueeik->hasAttribute($ymqmyyeuycgmigyo); oykmqmogcwumacqq: return $sogksuscggsicmac; } public function cqieekgkogamcsqk($ymyisaeksssueeik, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $sogksuscggsicmac = false; if (!$ymyisaeksssueeik instanceof DOMElement) { goto icmgwewmusucsooy; } $sogksuscggsicmac = $ymyisaeksssueeik->setAttribute($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); icmgwewmusucsooy: return $sogksuscggsicmac; } public function guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : string { $wisgiwskwawciiee = ''; if (!$ymyisaeksssueeik instanceof DOMElement) { goto myyuyqequamqekoc; } $wisgiwskwawciiee = $ymyisaeksssueeik->getAttribute($ymqmyyeuycgmigyo); myyuyqequamqekoc: return $wisgiwskwawciiee; } public function qeeokkmmskuyoecg($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : bool { $sogksuscggsicmac = false; if (!$ymyisaeksssueeik instanceof DOMElement) { goto swcqqiyagauaogiy; } $sogksuscggsicmac = $ymyisaeksssueeik->removeAttribute($ymqmyyeuycgmigyo); swcqqiyagauaogiy: return $sogksuscggsicmac; } public function aaqqksicmumkuycy($kqywgoqsmuswammk, $nsmgceoqaqogqmuw) { } public function wkwyyyeomkqggggw($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : int { $gaeqamemwmwsyukm = 0; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto psqooaaoocusoyag; } $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss($this->find($kasgukgceywckyou, $yuumukkaswwoywya)); psqooaaoocusoyag: return $gaeqamemwmwsyukm; } public function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $kqywgoqsmuswammk, $ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto caawoosasoogaiwa; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $ycqsugugqomewkke = false; foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!($ymyisaeksssueeik instanceof DOMElement && ($koaqiaecmascwuyy = $this->auokmyiaciikcekk($kqywgoqsmuswammk, $ewgwqamkygiqaawc, $wwgucssaecqekuek, $ymyisaeksssueeik)))) { goto ggscugaoyeccwaoq; } if ($pmeuqieyyceuacis = $ymyisaeksssueeik->nextSibling) { goto aaoueeomccwsoycq; } $this->cgeyeoimiuyogose($ymyisaeksssueeik->parentNode, $koaqiaecmascwuyy); goto wggkwquawceyksmk; aaoueeomccwsoycq: $this->kqgwgkuykuumwcgw($pmeuqieyyceuacis, $koaqiaecmascwuyy); wggkwquawceyksmk: $ycqsugugqomewkke = true; ggscugaoyeccwaoq: mmyckscscsmqsqwo: } mseiksmausoaqecy: if (!$ycqsugugqomewkke) { goto gciymsqoaosekywi; } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); gciymsqoaosekywi: caawoosasoogaiwa: return $nsmgceoqaqogqmuw; } public function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto ymygyumokgcugqco; } foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) { if (!$uumwowmewaqyggce instanceof DOMNode) { goto okcicyakakceigwe; } $okcscwesammossuq = []; foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) { $okcscwesammossuq[] = $wcgsoqmmciswkmiq; gikmiimsmmugmewi: } oysgkcoiouaikyys: $uuswugicgoqcyiiy = $this->auokmyiaciikcekk($ymqmyyeuycgmigyo, null, [], $uumwowmewaqyggce); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->cgeyeoimiuyogose($uuswugicgoqcyiiy, $wcgsoqmmciswkmiq); ywskqocaomieoeuo: } ycwkcyukyieusyce: foreach ($uumwowmewaqyggce->attributes as $sicussmmuqmeqygw) { $this->cqieekgkogamcsqk($uuswugicgoqcyiiy, $sicussmmuqmeqygw->nodeName, $sicussmmuqmeqygw->nodeValue); oesieyemekcikmuo: } yqysoqweammswcea: $this->caqmeawgoiceoymu($uumwowmewaqyggce, $uuswugicgoqcyiiy); okcicyakakceigwe: aiegomwmomwugkaa: } gmwcswqmcyogosia: ikuyuccwmwasokmy: } ikqqueokumaakwmk: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); ymygyumokgcugqco: return $nsmgceoqaqogqmuw; } public function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto iwcqqisaagoyaoyq; } if (is_array($sgksuwkwyimqgaii)) { goto smecgcsaskaiyqwg; } $this->soeaagycqiykaymg($kasgukgceywckyou, $sgksuwkwyimqgaii); goto kwqqookuogugoeoc; smecgcsaskaiyqwg: foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $this->soeaagycqiykaymg($kasgukgceywckyou, $yuumukkaswwoywya); cumkyeqakeicycqy: } cukkwcqimawsesga: kwqqookuogugoeoc: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); iwcqqisaagoyaoyq: return $nsmgceoqaqogqmuw; } public function kkisyguyosoyymqs($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : bool { $umuecysoywoumgwo = false; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto ouakugqyqismmmwq; } if (!($ksiyqouuaoymsycg = $this->find($kasgukgceywckyou, $yuumukkaswwoywya))) { goto yeyuwakqagwqqmuc; } $muiaiuymwoiaiwwm = $ksiyqouuaoymsycg->children()->count(); $umuecysoywoumgwo = $muiaiuymwoiaiwwm > 0; yeyuwakqagwqqmuc: ouakugqyqismmmwq: return $umuecysoywoumgwo; } public function ogaeogwycyqqckeu($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::yaeeqsosiaimuqma), $nsmgceoqaqogqmuw); } public function maakiyaweemewuao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::kkiywioiccuqokis), $nsmgceoqaqogqmuw); } public function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::REPLACE), $nsmgceoqaqogqmuw); } public function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii), $nsmgceoqaqogqmuw); } public function muuoqyqmayuwucao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::scucyuqmgoscisoa), $nsmgceoqaqogqmuw); } public function mqyacwaaocgcsyag($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto ccwwqiosmasqqqwu; } foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto swuomeuwkcgwekss; } $msqkueqksqwmskak = array_keys($siquossayskcwkea); foreach ($ymyisaeksssueeik->attributes as $sicussmmuqmeqygw) { $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName; if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak, true)) { goto mkskmcusskkouyyi; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue); mkskmcusskkouyyi: qcmiieemioisoyyi: } eaeowkksqokeigsq: swuomeuwkcgwekss: eyimcucoicmimiao: } qmeuekyqssiomcyy: akccmuykyisokmqm: } eseyuoaaskemwycm: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); ccwwqiosmasqqqwu: return $nsmgceoqaqogqmuw; } public function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee) : string { $eqgoocgaqwqcimie = ''; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto okgweyikqgcceggq; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto kqueakeekumokwoe; } $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); if (!$eqgoocgaqwqcimie) { goto owqiausosmeaugay; } goto scmkeeaewmeqguac; owqiausosmeaugay: kqueakeekumokwoe: qqeiuucaguymmsws: } scmkeeaewmeqguac: okgweyikqgcceggq: return $eqgoocgaqwqcimie; } public function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : array { $siquossayskcwkea = []; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto usakoyequcyysywo; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $siquossayskcwkea = $this->wuuawmeqqyyyemsw($ymyisaeksssueeik); if (!$siquossayskcwkea) { goto kquqieqqiieakmoa; } goto csisksagguuywuia; kquqieqqiieakmoa: ycucsikocgkiesgi: } csisksagguuywuia: usakoyequcyysywo: return $siquossayskcwkea; } public function skciuoqgiqoawwwe($kqywgoqsmuswammk, bool $ewgwqamkygiqaawc = false) { if ($ewgwqamkygiqaawc) { goto kwmgoowcwggsyokw; } $nsmgceoqaqogqmuw = $this->skkueuquuqweeyqo($kqywgoqsmuswammk); goto okamgiuocakyggwo; kwmgoowcwggsyokw: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($kqywgoqsmuswammk, "\x74\145\x78\164\103\x6f\x6e\164\x65\x6e\164"); okamgiuocakyggwo: return $nsmgceoqaqogqmuw; } public function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, bool $qmeuaeiseuacgiqc = true, string $yuumukkaswwoywya = Constants::cikssaguawsukusm) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto cmcwskwgaiauugws; } $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $omwmuycmeqcqokom); if (!$ymyisaeksssueeik instanceof DOMNode) { goto gcywqkqkwkcmoawo; } $this->agmamqsgiugeeayw($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc, $yuumukkaswwoywya); gcywqkqkwkcmoawo: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); cmcwskwgaiauugws: return $nsmgceoqaqogqmuw; } public function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, bool $ewgwqamkygiqaawc = false) : string { $aqykuigiuwmmcieu = ''; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto maswyugssquqqggq; } $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya); if (!$ymyisaeksssueeik instanceof DOMNode) { goto kyaiywcwwmeqwyaw; } if ($ewgwqamkygiqaawc) { goto gmoykcyssieuqueu; } $aqykuigiuwmmcieu .= $this->skkueuquuqweeyqo($ymyisaeksssueeik); goto iywiyewymemgqacq; gmoykcyssieuqueu: $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent; iywiyewymemgqacq: kyaiywcwwmeqwyaw: maswyugssquqqggq: return $aqykuigiuwmmcieu; } public function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, bool $ewgwqamkygiqaawc = false) : array { $sogksuscggsicmac = []; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto mcyamakgwewogwqi; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto gwucakcwqkiiqyyg; } $this->cygiccaaumeiwwmk($ymyisaeksssueeik); $sogksuscggsicmac[] = $this->skciuoqgiqoawwwe($ymyisaeksssueeik, $ewgwqamkygiqaawc); gwucakcwqkiiqyyg: miyggyguyamiggcm: } egcycueumoemiuai: mcyamakgwewogwqi: return $sogksuscggsicmac; } public function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', bool $uuksaskqamgouosy = true) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto swuquosuguoomaeq; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto eyaesumwwwgisaym; } if ($uuksaskqamgouosy) { goto icksskeigsiugace; } $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo; goto ceyygoicaeoqwwio; icksskeigsiugace: $ymyisaeksssueeik->nodeValue = ''; if (!$goiaaeekgeqqmaqo) { goto siuuokwymeygcosy; } $this->iuioyckswgesgsqw($ymyisaeksssueeik, $goiaaeekgeqqmaqo); siuuokwymeygcosy: ceyygoicaeoqwwio: eyaesumwwwgisaym: sskkiisoqmmsocic: } aqamaqggiseeioqq: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); swuquosuguoomaeq: return $nsmgceoqaqogqmuw; } public function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, int $uuyoeicyoayimaoa = 0, bool $ksaameoqigiaoigg = true) : string { if (!(is_callable($ekiuyucoiagmscgy) && ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)))) { goto kuwecmygikeyisuq; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) { if (!($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa)) { goto mweoqymwyuimuakm; } goto occaiwsgmaykoqey; mweoqymwyuimuakm: if (!($ymyisaeksssueeik instanceof DOMElement && !call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya]))) { goto swwmkisacmieqiae; } goto occaiwsgmaykoqey; swwmkisacmieqiae: iuikeaqqcukamyqm: } occaiwsgmaykoqey: if (!$ksaameoqigiaoigg) { goto imqeimsscmwgasys; } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); imqeimsscmwgasys: kuwecmygikeyisuq: return $nsmgceoqaqogqmuw; } public function wesimowqwekiqiow($nsmgceoqaqogqmuw, string $eeqsmkqmsowmicwi = Constants::wwukgkqwyakeqwqk, bool $cussukyecoaeayqk = true) : string { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto sucekaeksayiwooe; } $kswaimykcacqyaay = $this->wugqmqwisygwoeas($kasgukgceywckyou, "\150\145\141\144\40\76\40{$eeqsmkqmsowmicwi}"); $ewgwqamkygiqaawc = ''; if (!$kswaimykcacqyaay instanceof DOMNode) { goto augwgqgcukgkywiw; } $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent; augwgqgcukgkywiw: $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, "\133\163\x74\x79\x6c\145\x5d"); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto kmykwuqougkwauiy; } $yuumukkaswwoywya = Constants::wwukgkqwyakeqwqk; $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $yuumukkaswwoywya); if (!$eqgoocgaqwqcimie) { goto akkecgwmiimmeqmy; } $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $yuumukkaswwoywya); $omasqoksqewuwwkq = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5); if ($cussukyecoaeayqk) { goto ugwysoaqswaocsuu; } $eqgoocgaqwqcimie = str_replace("\x21\x69\155\x70\157\162\x74\x61\156\x74", '', $eqgoocgaqwqcimie); ugwysoaqswaocsuu: $acqqmqmcquukaqsc = "\56{$omasqoksqewuwwkq}\x7b{$eqgoocgaqwqcimie}\175"; $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc; $egkyssmuqcwaciya = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\x6c\141\x73\x73"); $egkyssmuqcwaciya .= "\x20{$omasqoksqewuwwkq}"; $this->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\x6c\141\163\x73", $egkyssmuqcwaciya); akkecgwmiimmeqmy: kmykwuqougkwauiy: msmiaayuagocuswc: } kmkoiwuimosekikq: if ($kswaimykcacqyaay instanceof DOMElement) { goto qeieqkqcyuasgqqk; } $this->pmouaioykaoceyag($kasgukgceywckyou, "\x68\145\141\x64", $ewgwqamkygiqaawc); goto uysqwomcuuccagkq; qeieqkqcyuasgqqk: $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc; uysqwomcuuccagkq: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); sucekaeksayiwooe: return $nsmgceoqaqogqmuw; } public function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, bool $egomoiciasmiesww = false) : string { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto auiaaeeakqkocmqu; } $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya); if (!$ymyisaeksssueeik instanceof DOMNode) { goto wsksakoqeqwkigoq; } if ($egomoiciasmiesww) { goto scykswkumgcoqgcc; } $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc; scykswkumgcoqgcc: $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc; wsksakoqeqwkigoq: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); auiaaeeakqkocmqu: return $nsmgceoqaqogqmuw; } public function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, array $eagcmyswaakcwyec = [], string $omwmuycmeqcqokom = "\144\x69\166", bool $qmeuaeiseuacgiqc = true) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto awsqsasmmamcskkk; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $okcscwesammossuq = ''; $ygickiygyemsowyo = null; foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto ewecikeyyqmewkgy; } $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode; $this->cygiccaaumeiwwmk($ymyisaeksssueeik); $okcscwesammossuq .= $this->skkueuquuqweeyqo($ymyisaeksssueeik); ewecikeyyqmewkgy: qisaayswqcmucoqg: } mioseimsuqaqiqae: if (!$ygickiygyemsowyo) { goto eugoueaksseemowq; } $omwmuycmeqcqokom = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq); $this->agmamqsgiugeeayw($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc); $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); eugoueaksseemowq: awsqsasmmamcskkk: return $nsmgceoqaqogqmuw; } public function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, string $ymkomoccmymcoiea = Constants::wwukgkqwyakeqwqk, string $wamcomkuwysqgwgk = "\x25\x73\73") : string { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto cygqsmeoqscsscqm; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto gqaecycgekomqqgu; } $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ccamueccusigaaio); $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ccamueccusigaaio); if (!$eqgoocgaqwqcimie) { goto yukcsywomcgeqoiq; } $yeacayasgueouoqc = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymkomoccmymcoiea); if (!$wamcomkuwysqgwgk) { goto yquwqeooeyyociqm; } $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie); yquwqeooeyyociqm: if (!(Constants::wwukgkqwyakeqwqk === $ymkomoccmymcoiea)) { goto mowimwgkwoymuoae; } $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\73") . "\x3b"; mowimwgkwoymuoae: $this->cqieekgkogamcsqk($ymyisaeksssueeik, $ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\x20{$eqgoocgaqwqcimie}")); yukcsywomcgeqoiq: gqaecycgekomqqgu: iyuiasiuowggciss: } wsiysogusuimayic: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); cygqsmeoqscsscqm: return $nsmgceoqaqogqmuw; } private function gkksucgseqqemesc($nsmgceoqaqogqmuw) : DOMCrawler { if ($nsmgceoqaqogqmuw instanceof DOMCrawler) { goto ukmkcwicoqcoyqog; } $nsmgceoqaqogqmuw = preg_replace("\176\x3e\134\163\x2a\x5c\x6e\x5c\163\52\x3c\x7e", "\76\74", $nsmgceoqaqogqmuw); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->memaocoueygwyomc($nsmgceoqaqogqmuw); $kasgukgceywckyou = new DOMCrawler($nsmgceoqaqogqmuw); goto siuaqaksaumkaeui; ukmkcwicoqcoyqog: $kasgukgceywckyou = $nsmgceoqaqogqmuw; siuaqaksaumkaeui: return $kasgukgceywckyou; } private function skkueuquuqweeyqo($ymyisaeksssueeik) { $ksaameoqigiaoigg = ''; if (!$ymyisaeksssueeik instanceof DOMNode) { goto gkyuckeugacsewka; } $ksaameoqigiaoigg = $ymyisaeksssueeik->ownerDocument->saveHTML($ymyisaeksssueeik); gkyuckeugacsewka: return $ksaameoqigiaoigg; } private function ygmcsmegcysyeoss($kasgukgceywckyou) : int { $gaeqamemwmwsyukm = 0; if (!$kasgukgceywckyou instanceof DOMCrawler) { goto caeucwusaisgqaoe; } $gaeqamemwmwsyukm = $kasgukgceywckyou->count(); caeucwusaisgqaoe: return $gaeqamemwmwsyukm; } private function caqmeawgoiceoymu($msqkueqksqwmskak, $uwomkgseoiegeume) { if (!($msqkueqksqwmskak instanceof DOMNode && $uwomkgseoiegeume instanceof DOMNode)) { goto cgksasyqkkiiowyg; } $msqkueqksqwmskak->parentNode->replaceChild($uwomkgseoiegeume, $msqkueqksqwmskak); cgksasyqkkiiowyg: } public function cygiccaaumeiwwmk(DOMNode $ymyisaeksssueeik) { $this->uwqgywaceaaymckg($ymyisaeksssueeik); } private function soeaagycqiykaymg($kasgukgceywckyou, $yuumukkaswwoywya) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $this->cygiccaaumeiwwmk($ymyisaeksssueeik); gessacesaaekqkws: } yesymsikkwmuikuc: } private function wgqqgewcmcemoewo($gykwsaeqegqowywy, $ggauoeuaesiymgee = '') : string { try { if (!$ggauoeuaesiymgee instanceof DOMCrawler) { goto yyyuemkeyacsssye; } $ggauoeuaesiymgee = $ggauoeuaesiymgee->html(); yyyuemkeyacsssye: $ikoqkmiqkckowcgg = "\x3c\41\104\117\103\x54\x59\120\x45\x20\150\164\155\x6c\76"; $kkkqocwqmaokqcmc = stripos($ggauoeuaesiymgee, $ikoqkmiqkckowcgg) !== false; if ($gykwsaeqegqowywy instanceof DOMCrawler) { goto imyemkiyouuuequq; } if ($gykwsaeqegqowywy instanceof DOMDocument) { goto qccawiseummsemsk; } if (is_string($gykwsaeqegqowywy)) { goto komymyuaekmkkiko; } throw new InvalidArgumentException(); goto kkowueuygsqqgogc; komymyuaekmkkiko: $nsmgceoqaqogqmuw = $gykwsaeqegqowywy; kkowueuygsqqgogc: goto wiikygmkoykkkgyw; qccawiseummsemsk: $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->saveHTML(); wiikygmkoykkkgyw: goto awgeaewuaksssysc; imyemkiyouuuequq: if ($kkkqocwqmaokqcmc) { goto eqeosomseicwmwqu; } $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee); $nsmgceoqaqogqmuw = preg_replace(["\x2f\50\x3c\51\x28\x68\x65\x61\144\x29\50\x5b\x5e\x3e\x5d\x2a\x3f\51\x28\134\57\77\x5c\x73\x2a\x3e\x29\174\74\x5c\x2f\x68\x65\x61\144\76\57", "\57\x28\x3c\51\x28\142\157\144\x79\51\50\x5b\136\76\135\52\77\x29\50\134\57\77\x5c\x73\52\x3e\x29\174\x3c\x5c\x2f\x62\x6f\x64\x79\76\57", "\x2f\x28\160\x61\162\x65\156\164\x3d\x22\51\x28\133\x61\x2d\172\101\55\x5a\x30\x2d\71\x3a\x3b\x5c\x2e\134\163\134\50\x5c\x29\x5c\x2d\x5c\54\x5d\52\x29\50\42\x29\x2f"], '', $nsmgceoqaqogqmuw); goto muaokgycwsoimmaw; eqeosomseicwmwqu: $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->outerHtml(); $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw; muaokgycwsoimmaw: awgeaewuaksssysc: } catch (Exception $wgaoewqkwgomoaai) { $nsmgceoqaqogqmuw = $ggauoeuaesiymgee; } if (is_string($nsmgceoqaqogqmuw)) { goto mukmkmiwaaowwymu; } $nsmgceoqaqogqmuw = $ggauoeuaesiymgee; mukmkmiwaaowwymu: return $nsmgceoqaqogqmuw; } private function find($kasgukgceywckyou, $yuumukkaswwoywya) : ?DOMCrawler { if (!$kasgukgceywckyou instanceof DOMCrawler) { goto egamkewimgoayiwc; } if (is_string($yuumukkaswwoywya)) { goto kmqgwuksekimwosw; } $mmeioagwmyscwumo = 1; kmqgwuksekimwosw: $kasgukgceywckyou = $kasgukgceywckyou->filter($yuumukkaswwoywya); egamkewimgoayiwc: return $kasgukgceywckyou; } public function cgeyeoimiuyogose(&$omwmuycmeqcqokom, $wcgsoqmmciswkmiq) : void { if (!($omwmuycmeqcqokom instanceof DOMNode && $wcgsoqmmciswkmiq instanceof DOMNode)) { goto ueikeuosueikmmqy; } if (!($wcgsoqmmciswkmiq = $this->gqskweuukuceuaoq($omwmuycmeqcqokom->ownerDocument, $wcgsoqmmciswkmiq))) { goto oqoksuwkayakeyco; } $omwmuycmeqcqokom->appendChild($wcgsoqmmciswkmiq); oqoksuwkayakeyco: ueikeuosueikmmqy: } private function agmamqsgiugeeayw($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, bool $qmeuaeiseuacgiqc = true, string $yuumukkaswwoywya = Constants::cikssaguawsukusm) { if (!$omwmuycmeqcqokom instanceof DOMNode) { goto gcqeuqmciwqwqisq; } if ($nsmgceoqaqogqmuw instanceof DOMNode) { goto wyscaumqgyqycymq; } $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $ymyisaeksssueeik = $this->gqskweuukuceuaoq($omwmuycmeqcqokom->ownerDocument, $ymyisaeksssueeik); $this->agmamqsgiugeeayw($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc); cceqaegwsqgaqges: } uewomuwyiswwamwg: goto sgkiwwkeeuyuyqwg; wyscaumqgyqycymq: if ($qmeuaeiseuacgiqc) { goto imwggkqiceiqwwyw; } $osoycceiygogkecu = $omwmuycmeqcqokom->firstChild; $this->kqgwgkuykuumwcgw($osoycceiygogkecu, $nsmgceoqaqogqmuw); goto yoummmmsocscggua; imwggkqiceiqwwyw: $this->cgeyeoimiuyogose($omwmuycmeqcqokom, $nsmgceoqaqogqmuw); yoummmmsocscggua: sgkiwwkeeuyuyqwg: gcqeuqmciwqwqisq: } private function iuioyckswgesgsqw(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw) { $qeaoumiemyikogys = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw)); $kuukgsmqkagwaciu = $qeaoumiemyikogys->getElementsByTagName("\142\157\144\171")->item(0); if (!$kuukgsmqkagwaciu) { goto ggyguomagomqcmkq; } foreach ($kuukgsmqkagwaciu->childNodes as $ymyisaeksssueeik) { $this->cgeyeoimiuyogose($omwmuycmeqcqokom, $ymyisaeksssueeik); umkugowakqmaakky: } okmuocsmgiyuiggc: ggyguomagomqcmkq: } public function auokmyiaciikcekk($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie = null, array $wwgucssaecqekuek = [], $ymyisaeksssueeik = null) { $kqywgoqsmuswammk = null; if ($ymyisaeksssueeik) { goto wuuqakiyccsuwswc; } $ymyisaeksssueeik = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc("\x3c\x64\x69\x76\x3e\74\57\x64\x69\x76\x3e")); wuuqakiyccsuwswc: if (!$ymyisaeksssueeik instanceof DOMNode) { goto mqmqcqqgqcmiqeyu; } try { if (!$ymyisaeksssueeik->ownerDocument) { goto ccccywcecqgsswqk; } $ymyisaeksssueeik = $ymyisaeksssueeik->ownerDocument; ccccywcecqgsswqk: $kqywgoqsmuswammk = $ymyisaeksssueeik->createElement($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); if (!$wwgucssaecqekuek) { goto coukkakgwkwmoyou; } foreach ($wwgucssaecqekuek as $wisgiwskwawciiee => $giueyucwwwwiooim) { $this->cqieekgkogamcsqk($kqywgoqsmuswammk, $wisgiwskwawciiee, $giueyucwwwwiooim); koeyooaqusayoskm: } ogcysuekkcyswiku: coukkakgwkwmoyou: } catch (Exception $wgaoewqkwgomoaai) { } mqmqcqqgqcmiqeyu: return $kqywgoqsmuswammk; } private function gqskweuukuceuaoq($kgcekiucekagcgai, $ymyisaeksssueeik) { $ksaameoqigiaoigg = false; if (!$kgcekiucekagcgai instanceof DOMDocument) { goto sqkqeueggemiwaqi; } $ksaameoqigiaoigg = $kgcekiucekagcgai->importNode($ymyisaeksssueeik, true); sqkqeueggemiwaqi: return $ksaameoqigiaoigg; } private function uwqgywaceaaymckg($ymyisaeksssueeik, $omwmuycmeqcqokom = null) : ?DOMNode { $ksaameoqigiaoigg = null; if (!$ymyisaeksssueeik instanceof DOMNode) { goto yuyamyuwcskywmgg; } if ($omwmuycmeqcqokom) { goto aiggskceoswousgw; } $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode; aiggskceoswousgw: $ksaameoqigiaoigg = $omwmuycmeqcqokom->removeChild($ymyisaeksssueeik); yuyamyuwcskywmgg: return $ksaameoqigiaoigg; } private function owoeecswcugcquqy(DOMCrawler $kasgukgceywckyou, $nsmgceoqaqogqmuw) : DOMNode { $qeaoumiemyikogys = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw)); $kgcekiucekagcgai = $this->uaqiwssauwwuyueg($kasgukgceywckyou); return $this->gqskweuukuceuaoq($kgcekiucekagcgai, $qeaoumiemyikogys->documentElement); } private function wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya = null, $kuuiuigeacouwmaa = 0) : ?DOMNode { $kasgukgceywckyou = $this->gkksucgseqqemesc($kasgukgceywckyou); if (!$yuumukkaswwoywya) { goto wmyggsuagwosceiu; } $kasgukgceywckyou = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); wmyggsuagwosceiu: return $kasgukgceywckyou->getNode($kuuiuigeacouwmaa); } private function aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = Constants::UPDATE) { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); if (!$kasgukgceywckyou) { goto qcogmismkiigwkcy; } foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, "\x70\x61\x72\x65\156\164"); if (!($kwmksuuciqkiymek && $omwmuycmeqcqokom)) { goto gmqqsceqqmkeuwsg; } try { $kwmksuuciqkiymek = $kwmksuuciqkiymek->ancestors(); } catch (Exception $wgaoewqkwgomoaai) { goto oqckmkkyuymqomww; } gmqqsceqqmkeuwsg: if (!$kwmksuuciqkiymek) { goto akcmkmaymmcekecu; } foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { $momcykaoccoymeig = 0; $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss($kwmksuuciqkiymek); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $this->ewmocgymgsyqumms($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig); $momcykaoccoymeig++; oasuqwiwsowakwam: } yauqaiisowsgmsau: sgyysmcsyuaucmau: } mmoceucgeiaguqsm: akcmkmaymmcekecu: oqckmkkyuymqomww: } myiuoyiycqukwuus: return $kasgukgceywckyou; qcogmismkiigwkcy: return $nsmgceoqaqogqmuw; } private function ewmocgymgsyqumms($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig) { if (is_callable($eqgoocgaqwqcimie)) { goto wuaogegqaecwwkyo; } $cusosqmyoqiykqgw = $eqgoocgaqwqcimie; goto gakocaasskoagogo; wuaogegqaecwwkyo: $cusosqmyoqiykqgw = $eqgoocgaqwqcimie($momcykaoccoymeig, $gaeqamemwmwsyukm); gakocaasskoagogo: if (!$ymyisaeksssueeik instanceof DOMElement) { goto wiawkskyaqysiqsq; } $ymyqweogikqywwqc = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymkomoccmymcoiea); switch ($aiamqeawckcsuaou) { case Constants::yaeeqsosiaimuqma: if (is_numeric($ymkomoccmymcoiea)) { goto cwkowmwgwyakkmki; } $geqcesmqwkeayoiu = "\x20"; $cusosqmyoqiykqgw = implode($geqcesmqwkeayoiu, array_diff(explode($geqcesmqwkeayoiu, $ymyqweogikqywwqc), explode($geqcesmqwkeayoiu, $cusosqmyoqiykqgw))); if ($cusosqmyoqiykqgw) { goto omscsmekaceaeico; } $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); omscsmekaceaeico: goto qwqaqqqqiksaqkss; cwkowmwgwyakkmki: $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $eqgoocgaqwqcimie); $cusosqmyoqiykqgw = null; qwqaqqqqiksaqkss: goto ueiewmqseyuugaum; case Constants::kkiywioiccuqokis: $cusosqmyoqiykqgw = null; if (!$this->owgokkumqicyuyiy($ymyisaeksssueeik, $ymkomoccmymcoiea)) { goto wkosyweqgikaakak; } $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); $this->cqieekgkogamcsqk($ymyisaeksssueeik, $eqgoocgaqwqcimie, $ymyqweogikqywwqc); wkosyweqgikaakak: goto ueiewmqseyuugaum; case Constants::REPLACE: case Constants::UPDATE: if ($aiamqeawckcsuaou === Constants::REPLACE) { goto eoamsouwygskswie; } if (!("\143\154\x61\163\163" === $ymkomoccmymcoiea && $ymyqweogikqywwqc)) { goto aeqakycgmcyiisae; } $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}"; aeqakycgmcyiisae: goto gowiwcysiyeummgy; eoamsouwygskswie: $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); gowiwcysiyeummgy: goto ueiewmqseyuugaum; case Constants::scucyuqmgoscisoa: if (!$this->owgokkumqicyuyiy($ymyisaeksssueeik, $ymkomoccmymcoiea)) { goto agckeekgsueysiac; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $cusosqmyoqiykqgw, $ymyqweogikqywwqc); $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); agckeekgsueysiac: $cusosqmyoqiykqgw = null; goto ueiewmqseyuugaum; } imoksosqowqmimoc: ueiewmqseyuugaum: if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) { goto kyieaymowioesowa; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $ymkomoccmymcoiea, $cusosqmyoqiykqgw); kyieaymowioesowa: wiawkskyaqysiqsq: } public function imwekacqceyomgia($ewgwqamkygiqaawc) { libxml_use_internal_errors(true); return simplexml_load_string($ewgwqamkygiqaawc); } public function mwkkiugcgoacioke($sqysweaqqiuacswu, string $uusmaiomayssaecw = "\165\162\x6c", string $magsskwwgciuwwoa = "\154\x6f\143") : array { if (!is_string($sqysweaqqiuacswu)) { goto qkmimisossgioguq; } $sqysweaqqiuacswu = $this->imwekacqceyomgia($sqysweaqqiuacswu); qkmimisossgioguq: $sogksuscggsicmac = []; if (!(false !== $sqysweaqqiuacswu)) { goto mckcswqwkwukogqy; } $gaeqamemwmwsyukm = count($sqysweaqqiuacswu->{$uusmaiomayssaecw}); $ciyackuwsqkoqese = 0; wwmkccqcyqkskosu: if (!($ciyackuwsqkoqese < $gaeqamemwmwsyukm)) { goto osiyyuaaukmsugso; } if (!($eqgoocgaqwqcimie = (string) $sqysweaqqiuacswu->{$uusmaiomayssaecw}[$ciyackuwsqkoqese]->{$magsskwwgciuwwoa})) { goto qwaewmyemsgqgkwg; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; qwaewmyemsgqgkwg: cskqgasmygooeiki: $ciyackuwsqkoqese++; goto wwmkccqcyqkskosu; osiyyuaaukmsugso: mckcswqwkwukogqy: return $sogksuscggsicmac; } }
