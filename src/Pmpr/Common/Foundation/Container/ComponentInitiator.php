<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c53dd59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator) { $this->canRunSetup = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ggocakcisguuokai($this); } parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)) { $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); } $locale = $this->sscegwueamckwmcy("\x70\154\165\x67\151\x6e\x5f\x6c\x6f\143\x61\154\x65", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\56\155\157"; $mkomwsiykqigmqca = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\57\164\162\x61\156\x73\x6c\x61\164\x69\157\156"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\x2f{$egcekquqcyayskcm}")); } public abstract function register(); }
