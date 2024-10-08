<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto iquwggoqmwgkouio; } try { if (class_exists($egkyssmuqcwaciya)) { goto uwaoaysiccasmygw; } wp_die("\x63\141\156\x20\x6e\157\164\40\143\x72\145\x61\164\x65\40\151\156\163\164\141\156\x63\145\40\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\145\x73\x74\145\x64\40\x63\154\141\x73\x73\40\x6e\x6f\164\40\145\170\x69\x73\x74\x73\x2e"); goto okccyiwkococowmi; uwaoaysiccasmygw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; okccyiwkococowmi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aumkeyeqwqukcyqm; iquwggoqmwgkouio: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aumkeyeqwqukcyqm: return $owgumcsyqsamiemg; } }
