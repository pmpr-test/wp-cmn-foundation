<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67802fd4e8b59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator) { $this->canRunSetup = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ggocakcisguuokai($this); } parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)) { $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); } $locale = $this->sscegwueamckwmcy("\x70\154\165\x67\x69\156\x5f\154\x6f\143\141\x6c\145", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\56\x6d\x6f"; $mkomwsiykqigmqca = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\57\x74\x72\x61\x6e\163\154\x61\x74\151\157\156"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}")); } public abstract function register(); }
