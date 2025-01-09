<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6780382025b61             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\143\x61\156\40\x6e\157\x74\40\143\x72\145\141\x74\145\40\x69\156\x73\164\141\x6e\x63\145\x20\x66\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\x75\145\x73\164\x65\144\40\143\154\x61\163\163\40\x6e\157\164\x20\x65\170\x69\x73\x74\x73\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }
