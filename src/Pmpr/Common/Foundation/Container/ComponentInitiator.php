<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d172c3f1f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator) { $this->canRunSetup = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ggocakcisguuokai($this); } parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)) { $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); } $locale = $this->sscegwueamckwmcy("\x70\x6c\x75\x67\151\156\137\x6c\157\143\x61\x6c\x65", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\56\155\x6f"; $mkomwsiykqigmqca = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\57\x74\x72\141\156\x73\154\141\x74\x69\157\156"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}")); } public abstract function register(); }
