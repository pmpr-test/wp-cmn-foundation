<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container\Traits; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; trait CommonTrait { protected bool $canRunSetup = true; protected ?Manager $assetManager = null; public function __construct() { $this->ikcgmcycisiccyuc(); if (!$this->kwyscakayqgsqosc()) { goto mgcieuiwescwqymy; } $this->gyqeoeemeemicgqi(); mgcieuiwescwqymy: } public function kwyscakayqgsqosc() : bool { return $this->canRunSetup; } public function miocmcoykayoyyau() : Manager { if ($this->assetManager) { goto ekswgqyowkoaksqi; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!$wksoawcgagcgoask) { goto uyyomesiccsqemog; } $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask); uyyomesiccsqemog: ekswgqyowkoaksqi: return $this->assetManager; } public function ikcgmcycisiccyuc() { } public function gyqeoeemeemicgqi() { $this->mameiwsayuyquoeq(); $this->eogyyugasomygcma(); $this->kgewmaycsoykyaso(); $this->wigskegsqequoeks(); $this->kgquecmsgcouyaya(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x63\157\x6d\x70\x6f\156\145\x6e\x74\x73\114\x6f\141\144\x65\x64"))) { goto gguiykqamegqmqki; } $this->qcsmikeggeemccuu("\x63\x6f\155\160\x6f\156\145\x6e\164\x73\x5f\154\x6f\x61\144\x65\x64", [$this, $qgciuiagkkguykgs])->qcsmikeggeemccuu("\x6d\157\x64\165\154\x65\163\x5f\x6c\x6f\141\144\x65\x64", [$this, $qgciuiagkkguykgs]); gguiykqamegqmqki: } public function mameiwsayuyquoeq() { } public function wigskegsqequoeks() { } public function kgquecmsgcouyaya() { } public function kgewmaycsoykyaso() { } public function eogyyugasomygcma() { } public function ugwmakayykcmcmqa() { return $this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc(static::class); } public final function wewkqsmqsoaoccew($mksyucucyswaukig = null) : bool { return true; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::quacgsocsmycocig(2680201081728, "\x31\x30\x32\x32\x30\67\62\60\x37\x31\x37\x32\61\71\x34\62\70\x36\62\x36\67\62\66\67\x31\x37\62\x31\63\x31\61\x37\x32\61\67\x39\x32\70\x39\61\x31\x39\61\x37\71\x32\x36\67\62\64\x33\x31\x37\x32\x33\60\x38\61\x32\x32\61\71\64\x31\x35\x39\x31\x34\x38\62\x36\x37\x31\x37\62\x31\x33\x31\x31\x37\x32\61\x37\71\x32\66\67\62\62\x38\62\65\66"); return $mqumqwwemwgskykc; } public static final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if ($usymaaaeawgmyqig) { goto igyukcioksgyuumo; } $usymaaaeawgmyqig = []; igyukcioksgyuumo: $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if ($sociqikgoyemqaac) { goto comoagswmewckyoi; } $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\x61", "\x7a"), range(0, 9), ["\x2f", "\72", "\56", "\134", "\137", "\x2d"]); qumgeeowggyeimes: if (!($qsmaqqyoggcuyukq > 0)) { goto egqeaugqciqqaais; } $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; goto qumgeeowggyeimes; egqeaugqciqqaais: ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; woeskwkwwgwgmowo: } ugqqumgemgqkgowm: $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; qwuqiimucosmgmei: } esyeigyikuqioumu: $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; comoagswmewckyoi: return $sociqikgoyemqaac; } }
