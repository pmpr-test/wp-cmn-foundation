<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ed89d7ce97             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Data\Component; abstract class ComponentInitiator extends Container { public function __construct() { $this->register(); if (!$this instanceof CommonInitiator && !$this instanceof UtilityInitiator) { $this->canRunSetup = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ggocakcisguuokai($this); } parent::__construct(); } public final function gkieogwukagigisy(string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) : Component { $wksoawcgagcgoask = Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig, $ywmkwiwkosakssii); $this->ycgwemyyomeiuake(); return $wksoawcgagcgoask; } private function ycgwemyyomeiuake() { $mokawwccycoiqeka = ''; if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)) { $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua(); } $locale = $this->sscegwueamckwmcy("\160\154\x75\147\x69\x6e\x5f\x6c\157\143\x61\154\x65", determine_locale(), $mokawwccycoiqeka); $egcekquqcyayskcm = "{$locale}\x2e\x6d\157"; $mkomwsiykqigmqca = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\x2f\x74\162\141\156\x73\x6c\x61\x74\x69\x6f\x6e"; load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}")); } public abstract function register(); }
