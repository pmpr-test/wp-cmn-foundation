<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; class ObjectAware extends View { protected ?int $id = 0; protected ?object $object = null; public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function mwikyscisascoeea() : int { return $this->id; } public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self { $this->object = $mksyucucyswaukig; return $this; } public function imgymusqgccqsqqq() : ?object { return $this->object; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys->kumuygiiqswoyasy(), 0))) { goto owiguescmqyqukui; } $this->ggiaseqygioygumq((int) $aokagokqyuysuksm); if ($this->mwikyscisascoeea()) { goto akyiiioycmgqyuok; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($meywaqqsugaoeyys->comogmawyoiquwis()); exit; akyiiioycmgqyuok: $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea())); if ($this->imgymusqgccqsqqq()) { goto ycomeuqeessamows; } wp_die(__("\131\x6f\165\x20\141\164\164\145\x6d\x70\164\x65\144\x20\x74\157\40\x65\x64\x69\x74\40\141\x6e\40\x69\164\145\x6d\x20\x74\150\141\x74\x20\x64\157\x65\x73\47\164\40\145\x78\x69\x73\164\x2e\x20\x50\x65\162\150\141\x70\x73\x20\x69\x74\x20\167\141\163\x20\x64\145\154\145\164\x65\x64\77", PR__CMN__FOUNDATION)); ycomeuqeessamows: owiguescmqyqukui: } }
