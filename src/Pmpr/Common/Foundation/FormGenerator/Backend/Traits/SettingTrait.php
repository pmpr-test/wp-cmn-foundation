<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677bb92f8cee3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { protected ?array $options = null; public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->imawakueyqwccuqe($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\x70\155\x70\162", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $yciaosuiyeieceug = true; } return (bool) $this->ocksiywmkyaqseou("\163\145\164\164\151\156\147\137\x63\141\x6e\x5f\163\x61\166\x65", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099528678676, "\61\x36\x38\x31\65\x36\x31\62\x36\x31\x33\67\61\67\61\61\x38\62\x31\63\x37\x31\71\70\61\65\x39\61\x33\67\61\71\63"); if ($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae()) { $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if (!$this->kyikgkoamuecogww($hsouuwoeemykcceu)) { $hsouuwoeemykcceu = ''; } if ($hsouuwoeemykcceu) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\61\66\x38\x31\66\x33\x31\65\67\61\66\x30\x31\x38\x31\61\71\x30\x31\x36\60\62\x32\67\x31\x39\x30\61\x39\x39\x31\64\62\61\x39\x39\62\61\70\x31\71\x30")] = 1; } else { $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\x31\x38\x30\61\x36\67\61\x35\65\x31\66\x32\x31\x39\61\62\x30\66\61\x36\62\x32\x35\x31\62\60\x36\x32\61\71\x31\x34\x32\62\61\71\x32\x34\x30\x32\60\x36"), 0, false); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\x55\x6e\x66\x6f\162\164\x75\156\141\164\x65\154\171\x20\131\157\x75\162\x20\x6c\151\x63\x65\156\x73\x65\x20\153\145\x79\x20\151\x73\x20\x6e\x6f\164\x20\166\141\x6c\x69\144\56\x20\131\x6f\165\162\x20\x63\150\141\156\x67\145\163\x20\x6e\157\x74\x20\x73\x61\x76\145\x64\56", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; } } $ogskakmksyuqsiwg = false; if (!empty($qiouiwasaauyaaue)) { $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\x70\x72\145\137\163\x61\166\145\137{$iiumgusgeekimkya}\x5f\x6f\x70\164\x69\157\x6e\x73", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; } $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); } if ($ogskakmksyuqsiwg) { if ($cqscqicucmeamkyq) { $this->ewcsyqaaigkicgse("\x73\x65\x74\x74\151\x6e\x67\x5f\x6f\x70\x74\151\x6f\156\163\137\x73\141\x76\x65\144", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\137\157\x70\x74\x69\x6f\156\x73\137\x73\x61\166\145\x64", $qiouiwasaauyaaue); } $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\160\x6d\160\x72"); } $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue)) { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\x70\x6d\x70\x72"); if (false !== $usymaaaeawgmyqig) { $qiouiwasaauyaaue = $usymaaaeawgmyqig; } else { $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if (!$qiouiwasaauyaaue) { $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\160\x6d\160\162"); } $this->options = $qiouiwasaauyaaue; } return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->gkwkqmwweiawigae()[$uusmaiomayssaecw] ?? $ggauoeuaesiymgee; if ($gmcgeogogyqsgawk !== null) { $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); } if (in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\x30", 0], true)) { $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\61", 1], true); } return $this->sscegwueamckwmcy("\147\x65\x74\137{$this->cisyiemkeykgkomc()}\137\x6f\x70\x74\x69\157\x6e\x5f{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if ($eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii)) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); } } return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::cwswygwykwgsqiwu => false, Constants::kyyscqqmsikeuaea => false, Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if (!$oammesyieqmwuwyi) { $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); } $sogksuscggsicmac = []; if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if ($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true)) { continue; } if ($tsuauommsquiesmk && $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if ($ikeuqaskyceuqgmm !== $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { continue; } } if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); } else { if (is_callable($ekiuyucoiagmscgy)) { $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); } } if ($igqsaukqcqscimok) { if ($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw || $ywmkwiwkosakssii[Constants::cwswygwykwgsqiwu]) { $sogksuscggsicmac = $igqsaukqcqscimok; break; } $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; } } } } return $sogksuscggsicmac; } }
