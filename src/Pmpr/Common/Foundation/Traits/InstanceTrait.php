<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto scioecswaikeacmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto iayqwwsmsuwaykyw; } wp_die("\143\x61\x6e\40\x6e\157\x74\40\143\x72\x65\141\x74\x65\40\x69\x6e\163\x74\141\156\x63\145\40\x66\162\157\x20{$egkyssmuqcwaciya}\54\40\x72\x65\161\165\145\163\x74\x65\144\40\x63\x6c\x61\x73\x73\x20\156\x6f\164\x20\x65\x78\151\x73\164\x73\x2e"); goto gaqweioagqyciyaw; iayqwwsmsuwaykyw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gaqweioagqyciyaw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uyaweoaaqsagsqyi; scioecswaikeacmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uyaweoaaqsagsqyi: return $owgumcsyqsamiemg; } }
