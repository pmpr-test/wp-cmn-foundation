<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d41721935c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; class Option extends Common { public function delete($omkysikckkcieckq) : bool { return delete_option($omkysikckkcieckq); } public function add($omkysikckkcieckq, $eqgoocgaqwqcimie) : bool { return add_option($omkysikckkcieckq, $eqgoocgaqwqcimie); } public function get($omkysikckkcieckq, $ggauoeuaesiymgee = false) { return get_option($omkysikckkcieckq, $ggauoeuaesiymgee); } public function update($omkysikckkcieckq, $eqgoocgaqwqcimie, $eogycucmwwksyycu = null) : bool { return update_option($omkysikckkcieckq, $eqgoocgaqwqcimie, $eogycucmwwksyycu); } public function kuaqqosyyoqiueym($omkysikckkcieckq, $ggauoeuaesiymgee = false) { return get_site_option($omkysikckkcieckq, $ggauoeuaesiymgee); } public function okkueywgeygcooye($omkysikckkcieckq, $ggauoeuaesiymgee = false) : bool { return update_site_option($omkysikckkcieckq, $ggauoeuaesiymgee); } public function yiqiakcokgeasaoq($omkysikckkcieckq) : bool { return delete_site_option($omkysikckkcieckq); } public function mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { return get_theme_mod($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); } public function igqksmmwesguiaae($uesiygkqwoaowqoa) { return get_transient($uesiygkqwoaowqoa); } public function cqgekgeqacmqquas($uesiygkqwoaowqoa) : bool { return delete_transient($uesiygkqwoaowqoa); } public function gawcqwcqgwgucgya($uesiygkqwoaowqoa, $eqgoocgaqwqcimie, $owiuekcekysskaoe = 0) : bool { return set_transient($uesiygkqwoaowqoa, $eqgoocgaqwqcimie, $owiuekcekysskaoe); } public function imawakueyqwccuqe(string $isksgswsmmqgeqmo, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) { register_setting($isksgswsmmqgeqmo, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } public function ciqkaakiwsgqwiqu(string $ekcswiguywieeeoc = '', string $tsuauommsquiesmk = "\x72\141\x77") : string { return $this->call("\147\x65\x74\x5f\142\154\157\x67\151\156\146\x6f", '', $ekcswiguywieeeoc, $tsuauommsquiesmk); } public function iyouigcsiacgwksc() : string { return $this->call("\x67\145\164\137\x6c\157\143\141\154\145", ''); } }
