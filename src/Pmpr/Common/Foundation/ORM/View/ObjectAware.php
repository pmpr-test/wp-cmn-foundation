<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; class ObjectAware extends View { protected ?int $id = 0; protected ?object $object = null; public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function mwikyscisascoeea() : int { return $this->id; } public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self { $this->object = $mksyucucyswaukig; return $this; } public function imgymusqgccqsqqq() : ?object { return $this->object; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys->kumuygiiqswoyasy(), 0))) { goto mqicocmqegwukkwg; } $this->ggiaseqygioygumq((int) $aokagokqyuysuksm); if ($this->mwikyscisascoeea()) { goto asiqwuoswmigcaki; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($meywaqqsugaoeyys->comogmawyoiquwis()); exit; asiqwuoswmigcaki: $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea())); if ($this->imgymusqgccqsqqq()) { goto ciykoyeioqgyaeqo; } wp_die(__("\131\157\x75\x20\x61\164\164\145\x6d\x70\x74\x65\x64\40\x74\157\x20\x65\144\151\164\40\141\x6e\x20\x69\164\x65\155\40\164\x68\x61\164\40\144\x6f\x65\x73\x27\164\x20\145\170\x69\163\164\56\40\120\x65\162\x68\141\x70\x73\x20\151\164\40\x77\x61\163\x20\144\x65\x6c\x65\x74\145\x64\77", PR__CMN__FOUNDATION)); ciykoyeioqgyaeqo: mqicocmqegwukkwg: } }
