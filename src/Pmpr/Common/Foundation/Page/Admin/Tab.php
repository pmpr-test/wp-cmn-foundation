<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522aeb59a71             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Tab extends Container { protected ?string $id = null; protected int $priority = 0; protected ?string $title = null; protected ?string $description = null; public function mwikyscisascoeea() : ?string { return $this->id; } public function yywskysiycwkwsgw() : int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function __construct($aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; $this->priority = $sqqewmoeaekuyyas; $this->description = $ukwokcuqauuosmoo; parent::__construct(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x70\x61\x67\145\x5f\x61\144\x6d\x69\156\137\157\x75\x74\x70\x75\x74\x5f{$this->mwikyscisascoeea()}\137\x74\x61\x62", [$this, "\x72\x65\x6e\144\x65\162"]); parent::wigskegsqequoeks(); } public function eiieguqemowyacgi() { } public function render() { $this->eiieguqemowyacgi(); $qookweymeqawmcwo = $this->gayqqwwuycceosii(); $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qookweymeqawmcwo, Constants::uwceyikaaaqgkkee, $this->mwikyscisascoeea()); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } public abstract function gayqqwwuycceosii() : array; }
