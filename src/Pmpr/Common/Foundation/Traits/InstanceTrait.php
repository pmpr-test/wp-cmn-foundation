<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto msqmakqaiawgqeau; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmukeceewgmekoae; } wp_die("\x63\x61\x6e\x20\156\157\164\x20\x63\162\x65\x61\164\x65\x20\151\156\x73\164\x61\156\x63\x65\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\x65\x73\164\x65\144\x20\143\154\x61\x73\x73\40\156\157\164\40\x65\170\x69\x73\164\x73\56"); goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; somsmcmoyaiiwuyk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iuukukcykqykisaa; msqmakqaiawgqeau: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iuukukcykqykisaa: return $owgumcsyqsamiemg; } }
