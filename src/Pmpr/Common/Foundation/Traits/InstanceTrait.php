<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto aakueiomkcyiiows; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygqwqqiowseokqyy; } wp_die("\143\141\x6e\40\x6e\x6f\164\x20\x63\162\145\x61\164\145\40\x69\x6e\163\164\141\x6e\x63\x65\40\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\x75\145\163\x74\145\144\x20\143\x6c\x61\x73\163\x20\156\157\x74\40\145\170\x69\163\164\163\56"); goto cckaqseuwsokgqky; ygqwqqiowseokqyy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cckaqseuwsokgqky: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iauiowaaqsooooco; aakueiomkcyiiows: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iauiowaaqsooooco: return $owgumcsyqsamiemg; } }
