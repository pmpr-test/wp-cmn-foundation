<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto yoosmuokogseueas; } try { if (class_exists($egkyssmuqcwaciya)) { goto cecomsiewwckuwqy; } wp_die("\143\141\156\40\156\157\164\40\x63\162\145\x61\x74\145\40\151\x6e\163\x74\141\156\143\x65\40\146\162\x6f\40{$egkyssmuqcwaciya}\54\x20\x72\x65\161\165\145\x73\164\x65\144\40\x63\154\x61\x73\163\40\x6e\157\164\40\x65\170\151\x73\164\x73\56"); goto cgsuikiqggkikaae; cecomsiewwckuwqy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cgsuikiqggkikaae: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto moeqauuausuqygiq; yoosmuokogseueas: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; moeqauuausuqygiq: return $owgumcsyqsamiemg; } }
