<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0611cd07             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use ReflectionClass; use ReflectionException; abstract class Common { use HelperTrait, WrapperTrait; public function giuwsoqummqkeaua($mksyucucyswaukig) { try { $omwmuycmeqcqokom = null; $gmmucqcwcugogeia = get_parent_class($mksyucucyswaukig); $eaiyocyuoiwqykkq = $this->cmmaeeeoaaeqqqmm($gmmucqcwcugogeia, "\151\163\101\x62\163\164\162\141\x63\164", true); if (!$eaiyocyuoiwqykkq && ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($gmmucqcwcugogeia, "\x67\145\164\111\156\163\164\x61\x6e\143\x65"))) { $omwmuycmeqcqokom = $gmmucqcwcugogeia::$qgciuiagkkguykgs(); } } catch (Exception $wgaoewqkwgomoaai) { } return $omwmuycmeqcqokom; } public function cmmaeeeoaaeqqqmm($mksyucucyswaukig, $qgciuiagkkguykgs, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = false; try { if (!$mksyucucyswaukig instanceof ReflectionClass) { $oqkmoekaagukcwia = new ReflectionClass($mksyucucyswaukig); $sogksuscggsicmac = $oqkmoekaagukcwia->{$qgciuiagkkguykgs}(); } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $ggauoeuaesiymgee; } return $sogksuscggsicmac; } public function qmmaqwgyasgicmec(string $ymqmyyeuycgmigyo) : bool { return @defined($ymqmyyeuycgmigyo); } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!$this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } else { $ksaameoqigiaoigg = $this->cmaecekuqkwmemms($ymqmyyeuycgmigyo); } return $ksaameoqigiaoigg; } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) { if ($egkyssmuqcwaciya) { try { $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya); $gqkqacakewkecqie = $oqkmoekaagukcwia->getConstant($ymqmyyeuycgmigyo); } catch (ReflectionException $wgaoewqkwgomoaai) { $gqkqacakewkecqie = $ggauoeuaesiymgee; } } else { if ($this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo); } else { $gqkqacakewkecqie = $ggauoeuaesiymgee; } } return $gqkqacakewkecqie; } }
