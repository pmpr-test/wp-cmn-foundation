<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8341d2d030             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\Component as ComponentData; class Component extends Common { public function gikwwgqmwccescgy($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { return $wksoawcgagcgoask->gikwwgqmwccescgy(); } return null; } public function aksiegmauqiaueis($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { return $wksoawcgagcgoask->aksiegmauqiaueis(); } return null; } public function ooouaomcuuakuaii() : ?string { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $wissqeyocyayguas = $mqwwsgggokkiiceo->sscegwueamckwmcy('get_pmpr_plugin_api_key', ''); if (!$wissqeyocyayguas && !$mqwwsgggokkiiceo->miuaagsmwcccekyg('plugins_loaded')) { $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('pmpr-plg-settings', []); if ($qiouiwasaauyaaue) { $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $qiouiwasaauyaaue[Constants::aciemiuuwgysykom] ?? ''; } } if (!is_string($wissqeyocyayguas)) { $wissqeyocyayguas = null; } return $wissqeyocyayguas; } public function myekoowckeqqeuyq(string $qcikqwcoyyqioqgk, string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : bool { $sogksuscggsicmac = false; if ($wksoawcgagcgoask = $this->gsaceacmqiuqoouo($qcikqwcoyyqioqgk)) { $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); if ($umqqgsiscygmeiem) { $umqqgsiscygmeiem->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; } } return $sogksuscggsicmac; } public function weysguygiseoukqw(string $ymqmyyeuycgmigyo, string $uusmaiomayssaecw, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if ($wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)) { $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); if ($umqqgsiscygmeiem) { $amakmumgguksgmum = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, false); } } return $amakmumgguksgmum; } public function ggocakcisguuokai($yiuiioaoayokeeyg = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (is_object($yiuiioaoayokeeyg) || class_exists($yiuiioaoayokeeyg)) { $wksoawcgagcgoask = $this->get($yiuiioaoayokeeyg); } else { $wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($yiuiioaoayokeeyg, $sqeykgyoooqysmca); } if ($wksoawcgagcgoask) { $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); } return $ggocakcisguuokai; } public function iqqgmieeqemiowuk(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); return $this->ggocakcisguuokai($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof ComponentData; } public function mqqowecakcuogwyw($egkyssmuqcwaciya) : bool { return (bool) $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk), $this->aakmagwggmkoiiyu($egkyssmuqcwaciya)); } public function kgusoegcwaqyksee($egkyssmuqcwaciya, $hsouuwoeemykcceu) { $ksaameoqigiaoigg = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(2267760096404, "\61\62\67\62\x30\67\61\67\71\62\x32\x32\x32\60\x37\61\x39\66\x31\x34\x30\61\x39\x36\62\63\61\x32\x36\x31\x31\62\x37\61\x34\67\x31\64\60\61\x32\67\61\66\62\62\67\x32\x31\66\62\x31\64\60\x32\x34\66")); if (!$ksaameoqigiaoigg) { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask && $hsouuwoeemykcceu) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('is_valid_license_key', false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); } } return $ksaameoqigiaoigg; } public function gueasuouwqysmomu($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode('\\', $egkyssmuqcwaciya); if ($uomewyckeuqoqocu) { $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); $sqeykgyoooqysmca = match ($sqeykgyoooqysmca) { Constants::aqikuweekkucgqoy => Constants::wcwmcocqaeiwwuss, Constants::cwacquagagwkcisc => Constants::goqwwcuaqoyouoya, Constants::ykywsqyeckcgqyik => Constants::kicaioiokgkqqywe, Constants::soiougkcaasomkym => Constants::ycaueuokiswkqaoc, default => Constants::mgwgygugyckeocqo, }; } return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($egkyssmuqcwaciya, bool $eoeaecycamamwkea = true) : string { if (is_object($egkyssmuqcwaciya)) { if ($egkyssmuqcwaciya instanceof ComponentData) { return $egkyssmuqcwaciya->aakmagwggmkoiiyu(); } $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu($egkyssmuqcwaciya); if (!$sqeykgyoooqysmca) { wp_die('can not register component: ' . $egkyssmuqcwaciya); } $uomewyckeuqoqocu = explode('\\', $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca, $eoeaecycamamwkea); } public function get($egkyssmuqcwaciya) { if ($egkyssmuqcwaciya instanceof ComponentData) { return $egkyssmuqcwaciya; } return Storage::cqusmgskowmesgcg($this->aakmagwggmkoiiyu($egkyssmuqcwaciya)); } public function gsaceacmqiuqoouo(string $ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) : ?ComponentData { return $this->kasiqqyyaswsgics($sqeykgyoooqysmca)[$ymqmyyeuycgmigyo] ?? null; } public function cyqqoccgmqkwwyeu(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca) : ?ComponentData { return $this->gsaceacmqiuqoouo($this->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca), $sqeykgyoooqysmca); } public function omywiyesskmggqqa(string $smaiamkswqkisawm) : ?ComponentData { $ymqmyyeuycgmigyo = $this->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, '-', 3) + 1), $this->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->gsaceacmqiuqoouo($ymqmyyeuycgmigyo); } public function aigqycwckeyoqmoi(string $mkomwsiykqigmqca, $sqeykgyoooqysmca = null) : ?ComponentData { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->kasiqqyyaswsgics($sqeykgyoooqysmca); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if ($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $mkomwsiykqigmqca) { $ksiyqouuaoymsycg = $wksoawcgagcgoask; break; } } return $ksiyqouuaoymsycg; } public function eemiwoykwuoaemuk($egkyssmuqcwaciya) : ?string { $wksoawcgagcgoask = $this->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); } else { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . '__ROOT__PATH'); } return $mkomwsiykqigmqca; } public function kasiqqyyaswsgics($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function sqymcwsmiqqcaaws(string $smaiamkswqkisawm) : string { return explode('-', $smaiamkswqkisawm)[1] ?? ''; } public function siomckkwaasawmiq(?string $ymqmyyeuycgmigyo, ?string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $eoeaecycamamwkea = true) : string { $fkgqmwkusywysaus = $sqeykgyoooqysmca . "__" . strtolower($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($ymqmyyeuycgmigyo)); if ($eoeaecycamamwkea) { $fkgqmwkusywysaus = Constants::aguuoekouoksucau . $fkgqmwkusywysaus; } return $fkgqmwkusywysaus; } public function cmsgmaggkoewcmyq(?string $aaokuekaimigoyue) : string { $ymkqyawksmqcgsei = explode('-', $aaokuekaimigoyue, 3); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($ymkqyawksmqcgsei, 1); $wksoawcgagcgoask = $gkyciwoiiisgywcs->get($ymkqyawksmqcgsei, 2); return $this->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public function gumqicgiosoqweoy($wksoawcgagcgoask) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $geqcesmqwkeayoiu = '__'; $uomewyckeuqoqocu = explode($geqcesmqwkeayoiu, $wksoawcgagcgoask); if (count($uomewyckeuqoqocu) === 3) { $sogksuscggsicmac = $uomewyckeuqoqocu[1] . $geqcesmqwkeayoiu . $yyauwyaeewsickwk->csuomkyoukqauwcg($uomewyckeuqoqocu[2], 3); } else { $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::aguuoekouoksucau, '', $wksoawcgagcgoask); $sogksuscggsicmac = $yyauwyaeewsickwk->csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8); } return $sogksuscggsicmac; } public function swyekyumuyeuouwi() : string { $mqumqwwemwgskykc = self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(2680201081728, "\x31\64\70\x32\x36\67\62\x36\67\62\x33\x30\62\x36\x30\x33\61\62\x33\x30\65\63\x30\65\62\x33\60\x31\70\x37\x32\x33\x30\x32\64\x39\63\63\x33\61\x35\67\x32\x34\71\x33\60\65\62\x39\65\62\63\60\63\64\64\61\x37\x34\x32\x36\x30\x32\61\x31\62\x30\66\x33\60\65\x32\63\60\x31\70\x37\62\x33\60\x32\64\x39\63\60\65\62\x38\x38\x32\71\70"); return $mqumqwwemwgskykc; } public function ecsauegycguaqwsy(?string $sqeykgyoooqysmca = null) : array { return (array) $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('pmpr_component_get_installed_by_type', [], $sqeykgyoooqysmca); } }
