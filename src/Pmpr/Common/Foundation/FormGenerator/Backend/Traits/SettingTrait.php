<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\160\155\x70\x72", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq())) { goto souucimemowwaseo; } $yciaosuiyeieceug = true; souucimemowwaseo: return (bool) $this->ocksiywmkyaqseou("\163\145\x74\164\x69\156\x67\137\x63\x61\156\137\163\x61\166\x65", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\x31\x34\x38\61\x32\x38\x31\60\70\61\x31\71\x31\65\x37\x31\66\64\x31\x31\x39\61\71\x32\61\x34\63\61\x31\x39\61\67\71"); if (!($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae())) { goto ksoygkwycsqicooa; } $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if ($this->kyikgkoamuecogww($hsouuwoeemykcceu)) { goto oqyeyuocsyoeogim; } $hsouuwoeemykcceu = ''; oqyeyuocsyoeogim: if ($hsouuwoeemykcceu) { goto egawiicamoykemqq; } $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\x31\x37\x36\61\65\x37\61\x32\x35\x31\x34\62\61\x38\65\x31\71\70\61\x34\x32\x32\x31\x39\x31\71\x38\x32\x30\x33\x31\x31\x32\62\60\x33\x32\61\x32\61\71\x38"), 0, false); $this->cimaucgayqyyccoc(__("\x55\x6e\146\x6f\162\x74\x75\x6e\x61\x74\x65\154\x79\40\131\157\165\x72\40\x6c\151\x63\145\x6e\x73\x65\40\153\x65\171\x20\151\163\x20\x6e\x6f\x74\x20\x76\141\154\x69\144\x2e\x20\x59\x6f\x75\162\x20\x63\150\141\156\x67\x65\163\x20\x6e\157\x74\40\163\x61\x76\145\x64\x2e", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; goto qqwukskiymcymgqc; egawiicamoykemqq: $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\61\66\62\x31\x35\71\x31\x33\65\x31\x34\x32\x31\67\65\x31\x38\60\61\64\x32\62\60\x35\61\x38\60\61\70\x39\61\62\x36\x31\x38\x39\61\71\62\61\x38\60")] = 1; qqwukskiymcymgqc: ksoygkwycsqicooa: $ogskakmksyuqsiwg = false; if (empty($qiouiwasaauyaaue)) { goto mkayykckiywayuko; } $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\160\x72\x65\x5f\163\x61\x76\x65\137{$iiumgusgeekimkya}\137\157\x70\x74\151\x6f\156\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; goimqkkiyegggysa: } akkwoqycamwckeui: $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); mkayykckiywayuko: if (!$ogskakmksyuqsiwg) { goto ssqemoqcimayewqm; } if (!$cqscqicucmeamkyq) { goto wmgyemaskuuowuum; } $this->ewcsyqaaigkicgse("\x73\x65\164\x74\x69\x6e\147\x5f\x6f\160\x74\151\x6f\156\x73\x5f\163\141\166\145\x64", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\x5f\157\x70\x74\x69\157\x6e\163\137\x73\x61\166\x65\144", $qiouiwasaauyaaue); wmgyemaskuuowuum: $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\x70\x6d\x70\162"); ssqemoqcimayewqm: $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!(!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue))) { goto ugcaeymeciausmao; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\x6d\x70\162"); if (false !== $usymaaaeawgmyqig) { goto cgykkwqwamaougme; } $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if ($qiouiwasaauyaaue) { goto kquwekemiawwmuqs; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); kquwekemiawwmuqs: $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\x70\155\160\162"); goto gcmmgmowsmgwkoye; cgykkwqwamaougme: $qiouiwasaauyaaue = $usymaaaeawgmyqig; gcmmgmowsmgwkoye: $this->options = $qiouiwasaauyaaue; ugcaeymeciausmao: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!($gmcgeogogyqsgawk !== null)) { goto sygekyuywqgiawas; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); sygekyuywqgiawas: if (!in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\61", 1, "\x30", 0], true)) { goto aqkoqskkimiuyqug; } $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\61", 1], true); aqkoqskkimiuyqug: return $this->sscegwueamckwmcy("\147\x65\x74\137{$this->cisyiemkeykgkomc()}\x5f\x6f\x70\x74\x69\x6f\x6e\x5f{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if (!$eqgoocgaqwqcimie) { goto yceksmgauwmiwmsw; } if (!(is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii))) { goto kouecqmcueugwcqw; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); kouecqmcueugwcqw: yceksmgauwmiwmsw: return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if ($oammesyieqmwuwyi) { goto oseqayimqaycaycw; } $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); oseqayimqaycaycw: $sogksuscggsicmac = []; if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto susauskwueokgaku; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { goto sgoioieqoekqywik; } $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if (!($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true))) { goto oiemkksaoaiyckgi; } goto omqkeukuycyymmke; oiemkksaoaiyckgi: if (!($tsuauommsquiesmk && isset($ywmkwiwkosakssii[$tsuauommsquiesmk]))) { goto wwuiwkkgqescsyyw; } $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (!($ikeuqaskyceuqgmm && $ikeuqaskyceuqgmm !== $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $tsuauommsquiesmk))) { goto wicqcmuwosqwyggg; } goto omqkeukuycyymmke; wicqcmuwosqwyggg: wwuiwkkgqescsyyw: if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { goto eeyksuucagkaqmsi; } if (!is_callable($ekiuyucoiagmscgy)) { goto wqameeueegakoqya; } $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); wqameeueegakoqya: goto ciuwaqyasauagkeu; eeyksuucagkaqmsi: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); ciuwaqyasauagkeu: if (!$igqsaukqcqscimok) { goto sucquwgiacwooomw; } if (!($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw)) { goto gakmkuaayakeymaa; } $sogksuscggsicmac = $igqsaukqcqscimok; goto imsmosgqcqgeksws; gakmkuaayakeymaa: $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; sucquwgiacwooomw: sgoioieqoekqywik: omqkeukuycyymmke: } imsmosgqcqgeksws: susauskwueokgaku: return $sogksuscggsicmac; } public final function wciiwiecuqqagcoq(string $aokagokqyuysuksm) : Radio { $sckumcuqemuukces = __("\x6d\151\156", PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __("\x68\x72", PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = [0 => __("\x4e\157\x20\x4c\151\155\151\164", PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\x20{$iyqygqimawuycsyq}"; qiamskskowaugckg: } usaykyskgyqwquca: return $this->yyuwuqsiucweeoue($aokagokqyuysuksm)->acauweqyyugwisqc($qiouiwasaauyaaue)->mkmssscwmeekwgqo()->eumecwmqmukqgyea(); } }
