<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; class ObjectAware extends View { protected ?int $id = 0; protected ?object $object = null; public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function mwikyscisascoeea() : int { return $this->id; } public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self { $this->object = $mksyucucyswaukig; return $this; } public function imgymusqgccqsqqq() : ?object { return $this->object; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys->kumuygiiqswoyasy(), 0))) { goto ycomeuqeessamows; } $this->ggiaseqygioygumq((int) $aokagokqyuysuksm); if ($this->mwikyscisascoeea()) { goto iayguaeseyaemwkk; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($meywaqqsugaoeyys->comogmawyoiquwis()); exit; iayguaeseyaemwkk: $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea())); if ($this->imgymusqgccqsqqq()) { goto akyiiioycmgqyuok; } wp_die(__("\131\x6f\x75\x20\x61\164\164\x65\155\x70\x74\145\144\40\x74\157\x20\145\144\x69\164\40\x61\x6e\40\151\x74\x65\x6d\40\x74\150\141\x74\x20\144\x6f\145\x73\47\164\x20\x65\170\x69\x73\164\x2e\x20\x50\145\x72\150\141\x70\163\40\x69\164\40\167\141\163\x20\x64\145\154\x65\164\145\x64\77", PR__CMN__FOUNDATION)); akyiiioycmgqyuok: ycomeuqeessamows: } }
