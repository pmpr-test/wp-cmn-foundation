<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto cckaqseuwsokgqky; } try { if (class_exists($egkyssmuqcwaciya)) { goto cmqcmgwesykwwosy; } wp_die("\x63\141\x6e\40\156\157\x74\x20\143\x72\145\141\x74\145\40\x69\156\x73\164\141\x6e\143\145\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\162\x65\161\x75\x65\163\x74\145\x64\x20\143\x6c\141\x73\163\x20\156\x6f\164\x20\x65\x78\151\x73\x74\x73\56"); goto ygqwqqiowseokqyy; cmqcmgwesykwwosy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygqwqqiowseokqyy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakueiomkcyiiows; cckaqseuwsokgqky: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakueiomkcyiiows: return $owgumcsyqsamiemg; } }
