<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait CacheTrait { protected ?string $cacheKey = null; public final function ywawksmoiakqyowq() : ?string { return $this->cacheKey; } public final function kyugcqcocyuwceqg(string $sewwikwiigsgqiaq) : self { $this->cacheKey = $sewwikwiigsgqiaq; return $this; } public final function kumkwyksmeikauow() { $usymaaaeawgmyqig = []; if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto soooekmauiwsaemc; } $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\160\155\160\162"); soooekmauiwsaemc: return $usymaaaeawgmyqig; } public final function umemacsskqmgkkay(string $uusmaiomayssaecw, callable $wkuucskgqwqawswy, bool $cwwowqyuwccuykom = false) { $sogksuscggsicmac = null; if ($cwwowqyuwccuykom) { goto ioymoeauqmugekqw; } $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto msokmumgqigwgwwc; } $cwwowqyuwccuykom = true; goto acaseyakoigmukmc; msokmumgqigwgwwc: $sogksuscggsicmac = $icwicymcioeyeyek[$uusmaiomayssaecw]; acaseyakoigmukmc: ioymoeauqmugekqw: if (!$cwwowqyuwccuykom) { goto oesewmcmiyceckae; } $sogksuscggsicmac = $wkuucskgqwqawswy($this); $this->aacccqcyuccceism($uusmaiomayssaecw, $sogksuscggsicmac); oesewmcmiyceckae: return $sogksuscggsicmac; } public final function eymeukaqaygeyoge($icwicymcioeyeyek) : self { if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto mkuwumgwoyasswam; } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $icwicymcioeyeyek, "\160\155\160\162"); mkuwumgwoyasswam: return $this; } public final function aacccqcyuccceism(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $icwicymcioeyeyek = $this->kumkwyksmeikauow(); if (is_array($icwicymcioeyeyek)) { goto mrocimywqwigwumc; } $icwicymcioeyeyek = []; mrocimywqwigwumc: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->eymeukaqaygeyoge($icwicymcioeyeyek); } public final function ymgmacamemggesko() : self { if (!($uusmaiomayssaecw = $this->ywawksmoiakqyowq())) { goto eeuyyauaomyugqso; } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($uusmaiomayssaecw, "\x70\x6d\x70\162"); eeuyyauaomyugqso: return $this; } }
