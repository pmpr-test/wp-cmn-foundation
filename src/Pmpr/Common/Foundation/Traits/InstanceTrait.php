<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto msqmakqaiawgqeau; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmukeceewgmekoae; } wp_die("\x63\141\x6e\40\x6e\157\164\40\x63\x72\x65\x61\164\145\x20\x69\x6e\x73\x74\x61\156\x63\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\162\x65\161\165\x65\x73\164\x65\144\40\x63\x6c\x61\163\163\40\156\157\164\x20\145\x78\x69\163\164\x73\56"); goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; somsmcmoyaiiwuyk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iuukukcykqykisaa; msqmakqaiawgqeau: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iuukukcykqykisaa: return $owgumcsyqsamiemg; } }
