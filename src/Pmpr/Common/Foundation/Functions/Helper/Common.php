<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use ReflectionClass; use ReflectionException; abstract class Common { use HelperTrait, WrapperTrait; public function giuwsoqummqkeaua($mksyucucyswaukig) { try { $omwmuycmeqcqokom = null; $gmmucqcwcugogeia = get_parent_class($mksyucucyswaukig); $eaiyocyuoiwqykkq = $this->cmmaeeeoaaeqqqmm($gmmucqcwcugogeia, "\151\x73\101\142\163\164\162\x61\x63\x74", true); if (!(!$eaiyocyuoiwqykkq && ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($gmmucqcwcugogeia, "\147\145\164\111\x6e\x73\164\141\156\x63\145")))) { goto emyuskcwqyscewue; } $omwmuycmeqcqokom = $gmmucqcwcugogeia::$qgciuiagkkguykgs(); emyuskcwqyscewue: } catch (Exception $wgaoewqkwgomoaai) { } return $omwmuycmeqcqokom; } public function cmmaeeeoaaeqqqmm($mksyucucyswaukig, $qgciuiagkkguykgs, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = false; try { if ($mksyucucyswaukig instanceof ReflectionClass) { goto alomqucgmacieuoa; } $oqkmoekaagukcwia = new ReflectionClass($mksyucucyswaukig); $sogksuscggsicmac = $oqkmoekaagukcwia->{$qgciuiagkkguykgs}(); alomqucgmacieuoa: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $ggauoeuaesiymgee; } return $sogksuscggsicmac; } public function qmmaqwgyasgicmec(string $ymqmyyeuycgmigyo) : bool { return @defined($ymqmyyeuycgmigyo); } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!$this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { goto yiskaoskyyiswkki; } $ksaameoqigiaoigg = $this->cmaecekuqkwmemms($ymqmyyeuycgmigyo); goto akieywkiweasukyw; yiskaoskyyiswkki: $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); akieywkiweasukyw: return $ksaameoqigiaoigg; } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) { if ($egkyssmuqcwaciya) { goto ookeyiumgkqqucia; } if ($this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { goto qoqgokiaagioccqg; } $gqkqacakewkecqie = $ggauoeuaesiymgee; goto oeukmyymqaaakksa; qoqgokiaagioccqg: $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo); oeukmyymqaaakksa: goto ioocowswsiqoyaai; ookeyiumgkqqucia: try { $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya); $gqkqacakewkecqie = $oqkmoekaagukcwia->getConstant($ymqmyyeuycgmigyo); } catch (ReflectionException $wgaoewqkwgomoaai) { $gqkqacakewkecqie = $ggauoeuaesiymgee; } ioocowswsiqoyaai: return $gqkqacakewkecqie; } }
