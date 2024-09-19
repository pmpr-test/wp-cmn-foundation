<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto aakueiomkcyiiows; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygqwqqiowseokqyy; } wp_die("\143\141\x6e\40\156\x6f\x74\x20\x63\162\x65\x61\164\145\x20\151\156\x73\164\141\156\143\145\40\146\162\x6f\x20{$egkyssmuqcwaciya}\54\40\162\145\161\x75\145\163\x74\145\x64\40\x63\x6c\141\x73\163\40\156\x6f\x74\x20\145\170\151\163\x74\163\56"); goto cckaqseuwsokgqky; ygqwqqiowseokqyy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cckaqseuwsokgqky: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iauiowaaqsooooco; aakueiomkcyiiows: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iauiowaaqsooooco: return $owgumcsyqsamiemg; } }
