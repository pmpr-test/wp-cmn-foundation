<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; trait ComponentTrait { use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function oyqkaeooscmcweyc(string $ymqmyyeuycgmigyo) : string { $wksoawcgagcgoask = $this->akuociswqmoigkas(); return $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi("{$wksoawcgagcgoask}\x5f{$ymqmyyeuycgmigyo}"); } public function eegcqkwceasicmek() : ?string { $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\145\x74\x5f\x70\x6d\x70\162\137\160\x6c\x75\147\151\x6e\x5f\141\160\x69\137\x6b\x65\171", ''); if (!(!$wissqeyocyayguas && !$this->miuaagsmwcccekyg("\x70\x6c\x75\x67\x69\x6e\163\137\x6c\157\x61\144\145\x64"))) { goto qwcmwosyocyqyomq; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x6d\x70\x72\55\160\x6c\x67\x2d\x73\x65\x74\164\x69\x6e\147\163", []); if (!$qiouiwasaauyaaue) { goto caeakwsemagcwswc; } $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, Constants::aciemiuuwgysykom); caeakwsemagcwswc: qwcmwosyocyqyomq: if (is_string($wissqeyocyayguas)) { goto qouwgawyockmkiqw; } $wissqeyocyayguas = null; qouwgawyockmkiqw: return $wissqeyocyayguas; } public static final function uqggkiomyiceyooa() : string { return static::class; } public function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto wqeeammwsuusmyum; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); wqeeammwsuusmyum: $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); if (!$uomewyckeuqoqocu) { goto uccmgkcygwcoqqmc; } $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); switch ($sqeykgyoooqysmca) { case Constants::aqikuweekkucgqoy: $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss; goto gsikauqawyoasewq; case Constants::cwacquagagwkcisc: $sqeykgyoooqysmca = Constants::goqwwcuaqoyouoya; goto gsikauqawyoasewq; case Constants::ykywsqyeckcgqyik: $sqeykgyoooqysmca = Constants::kicaioiokgkqqywe; goto gsikauqawyoasewq; case Constants::soiougkcaasomkym: $sqeykgyoooqysmca = Constants::ycaueuokiswkqaoc; goto gsikauqawyoasewq; case Constants::kqeokggqcsesmqco: default: $sqeykgyoooqysmca = Constants::mgwgygugyckeocqo; } wwuoaqqiaaguyyiu: gsikauqawyoasewq: uccmgkcygwcoqqmc: return $sqeykgyoooqysmca; } public function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo); } public function kgusoegcwaqyksee($hsouuwoeemykcceu) { $ksaameoqigiaoigg = strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::quacgsocsmycocig(2267760096404, "\x31\x31\x30\x31\67\66\61\x35\x34\x31\x39\61\x31\x37\66\x31\66\x33\x31\x31\x39\x31\x36\x33\x32\60\62\62\x34\60\61\x31\60\x31\62\66\x31\x31\71\61\x31\60\x31\64\x33\x32\x35\x35\x31\64\63\61\61\71\x32\x32\63")) !== false; if ($ksaameoqigiaoigg) { goto kwywuqumeioqgcme; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $hsouuwoeemykcceu)) { goto wwuiqmaaemswyeas; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou("\x69\163\x5f\x76\x61\154\x69\x64\x5f\x6c\151\x63\145\156\163\145\x5f\x6b\x65\x79", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); wwuiqmaaemswyeas: kwywuqumeioqgcme: return $ksaameoqigiaoigg; } public final function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo); } public final function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); $kcismmoemwgiymuq = ''; if (!$wksoawcgagcgoask) { goto ueuqqoamggagceok; } $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); ueuqqoamggagceok: return $kcismmoemwgiymuq; } public final function qccaemgoaioiuqwi($egkyssmuqcwaciya = null) { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $wksoawcgagcgoask = $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); $umqqgsiscygmeiem = null; if (!$wksoawcgagcgoask) { goto wwswgqyqcewsqkek; } $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); wwswgqyqcewsqkek: return $umqqgsiscygmeiem; } public final function oksqqugqmkgimqwo($egkyssmuqcwaciya = null) : bool { return $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk), $this->akuociswqmoigkas($egkyssmuqcwaciya)); } public final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto qcsiiiieegyokook; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); qcsiiiieegyokook: $sqeykgyoooqysmca = $this->yegwayqakokyuiok($egkyssmuqcwaciya); if ($sqeykgyoooqysmca) { goto iaeuoauagoisyium; } wp_die("\143\141\x6e\40\156\x6f\x74\x20\x72\145\x67\151\x73\164\145\x72\40\143\x6f\155\x70\x6f\156\145\x6e\164\x3a\40" . $egkyssmuqcwaciya); iaeuoauagoisyium: $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public final function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->isyyiqwsgyieiqgu(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) { goto suaiaeakuwkeaggc; } $ksiyqouuaoymsycg = $wksoawcgagcgoask; goto cyiwyicwqagqigyw; suaiaeakuwkeaggc: caqisoicuegsemyy: } cyiwyicwqagqigyw: return $ksiyqouuaoymsycg; } public final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { goto igyikaemwiwqyeqq; } $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\137\137\122\x4f\117\124\x5f\137\x50\101\124\x48"); goto uwkuaykqqqkwgcey; igyikaemwiwqyeqq: $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); uwkuaykqqqkwgcey: return $mkomwsiykqigmqca; } public final function eeqqugcowsqysask($smaiamkswqkisawm = null) : ?Component { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); $ymqmyyeuycgmigyo = $qgiimcueymgqcsai->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $qgiimcueymgqcsai->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); } public final function ueykicoicieeiogi(string $uusmaiomayssaecw, string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)))) { goto gsaiaaeooukaeygk; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto ceyyuykckoayuosu; } $qeqooyuoiasweuck = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($wksoawcgagcgoask->aakmagwggmkoiiyu() . "\137\x73\x65\x74\164\151\x6e\x67", []); $amakmumgguksgmum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qeqooyuoiasweuck, $uusmaiomayssaecw, false); goto aumygwwssywsogem; ceyyuykckoayuosu: $amakmumgguksgmum = $mksyucucyswaukig->weysguygiseoukqw($uusmaiomayssaecw, false); aumygwwssywsogem: gsaiaaeooukaeygk: return $amakmumgguksgmum; } public final function awywgssyksikcqgw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $qmwoykgeiicumeiw) : bool { $sogksuscggsicmac = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($qmwoykgeiicumeiw))) { goto oggqgmiqwuceekqm; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto kokqmecseosgceak; } $quyescaqsocgoike = $wksoawcgagcgoask->aakmagwggmkoiiyu() . "\137\163\x65\164\164\151\156\147"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qeqooyuoiasweuck = (array) $qkqgcaykemoiecma->get($quyescaqsocgoike, []); $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sogksuscggsicmac = $qkqgcaykemoiecma->update($quyescaqsocgoike, $qeqooyuoiasweuck, false); goto swmkwwkoguyyoogq; kokqmecseosgceak: $mksyucucyswaukig->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; swmkwwkoguyyoogq: oggqgmiqwuceekqm: return $sogksuscggsicmac; } public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); return $this->gmiyqqaekqcsoime($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof Component; } public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (!$ymqmyyeuycgmigyo) { goto iiyuccyiiyoguicm; } $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); goto iuaauoycciukeqaw; iiyuccyiiyoguicm: $wksoawcgagcgoask = $this->couwksyewgyeooqe(); iuaauoycciukeqaw: if (!$wksoawcgagcgoask) { goto amegcwiaikcwyuws; } $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); amegcwiaikcwyuws: return $ggocakcisguuokai; } }
