<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; trait SettingTrait { protected ?array $options = null; public function imawakueyqwccuqe() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); Origin::symcgieuakksimmu()->register($uusmaiomayssaecw); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->imawakueyqwccuqe("\160\x6d\160\x72", $uusmaiomayssaecw); } public function oekaucwuqsqwuqeo() : bool { $yciaosuiyeieceug = false; if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST[self::ecksyyaycmgcguey]) && $_POST[Constants::uqgcmmosieyimiku] === $this->cisyiemkeykgkomc() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($_POST[self::ecksyyaycmgcguey], self::ecksyyaycmgcguey) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq())) { goto kmeekqukcecuscye; } $yciaosuiyeieceug = true; kmeekqukcecuscye: return (bool) $this->ocksiywmkyaqseou("\163\145\x74\164\151\156\147\137\143\x61\156\x5f\x73\x61\x76\x65", $yciaosuiyeieceug, $this->cisyiemkeykgkomc(), $this); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, bool $cqscqicucmeamkyq = true, bool $kyikgkoamuecogww = true) : bool { $this->iumcsgkcwwwsyggc(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $qiouiwasaauyaaue)[1]; $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $uusmaiomayssaecw = self::quacgsocsmycocig(1099528678676, "\x31\67\63\x31\x35\x33\x31\x31\x39\61\63\66\61\x38\64\61\x39\61\61\x33\x36\62\62\x31\x31\x35\66\x31\63\66\x32\60\x36"); if (!($kyikgkoamuecogww && isset($qiouiwasaauyaaue[$uusmaiomayssaecw]) && $this->omuwssagqmgcymae())) { goto wgmeyycmqioioaqc; } $hsouuwoeemykcceu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, $uusmaiomayssaecw); if ($this->kyikgkoamuecogww($hsouuwoeemykcceu)) { goto csoeisssoumqqeoa; } $hsouuwoeemykcceu = ''; csoeisssoumqqeoa: if ($hsouuwoeemykcceu) { goto weuueokkumksgaeo; } $this->qioweyiqewmsocem($uusmaiomayssaecw, '', false); $this->qioweyiqewmsocem(self::quacgsocsmycocig(1099513473301, "\x31\70\64\61\x36\x37\x31\x34\x31\x31\64\x36\62\60\x35\62\61\x34\61\x34\66\62\64\x37\62\x31\x34\x32\x33\x35\x31\x32\x38\62\63\65\62\64\60\62\61\64"), 0, false); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\x55\156\x66\x6f\x72\164\165\x6e\x61\164\145\x6c\x79\x20\x59\157\165\x72\40\154\x69\x63\145\x6e\163\x65\x20\153\145\x79\40\151\163\x20\156\157\164\40\x76\141\154\x69\144\56\x20\x59\x6f\x75\x72\40\x63\150\x61\x6e\x67\145\163\40\x6e\x6f\164\x20\163\x61\x76\x65\144\x2e", PR__CMN__FOUNDATION), $iiumgusgeekimkya); return false; goto igckskemqkqueukg; weuueokkumksgaeo: $qiouiwasaauyaaue[$uusmaiomayssaecw] = $hsouuwoeemykcceu; $qiouiwasaauyaaue[self::quacgsocsmycocig(1099513473301, "\x31\x39\61\x31\70\x36\61\64\x36\x31\66\67\x32\61\60\62\62\x35\x31\x36\x37\62\65\x30\62\62\x35\x32\x33\x34\x31\63\71\x32\x33\64\62\x33\67\62\x32\x35")] = 1; igckskemqkqueukg: wgmeyycmqioioaqc: $ogskakmksyuqsiwg = false; if (empty($qiouiwasaauyaaue)) { goto ucugeysomcyceyos; } $qiouiwasaauyaaue = $this->ocksiywmkyaqseou("\160\162\145\x5f\163\141\166\145\137{$iiumgusgeekimkya}\x5f\x6f\160\x74\151\x6f\x6e\163", $qiouiwasaauyaaue, $this); Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iiumgusgeekimkya, $qiouiwasaauyaaue); $kycgyeqaqygewoku = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $kycgyeqaqygewoku[$uusmaiomayssaecw] = $omkysikckkcieckq; pssquaaiioygwqoq: } ykiyuciecskusaae: $ogskakmksyuqsiwg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($iiumgusgeekimkya, $kycgyeqaqygewoku); ucugeysomcyceyos: if (!$ogskakmksyuqsiwg) { goto qmuikumqukcyaeqa; } if (!$cqscqicucmeamkyq) { goto momgmqemgcasyuqq; } $this->ewcsyqaaigkicgse("\x73\145\x74\164\151\156\147\x5f\157\160\164\x69\157\x6e\x73\137\x73\141\x76\145\144", $qiouiwasaauyaaue); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}\x5f\x6f\x70\x74\151\157\x6e\163\137\163\141\x76\x65\x64", $qiouiwasaauyaaue); momgmqemgcasyuqq: $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, "\x70\155\x70\x72"); qmuikumqukcyaeqa: $this->swqaqgaeiewsykyc($qiouiwasaauyaaue); return $ogskakmksyuqsiwg; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { } public function gkwkqmwweiawigae() : array { $qiouiwasaauyaaue = $this->options; if (!(!$qiouiwasaauyaaue || !is_array($qiouiwasaauyaaue))) { goto mioaoacqueiyueak; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $usymaaaeawgmyqig = $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->get($uusmaiomayssaecw, "\160\155\160\162"); if (false !== $usymaaaeawgmyqig) { goto imaiuooqwwokwemw; } $qiouiwasaauyaaue = Origin::symcgieuakksimmu()->gkwkqmwweiawigae($uusmaiomayssaecw); if ($qiouiwasaauyaaue) { goto keyiswqkmqqquosw; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, []); keyiswqkmqqquosw: $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->set($uusmaiomayssaecw, $qiouiwasaauyaaue, "\x70\155\x70\162"); goto mioqycmmeucswoms; imaiuooqwwokwemw: $qiouiwasaauyaaue = $usymaaaeawgmyqig; mioqycmmeucswoms: $this->options = $qiouiwasaauyaaue; mioaoacqueiyueak: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!($gmcgeogogyqsgawk !== null)) { goto oaseseemoaqcgqeu; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg($uusmaiomayssaecw, $omkysikckkcieckq, $gmcgeogogyqsgawk); oaseseemoaqcgqeu: if (!in_array($omkysikckkcieckq, [Constants::ioyokcgwaowoqskk, Constants::wiquocqckkqkmayo, Constants::ON, Constants::OFF, "\x31", 1, "\60", 0], true)) { goto kuymgsewmeoimeuq; } $omkysikckkcieckq = in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ON, "\61", 1], true); kuymgsewmeoimeuq: return $this->sscegwueamckwmcy("\147\145\x74\x5f{$this->cisyiemkeykgkomc()}\137\157\x70\x74\151\157\156\137{$uusmaiomayssaecw}", $omkysikckkcieckq, $uusmaiomayssaecw, $this); } private function swgcwsiqmygouiqg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { if (!$eqgoocgaqwqcimie) { goto kisuswmyqsocukgk; } if (!(is_array($eqgoocgaqwqcimie) && is_array($ywmkwiwkosakssii))) { goto gimsiyauegmikyka; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $this->oycoyoggyswwygye($uusmaiomayssaecw, $ywmkwiwkosakssii); gimsiyauegmikyka: kisuswmyqsocukgk: return $eqgoocgaqwqcimie; } public function oycoyoggyswwygye(string $iwqgomgkuumgyswi, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ Constants::wkweqssoakmmmguq => [], Constants::wwgusigoaksqmwsm => false, Constants::ackcaikowcokggsc => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::kyyscqqmsikeuaea => false, Constants::qwumqqyuasyskkkc => [], Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm => false, ]); $uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]; $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $tsuauommsquiesmk = $ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $askaewqauyueggyc = $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq]; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm]; $cewmysakgwuuigoy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu]; if ($oammesyieqmwuwyi) { goto wisaekiyyweeemuy; } $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq($iwqgomgkuumgyswi, []); wisaekiyyweeemuy: $sogksuscggsicmac = []; if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto oeosugomyqyekmuq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, $askaewqauyueggyc)) { goto gooqkmwgsmseuiwq; } $gqogmkyqeqiwseqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm); if (!($gqogmkyqeqiwseqs && $ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($gqogmkyqeqiwseqs, $ooiewiwkegguusum, true))) { goto meegaqaesckqmyec; } goto emqmqkeygumaasam; meegaqaesckqmyec: if (!($tsuauommsquiesmk && (isset($ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) || isset($ywmkwiwkosakssii[$tsuauommsquiesmk])))) { goto iyocimuyeemkaaso; } $ikeuqaskyceuqgmm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $tsuauommsquiesmk); if (!(isset($ywmkwiwkosakssii[$tsuauommsquiesmk]) && $ywmkwiwkosakssii[$tsuauommsquiesmk] !== $ikeuqaskyceuqgmm)) { goto scccyaiaggeasgqg; } goto emqmqkeygumaasam; scccyaiaggeasgqg: if (!($ikeuqaskyceuqgmm !== $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea])) { goto asueqykmkoaimguq; } goto emqmqkeygumaasam; asueqykmkoaimguq: iyocimuyeemkaaso: if (!$uusmaiomayssaecw && in_array($aqykuigiuwmmcieu, [Constants::emgcgiseaoouacge, Constants::NAME, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu], true)) { goto kcwyeqmysgqkoqcm; } if (!is_callable($ekiuyucoiagmscgy)) { goto isaouwiaamimceeg; } $igqsaukqcqscimok = $ekiuyucoiagmscgy($igqsaukqcqscimok, $ywmkwiwkosakssii); isaouwiaamimceeg: goto wamgcqkaieummksu; kcwyeqmysgqkoqcm: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $cewmysakgwuuigoy); wamgcqkaieummksu: if (!$igqsaukqcqscimok) { goto ugowqoisymsioeye; } if (!($uusmaiomayssaecw && $gqogmkyqeqiwseqs && $gqogmkyqeqiwseqs === $uusmaiomayssaecw)) { goto mwgaaiaswusakkaq; } $sogksuscggsicmac = $igqsaukqcqscimok; goto aosasoogesueygak; mwgaaiaswusakkaq: $sogksuscggsicmac[$gqogmkyqeqiwseqs] = $igqsaukqcqscimok; ugowqoisymsioeye: gooqkmwgsmseuiwq: emqmqkeygumaasam: } aosasoogesueygak: oeosugomyqyekmuq: return $sogksuscggsicmac; } }
