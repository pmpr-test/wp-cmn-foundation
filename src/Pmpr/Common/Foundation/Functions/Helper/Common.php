<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15f5710e7a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use ReflectionClass; use ReflectionException; abstract class Common { use HelperTrait, WrapperTrait; public function giuwsoqummqkeaua($mksyucucyswaukig) { try { $omwmuycmeqcqokom = null; $gmmucqcwcugogeia = get_parent_class($mksyucucyswaukig); $eaiyocyuoiwqykkq = $this->cmmaeeeoaaeqqqmm($gmmucqcwcugogeia, "\151\x73\101\x62\163\164\162\141\143\164", true); if (!(!$eaiyocyuoiwqykkq && ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($gmmucqcwcugogeia, "\x67\x65\164\111\156\x73\x74\141\x6e\143\145")))) { goto usukaqsqeowqkwwu; } $omwmuycmeqcqokom = $gmmucqcwcugogeia::$qgciuiagkkguykgs(); usukaqsqeowqkwwu: } catch (Exception $wgaoewqkwgomoaai) { } return $omwmuycmeqcqokom; } public function cmmaeeeoaaeqqqmm($mksyucucyswaukig, $qgciuiagkkguykgs, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = false; try { if ($mksyucucyswaukig instanceof ReflectionClass) { goto ukaumyigguemyqmg; } $oqkmoekaagukcwia = new ReflectionClass($mksyucucyswaukig); $sogksuscggsicmac = $oqkmoekaagukcwia->{$qgciuiagkkguykgs}(); ukaumyigguemyqmg: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $ggauoeuaesiymgee; } return $sogksuscggsicmac; } public function qmmaqwgyasgicmec(string $ymqmyyeuycgmigyo) : bool { return @defined($ymqmyyeuycgmigyo); } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!$this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { goto mekmkiaykamiugmo; } $ksaameoqigiaoigg = $this->cmaecekuqkwmemms($ymqmyyeuycgmigyo); goto okieooymmiqqwsui; mekmkiaykamiugmo: $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); okieooymmiqqwsui: return $ksaameoqigiaoigg; } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) { if ($egkyssmuqcwaciya) { goto komaikgkmaeoescu; } if ($this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { goto wukeekgkakowukck; } $gqkqacakewkecqie = $ggauoeuaesiymgee; goto wwgssoakwoscwoss; wukeekgkakowukck: $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo); wwgssoakwoscwoss: goto syeosgmcsoykgmoi; komaikgkmaeoescu: try { $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya); $gqkqacakewkecqie = $oqkmoekaagukcwia->getConstant($ymqmyyeuycgmigyo); } catch (ReflectionException $wgaoewqkwgomoaai) { $gqkqacakewkecqie = $ggauoeuaesiymgee; } syeosgmcsoykgmoi: return $gqkqacakewkecqie; } }
