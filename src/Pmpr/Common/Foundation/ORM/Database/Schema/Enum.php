<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d30e2de1d6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, &$mksyucucyswaukig) { if (!empty($this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie))) { $meqocwsecsywiiqs = $this->ymgomemcusiiyksw($eqgoocgaqwqcimie); $mksyucucyswaukig = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [$this->iooowgsqoyqseyuu() . Constants::icmokuskwoskgace => $meqocwsecsywiiqs]); $eqgoocgaqwqcimie = $this->qksikkwyuwmciusw($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (!is_numeric($eqgoocgaqwqcimie)) { wp_die(sprintf("\166\x61\154\x75\x65\x20\157\x66\x20\45\163\x20\151\x73\40\x6e\x6f\x74\40\x63\157\x72\162\x65\143\x74", $meqocwsecsywiiqs)); } if ($this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { wp_die(sprintf("\45\163\40\x61\x6c\162\145\x61\x64\x79\40\145\x78\151\x73\164\40\151\156\40\x6f\x70\x74\151\157\x6e\163\x20\154\x69\x73\164", $eqgoocgaqwqcimie)); } if ($this->yseywyqacmugimme()) { $this->aguakyuusmksagai(); } if (!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae()) { $this->eyygsasuqmommkua($eqgoocgaqwqcimie); } parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; } else { foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if ($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = $uusmaiomayssaecw; break; } } } return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!$omkysikckkcieckq || !is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); } return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!$omkysikckkcieckq || !is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (!is_numeric($eqgoocgaqwqcimie)) { $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); } return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); } elseif (is_array($eqgoocgaqwqcimie)) { foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); } } return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); } $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
