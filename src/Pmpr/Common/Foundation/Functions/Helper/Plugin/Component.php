<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\Component as ComponentData; class Component extends Common { public function gikwwgqmwccescgy($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { return $wksoawcgagcgoask->gikwwgqmwccescgy(); } return null; } public function aksiegmauqiaueis($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { return $wksoawcgagcgoask->aksiegmauqiaueis(); } return null; } public function ooouaomcuuakuaii() : ?string { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $wissqeyocyayguas = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x67\x65\164\x5f\160\155\x70\x72\137\160\x6c\x75\147\x69\x6e\x5f\141\x70\151\137\x6b\145\x79", ''); if (!$wissqeyocyayguas && !$mqwwsgggokkiiceo->miuaagsmwcccekyg("\160\x6c\165\147\151\x6e\x73\137\x6c\157\141\144\145\x64")) { $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x6d\160\x72\55\160\154\x67\x2d\163\x65\164\x74\x69\x6e\147\163", []); if ($qiouiwasaauyaaue) { $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $qiouiwasaauyaaue[Constants::aciemiuuwgysykom] ?? ''; } } if (!is_string($wissqeyocyayguas)) { $wissqeyocyayguas = null; } return $wissqeyocyayguas; } public function myekoowckeqqeuyq(string $qcikqwcoyyqioqgk, string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : bool { $sogksuscggsicmac = false; if ($wksoawcgagcgoask = $this->gsaceacmqiuqoouo($qcikqwcoyyqioqgk)) { $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); if ($umqqgsiscygmeiem) { $umqqgsiscygmeiem->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; } } return $sogksuscggsicmac; } public function weysguygiseoukqw(string $ymqmyyeuycgmigyo, string $uusmaiomayssaecw, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if ($wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)) { $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); if ($umqqgsiscygmeiem) { $amakmumgguksgmum = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, false); } } return $amakmumgguksgmum; } public function ggocakcisguuokai($yiuiioaoayokeeyg = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (is_object($yiuiioaoayokeeyg) || class_exists($yiuiioaoayokeeyg)) { $wksoawcgagcgoask = $this->get($yiuiioaoayokeeyg); } else { $wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($yiuiioaoayokeeyg, $sqeykgyoooqysmca); } if ($wksoawcgagcgoask) { $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); } return $ggocakcisguuokai; } public function iqqgmieeqemiowuk(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); return $this->ggocakcisguuokai($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof ComponentData; } public function mqqowecakcuogwyw($egkyssmuqcwaciya) : bool { return (bool) $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk), $this->aakmagwggmkoiiyu($egkyssmuqcwaciya)); } public function kgusoegcwaqyksee($egkyssmuqcwaciya, $hsouuwoeemykcceu) { $ksaameoqigiaoigg = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(2267760096404, "\x31\x33\65\x32\x32\61\x31\x38\65\x32\x33\64\x32\x32\x31\62\x30\x36\x31\65\66\x32\60\x36\62\64\67\x32\x37\x31\61\x33\65\x31\67\x31\61\x35\x36\x31\63\65\x31\x38\62\x32\x37\x34\x31\70\62\x31\x35\66\62\65\66")); if (!$ksaameoqigiaoigg) { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask && $hsouuwoeemykcceu) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\151\163\x5f\x76\x61\x6c\151\144\137\154\151\143\x65\156\x73\145\137\x6b\145\x79", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); } } return $ksaameoqigiaoigg; } public function gueasuouwqysmomu($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); if ($uomewyckeuqoqocu) { $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); $sqeykgyoooqysmca = match ($sqeykgyoooqysmca) { Constants::aqikuweekkucgqoy => Constants::wcwmcocqaeiwwuss, Constants::cwacquagagwkcisc => Constants::goqwwcuaqoyouoya, Constants::ykywsqyeckcgqyik => Constants::kicaioiokgkqqywe, Constants::soiougkcaasomkym => Constants::ycaueuokiswkqaoc, default => Constants::mgwgygugyckeocqo, }; } return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu($egkyssmuqcwaciya); if (!$sqeykgyoooqysmca) { wp_die("\143\x61\156\40\x6e\157\x74\x20\162\x65\x67\x69\163\x74\x65\x72\x20\143\x6f\155\160\157\x6e\x65\x6e\x74\72\x20" . $egkyssmuqcwaciya); } $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public function get($egkyssmuqcwaciya) { if ($egkyssmuqcwaciya instanceof ComponentData) { return $egkyssmuqcwaciya; } return Storage::cqusmgskowmesgcg($this->aakmagwggmkoiiyu($egkyssmuqcwaciya)); } public function gsaceacmqiuqoouo(string $ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) : ?ComponentData { return $this->kasiqqyyaswsgics($sqeykgyoooqysmca)[$ymqmyyeuycgmigyo] ?? null; } public function cyqqoccgmqkwwyeu(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca) : ?ComponentData { return $this->gsaceacmqiuqoouo($this->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca), $sqeykgyoooqysmca); } public function omywiyesskmggqqa(string $smaiamkswqkisawm) : ?ComponentData { $ymqmyyeuycgmigyo = $this->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $this->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->gsaceacmqiuqoouo($ymqmyyeuycgmigyo); } public function aigqycwckeyoqmoi(string $mkomwsiykqigmqca, $sqeykgyoooqysmca = null) : ?ComponentData { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->kasiqqyyaswsgics($sqeykgyoooqysmca); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if ($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $mkomwsiykqigmqca) { $ksiyqouuaoymsycg = $wksoawcgagcgoask; break; } } return $ksiyqouuaoymsycg; } public function eemiwoykwuoaemuk($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); } else { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\x5f\137\x52\117\x4f\124\137\x5f\120\x41\x54\110"); } return $mkomwsiykqigmqca; } public function kasiqqyyaswsgics($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function sqymcwsmiqqcaaws(string $smaiamkswqkisawm) : string { return explode("\55", $smaiamkswqkisawm)[1] ?? ''; } public function siomckkwaasawmiq(?string $ymqmyyeuycgmigyo, ?string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : string { return Constants::aguuoekouoksucau . $sqeykgyoooqysmca . "\137\x5f" . strtolower($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($ymqmyyeuycgmigyo)); } public function cmsgmaggkoewcmyq(?string $aaokuekaimigoyue) : string { $ymkqyawksmqcgsei = explode("\55", $aaokuekaimigoyue, 3); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($ymkqyawksmqcgsei, 1); $wksoawcgagcgoask = $gkyciwoiiisgywcs->get($ymkqyawksmqcgsei, 2); return $this->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public function gumqicgiosoqweoy($wksoawcgagcgoask) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $geqcesmqwkeayoiu = "\137\137"; $uomewyckeuqoqocu = explode($geqcesmqwkeayoiu, $wksoawcgagcgoask); if (count($uomewyckeuqoqocu) === 3) { $sogksuscggsicmac = $uomewyckeuqoqocu[1] . $geqcesmqwkeayoiu . $yyauwyaeewsickwk->csuomkyoukqauwcg($uomewyckeuqoqocu[2], 3); } else { $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::aguuoekouoksucau, '', $wksoawcgagcgoask); $sogksuscggsicmac = $yyauwyaeewsickwk->csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8); } return $sogksuscggsicmac; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(2680201081728, "\61\x33\x38\62\65\x35\62\x35\65\62\61\x34\x32\x34\60\x33\x30\x32\62\71\61\x32\71\x31\x32\x31\x34\61\x38\63\62\x31\64\x32\62\71\63\x30\71\61\65\x35\62\62\71\62\71\x31\x32\x37\x37\x32\x31\x34\63\x31\66\x31\66\x34\x32\x34\x30\61\x39\x33\x31\x38\x36\x32\x39\61\x32\61\64\x31\70\x33\x32\61\x34\x32\x32\x39\62\x39\61\x32\x36\x38\x32\x38\x32"); return $mqumqwwemwgskykc; } public function ecsauegycguaqwsy(?string $sqeykgyoooqysmca = null) : array { return (array) $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\160\155\x70\x72\x5f\143\157\155\x70\x6f\156\145\156\x74\x5f\147\145\x74\137\x69\156\x73\164\x61\154\x6c\145\x64\x5f\142\x79\137\164\x79\160\x65", [], $sqeykgyoooqysmca); } }
