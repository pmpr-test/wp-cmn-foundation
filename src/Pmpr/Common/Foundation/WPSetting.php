<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class WPSetting extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\151\x6e\151\x74", [$this, "\171\x65\x79\x69\147\165\171\x65\x67\155\155\x79\x75\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { $qeqooyuoiasweuck = $this->ocksiywmkyaqseou("\x77\x6f\162\x64\x70\x72\145\163\x73\x5f\163\x65\164\x74\151\x6e\147\163\x5f\146\151\145\x6c\144\x73", []); if (!$qeqooyuoiasweuck) { goto qswoesemmkuisiak; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycmguuqqaiisymgg = [Constants::seocgqaqgqyooisy => Constants::wikgqsqysyuoykse, Constants::qeiauywscugcaqkq => Constants::ioomakeyqiqowgmk, Constants::gueokgaoyascgeqe => null]; foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) { $amakmumgguksgmum = $cwaqscoiqkokyase->ckscqqquyskscaaw($amakmumgguksgmum, $ycmguuqqaiisymgg); $aiowsaccomcoikus = $amakmumgguksgmum[Constants::gueokgaoyascgeqe]; $meqocwsecsywiiqs = ''; if ($aiowsaccomcoikus instanceof Field) { goto aiouimmkquyuwagk; } if (!is_string($aiowsaccomcoikus)) { goto ciuaqmasmqyeioiy; } $meqocwsecsywiiqs = $aiowsaccomcoikus; ciuaqmasmqyeioiy: goto msmyywuowokwiswe; aiouimmkquyuwagk: $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); $qkqgcaykemoiecma->imawakueyqwccuqe($amakmumgguksgmum[Constants::qeiauywscugcaqkq], $aokagokqyuysuksm); msmyywuowokwiswe: $amakmumgguksgmum[Constants::okeuagwgwkmiokac][Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $ewsqcacamuomwagw->kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, function () use($qkqgcaykemoiecma, $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iwcyguueicgkqmiq; } $aiowsaccomcoikus->gswweykyogmsyawy(''); if (!$aiowsaccomcoikus->agmmqsowmyywagcm()) { goto uaewuiuogmissaks; } $aiowsaccomcoikus->iygyugseyaqwywyg($qkqgcaykemoiecma->get($aiowsaccomcoikus->mwikyscisascoeea())); uaewuiuogmissaks: echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu([$aiowsaccomcoikus]); iwcyguueicgkqmiq: }, $amakmumgguksgmum[Constants::qeiauywscugcaqkq], $amakmumgguksgmum[Constants::seocgqaqgqyooisy]); iiieosoykaeycaks: } imyyokaecggauwca: qswoesemmkuisiak: } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } }
