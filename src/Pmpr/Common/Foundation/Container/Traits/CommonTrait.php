<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container\Traits; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; trait CommonTrait { protected bool $canRunSetup = true; protected ?Manager $assetManager = null; public function __construct() { $this->ikcgmcycisiccyuc(); if (!$this->kwyscakayqgsqosc()) { goto oguyuegsimwwswyo; } $this->gyqeoeemeemicgqi(); oguyuegsimwwswyo: } public function kwyscakayqgsqosc() : bool { return $this->canRunSetup; } public function miocmcoykayoyyau() : Manager { if ($this->assetManager) { goto kigqsomigymgyaia; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!$wksoawcgagcgoask) { goto kwyoiqawaqmqkoey; } $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask); kwyoiqawaqmqkoey: kigqsomigymgyaia: return $this->assetManager; } public function ikcgmcycisiccyuc() { } public function gyqeoeemeemicgqi() { $this->mameiwsayuyquoeq(); $this->eogyyugasomygcma(); $this->kgewmaycsoykyaso(); $this->wigskegsqequoeks(); $this->kgquecmsgcouyaya(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\x6f\155\x70\157\x6e\145\x6e\164\x73\114\157\x61\x64\145\x64"))) { goto wqsawukekkyakkuu; } $this->qcsmikeggeemccuu("\x63\x6f\x6d\x70\157\x6e\x65\x6e\x74\x73\137\x6c\x6f\x61\x64\145\144", [$this, $qgciuiagkkguykgs])->qcsmikeggeemccuu("\155\157\x64\x75\x6c\145\163\x5f\154\157\x61\x64\145\x64", [$this, $qgciuiagkkguykgs]); wqsawukekkyakkuu: } public function mameiwsayuyquoeq() { } public function wigskegsqequoeks() { } public function kgquecmsgcouyaya() { } public function kgewmaycsoykyaso() { } public function eogyyugasomygcma() { } public function ugwmakayykcmcmqa() { return $this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc(static::class); } public final function wewkqsmqsoaoccew($mksyucucyswaukig = null) : bool { return true; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::quacgsocsmycocig(2680201081728, "\x31\60\x33\62\63\60\x32\x33\x30\x31\x38\71\62\61\x31\62\x38\x31\x32\67\70\x32\x37\70\x31\x38\71\x31\x34\62\x31\70\71\62\x30\60\62\x38\66\x31\x31\60\x32\x30\60\62\x37\x38\62\66\60\x31\x38\x39\62\x39\65\61\x33\x31\62\x31\x31\61\70\x32\61\x36\x33\62\x37\70\x31\x38\71\x31\x34\62\61\x38\71\x32\x30\x30\62\x37\70\x32\x34\x37\x32\66\63"); return $mqumqwwemwgskykc; } public static final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if ($usymaaaeawgmyqig) { goto ismmgaiaiwmwwicc; } $usymaaaeawgmyqig = []; ismmgaiaiwmwwicc: $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if ($sociqikgoyemqaac) { goto iekyiiggsacaoesk; } $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\x61", "\x7a"), range(0, 9), ["\57", "\72", "\x2e", "\x5c", "\x5f", "\55"]); qsusgsuaskwsucuc: if (!($qsmaqqyoggcuyukq > 0)) { goto eqowouaiymcoysqk; } $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; goto qsusgsuaskwsucuc; eqowouaiymcoysqk: ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; gcmcqyawakmwwqwi: } eagewewkqeiimmkc: $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; sugoigiesaueggis: } qiiaseecwkougcmm: $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; iekyiiggsacaoesk: return $sociqikgoyemqaac; } }
