<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use ReflectionClass; use ReflectionException; abstract class Common { use HelperTrait, WrapperTrait; public function giuwsoqummqkeaua($mksyucucyswaukig) { try { $omwmuycmeqcqokom = null; $gmmucqcwcugogeia = get_parent_class($mksyucucyswaukig); $eaiyocyuoiwqykkq = $this->cmmaeeeoaaeqqqmm($gmmucqcwcugogeia, "\x69\x73\101\x62\163\164\162\x61\x63\164", true); if (!(!$eaiyocyuoiwqykkq && ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($gmmucqcwcugogeia, "\x67\x65\x74\x49\x6e\163\164\141\156\143\145")))) { goto mkeikioeqcuumiga; } $omwmuycmeqcqokom = $gmmucqcwcugogeia::$qgciuiagkkguykgs(); mkeikioeqcuumiga: } catch (Exception $wgaoewqkwgomoaai) { } return $omwmuycmeqcqokom; } public function cmmaeeeoaaeqqqmm($mksyucucyswaukig, $qgciuiagkkguykgs, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = false; try { if ($mksyucucyswaukig instanceof ReflectionClass) { goto gusqaksmckugmucc; } $oqkmoekaagukcwia = new ReflectionClass($mksyucucyswaukig); $sogksuscggsicmac = $oqkmoekaagukcwia->{$qgciuiagkkguykgs}(); gusqaksmckugmucc: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $ggauoeuaesiymgee; } return $sogksuscggsicmac; } public function qmmaqwgyasgicmec(string $ymqmyyeuycgmigyo) : bool { return @defined($ymqmyyeuycgmigyo); } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!$this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { goto uceqaououkceeiui; } $ksaameoqigiaoigg = $this->cmaecekuqkwmemms($ymqmyyeuycgmigyo); goto siymqewiegkgsuai; uceqaououkceeiui: $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); siymqewiegkgsuai: return $ksaameoqigiaoigg; } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) { if ($egkyssmuqcwaciya) { goto wccugoogysmyisqe; } if ($this->qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) { goto useqkkasoyuoecio; } $gqkqacakewkecqie = $ggauoeuaesiymgee; goto kemqmaqgsgueoaye; useqkkasoyuoecio: $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo); kemqmaqgsgueoaye: goto eaqqgoagskioaooo; wccugoogysmyisqe: try { $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya); $gqkqacakewkecqie = $oqkmoekaagukcwia->getConstant($ymqmyyeuycgmigyo); } catch (ReflectionException $wgaoewqkwgomoaai) { $gqkqacakewkecqie = $ggauoeuaesiymgee; } eaqqgoagskioaooo: return $gqkqacakewkecqie; } }
