<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!(!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator)) { goto kaukomgswmysiuus; } $this->canRunSetup = $this->gmiyqqaekqcsoime(); kaukomgswmysiuus: parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if (!($wksoawcgagcgoask = $this->couwksyewgyeooqe())) { goto wqwogycsmygawouy; } $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); wqwogycsmygawouy: $locale = $this->sscegwueamckwmcy("\x70\154\x75\x67\151\156\137\154\157\x63\x61\x6c\x65", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\56\x6d\x6f"; $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\x2f\164\x72\141\x6e\x73\x6c\141\x74\x69\157\x6e"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}")); } public abstract function register(); }
