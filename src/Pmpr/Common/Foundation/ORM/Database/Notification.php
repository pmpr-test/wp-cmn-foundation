<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6773f9903c56c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Notification extends Container { use ModelTrait; protected $gateways = [Constants::mkywiykkiqimykiw => true, Constants::muqaqimusmckkieq => false]; public function ikiqgsaquyskoawk() { $this->ygmcsmegcysyeoss(true); } public function ygmcsmegcysyeoss(bool $cwwowqyuwccuykom = false) : int { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $omkysikckkcieckq = "{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\165\x6e\x73\145\x65\x6e\x5f\x63\x6f\x75\x6e\164"; $iakkeikwceeomgyq = "\157\x72\155\x5f\x75\x6e\163\145\145\x6e\x5f\x6e\x6f\164\151\x66\151\143\141\x74\x69\x6f\156"; $gaeqamemwmwsyukm = $uuwwyaeymswgsgsi->giiuwsmyumqwwiyq($omkysikckkcieckq, null, $iakkeikwceeomgyq); if ($gaeqamemwmwsyukm === null || $cwwowqyuwccuykom) { $aiskeseousaquweu = $meywaqqsugaoeyys->iekyeyicoyyawomk()->ieieyoeqmmeysauc(Constants::sugcoawcimusgaga, 0); if ($gaeqamemwmwsyukm !== $aiskeseousaquweu) { $gaeqamemwmwsyukm = $aiskeseousaquweu; $uuwwyaeymswgsgsi->qioweyiqewmsocem($omkysikckkcieckq, $gaeqamemwmwsyukm, $iakkeikwceeomgyq); } } return $gaeqamemwmwsyukm; } public function ssssuiueweooweeg() : array { return $this->gateways; } public function ayqamywsyyeucmoo(string $csagckiyuikmowek) : bool { return $this->gateways[$csagckiyuikmowek] ?? false; } public function dimsswsyskyecscu(string $csagckiyuikmowek) : self { $this->gateways[$csagckiyuikmowek] = true; return $this; } public function syemgsuewkasoaek(array $qceyowgiyaiaqeyi) : self { foreach ($qceyowgiyaiaqeyi as $csagckiyuikmowek) { $this->dimsswsyskyecscu($csagckiyuikmowek); } return $this; } public function notify($aokagokqyuysuksm, array $icwicymcioeyeyek) : self { return $this; } public function qicmaqwoqqguccmo($aokagokqyuysuksm) : self { $this->mgogaykgkoogasim()->gssiscqyqsacmeca()->wqikesawekycweoi($aokagokqyuysuksm, [Constants::sugcoawcimusgaga => 1], true); $this->ikiqgsaquyskoawk(); return $this; } }
