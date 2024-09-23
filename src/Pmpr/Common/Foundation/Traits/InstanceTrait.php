<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d8187bb66             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto yoikmmqgsuecwqse; } try { if (class_exists($egkyssmuqcwaciya)) { goto yumwmakewcuceeeq; } wp_die("\x63\x61\x6e\x20\156\x6f\x74\x20\143\x72\x65\141\x74\145\x20\151\156\x73\164\x61\x6e\143\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\165\145\x73\164\145\x64\x20\143\x6c\x61\x73\x73\40\x6e\157\164\40\x65\x78\x69\x73\164\x73\56"); goto iksqmycekaokseuk; yumwmakewcuceeeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iksqmycekaokseuk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto emwgmewoyckawiaa; yoikmmqgsuecwqse: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; emwgmewoyckawiaa: return $owgumcsyqsamiemg; } }
