<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7a86a94f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto yoikmmqgsuecwqse; } try { if (class_exists($egkyssmuqcwaciya)) { goto yumwmakewcuceeeq; } wp_die("\143\x61\156\40\x6e\157\x74\x20\x63\162\145\141\164\x65\40\151\x6e\x73\x74\x61\156\143\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\x71\165\x65\163\x74\x65\144\x20\x63\154\141\x73\163\x20\x6e\x6f\x74\x20\x65\x78\x69\x73\164\163\56"); goto iksqmycekaokseuk; yumwmakewcuceeeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iksqmycekaokseuk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto emwgmewoyckawiaa; yoikmmqgsuecwqse: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; emwgmewoyckawiaa: return $owgumcsyqsamiemg; } }
