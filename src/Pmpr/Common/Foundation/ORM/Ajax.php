<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053ea9b9ccc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Container { const wiysygukkaksueso = 'pr_foundation_orm_'; const kkuoiigmoqiwauwi = self::wiysygukkaksueso . 'quick_edit_action'; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kkuoiigmoqiwauwi, [$this, 'aikskacamkskieaa']); } public function aikskacamkskieaa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $aokagokqyuysuksm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gouqcwikiiygyasc); $meywaqqsugaoeyys = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::emkkgysokckswycs)); if (is_numeric($aokagokqyuysuksm) && is_subclass_of($meywaqqsugaoeyys, Model::class)) { $jwsqucqyaoaasykk = $meywaqqsugaoeyys::symcgieuakksimmu(); if ($wggyiigmegawawsc = $eiicaiwgqkgsekce->yyqgamuwwakgciey('changes')) { $mksyucucyswaukig = (array) $jwsqucqyaoaasykk->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); if ($mksyucucyswaukig) { $mksyucucyswaukig = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, $wggyiigmegawawsc); $sogksuscggsicmac = $jwsqucqyaoaasykk->gssiscqyqsacmeca()->gsegsiocqmsoayii($mksyucucyswaukig); if (!is_wp_error($sogksuscggsicmac)) { $_GET[Constants::imywcsggckkcywgk] = $jwsqucqyaoaasykk->cueaickeeoiwayou(); if ($jwsqucqyaoaasykk->kcsywgyywsgqgawm()) { $jwsqucqyaoaasykk->ayqesuasiggqoeeo()->qicmaqwoqqguccmo($aokagokqyuysuksm); } $keccaugmemegoimu = ['filtered' => $jwsqucqyaoaasykk->scqakcemaqsqkema($sogksuscggsicmac[Constants::ckmqoekmugkggeym]), Constants::ckmqoekmugkggeym => $jwsqucqyaoaasykk->ekuykcasmcmywewi($sogksuscggsicmac[Constants::ckmqoekmugkggeym])]; unset($_GET[Constants::imywcsggckkcywgk]); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = sprintf(__('Can not find requested %s with id %s.', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm(), $aokagokqyuysuksm); } } else { $keccaugmemegoimu = __('No change detected.', PR__CMN__FOUNDATION); } } else { $keccaugmemegoimu = __('Some require parameters not passed or not correct.', PR__CMN__FOUNDATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
