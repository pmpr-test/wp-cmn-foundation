<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto scioecswaikeacmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto iayqwwsmsuwaykyw; } wp_die("\x63\141\x6e\x20\156\157\x74\40\x63\x72\x65\141\x74\x65\40\151\156\163\x74\141\x6e\143\x65\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\165\x65\x73\164\145\144\40\143\x6c\141\x73\x73\40\156\x6f\x74\x20\x65\x78\151\163\164\x73\56"); goto gaqweioagqyciyaw; iayqwwsmsuwaykyw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gaqweioagqyciyaw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uyaweoaaqsagsqyi; scioecswaikeacmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uyaweoaaqsagsqyi: return $owgumcsyqsamiemg; } }
