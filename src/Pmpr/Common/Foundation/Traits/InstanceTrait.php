<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto qyauskeceyuommay; } try { if (class_exists($egkyssmuqcwaciya)) { goto waekkoqkywowucqm; } wp_die("\x63\141\x6e\x20\x6e\x6f\164\x20\143\x72\145\x61\164\x65\x20\151\x6e\x73\x74\141\156\143\x65\x20\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\x75\x65\163\x74\x65\x64\x20\143\154\x61\x73\163\x20\x6e\157\x74\40\x65\x78\x69\163\164\163\x2e"); goto iyyoksuqkyayycyo; waekkoqkywowucqm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iyyoksuqkyayycyo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto skuiqymemkkmcasa; qyauskeceyuommay: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; skuiqymemkkmcasa: return $owgumcsyqsamiemg; } }
