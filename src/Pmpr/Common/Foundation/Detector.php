<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Detection\MobileDetect; use Pmpr\Common\Foundation\Container\Container; class Detector extends Container { protected ?MobileDetect $device = null; public function gekgcikwymwuuuog() : MobileDetect { if (!$this->device) { $this->device = new MobileDetect(); } return $this->device; } public function qawecuimqqcqwgsw() : bool { return $this->is('mobile'); } public function uggoocigiyiqkmww() : bool { return $this->is('computer'); } public function gsuucswsiuggysyw() : bool { return $this->is('tablet'); } public function iwuicqgsgkaeikwa() : bool { return $this->is('Chrome'); } public function yksyugcywqmuqgwo() : bool { return $this->is('Firefox'); } private function is($eqgoocgaqwqcimie) : bool { $syowsmcowosssaos = $this->gekgcikwymwuuuog(); switch ($eqgoocgaqwqcimie) { case 'computer': $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return !$qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case 'tablet': return $syowsmcowosssaos->isTablet(); case 'mobile': $gsuucswsiuggysyw = $syowsmcowosssaos->isTablet(); $qawecuimqqcqwgsw = $syowsmcowosssaos->isMobile(); return $qawecuimqqcqwgsw && !$gsuucswsiuggysyw; case 'Chrome': return $syowsmcowosssaos->iwuicqgsgkaeikwa(); case 'Firefox': return $syowsmcowosssaos->yksyugcywqmuqgwo(); case 'Edge': return $syowsmcowosssaos->agiscquiascsymwq(); case 'Internet Explorer': return $syowsmcowosssaos->uqkceakeeogcceii(); case 'Opera': return $syowsmcowosssaos->kwwoayeomosquauw(); case 'Safari': return $syowsmcowosssaos->qmcqiqkwskusyqky(); case 'Safari on iPhone': return $syowsmcowosssaos->ckgkgigywkseeqwo(); default: return false; } } }
