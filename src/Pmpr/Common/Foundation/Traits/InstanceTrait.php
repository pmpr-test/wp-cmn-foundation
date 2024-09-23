<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto qyauskeceyuommay; } try { if (class_exists($egkyssmuqcwaciya)) { goto waekkoqkywowucqm; } wp_die("\x63\x61\156\x20\x6e\157\x74\40\143\162\145\141\164\145\40\x69\x6e\163\164\x61\156\x63\145\x20\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\40\162\x65\x71\x75\x65\163\x74\145\x64\x20\143\x6c\141\x73\x73\40\156\157\x74\x20\x65\x78\151\163\164\x73\56"); goto iyyoksuqkyayycyo; waekkoqkywowucqm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iyyoksuqkyayycyo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto skuiqymemkkmcasa; qyauskeceyuommay: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; skuiqymemkkmcasa: return $owgumcsyqsamiemg; } }
