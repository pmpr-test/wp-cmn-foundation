<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto moeqauuausuqygiq; } try { if (class_exists($egkyssmuqcwaciya)) { goto cgsuikiqggkikaae; } wp_die("\x63\x61\156\x20\156\x6f\164\40\143\162\x65\x61\x74\145\40\x69\156\x73\164\x61\x6e\143\145\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\x75\x65\x73\164\x65\144\x20\x63\x6c\141\163\163\x20\x6e\157\x74\x20\145\170\x69\163\x74\163\56"); goto yoosmuokogseueas; cgsuikiqggkikaae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yoosmuokogseueas: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kmmwmccqeuasieoy: return $owgumcsyqsamiemg; } }
