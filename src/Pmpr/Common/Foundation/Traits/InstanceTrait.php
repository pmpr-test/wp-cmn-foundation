<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto qyauskeceyuommay; } try { if (class_exists($egkyssmuqcwaciya)) { goto waekkoqkywowucqm; } wp_die("\143\x61\x6e\x20\156\x6f\164\x20\143\x72\x65\141\x74\x65\x20\151\156\x73\x74\x61\156\143\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\x71\x75\x65\x73\x74\x65\144\40\x63\x6c\141\163\x73\x20\156\157\164\40\145\170\x69\163\x74\x73\56"); goto iyyoksuqkyayycyo; waekkoqkywowucqm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iyyoksuqkyayycyo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto skuiqymemkkmcasa; qyauskeceyuommay: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; skuiqymemkkmcasa: return $owgumcsyqsamiemg; } }
