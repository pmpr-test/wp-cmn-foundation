<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             676d4ae089ce3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\x6d\x6f\142\x69\154\145"); } public function uggoocigiyiqkmww() : bool { return $this->is("\143\x6f\x6d\x70\165\x74\145\x72"); } public function gsuucswsiuggysyw() : bool { return $this->is("\164\x61\x62\x6c\x65\x74"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\x43\150\x72\157\155\145"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\106\x69\162\145\146\x6f\x78"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\143\x6f\155\160\x75\x74\x65\162": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\164\x61\142\x6c\x65\164": return $syowsmcowosssaos->isTablet(); case "\155\157\142\151\154\145": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\150\162\x6f\x6d\145": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\106\151\162\145\x66\157\170": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\x45\x64\147\x65": return $syowsmcowosssaos->agiscquiascsymwq(); case "\111\156\164\x65\x72\156\x65\x74\x20\105\170\x70\154\157\162\145\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\117\160\145\x72\141": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\x53\141\x66\141\x72\x69": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\123\x61\x66\141\162\x69\x20\157\156\40\151\x50\x68\157\x6e\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
