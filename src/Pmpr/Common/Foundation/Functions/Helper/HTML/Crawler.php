<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use DOMAttr; use DOMDocument; use DOMElement; use DOMNode; use Exception; use InvalidArgumentException; use Pmpr\Common\Foundation\Interfaces\Constants; use Symfony\Component\DomCrawler\Crawler as DOMCrawler; class Crawler extends Common { public function uaqiwssauwwuyueg(DOMCrawler $kasgukgceywckyou) : DOMDocument { return $this->wugqmqwisygwoeas($kasgukgceywckyou)->ownerDocument; } public function has($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : bool { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); return $this->ygmcsmegcysyeoss($this->find($kasgukgceywckyou, $yuumukkaswwoywya)) > 0; } public function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto eocusimsawyoyaas; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto usosooekkcgwmgkq; } $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode; $this->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom); $nsmgceoqaqogqmuw = $this->skkueuquuqweeyqo($kwmksuuciqkiymek); goto qasccueceswyusgy; usosooekkcgwmgkq: yuwiekiseooqagqo: } qasccueceswyusgy: eocusimsawyoyaas: return $nsmgceoqaqogqmuw; } public function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw) { return $this->gqskweuukuceuaoq($ymyisaeksssueeik->ownerDocument, $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw))->documentElement); } public function wuuawmeqqyyyemsw($ymyisaeksssueeik) : array { $siquossayskcwkea = []; if (!$ymyisaeksssueeik instanceof DOMElement) { goto aqykwekaooeoqgoa; } foreach ($ymyisaeksssueeik->attributes as $sicussmmuqmeqygw) { $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue; geacgaisikkgqosu: } seasiecgqussuqkw: aqykwekaooeoqgoa: return $siquossayskcwkea; } public function kqgwgkuykuumwcgw($ikwqcaqmyuemessi, $uuswugicgoqcyiiy) { $sogksuscggsicmac = false; if (!$ikwqcaqmyuemessi instanceof DOMElement) { goto uckyuqsuyqwgswaa; } $omwmuycmeqcqokom = $ikwqcaqmyuemessi->parentNode; if (!$omwmuycmeqcqokom) { goto sacawqskusgwkkyg; } $sogksuscggsicmac = $omwmuycmeqcqokom->insertBefore($uuswugicgoqcyiiy, $ikwqcaqmyuemessi); sacawqskusgwkkyg: uckyuqsuyqwgswaa: return $sogksuscggsicmac; } public function owgokkumqicyuyiy($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : bool { $sogksuscggsicmac = false; if (!$ymyisaeksssueeik instanceof DOMElement) { goto geaeoccyqqkyocuw; } $sogksuscggsicmac = $ymyisaeksssueeik->hasAttribute($ymqmyyeuycgmigyo); geaeoccyqqkyocuw: return $sogksuscggsicmac; } public function cqieekgkogamcsqk($ymyisaeksssueeik, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $sogksuscggsicmac = false; if (!$ymyisaeksssueeik instanceof DOMElement) { goto auqyeogymwsekuue; } $sogksuscggsicmac = $ymyisaeksssueeik->setAttribute($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); auqyeogymwsekuue: return $sogksuscggsicmac; } public function guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : string { $wisgiwskwawciiee = ''; if (!$ymyisaeksssueeik instanceof DOMElement) { goto owogoeykikyyqmck; } $wisgiwskwawciiee = $ymyisaeksssueeik->getAttribute($ymqmyyeuycgmigyo); owogoeykikyyqmck: return $wisgiwskwawciiee; } public function qeeokkmmskuyoecg($ymyisaeksssueeik, $ymqmyyeuycgmigyo) : bool { $sogksuscggsicmac = false; if (!$ymyisaeksssueeik instanceof DOMElement) { goto eiusewmkqqyyoqio; } $sogksuscggsicmac = $ymyisaeksssueeik->removeAttribute($ymqmyyeuycgmigyo); eiusewmkqqyyoqio: return $sogksuscggsicmac; } public function aaqqksicmumkuycy($kqywgoqsmuswammk, $nsmgceoqaqogqmuw) { } public function wkwyyyeomkqggggw($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : int { $gaeqamemwmwsyukm = 0; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto qkggwaukgmuiwose; } $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss($this->find($kasgukgceywckyou, $yuumukkaswwoywya)); qkggwaukgmuiwose: return $gaeqamemwmwsyukm; } public function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $kqywgoqsmuswammk, $ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto msmgiksiqawcgkqe; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $ycqsugugqomewkke = false; foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!($ymyisaeksssueeik instanceof DOMElement && ($koaqiaecmascwuyy = $this->auokmyiaciikcekk($kqywgoqsmuswammk, $ewgwqamkygiqaawc, $wwgucssaecqekuek, $ymyisaeksssueeik)))) { goto aqqwuwmasekigeus; } if ($pmeuqieyyceuacis = $ymyisaeksssueeik->nextSibling) { goto sauwooccoqomkyei; } $this->cgeyeoimiuyogose($ymyisaeksssueeik->parentNode, $koaqiaecmascwuyy); goto uecmkwyokqqcysim; sauwooccoqomkyei: $this->kqgwgkuykuumwcgw($pmeuqieyyceuacis, $koaqiaecmascwuyy); uecmkwyokqqcysim: $ycqsugugqomewkke = true; aqqwuwmasekigeus: yuouykoggqagseog: } owgsqkkemawskgos: if (!$ycqsugugqomewkke) { goto sooagyoeaycycmke; } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); sooagyoeaycycmke: msmgiksiqawcgkqe: return $nsmgceoqaqogqmuw; } public function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto saueimgassmwoyka; } foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) { if (!$uumwowmewaqyggce instanceof DOMNode) { goto eqysgewmuookykug; } $okcscwesammossuq = []; foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) { $okcscwesammossuq[] = $wcgsoqmmciswkmiq; wemkkueqksqmuyyk: } ocuecygeseyssqum: $uuswugicgoqcyiiy = $this->auokmyiaciikcekk($ymqmyyeuycgmigyo, null, [], $uumwowmewaqyggce); foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->cgeyeoimiuyogose($uuswugicgoqcyiiy, $wcgsoqmmciswkmiq); gsgiaiymawugosgi: } mowoyiecqoaiymym: foreach ($uumwowmewaqyggce->attributes as $sicussmmuqmeqygw) { $this->cqieekgkogamcsqk($uuswugicgoqcyiiy, $sicussmmuqmeqygw->nodeName, $sicussmmuqmeqygw->nodeValue); oieaoouoioamiqme: } ykokyisssyceccmy: $this->caqmeawgoiceoymu($uumwowmewaqyggce, $uuswugicgoqcyiiy); eqysgewmuookykug: wgycoeqcyascweia: } ccsqcysqesqcmqqc: cykouiuweogkyqee: } iqgceguocmwqeowe: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); saueimgassmwoyka: return $nsmgceoqaqogqmuw; } public function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto ymoeymaaemmysaam; } if (is_array($sgksuwkwyimqgaii)) { goto kuyggkawoaiiwseo; } $this->soeaagycqiykaymg($kasgukgceywckyou, $sgksuwkwyimqgaii); goto okuoucgkgyyseguu; kuyggkawoaiiwseo: foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $this->soeaagycqiykaymg($kasgukgceywckyou, $yuumukkaswwoywya); ssoawgymwwgamowo: } yeycmwocyqoegmaq: okuoucgkgyyseguu: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); ymoeymaaemmysaam: return $nsmgceoqaqogqmuw; } public function kkisyguyosoyymqs($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : bool { $umuecysoywoumgwo = false; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto igiumgigysasioec; } if (!($ksiyqouuaoymsycg = $this->find($kasgukgceywckyou, $yuumukkaswwoywya))) { goto uawsmeqsickqqyww; } $muiaiuymwoiaiwwm = $ksiyqouuaoymsycg->children()->count(); $umuecysoywoumgwo = $muiaiuymwoiaiwwm > 0; uawsmeqsickqqyww: igiumgigysasioec: return $umuecysoywoumgwo; } public function ogaeogwycyqqckeu($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::yaeeqsosiaimuqma), $nsmgceoqaqogqmuw); } public function maakiyaweemewuao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::kkiywioiccuqokis), $nsmgceoqaqogqmuw); } public function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::REPLACE), $nsmgceoqaqogqmuw); } public function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii), $nsmgceoqaqogqmuw); } public function muuoqyqmayuwucao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) : string { return $this->wgqqgewcmcemoewo($this->aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, Constants::scucyuqmgoscisoa), $nsmgceoqaqogqmuw); } public function mqyacwaaocgcsyag($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto oyywmoceqiqwyyek; } foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto aecaygyqamswuqcu; } $msqkueqksqwmskak = array_keys($siquossayskcwkea); foreach ($ymyisaeksssueeik->attributes as $sicussmmuqmeqygw) { $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName; if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak, true)) { goto ieaayaguiywwyecq; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue); ieaayaguiywwyecq: yosmywouooecowyi: } owcweesegmoeogqc: aecaygyqamswuqcu: qoqasyeyeesqmoye: } sgskgsyiqcqsiwwe: gkkowgywckwwcoss: } cqiuwwcuouuigawo: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); oyywmoceqiqwyyek: return $nsmgceoqaqogqmuw; } public function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee) : string { $eqgoocgaqwqcimie = ''; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto sgsgokmagckcoock; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto iweimwuaemaquuse; } $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); if (!$eqgoocgaqwqcimie) { goto qcqgacsuskoiskcg; } goto ucigyuukqagoagak; qcqgacsuskoiskcg: iweimwuaemaquuse: eumaaywogiiuiyao: } ucigyuukqagoagak: sgsgokmagckcoock: return $eqgoocgaqwqcimie; } public function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya) : array { $siquossayskcwkea = []; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto qwyoggysuwmawqoo; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $siquossayskcwkea = $this->wuuawmeqqyyyemsw($ymyisaeksssueeik); if (!$siquossayskcwkea) { goto euqaykgiqkmkaack; } goto gmkwekuakoueicws; euqaykgiqkmkaack: cyguswquuckqoqcu: } gmkwekuakoueicws: qwyoggysuwmawqoo: return $siquossayskcwkea; } public function skciuoqgiqoawwwe($kqywgoqsmuswammk, bool $ewgwqamkygiqaawc = false) { if ($ewgwqamkygiqaawc) { goto yegecewiqewskmgm; } $nsmgceoqaqogqmuw = $this->skkueuquuqweeyqo($kqywgoqsmuswammk); goto awayeqowmyycaoqs; yegecewiqewskmgm: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($kqywgoqsmuswammk, "\x74\x65\x78\x74\x43\x6f\156\x74\x65\x6e\x74"); awayeqowmyycaoqs: return $nsmgceoqaqogqmuw; } public function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, bool $qmeuaeiseuacgiqc = true, string $yuumukkaswwoywya = Constants::cikssaguawsukusm) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto kysgsayqeakiwmic; } $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $omwmuycmeqcqokom); if (!$ymyisaeksssueeik instanceof DOMNode) { goto aquiaqiseuwyomay; } $this->agmamqsgiugeeayw($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc, $yuumukkaswwoywya); aquiaqiseuwyomay: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); kysgsayqeakiwmic: return $nsmgceoqaqogqmuw; } public function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, bool $ewgwqamkygiqaawc = false) : string { $aqykuigiuwmmcieu = ''; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto faeciyigcmyieesm; } $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya); if (!$ymyisaeksssueeik instanceof DOMNode) { goto cgamwegmkwmmsoow; } if ($ewgwqamkygiqaawc) { goto eeiseascemqaocmo; } $aqykuigiuwmmcieu .= $this->skkueuquuqweeyqo($ymyisaeksssueeik); goto iukkuoewgiwcoukw; eeiseascemqaocmo: $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent; iukkuoewgiwcoukw: cgamwegmkwmmsoow: faeciyigcmyieesm: return $aqykuigiuwmmcieu; } public function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, bool $ewgwqamkygiqaawc = false) : array { $sogksuscggsicmac = []; if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto mgkgeuqasqcaimou; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto eyiigmyweugmgckw; } $this->cygiccaaumeiwwmk($ymyisaeksssueeik); $sogksuscggsicmac[] = $this->skciuoqgiqoawwwe($ymyisaeksssueeik, $ewgwqamkygiqaawc); eyiigmyweugmgckw: qguqeweisuimgyqk: } qakcamuiqmiscugu: mgkgeuqasqcaimou: return $sogksuscggsicmac; } public function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', bool $uuksaskqamgouosy = true) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto icmgwewmusucsooy; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto oykmqmogcwumacqq; } if ($uuksaskqamgouosy) { goto aiqskweckwoegquq; } $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo; goto acyuamggaiuqmsoa; aiqskweckwoegquq: $ymyisaeksssueeik->nodeValue = ''; if (!$goiaaeekgeqqmaqo) { goto qmgwqgkuucwysswc; } $this->iuioyckswgesgsqw($ymyisaeksssueeik, $goiaaeekgeqqmaqo); qmgwqgkuucwysswc: acyuamggaiuqmsoa: oykmqmogcwumacqq: wcsicmaoskwcaqou: } syycscyugcgsquwm: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); icmgwewmusucsooy: return $nsmgceoqaqogqmuw; } public function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, int $uuyoeicyoayimaoa = 0, bool $ksaameoqigiaoigg = true) : string { if (!(is_callable($ekiuyucoiagmscgy) && ($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw)))) { goto aaoueeomccwsoycq; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) { if (!($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa)) { goto psqooaaoocusoyag; } goto myyuyqequamqekoc; psqooaaoocusoyag: if (!($ymyisaeksssueeik instanceof DOMElement && !call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya]))) { goto mseiksmausoaqecy; } goto myyuyqequamqekoc; mseiksmausoaqecy: swcqqiyagauaogiy: } myyuyqequamqekoc: if (!$ksaameoqigiaoigg) { goto mmyckscscsmqsqwo; } $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); mmyckscscsmqsqwo: aaoueeomccwsoycq: return $nsmgceoqaqogqmuw; } public function wesimowqwekiqiow($nsmgceoqaqogqmuw, string $eeqsmkqmsowmicwi = Constants::wwukgkqwyakeqwqk, bool $cussukyecoaeayqk = true) : string { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto oysgkcoiouaikyys; } $kswaimykcacqyaay = $this->wugqmqwisygwoeas($kasgukgceywckyou, "\x68\145\141\x64\40\76\40{$eeqsmkqmsowmicwi}"); $ewgwqamkygiqaawc = ''; if (!$kswaimykcacqyaay instanceof DOMNode) { goto wggkwquawceyksmk; } $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent; wggkwquawceyksmk: $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, "\133\163\164\x79\154\x65\135"); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto ikuyuccwmwasokmy; } $yuumukkaswwoywya = Constants::wwukgkqwyakeqwqk; $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $yuumukkaswwoywya); if (!$eqgoocgaqwqcimie) { goto ikqqueokumaakwmk; } $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $yuumukkaswwoywya); $omasqoksqewuwwkq = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5); if ($cussukyecoaeayqk) { goto caawoosasoogaiwa; } $eqgoocgaqwqcimie = str_replace("\41\x69\155\160\x6f\162\x74\141\156\x74", '', $eqgoocgaqwqcimie); caawoosasoogaiwa: $acqqmqmcquukaqsc = "\56{$omasqoksqewuwwkq}\x7b{$eqgoocgaqwqcimie}\175"; $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc; $egkyssmuqcwaciya = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\x6c\x61\163\163"); $egkyssmuqcwaciya .= "\x20{$omasqoksqewuwwkq}"; $this->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\x6c\141\163\163", $egkyssmuqcwaciya); ikqqueokumaakwmk: ikuyuccwmwasokmy: gciymsqoaosekywi: } ggscugaoyeccwaoq: if ($kswaimykcacqyaay instanceof DOMElement) { goto gmwcswqmcyogosia; } $this->pmouaioykaoceyag($kasgukgceywckyou, "\x68\145\x61\x64", $ewgwqamkygiqaawc); goto aiegomwmomwugkaa; gmwcswqmcyogosia: $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc; aiegomwmomwugkaa: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); oysgkcoiouaikyys: return $nsmgceoqaqogqmuw; } public function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, bool $egomoiciasmiesww = false) : string { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto ywskqocaomieoeuo; } $ymyisaeksssueeik = $this->wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya); if (!$ymyisaeksssueeik instanceof DOMNode) { goto ycwkcyukyieusyce; } if ($egomoiciasmiesww) { goto gikmiimsmmugmewi; } $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc; gikmiimsmmugmewi: $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc; ycwkcyukyieusyce: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); ywskqocaomieoeuo: return $nsmgceoqaqogqmuw; } public function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, array $eagcmyswaakcwyec = [], string $omwmuycmeqcqokom = "\x64\151\166", bool $qmeuaeiseuacgiqc = true) { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto cukkwcqimawsesga; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $okcscwesammossuq = ''; $ygickiygyemsowyo = null; foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMNode) { goto okcicyakakceigwe; } $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode; $this->cygiccaaumeiwwmk($ymyisaeksssueeik); $okcscwesammossuq .= $this->skkueuquuqweeyqo($ymyisaeksssueeik); okcicyakakceigwe: oesieyemekcikmuo: } yqysoqweammswcea: if (!$ygickiygyemsowyo) { goto ymygyumokgcugqco; } $omwmuycmeqcqokom = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq); $this->agmamqsgiugeeayw($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc); $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); ymygyumokgcugqco: cukkwcqimawsesga: return $nsmgceoqaqogqmuw; } public function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, string $ymkomoccmymcoiea = Constants::wwukgkqwyakeqwqk, string $wamcomkuwysqgwgk = "\45\163\x3b") : string { if (!($kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw))) { goto eseyuoaaskemwycm; } $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { if (!$ymyisaeksssueeik instanceof DOMElement) { goto ouakugqyqismmmwq; } $eqgoocgaqwqcimie = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ccamueccusigaaio); $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ccamueccusigaaio); if (!$eqgoocgaqwqcimie) { goto yeyuwakqagwqqmuc; } $yeacayasgueouoqc = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymkomoccmymcoiea); if (!$wamcomkuwysqgwgk) { goto kwqqookuogugoeoc; } $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie); kwqqookuogugoeoc: if (!(Constants::wwukgkqwyakeqwqk === $ymkomoccmymcoiea)) { goto iwcqqisaagoyaoyq; } $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\x3b") . "\73"; iwcqqisaagoyaoyq: $this->cqieekgkogamcsqk($ymyisaeksssueeik, $ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}")); yeyuwakqagwqqmuc: ouakugqyqismmmwq: smecgcsaskaiyqwg: } cumkyeqakeicycqy: $nsmgceoqaqogqmuw = $this->wgqqgewcmcemoewo($kasgukgceywckyou, $nsmgceoqaqogqmuw); eseyuoaaskemwycm: return $nsmgceoqaqogqmuw; } private function gkksucgseqqemesc($nsmgceoqaqogqmuw) : DOMCrawler { if ($nsmgceoqaqogqmuw instanceof DOMCrawler) { goto akccmuykyisokmqm; } $nsmgceoqaqogqmuw = preg_replace("\176\x3e\134\163\x2a\134\156\x5c\163\52\74\x7e", "\76\x3c", $nsmgceoqaqogqmuw); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->memaocoueygwyomc($nsmgceoqaqogqmuw); $kasgukgceywckyou = new DOMCrawler($nsmgceoqaqogqmuw); goto qmeuekyqssiomcyy; akccmuykyisokmqm: $kasgukgceywckyou = $nsmgceoqaqogqmuw; qmeuekyqssiomcyy: return $kasgukgceywckyou; } private function skkueuquuqweeyqo($ymyisaeksssueeik) { $ksaameoqigiaoigg = ''; if (!$ymyisaeksssueeik instanceof DOMNode) { goto eyimcucoicmimiao; } $ksaameoqigiaoigg = $ymyisaeksssueeik->ownerDocument->saveHTML($ymyisaeksssueeik); eyimcucoicmimiao: return $ksaameoqigiaoigg; } private function ygmcsmegcysyeoss($kasgukgceywckyou) : int { $gaeqamemwmwsyukm = 0; if (!$kasgukgceywckyou instanceof DOMCrawler) { goto eaeowkksqokeigsq; } $gaeqamemwmwsyukm = $kasgukgceywckyou->count(); eaeowkksqokeigsq: return $gaeqamemwmwsyukm; } private function caqmeawgoiceoymu($msqkueqksqwmskak, $uwomkgseoiegeume) { if (!($msqkueqksqwmskak instanceof DOMNode && $uwomkgseoiegeume instanceof DOMNode)) { goto qcmiieemioisoyyi; } $msqkueqksqwmskak->parentNode->replaceChild($uwomkgseoiegeume, $msqkueqksqwmskak); qcmiieemioisoyyi: } public function cygiccaaumeiwwmk(DOMNode $ymyisaeksssueeik) { $this->uwqgywaceaaymckg($ymyisaeksssueeik); } private function soeaagycqiykaymg($kasgukgceywckyou, $yuumukkaswwoywya) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $this->cygiccaaumeiwwmk($ymyisaeksssueeik); swuomeuwkcgwekss: } mkskmcusskkouyyi: } private function wgqqgewcmcemoewo($gykwsaeqegqowywy, $ggauoeuaesiymgee = '') : string { try { if (!$ggauoeuaesiymgee instanceof DOMCrawler) { goto ccwwqiosmasqqqwu; } $ggauoeuaesiymgee = $ggauoeuaesiymgee->html(); ccwwqiosmasqqqwu: $ikoqkmiqkckowcgg = "\74\x21\x44\117\x43\x54\131\120\x45\x20\x68\164\155\x6c\76"; $kkkqocwqmaokqcmc = stripos($ggauoeuaesiymgee, $ikoqkmiqkckowcgg) !== false; if ($gykwsaeqegqowywy instanceof DOMCrawler) { goto ycucsikocgkiesgi; } if ($gykwsaeqegqowywy instanceof DOMDocument) { goto okgweyikqgcceggq; } if (is_string($gykwsaeqegqowywy)) { goto owqiausosmeaugay; } throw new InvalidArgumentException(); goto kqueakeekumokwoe; owqiausosmeaugay: $nsmgceoqaqogqmuw = $gykwsaeqegqowywy; kqueakeekumokwoe: goto csisksagguuywuia; okgweyikqgcceggq: $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->saveHTML(); csisksagguuywuia: goto kquqieqqiieakmoa; ycucsikocgkiesgi: if ($kkkqocwqmaokqcmc) { goto scmkeeaewmeqguac; } $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee); $nsmgceoqaqogqmuw = preg_replace(["\57\50\74\51\50\150\145\x61\144\51\x28\x5b\x5e\x3e\135\52\77\51\x28\134\57\x3f\134\163\x2a\76\51\174\x3c\x5c\x2f\150\x65\x61\144\x3e\x2f", "\x2f\50\x3c\x29\50\x62\x6f\x64\171\51\x28\x5b\136\x3e\135\x2a\77\51\50\x5c\57\77\134\x73\x2a\76\x29\174\74\x5c\x2f\x62\x6f\x64\x79\76\x2f", "\x2f\x28\x70\141\162\x65\156\164\x3d\x22\x29\x28\133\x61\x2d\x7a\101\x2d\x5a\60\55\71\x3a\x3b\x5c\56\x5c\x73\134\50\134\x29\x5c\x2d\134\54\x5d\x2a\x29\x28\x22\x29\x2f"], '', $nsmgceoqaqogqmuw); goto qqeiuucaguymmsws; scmkeeaewmeqguac: $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->outerHtml(); $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw; qqeiuucaguymmsws: kquqieqqiieakmoa: } catch (Exception $wgaoewqkwgomoaai) { $nsmgceoqaqogqmuw = $ggauoeuaesiymgee; } if (is_string($nsmgceoqaqogqmuw)) { goto usakoyequcyysywo; } $nsmgceoqaqogqmuw = $ggauoeuaesiymgee; usakoyequcyysywo: return $nsmgceoqaqogqmuw; } private function find($kasgukgceywckyou, $yuumukkaswwoywya) : ?DOMCrawler { if (!$kasgukgceywckyou instanceof DOMCrawler) { goto okamgiuocakyggwo; } if (is_string($yuumukkaswwoywya)) { goto kwmgoowcwggsyokw; } $mmeioagwmyscwumo = 1; kwmgoowcwggsyokw: $kasgukgceywckyou = $kasgukgceywckyou->filter($yuumukkaswwoywya); okamgiuocakyggwo: return $kasgukgceywckyou; } public function cgeyeoimiuyogose(&$omwmuycmeqcqokom, $wcgsoqmmciswkmiq) : void { if (!($omwmuycmeqcqokom instanceof DOMNode && $wcgsoqmmciswkmiq instanceof DOMNode)) { goto cmcwskwgaiauugws; } if (!($wcgsoqmmciswkmiq = $this->gqskweuukuceuaoq($omwmuycmeqcqokom->ownerDocument, $wcgsoqmmciswkmiq))) { goto gcywqkqkwkcmoawo; } $omwmuycmeqcqokom->appendChild($wcgsoqmmciswkmiq); gcywqkqkwkcmoawo: cmcwskwgaiauugws: } private function agmamqsgiugeeayw($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, bool $qmeuaeiseuacgiqc = true, string $yuumukkaswwoywya = Constants::cikssaguawsukusm) { if (!$omwmuycmeqcqokom instanceof DOMNode) { goto gwucakcwqkiiqyyg; } if ($nsmgceoqaqogqmuw instanceof DOMNode) { goto egcycueumoemiuai; } $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $ymyisaeksssueeik = $this->gqskweuukuceuaoq($omwmuycmeqcqokom->ownerDocument, $ymyisaeksssueeik); $this->agmamqsgiugeeayw($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc); maswyugssquqqggq: } kyaiywcwwmeqwyaw: goto miyggyguyamiggcm; egcycueumoemiuai: if ($qmeuaeiseuacgiqc) { goto gmoykcyssieuqueu; } $osoycceiygogkecu = $omwmuycmeqcqokom->firstChild; $this->kqgwgkuykuumwcgw($osoycceiygogkecu, $nsmgceoqaqogqmuw); goto iywiyewymemgqacq; gmoykcyssieuqueu: $this->cgeyeoimiuyogose($omwmuycmeqcqokom, $nsmgceoqaqogqmuw); iywiyewymemgqacq: miyggyguyamiggcm: gwucakcwqkiiqyyg: } private function iuioyckswgesgsqw(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw) { $qeaoumiemyikogys = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw)); $kuukgsmqkagwaciu = $qeaoumiemyikogys->getElementsByTagName("\x62\157\x64\x79")->item(0); if (!$kuukgsmqkagwaciu) { goto sskkiisoqmmsocic; } foreach ($kuukgsmqkagwaciu->childNodes as $ymyisaeksssueeik) { $this->cgeyeoimiuyogose($omwmuycmeqcqokom, $ymyisaeksssueeik); aqamaqggiseeioqq: } mcyamakgwewogwqi: sskkiisoqmmsocic: } public function auokmyiaciikcekk($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie = null, array $wwgucssaecqekuek = [], $ymyisaeksssueeik = null) { $kqywgoqsmuswammk = null; if ($ymyisaeksssueeik) { goto siuuokwymeygcosy; } $ymyisaeksssueeik = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc("\x3c\x64\x69\x76\76\74\57\144\151\166\x3e")); siuuokwymeygcosy: if (!$ymyisaeksssueeik instanceof DOMNode) { goto occaiwsgmaykoqey; } try { if (!$ymyisaeksssueeik->ownerDocument) { goto icksskeigsiugace; } $ymyisaeksssueeik = $ymyisaeksssueeik->ownerDocument; icksskeigsiugace: $kqywgoqsmuswammk = $ymyisaeksssueeik->createElement($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); if (!$wwgucssaecqekuek) { goto swuquosuguoomaeq; } foreach ($wwgucssaecqekuek as $wisgiwskwawciiee => $giueyucwwwwiooim) { $this->cqieekgkogamcsqk($kqywgoqsmuswammk, $wisgiwskwawciiee, $giueyucwwwwiooim); eyaesumwwwgisaym: } ceyygoicaeoqwwio: swuquosuguoomaeq: } catch (Exception $wgaoewqkwgomoaai) { } occaiwsgmaykoqey: return $kqywgoqsmuswammk; } private function gqskweuukuceuaoq($kgcekiucekagcgai, $ymyisaeksssueeik) { $ksaameoqigiaoigg = false; if (!$kgcekiucekagcgai instanceof DOMDocument) { goto iuikeaqqcukamyqm; } $ksaameoqigiaoigg = $kgcekiucekagcgai->importNode($ymyisaeksssueeik, true); iuikeaqqcukamyqm: return $ksaameoqigiaoigg; } private function uwqgywaceaaymckg($ymyisaeksssueeik, $omwmuycmeqcqokom = null) : ?DOMNode { $ksaameoqigiaoigg = null; if (!$ymyisaeksssueeik instanceof DOMNode) { goto swwmkisacmieqiae; } if ($omwmuycmeqcqokom) { goto mweoqymwyuimuakm; } $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode; mweoqymwyuimuakm: $ksaameoqigiaoigg = $omwmuycmeqcqokom->removeChild($ymyisaeksssueeik); swwmkisacmieqiae: return $ksaameoqigiaoigg; } private function owoeecswcugcquqy(DOMCrawler $kasgukgceywckyou, $nsmgceoqaqogqmuw) : DOMNode { $qeaoumiemyikogys = $this->uaqiwssauwwuyueg($this->gkksucgseqqemesc($nsmgceoqaqogqmuw)); $kgcekiucekagcgai = $this->uaqiwssauwwuyueg($kasgukgceywckyou); return $this->gqskweuukuceuaoq($kgcekiucekagcgai, $qeaoumiemyikogys->documentElement); } private function wugqmqwisygwoeas($kasgukgceywckyou, $yuumukkaswwoywya = null, $kuuiuigeacouwmaa = 0) : ?DOMNode { $kasgukgceywckyou = $this->gkksucgseqqemesc($kasgukgceywckyou); if (!$yuumukkaswwoywya) { goto imqeimsscmwgasys; } $kasgukgceywckyou = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); imqeimsscmwgasys: return $kasgukgceywckyou->getNode($kuuiuigeacouwmaa); } private function aeyacseeuaeycmgk($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = Constants::UPDATE) { $kasgukgceywckyou = $this->gkksucgseqqemesc($nsmgceoqaqogqmuw); if (!$kasgukgceywckyou) { goto uysqwomcuuccagkq; } foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) { $kwmksuuciqkiymek = $this->find($kasgukgceywckyou, $yuumukkaswwoywya); $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, "\x70\x61\162\145\x6e\164"); if (!($kwmksuuciqkiymek && $omwmuycmeqcqokom)) { goto kmkoiwuimosekikq; } try { $kwmksuuciqkiymek = $kwmksuuciqkiymek->ancestors(); } catch (Exception $wgaoewqkwgomoaai) { goto augwgqgcukgkywiw; } kmkoiwuimosekikq: if (!$kwmksuuciqkiymek) { goto qeieqkqcyuasgqqk; } foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { $momcykaoccoymeig = 0; $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss($kwmksuuciqkiymek); foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) { $this->ewmocgymgsyqumms($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig); $momcykaoccoymeig++; kmykwuqougkwauiy: } akkecgwmiimmeqmy: ugwysoaqswaocsuu: } msmiaayuagocuswc: qeieqkqcyuasgqqk: augwgqgcukgkywiw: } kuwecmygikeyisuq: return $kasgukgceywckyou; uysqwomcuuccagkq: return $nsmgceoqaqogqmuw; } private function ewmocgymgsyqumms($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig) { if (is_callable($eqgoocgaqwqcimie)) { goto sucekaeksayiwooe; } $cusosqmyoqiykqgw = $eqgoocgaqwqcimie; goto scykswkumgcoqgcc; sucekaeksayiwooe: $cusosqmyoqiykqgw = $eqgoocgaqwqcimie($momcykaoccoymeig, $gaeqamemwmwsyukm); scykswkumgcoqgcc: if (!$ymyisaeksssueeik instanceof DOMElement) { goto yukcsywomcgeqoiq; } $ymyqweogikqywwqc = $this->guaqqcyuaeucmgoy($ymyisaeksssueeik, $ymkomoccmymcoiea); switch ($aiamqeawckcsuaou) { case Constants::yaeeqsosiaimuqma: if (is_numeric($ymkomoccmymcoiea)) { goto qisaayswqcmucoqg; } $geqcesmqwkeayoiu = "\40"; $cusosqmyoqiykqgw = implode($geqcesmqwkeayoiu, array_diff(explode($geqcesmqwkeayoiu, $ymyqweogikqywwqc), explode($geqcesmqwkeayoiu, $cusosqmyoqiykqgw))); if ($cusosqmyoqiykqgw) { goto mioseimsuqaqiqae; } $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); mioseimsuqaqiqae: goto ewecikeyyqmewkgy; qisaayswqcmucoqg: $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $eqgoocgaqwqcimie); $cusosqmyoqiykqgw = null; ewecikeyyqmewkgy: goto wsksakoqeqwkigoq; case Constants::kkiywioiccuqokis: $cusosqmyoqiykqgw = null; if (!$this->owgokkumqicyuyiy($ymyisaeksssueeik, $ymkomoccmymcoiea)) { goto eugoueaksseemowq; } $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); $this->cqieekgkogamcsqk($ymyisaeksssueeik, $eqgoocgaqwqcimie, $ymyqweogikqywwqc); eugoueaksseemowq: goto wsksakoqeqwkigoq; case Constants::REPLACE: case Constants::UPDATE: if ($aiamqeawckcsuaou === Constants::REPLACE) { goto wsiysogusuimayic; } if (!("\x63\x6c\x61\163\163" === $ymkomoccmymcoiea && $ymyqweogikqywwqc)) { goto awsqsasmmamcskkk; } $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\40{$cusosqmyoqiykqgw}"; awsqsasmmamcskkk: goto iyuiasiuowggciss; wsiysogusuimayic: $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); iyuiasiuowggciss: goto wsksakoqeqwkigoq; case Constants::scucyuqmgoscisoa: if (!$this->owgokkumqicyuyiy($ymyisaeksssueeik, $ymkomoccmymcoiea)) { goto yquwqeooeyyociqm; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $cusosqmyoqiykqgw, $ymyqweogikqywwqc); $this->qeeokkmmskuyoecg($ymyisaeksssueeik, $ymkomoccmymcoiea); yquwqeooeyyociqm: $cusosqmyoqiykqgw = null; goto wsksakoqeqwkigoq; } auiaaeeakqkocmqu: wsksakoqeqwkigoq: if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) { goto mowimwgkwoymuoae; } $this->cqieekgkogamcsqk($ymyisaeksssueeik, $ymkomoccmymcoiea, $cusosqmyoqiykqgw); mowimwgkwoymuoae: yukcsywomcgeqoiq: } public function imwekacqceyomgia($ewgwqamkygiqaawc) { libxml_use_internal_errors(true); return simplexml_load_string($ewgwqamkygiqaawc); } public function mwkkiugcgoacioke($sqysweaqqiuacswu, string $uusmaiomayssaecw = "\165\162\154", string $magsskwwgciuwwoa = "\154\157\143") : array { if (!is_string($sqysweaqqiuacswu)) { goto gqaecycgekomqqgu; } $sqysweaqqiuacswu = $this->imwekacqceyomgia($sqysweaqqiuacswu); gqaecycgekomqqgu: $sogksuscggsicmac = []; if (!(false !== $sqysweaqqiuacswu)) { goto caeucwusaisgqaoe; } $gaeqamemwmwsyukm = count($sqysweaqqiuacswu->{$uusmaiomayssaecw}); $ciyackuwsqkoqese = 0; gkyuckeugacsewka: if (!($ciyackuwsqkoqese < $gaeqamemwmwsyukm)) { goto cygqsmeoqscsscqm; } if (!($eqgoocgaqwqcimie = (string) $sqysweaqqiuacswu->{$uusmaiomayssaecw}[$ciyackuwsqkoqese]->{$magsskwwgciuwwoa})) { goto siuaqaksaumkaeui; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; siuaqaksaumkaeui: ukmkcwicoqcoyqog: $ciyackuwsqkoqese++; goto gkyuckeugacsewka; cygqsmeoqscsscqm: caeucwusaisgqaoe: return $sogksuscggsicmac; } }
