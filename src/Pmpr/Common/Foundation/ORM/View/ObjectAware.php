<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; class ObjectAware extends View { protected ?int $id = 0; protected ?object $object = null; public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function mwikyscisascoeea() : int { return $this->id; } public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self { $this->object = $mksyucucyswaukig; return $this; } public function imgymusqgccqsqqq() : ?object { return $this->object; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys->kumuygiiqswoyasy(), 0))) { goto icoiqskygugkgmkm; } $this->ggiaseqygioygumq((int) $aokagokqyuysuksm); if ($this->mwikyscisascoeea()) { goto swicauyqusmgeccu; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($meywaqqsugaoeyys->comogmawyoiquwis()); exit; swicauyqusmgeccu: $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea())); if ($this->imgymusqgccqsqqq()) { goto maguoggkqamaiuag; } wp_die(__("\131\x6f\165\40\x61\x74\x74\x65\x6d\x70\164\145\144\x20\x74\157\40\145\144\x69\x74\40\x61\x6e\40\151\164\145\155\40\x74\x68\141\164\40\x64\157\145\x73\47\x74\x20\145\x78\x69\163\164\56\x20\120\x65\x72\x68\x61\160\163\40\151\x74\x20\167\141\163\40\x64\x65\x6c\x65\x74\145\144\x3f", PR__CMN__FOUNDATION)); maguoggkqamaiuag: icoiqskygugkgmkm: } }
