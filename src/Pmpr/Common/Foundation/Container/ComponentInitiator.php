<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!(!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator)) { goto ossakckwskyqusmm; } $this->canRunSetup = $this->gmiyqqaekqcsoime(); ossakckwskyqusmm: parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if (!($wksoawcgagcgoask = $this->couwksyewgyeooqe())) { goto mcagemacuqyskogs; } $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); mcagemacuqyskogs: $locale = $this->sscegwueamckwmcy("\x70\154\x75\147\151\x6e\x5f\154\157\143\141\x6c\145", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\56\x6d\157"; $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\57\164\x72\141\x6e\163\154\x61\164\151\x6f\156"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}")); } public abstract function register(); }
