<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\x70\155\160\x72", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq())) { goto ymwckeawsukyukqs; } $yciaosuiyeieceug = true; ymwckeawsukyukqs: return (bool) $this->ocksiywmkyaqseou("\163\x65\x74\164\x69\156\x67\137\x63\x61\x6e\x5f\x73\x61\x76\x65", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\x32\x30\60\x31\66\62\x31\x33\60\61\x34\x37\x32\61\65\62\61\x38\x31\64\x37\x32\64\x36\x31\x38\63\61\64\x37\62\63\65"); if (!($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae())) { goto swkysimqcqkikmgy; } $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if ($this->kyikgkoamuecogww($hsouuwoeemykcceu)) { goto gosaiqsaqksagqsg; } $hsouuwoeemykcceu = ''; gosaiqsaqksagqsg: if ($hsouuwoeemykcceu) { goto wuuucygsmqmsiyoi; } $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\61\65\x37\x31\65\64\61\62\62\x31\63\x35\61\x37\60\x31\x38\71\61\x33\x35\x32\63\x34\61\x38\x39\x31\x39\x38\x31\60\67\61\x39\70\x32\61\65\x31\70\71"), 0, false); $this->cimaucgayqyyccoc(__("\125\x6e\x66\157\162\x74\x75\156\x61\x74\145\x6c\x79\40\x59\x6f\x75\x72\40\x6c\151\143\x65\x6e\x73\145\x20\153\145\171\x20\151\163\40\x6e\157\164\x20\166\x61\x6c\x69\x64\56\x20\x59\157\165\162\x20\x63\150\141\156\x67\x65\x73\40\156\x6f\x74\40\163\x61\166\145\144\56", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; goto gwkumgocycceogce; wuuucygsmqmsiyoi: $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\62\x32\x36\62\60\x35\61\x36\x33\x31\x38\64\x32\63\x35\62\x35\62\61\x38\64\62\71\67\62\x35\x32\62\x36\65\x31\x34\62\x32\x36\65\62\x38\66\x32\x35\62")] = 1; gwkumgocycceogce: swkysimqcqkikmgy: $ogskakmksyuqsiwg = false; if (empty($qiouiwasaauyaaue)) { goto ckmycmakimaeygcu; } $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\160\x72\x65\137\163\141\x76\145\137{$iiumgusgeekimkya}\137\157\x70\x74\x69\x6f\156\x73", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; wiciqigmosmkkmwk: } cwyauqoosqaoaoki: $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); ckmycmakimaeygcu: if (!$ogskakmksyuqsiwg) { goto wyoqmwcsuewswiua; } if (!$cqscqicucmeamkyq) { goto cecaekugyecciwcg; } $this->ewcsyqaaigkicgse("\163\x65\164\x74\151\x6e\147\137\157\x70\164\x69\157\156\163\137\x73\141\166\x65\144", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\x5f\x6f\x70\x74\x69\x6f\156\163\137\x73\x61\166\x65\144", $qiouiwasaauyaaue); cecaekugyecciwcg: $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\x70\155\160\162"); wyoqmwcsuewswiua: $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!(!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue))) { goto yqaacqqyisoewkqq; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\160\155\x70\162"); if (false !== $usymaaaeawgmyqig) { goto ayamqyqegiuausko; } $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if ($qiouiwasaauyaaue) { goto gggkwgcemqeckcse; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); gggkwgcemqeckcse: $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\160\x6d\160\162"); goto aqcuimcoqmsiygwk; ayamqyqegiuausko: $qiouiwasaauyaaue = $usymaaaeawgmyqig; aqcuimcoqmsiygwk: $this->options = $qiouiwasaauyaaue; yqaacqqyisoewkqq: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!($gmcgeogogyqsgawk !== null)) { goto mseimosiimuuceoa; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); mseimosiimuuceoa: if (!in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\60", 0], true)) { goto scaoisaaceiaweoe; } $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\x31", 1], true); scaoisaaceiaweoe: return $this->sscegwueamckwmcy("\147\x65\x74\x5f{$this->cisyiemkeykgkomc()}\x5f\157\x70\x74\151\157\x6e\137{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if (!$eqgoocgaqwqcimie) { goto ziggykossqqayaki; } if (!(is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii))) { goto mcgcqaiwmkewmwue; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); mcgcqaiwmkewmwue: ziggykossqqayaki: return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if ($oammesyieqmwuwyi) { goto sooqqqougsgcumko; } $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); sooqqqougsgcumko: $sogksuscggsicmac = []; if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto wguccgmciesyocmi; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { goto ggqqwysyuqiwksgm; } $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if (!($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true))) { goto ooceggceowgoacyu; } goto ekwsguueioyegqkc; ooceggceowgoacyu: if (!($tsuauommsquiesmk && isset($ywmkwiwkosakssii[$tsuauommsquiesmk]))) { goto syaqwysmymkgkcuu; } $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (!($ikeuqaskyceuqgmm && $ikeuqaskyceuqgmm !== $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $tsuauommsquiesmk))) { goto gwmauwgkiomyggmu; } goto ekwsguueioyegqkc; gwmauwgkiomyggmu: syaqwysmymkgkcuu: if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { goto qcmakskemmcgaeyg; } if (!is_callable($ekiuyucoiagmscgy)) { goto coqycqiqgwkgkymo; } $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); coqycqiqgwkgkymo: goto msayswiykqokmuqa; qcmakskemmcgaeyg: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); msayswiykqokmuqa: if (!$igqsaukqcqscimok) { goto aigseumaammwaqck; } if (!($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw)) { goto yeacwagosugscqcg; } $sogksuscggsicmac = $igqsaukqcqscimok; goto ekcwasmkccgmogmy; yeacwagosugscqcg: $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; aigseumaammwaqck: ggqqwysyuqiwksgm: ekwsguueioyegqkc: } ekcwasmkccgmogmy: wguccgmciesyocmi: return $sogksuscggsicmac; } public final function wciiwiecuqqagcoq(string $aokagokqyuysuksm) : Radio { $sckumcuqemuukces = __("\x6d\151\156", PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __("\150\162", PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = [0 => __("\116\x6f\40\x4c\151\155\151\164", PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\x20{$iyqygqimawuycsyq}"; iaiooeockccgaaiq: } qmkmuwomcwygkysi: return $this->yyuwuqsiucweeoue($aokagokqyuysuksm)->acauweqyyugwisqc($qiouiwasaauyaaue)->mkmssscwmeekwgqo()->eumecwmqmukqgyea(); } }
