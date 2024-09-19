<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto aakueiomkcyiiows; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygqwqqiowseokqyy; } wp_die("\143\141\156\40\156\157\x74\40\x63\x72\145\x61\164\145\40\x69\x6e\x73\x74\141\156\x63\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\40\162\145\x71\x75\x65\163\x74\145\144\40\x63\x6c\141\x73\163\40\x6e\x6f\x74\40\x65\x78\x69\163\x74\163\x2e"); goto cckaqseuwsokgqky; ygqwqqiowseokqyy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cckaqseuwsokgqky: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iauiowaaqsooooco; aakueiomkcyiiows: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iauiowaaqsooooco: return $owgumcsyqsamiemg; } }
