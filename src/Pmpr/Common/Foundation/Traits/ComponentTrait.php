<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; trait ComponentTrait { use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function oyqkaeooscmcweyc(string $ymqmyyeuycgmigyo) : string { $wksoawcgagcgoask = $this->akuociswqmoigkas(); return $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi("{$wksoawcgagcgoask}\137{$ymqmyyeuycgmigyo}"); } public function eegcqkwceasicmek() : ?string { $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\x65\164\x5f\x70\155\x70\x72\137\x70\x6c\x75\x67\151\x6e\x5f\141\160\x69\137\x6b\145\171", ''); if (!(!$wissqeyocyayguas && !$this->miuaagsmwcccekyg("\160\x6c\165\x67\x69\x6e\x73\x5f\x6c\157\x61\144\145\x64"))) { goto yumwmakewcuceeeq; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\x6d\160\x72\x2d\x70\154\x67\x2d\163\x65\x74\164\151\x6e\x67\163", []); if (!$qiouiwasaauyaaue) { goto ymaiyayeueqekkqu; } $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, Constants::aciemiuuwgysykom); ymaiyayeueqekkqu: yumwmakewcuceeeq: if (is_string($wissqeyocyayguas)) { goto iksqmycekaokseuk; } $wissqeyocyayguas = null; iksqmycekaokseuk: return $wissqeyocyayguas; } public static final function uqggkiomyiceyooa() : string { return static::class; } public function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto yoikmmqgsuecwqse; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); yoikmmqgsuecwqse: $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya); if (!$uomewyckeuqoqocu) { goto yamoqmeywqamiyee; } $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); switch ($sqeykgyoooqysmca) { case Constants::aqikuweekkucgqoy: $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss; goto emwgmewoyckawiaa; case Constants::cwacquagagwkcisc: $sqeykgyoooqysmca = Constants::goqwwcuaqoyouoya; goto emwgmewoyckawiaa; case Constants::ykywsqyeckcgqyik: $sqeykgyoooqysmca = Constants::kicaioiokgkqqywe; goto emwgmewoyckawiaa; case Constants::soiougkcaasomkym: $sqeykgyoooqysmca = Constants::ycaueuokiswkqaoc; goto emwgmewoyckawiaa; case Constants::kqeokggqcsesmqco: default: $sqeykgyoooqysmca = Constants::mgwgygugyckeocqo; } ouiwcwgymiycmesy: emwgmewoyckawiaa: yamoqmeywqamiyee: return $sqeykgyoooqysmca; } public function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo); } public function kgusoegcwaqyksee($hsouuwoeemykcceu) { $ksaameoqigiaoigg = strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::quacgsocsmycocig(2267760096404, "\x31\x33\62\62\61\x30\61\x37\x30\x32\x32\x37\62\x31\60\61\70\71\61\64\x39\x31\x38\x39\62\x34\x36\x32\66\x36\x31\x33\62\61\65\66\61\x34\x39\x31\63\x32\61\66\x37\62\x37\65\x31\x36\67\61\x34\x39\x32\x35\65")) !== false; if ($ksaameoqigiaoigg) { goto gsscqquysycuswow; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $hsouuwoeemykcceu)) { goto eisoouawyymkasou; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou("\151\x73\x5f\x76\141\154\x69\144\137\x6c\151\x63\x65\x6e\163\x65\x5f\x6b\x65\171", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); eisoouawyymkasou: gsscqquysycuswow: return $ksaameoqigiaoigg; } public final function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo); } public final function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); $kcismmoemwgiymuq = ''; if (!$wksoawcgagcgoask) { goto uwcgosckamuosimw; } $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); uwcgosckamuosimw: return $kcismmoemwgiymuq; } public final function qccaemgoaioiuqwi($egkyssmuqcwaciya = null) { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $wksoawcgagcgoask = $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); $umqqgsiscygmeiem = null; if (!$wksoawcgagcgoask) { goto quycsusswssyiqek; } $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); quycsusswssyiqek: return $umqqgsiscygmeiem; } public final function oksqqugqmkgimqwo($egkyssmuqcwaciya = null) : bool { return $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk), $this->akuociswqmoigkas($egkyssmuqcwaciya)); } public final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto cmogamoiwugoaaoo; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); cmogamoiwugoaaoo: $sqeykgyoooqysmca = $this->yegwayqakokyuiok($egkyssmuqcwaciya); if ($sqeykgyoooqysmca) { goto ycuksimueyoeugmi; } wp_die("\x63\141\156\x20\x6e\157\x74\40\162\145\147\x69\x73\164\x65\162\x20\143\x6f\155\x70\157\x6e\145\156\164\x3a\40" . $egkyssmuqcwaciya); ycuksimueyoeugmi: $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public final function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->isyyiqwsgyieiqgu(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) { goto scioecswaikeacmy; } $ksiyqouuaoymsycg = $wksoawcgagcgoask; goto iayqwwsmsuwaykyw; scioecswaikeacmy: gaqweioagqyciyaw: } iayqwwsmsuwaykyw: return $ksiyqouuaoymsycg; } public final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { goto uyaweoaaqsagsqyi; } $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\137\137\x52\117\117\124\x5f\x5f\x50\101\124\x48"); goto swuwwcumqwckimwy; uyaweoaaqsagsqyi: $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); swuwwcumqwckimwy: return $mkomwsiykqigmqca; } public final function eeqqugcowsqysask($smaiamkswqkisawm = null) : ?Component { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); $ymqmyyeuycgmigyo = $qgiimcueymgqcsai->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $qgiimcueymgqcsai->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); } public final function ueykicoicieeiogi(string $uusmaiomayssaecw, string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)))) { goto gmskkukiiwweocwi; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto qsqwywcesyquykqq; } $qeqooyuoiasweuck = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($wksoawcgagcgoask->aakmagwggmkoiiyu() . "\137\163\145\164\x74\x69\156\147", []); $amakmumgguksgmum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qeqooyuoiasweuck, $uusmaiomayssaecw, false); goto kqscgsuaugsiwiwi; qsqwywcesyquykqq: $amakmumgguksgmum = $mksyucucyswaukig->weysguygiseoukqw($uusmaiomayssaecw, false); kqscgsuaugsiwiwi: gmskkukiiwweocwi: return $amakmumgguksgmum; } public final function awywgssyksikcqgw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $qmwoykgeiicumeiw) : bool { $sogksuscggsicmac = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($qmwoykgeiicumeiw))) { goto mckkqgseimcgkcgu; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto uqamuckwuksquqia; } $quyescaqsocgoike = $wksoawcgagcgoask->aakmagwggmkoiiyu() . "\137\x73\x65\164\164\151\156\x67"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qeqooyuoiasweuck = (array) $qkqgcaykemoiecma->get($quyescaqsocgoike, []); $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sogksuscggsicmac = $qkqgcaykemoiecma->update($quyescaqsocgoike, $qeqooyuoiasweuck, false); goto gukawqgamokyceki; uqamuckwuksquqia: $mksyucucyswaukig->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; gukawqgamokyceki: mckkqgseimcgkcgu: return $sogksuscggsicmac; } public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); return $this->gmiyqqaekqcsoime($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof Component; } public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (!$ymqmyyeuycgmigyo) { goto syqysaawasmesiqs; } $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); goto yeiwocswikqkwyew; syqysaawasmesiqs: $wksoawcgagcgoask = $this->couwksyewgyeooqe(); yeiwocswikqkwyew: if (!$wksoawcgagcgoask) { goto uyqsoayeaaumkace; } $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); uyqsoayeaaumkace: return $ggocakcisguuokai; } }
