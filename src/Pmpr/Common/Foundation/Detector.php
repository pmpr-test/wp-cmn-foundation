<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d41721935c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\155\x6f\x62\x69\154\145"); } public function uggoocigiyiqkmww() : bool { return $this->is("\143\x6f\155\160\x75\x74\145\162"); } public function gsuucswsiuggysyw() : bool { return $this->is("\164\141\x62\154\145\x74"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\103\150\x72\x6f\155\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\x46\151\162\x65\146\157\170"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\143\157\x6d\x70\x75\164\x65\x72": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\164\x61\142\x6c\145\164": return $syowsmcowosssaos->isTablet(); case "\x6d\157\x62\x69\x6c\x65": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\103\x68\x72\157\155\145": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\106\151\162\x65\146\157\x78": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\105\x64\x67\x65": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\156\x74\145\162\x6e\145\164\40\x45\x78\160\x6c\157\x72\145\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\117\160\145\x72\141": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\123\x61\146\141\162\151": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\123\141\146\141\162\151\40\157\156\x20\x69\x50\x68\x6f\156\x65": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
