<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (is_numeric($eqgoocgaqwqcimie)) { goto sqcoigaqqssykoui; } wp_die(sprintf("\x76\141\x6c\x75\x65\40\x6f\146\x20\45\x73\x20\151\x73\40\x6e\x6f\164\x20\143\157\162\x72\145\143\164", $meqocwsecsywiiqs)); sqcoigaqqssykoui: if (!$this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { goto mkmasewiiuocaekm; } wp_die(sprintf("\45\x73\40\x61\154\162\145\x61\144\171\x20\145\170\x69\x73\164\x20\x69\156\40\x6f\x70\164\151\157\x6e\163\x20\x6c\x69\x73\x74", $eqgoocgaqwqcimie)); mkmasewiiuocaekm: if (!$this->yseywyqacmugimme()) { goto iuageyamssqwqqyw; } $this->aguakyuusmksagai(); iuageyamssqwqqyw: if (!(!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae())) { goto wkmsuekwweweqoys; } $this->eyygsasuqmommkua($eqgoocgaqwqcimie); wkmsuekwweweqoys: parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { goto smeocsiuyouseuqo; } foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if (!($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo)) { goto yckkkceuiuiaucce; } $eqgoocgaqwqcimie = $uusmaiomayssaecw; goto cwaqmauwsyugsieo; yckkkceuiuiaucce: uqkmkmmikmaqkgym: } cwaqmauwsyugsieo: goto yqmygsgkwmkeyqmm; smeocsiuyouseuqo: $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; yqmygsgkwmkeyqmm: return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto omuskqikewygsuuu; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); omuskqikewygsuuu: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); siuwcesauyyweaky: } kqumggcumkiygaya: return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto wucomycmoigosose; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); wucomycmoigosose: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (is_numeric($eqgoocgaqwqcimie)) { goto kmasgsycmswqoeii; } $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); kmasgsycmswqoeii: return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { goto syiwwokguucmgsyy; } if (is_array($eqgoocgaqwqcimie)) { goto mawqcoscmcqkoskk; } goto aeieoesqsyiqwkkk; syiwwokguucmgsyy: $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); goto aeieoesqsyiqwkkk; mawqcoscmcqkoskk: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); uwiqeuqyaseimcyk: } ccikqgeseseueseo: aeieoesqsyiqwkkk: return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); uoieeoimcawgsacs: } wmiysuwsmawyogmu: $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
