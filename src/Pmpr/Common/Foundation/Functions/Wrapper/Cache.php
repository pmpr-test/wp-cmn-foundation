<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02dc932c3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; class Cache extends Common { public function get($uusmaiomayssaecw, string $isksgswsmmqgeqmo = '', bool $cwwowqyuwccuykom = false, &$yumccasyisqwmmio = null) { return wp_cache_get($uusmaiomayssaecw, $isksgswsmmqgeqmo, $cwwowqyuwccuykom, $yumccasyisqwmmio); } public function set($uusmaiomayssaecw, $icwicymcioeyeyek, string $isksgswsmmqgeqmo = '', int $owiuekcekysskaoe = 0) : bool { return wp_cache_set($uusmaiomayssaecw, $icwicymcioeyeyek, $isksgswsmmqgeqmo, $owiuekcekysskaoe); } public function delete($uusmaiomayssaecw, string $isksgswsmmqgeqmo = '') : bool { return wp_cache_delete($uusmaiomayssaecw, $isksgswsmmqgeqmo); } }
