<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Component { use SingletonTrait, AttributeTrait, ComponentTrait, ToArrayTrait, NoticeTrait, CommonTrait, ArgsTrait; protected ?string $id = null; protected ?string $title = null; protected ?string $description = null; protected int $priority = 0; protected $enable = true; protected array $callbacks = [Constants::iccwcygaeqmomooo => null]; protected ?string $template = null; protected ?string $templateClass = null; public function __construct(?string $aokagokqyuysuksm = '') { $this->ggiaseqygioygumq($aokagokqyuysuksm); $this->qiccuiwooiquycsg(); if ($this->mwikyscisascoeea()) { goto mmoyseisgqkyouaq; } $iikwkaasoagisosa = self::uqggkiomyiceyooa(); wp_die("\111\x44\40\x72\145\161\165\151\x72\x65\x20\x66\x6f\162\x20\141\x20\x66\157\x72\155\x20\x67\145\x6e\x65\162\x61\164\x6f\x72\x20\x63\157\x6d\x70\157\156\x65\156\164\x3a\40{$iikwkaasoagisosa}"); mmoyseisgqkyouaq: if (!$this->kwyscakayqgsqosc()) { goto oyeuoiqgeuioiqie; } $this->gyqeoeemeemicgqi(); oyeuoiqgeuioiqie: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\151\156\151\x74"], 99); } public function qiccuiwooiquycsg() { } public function wyyuauosmqoeucmg() { } public function init() { $this->wyyuauosmqoeucmg(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto qwuwcoeiguyqekuy; } $this->yeyiguyegmmyusea(); qwuwcoeiguyqekuy: } public function yeyiguyegmmyusea() { } public function yiyqecawioyosoaw() : ?string { return $this->template; } public function keyowmguykygaoge() : ?string { return $this->templateClass; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, $aokagokqyuysuksm); $this->id = $aokagokqyuysuksm; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function ayseokmqycoqaigc() : bool { $oqkgomucoyswikgk = $this->enable; if (!is_callable($oqkgomucoyswikgk)) { goto osskmmsaekmgemwc; } $oqkgomucoyswikgk = $oqkgomucoyswikgk(); osskmmsaekmgemwc: return $oqkgomucoyswikgk; } public function wywmmeyauqkeskeq($oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function oykaosmaegqwmoga() : self { $this->enable = false; return $this; } public function render(bool $koaqeegoeiaiccse = false, array $qookweymeqawmcwo = []) : string { $nsmgceoqaqogqmuw = ''; if (!$this->ayseokmqycoqaigc()) { goto eowskcomgqqwcyui; } $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($qookweymeqawmcwo, $this->sacmkccceuywoqsq(false, [Constants::skgoiqckokigcmug => false])); $egkyssmuqcwaciya = $this->keyowmguykygaoge(); $qqscaoyqikuyeoaw = $this->yiyqecawioyosoaw(); $qookweymeqawmcwo[Constants::miceosguuseyyuqe] = $this; $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\143\x6c\x61\x73\163" => $egkyssmuqcwaciya, Constants::qaacaqioeyiuakeu => $koaqeegoeiaiccse]); eowskcomgqqwcyui: return $nsmgceoqaqogqmuw; } }
