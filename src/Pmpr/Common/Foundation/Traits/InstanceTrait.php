<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto cckaqseuwsokgqky; } try { if (class_exists($egkyssmuqcwaciya)) { goto cmqcmgwesykwwosy; } wp_die("\x63\141\x6e\40\x6e\x6f\164\x20\x63\x72\145\x61\x74\x65\x20\151\x6e\x73\x74\x61\x6e\143\145\40\146\162\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\x75\145\x73\x74\145\144\40\x63\154\x61\x73\163\x20\x6e\157\164\40\145\170\151\163\164\x73\x2e"); goto ygqwqqiowseokqyy; cmqcmgwesykwwosy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygqwqqiowseokqyy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakueiomkcyiiows; cckaqseuwsokgqky: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakueiomkcyiiows: return $owgumcsyqsamiemg; } }
