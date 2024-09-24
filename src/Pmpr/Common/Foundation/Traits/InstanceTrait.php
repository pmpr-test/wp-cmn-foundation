<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto scioecswaikeacmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto iayqwwsmsuwaykyw; } wp_die("\x63\141\x6e\40\156\157\x74\40\143\162\145\141\164\145\x20\151\156\x73\x74\x61\156\143\145\x20\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\161\165\x65\x73\x74\145\x64\40\143\154\x61\x73\x73\40\156\x6f\x74\40\145\x78\151\x73\x74\163\x2e"); goto gaqweioagqyciyaw; iayqwwsmsuwaykyw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gaqweioagqyciyaw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uyaweoaaqsagsqyi; scioecswaikeacmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uyaweoaaqsagsqyi: return $owgumcsyqsamiemg; } }
