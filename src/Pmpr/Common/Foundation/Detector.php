<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d720531f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\155\x6f\x62\x69\x6c\x65"); } public function uggoocigiyiqkmww() : bool { return $this->is("\143\x6f\155\x70\x75\x74\145\x72"); } public function gsuucswsiuggysyw() : bool { return $this->is("\164\141\x62\x6c\145\164"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\x43\x68\162\x6f\x6d\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\106\x69\x72\145\146\x6f\x78"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\143\x6f\x6d\160\165\x74\x65\162": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x74\141\142\154\145\x74": return $syowsmcowosssaos->isTablet(); case "\155\x6f\142\151\x6c\145": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\x68\162\157\155\145": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\x46\x69\162\145\146\x6f\x78": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\105\144\147\x65": return $syowsmcowosssaos->agiscquiascsymwq(); case "\111\156\164\x65\x72\x6e\x65\164\40\105\170\160\154\157\162\145\x72": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\117\160\x65\x72\141": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\123\141\x66\x61\162\x69": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\123\141\146\141\162\151\40\157\x6e\x20\x69\120\150\x6f\x6e\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
