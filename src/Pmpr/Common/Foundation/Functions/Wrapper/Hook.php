<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33c6bdfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; class Hook extends Common { public function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { return apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii); } public function caugyysismkkekgw(string $iaakskwmyqceoscy, $ekiuyucoiagmscgy = false) : bool { return has_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy); } public function iesaskeeeueyqwoe(string $iaakskwmyqceoscy, $ekiuyucoiagmscgy = false) : bool { return has_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy); } public function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function ykiyyaguauweamau(string $iaakskwmyqceoscy, $sqqewmoeaekuyyas = false) : bool { return remove_all_filters($iaakskwmyqceoscy, $sqqewmoeaekuyyas); } public function cecaguuoecmccuse(string $iaakskwmyqceoscy, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1) { add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk); } public function umaeoegyykkkqmia() : string { return current_filter(); } public function miuaagsmwcccekyg(string $iaakskwmyqceoscy) { return did_action($iaakskwmyqceoscy); } public function oogekyuoaacecisc(string $iaakskwmyqceoscy) : bool { return doing_action($iaakskwmyqceoscy); } public function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii); } public function kuieicsuscgmwigg(string $iaakskwmyqceoscy, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function iiawasmesusioauo(string $iaakskwmyqceoscy, $sqqewmoeaekuyyas = false) : bool { return remove_all_actions($iaakskwmyqceoscy, $sqqewmoeaekuyyas); } public function qcsmikeggeemccuu(string $iaakskwmyqceoscy, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1) { add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk); } public function gkyykosooqkiquao() : string { return current_action(); } }
