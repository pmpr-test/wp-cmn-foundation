<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bb6af50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Post_Type; use WP_Query; use WP_Term; class Post extends Common { public function is($post) : bool { if (is_numeric($post)) { $post = $this->get($post, Constants::ckmqoekmugkggeym, true); } return $post instanceof WP_Post; } public function uiuwugwykqocmiec($post = null) : ?int { $cqkugkyukikgyyyk = str_word_count(trim(strip_tags($this->souwykwwmyygqyqi($post)))); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('get_post_word_count', $cqkugkyukikgyyyk, $this->get($post)); } public function cuoieqacocyyookg($post) { return floor($this->uiuwugwykqocmiec($post) / 200); } public function yaacqmguuiqwoqay($post) : bool { return Constants::wmmucsiyiyusmssm === $this->ucwmcwqmqwaymkkc($post); } public function cagmcswsqkwuasiy($sciomagaqmgggsiu = Constants::uuqqcaaoioaaimoa) : bool { $sogksuscggsicmac = false; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->eoyueosccuoeqkee() && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $useksmwkuswkwcqg = $this->gueasuouwqysmomu(); if (is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu, true) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg === $sciomagaqmgggsiu) { $sogksuscggsicmac = true; } } return $sogksuscggsicmac; } public function iooowgsqoyqseyuu($post = null, bool $cwwowqyuwccuykom = false) { if (!$cwwowqyuwccuykom && $post) { $cwwowqyuwccuykom = true; } if (!$post) { $post = $this->get(); } if (!is_numeric($post)) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, 'ID'); if (!$post && !$cwwowqyuwccuykom) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->seokosgecygsmqau()) { $post = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->mwyqswsaeeewsosm(); } else { $post = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); } } } return $post; } public function get($post = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, bool $cwwowqyuwccuykom = false) { if (!$post instanceof WP_Post) { if (!$post && $cwwowqyuwccuykom) { $post = null; } else { if (!$post) { $post = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik); } $post = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($post, $aqykuigiuwmmcieu); } } return $post; } public function oguuceugyqgsqewy($post) : bool { return $this->uqwgsuysegkweago($this->gueasuouwqysmomu($post)) && (int) $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) === (int) $this->iooowgsqoyqseyuu($post); } public function uqwgsuysegkweago($sciomagaqmgggsiu = Constants::uuqqcaaoioaaimoa, string $ccamueccusigaaio = Constants::ygoseweigiigswiu) : bool { $sogksuscggsicmac = false; if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { global $pagenow; $yeacayasgueouoqc = $this->cwucesiiikgqsgui() ?: Constants::mswoacegomcucaik; if ($yeacayasgueouoqc === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array($yeacayasgueouoqc, $sciomagaqmgggsiu, true)) { switch ($ccamueccusigaaio) { case Constants::awysmmukegasimmq: $sogksuscggsicmac = $pagenow === 'post.php'; break; case Constants::ocayisqocqoekqiq: $sogksuscggsicmac = $pagenow === 'post-new.php'; if (!$sogksuscggsicmac) { $sogksuscggsicmac = str_contains($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc(), 'wp-admin/post-new.php'); } break; default: $sogksuscggsicmac = in_array($pagenow, ['post.php', 'post-new.php']); } } } return $sogksuscggsicmac; } public function cwucesiiikgqsgui() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($this->get(), Constants::uouymeyqasaeckso); if (!$sqeykgyoooqysmca) { global $typenow, $current_screen; if ($typenow) { $sqeykgyoooqysmca = $typenow; } else { if ($current_screen) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($current_screen, Constants::uouymeyqasaeckso); } } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::uouymeyqasaeckso); if (!$sqeykgyoooqysmca && ($post = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::mswoacegomcucaik))) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu($post); } } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uouymeyqasaeckso); } } return $sqeykgyoooqysmca; } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : ?string { $post = $this->get($post); $ewgwqamkygiqaawc = ''; if ($egkeamycaysqsoma) { $ewgwqamkygiqaawc = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); } else { if ($post) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, Constants::egkuckyqcaygmymg); } } return $ewgwqamkygiqaawc; } public function aqcogscycyycgkuq($post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) : string { return $this->ygwimyogyaqgumam(Constants::uiaeiwkkmoayqasu, $post, $mgkceomocowocqyo); } public function ygqycmmkoiuocoia($post) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($post), Constants::isukysauqkiecswi, 0); } public function ucwmcwqmqwaymkkc($post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) : string { return $this->ygwimyogyaqgumam(Constants::gikuasuikwemyqoq, $post, $mgkceomocowocqyo); } public function mguqscccckuywsya($post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) : string { return $this->ygwimyogyaqgumam(Constants::kaoaqscgacqqskqs, $post, $mgkceomocowocqyo); } public function qkweigiqsaaigqau($post = null) : ?string { $eeamcawaiqocomwy = null; if ($qscaoekmoooeuyqg = $this->mguqscccckuywsya($post)) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg); } return $eeamcawaiqocomwy; } public function ieuwgcuysamemime($post = null, array $wwgucssaecqekuek = []) : ?string { $qscaoekmoooeuyqg = null; if ($eeamcawaiqocomwy = $this->qkweigiqsaaigqau($post)) { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw(Constants::cuyqkgecokgmcwqu, $this->mguqscccckuywsya($post)); $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($ymqmyyeuycgmigyo, $eeamcawaiqocomwy, $wwgucssaecqekuek); } return $qscaoekmoooeuyqg; } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $post = $this->get($post); $iayakwckycsumkqa = null; if (!$gioggcykgoikcwiy || $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->seewsasmyoyciiee($post)) { $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->masoymaamekuykso($post); } return $iayakwckycsumkqa; } public function insert($useksmwkuswkwcqg, array $ywmkwiwkosakssii = []) : ?int { $sogksuscggsicmac = null; $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = $useksmwkuswkwcqg; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uiaeiwkkmoayqasu => '', Constants::siwwqayqwykwqwoy => '', Constants::gikuasuikwemyqoq => '', Constants::isukysauqkiecswi => 0, Constants::egkuckyqcaygmymg => '']); $wyoiwuqokyeeuguk = $this->ciugwooasaqcywas($useksmwkuswkwcqg, [Constants::NAME => $ywmkwiwkosakssii[Constants::uiaeiwkkmoayqasu], Constants::isukysauqkiecswi => $ywmkwiwkosakssii[Constants::isukysauqkiecswi], Constants::goqgcigmiawyauai => 1]); if (!$wyoiwuqokyeeuguk) { $ywmkwiwkosakssii[Constants::kaoaqscgacqqskqs] = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->insert($ywmkwiwkosakssii); } return $sogksuscggsicmac; } public function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) { if (is_array($post)) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, $aiowsaccomcoikus); } return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ygwimyogyaqgumam($aiowsaccomcoikus, $this->iooowgsqoyqseyuu($post), $mgkceomocowocqyo); } public function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool { $post = $this->get($post, Constants::ckmqoekmugkggeym, true); return $post && $this->gueasuouwqysmomu($post) === $sqeykgyoooqysmca; } public function qcgakseyaikigqco($post = null) : ?string { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->get($post)); } public function ycqquoiyyuesegsy($post = null, bool $cwwowqyuwccuykom = false, bool $eoocgqsqmwuegiae = false) : ?string { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->get($post, $cwwowqyuwccuykom), $eoocgqsqmwuegiae); } public function gueasuouwqysmomu($post = null, string $aqykuigiuwmmcieu = Constants::NAME) { $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); if (!$useksmwkuswkwcqg && $post) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, Constants::uouymeyqasaeckso); } if (!$useksmwkuswkwcqg) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uouymeyqasaeckso); } switch ($aqykuigiuwmmcieu) { case Constants::ckmqoekmugkggeym: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); break; case Constants::uissasisiuymwsmu: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($useksmwkuswkwcqg); break; } return $useksmwkuswkwcqg; } public function aismiesamiukkuoy($post, $seyqqsmuaiegkeeq, array $ywmkwiwkosakssii = [], array $qookweymeqawmcwo = []) : string { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $qookweymeqawmcwo = $cwaqscoiqkokyase->ckscqqquyskscaaw($qookweymeqawmcwo, ['link_attr' => [], 'name_wrap' => '%s', 'link_wrap' => '%s', Constants::ucoiewcoucauqwko => []]); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ucoiewcoucauqwko => []]); $uyuaosigqymaqsaa = $ywmkwiwkosakssii[Constants::ucoiewcoucauqwko]; if (!$uyuaosigqymaqsaa) { $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii); } $wwgucssaecqekuek = $qookweymeqawmcwo['link_attr']; $wwgucssaecqekuek['rel'] = Constants::qeueagcuyogwwyky; $nsmgceoqaqogqmuw = ''; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $seyqqsmuaiegkeeq); if (!is_wp_error($migiiksoiymissge)) { $ymqmyyeuycgmigyo = sprintf($qookweymeqawmcwo['name_wrap'], $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk)); $nsmgceoqaqogqmuw .= sprintf($qookweymeqawmcwo['link_wrap'], $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $migiiksoiymissge, $wwgucssaecqekuek)); } } return $nsmgceoqaqogqmuw; } public function kckogqkiycqeumoa($post, $kesssewsiegssiya, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::yewiqemgmmucemey => false]); $iwewcwusemqaiggk = false; $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($post, $kesssewsiegssiya, $ywmkwiwkosakssii); if ($uyuaosigqymaqsaa && isset($uyuaosigqymaqsaa[0])) { $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; } if (!$iwewcwusemqaiggk && ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia($post))) { $iwewcwusemqaiggk = $this->kckogqkiycqeumoa($omwmuycmeqcqokom, $kesssewsiegssiya, $ywmkwiwkosakssii); } return $iwewcwusemqaiggk; } public function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, array $ywmkwiwkosakssii = []) : array { $uyuaosigqymaqsaa = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii); if (!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = []; } return $uyuaosigqymaqsaa; } public function ymuqsscwmcumcama($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uouymeyqasaeckso => $useksmwkuswkwcqg, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function kmegaqgyciwwmegk($qwcmueausqgiwigy, $useksmwkuswkwcqg, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::goqgcigmiawyauai => 10]); if (strlen($qwcmueausqgiwigy) > 1) { $ywmkwiwkosakssii['s'] = $qwcmueausqgiwigy; $ywmkwiwkosakssii['suppress_filters'] = false; } $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->cecaguuoecmccuse('posts_search', [$this, 'cwomqsccicsqseiy'], 10, 2); $wyoiwuqokyeeuguk = $this->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $ywmkwiwkosakssii[Constants::aisguagukaewucii]); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->ggmgmqswqkgecosg('posts_search', [$this, 'cwomqsccicsqseiy']); return $wyoiwuqokyeeuguk; } public function cwomqsccicsqseiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if ($qwcmueausqgiwigy && $gqgemcmoicmgaqie instanceof WP_Query) { $aaycmcgqqqsysccs = '%'; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eqwoegegiamegqsm->yqccgscwmeeyigkg($gqgemcmoicmgaqie->get('s')) . $aaycmcgqqqsysccs; $qwcmueausqgiwigy = $eqwoegegiamegqsm->prepare("{$wpdb->posts}.post_title LIKE %s OR {$wpdb->posts}.post_name LIKE %s", $iwewcwusemqaiggk, $iwewcwusemqaiggk); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $qwcmueausqgiwigy = "({$qwcmueausqgiwigy}) AND {$wpdb->posts}.post_password = ''"; } $qwcmueausqgiwigy = " AND ({$qwcmueausqgiwigy})"; } return $qwcmueausqgiwigy; } public function wgkooswsoccegaew($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::eqomgewoayseioos => $oysoyeaucuawyaky, Constants::gqiasegggowomgie => Constants::eqomgewoayseioos]); return $this->ciugwooasaqcywas($this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function qgisekcaywsmigga($useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, array $ywmkwiwkosakssii = [], string $uiuykcweuosgmwki = '=', string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw([Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => $gwiwsycaaqgwmewg, Constants::ciyoccqkiamemcmm => $aucgaecqisksougg, Constants::ykemsyouoqyoaysg => $uiuykcweuosgmwki]]], $ywmkwiwkosakssii); return $this->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function uswuayuaaosoksqg($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = 0; return $this->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function mmoaikqueyiwcesm($post, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = $this->iooowgsqoyqseyuu($post); return $this->ciugwooasaqcywas($this->gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function qmmimiesyoyuqeqo($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $eyagosskwwmgwmog = $this->uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $omwmuycmeqcqokom->children = $this->mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii); } return $eyagosskwwmgwmog; } public function ooeesicuqgsyoysk($useksmwkuswkwcqg, array $ywmkwiwkosakssii, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $sogksuscggsicmac = []; $gqgemcmoicmgaqie = $this->owicscwgeuqcqaig($useksmwkuswkwcqg, $ywmkwiwkosakssii); if ($gqgemcmoicmgaqie->have_posts()) { while ($gqgemcmoicmgaqie->have_posts()) { $gqgemcmoicmgaqie->the_post(); global $post; if ($post) { switch ($aqykuigiuwmmcieu) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->qcgakseyaikigqco($post); break; case Constants::sauwwsocmukoaayu: $eqgoocgaqwqcimie = $this->ycqquoiyyuesegsy($post, true); break; case Constants::ckmqoekmugkggeym: default: $eqgoocgaqwqcimie = $post; } if ($eqgoocgaqwqcimie) { $sogksuscggsicmac[$this->iooowgsqoyqseyuu($post)] = $eqgoocgaqwqcimie; } } } } return $sogksuscggsicmac; } public function uoaamyooqkiyowsc(array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $post = null; $ywmkwiwkosakssii[Constants::goqgcigmiawyauai] = 1; $suuagcecoyuweoqk = $this->ciugwooasaqcywas([], $ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (!empty($suuagcecoyuweoqk)) { $post = array_pop($suuagcecoyuweoqk); } return $post; } public function ciugwooasaqcywas($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $sogksuscggsicmac = []; $ycmguuqqaiisymgg = [Constants::coigmswsskyoeaci => false, Constants::goqgcigmiawyauai => -1]; if (!empty($useksmwkuswkwcqg)) { $ycmguuqqaiisymgg[Constants::uouymeyqasaeckso] = $useksmwkuswkwcqg; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $ywmkwiwkosakssii = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('get_posts_args', $ywmkwiwkosakssii); if (Constants::oyaoekcogwkcekcc === $aqykuigiuwmmcieu) { $ywmkwiwkosakssii[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; } $wsqwkewmowkuuoqc = $ywmkwiwkosakssii[Constants::coigmswsskyoeaci]; if ($wsqwkewmowkuuoqc && !isset($ywmkwiwkosakssii[Constants::isukysauqkiecswi])) { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = 0; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $wyoiwuqokyeeuguk = $wgkqagumoowawogg->ciugwooasaqcywas($ywmkwiwkosakssii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs], true)) { foreach ($wyoiwuqokyeeuguk as $post) { $gcqseksiskwueksc = $this->iooowgsqoyqseyuu($post); $ksaameoqigiaoigg = null; if (Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu) { if ($meqocwsecsywiiqs = $wgkqagumoowawogg->qcgakseyaikigqco($post)) { $ksaameoqigiaoigg = $meqocwsecsywiiqs; } } else { $ksaameoqigiaoigg = $post; } if ($wsqwkewmowkuuoqc) { $ywmkwiwkosakssii[Constants::isukysauqkiecswi] = $gcqseksiskwueksc; $ksaameoqigiaoigg = [Constants::miceosguuseyyuqe => $ksaameoqigiaoigg, Constants::geocwaecmeeskuci => $this->ciugwooasaqcywas($this->gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu)]; } if ($ksaameoqigiaoigg) { $sogksuscggsicmac[$gcqseksiskwueksc] = $ksaameoqigiaoigg; } } } else { $sogksuscggsicmac = $wyoiwuqokyeeuguk; } return $sogksuscggsicmac; } public function ekwkywuguceaogsk() : array { $wyoiwuqokyeeuguk = []; $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); while ($wgkqagumoowawogg->mgoyskiomyyqmyao()) { $wyoiwuqokyeeuguk[] = $wgkqagumoowawogg->fetch(); } return $wyoiwuqokyeeuguk; } public function owicscwgeuqcqaig($useksmwkuswkwcqg = Constants::mswoacegomcucaik, array $ywmkwiwkosakssii = []) : WP_Query { $ycmguuqqaiisymgg = [Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::gqiasegggowomgie => Constants::kumuoysauoagaiiy, Constants::osocaqqumyuooqyo => '', Constants::eqomgewoayseioos => [], Constants::uouymeyqasaeckso => $useksmwkuswkwcqg, Constants::iwmgegikocuwggua => '', Constants::gikuasuikwemyqoq => '', Constants::kcaoouwiygwwmiok => [], Constants::goqgcigmiawyauai => 5]; $yiasugywggckywoa = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); if (empty($yiasugywggckywoa[Constants::gikuasuikwemyqoq])) { $yiasugywggckywoa[Constants::gikuasuikwemyqoq] = Constants::cqycgsyykemiygou === $yiasugywggckywoa[Constants::uouymeyqasaeckso] ? Constants::yqqwmawaesqquaig : Constants::wmmucsiyiyusmssm; } if (!empty($yiasugywggckywoa[Constants::eqomgewoayseioos])) { $yiasugywggckywoa[Constants::goqgcigmiawyauai] = count($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ugyksakgmeeeqmie($yiasugywggckywoa[Constants::eqomgewoayseioos])); } return new WP_Query($yiasugywggckywoa); } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $post = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $post = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->igawqaomowicuayw($this->iooowgsqoyqseyuu($post), $uusmaiomayssaecw, $cuyooiakswegosog); } public function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = null; if ($post = $this->get($post)) { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post); if ($egkeamycaysqsoma) { $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('get_the_date', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post); } } return $ocogsiouoiuuguym; } public function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = null; if ($post = $this->get($post)) { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post); if ($egkeamycaysqsoma) { $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('get_the_modified_date', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post); } } return $ocogsiouoiuuguym; } public function waoeigwigksoikgu($post, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $this->iooowgsqoyqseyuu($post); return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function ymgsgecsiqeegseg($post = null, string $iueymcwwscwqkiyq = Constants::iiismwgquaowosqw) { $egkygecqiowwuuuu = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ymgsgecsiqeegseg($this->iooowgsqoyqseyuu($post)); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($egkygecqiowwuuuu, $iueymcwwscwqkiyq, 0); } public function wsqeykgqiemswysa(string $sqeykgyoooqysmca = Constants::mswoacegomcucaik, string $iueymcwwscwqkiyq = Constants::wmmucsiyiyusmssm, string $yiyimoacecwoqeko = '') { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ygmcsmegcysyeoss($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq); } public function gamoemyysmgugccu($post = null, string $iueymcwwscwqkiyq = Constants::ALL) : bool { return $this->ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0; } public function auosyisuakguyimw($post, array $ywmkwiwkosakssii = []) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu($post); $ywmkwiwkosakssii[Constants::mswoacegomcucaik] = $post; return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("get_{$sqeykgyoooqysmca}_post_data", [], $ywmkwiwkosakssii); } public function sewesguyaqwccksa($post, $ooiewiwkegguusum = true) : array { $auwuoyyagaiegwae = []; $post = $this->get($post); $sqeykgyoooqysmca = $this->gueasuouwqysmomu($post); $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($post); $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $osysqsakqsskmwos = is_bool($ooiewiwkegguusum) && $ooiewiwkegguusum; if (!is_array($ooiewiwkegguusum)) { $ooiewiwkegguusum = []; } if ($osysqsakqsskmwos || in_array(Constants::mswmgkkakuooukme, $ooiewiwkegguusum, true)) { if (Constants::mswoacegomcucaik === $sqeykgyoooqysmca) { if (($saekwuiigiosswwm = $uuwwyaeymswgsgsi->qqqooiyuyqmyuwqi()) > 0) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($saekwuiigiosswwm); } } else { if ($cskucqcumqsyimye->auiemgkycsemicim($sqeykgyoooqysmca)) { if ($aiyeqweykecsyooy = trailingslashit($wgcaqkewqyygkgaa->myagyqumwekameww($sqeykgyoooqysmca))) { $auwuoyyagaiegwae[] = $aiyeqweykecsyooy; $auwuoyyagaiegwae[] = $aiyeqweykecsyooy . $GLOBALS['wp_rewrite']->pagination_base; } } } } if ($osysqsakqsskmwos || in_array(Constants::emgswoamyaoagksg, $ooiewiwkegguusum, true)) { $wkumqkkskwqecqou = $wgkqagumoowawogg->wowuoqqaosuecgaw(false, '', false); if ($wkumqkkskwqecqou) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($wkumqkkskwqecqou); } $waeiigomskmimyai = $wgkqagumoowawogg->wowuoqqaosuecgaw(true, '', false); if ($waeiigomskmimyai && $waeiigomskmimyai !== $wkumqkkskwqecqou) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($waeiigomskmimyai); } } if ($osysqsakqsskmwos || in_array(Constants::sokiwgiwgagukgsg, $ooiewiwkegguusum, true)) { $acauiioqyiygkwuc = $wgkqagumoowawogg->wowuoqqaosuecgaw(); if ($acauiioqyiygkwuc) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($acauiioqyiygkwuc); } $ioyascsmewkkssio = $wgkqagumoowawogg->wowuoqqaosuecgaw(true); if ($ioyascsmewkkssio && $ioyascsmewkkssio !== $acauiioqyiygkwuc) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($ioyascsmewkkssio); } } if ($osysqsakqsskmwos || in_array(Constants::iwascisiiokuackw, $ooiewiwkegguusum, true)) { if ($cskucqcumqsyimye->auiemgkycsemicim($sqeykgyoooqysmca)) { $wmecaokscgakikym = trailingslashit($gsqycqmccqgwosck->mkaiaewoyaimieqg($this->mguqscccckuywsya($post))); if (trailingslashit($gqusacuooiagkuom->ieokeoyugcmwuumq()) !== $wmecaokscgakikym && trailingslashit($gqusacuooiagkuom->gmigwwwmwemyaayy()) !== $wmecaokscgakikym) { $auwuoyyagaiegwae[] = $wmecaokscgakikym; } } } if ($osysqsakqsskmwos || in_array(Constants::qioguuqkouiccqig, $ooiewiwkegguusum, true)) { $eyagosskwwmgwmog = $wgkqagumoowawogg->iimmeiugygssweyc($post); if (!empty($eyagosskwwmgwmog)) { foreach ($eyagosskwwmgwmog as $gqumacwamusueoqa) { $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($gqumacwamusueoqa); } } } if ($osysqsakqsskmwos || in_array(Constants::ucoiewcoucauqwko, $ooiewiwkegguusum, true)) { $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::wwcycgyaiaksckuk => $sqeykgyoooqysmca]); $syocwsygwkwosayu = []; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($post, $kesssewsiegssiya)) { foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $syocwsygwkwosayu[] = $aoskwucuugeuaeus->cekqoisoaceaqiam($iwewcwusemqaiggk, false); } } } $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $syocwsygwkwosayu); } $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, 'is_string'); return array_flip(array_flip($auwuoyyagaiegwae)); } public function eigkuiwicmciqami() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik); } }
