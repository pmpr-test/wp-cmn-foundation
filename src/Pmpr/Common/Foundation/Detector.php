<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if ($this->device) { goto yguemqosugisymku; } $this->device = new MobileDetect(); yguemqosugisymku: return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\x6d\x6f\x62\151\x6c\x65"); } public function uggoocigiyiqkmww() : bool { return $this->is("\143\x6f\155\160\165\164\x65\x72"); } public function gsuucswsiuggysyw() : bool { return $this->is("\x74\x61\142\154\145\164"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\x43\150\162\x6f\155\x65"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\106\x69\x72\x65\146\x6f\170"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\143\157\x6d\x70\165\x74\145\162": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x74\x61\142\154\x65\164": return $syowsmcowosssaos->isTablet(); case "\155\x6f\142\x69\154\145": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\150\x72\157\x6d\x65": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\x46\x69\x72\145\146\157\x78": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\105\144\x67\145": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\x6e\164\x65\162\156\x65\x74\x20\x45\x78\x70\x6c\157\162\145\x72": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\117\160\x65\x72\x61": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\123\x61\x66\141\162\x69": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\x53\x61\146\141\x72\151\x20\x6f\156\40\151\x50\x68\x6f\156\145": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } gegweammscwsquwi: osmmmeymmeueymog: } }
