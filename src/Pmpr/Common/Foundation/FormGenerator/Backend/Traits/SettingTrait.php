<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { protected ?array $options = null; public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\x70\x6d\160\162", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq())) { goto maqmyigowgsmqaco; } $yciaosuiyeieceug = true; maqmyigowgsmqaco: return (bool) $this->ocksiywmkyaqseou("\x73\x65\x74\164\151\156\147\x5f\143\141\156\137\x73\141\x76\x65", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\61\70\65\x31\x36\61\x31\63\x37\x31\64\x34\x31\71\x30\x32\x30\63\x31\64\x34\62\62\x35\x31\67\66\61\x34\64\x32\x30\66"); if (!($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae())) { goto zawceoyikyuwoucg; } $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if ($this->kyikgkoamuecogww($hsouuwoeemykcceu)) { goto eigowcoqoqkwuoiq; } $hsouuwoeemykcceu = ''; eigowcoqoqkwuoiq: if ($hsouuwoeemykcceu) { goto iqiuaammwkeiamuo; } $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\x31\64\70\x31\x34\65\61\x32\x31\x31\x32\64\61\x35\65\x31\x36\x36\x31\x32\x34\61\71\x37\61\66\x36\61\x37\61\x31\60\x32\61\x37\61\x31\x38\x34\61\66\x36"), 0, false); $this->cimaucgayqyyccoc(__("\x55\156\146\x6f\162\x74\x75\156\141\x74\x65\154\171\x20\x59\157\165\162\40\x6c\151\x63\x65\156\x73\x65\x20\x6b\x65\x79\x20\x69\163\40\156\157\x74\40\x76\x61\x6c\x69\x64\x2e\x20\131\x6f\x75\162\40\143\150\x61\156\147\x65\x73\x20\x6e\157\164\x20\x73\141\x76\x65\x64\x2e", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; goto imygueoqiqikwcws; iqiuaammwkeiamuo: $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\61\x36\x35\x31\x34\66\61\x32\x36\x31\64\x31\x31\70\x36\x32\60\65\x31\64\61\x32\64\x36\x32\60\65\x32\x31\64\x31\61\63\62\61\x34\x32\x32\x35\62\x30\65")] = 1; imygueoqiqikwcws: zawceoyikyuwoucg: $ogskakmksyuqsiwg = false; if (empty($qiouiwasaauyaaue)) { goto gcgckeksyymcgays; } $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\160\x72\145\137\163\x61\x76\145\137{$iiumgusgeekimkya}\137\157\160\x74\x69\x6f\x6e\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; kmgoiquwmsayywsc: } aqwcyyigiukqikui: $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); gcgckeksyymcgays: if (!$ogskakmksyuqsiwg) { goto iwcsismeakueeiya; } if (!$cqscqicucmeamkyq) { goto eqmcakqmqkqkweww; } $this->ewcsyqaaigkicgse("\163\x65\x74\164\151\x6e\147\137\157\160\x74\x69\157\156\x73\x5f\x73\141\x76\x65\144", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\x5f\x6f\x70\x74\x69\157\156\x73\x5f\x73\x61\x76\145\144", $qiouiwasaauyaaue); eqmcakqmqkqkweww: $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\160\155\160\162"); iwcsismeakueeiya: $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!(!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue))) { goto kyoogyegwukaqoce; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\x6d\x70\x72"); if (false !== $usymaaaeawgmyqig) { goto emsqksecccqeueoa; } $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if ($qiouiwasaauyaaue) { goto gkmgqmcgouseqwyg; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); gkmgqmcgouseqwyg: $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\160\x6d\x70\x72"); goto ogmueiimgsogucqa; emsqksecccqeueoa: $qiouiwasaauyaaue = $usymaaaeawgmyqig; ogmueiimgsogucqa: $this->options = $qiouiwasaauyaaue; kyoogyegwukaqoce: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!($gmcgeogogyqsgawk !== null)) { goto eocaacmwsqqqauuc; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); eocaacmwsqqqauuc: if (!in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\x30", 0], true)) { goto maougsuwuoiecwgy; } $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\x31", 1], true); maougsuwuoiecwgy: return $this->sscegwueamckwmcy("\x67\x65\164\x5f{$this->cisyiemkeykgkomc()}\x5f\157\160\164\x69\x6f\x6e\137{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if (!$eqgoocgaqwqcimie) { goto smqeaeiimomewqsw; } if (!(is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii))) { goto pseqauyuqgmccuwe; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); pseqauyuqgmccuwe: smqeaeiimomewqsw: return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if ($oammesyieqmwuwyi) { goto wkgmgumyswiayyae; } $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); wkgmgumyswiayyae: $sogksuscggsicmac = []; if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto wwugkwcimumgukko; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { goto oouisuwokmqgwiau; } $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if (!($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true))) { goto awkmmuyuakwiaqae; } goto swmeecwwakawqqcw; awkmmuyuakwiaqae: if (!($tsuauommsquiesmk && isset($ywmkwiwkosakssii[$tsuauommsquiesmk]))) { goto tokguaiieequuwwa; } $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (!($ikeuqaskyceuqgmm && $ikeuqaskyceuqgmm !== $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $tsuauommsquiesmk))) { goto qogogggqiuuewakw; } goto swmeecwwakawqqcw; qogogggqiuuewakw: tokguaiieequuwwa: if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { goto ewosekcicaqucsua; } if (!is_callable($ekiuyucoiagmscgy)) { goto ccgmicuyeoggoecu; } $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); ccgmicuyeoggoecu: goto mugaisykgmqcaggg; ewosekcicaqucsua: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); mugaisykgmqcaggg: if (!$igqsaukqcqscimok) { goto ymsscygscwwicumm; } if (!($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw)) { goto sgamuuiycksmssoi; } $sogksuscggsicmac = $igqsaukqcqscimok; goto aiaayumowqswqqqk; sgamuuiycksmssoi: $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; ymsscygscwwicumm: oouisuwokmqgwiau: swmeecwwakawqqcw: } aiaayumowqswqqqk: wwugkwcimumgukko: return $sogksuscggsicmac; } }
