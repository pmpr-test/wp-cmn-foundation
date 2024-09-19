<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto cckaqseuwsokgqky; } try { if (class_exists($egkyssmuqcwaciya)) { goto cmqcmgwesykwwosy; } wp_die("\x63\x61\x6e\x20\x6e\157\x74\40\143\162\145\x61\164\x65\x20\x69\x6e\163\x74\x61\156\x63\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\165\145\163\x74\x65\144\x20\x63\154\141\x73\163\40\x6e\157\164\40\145\x78\151\x73\x74\x73\56"); goto ygqwqqiowseokqyy; cmqcmgwesykwwosy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygqwqqiowseokqyy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakueiomkcyiiows; cckaqseuwsokgqky: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakueiomkcyiiows: return $owgumcsyqsamiemg; } }
