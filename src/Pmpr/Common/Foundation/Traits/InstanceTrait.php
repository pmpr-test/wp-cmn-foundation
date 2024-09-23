<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto gaqweioagqyciyaw; } try { if (class_exists($egkyssmuqcwaciya)) { goto ycuksimueyoeugmi; } wp_die("\x63\141\x6e\x20\x6e\157\x74\x20\x63\162\x65\x61\x74\x65\x20\x69\156\x73\x74\x61\156\143\x65\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\165\x65\x73\164\x65\144\40\143\x6c\141\x73\163\40\x6e\157\164\x20\x65\170\x69\x73\164\163\x2e"); goto iayqwwsmsuwaykyw; ycuksimueyoeugmi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iayqwwsmsuwaykyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto scioecswaikeacmy; gaqweioagqyciyaw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; scioecswaikeacmy: return $owgumcsyqsamiemg; } }
