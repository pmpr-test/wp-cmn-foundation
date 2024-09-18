<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto ioqaysioauoiookm; } try { if (class_exists($egkyssmuqcwaciya)) { goto icguisyymukwkoac; } wp_die("\143\x61\x6e\40\156\157\x74\x20\x63\x72\145\141\164\145\40\x69\x6e\163\164\141\x6e\143\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\165\145\x73\164\x65\x64\40\143\154\141\163\x73\40\x6e\x6f\x74\x20\x65\170\x69\163\164\163\x2e"); goto wwcyucesakwqmigu; icguisyymukwkoac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcyucesakwqmigu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto caeywemyokumoaki; ioqaysioauoiookm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; caeywemyokumoaki: return $owgumcsyqsamiemg; } }
