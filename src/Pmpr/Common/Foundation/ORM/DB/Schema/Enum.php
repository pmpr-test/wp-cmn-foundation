<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (is_numeric($eqgoocgaqwqcimie)) { goto skkqqcysscikmmik; } wp_die(sprintf("\x76\x61\154\165\145\x20\157\x66\40\45\163\x20\x69\163\x20\156\x6f\164\40\143\157\x72\162\x65\x63\164", $meqocwsecsywiiqs)); skkqqcysscikmmik: if (!$this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { goto oewsoauskqoqmiqa; } wp_die(sprintf("\45\163\x20\141\x6c\162\x65\141\144\x79\x20\145\170\151\163\x74\40\x69\156\x20\157\x70\x74\151\x6f\x6e\x73\x20\x6c\x69\163\164", $eqgoocgaqwqcimie)); oewsoauskqoqmiqa: if (!$this->yseywyqacmugimme()) { goto sgaoyyoooykieusg; } $this->aguakyuusmksagai(); sgaoyyoooykieusg: if (!(!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae())) { goto yywgsissmueymcmg; } $this->eyygsasuqmommkua($eqgoocgaqwqcimie); yywgsissmueymcmg: parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { goto guwyuigmkeeqssgw; } foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if (!($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo)) { goto sqsksyaqsweqiyci; } $eqgoocgaqwqcimie = $uusmaiomayssaecw; goto yuqowmmcwscosmgy; sqsksyaqsweqiyci: iyekyouiiwcsewgy: } yuqowmmcwscosmgy: goto cmogamaycywckuim; guwyuigmkeeqssgw: $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; cmogamaycywckuim: return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto oiissisqowcgwiyc; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); oiissisqowcgwiyc: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); ywiugkwcqkomgucy: } ugqeagqqaucqkcys: return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto ekoeysiuqeggaqku; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); ekoeysiuqeggaqku: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (is_numeric($eqgoocgaqwqcimie)) { goto sqcoigaqqssykoui; } $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); sqcoigaqqssykoui: return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { goto cwaqmauwsyugsieo; } if (is_array($eqgoocgaqwqcimie)) { goto uqkmkmmikmaqkgym; } goto wkmsuekwweweqoys; cwaqmauwsyugsieo: $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); goto wkmsuekwweweqoys; uqkmkmmikmaqkgym: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); iuageyamssqwqqyw: } mkmasewiiuocaekm: wkmsuekwweweqoys: return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); smeocsiuyouseuqo: } yckkkceuiuiaucce: $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
