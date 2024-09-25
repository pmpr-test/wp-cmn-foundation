<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto moeqauuausuqygiq; } try { if (class_exists($egkyssmuqcwaciya)) { goto cgsuikiqggkikaae; } wp_die("\x63\x61\x6e\40\x6e\157\164\x20\143\x72\x65\141\x74\x65\x20\151\156\x73\x74\x61\156\143\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\165\x65\x73\164\x65\x64\40\x63\x6c\141\163\163\x20\156\x6f\x74\40\145\170\151\163\164\x73\56"); goto yoosmuokogseueas; cgsuikiqggkikaae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yoosmuokogseueas: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kmmwmccqeuasieoy: return $owgumcsyqsamiemg; } }
