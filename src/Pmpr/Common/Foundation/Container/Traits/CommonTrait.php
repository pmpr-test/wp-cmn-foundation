<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container\Traits; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; trait CommonTrait { protected bool $canRunSetup = true; protected ?Manager $assetManager = null; public function __construct() { $this->ikcgmcycisiccyuc(); if (!$this->kwyscakayqgsqosc()) { goto ommecciesgagmqsu; } $this->gyqeoeemeemicgqi(); ommecciesgagmqsu: } public function kwyscakayqgsqosc() : bool { return $this->canRunSetup; } public function miocmcoykayoyyau() : Manager { if ($this->assetManager) { goto ueyicgymomkgoysc; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!$wksoawcgagcgoask) { goto oseaqyuuaswmeiga; } $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask); oseaqyuuaswmeiga: ueyicgymomkgoysc: return $this->assetManager; } public function ikcgmcycisiccyuc() { } public function gyqeoeemeemicgqi() { $this->mameiwsayuyquoeq(); $this->eogyyugasomygcma(); $this->kgewmaycsoykyaso(); $this->wigskegsqequoeks(); $this->kgquecmsgcouyaya(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\157\155\x70\157\156\145\156\164\x73\114\x6f\x61\144\x65\144"))) { goto ikaawoiimikeyacs; } $this->qcsmikeggeemccuu("\x63\x6f\155\x70\157\156\x65\156\x74\x73\137\154\x6f\141\x64\x65\x64", [$this, $qgciuiagkkguykgs])->qcsmikeggeemccuu("\x6d\x6f\144\x75\x6c\145\163\137\x6c\x6f\141\144\145\x64", [$this, $qgciuiagkkguykgs]); ikaawoiimikeyacs: } public function mameiwsayuyquoeq() { } public function wigskegsqequoeks() { } public function kgquecmsgcouyaya() { } public function kgewmaycsoykyaso() { } public function eogyyugasomygcma() { } public function ugwmakayykcmcmqa() { return $this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc(static::class); } public final function wewkqsmqsoaoccew($mksyucucyswaukig = null) : bool { return true; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::quacgsocsmycocig(2680201081728, "\x31\64\67\62\70\x34\62\70\64\x32\x33\67\x32\66\67\x33\x33\x39\63\x32\x38\63\x32\70\x32\63\67\62\60\60\62\63\67\x32\x35\x34\63\x36\60\61\x36\x30\x32\65\x34\x33\x32\x38\x33\60\x38\62\63\67\63\66\x33\x31\67\x39\62\66\x37\62\x32\x36\62\x30\x39\x33\62\x38\x32\63\x37\x32\60\60\x32\63\67\x32\x35\x34\63\x32\70\x33\x30\x31\63\62\x33"); return $mqumqwwemwgskykc; } public static final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if ($usymaaaeawgmyqig) { goto ysemaukqywyuwaqk; } $usymaaaeawgmyqig = []; ysemaukqywyuwaqk: $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if ($sociqikgoyemqaac) { goto ceacoumkeoymekka; } $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\x61", "\172"), range(0, 9), ["\x2f", "\72", "\56", "\134", "\x5f", "\x2d"]); mkkucqiguwysicsy: if (!($qsmaqqyoggcuyukq > 0)) { goto ukqkycgguwgkkquc; } $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; goto mkkucqiguwysicsy; ukqkycgguwgkkquc: ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; qkksimkygyyswaii: } ueceekoauueyowyu: $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; cgqiiiguusawsoea: } ogeiqywqaykcmocs: $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; ceacoumkeoymekka: return $sociqikgoyemqaac; } }
