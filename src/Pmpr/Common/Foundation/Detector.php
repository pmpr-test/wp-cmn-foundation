<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d87febf6a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\155\x6f\142\151\x6c\x65"); } public function uggoocigiyiqkmww() : bool { return $this->is("\x63\157\155\x70\x75\x74\145\x72"); } public function gsuucswsiuggysyw() : bool { return $this->is("\164\x61\x62\154\x65\x74"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\x43\x68\x72\157\155\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\x46\151\x72\145\146\157\170"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\x63\x6f\x6d\160\x75\x74\145\x72": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x74\x61\x62\154\x65\x74": return $syowsmcowosssaos->isTablet(); case "\x6d\x6f\142\151\154\145": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\103\150\x72\157\155\x65": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\106\151\162\145\146\x6f\170": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\x45\144\x67\145": return $syowsmcowosssaos->agiscquiascsymwq(); case "\111\x6e\x74\145\162\x6e\145\164\x20\x45\x78\x70\154\157\x72\x65\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\x4f\160\x65\x72\x61": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\x53\141\146\x61\162\151": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\123\x61\x66\x61\x72\151\40\x6f\156\40\x69\x50\x68\x6f\156\x65": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
