<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\x70\x6d\x70\x72", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq())) { goto egicsmysugywycqq; } $yciaosuiyeieceug = true; egicsmysugywycqq: return (bool) $this->ocksiywmkyaqseou("\x73\x65\164\x74\x69\x6e\147\x5f\143\x61\x6e\x5f\x73\x61\166\145", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\x31\66\61\61\x32\65\x31\x31\x35\x31\x32\x32\x31\x37\62\61\67\71\x31\x32\x32\x31\x39\x37\x31\x34\x36\61\62\x32\61\71\64"); if (!($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae())) { goto auouiegmaiasywkw; } $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if ($this->kyikgkoamuecogww($hsouuwoeemykcceu)) { goto migwkuscokgmogea; } $hsouuwoeemykcceu = ''; migwkuscokgmogea: if ($hsouuwoeemykcceu) { goto ooiaoiygiiamsmum; } $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\x32\61\64\x31\71\65\x31\66\x39\61\70\66\x32\61\67\62\x32\x36\x31\x38\66\x32\x36\63\62\x32\66\x32\64\x31\x31\65\60\62\x34\61\x32\64\66\x32\62\66"), 0, false); $this->cimaucgayqyyccoc(__("\x55\156\x66\157\x72\x74\165\156\141\164\x65\x6c\x79\x20\131\x6f\x75\162\x20\154\x69\143\x65\156\163\145\x20\x6b\x65\x79\40\151\163\40\156\157\164\x20\x76\141\154\x69\144\56\x20\x59\157\x75\x72\40\143\150\141\x6e\147\x65\x73\40\156\x6f\x74\x20\163\141\166\x65\144\56", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; goto qkmmgqgcegcuawuu; ooiaoiygiiamsmum: $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\x31\71\65\61\71\x30\61\66\62\61\67\65\x32\61\60\62\63\x31\61\x37\65\62\66\x36\x32\63\x31\x32\65\60\61\x34\x39\62\x35\x30\62\x35\x35\62\x33\x31")] = 1; qkmmgqgcegcuawuu: auouiegmaiasywkw: $ogskakmksyuqsiwg = false; if (empty($qiouiwasaauyaaue)) { goto csismgmuaiogeucq; } $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\x70\162\145\137\163\141\x76\145\x5f{$iiumgusgeekimkya}\137\x6f\x70\164\x69\157\156\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; ieyimqciuswcokke: } ggqmaecmwgeqkuge: $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); csismgmuaiogeucq: if (!$ogskakmksyuqsiwg) { goto gkekqmkyumkmywky; } if (!$cqscqicucmeamkyq) { goto aqaseyqwkgoyaiyg; } $this->ewcsyqaaigkicgse("\163\x65\x74\x74\x69\156\x67\137\x6f\x70\164\151\x6f\156\163\x5f\x73\x61\x76\145\144", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\137\x6f\x70\x74\x69\157\156\x73\x5f\x73\141\166\x65\144", $qiouiwasaauyaaue); aqaseyqwkgoyaiyg: $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\x70\x6d\160\x72"); gkekqmkyumkmywky: $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!(!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue))) { goto souucimemowwaseo; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\x6d\160\162"); if (false !== $usymaaaeawgmyqig) { goto ywgqeosekkwswyac; } $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if ($qiouiwasaauyaaue) { goto muoougyakwgcicuo; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); muoougyakwgcicuo: $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\160\x6d\160\x72"); goto qqcusuaqmyukwyqk; ywgqeosekkwswyac: $qiouiwasaauyaaue = $usymaaaeawgmyqig; qqcusuaqmyukwyqk: $this->options = $qiouiwasaauyaaue; souucimemowwaseo: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!($gmcgeogogyqsgawk !== null)) { goto oqyeyuocsyoeogim; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); oqyeyuocsyoeogim: if (!in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\x30", 0], true)) { goto egawiicamoykemqq; } $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\x31", 1], true); egawiicamoykemqq: return $this->sscegwueamckwmcy("\x67\x65\164\x5f{$this->cisyiemkeykgkomc()}\137\x6f\160\x74\x69\x6f\x6e\137{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if (!$eqgoocgaqwqcimie) { goto ksoygkwycsqicooa; } if (!(is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii))) { goto qqwukskiymcymgqc; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); qqwukskiymcymgqc: ksoygkwycsqicooa: return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if ($oammesyieqmwuwyi) { goto akkwoqycamwckeui; } $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); akkwoqycamwckeui: $sogksuscggsicmac = []; if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto yceksmgauwmiwmsw; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { goto kouecqmcueugwcqw; } $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if (!($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true))) { goto wmgyemaskuuowuum; } goto mkayykckiywayuko; wmgyemaskuuowuum: if (!($tsuauommsquiesmk && isset($ywmkwiwkosakssii[$tsuauommsquiesmk]))) { goto kquwekemiawwmuqs; } $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (!($ikeuqaskyceuqgmm && $ikeuqaskyceuqgmm !== $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $tsuauommsquiesmk))) { goto ssqemoqcimayewqm; } goto mkayykckiywayuko; ssqemoqcimayewqm: kquwekemiawwmuqs: if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { goto gcmmgmowsmgwkoye; } if (!is_callable($ekiuyucoiagmscgy)) { goto cgykkwqwamaougme; } $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); cgykkwqwamaougme: goto ugcaeymeciausmao; gcmmgmowsmgwkoye: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); ugcaeymeciausmao: if (!$igqsaukqcqscimok) { goto aqkoqskkimiuyqug; } if (!($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw)) { goto sygekyuywqgiawas; } $sogksuscggsicmac = $igqsaukqcqscimok; goto goimqkkiyegggysa; sygekyuywqgiawas: $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; aqkoqskkimiuyqug: kouecqmcueugwcqw: mkayykckiywayuko: } goimqkkiyegggysa: yceksmgauwmiwmsw: return $sogksuscggsicmac; } public final function wciiwiecuqqagcoq(string $aokagokqyuysuksm) : Radio { $sckumcuqemuukces = __("\x6d\x69\156", PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __("\150\x72", PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = [0 => __("\116\x6f\40\114\151\x6d\x69\x74", PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\40{$iyqygqimawuycsyq}"; imsmosgqcqgeksws: } oseqayimqaycaycw: return $this->yyuwuqsiucweeoue($aokagokqyuysuksm)->acauweqyyugwisqc($qiouiwasaauyaaue)->mkmssscwmeekwgqo()->eumecwmqmukqgyea(); } }
