<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720bb1389a49             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Post_Type; use WP_Query; use WP_Term; class Post extends Common { public function is($post) : bool { if (is_numeric($post)) { $post = $this->get($post, Constants::ckmqoekmugkggeym, true); } return $post instanceof WP_Post; } public function uiuwugwykqocmiec($post = null) : ?int { $cqkugkyukikgyyyk = str_word_count(trim(strip_tags($this->souwykwwmyygqyqi($post)))); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\x65\164\x5f\x70\x6f\163\164\137\167\x6f\x72\x64\137\143\x6f\165\156\x74", $cqkugkyukikgyyyk, $this->get($post)); } public function cuoieqacocyyookg($post) { return floor($this->uiuwugwykqocmiec($post) / 200); } public function yaacqmguuiqwoqay($post) : bool { return Constants::wmmucsiyiyusmssm === $this->ucwmcwqmqwaymkkc($post); } public function cagmcswsqkwuasiy($sciomagaqmgggsiu = Constants::uuqqcaaoioaaimoa) : bool { $sogksuscggsicmac = false; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->eoyueosccuoeqkee() && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $useksmwkuswkwcqg = $this->gueasuouwqysmomu(); if (is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu, true) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg === $sciomagaqmgggsiu) { $sogksuscggsicmac = true; } } return $sogksuscggsicmac; } public function iooowgsqoyqseyuu($post = null, bool $cwwowqyuwccuykom = false) { if (!$cwwowqyuwccuykom && $post) { $cwwowqyuwccuykom = true; } if (!$post) { $post = $this->get(); } if (!is_numeric($post)) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, "\x49\104"); if (!$post && !$cwwowqyuwccuykom) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->seokosgecygsmqau()) { $post = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->mwyqswsaeeewsosm(); } else { $post = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); } } } return $post; } public function get($post = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, bool $cwwowqyuwccuykom = false) { if (!$post instanceof WP_Post) { if (!$post && $cwwowqyuwccuykom) { $post = null; } else { if (!$post) { $post = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik); } $post = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($post, $aqykuigiuwmmcieu); } } return $post; } public function oguuceugyqgsqewy($post) : bool { return $this->uqwgsuysegkweago($this->gueasuouwqysmomu($post)) && (int) $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) === (int) $this->iooowgsqoyqseyuu($post); } public function uqwgsuysegkweago($sciomagaqmgggsiu = Constants::uuqqcaaoioaaimoa, string $ccamueccusigaaio = Constants::ygoseweigiigswiu) : bool { $sogksuscggsicmac = false; if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { global $pagenow; $yeacayasgueouoqc = $this->cwucesiiikgqsgui() ?: Constants::mswoacegomcucaik; if ($yeacayasgueouoqc === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array($yeacayasgueouoqc, $sciomagaqmgggsiu, true)) { switch ($ccamueccusigaaio) { case Constants::awysmmukegasimmq: $sogksuscggsicmac = $pagenow === "\160\x6f\163\x74\56\x70\x68\160"; break; case Constants::ocayisqocqoekqiq: $sogksuscggsicmac = $pagenow === "\x70\157\163\x74\55\156\145\167\56\x70\150\160"; if (!$sogksuscggsicmac) { $sogksuscggsicmac = str_contains($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc(), "\x77\x70\55\141\144\155\x69\156\57\x70\x6f\x73\164\x2d\156\145\x77\56\160\150\x70"); } break; default: $sogksuscggsicmac = in_array($pagenow, ["\160\157\163\164\56\160\x68\160", "\x70\x6f\x73\164\x2d\x6e\x65\167\56\160\x68\x70"]); } } } return $sogksuscggsicmac; } public function cwucesiiikgqsgui() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($this->get(), Constants::uouymeyqasaeckso); if (!$sqeykgyoooqysmca) { global $typenow, $current_screen; if ($typenow) { $sqeykgyoooqysmca = $typenow; } else { if ($current_screen) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($current_screen, Constants::uouymeyqasaeckso); } } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::uouymeyqasaeckso); if (!$sqeykgyoooqysmca && ($post = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::mswoacegomcucaik))) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu($post); } } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uouymeyqasaeckso); } } return $sqeykgyoooqysmca; } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : ?string { $post = $this->get($post); $ewgwqamkygiqaawc = ''; if ($egkeamycaysqsoma) { $ewgwqamkygiqaawc = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); } else { if ($post) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, Constants::egkuckyqcaygmymg); } } return $ewgwqamkygiqaawc; } public function aqcogscycyycgkuq($post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) : string { return $this->ygwimyogyaqgumam(Constants::uiaeiwkkmoayqasu, $post, $mgkceomocowocqyo); } public function ygqycmmkoiuocoia($post) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($post), Constants::isukysauqkiecswi, 0); } public function ucwmcwqmqwaymkkc($post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) : string { return $this->ygwimyogyaqgumam(Constants::gikuasuikwemyqoq, $post, $mgkceomocowocqyo); } public function mguqscccckuywsya($post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) : string { return $this->ygwimyogyaqgumam(Constants::kaoaqscgacqqskqs, $post, $mgkceomocowocqyo); } public function qkweigiqsaaigqau($post = null) : ?string { $eeamcawaiqocomwy = null; if ($qscaoekmoooeuyqg = $this->mguqscccckuywsya($post)) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg); } return $eeamcawaiqocomwy; } public function ieuwgcuysamemime($post = null, array $wwgucssaecqekuek = []) : ?string { $qscaoekmoooeuyqg = null; if ($eeamcawaiqocomwy = $this->qkweigiqsaaigqau($post)) { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw(Constants::cuyqkgecokgmcwqu, $this->mguqscccckuywsya($post)); $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($ymqmyyeuycgmigyo, $eeamcawaiqocomwy, $wwgucssaecqekuek); } return $qscaoekmoooeuyqg; } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $post = $this->get($post); $iayakwckycsumkqa = null; if (!$gioggcykgoikcwiy || $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->seewsasmyoyciiee($post)) { $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->masoymaamekuykso($post); } return $iayakwckycsumkqa; } public function insert($useksmwkuswkwcqg, array $ywmkwiwkosakssii = []) : ?int { $sogksuscggsicmac = null; $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = $useksmwkuswkwcqg; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uiaeiwkkmoayqasu => '', Constants::siwwqayqwykwqwoy => '', Constants::gikuasuikwemyqoq => '', Constants::isukysauqkiecswi => 0, Constants::egkuckyqcaygmymg => '']); $wyoiwuqokyeeuguk = $this->ciugwooasaqcywas($useksmwkuswkwcqg, [Constants::NAME => $ywmkwiwkosakssii[Constants::uiaeiwkkmoayqasu], Constants::isukysauqkiecswi => $ywmkwiwkosakssii[Constants::isukysauqkiecswi], Constants::goqgcigmiawyauai => 1]); if (!$wyoiwuqokyeeuguk) { $ywmkwiwkosakssii[Constants::kaoaqscgacqqskqs] = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->insert($ywmkwiwkosakssii); } return $sogksuscggsicmac; } public function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) { if (is_array($post)) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, $aiowsaccomcoikus); } return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ygwimyogyaqgumam($aiowsaccomcoikus, $this->iooowgsqoyqseyuu($post), $mgkceomocowocqyo); } public function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool { $post = $this->get($post, Constants::ckmqoekmugkggeym, true); return $post && $this->gueasuouwqysmomu($post) === $sqeykgyoooqysmca; } public function qcgakseyaikigqco($post = null) : ?string { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->get($post)); } public function ycqquoiyyuesegsy($post = null, bool $cwwowqyuwccuykom = false, bool $eoocgqsqmwuegiae = false) : ?string { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->get($post, $cwwowqyuwccuykom), $eoocgqsqmwuegiae); } public function gueasuouwqysmomu($post = null, string $aqykuigiuwmmcieu = Constants::NAME) { $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); if (!$useksmwkuswkwcqg && $post) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, Constants::uouymeyqasaeckso); } if (!$useksmwkuswkwcqg) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uouymeyqasaeckso); } switch ($aqykuigiuwmmcieu) { case Constants::ckmqoekmugkggeym: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); break; case Constants::uissasisiuymwsmu: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($useksmwkuswkwcqg); break; } return $useksmwkuswkwcqg; } public function aismiesamiukkuoy($post, $seyqqsmuaiegkeeq, array $ywmkwiwkosakssii = [], array $qookweymeqawmcwo = []) : string { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $qookweymeqawmcwo = $cwaqscoiqkokyase->ckscqqquyskscaaw($qookweymeqawmcwo, ["\x6c\x69\156\x6b\137\x61\x74\x74\162" => [], "\156\x61\x6d\x65\x5f\167\162\141\160" => "\45\x73", "\x6c\x69\x6e\x6b\x5f\167\162\x61\x70" => "\45\163", Constants::ucoiewcoucauqwko => []]); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ucoiewcoucauqwko => []]); $uyuaosigqymaqsaa = $ywmkwiwkosakssii[Constants::ucoiewcoucauqwko]; if (!$uyuaosigqymaqsaa) { $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii); } $wwgucssaecqekuek = $qookweymeqawmcwo["\154\x69\156\153\x5f\141\164\164\x72"]; $wwgucssaecqekuek["\162\145\154"] = Constants::qeueagcuyogwwyky; $nsmgceoqaqogqmuw = ''; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $seyqqsmuaiegkeeq); if (!is_wp_error($migiiksoiymissge)) { $ymqmyyeuycgmigyo = sprintf($qookweymeqawmcwo["\156\x61\x6d\x65\x5f\167\x72\x61\x70"], $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk)); $nsmgceoqaqogqmuw .= sprintf($qookweymeqawmcwo["\x6c\x69\156\x6b\x5f\167\x72\x61\160"], $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $migiiksoiymissge, $wwgucssaecqekuek)); } } return $nsmgceoqaqogqmuw; } public function kckogqkiycqeumoa($post, $kesssewsiegssiya, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::yewiqemgmmucemey => false]); $iwewcwusemqaiggk = false; $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($post, $kesssewsiegssiya, $ywmkwiwkosakssii); if ($uyuaosigqymaqsaa && isset($uyuaosigqymaqsaa[0])) { $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; } if (!$iwewcwusemqaiggk && ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia($post))) { $iwewcwusemqaiggk = $this->kckogqkiycqeumoa($omwmuycmeqcqokom, $kesssewsiegssiya, $ywmkwiwkosakssii); } return $iwewcwusemqaiggk; } public function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, array $ywmkwiwkosakssii = []) : array { $uyuaosigqymaqsaa = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii); if (!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = []; } return $uyuaosigqymaqsaa; } public function ymuqsscwmcumcama($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uouymeyqasaeckso => $useksmwkuswkwcqg, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function kmegaqgyciwwmegk($qwcmueausqgiwigy, $useksmwkuswkwcqg, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::goqgcigmiawyauai => 10]); if (strlen($qwcmueausqgiwigy) > 1) { $ywmkwiwkosakssii["\163"] = $qwcmueausqgiwigy; $ywmkwiwkosakssii["\x73\x75\x70\x70\x72\145\163\x73\137\146\x69\154\x74\x65\162\163"] = false; } $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->cecaguuoecmccuse("\x70\x6f\163\x74\163\x5f\163\145\x61\x72\143\150", [$this, "\143\167\x6f\155\x71\163\143\x63\x69\x63\x73\x71\163\145\x69\x79"], 10, 2); $wyoiwuqokyeeuguk = $this->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $ywmkwiwkosakssii[Constants::aisguagukaewucii]); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->ggmgmqswqkgecosg("\160\157\x73\x74\163\137\163\145\141\x72\143\x68", [$this, "\x63\x77\157\155\161\x73\x63\143\151\x63\x73\161\163\145\x69\x79"]); return $wyoiwuqokyeeuguk; } public function cwomqsccicsqseiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if ($qwcmueausqgiwigy && $gqgemcmoicmgaqie instanceof WP_Query) { $aaycmcgqqqsysccs = "\x25"; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eqwoegegiamegqsm->yqccgscwmeeyigkg($gqgemcmoicmgaqie->get("\163")) . $aaycmcgqqqsysccs; $qwcmueausqgiwigy = $eqwoegegiamegqsm->prepare("{$wpdb->posts}\56\x70\157\163\x74\137\164\x69\x74\154\x65\x20\x4c\111\113\105\x20\x25\x73\x20\117\122\x20{$wpdb->posts}\56\160\x6f\x73\164\x5f\156\141\x6d\x65\40\114\x49\113\105\x20\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\x29\x20\x41\116\x44\x20{$wpdb->posts}\56\x70\157\163\164\x5f\160\141\163\163\x77\x6f\162\x64\x20\75\x20\47\47"; } $qwcmueausqgiwigy = "\x20\101\116\104\x20\x28{$qwcmueausqgiwigy}\x29"; } return $qwcmueausqgiwigy; } public function wgkooswsoccegaew($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::eqomgewoayseioos => $oysoyeaucuawyaky, Constants::gqiasegggowomgie => Constants::eqomgewoayseioos]); return $this->ciugwooasaqcywas($this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, array $ywmkwiwkosakssii = [], string $uiuykcweuosgmwki = "\75", string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw([Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => $gwiwsycaaqgwmewg, Constants::ciyoccqkiamemcmm => $aucgaecqisksougg, Constants::ykemsyouoqyoaysg => $uiuykcweuosgmwki]]], $ywmkwiwkosakssii); return $this->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function uswuayuaaosoksqg($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = 0; return $this->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function mmoaikqueyiwcesm($post, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = $this->iooowgsqoyqseyuu($post); return $this->ciugwooasaqcywas($this->gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function qmmimiesyoyuqeqo($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $eyagosskwwmgwmog = $this->uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $omwmuycmeqcqokom->children = $this->mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii); } return $eyagosskwwmgwmog; } public function ciugwooasaqcywas($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $sogksuscggsicmac = []; $ycmguuqqaiisymgg = [Constants::uouymeyqasaeckso => $useksmwkuswkwcqg, Constants::coigmswsskyoeaci => false, Constants::goqgcigmiawyauai => -1]; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $ywmkwiwkosakssii = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x67\145\x74\137\160\157\x73\164\x73\137\141\162\147\x73", $ywmkwiwkosakssii); if (Constants::oyaoekcogwkcekcc === $aqykuigiuwmmcieu) { $ywmkwiwkosakssii[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; } $wsqwkewmowkuuoqc = $ywmkwiwkosakssii[Constants::coigmswsskyoeaci]; if ($wsqwkewmowkuuoqc && !isset($ywmkwiwkosakssii[Constants::isukysauqkiecswi])) { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = 0; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $wyoiwuqokyeeuguk = $wgkqagumoowawogg->ciugwooasaqcywas($ywmkwiwkosakssii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs], true)) { foreach ($wyoiwuqokyeeuguk as $post) { $gcqseksiskwueksc = $this->iooowgsqoyqseyuu($post); $ksaameoqigiaoigg = null; if (Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu) { if ($meqocwsecsywiiqs = $wgkqagumoowawogg->qcgakseyaikigqco($post)) { $ksaameoqigiaoigg = $meqocwsecsywiiqs; } } else { $ksaameoqigiaoigg = $post; } if ($wsqwkewmowkuuoqc) { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = $gcqseksiskwueksc; $ksaameoqigiaoigg = [Constants::miceosguuseyyuqe => $ksaameoqigiaoigg, Constants::geocwaecmeeskuci => $this->ciugwooasaqcywas($this->gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu)]; } if ($ksaameoqigiaoigg) { $sogksuscggsicmac[$gcqseksiskwueksc] = $ksaameoqigiaoigg; } } } else { $sogksuscggsicmac = $wyoiwuqokyeeuguk; } return $sogksuscggsicmac; } public function ekwkywuguceaogsk() : array { $wyoiwuqokyeeuguk = []; while ($this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->mgoyskiomyyqmyao()) { the_post(); $wyoiwuqokyeeuguk[] = $this->get(); } return $wyoiwuqokyeeuguk; } public function owicscwgeuqcqaig(string $useksmwkuswkwcqg = Constants::mswoacegomcucaik, array $ywmkwiwkosakssii = []) : WP_Query { $ycmguuqqaiisymgg = [Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::gqiasegggowomgie => Constants::kumuoysauoagaiiy, Constants::osocaqqumyuooqyo => '', Constants::eqomgewoayseioos => [], Constants::uouymeyqasaeckso => $useksmwkuswkwcqg, Constants::iwmgegikocuwggua => '', Constants::gikuasuikwemyqoq => '', Constants::kcaoouwiygwwmiok => [], Constants::goqgcigmiawyauai => 5]; $yiasugywggckywoa = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); if (empty($yiasugywggckywoa[Constants::gikuasuikwemyqoq])) { $yiasugywggckywoa[Constants::gikuasuikwemyqoq] = Constants::cqycgsyykemiygou === $yiasugywggckywoa[Constants::uouymeyqasaeckso] ? Constants::yqqwmawaesqquaig : Constants::wmmucsiyiyusmssm; } if (!empty($yiasugywggckywoa[Constants::eqomgewoayseioos])) { $yiasugywggckywoa[Constants::goqgcigmiawyauai] = count($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ugyksakgmeeeqmie($yiasugywggckywoa[Constants::eqomgewoayseioos])); } return new WP_Query($yiasugywggckywoa); } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $post = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $post = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->igawqaomowicuayw($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $cuyooiakswegosog); } public function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = null; if ($post = $this->get($post)) { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post); if ($egkeamycaysqsoma) { $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x67\x65\164\x5f\x74\150\x65\137\x64\x61\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post); } } return $ocogsiouoiuuguym; } public function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = null; if ($post = $this->get($post)) { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post); if ($egkeamycaysqsoma) { $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\147\145\x74\x5f\164\150\x65\x5f\x6d\x6f\144\151\x66\151\x65\x64\x5f\144\141\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post); } } return $ocogsiouoiuuguym; } public function waoeigwigksoikgu($post, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $this->iooowgsqoyqseyuu($post); return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function ymgsgecsiqeegseg($post = null, string $iueymcwwscwqkiyq = Constants::iiismwgquaowosqw) { $egkygecqiowwuuuu = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ymgsgecsiqeegseg($this->iooowgsqoyqseyuu($post)); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($egkygecqiowwuuuu, $iueymcwwscwqkiyq, 0); } public function wsqeykgqiemswysa(string $sqeykgyoooqysmca = Constants::mswoacegomcucaik, string $iueymcwwscwqkiyq = Constants::wmmucsiyiyusmssm, string $yiyimoacecwoqeko = '') { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ygmcsmegcysyeoss($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq); } public function gamoemyysmgugccu($post = null, string $iueymcwwscwqkiyq = Constants::ALL) : bool { return $this->ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0; } public function auosyisuakguyimw($post, array $ywmkwiwkosakssii = []) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu($post); $ywmkwiwkosakssii[Constants::mswoacegomcucaik] = $post; return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\145\x74\x5f{$sqeykgyoooqysmca}\x5f\x70\x6f\x73\x74\x5f\144\141\x74\141", [], $ywmkwiwkosakssii); } public function sewesguyaqwccksa($post) : array { $auwuoyyagaiegwae = []; $post = $this->get($post); $sqeykgyoooqysmca = $this->gueasuouwqysmomu($post); $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($post); $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); if (Constants::mswoacegomcucaik === $sqeykgyoooqysmca) { if (($saekwuiigiosswwm = $uuwwyaeymswgsgsi->qqqooiyuyqmyuwqi()) > 0) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($saekwuiigiosswwm); } } else { if ($cskucqcumqsyimye->auiemgkycsemicim($sqeykgyoooqysmca)) { if ($aiyeqweykecsyooy = trailingslashit($wgcaqkewqyygkgaa->myagyqumwekameww($sqeykgyoooqysmca))) { $auwuoyyagaiegwae[] = $aiyeqweykecsyooy; $auwuoyyagaiegwae[] = $aiyeqweykecsyooy . $GLOBALS["\167\160\x5f\162\x65\167\162\x69\164\x65"]->pagination_base; } } } $wkumqkkskwqecqou = $wgkqagumoowawogg->wowuoqqaosuecgaw(false, '', false); if ($wkumqkkskwqecqou) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($wkumqkkskwqecqou); } $waeiigomskmimyai = $wgkqagumoowawogg->wowuoqqaosuecgaw(true, '', false); if ($waeiigomskmimyai && $waeiigomskmimyai !== $wkumqkkskwqecqou) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($waeiigomskmimyai); } $acauiioqyiygkwuc = $wgkqagumoowawogg->wowuoqqaosuecgaw(); if ($acauiioqyiygkwuc) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($acauiioqyiygkwuc); } $ioyascsmewkkssio = $wgkqagumoowawogg->wowuoqqaosuecgaw(true); if ($ioyascsmewkkssio && $ioyascsmewkkssio !== $acauiioqyiygkwuc) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($ioyascsmewkkssio); } if ($cskucqcumqsyimye->auiemgkycsemicim($sqeykgyoooqysmca)) { $wmecaokscgakikym = trailingslashit($gsqycqmccqgwosck->mkaiaewoyaimieqg($this->mguqscccckuywsya($post))); if (trailingslashit($gqusacuooiagkuom->ieokeoyugcmwuumq()) !== $wmecaokscgakikym && trailingslashit($gqusacuooiagkuom->gmigwwwmwemyaayy()) !== $wmecaokscgakikym) { $auwuoyyagaiegwae[] = $wmecaokscgakikym; } } $eyagosskwwmgwmog = $wgkqagumoowawogg->iimmeiugygssweyc($post); if (!empty($eyagosskwwmgwmog)) { foreach ($eyagosskwwmgwmog as $gqumacwamusueoqa) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($gqumacwamusueoqa); } } $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::wwcycgyaiaksckuk => $sqeykgyoooqysmca]); $syocwsygwkwosayu = []; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($post, $kesssewsiegssiya)) { foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $syocwsygwkwosayu[] = $aoskwucuugeuaeus->cekqoisoaceaqiam($iwewcwusemqaiggk, false); } } } $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $syocwsygwkwosayu); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\163\x5f\163\164\x72\151\156\147"); return array_flip(array_flip($auwuoyyagaiegwae)); } public function eigkuiwicmciqami() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik); } }
