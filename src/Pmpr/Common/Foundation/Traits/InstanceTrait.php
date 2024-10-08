<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto coakykwqwcigaoeq; } try { if (class_exists($egkyssmuqcwaciya)) { goto useouyguueemgkmq; } wp_die("\x63\141\x6e\40\x6e\x6f\164\x20\143\x72\145\x61\164\x65\40\x69\x6e\163\164\x61\156\143\x65\40\146\x72\157\40{$egkyssmuqcwaciya}\54\40\162\145\161\165\x65\x73\x74\145\144\40\143\x6c\x61\163\163\40\156\157\x74\x20\x65\x78\x69\x73\x74\x73\x2e"); goto oweiysimemyoswom; useouyguueemgkmq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; oweiysimemyoswom: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gekuacoquiucucoa; coakykwqwcigaoeq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gekuacoquiucucoa: return $owgumcsyqsamiemg; } }
