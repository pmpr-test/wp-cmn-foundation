<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d47a28db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, &$mksyucucyswaukig) { if (!empty($this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie))) { $meqocwsecsywiiqs = $this->ymgomemcusiiyksw($eqgoocgaqwqcimie); $mksyucucyswaukig = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [$this->iooowgsqoyqseyuu() . Constants::icmokuskwoskgace => $meqocwsecsywiiqs]); $eqgoocgaqwqcimie = $this->qksikkwyuwmciusw($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (!is_numeric($eqgoocgaqwqcimie)) { wp_die(sprintf("\105\x6e\x75\x6d\x20\x4f\160\x74\x69\157\x6e\x3a\40\166\141\x6c\165\145\x20\x6f\x66\x20\x25\x73\40\x69\x73\x20\156\157\x74\40\x63\x6f\162\162\x65\143\x74", $meqocwsecsywiiqs)); } if ($this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { wp_die(sprintf("\x45\x6e\x75\x6d\40\117\x70\164\x69\157\156\x3a\x20\x25\x73\x20\141\x6c\162\145\x61\144\x79\x20\145\x78\151\x73\x74\40\x69\x6e\40\157\x70\164\x69\157\156\163\x20\x6c\x69\x73\164", $eqgoocgaqwqcimie)); } if ($this->yseywyqacmugimme()) { $this->aguakyuusmksagai(); } if (!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae()) { $this->eyygsasuqmommkua($eqgoocgaqwqcimie); } parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; } else { foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if ($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = $uusmaiomayssaecw; break; } } } return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!$omkysikckkcieckq || !is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); } return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!$omkysikckkcieckq || !is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (!is_numeric($eqgoocgaqwqcimie)) { $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); } return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); } elseif (is_array($eqgoocgaqwqcimie)) { foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); } } return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); } $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
