<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0611cd07             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\x63\141\x6e\x20\156\157\164\40\143\162\x65\x61\164\x65\40\x69\x6e\163\164\141\156\143\145\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\x75\145\163\x74\145\x64\x20\x63\154\x61\163\163\40\156\157\164\40\145\170\x69\x73\x74\163\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }
