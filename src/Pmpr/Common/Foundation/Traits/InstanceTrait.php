<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto osksqmgkikamgaui; } try { if (class_exists($egkyssmuqcwaciya)) { goto moeqauuausuqygiq; } wp_die("\143\x61\x6e\x20\x6e\x6f\x74\x20\143\162\x65\x61\164\x65\40\x69\x6e\x73\x74\x61\156\143\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\145\x73\164\145\x64\40\x63\x6c\x61\x73\x73\40\156\x6f\164\x20\x65\x78\151\x73\164\x73\x2e"); goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kmmwmccqeuasieoy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wagqsecuquyukiwc; osksqmgkikamgaui: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wagqsecuquyukiwc: return $owgumcsyqsamiemg; } }
