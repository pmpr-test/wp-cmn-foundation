<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fdd41716df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\155\157\142\x69\x6c\x65"); } public function uggoocigiyiqkmww() : bool { return $this->is("\143\157\x6d\x70\x75\164\x65\162"); } public function gsuucswsiuggysyw() : bool { return $this->is("\x74\x61\x62\154\x65\164"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\103\150\162\157\x6d\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\x46\151\x72\145\x66\x6f\170"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\x63\x6f\x6d\x70\x75\164\145\x72": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\164\x61\x62\x6c\x65\164": return $syowsmcowosssaos->isTablet(); case "\x6d\x6f\x62\x69\x6c\x65": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\x68\162\157\x6d\x65": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\x46\x69\x72\145\146\157\x78": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\105\144\x67\x65": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\156\164\145\x72\x6e\x65\164\40\105\170\x70\x6c\157\x72\145\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\117\x70\145\162\141": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\x53\x61\x66\x61\x72\151": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\123\x61\146\x61\x72\x69\x20\157\156\40\x69\x50\150\157\x6e\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
