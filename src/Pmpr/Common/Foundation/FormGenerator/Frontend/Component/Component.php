<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Component; use Pmpr\Common\Foundation\FormGenerator\Component as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Component extends BaseClass { use ObjectTrait; public function yemoaoaqkmkigwis(array $ikgwqyuyckaewsow, array $icwicymcioeyeyek = []) : array { $qsqwqsymmqeoqwcu = []; $mcksmcuocoksaocu = []; if (!$ikgwqyuyckaewsow) { goto mgomeacemugqgswa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eyecoeksswsicqkq; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$ymqmyyeuycgmigyo] ?? null; if ($icwicymcioeyeyek) { goto iescmuyqmwkeagcg; } $qsqwqsymmqeoqwcu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; goto eyacawwuwcgegekw; iescmuyqmwkeagcg: if (!$aiowsaccomcoikus->agmmqsowmyywagcm()) { goto keeayqkcscoegmmc; } if ($aiowsaccomcoikus instanceof Collection) { goto scuysmagomwasugy; } $yiiiqewsseywemqu = $aiowsaccomcoikus->ikaukuqokwgsyeia(); if (!is_callable($yiiiqewsseywemqu)) { goto aockoackcyuqgoky; } $eqgoocgaqwqcimie = $yiiiqewsseywemqu($eqgoocgaqwqcimie); aockoackcyuqgoky: goto yamuiaoquqoesiye; scuysmagomwasugy: if (is_array($eqgoocgaqwqcimie) && $eqgoocgaqwqcimie) { goto scgkuqsgoooesoak; } $eqgoocgaqwqcimie = []; goto kiwygqkmigumiiuk; scgkuqsgoooesoak: $eqgoocgaqwqcimie = array_values($eqgoocgaqwqcimie); foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { if (!(!isset($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm]) || empty($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm]))) { goto egcykicymsycioaq; } $uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); egcykicymsycioaq: $eqgoocgaqwqcimie[$momcykaoccoymeig] = $this->yemoaoaqkmkigwis($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uiymkeeaukcyqqik)[1]; ouiaceqmgmusysiq: } qgowycwwyqeusmqk: kiwygqkmigumiiuk: yamuiaoquqoesiye: $qsqwqsymmqeoqwcu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; $mcksmcuocoksaocu[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; keeayqkcscoegmmc: eyacawwuwcgegekw: eyecoeksswsicqkq: auyuqgiwqummogko: } oqwssckcieuowiwc: mgomeacemugqgswa: return [$qsqwqsymmqeoqwcu, $mcksmcuocoksaocu]; } }
