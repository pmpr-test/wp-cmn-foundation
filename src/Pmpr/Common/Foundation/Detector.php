<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835e37313             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\155\x6f\x62\151\x6c\145"); } public function uggoocigiyiqkmww() : bool { return $this->is("\x63\x6f\x6d\x70\x75\164\x65\x72"); } public function gsuucswsiuggysyw() : bool { return $this->is("\164\x61\142\154\145\x74"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\x43\150\162\157\155\145"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\x46\151\x72\145\146\x6f\x78"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\x63\157\155\160\x75\x74\x65\x72": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x74\141\x62\154\x65\x74": return $syowsmcowosssaos->isTablet(); case "\x6d\x6f\142\x69\154\x65": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\150\162\x6f\x6d\x65": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\x46\x69\x72\x65\146\157\170": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\105\x64\147\145": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\156\x74\145\162\x6e\145\164\40\x45\170\160\x6c\x6f\162\145\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\x4f\x70\x65\162\x61": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\123\x61\146\141\162\x69": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\123\141\146\x61\162\151\40\x6f\x6e\x20\151\x50\150\157\156\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
