<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\x70\x6d\160\x72", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq())) { goto ouyqaaywykeqimmi; } $yciaosuiyeieceug = true; ouyqaaywykeqimmi: return (bool) $this->ocksiywmkyaqseou("\x73\145\164\164\x69\156\147\x5f\143\x61\156\x5f\163\x61\166\145", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\61\65\63\x31\x34\63\x31\x32\71\61\63\x38\x31\66\70\61\x38\x39\x31\x33\x38\x32\x32\x31\61\65\60\61\x33\x38\x32\x30\62"); if (!($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae())) { goto qkmmgqgcegcuawuu; } $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if ($this->kyikgkoamuecogww($hsouuwoeemykcceu)) { goto egicsmysugywycqq; } $hsouuwoeemykcceu = ''; egicsmysugywycqq: if ($hsouuwoeemykcceu) { goto migwkuscokgmogea; } $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\x31\65\x35\x31\64\x30\61\x32\62\x31\x32\x39\x31\x37\66\61\x39\67\61\62\x39\62\65\60\x31\x39\x37\62\61\66\61\x31\x37\x32\x31\66\x32\62\71\x31\71\67"), 0, false); $this->cimaucgayqyyccoc(__("\x55\156\146\x6f\x72\164\165\x6e\x61\164\145\x6c\x79\x20\x59\x6f\x75\x72\x20\x6c\x69\143\145\156\x73\x65\x20\x6b\145\171\x20\151\163\x20\156\x6f\x74\x20\x76\141\154\x69\x64\x2e\40\131\x6f\x75\162\x20\143\x68\x61\156\x67\x65\x73\40\156\157\x74\x20\x73\141\x76\145\144\x2e", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; goto ooiaoiygiiamsmum; migwkuscokgmogea: $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\x31\66\65\x31\x35\62\x31\x34\60\x31\x34\67\61\70\x30\61\x39\x31\x31\x34\x37\62\63\x38\61\71\61\62\61\x30\61\63\63\x32\x31\x30\62\62\61\x31\71\61")] = 1; ooiaoiygiiamsmum: qkmmgqgcegcuawuu: $ogskakmksyuqsiwg = false; if (empty($qiouiwasaauyaaue)) { goto ieyimqciuswcokke; } $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\x70\162\x65\x5f\x73\141\x76\x65\137{$iiumgusgeekimkya}\137\x6f\160\x74\151\x6f\156\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; ggqmaecmwgeqkuge: } auouiegmaiasywkw: $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); ieyimqciuswcokke: if (!$ogskakmksyuqsiwg) { goto aqaseyqwkgoyaiyg; } if (!$cqscqicucmeamkyq) { goto csismgmuaiogeucq; } $this->ewcsyqaaigkicgse("\x73\145\164\164\x69\x6e\147\x5f\157\160\x74\x69\157\x6e\x73\x5f\x73\x61\x76\x65\x64", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\x5f\157\160\x74\x69\x6f\156\x73\x5f\x73\x61\166\x65\x64", $qiouiwasaauyaaue); csismgmuaiogeucq: $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\160\x6d\160\162"); aqaseyqwkgoyaiyg: $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!(!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue))) { goto qqcusuaqmyukwyqk; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\x6d\x70\162"); if (false !== $usymaaaeawgmyqig) { goto muoougyakwgcicuo; } $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if ($qiouiwasaauyaaue) { goto gkekqmkyumkmywky; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); gkekqmkyumkmywky: $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\160\155\160\x72"); goto ywgqeosekkwswyac; muoougyakwgcicuo: $qiouiwasaauyaaue = $usymaaaeawgmyqig; ywgqeosekkwswyac: $this->options = $qiouiwasaauyaaue; qqcusuaqmyukwyqk: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!($gmcgeogogyqsgawk !== null)) { goto souucimemowwaseo; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); souucimemowwaseo: if (!in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\x30", 0], true)) { goto oqyeyuocsyoeogim; } $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\x31", 1], true); oqyeyuocsyoeogim: return $this->sscegwueamckwmcy("\x67\145\x74\137{$this->cisyiemkeykgkomc()}\x5f\157\x70\164\x69\x6f\x6e\x5f{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if (!$eqgoocgaqwqcimie) { goto qqwukskiymcymgqc; } if (!(is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii))) { goto egawiicamoykemqq; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); egawiicamoykemqq: qqwukskiymcymgqc: return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if ($oammesyieqmwuwyi) { goto ksoygkwycsqicooa; } $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); ksoygkwycsqicooa: $sogksuscggsicmac = []; if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto kouecqmcueugwcqw; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { goto aqkoqskkimiuyqug; } $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if (!($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true))) { goto mkayykckiywayuko; } goto goimqkkiyegggysa; mkayykckiywayuko: if (!($tsuauommsquiesmk && isset($ywmkwiwkosakssii[$tsuauommsquiesmk]))) { goto ssqemoqcimayewqm; } $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (!($ikeuqaskyceuqgmm && $ikeuqaskyceuqgmm !== $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $tsuauommsquiesmk))) { goto wmgyemaskuuowuum; } goto goimqkkiyegggysa; wmgyemaskuuowuum: ssqemoqcimayewqm: if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { goto cgykkwqwamaougme; } if (!is_callable($ekiuyucoiagmscgy)) { goto kquwekemiawwmuqs; } $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); kquwekemiawwmuqs: goto gcmmgmowsmgwkoye; cgykkwqwamaougme: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); gcmmgmowsmgwkoye: if (!$igqsaukqcqscimok) { goto sygekyuywqgiawas; } if (!($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw)) { goto ugcaeymeciausmao; } $sogksuscggsicmac = $igqsaukqcqscimok; goto akkwoqycamwckeui; ugcaeymeciausmao: $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; sygekyuywqgiawas: aqkoqskkimiuyqug: goimqkkiyegggysa: } akkwoqycamwckeui: kouecqmcueugwcqw: return $sogksuscggsicmac; } public final function wciiwiecuqqagcoq(string $aokagokqyuysuksm) : Radio { $sckumcuqemuukces = __("\x6d\151\x6e", PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __("\150\162", PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = [0 => __("\x4e\157\x20\114\x69\155\151\164", PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\x20\40{$iyqygqimawuycsyq}"; oseqayimqaycaycw: } yceksmgauwmiwmsw: return $this->yyuwuqsiucweeoue($aokagokqyuysuksm)->acauweqyyugwisqc($qiouiwasaauyaaue)->mkmssscwmeekwgqo()->eumecwmqmukqgyea(); } }
