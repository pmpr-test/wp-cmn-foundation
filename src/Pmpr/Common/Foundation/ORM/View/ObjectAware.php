<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; class ObjectAware extends View { protected ?int $id = 0; protected ?object $object = null; public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function mwikyscisascoeea() : int { return $this->id; } public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self { $this->object = $mksyucucyswaukig; return $this; } public function imgymusqgccqsqqq() : ?object { return $this->object; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys->kumuygiiqswoyasy(), 0))) { goto icoiqskygugkgmkm; } $this->ggiaseqygioygumq((int) $aokagokqyuysuksm); if ($this->mwikyscisascoeea()) { goto swicauyqusmgeccu; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($meywaqqsugaoeyys->comogmawyoiquwis()); exit; swicauyqusmgeccu: $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea())); if ($this->imgymusqgccqsqqq()) { goto maguoggkqamaiuag; } wp_die(__("\x59\x6f\x75\40\141\164\164\145\x6d\160\164\x65\x64\x20\x74\157\x20\x65\144\x69\x74\x20\x61\x6e\40\x69\x74\145\x6d\40\164\x68\x61\x74\40\144\x6f\145\163\47\x74\40\x65\x78\x69\x73\x74\56\x20\120\145\x72\150\x61\160\x73\x20\x69\x74\x20\167\141\x73\x20\x64\145\x6c\145\x74\145\144\77", PR__CMN__FOUNDATION)); maguoggkqamaiuag: icoiqskygugkgmkm: } }
