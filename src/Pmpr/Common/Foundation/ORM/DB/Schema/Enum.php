<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (is_numeric($eqgoocgaqwqcimie)) { goto gqmewagyagamokok; } wp_die(sprintf("\166\141\x6c\165\145\x20\x6f\146\40\x25\163\40\x69\x73\x20\x6e\157\164\40\x63\157\162\x72\x65\143\164", $meqocwsecsywiiqs)); gqmewagyagamokok: if (!$this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { goto sqmoqymckwsogsqg; } wp_die(sprintf("\45\163\x20\x61\x6c\162\145\x61\x64\171\x20\145\x78\x69\x73\x74\40\x69\x6e\x20\x6f\160\164\151\x6f\156\x73\40\x6c\x69\163\164", $eqgoocgaqwqcimie)); sqmoqymckwsogsqg: if (!$this->yseywyqacmugimme()) { goto uycesqqkoeamocgm; } $this->aguakyuusmksagai(); uycesqqkoeamocgm: if (!(!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae())) { goto ceiwqkyquikcemmo; } $this->eyygsasuqmommkua($eqgoocgaqwqcimie); ceiwqkyquikcemmo: parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { goto goqmywuiicciasyk; } foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if (!($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo)) { goto oyiuyywyeoskckuw; } $eqgoocgaqwqcimie = $uusmaiomayssaecw; goto ukomuiwukymcoaso; oyiuyywyeoskckuw: wkgskiuiukiuyque: } ukomuiwukymcoaso: goto siecswkggyikqkga; goqmywuiicciasyk: $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; siecswkggyikqkga: return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto qkuiwoqksgayqqmg; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); qkuiwoqksgayqqmg: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); yuqgwwmqwqiuwmaw: } easqmyamcmeesgya: return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto quaqmuusokiyqgqe; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); quaqmuusokiyqgqe: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (is_numeric($eqgoocgaqwqcimie)) { goto smiemmcqqukyguuu; } $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); smiemmcqqukyguuu: return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { goto eckcqesiokgwkkiw; } if (is_array($eqgoocgaqwqcimie)) { goto ecouwqosmoyyqmkw; } goto yoagcooekomeokwg; eckcqesiokgwkkiw: $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); goto yoagcooekomeokwg; ecouwqosmoyyqmkw: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); yamyagayiooyeekg: } iksewmsaugayqaqq: yoagcooekomeokwg: return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); qmoocweoekqueuyy: } mqiiqkuaoekeuswo: $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
