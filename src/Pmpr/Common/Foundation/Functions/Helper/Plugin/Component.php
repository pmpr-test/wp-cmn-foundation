<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052a91f300e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\Component as ComponentData; class Component extends Common { public function gikwwgqmwccescgy($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { return $wksoawcgagcgoask->gikwwgqmwccescgy(); } return null; } public function aksiegmauqiaueis($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { return $wksoawcgagcgoask->aksiegmauqiaueis(); } return null; } public function ooouaomcuuakuaii() : ?string { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $wissqeyocyayguas = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x67\x65\164\137\160\155\x70\162\137\x70\154\165\147\x69\156\137\x61\160\x69\137\x6b\x65\171", ''); if (!$wissqeyocyayguas && !$mqwwsgggokkiiceo->miuaagsmwcccekyg("\x70\x6c\x75\147\151\156\163\x5f\154\157\x61\x64\x65\144")) { $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\155\160\162\x2d\x70\154\x67\x2d\163\145\x74\164\x69\x6e\x67\163", []); if ($qiouiwasaauyaaue) { $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $qiouiwasaauyaaue[Constants::aciemiuuwgysykom] ?? ''; } } if (!is_string($wissqeyocyayguas)) { $wissqeyocyayguas = null; } return $wissqeyocyayguas; } public function myekoowckeqqeuyq(string $qcikqwcoyyqioqgk, string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : bool { $sogksuscggsicmac = false; if ($wksoawcgagcgoask = $this->gsaceacmqiuqoouo($qcikqwcoyyqioqgk)) { $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); if ($umqqgsiscygmeiem) { $umqqgsiscygmeiem->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; } } return $sogksuscggsicmac; } public function weysguygiseoukqw(string $ymqmyyeuycgmigyo, string $uusmaiomayssaecw, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if ($wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)) { $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); if ($umqqgsiscygmeiem) { $amakmumgguksgmum = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, false); } } return $amakmumgguksgmum; } public function ggocakcisguuokai($yiuiioaoayokeeyg = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (is_object($yiuiioaoayokeeyg) || class_exists($yiuiioaoayokeeyg)) { $wksoawcgagcgoask = $this->get($yiuiioaoayokeeyg); } else { $wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($yiuiioaoayokeeyg, $sqeykgyoooqysmca); } if ($wksoawcgagcgoask) { $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); } return $ggocakcisguuokai; } public function iqqgmieeqemiowuk(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); return $this->ggocakcisguuokai($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof ComponentData; } public function mqqowecakcuogwyw($egkyssmuqcwaciya) : bool { return (bool) $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk), $this->aakmagwggmkoiiyu($egkyssmuqcwaciya)); } public function kgusoegcwaqyksee($egkyssmuqcwaciya, $hsouuwoeemykcceu) { $ksaameoqigiaoigg = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::quacgsocsmycocig(2267760096404, "\x31\61\x38\x32\x32\60\61\x38\60\62\x32\67\x32\62\x30\62\60\x31\x31\63\63\62\60\x31\62\64\66\x32\66\x34\61\x31\70\x31\65\62\x31\63\63\61\61\x38\61\x37\63\62\66\x39\x31\x37\63\x31\63\x33\x32\x36\61")); if (!$ksaameoqigiaoigg) { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask && $hsouuwoeemykcceu) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x69\x73\x5f\x76\x61\x6c\151\x64\137\x6c\151\x63\x65\156\x73\x65\137\153\x65\171", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); } } return $ksaameoqigiaoigg; } public function gueasuouwqysmomu($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya); if ($uomewyckeuqoqocu) { $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); $sqeykgyoooqysmca = match ($sqeykgyoooqysmca) { Constants::aqikuweekkucgqoy => Constants::wcwmcocqaeiwwuss, Constants::cwacquagagwkcisc => Constants::goqwwcuaqoyouoya, Constants::ykywsqyeckcgqyik => Constants::kicaioiokgkqqywe, Constants::soiougkcaasomkym => Constants::ycaueuokiswkqaoc, default => Constants::mgwgygugyckeocqo, }; } return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu($egkyssmuqcwaciya); if (!$sqeykgyoooqysmca) { wp_die("\x63\x61\x6e\x20\156\x6f\164\x20\162\145\147\151\163\x74\x65\x72\40\x63\x6f\x6d\x70\x6f\x6e\x65\156\164\x3a\40" . $egkyssmuqcwaciya); } $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public function get($egkyssmuqcwaciya) { if ($egkyssmuqcwaciya instanceof ComponentData) { return $egkyssmuqcwaciya; } return Storage::cqusmgskowmesgcg($this->aakmagwggmkoiiyu($egkyssmuqcwaciya)); } public function gsaceacmqiuqoouo(string $ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) : ?ComponentData { return $this->kasiqqyyaswsgics($sqeykgyoooqysmca)[$ymqmyyeuycgmigyo] ?? null; } public function cyqqoccgmqkwwyeu(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca) : ?ComponentData { return $this->gsaceacmqiuqoouo($this->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca), $sqeykgyoooqysmca); } public function omywiyesskmggqqa(string $smaiamkswqkisawm) : ?ComponentData { $ymqmyyeuycgmigyo = $this->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $this->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->gsaceacmqiuqoouo($ymqmyyeuycgmigyo); } public function aigqycwckeyoqmoi(string $mkomwsiykqigmqca, $sqeykgyoooqysmca = null) : ?ComponentData { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->kasiqqyyaswsgics($sqeykgyoooqysmca); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if ($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $mkomwsiykqigmqca) { $ksiyqouuaoymsycg = $wksoawcgagcgoask; break; } } return $ksiyqouuaoymsycg; } public function eemiwoykwuoaemuk($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); } else { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\137\x5f\122\x4f\117\124\137\x5f\120\x41\x54\110"); } return $mkomwsiykqigmqca; } public function kasiqqyyaswsgics($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function sqymcwsmiqqcaaws(string $smaiamkswqkisawm) : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get(explode("\55", $smaiamkswqkisawm), 1, ''); } public function siomckkwaasawmiq(?string $ymqmyyeuycgmigyo, ?string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : string { return Constants::aguuoekouoksucau . $sqeykgyoooqysmca . "\137\x5f" . strtolower($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($ymqmyyeuycgmigyo)); } public function cmsgmaggkoewcmyq(?string $aaokuekaimigoyue) : string { $ymkqyawksmqcgsei = explode("\55", $aaokuekaimigoyue, 3); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($ymkqyawksmqcgsei, 1); $wksoawcgagcgoask = $gkyciwoiiisgywcs->get($ymkqyawksmqcgsei, 2); return $this->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public function gumqicgiosoqweoy($wksoawcgagcgoask) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $geqcesmqwkeayoiu = "\x5f\x5f"; $uomewyckeuqoqocu = explode($geqcesmqwkeayoiu, $wksoawcgagcgoask); if (count($uomewyckeuqoqocu) === 3) { $sogksuscggsicmac = $uomewyckeuqoqocu[1] . $geqcesmqwkeayoiu . $yyauwyaeewsickwk->csuomkyoukqauwcg($uomewyckeuqoqocu[2], 3); } else { $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::aguuoekouoksucau, '', $wksoawcgagcgoask); $sogksuscggsicmac = $yyauwyaeewsickwk->csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8); } return $sogksuscggsicmac; } }
