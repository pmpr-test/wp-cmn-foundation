<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto moeqauuausuqygiq; } try { if (class_exists($egkyssmuqcwaciya)) { goto cgsuikiqggkikaae; } wp_die("\143\x61\x6e\x20\x6e\157\164\x20\143\x72\x65\x61\164\x65\x20\151\x6e\163\164\x61\x6e\143\145\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\145\163\164\x65\144\x20\x63\154\x61\x73\x73\40\x6e\157\164\40\145\x78\x69\x73\164\x73\x2e"); goto yoosmuokogseueas; cgsuikiqggkikaae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yoosmuokogseueas: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kmmwmccqeuasieoy; moeqauuausuqygiq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kmmwmccqeuasieoy: return $owgumcsyqsamiemg; } }
