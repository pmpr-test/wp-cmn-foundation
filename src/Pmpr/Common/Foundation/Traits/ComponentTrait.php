<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; trait ComponentTrait { use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function oyqkaeooscmcweyc(string $ymqmyyeuycgmigyo) : string { $wksoawcgagcgoask = $this->akuociswqmoigkas(); return $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi("{$wksoawcgagcgoask}\x5f{$ymqmyyeuycgmigyo}"); } public function eegcqkwceasicmek() : ?string { $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\x65\x74\137\x70\x6d\160\x72\137\160\154\165\147\x69\156\137\x61\160\151\x5f\x6b\145\171", ''); if (!(!$wissqeyocyayguas && !$this->miuaagsmwcccekyg("\x70\154\x75\x67\x69\x6e\163\137\x6c\x6f\141\x64\x65\x64"))) { goto yumwmakewcuceeeq; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\155\x70\x72\55\160\154\x67\x2d\x73\145\x74\x74\151\x6e\x67\x73", []); if (!$qiouiwasaauyaaue) { goto ymaiyayeueqekkqu; } $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, Constants::aciemiuuwgysykom); ymaiyayeueqekkqu: yumwmakewcuceeeq: if (is_string($wissqeyocyayguas)) { goto iksqmycekaokseuk; } $wissqeyocyayguas = null; iksqmycekaokseuk: return $wissqeyocyayguas; } public static final function uqggkiomyiceyooa() : string { return static::class; } public function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto yoikmmqgsuecwqse; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); yoikmmqgsuecwqse: $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); if (!$uomewyckeuqoqocu) { goto yamoqmeywqamiyee; } $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); switch ($sqeykgyoooqysmca) { case Constants::aqikuweekkucgqoy: $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss; goto emwgmewoyckawiaa; case Constants::cwacquagagwkcisc: $sqeykgyoooqysmca = Constants::goqwwcuaqoyouoya; goto emwgmewoyckawiaa; case Constants::ykywsqyeckcgqyik: $sqeykgyoooqysmca = Constants::kicaioiokgkqqywe; goto emwgmewoyckawiaa; case Constants::soiougkcaasomkym: $sqeykgyoooqysmca = Constants::ycaueuokiswkqaoc; goto emwgmewoyckawiaa; case Constants::kqeokggqcsesmqco: default: $sqeykgyoooqysmca = Constants::mgwgygugyckeocqo; } ouiwcwgymiycmesy: emwgmewoyckawiaa: yamoqmeywqamiyee: return $sqeykgyoooqysmca; } public function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo); } public function kgusoegcwaqyksee($hsouuwoeemykcceu) { $ksaameoqigiaoigg = strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::quacgsocsmycocig(2267760096404, "\61\x33\x30\62\x31\x30\x31\x39\x36\62\x32\61\x32\x31\60\62\x30\x33\x31\65\x31\62\x30\x33\x32\64\60\62\x36\x32\61\x33\x30\61\x36\60\x31\x35\x31\x31\63\60\x31\70\61\62\x36\x35\61\70\x31\61\65\x31\62\x35\x35")) !== false; if ($ksaameoqigiaoigg) { goto gsscqquysycuswow; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $hsouuwoeemykcceu)) { goto eisoouawyymkasou; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou("\x69\163\x5f\x76\x61\154\151\x64\137\x6c\x69\143\145\x6e\163\x65\137\153\145\x79", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); eisoouawyymkasou: gsscqquysycuswow: return $ksaameoqigiaoigg; } public final function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo); } public final function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); $kcismmoemwgiymuq = ''; if (!$wksoawcgagcgoask) { goto uwcgosckamuosimw; } $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); uwcgosckamuosimw: return $kcismmoemwgiymuq; } public final function qccaemgoaioiuqwi($egkyssmuqcwaciya = null) { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $wksoawcgagcgoask = $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); $umqqgsiscygmeiem = null; if (!$wksoawcgagcgoask) { goto quycsusswssyiqek; } $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); quycsusswssyiqek: return $umqqgsiscygmeiem; } public final function oksqqugqmkgimqwo($egkyssmuqcwaciya = null) : bool { return $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk), $this->akuociswqmoigkas($egkyssmuqcwaciya)); } public final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto cmogamoiwugoaaoo; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); cmogamoiwugoaaoo: $sqeykgyoooqysmca = $this->yegwayqakokyuiok($egkyssmuqcwaciya); if ($sqeykgyoooqysmca) { goto ycuksimueyoeugmi; } wp_die("\143\x61\x6e\x20\x6e\157\x74\x20\x72\x65\147\151\x73\x74\x65\x72\x20\x63\x6f\x6d\160\157\156\x65\156\x74\x3a\x20" . $egkyssmuqcwaciya); ycuksimueyoeugmi: $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public final function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->isyyiqwsgyieiqgu(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) { goto scioecswaikeacmy; } $ksiyqouuaoymsycg = $wksoawcgagcgoask; goto iayqwwsmsuwaykyw; scioecswaikeacmy: gaqweioagqyciyaw: } iayqwwsmsuwaykyw: return $ksiyqouuaoymsycg; } public final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { goto uyaweoaaqsagsqyi; } $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\x5f\137\122\x4f\x4f\x54\137\137\120\101\x54\x48"); goto swuwwcumqwckimwy; uyaweoaaqsagsqyi: $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); swuwwcumqwckimwy: return $mkomwsiykqigmqca; } public final function eeqqugcowsqysask($smaiamkswqkisawm = null) : ?Component { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); $ymqmyyeuycgmigyo = $qgiimcueymgqcsai->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $qgiimcueymgqcsai->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); } public final function ueykicoicieeiogi(string $uusmaiomayssaecw, string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)))) { goto gmskkukiiwweocwi; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto qsqwywcesyquykqq; } $qeqooyuoiasweuck = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($wksoawcgagcgoask->aakmagwggmkoiiyu() . "\x5f\163\x65\164\164\151\156\147", []); $amakmumgguksgmum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qeqooyuoiasweuck, $uusmaiomayssaecw, false); goto kqscgsuaugsiwiwi; qsqwywcesyquykqq: $amakmumgguksgmum = $mksyucucyswaukig->weysguygiseoukqw($uusmaiomayssaecw, false); kqscgsuaugsiwiwi: gmskkukiiwweocwi: return $amakmumgguksgmum; } public final function awywgssyksikcqgw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $qmwoykgeiicumeiw) : bool { $sogksuscggsicmac = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($qmwoykgeiicumeiw))) { goto mckkqgseimcgkcgu; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto uqamuckwuksquqia; } $quyescaqsocgoike = $wksoawcgagcgoask->aakmagwggmkoiiyu() . "\x5f\163\145\164\164\151\x6e\x67"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qeqooyuoiasweuck = (array) $qkqgcaykemoiecma->get($quyescaqsocgoike, []); $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sogksuscggsicmac = $qkqgcaykemoiecma->update($quyescaqsocgoike, $qeqooyuoiasweuck, false); goto gukawqgamokyceki; uqamuckwuksquqia: $mksyucucyswaukig->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; gukawqgamokyceki: mckkqgseimcgkcgu: return $sogksuscggsicmac; } public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); return $this->gmiyqqaekqcsoime($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof Component; } public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (!$ymqmyyeuycgmigyo) { goto syqysaawasmesiqs; } $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); goto yeiwocswikqkwyew; syqysaawasmesiqs: $wksoawcgagcgoask = $this->couwksyewgyeooqe(); yeiwocswikqkwyew: if (!$wksoawcgagcgoask) { goto uyqsoayeaaumkace; } $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); uyqsoayeaaumkace: return $ggocakcisguuokai; } }
