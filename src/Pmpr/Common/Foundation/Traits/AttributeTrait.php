<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait AttributeTrait { protected ?array $attributes = []; public final function ccekeuwwqqoiwuwy() : ?array { return $this->attributes; } public final function waecsyqmwascmqoa($uusmaiomayssaecw) : ?string { $ymkomoccmymcoiea = null; $siquossayskcwkea = $this->ccekeuwwqqoiwuwy(); if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) { goto aaoekkysuimcamyu; } $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw]; aaoekkysuimcamyu: return $ymkomoccmymcoiea; } public final function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self { return $this->igmaewykumgwoaoy("\x63\154\141\x73\163", $egkyssmuqcwaciya); } public final function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie, $sekkmwqwqwcayiwg = true) : self { if (!is_array($eqgoocgaqwqcimie)) { goto wugqaoggyqusmaoa; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); wugqaoggyqusmaoa: $this->attributes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $sekkmwqwqwcayiwg ? esc_attr($eqgoocgaqwqcimie) : $eqgoocgaqwqcimie); return $this; } public final function eskgwaywimqcwcyy($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) : self { $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d{$ymqmyyeuycgmigyo}", $eqgoocgaqwqcimie); return $this; } public final function gmywsauuqwcmakuc($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw("\144\141\164\141\x2d{$ymqmyyeuycgmigyo}", $eqgoocgaqwqcimie); return $this; } public final function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self { foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $this->qigsyyqgewgskemg($egkyssmuqcwaciya); oasqosiqcsiyyaye: } qamicqyikayyacok: return $this; } public final function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self { return $this->ogaeogwycyqqckeu("\x63\x6c\x61\163\163", $egkyssmuqcwaciya); } public final function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool { return $this->seeegkogcamaigga("\143\x6c\x61\x73\x73", $egkyssmuqcwaciya); } public final function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attributes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public final function wmiseqaieauskweu() : self { $this->attributes = []; return $this; } public final function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool { $umuecysoywoumgwo = false; if (!$uusmaiomayssaecw) { goto imiqucuaiyoaeaka; } $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw); if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) { goto kuwwysummgiakgwo; } $umuecysoywoumgwo = !empty($ymkomoccmymcoiea); goto kuusyaqguycoyiia; kuwwysummgiakgwo: if (is_array($ymkomoccmymcoiea)) { goto oaymmkagwocukmyq; } $ymkomoccmymcoiea = explode("\40", $ymkomoccmymcoiea); oaymmkagwocukmyq: $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea); kuusyaqguycoyiia: imiqucuaiyoaeaka: return $umuecysoywoumgwo; } public final function qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attributes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qcgocuceocquqcuw($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public function sueyawuweyoqyeaq(array $siquossayskcwkea) : self { foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie); yyeiqoiuweqikyyq: } ggiiuoqggyauekgs: return $this; } public function eycskusaeseuwiyc(array $siquossayskcwkea) : self { foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie); myccwweewiwguqaa: } qqyqygkmkeeuaiss: return $this; } }
