<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database\Schema; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Enum extends Boolean { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs); $this->acceqyqygswoecwe(2); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, &$mksyucucyswaukig) { if (empty($this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie))) { goto misiasooemyskoay; } $meqocwsecsywiiqs = $this->ymgomemcusiiyksw($eqgoocgaqwqcimie); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [$this->iooowgsqoyqseyuu() . Constants::icmokuskwoskgace => $meqocwsecsywiiqs]); $eqgoocgaqwqcimie = $this->qksikkwyuwmciusw($eqgoocgaqwqcimie); misiasooemyskoay: return $eqgoocgaqwqcimie; }); } public function kesomeowemmyygey($eqgoocgaqwqcimie, $ymqmyyeuycgmigyo, $meqocwsecsywiiqs = null) : self { if (is_numeric($eqgoocgaqwqcimie)) { goto eomqeimoequmagum; } wp_die(sprintf("\x76\141\x6c\x75\145\x20\157\x66\x20\x25\x73\40\x69\163\x20\x6e\157\164\40\143\x6f\x72\162\145\x63\164", $meqocwsecsywiiqs)); eomqeimoequmagum: if (!$this->giiuwsmyumqwwiyq($eqgoocgaqwqcimie)) { goto cqkyumayoemqsueu; } wp_die(sprintf("\45\163\40\141\154\162\x65\141\x64\171\x20\145\170\151\163\x74\x20\151\156\40\x6f\x70\164\151\x6f\156\x73\40\154\x69\163\x74", $eqgoocgaqwqcimie)); cqkyumayoemqsueu: if (!$this->yseywyqacmugimme()) { goto ksqmcugkcmsooeaw; } $this->aguakyuusmksagai(); ksqmcugkcmsooeaw: if (!(!$this->myacgeeekqcmemge() && !$this->oiswysuiioecsaae())) { goto sukcyismwageqgok; } $this->eyygsasuqmommkua($eqgoocgaqwqcimie); sukcyismwageqgok: parent::kesomeowemmyygey($eqgoocgaqwqcimie, [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $ggauoeuaesiymgee = $this->wcuwocosqgkqkgis($ggauoeuaesiymgee); return parent::eyygsasuqmommkua($ggauoeuaesiymgee); } public function wcuwocosqgkqkgis($ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = null; if (is_numeric($ymqmyyeuycgmigyo)) { goto wasuquysysmqyegg; } foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { if (!($omkysikckkcieckq[Constants::NAME] === $ymqmyyeuycgmigyo)) { goto geoiegikocwmwosi; } $eqgoocgaqwqcimie = $uusmaiomayssaecw; goto ukmgwuiqwgyiouec; geoiegikocwmwosi: qykcggwgkweasuii: } ukmgwuiqwgyiouec: goto eqsuaywswuesuika; wasuquysysmqyegg: $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo; eqsuaywswuesuika: return $eqgoocgaqwqcimie; } public function qksikkwyuwmciusw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto okawiaowosqickgq; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); okawiaowosqickgq: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::NAME); } public function ywesecymaqwkmcei() : array { $aiwgcyaewwagisoo = []; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $aiwgcyaewwagisoo[$uusmaiomayssaecw] = $this->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); meiqywmwuoogckss: } ogciikaecauiwgyk: return $aiwgcyaewwagisoo; } public function ymgomemcusiiyksw($eqgoocgaqwqcimie, $omkysikckkcieckq = null) { if (!(!$omkysikckkcieckq || !is_array($omkysikckkcieckq))) { goto oyeygeykqwcqoeic; } $omkysikckkcieckq = $this->giiuwsmyumqwwiyq($this->smyicguueqkuwaoi($eqgoocgaqwqcimie)); oyeygeykqwcqoeic: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, Constants::qescuiwgsyuikume); } public function smyicguueqkuwaoi($eqgoocgaqwqcimie) { $momcykaoccoymeig = $eqgoocgaqwqcimie; if (is_numeric($eqgoocgaqwqcimie)) { goto eomcuogskessyicy; } $momcykaoccoymeig = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); eomcuogskessyicy: return $momcykaoccoymeig; } public function oiesyimugeuuwcma($eqgoocgaqwqcimie) { if (!is_numeric($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie)) { goto ogwwasqkaageiwwi; } if (is_array($eqgoocgaqwqcimie)) { goto sosqgaswegsomgkw; } goto iicaisyekagswmey; ogwwasqkaageiwwi: $eqgoocgaqwqcimie = $this->wcuwocosqgkqkgis($eqgoocgaqwqcimie); goto iicaisyekagswmey; sosqgaswegsomgkw: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $mokouoooiwsmcmiu) { $eqgoocgaqwqcimie[$uusmaiomayssaecw] = $this->wcuwocosqgkqkgis($mokouoooiwsmcmiu); quiguyyimiqeqcwa: } isaacywgkascmcsw: iicaisyekagswmey: return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { $ykiwomimkkuiigoq = 1; foreach ($this->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $ykiwomimkkuiigoq = max($ykiwomimkkuiigoq, strlen($uusmaiomayssaecw)); qiiqceousoicgeee: } eiegguecasykwmyq: $this->acceqyqygswoecwe($ykiwomimkkuiigoq); parent::umkwmemkiowegeuq(); } }
