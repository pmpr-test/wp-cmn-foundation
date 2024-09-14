<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto ksaoceiosgkgkeua; } try { if (class_exists($egkyssmuqcwaciya)) { goto woimcikoqmikiiuo; } wp_die("\143\141\x6e\x20\x6e\x6f\x74\x20\143\x72\x65\x61\x74\x65\x20\x69\x6e\x73\x74\141\x6e\x63\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\165\145\163\164\x65\x64\40\x63\154\x61\x73\x73\x20\156\x6f\164\x20\145\170\151\163\164\x73\56"); goto yygiyieeyuuqucke; woimcikoqmikiiuo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yygiyieeyuuqucke: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wesmogqcyeemwqaq; ksaoceiosgkgkeua: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wesmogqcyeemwqaq: return $owgumcsyqsamiemg; } }
