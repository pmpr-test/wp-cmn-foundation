<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16ae3d454f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto gquwcimccausouey; } try { if (class_exists($egkyssmuqcwaciya)) { goto skuiqymemkkmcasa; } wp_die("\143\141\156\x20\156\157\164\40\143\x72\x65\141\164\x65\x20\151\x6e\163\x74\141\156\x63\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\x65\163\x74\145\x64\40\x63\154\141\x73\x73\x20\156\157\164\x20\145\x78\x69\x73\x74\163\56"); goto mgqoggoasugsqoqm; skuiqymemkkmcasa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mgqoggoasugsqoqm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kwocuyyugaqsicqy; gquwcimccausouey: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kwocuyyugaqsicqy: return $owgumcsyqsamiemg; } }
