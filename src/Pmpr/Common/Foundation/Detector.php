<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if ($this->device) { goto mqoqegioiigykwga; } $this->device = new MobileDetect(); mqoqegioiigykwga: return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is("\x6d\157\142\151\154\145"); } public function uggoocigiyiqkmww() : bool { return $this->is("\143\157\x6d\160\165\x74\x65\162"); } public function gsuucswsiuggysyw() : bool { return $this->is("\164\x61\x62\x6c\x65\x74"); } public function iwuicqgsgkaeikwa() : bool { return $this->is("\x43\x68\162\x6f\155\145"); } public function yksyugcywqmuqgwo() : bool { return $this->is("\106\151\x72\145\146\x6f\170"); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case "\x63\x6f\x6d\x70\165\164\145\x72": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x74\x61\142\154\x65\x74": return $syowsmcowosssaos->isTablet(); case "\x6d\x6f\142\151\x6c\x65": $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case "\x43\x68\162\157\155\x65": return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case "\x46\151\x72\x65\146\157\170": return $syowsmcowosssaos->yksyugcywqmuqgwo(); case "\x45\x64\x67\145": return $syowsmcowosssaos->agiscquiascsymwq(); case "\x49\x6e\x74\145\x72\156\145\164\x20\x45\170\160\x6c\x6f\162\x65\162": return $syowsmcowosssaos->uqkceakeeogcceii(); case "\117\x70\x65\162\x61": return $syowsmcowosssaos->kwwoayeomosquauw(); case "\123\x61\x66\x61\162\151": return $syowsmcowosssaos->qmcqiqkwskusyqky(); case "\x53\141\146\x61\162\151\x20\x6f\x6e\x20\151\x50\150\x6f\x6e\x65": return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } fwycqcmswcqkuwkm: wuucyikacikiycik: } }
