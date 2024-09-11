<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto msqmakqaiawgqeau; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmukeceewgmekoae; } wp_die("\x63\141\156\x20\156\x6f\x74\40\x63\162\145\141\x74\x65\40\x69\156\x73\x74\x61\156\x63\145\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\165\x65\x73\164\x65\144\x20\143\154\141\163\x73\40\156\x6f\164\40\145\x78\x69\163\x74\163\56"); goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; somsmcmoyaiiwuyk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iuukukcykqykisaa; msqmakqaiawgqeau: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iuukukcykqykisaa: return $owgumcsyqsamiemg; } }
