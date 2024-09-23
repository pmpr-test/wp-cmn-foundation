<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto gaqweioagqyciyaw; } try { if (class_exists($egkyssmuqcwaciya)) { goto ycuksimueyoeugmi; } wp_die("\x63\141\156\x20\156\x6f\164\40\143\x72\145\x61\x74\145\x20\151\156\163\x74\141\x6e\143\x65\x20\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\165\x65\x73\164\x65\144\40\143\154\x61\163\x73\40\156\157\164\40\x65\x78\x69\163\x74\163\x2e"); goto iayqwwsmsuwaykyw; ycuksimueyoeugmi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iayqwwsmsuwaykyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto scioecswaikeacmy; gaqweioagqyciyaw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; scioecswaikeacmy: return $owgumcsyqsamiemg; } }
