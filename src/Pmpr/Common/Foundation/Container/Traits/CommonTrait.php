<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19cd8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container\Traits; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; trait CommonTrait { protected bool $canRunSetup = true; protected ?Manager $assetManager = null; public function __construct() { $this->ikcgmcycisiccyuc(); if (!$this->kwyscakayqgsqosc()) { goto kwyoiqawaqmqkoey; } $this->gyqeoeemeemicgqi(); kwyoiqawaqmqkoey: } public function kwyscakayqgsqosc() : bool { return $this->canRunSetup; } public function miocmcoykayoyyau() : Manager { if ($this->assetManager) { goto wqsawukekkyakkuu; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!$wksoawcgagcgoask) { goto kigqsomigymgyaia; } $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask); kigqsomigymgyaia: wqsawukekkyakkuu: return $this->assetManager; } public function ikcgmcycisiccyuc() { } public function gyqeoeemeemicgqi() { $this->mameiwsayuyquoeq(); $this->eogyyugasomygcma(); $this->kgewmaycsoykyaso(); $this->wigskegsqequoeks(); $this->kgquecmsgcouyaya(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\x6f\x6d\160\157\156\x65\x6e\164\x73\114\x6f\x61\144\x65\x64"))) { goto ismmgaiaiwmwwicc; } $this->qcsmikeggeemccuu("\143\x6f\155\x70\x6f\x6e\x65\x6e\x74\x73\137\154\157\x61\144\145\x64", [$this, $qgciuiagkkguykgs])->qcsmikeggeemccuu("\155\157\144\x75\x6c\145\163\x5f\x6c\x6f\141\x64\x65\144", [$this, $qgciuiagkkguykgs]); ismmgaiaiwmwwicc: } public function mameiwsayuyquoeq() { } public function wigskegsqequoeks() { } public function kgquecmsgcouyaya() { } public function kgewmaycsoykyaso() { } public function eogyyugasomygcma() { } public function ugwmakayykcmcmqa() { return $this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc(static::class); } public final function wewkqsmqsoaoccew($mksyucucyswaukig = null) : bool { return true; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::quacgsocsmycocig(2680201081728, "\61\x33\x38\x32\61\67\x32\x31\x37\61\x39\64\62\x30\60\62\70\x32\x32\67\x37\x32\67\x37\x31\x39\64\x31\x36\x33\x31\71\x34\61\71\x37\63\x30\x33\61\x35\61\61\71\67\x32\x37\67\x32\65\67\61\x39\64\63\x30\x36\x31\65\x36\x32\x30\x30\x31\67\x37\61\66\x36\x32\67\x37\61\x39\64\x31\66\63\x31\71\x34\x31\71\67\62\67\67\x32\63\x38\x32\66\x32"); return $mqumqwwemwgskykc; } public static final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if ($usymaaaeawgmyqig) { goto eqowouaiymcoysqk; } $usymaaaeawgmyqig = []; eqowouaiymcoysqk: $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if ($sociqikgoyemqaac) { goto aggeuiaeimsawygg; } $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\141", "\x7a"), range(0, 9), ["\57", "\x3a", "\56", "\134", "\x5f", "\55"]); eagewewkqeiimmkc: if (!($qsmaqqyoggcuyukq > 0)) { goto qsusgsuaskwsucuc; } $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; goto eagewewkqeiimmkc; qsusgsuaskwsucuc: ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; qiiaseecwkougcmm: } gcmcqyawakmwwqwi: $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; iekyiiggsacaoesk: } sugoigiesaueggis: $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; aggeuiaeimsawygg: return $sociqikgoyemqaac; } }
