<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait AttributeTrait { protected ?array $attributes = []; public final function ccekeuwwqqoiwuwy() : ?array { return $this->attributes; } public final function waecsyqmwascmqoa($uusmaiomayssaecw) : ?string { $ymkomoccmymcoiea = null; $siquossayskcwkea = $this->ccekeuwwqqoiwuwy(); if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) { goto osuwwuwykkyioics; } $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw]; osuwwuwykkyioics: return $ymkomoccmymcoiea; } public final function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self { return $this->igmaewykumgwoaoy("\x63\154\x61\163\x73", $egkyssmuqcwaciya); } public final function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie, $sekkmwqwqwcayiwg = true) : self { if (!is_array($eqgoocgaqwqcimie)) { goto aimoueqqomiogmwe; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); aimoueqqomiogmwe: $this->attributes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $sekkmwqwqwcayiwg ? esc_attr($eqgoocgaqwqcimie) : $eqgoocgaqwqcimie); return $this; } public final function eskgwaywimqcwcyy($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) : self { $this->igmaewykumgwoaoy("\144\141\x74\141\x2d{$ymqmyyeuycgmigyo}", $eqgoocgaqwqcimie); return $this; } public final function gmywsauuqwcmakuc($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw("\144\x61\x74\141\55{$ymqmyyeuycgmigyo}", $eqgoocgaqwqcimie); return $this; } public final function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self { foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $this->qigsyyqgewgskemg($egkyssmuqcwaciya); kycuyyawyykwayum: } osgggiswqmmcauic: return $this; } public final function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self { return $this->ogaeogwycyqqckeu("\143\154\x61\163\x73", $egkyssmuqcwaciya); } public final function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool { return $this->seeegkogcamaigga("\143\154\141\163\x73", $egkyssmuqcwaciya); } public final function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attributes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public final function wmiseqaieauskweu() : self { $this->attributes = []; return $this; } public final function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool { $umuecysoywoumgwo = false; if (!$uusmaiomayssaecw) { goto iksqmycekaokseuk; } $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw); if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) { goto ymaiyayeueqekkqu; } $umuecysoywoumgwo = !empty($ymkomoccmymcoiea); goto yumwmakewcuceeeq; ymaiyayeueqekkqu: if (is_array($ymkomoccmymcoiea)) { goto qayscesoyiskoeko; } $ymkomoccmymcoiea = explode("\40", $ymkomoccmymcoiea); qayscesoyiskoeko: $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea); yumwmakewcuceeeq: iksqmycekaokseuk: return $umuecysoywoumgwo; } public final function qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attributes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qcgocuceocquqcuw($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public function sueyawuweyoqyeaq(array $siquossayskcwkea) : self { foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie); emwgmewoyckawiaa: } yoikmmqgsuecwqse: return $this; } public function eycskusaeseuwiyc(array $siquossayskcwkea) : self { foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie); yamoqmeywqamiyee: } ouiwcwgymiycmesy: return $this; } }
