<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff7768f0b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class WPSetting extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\151\156\x69\164", [$this, "\171\145\x79\151\147\165\171\145\147\x6d\x6d\171\x75\163\x65\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { $qeqooyuoiasweuck = $this->ocksiywmkyaqseou("\167\157\x72\x64\160\x72\145\163\163\x5f\x73\145\164\x74\x69\156\x67\x73\137\146\151\x65\x6c\x64\x73", []); if ($qeqooyuoiasweuck) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycmguuqqaiisymgg = [Constants::seocgqaqgqyooisy => Constants::wikgqsqysyuoykse, Constants::qeiauywscugcaqkq => Constants::ioomakeyqiqowgmk, Constants::gueokgaoyascgeqe => null]; foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) { $amakmumgguksgmum = $cwaqscoiqkokyase->ckscqqquyskscaaw($amakmumgguksgmum, $ycmguuqqaiisymgg); $aiowsaccomcoikus = $amakmumgguksgmum[Constants::gueokgaoyascgeqe]; $meqocwsecsywiiqs = ''; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); $qkqgcaykemoiecma->imawakueyqwccuqe($amakmumgguksgmum[Constants::qeiauywscugcaqkq], $aokagokqyuysuksm); } else { if (is_string($aiowsaccomcoikus)) { $meqocwsecsywiiqs = $aiowsaccomcoikus; } } $amakmumgguksgmum[Constants::okeuagwgwkmiokac][Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $ewsqcacamuomwagw->kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, function () use($qkqgcaykemoiecma, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->gswweykyogmsyawy(''); if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { $aiowsaccomcoikus->iygyugseyaqwywyg($qkqgcaykemoiecma->get($aiowsaccomcoikus->mwikyscisascoeea())); } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu([$aiowsaccomcoikus]); } }, $amakmumgguksgmum[Constants::qeiauywscugcaqkq], $amakmumgguksgmum[Constants::seocgqaqgqyooisy]); } } } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } }
