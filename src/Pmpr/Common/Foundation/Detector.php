<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\x6d\157\x62\151\x6c\145"); } public function uggoocigiyiqkmww() : bool { return $this->is("\x63\x6f\155\x70\x75\164\145\x72"); } public function gsuucswsiuggysyw() : bool { return $this->is("\x74\x61\x62\154\x65\164"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\103\150\x72\x6f\155\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\x46\x69\162\145\146\x6f\x78"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\x63\157\155\x70\165\164\x65\162": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\164\x61\142\x6c\145\x74": return $syowsmcowosssaos->isTablet(); case "\x6d\157\x62\151\x6c\x65": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\x68\162\x6f\155\145": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\x46\151\162\145\x66\157\170": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\x45\144\147\x65": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\x6e\164\x65\x72\x6e\x65\x74\40\x45\170\x70\154\157\162\145\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\x4f\x70\145\162\141": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\123\x61\146\141\162\x69": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\x53\141\146\x61\162\x69\x20\x6f\x6e\x20\151\120\150\157\x6e\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
