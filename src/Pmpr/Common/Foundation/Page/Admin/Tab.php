<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d16a012f73             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Tab extends Container { protected ?string $id = null; protected int $priority = 0; protected ?string $title = null; protected ?string $description = null; public function mwikyscisascoeea() : ?string { return $this->id; } public function yywskysiycwkwsgw() : int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function __construct($aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; $this->priority = $sqqewmoeaekuyyas; $this->description = $ukwokcuqauuosmoo; parent::__construct(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\160\x61\x67\145\x5f\141\x64\155\151\x6e\137\x6f\165\x74\160\165\164\x5f{$this->mwikyscisascoeea()}\137\x74\x61\x62", [$this, "\162\145\x6e\144\x65\x72"]); parent::wigskegsqequoeks(); } public function eiieguqemowyacgi() { } public function render() { $this->eiieguqemowyacgi(); $qookweymeqawmcwo = $this->gayqqwwuycceosii(); $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qookweymeqawmcwo, Constants::uwceyikaaaqgkkee, $this->mwikyscisascoeea()); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } public abstract function gayqqwwuycceosii() : array; }
