<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670598d3a6ee7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait CacheTrait { protected ?string $cacheKey = null; public final function ywawksmoiakqyowq() : ?string { return $this->cacheKey; } public final function kyugcqcocyuwceqg(string $sewwikwiigsgqiaq) : self { $this->cacheKey = $sewwikwiigsgqiaq; return $this; } public final function kumkwyksmeikauow() { $usymaaaeawgmyqig = []; if ($uusmaiomayssaecw = $this->ywawksmoiakqyowq()) { $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\155\160\x72"); } return $usymaaaeawgmyqig; } public final function umemacsskqmgkkay(string $uusmaiomayssaecw, callable $wkuucskgqwqawswy, bool $cwwowqyuwccuykom = false) { $sogksuscggsicmac = null; if (!$cwwowqyuwccuykom) { $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { $sogksuscggsicmac = $icwicymcioeyeyek[$uusmaiomayssaecw]; } else { $cwwowqyuwccuykom = true; } } if ($cwwowqyuwccuykom) { $sogksuscggsicmac = $wkuucskgqwqawswy($this); $this->aacccqcyuccceism($uusmaiomayssaecw, $sogksuscggsicmac); } return $sogksuscggsicmac; } public final function eymeukaqaygeyoge($icwicymcioeyeyek) : self { if ($uusmaiomayssaecw = $this->ywawksmoiakqyowq()) { $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $icwicymcioeyeyek, "\160\155\160\x72"); } return $this; } public final function aacccqcyuccceism(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->eymeukaqaygeyoge($icwicymcioeyeyek); } public final function ymgmacamemggesko() : self { if ($uusmaiomayssaecw = $this->ywawksmoiakqyowq()) { $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($uusmaiomayssaecw, "\x70\x6d\160\x72"); } return $this; } }
