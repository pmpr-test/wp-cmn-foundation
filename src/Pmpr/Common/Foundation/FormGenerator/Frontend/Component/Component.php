<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795745ee4997             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Component; use Pmpr\Common\Foundation\FormGenerator\Component as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Component extends BaseClass { use ObjectTrait; public function yemoaoaqkmkigwis(array $ikgwqyuyckaewsow, array $icwicymcioeyeyek = []) : array { $qsqwqsymmqeoqwcu = []; $mcksmcuocoksaocu = []; if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$ymqmyyeuycgmigyo] ?? null; if ($icwicymcioeyeyek) { if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { if ($aiowsaccomcoikus instanceof Collection) { if (is_array($eqgoocgaqwqcimie) && $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = array_values($eqgoocgaqwqcimie); foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { if (!isset($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm]) || empty($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm])) { $uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } $eqgoocgaqwqcimie[$momcykaoccoymeig] = $this->yemoaoaqkmkigwis($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uiymkeeaukcyqqik)[1]; } } else { $eqgoocgaqwqcimie = []; } } else { $yiiiqewsseywemqu = $aiowsaccomcoikus->ikaukuqokwgsyeia(); if (is_callable($yiiiqewsseywemqu)) { $eqgoocgaqwqcimie = $yiiiqewsseywemqu($eqgoocgaqwqcimie); } } $qsqwqsymmqeoqwcu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; $mcksmcuocoksaocu[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } } else { $qsqwqsymmqeoqwcu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; } } } } return [$qsqwqsymmqeoqwcu, $mcksmcuocoksaocu]; } }
