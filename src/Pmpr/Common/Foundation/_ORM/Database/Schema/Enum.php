<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database\Schema; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, &$mksyucucyswaukig) { if (empty($this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie))) { goto uowiiyqmiaaaaoas; } $meqocwsecsywiiqs = $this->ymgomemcusiiyksw($eqgoocgaqwqcimie); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [$this->iooowgsqoyqseyuu() . Constants::icmokuskwoskgace => $meqocwsecsywiiqs]); $eqgoocgaqwqcimie = $this->qksikkwyuwmciusw($eqgoocgaqwqcimie); uowiiyqmiaaaaoas: return $eqgoocgaqwqcimie; }); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (is_numeric($eqgoocgaqwqcimie)) { goto vokekoceocuskqsm; } wp_die(sprintf("\166\x61\154\165\145\40\x6f\146\x20\x25\163\x20\x69\x73\40\x6e\157\x74\40\x63\157\162\162\x65\x63\x74", $meqocwsecsywiiqs)); vokekoceocuskqsm: if (!$this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { goto ooykyoowougqkaso; } wp_die(sprintf("\x25\163\40\x61\154\x72\145\141\x64\171\40\145\x78\151\163\x74\40\x69\156\x20\x6f\x70\164\151\157\156\x73\x20\154\x69\163\164", $eqgoocgaqwqcimie)); ooykyoowougqkaso: if (!$this->yseywyqacmugimme()) { goto sckyiekoceuisqyq; } $this->aguakyuusmksagai(); sckyiekoceuisqyq: if (!(!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae())) { goto kusuakkwcuqkcqaw; } $this->eyygsasuqmommkua($eqgoocgaqwqcimie); kusuakkwcuqkcqaw: parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { goto sigukociqouigous; } foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if (!($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo)) { goto ikuwigsmisimaqoc; } $eqgoocgaqwqcimie = $uusmaiomayssaecw; goto sikckcmeiwmyakeu; ikuwigsmisimaqoc: qaycycmeqkqcumog: } sikckcmeiwmyakeu: goto yagscaikmmuagqcu; sigukociqouigous: $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; yagscaikmmuagqcu: return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto iyawqekeeawqkymm; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); iyawqekeeawqkymm: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); qwosyqcomiosguoa: } iumgcesksuawyuyo: return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto qaqooueskgciuqgc; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); qaqooueskgciuqgc: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (is_numeric($eqgoocgaqwqcimie)) { goto omyquyiguuaociwq; } $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); omyquyiguuaociwq: return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { goto cceggewquoaemcwq; } if (is_array($eqgoocgaqwqcimie)) { goto ioiwoukauoeamuca; } goto iuwccksomkkouogy; cceggewquoaemcwq: $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); goto iuwccksomkkouogy; ioiwoukauoeamuca: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); mesesokuoomcioom: } aqwoykqaquewcaki: iuwccksomkkouogy: return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); owismwmeqcmukagu: } oqckuigyqswmqcqg: $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
