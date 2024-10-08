<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto aiaagscmgeyuqaky; } try { if (class_exists($egkyssmuqcwaciya)) { goto qkqkgaaomgkyowwy; } wp_die("\x63\141\156\40\156\x6f\164\40\143\x72\145\x61\x74\145\40\151\x6e\x73\164\141\x6e\x63\x65\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\x75\145\163\164\145\144\40\x63\x6c\141\163\x73\x20\x6e\x6f\164\40\145\170\151\163\164\163\x2e"); goto wioguogamqaikqqy; qkqkgaaomgkyowwy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wioguogamqaikqqy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wmgigiqsosicakwu; aiaagscmgeyuqaky: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wmgigiqsosicakwu: return $owgumcsyqsamiemg; } }
