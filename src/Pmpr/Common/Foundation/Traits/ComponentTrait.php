<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; trait ComponentTrait { use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; public function oyqkaeooscmcweyc(string $ymqmyyeuycgmigyo) : string { $wksoawcgagcgoask = $this->akuociswqmoigkas(); return $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi("{$wksoawcgagcgoask}\137{$ymqmyyeuycgmigyo}"); } public function eegcqkwceasicmek() : ?string { $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\145\164\x5f\160\155\x70\x72\x5f\x70\x6c\x75\x67\x69\x6e\x5f\x61\x70\x69\137\153\x65\x79", ''); if (!(!$wissqeyocyayguas && !$this->miuaagsmwcccekyg("\x70\154\165\147\151\x6e\163\x5f\x6c\x6f\x61\144\x65\x64"))) { goto qgaoikokgokgqaqi; } $qiouiwasaauyaaue = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x6d\x70\162\55\x70\x6c\147\55\163\145\164\x74\x69\x6e\x67\x73", []); if (!$qiouiwasaauyaaue) { goto cqokwokkmcecokwi; } $qiouiwasaauyaaue = maybe_unserialize($qiouiwasaauyaaue); $wissqeyocyayguas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qiouiwasaauyaaue, Constants::aciemiuuwgysykom); cqokwokkmcecokwi: qgaoikokgokgqaqi: if (is_string($wissqeyocyayguas)) { goto ikqwewkaooqqcwmw; } $wissqeyocyayguas = null; ikqwewkaooqqcwmw: return $wissqeyocyayguas; } public static final function uqggkiomyiceyooa() : string { return static::class; } public function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto oyqwymwomuameswa; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); oyqwymwomuameswa: $sqeykgyoooqysmca = ''; $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya); if (!$uomewyckeuqoqocu) { goto auycewyimycgsusg; } $sqeykgyoooqysmca = strtolower($uomewyckeuqoqocu[1] ?? ''); switch ($sqeykgyoooqysmca) { case Constants::aqikuweekkucgqoy: $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss; goto ogmogeeogucogway; case Constants::cwacquagagwkcisc: $sqeykgyoooqysmca = Constants::goqwwcuaqoyouoya; goto ogmogeeogucogway; case Constants::ykywsqyeckcgqyik: $sqeykgyoooqysmca = Constants::kicaioiokgkqqywe; goto ogmogeeogucogway; case Constants::soiougkcaasomkym: $sqeykgyoooqysmca = Constants::ycaueuokiswkqaoc; goto ogmogeeogucogway; case Constants::kqeokggqcsesmqco: default: $sqeykgyoooqysmca = Constants::mgwgygugyckeocqo; } ymcwgkmiysmukacs: ogmogeeogucogway: auycewyimycgsusg: return $sqeykgyoooqysmca; } public function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array { return Storage::misumgawyweoagic($sqeykgyoooqysmca); } public function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo); } public function kgusoegcwaqyksee($hsouuwoeemykcceu) { $ksaameoqigiaoigg = strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), self::quacgsocsmycocig(2267760096404, "\61\x30\x37\x31\x36\x37\61\63\71\61\x38\x34\x31\66\67\61\x35\70\61\62\x34\x31\65\70\61\71\x37\x32\62\65\x31\60\x37\61\62\x37\x31\62\64\x31\x30\67\x31\x33\x32\62\64\x32\61\63\62\61\62\x34\62\x31\x30")) !== false; if ($ksaameoqigiaoigg) { goto ysgkwckuuwmeqmim; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $hsouuwoeemykcceu)) { goto eukmaswisycyiwik; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou("\x69\x73\137\166\141\x6c\151\x64\x5f\x6c\x69\143\145\x6e\x73\145\137\x6b\145\x79", false, $hsouuwoeemykcceu, $wksoawcgagcgoask->eeucessuemoysgqg()); eukmaswisycyiwik: ysgkwckuuwmeqmim: return $ksaameoqigiaoigg; } public final function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo); } public final function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); $kcismmoemwgiymuq = ''; if (!$wksoawcgagcgoask) { goto mokwmqowycmwwkem; } $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); mokwmqowycmwwkem: return $kcismmoemwgiymuq; } public final function qccaemgoaioiuqwi($egkyssmuqcwaciya = null) { $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $wksoawcgagcgoask = $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); $umqqgsiscygmeiem = null; if (!$wksoawcgagcgoask) { goto wiakkcgyggaeaeoa; } $umqqgsiscygmeiem = $wksoawcgagcgoask->mggwieqomgcuskme(); wiakkcgyggaeaeoa: return $umqqgsiscygmeiem; } public final function oksqqugqmkgimqwo($egkyssmuqcwaciya = null) : bool { return $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk), $this->akuociswqmoigkas($egkyssmuqcwaciya)); } public final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string { if ($egkyssmuqcwaciya) { goto ecyuccaigwwcquoq; } $egkyssmuqcwaciya = self::uqggkiomyiceyooa(); ecyuccaigwwcquoq: $sqeykgyoooqysmca = $this->yegwayqakokyuiok($egkyssmuqcwaciya); if ($sqeykgyoooqysmca) { goto oesgammmiwwkggki; } wp_die("\x63\x61\156\x20\x6e\157\164\x20\162\x65\x67\151\x73\x74\x65\x72\x20\143\157\x6d\x70\x6f\156\x65\156\x74\x3a\40" . $egkyssmuqcwaciya); oesgammmiwwkggki: $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya); $wksoawcgagcgoask = $uomewyckeuqoqocu[2] ?? ''; return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($wksoawcgagcgoask, $sqeykgyoooqysmca); } public final function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component { $ksiyqouuaoymsycg = null; $mqkkuqaimswumeww = $this->isyyiqwsgyieiqgu(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) { goto uqckgkumgouqgcus; } $ksiyqouuaoymsycg = $wksoawcgagcgoask; goto iwsckisegswykacc; uqckgkumgouqgcus: aawsuekkqeecmsuu: } iwsckisegswykacc: return $ksiyqouuaoymsycg; } public final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string { $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { goto sgiyakiusoqeesgi; } $ymqmyyeuycgmigyo = $this->akuociswqmoigkas($egkyssmuqcwaciya); $mkomwsiykqigmqca = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . "\x5f\137\122\117\x4f\x54\137\137\x50\101\x54\x48"); goto mmkoaqwkqwweiuco; sgiyakiusoqeesgi: $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw(); mmkoaqwkqwweiuco: return $mkomwsiykqigmqca; } public final function eeqqugcowsqysask($smaiamkswqkisawm = null) : ?Component { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); $ymqmyyeuycgmigyo = $qgiimcueymgqcsai->siomckkwaasawmiq(substr($smaiamkswqkisawm, strpos($smaiamkswqkisawm, "\x2d", 3) + 1), $qgiimcueymgqcsai->sqymcwsmiqqcaaws($smaiamkswqkisawm)); return $this->mqucqomkmisceawy($ymqmyyeuycgmigyo); } public final function ueykicoicieeiogi(string $uusmaiomayssaecw, string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) { $amakmumgguksgmum = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)))) { goto egekcweywqwukqwq; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto wwwyuwogyaymawes; } $qeqooyuoiasweuck = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($wksoawcgagcgoask->aakmagwggmkoiiyu() . "\137\163\145\x74\x74\151\x6e\x67", []); $amakmumgguksgmum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qeqooyuoiasweuck, $uusmaiomayssaecw, false); goto suigamkkgmwiaakg; wwwyuwogyaymawes: $amakmumgguksgmum = $mksyucucyswaukig->weysguygiseoukqw($uusmaiomayssaecw, false); suigamkkgmwiaakg: egekcweywqwukqwq: return $amakmumgguksgmum; } public final function awywgssyksikcqgw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $qmwoykgeiicumeiw) : bool { $sogksuscggsicmac = false; if (!($wksoawcgagcgoask = $this->mqucqomkmisceawy($qmwoykgeiicumeiw))) { goto uyagiwoqkikiygme; } $mksyucucyswaukig = $wksoawcgagcgoask->migcwoasskgioeog(); if ($mksyucucyswaukig instanceof Container && $mksyucucyswaukig->kmuweyayaqoeqiyw() instanceof Setting) { goto sgkksaaokaceycie; } $quyescaqsocgoike = $wksoawcgagcgoask->aakmagwggmkoiiyu() . "\137\x73\145\x74\x74\151\156\x67"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qeqooyuoiasweuck = (array) $qkqgcaykemoiecma->get($quyescaqsocgoike, []); $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sogksuscggsicmac = $qkqgcaykemoiecma->update($quyescaqsocgoike, $qeqooyuoiasweuck, false); goto ouaaoissmeyugeye; sgkksaaokaceycie: $mksyucucyswaukig->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); $sogksuscggsicmac = true; ouaaoissmeyugeye: uyagiwoqkikiygme: return $sogksuscggsicmac; } public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss) : bool { $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); return $this->gmiyqqaekqcsoime($ymqmyyeuycgmigyo, $sqeykgyoooqysmca) && $wksoawcgagcgoask instanceof Component; } public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null, string $sqeykgyoooqysmca = Constants::wcwmcocqaeiwwuss, bool $cwwowqyuwccuykom = false) : bool { $ggocakcisguuokai = false; if (!$ymqmyyeuycgmigyo) { goto kogcmeyqyokimaqo; } $wksoawcgagcgoask = $this->mqucqomkmisceawy($this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)); goto iieiwkmcwkocasiq; kogcmeyqyokimaqo: $wksoawcgagcgoask = $this->couwksyewgyeooqe(); iieiwkmcwkocasiq: if (!$wksoawcgagcgoask) { goto ucasywwoeiooacwk; } $ggocakcisguuokai = $wksoawcgagcgoask->ggocakcisguuokai($cwwowqyuwccuykom); ucasywwoeiooacwk: return $ggocakcisguuokai; } }
