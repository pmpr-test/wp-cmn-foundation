<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6780382025b61             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class WPSetting extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\x69\x6e\151\x74", [$this, "\171\x65\171\x69\x67\165\171\x65\x67\x6d\x6d\x79\165\x73\145\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { $qeqooyuoiasweuck = $this->ocksiywmkyaqseou("\x77\157\162\144\x70\162\x65\x73\163\137\163\x65\164\x74\x69\156\x67\x73\x5f\x66\x69\x65\x6c\144\x73", []); if ($qeqooyuoiasweuck) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycmguuqqaiisymgg = [Constants::seocgqaqgqyooisy => Constants::wikgqsqysyuoykse, Constants::qeiauywscugcaqkq => Constants::ioomakeyqiqowgmk, Constants::gueokgaoyascgeqe => null]; foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) { $amakmumgguksgmum = $cwaqscoiqkokyase->ckscqqquyskscaaw($amakmumgguksgmum, $ycmguuqqaiisymgg); $aiowsaccomcoikus = $amakmumgguksgmum[Constants::gueokgaoyascgeqe]; $meqocwsecsywiiqs = ''; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); $qkqgcaykemoiecma->imawakueyqwccuqe($amakmumgguksgmum[Constants::qeiauywscugcaqkq], $aokagokqyuysuksm); } else { if (is_string($aiowsaccomcoikus)) { $meqocwsecsywiiqs = $aiowsaccomcoikus; } } $amakmumgguksgmum[Constants::okeuagwgwkmiokac][Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $ewsqcacamuomwagw->kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, function () use($qkqgcaykemoiecma, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->gswweykyogmsyawy(''); if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { $aiowsaccomcoikus->iygyugseyaqwywyg($qkqgcaykemoiecma->get($aiowsaccomcoikus->mwikyscisascoeea())); } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu([$aiowsaccomcoikus]); } }, $amakmumgguksgmum[Constants::qeiauywscugcaqkq], $amakmumgguksgmum[Constants::seocgqaqgqyooisy]); } } } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } }
