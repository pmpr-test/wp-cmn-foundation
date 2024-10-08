<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705b088f1290             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\143\x61\156\40\156\x6f\x74\x20\x63\x72\x65\x61\x74\145\x20\151\156\x73\x74\x61\x6e\143\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\x75\x65\163\x74\x65\x64\x20\x63\154\141\x73\163\x20\x6e\157\164\x20\145\170\151\163\x74\x73\56"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }
