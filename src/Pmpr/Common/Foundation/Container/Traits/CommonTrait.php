<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container\Traits; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; trait CommonTrait { protected bool $canRunSetup = true; protected ?Manager $assetManager = null; public function __construct() { $this->ikcgmcycisiccyuc(); if (!$this->kwyscakayqgsqosc()) { goto mgcieuiwescwqymy; } $this->gyqeoeemeemicgqi(); mgcieuiwescwqymy: } public function kwyscakayqgsqosc() : bool { return $this->canRunSetup; } public function miocmcoykayoyyau() : Manager { if ($this->assetManager) { goto ekswgqyowkoaksqi; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!$wksoawcgagcgoask) { goto uyyomesiccsqemog; } $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask); uyyomesiccsqemog: ekswgqyowkoaksqi: return $this->assetManager; } public function ikcgmcycisiccyuc() { } public function gyqeoeemeemicgqi() { $this->mameiwsayuyquoeq(); $this->eogyyugasomygcma(); $this->kgewmaycsoykyaso(); $this->wigskegsqequoeks(); $this->kgquecmsgcouyaya(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x63\157\x6d\160\157\156\145\156\164\x73\114\157\x61\144\145\x64"))) { goto gguiykqamegqmqki; } $this->qcsmikeggeemccuu("\x63\x6f\x6d\160\x6f\x6e\145\x6e\164\163\x5f\x6c\x6f\x61\x64\x65\x64", [$this, $qgciuiagkkguykgs])->qcsmikeggeemccuu("\x6d\157\x64\165\154\x65\163\137\x6c\x6f\x61\144\145\x64", [$this, $qgciuiagkkguykgs]); gguiykqamegqmqki: } public function mameiwsayuyquoeq() { } public function wigskegsqequoeks() { } public function kgquecmsgcouyaya() { } public function kgewmaycsoykyaso() { } public function eogyyugasomygcma() { } public function ugwmakayykcmcmqa() { return $this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc(static::class); } public final function wewkqsmqsoaoccew($mksyucucyswaukig = null) : bool { return true; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::quacgsocsmycocig(2680201081728, "\61\x30\62\x32\61\x33\62\61\63\61\66\66\x31\71\66\x32\66\66\62\66\x33\x32\66\x33\x31\x36\66\x31\63\x37\61\66\x36\61\x38\61\x32\x38\x31\x31\60\71\x31\x38\x31\x32\66\x33\62\x34\71\x31\x36\x36\62\x39\x30\x31\62\64\61\71\66\x31\x35\65\x31\64\64\x32\x36\x33\x31\66\x36\x31\x33\x37\61\66\66\x31\x38\61\x32\66\x33\x32\x33\x32\62\x35\x38"); return $mqumqwwemwgskykc; } public static final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if ($usymaaaeawgmyqig) { goto igyukcioksgyuumo; } $usymaaaeawgmyqig = []; igyukcioksgyuumo: $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if ($sociqikgoyemqaac) { goto comoagswmewckyoi; } $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\x61", "\x7a"), range(0, 9), ["\x2f", "\72", "\56", "\134", "\x5f", "\x2d"]); qumgeeowggyeimes: if (!($qsmaqqyoggcuyukq > 0)) { goto egqeaugqciqqaais; } $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; goto qumgeeowggyeimes; egqeaugqciqqaais: ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; woeskwkwwgwgmowo: } ugqqumgemgqkgowm: $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; qwuqiimucosmgmei: } esyeigyikuqioumu: $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; comoagswmewckyoi: return $sociqikgoyemqaac; } }
