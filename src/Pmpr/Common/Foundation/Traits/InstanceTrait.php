<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto kmmwmccqeuasieoy; } try { if (class_exists($egkyssmuqcwaciya)) { goto yoosmuokogseueas; } wp_die("\143\x61\156\40\156\x6f\164\40\143\x72\145\141\164\145\40\x69\x6e\163\x74\141\156\x63\145\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\145\x73\164\145\144\x20\x63\154\x61\x73\163\40\x6e\157\x74\x20\145\170\151\x73\x74\x73\56"); goto moeqauuausuqygiq; yoosmuokogseueas: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moeqauuausuqygiq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto osksqmgkikamgaui; kmmwmccqeuasieoy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; osksqmgkikamgaui: return $owgumcsyqsamiemg; } }
