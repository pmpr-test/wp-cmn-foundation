<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto ksaoceiosgkgkeua; } try { if (class_exists($egkyssmuqcwaciya)) { goto woimcikoqmikiiuo; } wp_die("\x63\x61\x6e\40\156\x6f\164\40\x63\x72\x65\x61\164\145\40\x69\x6e\x73\164\x61\x6e\143\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\x71\x75\145\163\x74\x65\144\x20\x63\x6c\x61\163\x73\x20\x6e\157\164\40\145\170\151\x73\164\163\56"); goto yygiyieeyuuqucke; woimcikoqmikiiuo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yygiyieeyuuqucke: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wesmogqcyeemwqaq; ksaoceiosgkgkeua: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wesmogqcyeemwqaq: return $owgumcsyqsamiemg; } }
