<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705a37ba6a79             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { protected ?array $options = null; public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\160\155\160\x72", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $yciaosuiyeieceug = true; } return (bool) $this->ocksiywmkyaqseou("\x73\145\x74\164\151\156\x67\137\143\x61\x6e\x5f\x73\141\x76\145", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\61\x38\x30\x31\66\66\61\64\64\x31\65\x35\61\x38\71\x32\x30\x32\61\x35\65\62\x33\x36\x31\67\67\x31\x35\x35\x32\x32\x31"); if ($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae()) { $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if (!$this->kyikgkoamuecogww($hsouuwoeemykcceu)) { $hsouuwoeemykcceu = ''; } if ($hsouuwoeemykcceu) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\x31\66\x37\61\x35\70\61\65\60\61\x35\65\61\70\66\x31\x39\x31\61\65\x35\62\x32\64\61\x39\61\x31\x39\66\x31\63\67\61\71\66\62\60\65\x31\71\61")] = 1; } else { $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\x31\x36\65\61\65\x32\61\61\64\61\63\x35\61\67\x38\61\71\61\x31\63\65\x32\x34\60\x31\71\61\62\x30\x34\61\x30\x33\x32\x30\x34\x32\62\61\61\71\x31"), 0, false); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\x55\156\146\x6f\162\164\165\x6e\141\164\145\x6c\x79\40\x59\157\165\162\40\x6c\x69\x63\x65\156\163\x65\40\x6b\145\x79\40\151\163\40\x6e\x6f\x74\x20\166\141\154\x69\x64\56\x20\131\157\165\x72\40\143\150\141\x6e\x67\x65\163\40\156\x6f\164\x20\163\141\166\x65\x64\56", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; } } $ogskakmksyuqsiwg = false; if (!empty($qiouiwasaauyaaue)) { $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\160\x72\x65\x5f\163\x61\166\x65\x5f{$iiumgusgeekimkya}\137\x6f\160\164\x69\157\156\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; } $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); } if ($ogskakmksyuqsiwg) { if ($cqscqicucmeamkyq) { $this->ewcsyqaaigkicgse("\163\x65\164\164\151\156\147\137\x6f\x70\164\x69\x6f\x6e\x73\137\x73\x61\x76\145\x64", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\x5f\x6f\160\164\x69\x6f\x6e\x73\x5f\163\x61\x76\145\144", $qiouiwasaauyaaue); } $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\160\155\x70\x72"); } $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue)) { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\160\155\160\162"); if (false !== $usymaaaeawgmyqig) { $qiouiwasaauyaaue = $usymaaaeawgmyqig; } else { $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if (!$qiouiwasaauyaaue) { $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\160\155\x70\162"); } $this->options = $qiouiwasaauyaaue; } return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($gmcgeogogyqsgawk !== null) { $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); } if (in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\61", 1, "\60", 0], true)) { $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\61", 1], true); } return $this->sscegwueamckwmcy("\147\145\x74\x5f{$this->cisyiemkeykgkomc()}\137\x6f\x70\x74\151\x6f\x6e\137{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if ($eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii)) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); } } return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false, ]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if (!$oammesyieqmwuwyi) { $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); } $sogksuscggsicmac = []; if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if ($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true)) { continue; } if ($tsuauommsquiesmk && (isset($ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) || isset($ywmkwiwkosakssii[$tsuauommsquiesmk]))) { $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (isset($ywmkwiwkosakssii[$tsuauommsquiesmk]) && $ywmkwiwkosakssii[$tsuauommsquiesmk] !== $ikeuqaskyceuqgmm) { continue; } if ($ikeuqaskyceuqgmm !== $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { continue; } } if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); } else { if (is_callable($ekiuyucoiagmscgy)) { $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); } } if ($igqsaukqcqscimok) { if ($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw) { $sogksuscggsicmac = $igqsaukqcqscimok; break; } $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; } } } } return $sogksuscggsicmac; } }
