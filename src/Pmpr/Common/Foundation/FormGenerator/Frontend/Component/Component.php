<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Component; use Pmpr\Common\Foundation\FormGenerator\Component as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Component extends BaseClass { use ObjectTrait; public function yemoaoaqkmkigwis(array $ikgwqyuyckaewsow, array $icwicymcioeyeyek = []) : array { $qsqwqsymmqeoqwcu = []; $mcksmcuocoksaocu = []; if (!$ikgwqyuyckaewsow) { goto useouyguueemgkmq; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto sogccagmgkcaoase; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$ymqmyyeuycgmigyo] ?? null; if ($icwicymcioeyeyek) { goto ywueqiukuessuggs; } $qsqwqsymmqeoqwcu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; goto iwwcoscasyysaqoo; ywueqiukuessuggs: if (!$aiowsaccomcoikus->agmmqsowmyywagcm()) { goto wmgokkkswmssqimu; } if ($aiowsaccomcoikus instanceof Collection) { goto maquyauskaqkikks; } $yiiiqewsseywemqu = $aiowsaccomcoikus->ikaukuqokwgsyeia(); if (!is_callable($yiiiqewsseywemqu)) { goto iiueqisykokweaaw; } $eqgoocgaqwqcimie = $yiiiqewsseywemqu($eqgoocgaqwqcimie); iiueqisykokweaaw: goto wgggaasiaeeucygm; maquyauskaqkikks: if (is_array($eqgoocgaqwqcimie) && $eqgoocgaqwqcimie) { goto ssocqyqwsyyekiik; } $eqgoocgaqwqcimie = []; goto nomsoewcmsqiikyy; ssocqyqwsyyekiik: $eqgoocgaqwqcimie = array_values($eqgoocgaqwqcimie); foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { if (!(!isset($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm]) || empty($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm]))) { goto eyoiasswoyuyuuco; } $uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); eyoiasswoyuyuuco: $eqgoocgaqwqcimie[$momcykaoccoymeig] = $this->yemoaoaqkmkigwis($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uiymkeeaukcyqqik)[1]; ewyqasqeksiqauuw: } csouyaoieqauoyww: nomsoewcmsqiikyy: wgggaasiaeeucygm: $qsqwqsymmqeoqwcu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; $mcksmcuocoksaocu[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; wmgokkkswmssqimu: iwwcoscasyysaqoo: sogccagmgkcaoase: wiqmeiaaqqauqeme: } gikgmkgewswggoou: useouyguueemgkmq: return [$qsqwqsymmqeoqwcu, $mcksmcuocoksaocu]; } }
