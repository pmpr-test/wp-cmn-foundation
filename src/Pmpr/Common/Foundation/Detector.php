<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc48145c0e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\x6d\x6f\142\x69\x6c\x65"); } public function uggoocigiyiqkmww() : bool { return $this->is("\x63\x6f\x6d\x70\165\x74\x65\162"); } public function gsuucswsiuggysyw() : bool { return $this->is("\x74\141\142\154\x65\x74"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\103\150\x72\x6f\x6d\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\x46\151\x72\x65\x66\157\170"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\x63\x6f\155\x70\x75\164\x65\x72": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x74\x61\142\x6c\145\x74": return $syowsmcowosssaos->isTablet(); case "\x6d\157\142\x69\x6c\x65": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\103\x68\162\x6f\x6d\145": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\106\151\162\145\x66\x6f\170": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\x45\144\x67\x65": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\x6e\164\x65\x72\156\x65\x74\x20\x45\x78\x70\154\157\x72\145\x72": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\x4f\160\x65\x72\141": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\x53\x61\146\x61\x72\151": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\x53\x61\x66\141\162\151\40\x6f\156\40\x69\x50\150\157\156\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
