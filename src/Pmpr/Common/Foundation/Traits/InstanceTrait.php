<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574c05515f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\x63\141\x6e\40\156\x6f\x74\x20\143\x72\x65\141\164\145\40\x69\156\163\164\141\x6e\143\145\x20\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\x75\145\163\164\145\144\x20\143\x6c\141\163\x73\40\x6e\157\164\x20\145\x78\x69\163\x74\x73\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }
