<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977684bcc9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class WPSetting extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x69\x6e\x69\164", [$this, "\171\x65\171\x69\147\x75\x79\145\x67\x6d\155\171\x75\163\145\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { $qeqooyuoiasweuck = $this->ocksiywmkyaqseou("\x77\157\x72\144\x70\x72\x65\x73\x73\137\x73\x65\164\164\x69\156\x67\x73\x5f\146\151\145\154\144\x73", []); if ($qeqooyuoiasweuck) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycmguuqqaiisymgg = [Constants::seocgqaqgqyooisy => Constants::wikgqsqysyuoykse, Constants::qeiauywscugcaqkq => Constants::ioomakeyqiqowgmk, Constants::gueokgaoyascgeqe => null]; foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) { $amakmumgguksgmum = $cwaqscoiqkokyase->ckscqqquyskscaaw($amakmumgguksgmum, $ycmguuqqaiisymgg); $aiowsaccomcoikus = $amakmumgguksgmum[Constants::gueokgaoyascgeqe]; $meqocwsecsywiiqs = ''; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); $qkqgcaykemoiecma->imawakueyqwccuqe($amakmumgguksgmum[Constants::qeiauywscugcaqkq], $aokagokqyuysuksm); } else { if (is_string($aiowsaccomcoikus)) { $meqocwsecsywiiqs = $aiowsaccomcoikus; } } $amakmumgguksgmum[Constants::okeuagwgwkmiokac][Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $ewsqcacamuomwagw->kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, function () use($qkqgcaykemoiecma, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->gswweykyogmsyawy(''); if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { $aiowsaccomcoikus->iygyugseyaqwywyg($qkqgcaykemoiecma->get($aiowsaccomcoikus->mwikyscisascoeea())); } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu([$aiowsaccomcoikus]); } }, $amakmumgguksgmum[Constants::qeiauywscugcaqkq], $amakmumgguksgmum[Constants::seocgqaqgqyooisy]); } } } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } }
