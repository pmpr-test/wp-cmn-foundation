<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto osksqmgkikamgaui; } try { if (class_exists($egkyssmuqcwaciya)) { goto moeqauuausuqygiq; } wp_die("\143\x61\156\x20\156\x6f\164\40\x63\x72\145\x61\164\x65\x20\x69\x6e\163\164\141\x6e\x63\145\40\x66\x72\157\40{$egkyssmuqcwaciya}\54\x20\x72\145\161\x75\x65\x73\164\145\144\x20\x63\x6c\141\163\163\40\x6e\157\164\x20\145\x78\151\x73\x74\163\x2e"); goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kmmwmccqeuasieoy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wagqsecuquyukiwc; osksqmgkikamgaui: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wagqsecuquyukiwc: return $owgumcsyqsamiemg; } }
