<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!(!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator)) { goto qwkmqwwwemyqycga; } $this->canRunSetup = $this->gmiyqqaekqcsoime(); qwkmqwwwemyqycga: parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if (!($wksoawcgagcgoask = $this->couwksyewgyeooqe())) { goto cgqskwwqiuciqgsk; } $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); cgqskwwqiuciqgsk: $locale = $this->sscegwueamckwmcy("\160\x6c\x75\x67\x69\156\137\154\157\x63\x61\154\145", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\56\x6d\x6f"; $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\x2f\x74\x72\x61\156\x73\154\x61\164\151\157\156"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}")); } public abstract function register(); }
