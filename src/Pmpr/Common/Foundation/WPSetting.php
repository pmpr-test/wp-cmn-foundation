<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d16a012f73             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class WPSetting extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\x69\156\x69\164", [$this, "\x79\x65\171\151\147\x75\x79\x65\x67\x6d\155\171\165\163\x65\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { $qeqooyuoiasweuck = $this->ocksiywmkyaqseou("\167\x6f\162\x64\x70\x72\x65\x73\x73\x5f\x73\x65\x74\164\x69\x6e\x67\163\x5f\146\x69\145\154\144\163", []); if ($qeqooyuoiasweuck) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycmguuqqaiisymgg = [Constants::seocgqaqgqyooisy => Constants::wikgqsqysyuoykse, Constants::qeiauywscugcaqkq => Constants::ioomakeyqiqowgmk, Constants::gueokgaoyascgeqe => null]; foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) { $amakmumgguksgmum = $cwaqscoiqkokyase->ckscqqquyskscaaw($amakmumgguksgmum, $ycmguuqqaiisymgg); $aiowsaccomcoikus = $amakmumgguksgmum[Constants::gueokgaoyascgeqe]; $meqocwsecsywiiqs = ''; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); $qkqgcaykemoiecma->imawakueyqwccuqe($amakmumgguksgmum[Constants::qeiauywscugcaqkq], $aokagokqyuysuksm); } else { if (is_string($aiowsaccomcoikus)) { $meqocwsecsywiiqs = $aiowsaccomcoikus; } } $amakmumgguksgmum[Constants::okeuagwgwkmiokac][Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $ewsqcacamuomwagw->kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, function () use($qkqgcaykemoiecma, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->gswweykyogmsyawy(''); if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { $aiowsaccomcoikus->iygyugseyaqwywyg($qkqgcaykemoiecma->get($aiowsaccomcoikus->mwikyscisascoeea())); } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu([$aiowsaccomcoikus]); } }, $amakmumgguksgmum[Constants::qeiauywscugcaqkq], $amakmumgguksgmum[Constants::seocgqaqgqyooisy]); } } } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } }
