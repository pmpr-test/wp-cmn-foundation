<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait CacheTrait { protected ?string $cacheKey = null; public final function ywawksmoiakqyowq() : ?string { return $this->cacheKey; } public final function kyugcqcocyuwceqg(string $sewwikwiigsgqiaq) : self { $this->cacheKey = $sewwikwiigsgqiaq; return $this; } public final function kumkwyksmeikauow() { $usymaaaeawgmyqig = []; if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto kskqckgmygiwqucm; } $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\155\x70\x72"); kskqckgmygiwqucm: return $usymaaaeawgmyqig; } public final function umemacsskqmgkkay(string $uusmaiomayssaecw, callable $wkuucskgqwqawswy, bool $cwwowqyuwccuykom = false) { $sogksuscggsicmac = null; if ($cwwowqyuwccuykom) { goto qkueegaowuyiimgw; } $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto sucgyiymguwououy; } $cwwowqyuwccuykom = true; goto kcqewweqqqmekuwi; sucgyiymguwououy: $sogksuscggsicmac = $icwicymcioeyeyek[$uusmaiomayssaecw]; kcqewweqqqmekuwi: qkueegaowuyiimgw: if (!$cwwowqyuwccuykom) { goto aweayueuaeoasyms; } $sogksuscggsicmac = $wkuucskgqwqawswy($this); $this->aacccqcyuccceism($uusmaiomayssaecw, $sogksuscggsicmac); aweayueuaeoasyms: return $sogksuscggsicmac; } public final function eymeukaqaygeyoge($icwicymcioeyeyek) : self { if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto wyokakscicekiums; } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $icwicymcioeyeyek, "\x70\155\x70\162"); wyokakscicekiums: return $this; } public final function aacccqcyuccceism(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if (is_array($icwicymcioeyeyek)) { goto ygywqwksoumccysq; } $icwicymcioeyeyek = []; ygywqwksoumccysq: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->eymeukaqaygeyoge($icwicymcioeyeyek); } public final function ymgmacamemggesko() : self { if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto cecomsiewwckuwqy; } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($uusmaiomayssaecw, "\160\155\x70\x72"); cecomsiewwckuwqy: return $this; } }
