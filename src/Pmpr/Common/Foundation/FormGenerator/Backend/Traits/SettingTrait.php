<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c8774d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { protected ?array $options = null; public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->imawakueyqwccuqe($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\160\x6d\x70\162", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $yciaosuiyeieceug = true; } return (bool) $this->ocksiywmkyaqseou("\163\x65\164\x74\x69\x6e\147\137\x63\x61\156\x5f\x73\141\166\145", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099528678676, "\61\64\64\x31\x31\x38\61\x30\x30\61\61\x35\61\x36\x35\x31\67\62\x31\x31\x35\x32\60\60\x31\62\x33\61\x31\x35\x31\67\x39"); if ($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae()) { $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if (!$this->kyikgkoamuecogww($hsouuwoeemykcceu)) { $hsouuwoeemykcceu = ''; } if ($hsouuwoeemykcceu) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\x31\64\67\x31\x33\66\61\x32\62\61\x32\x35\x31\x36\62\61\66\x39\61\x32\65\61\x39\66\61\x36\x39\61\x37\x34\x31\61\61\x31\67\x34\61\67\x37\61\x36\71")] = 1; } else { $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\61\66\x30\61\x35\x33\x31\x32\63\61\63\x34\61\70\x31\61\71\64\61\x33\x34\62\x33\x33\x31\71\x34\61\71\x39\61\61\60\61\x39\71\62\61\x36\61\71\64"), 0, false); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\x55\156\x66\157\x72\x74\x75\156\x61\164\x65\154\171\40\x59\x6f\x75\162\40\x6c\151\x63\145\156\x73\x65\40\x6b\x65\171\40\x69\x73\40\x6e\157\x74\40\x76\x61\x6c\x69\x64\56\40\x59\157\165\162\x20\143\x68\141\x6e\147\x65\x73\40\156\157\164\40\163\141\166\145\x64\x2e", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; } } $ogskakmksyuqsiwg = false; if (!empty($qiouiwasaauyaaue)) { $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\x70\x72\x65\137\x73\141\x76\145\x5f{$iiumgusgeekimkya}\x5f\x6f\160\x74\x69\x6f\x6e\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; } $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); } if ($ogskakmksyuqsiwg) { if ($cqscqicucmeamkyq) { $this->ewcsyqaaigkicgse("\163\145\x74\164\151\x6e\x67\x5f\157\160\164\x69\x6f\156\163\137\x73\141\166\x65\x64", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\137\157\x70\164\x69\157\156\x73\137\x73\141\x76\x65\x64", $qiouiwasaauyaaue); } $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\160\155\160\162"); } $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue)) { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\160\x6d\x70\x72"); if (false !== $usymaaaeawgmyqig) { $qiouiwasaauyaaue = $usymaaaeawgmyqig; } else { $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if (!$qiouiwasaauyaaue) { $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\x70\x6d\x70\162"); } $this->options = $qiouiwasaauyaaue; } return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->gkwkqmwweiawigae()[$uusmaiomayssaecw] ?? $ggauoeuaesiymgee; if ($gmcgeogogyqsgawk !== null) { $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); } if (in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\x30", 0], true)) { $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\61", 1], true); } return $this->sscegwueamckwmcy("\x67\x65\x74\137{$this->cisyiemkeykgkomc()}\x5f\157\160\x74\151\157\x6e\137{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if ($eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii)) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); } } return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => '', Constants::cwswygwykwgsqiwu => false, Constants::kyyscqqmsikeuaea => false, Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if (!$oammesyieqmwuwyi) { $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); } $sogksuscggsicmac = []; if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if ($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true)) { continue; } if ($tsuauommsquiesmk && $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if ($ikeuqaskyceuqgmm !== $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { continue; } } if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); } else { if (is_callable($ekiuyucoiagmscgy)) { $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); } } if ($igqsaukqcqscimok) { if ($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw || $ywmkwiwkosakssii[Constants::cwswygwykwgsqiwu]) { $sogksuscggsicmac = $igqsaukqcqscimok; break; } $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; } } } } return $sogksuscggsicmac; } }
