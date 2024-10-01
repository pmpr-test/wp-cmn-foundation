<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto yoosmuokogseueas; } try { if (class_exists($egkyssmuqcwaciya)) { goto cecomsiewwckuwqy; } wp_die("\143\x61\x6e\x20\156\x6f\x74\x20\143\x72\145\141\164\145\40\x69\156\163\164\x61\x6e\x63\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\x65\163\164\x65\144\x20\143\x6c\141\163\x73\40\156\157\x74\40\145\x78\x69\x73\164\163\56"); goto cgsuikiqggkikaae; cecomsiewwckuwqy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cgsuikiqggkikaae: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto moeqauuausuqygiq; yoosmuokogseueas: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; moeqauuausuqygiq: return $owgumcsyqsamiemg; } }
