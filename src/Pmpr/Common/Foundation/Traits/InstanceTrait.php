<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791545e8b23b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\x63\x61\156\x20\156\x6f\x74\40\x63\x72\x65\141\x74\x65\40\x69\x6e\163\164\141\x6e\x63\x65\40\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\x75\145\x73\164\x65\144\40\143\154\141\163\163\x20\x6e\x6f\x74\x20\x65\170\151\163\164\163\56"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }
