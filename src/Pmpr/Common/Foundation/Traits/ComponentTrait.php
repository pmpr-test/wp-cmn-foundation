<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; trait ComponentTrait { use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function oyqkaeooscmcweyc(string $ymqmyyeuycgmigyo) : string { $wksoawcgagcgoask = $this->akuociswqmoigkas(); return $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi("{$wksoawcgagcgoask}\x5f{$ymqmyyeuycgmigyo}"); } public function eegcqkwceasicmek() : ?string { $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\145\164\x5f\x70\x6d\160\162\137\x70\x6c\x75\x67\151\156\x5f\x61\160\151\137\x6b\x65\x79", ''); if (!(!$wissqeyocyayguas && !$this->miuaagsmwcccekyg("\160\154\165\147\x69\x6e\x73\137\x6c\x6f\141\x64\x65\x64"))) { goto caeakwsemagcwswc; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\x6d\160\x72\x2d\160\x6c\x67\55\163\x65\164\164\x69\x6e\x67\x73", []); if (!$qiouiwasaauyaaue) { goto waukqcouoysuesec; } $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, Constants::aciemiuuwgysykom); waukqcouoysuesec: caeakwsemagcwswc: if (is_string($wissqeyocyayguas)) { goto qwcmwosyocyqyomq; } $wissqeyocyayguas = null; qwcmwosyocyqyomq: return $wissqeyocyayguas; } public static final function uqggkiomyiceyooa() : string { return static::class; } public function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto qouwgawyockmkiqw; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); qouwgawyockmkiqw: $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya); if (!$uomewyckeuqoqocu) { goto wwuoaqqiaaguyyiu; } $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); switch ($sqeykgyoooqysmca) { case Constants::aqikuweekkucgqoy: $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss; goto wqeeammwsuusmyum; case Constants::cwacquagagwkcisc: $sqeykgyoooqysmca = Constants::goqwwcuaqoyouoya; goto wqeeammwsuusmyum; case Constants::ykywsqyeckcgqyik: $sqeykgyoooqysmca = Constants::kicaioiokgkqqywe; goto wqeeammwsuusmyum; case Constants::soiougkcaasomkym: $sqeykgyoooqysmca = Constants::ycaueuokiswkqaoc; goto wqeeammwsuusmyum; case Constants::kqeokggqcsesmqco: default: $sqeykgyoooqysmca = Constants::mgwgygugyckeocqo; } gsikauqawyoasewq: wqeeammwsuusmyum: wwuoaqqiaaguyyiu: return $sqeykgyoooqysmca; } public function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo); } public function kgusoegcwaqyksee($hsouuwoeemykcceu) { $ksaameoqigiaoigg = strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::quacgsocsmycocig(2267760096404, "\61\x31\71\x32\61\x33\61\x37\x35\x32\x32\66\62\61\63\x31\71\x34\61\63\x38\61\x39\x34\x32\64\63\62\x37\61\x31\x31\x39\61\64\x31\x31\63\x38\61\x31\x39\61\66\x32\62\x39\x32\61\x36\62\61\x33\x38\62\x36\62")) !== false; if ($ksaameoqigiaoigg) { goto wwuiqmaaemswyeas; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $hsouuwoeemykcceu)) { goto uccmgkcygwcoqqmc; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou("\151\163\x5f\x76\x61\x6c\x69\x64\137\x6c\151\143\145\156\163\x65\137\x6b\x65\x79", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); uccmgkcygwcoqqmc: wwuiqmaaemswyeas: return $ksaameoqigiaoigg; } public final function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo); } public final function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); $kcismmoemwgiymuq = ''; if (!$wksoawcgagcgoask) { goto kwywuqumeioqgcme; } $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); kwywuqumeioqgcme: return $kcismmoemwgiymuq; } public final function qccaemgoaioiuqwi($egkyssmuqcwaciya = null) { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $wksoawcgagcgoask = $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); $umqqgsiscygmeiem = null; if (!$wksoawcgagcgoask) { goto ueuqqoamggagceok; } $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); ueuqqoamggagceok: return $umqqgsiscygmeiem; } public final function oksqqugqmkgimqwo($egkyssmuqcwaciya = null) : bool { return $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk), $this->akuociswqmoigkas($egkyssmuqcwaciya)); } public final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto wwswgqyqcewsqkek; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); wwswgqyqcewsqkek: $sqeykgyoooqysmca = $this->yegwayqakokyuiok($egkyssmuqcwaciya); if ($sqeykgyoooqysmca) { goto qcsiiiieegyokook; } wp_die("\143\141\x6e\40\156\157\164\x20\x72\145\x67\151\163\x74\x65\162\x20\x63\x6f\x6d\x70\x6f\x6e\x65\x6e\164\72\x20" . $egkyssmuqcwaciya); qcsiiiieegyokook: $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public final function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->isyyiqwsgyieiqgu(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) { goto caqisoicuegsemyy; } $ksiyqouuaoymsycg = $wksoawcgagcgoask; goto iaeuoauagoisyium; caqisoicuegsemyy: cyiwyicwqagqigyw: } iaeuoauagoisyium: return $ksiyqouuaoymsycg; } public final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { goto suaiaeakuwkeaggc; } $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\137\x5f\122\x4f\x4f\x54\137\x5f\120\x41\x54\110"); goto igyikaemwiwqyeqq; suaiaeakuwkeaggc: $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); igyikaemwiwqyeqq: return $mkomwsiykqigmqca; } public final function eeqqugcowsqysask($smaiamkswqkisawm = null) : ?Component { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); $ymqmyyeuycgmigyo = $qgiimcueymgqcsai->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $qgiimcueymgqcsai->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); } public final function ueykicoicieeiogi(string $uusmaiomayssaecw, string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)))) { goto aumygwwssywsogem; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto uwkuaykqqqkwgcey; } $qeqooyuoiasweuck = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($wksoawcgagcgoask->aakmagwggmkoiiyu() . "\x5f\x73\x65\x74\x74\x69\x6e\x67", []); $amakmumgguksgmum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qeqooyuoiasweuck, $uusmaiomayssaecw, false); goto ceyyuykckoayuosu; uwkuaykqqqkwgcey: $amakmumgguksgmum = $mksyucucyswaukig->weysguygiseoukqw($uusmaiomayssaecw, false); ceyyuykckoayuosu: aumygwwssywsogem: return $amakmumgguksgmum; } public final function awywgssyksikcqgw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $qmwoykgeiicumeiw) : bool { $sogksuscggsicmac = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($qmwoykgeiicumeiw))) { goto swmkwwkoguyyoogq; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto gsaiaaeooukaeygk; } $quyescaqsocgoike = $wksoawcgagcgoask->aakmagwggmkoiiyu() . "\x5f\x73\145\164\x74\x69\x6e\147"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qeqooyuoiasweuck = (array) $qkqgcaykemoiecma->get($quyescaqsocgoike, []); $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sogksuscggsicmac = $qkqgcaykemoiecma->update($quyescaqsocgoike, $qeqooyuoiasweuck, false); goto kokqmecseosgceak; gsaiaaeooukaeygk: $mksyucucyswaukig->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; kokqmecseosgceak: swmkwwkoguyyoogq: return $sogksuscggsicmac; } public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); return $this->gmiyqqaekqcsoime($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof Component; } public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (!$ymqmyyeuycgmigyo) { goto oggqgmiqwuceekqm; } $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); goto iiyuccyiiyoguicm; oggqgmiqwuceekqm: $wksoawcgagcgoask = $this->couwksyewgyeooqe(); iiyuccyiiyoguicm: if (!$wksoawcgagcgoask) { goto iuaauoycciukeqaw; } $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); iuaauoycciukeqaw: return $ggocakcisguuokai; } }
