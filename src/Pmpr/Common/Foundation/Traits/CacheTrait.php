<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait CacheTrait { protected ?string $cacheKey = null; public final function ywawksmoiakqyowq() : ?string { return $this->cacheKey; } public final function kyugcqcocyuwceqg(string $sewwikwiigsgqiaq) : self { $this->cacheKey = $sewwikwiigsgqiaq; return $this; } public final function kumkwyksmeikauow() { $usymaaaeawgmyqig = []; if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto qqqecycaqiuckqge; } $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\160\x6d\x70\162"); qqqecycaqiuckqge: return $usymaaaeawgmyqig; } public final function umemacsskqmgkkay(string $uusmaiomayssaecw, callable $wkuucskgqwqawswy, bool $cwwowqyuwccuykom = false) { $sogksuscggsicmac = null; if ($cwwowqyuwccuykom) { goto iycouaqccscasucc; } $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto uqaymuykyqsuayso; } $cwwowqyuwccuykom = true; goto imowaciskmueoogo; uqaymuykyqsuayso: $sogksuscggsicmac = $icwicymcioeyeyek[$uusmaiomayssaecw]; imowaciskmueoogo: iycouaqccscasucc: if (!$cwwowqyuwccuykom) { goto uicoowkoscsuucui; } $sogksuscggsicmac = $wkuucskgqwqawswy($this); $this->aacccqcyuccceism($uusmaiomayssaecw, $sogksuscggsicmac); uicoowkoscsuucui: return $sogksuscggsicmac; } public final function eymeukaqaygeyoge($icwicymcioeyeyek) : self { if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto iguyoiwiuikugekq; } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $icwicymcioeyeyek, "\x70\155\160\x72"); iguyoiwiuikugekq: return $this; } public final function aacccqcyuccceism(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if (is_array($icwicymcioeyeyek)) { goto weeosewyimcickoi; } $icwicymcioeyeyek = []; weeosewyimcickoi: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->eymeukaqaygeyoge($icwicymcioeyeyek); } public final function ymgmacamemggesko() : self { if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto iuwcskswgaeuqumi; } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($uusmaiomayssaecw, "\160\x6d\x70\162"); iuwcskswgaeuqumi: return $this; } }
