<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9f11bf9d9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use WP_Error; use WP_Taxonomy; use WP_Term; class Term extends Common { public function is($iwewcwusemqaiggk) : bool { if (is_numeric($iwewcwusemqaiggk)) { $iwewcwusemqaiggk = $this->get($iwewcwusemqaiggk); } return $iwewcwusemqaiggk instanceof WP_Term; } public function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string { $iwewcwusemqaiggk = $this->get($iwewcwusemqaiggk); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, Constants::NAME, ''); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\145\164\137\x74\145\x72\155\137\x74\x69\x74\x6c\x65", $ymqmyyeuycgmigyo, $iwewcwusemqaiggk); } public function aqcogscycyycgkuq($iwewcwusemqaiggk = null, $kesssewsiegssiya = '') : string { $iwewcwusemqaiggk = $this->get($iwewcwusemqaiggk, $kesssewsiegssiya); $aaokuekaimigoyue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, Constants::ouywiegeiyuaaawo, ''); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\x65\164\x5f\164\x65\x72\x6d\137\163\154\x75\x67", $aaokuekaimigoyue, $iwewcwusemqaiggk); } public function usieywkaugusugwm($iwewcwusemqaiggk, ?string $uusmaiomayssaecw = null) { if (!$uusmaiomayssaecw) { $uusmaiomayssaecw = "{$this->yyoeeseewqmmyaee($iwewcwusemqaiggk)}\137\164\150\165\155\142\156\141\x69\x6c"; } $uickqscmwgggsmgy = $this->igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\x65\164\x5f\x74\x65\162\155\137\x74\150\165\155\142\x6e\141\151\x6c", $uickqscmwgggsmgy, $iwewcwusemqaiggk); } public function smwweookeqkiiygs($iwewcwusemqaiggk, string $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, array $wwgucssaecqekuek = [], string $cqwsmuwyeumwscki = '') : string { $nsmgceoqaqogqmuw = ''; if ($uickqscmwgggsmgy = $this->usieywkaugusugwm($iwewcwusemqaiggk, $cqwsmuwyeumwscki)) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($uickqscmwgggsmgy, $oiegiwogmwmawkeo, $wwgucssaecqekuek); } return (string) $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\145\164\137\x74\x65\162\x6d\137\164\x68\x75\x6d\142\156\x61\x69\x6c\137\150\164\x6d\x6c", $nsmgceoqaqogqmuw, $iwewcwusemqaiggk, $oiegiwogmwmawkeo, $wwgucssaecqekuek); } public function iooowgsqoyqseyuu($iwewcwusemqaiggk = null, bool $cwwowqyuwccuykom = false) { if (!is_numeric($iwewcwusemqaiggk)) { if (!$iwewcwusemqaiggk && !$cwwowqyuwccuykom) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(); } if ($iwewcwusemqaiggk instanceof WP_Term) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, Constants::ooqggksagkoaeeke); } } return $iwewcwusemqaiggk; } public function get($iwewcwusemqaiggk = null, string $kesssewsiegssiya = '') { if (!$iwewcwusemqaiggk instanceof WP_Term) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk, $kesssewsiegssiya); } if (is_wp_error($iwewcwusemqaiggk)) { $iwewcwusemqaiggk = ''; } return $iwewcwusemqaiggk; } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { if (!$kesssewsiegssiya) { $kesssewsiegssiya = $this->yyoeeseewqmmyaee($iwewcwusemqaiggk); } if (is_numeric($iwewcwusemqaiggk)) { $iwewcwusemqaiggk = (int) $iwewcwusemqaiggk; } $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya); $aqykuigiuwmmcieu = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu)) { $aqykuigiuwmmcieu = ''; } return $aqykuigiuwmmcieu; } public function ciugwooasaqcywas($kesssewsiegssiya, array $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::coigmswsskyoeaci => false]); if ($kesssewsiegssiya instanceof WP_Taxonomy) { $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya); } $ywmkwiwkosakssii[Constants::gmmygyiecgmggaam] = $kesssewsiegssiya; $wsqwkewmowkuuoqc = $ywmkwiwkosakssii[Constants::coigmswsskyoeaci]; if ($wsqwkewmowkuuoqc && !isset($ywmkwiwkosakssii[Constants::qioguuqkouiccqig])) { $ywmkwiwkosakssii[Constants::qioguuqkouiccqig] = 0; } $uyuaosigqymaqsaa = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ywmkwiwkosakssii); if (!is_wp_error($uyuaosigqymaqsaa)) { $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ucicuwcaawugkseg = $this->iooowgsqoyqseyuu($iwewcwusemqaiggk); if (is_numeric($ucicuwcaawugkseg)) { switch ($aqykuigiuwmmcieu) { case Constants::eoaiagsgqsmskugs: $ccamueccusigaaio = $this->qcgakseyaikigqco($iwewcwusemqaiggk); break; case Constants::emgcgiseaoouacge: $ccamueccusigaaio = $this->aqcogscycyycgkuq($iwewcwusemqaiggk); break; case Constants::ckmqoekmugkggeym: default: $ccamueccusigaaio = $iwewcwusemqaiggk; } if ($wsqwkewmowkuuoqc) { $ywmkwiwkosakssii[Constants::qioguuqkouiccqig] = $ucicuwcaawugkseg; $ccamueccusigaaio = [Constants::miceosguuseyyuqe => $ccamueccusigaaio, Constants::geocwaecmeeskuci => $this->ciugwooasaqcywas($this->yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii)]; } $sogksuscggsicmac[$ucicuwcaawugkseg] = $ccamueccusigaaio; } } } return $sogksuscggsicmac; } public function wgkooswsoccegaew(array $oysoyeaucuawyaky, array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ackcaikowcokggsc => $cwaqscoiqkokyase->miskwwyaikcioysg($oysoyeaucuawyaky)]); return $this->ciugwooasaqcywas($this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::emgcgiseaoouacge]), $ywmkwiwkosakssii); } public function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::eymwucuaaiiciymc => 10]); if (strlen($meqocwsecsywiiqs) > 1) { $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $meqocwsecsywiiqs; } return $this->ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii); } public function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => $gwiwsycaaqgwmewg, Constants::ciyoccqkiamemcmm => $aucgaecqisksougg]]]); return $this->ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii); } public function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { return $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($iwewcwusemqaiggk, string $uusmaiomayssaecw = '', bool $cuyooiakswegosog = true) { $ugugimquukqwogge = false; if ($iwewcwusemqaiggk = (int) $this->iooowgsqoyqseyuu($iwewcwusemqaiggk)) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw, $cuyooiakswegosog); if ('' === $uusmaiomayssaecw && is_array($ugugimquukqwogge)) { foreach ($ugugimquukqwogge as $wgywewwaswowuooi => $uiymkeeaukcyqqik) { if (is_array($uiymkeeaukcyqqik) && 1 === count($uiymkeeaukcyqqik)) { $ugugimquukqwogge[$wgywewwaswowuooi] = reset($uiymkeeaukcyqqik); } } } } return $ugugimquukqwogge; } public function iyssgoiwgwygeacg($uyuaosigqymaqsaa, string $useksmwkuswkwcqg = Constants::mswoacegomcucaik, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, $this->kucyssqeaqscgssq($uyuaosigqymaqsaa, $ywmkwiwkosakssii)); } public function kucyssqeaqscgssq($uyuaosigqymaqsaa, array $ywmkwiwkosakssii = []) : array { $oysoyeaucuawyaky = []; $kesssewsiegssiya = ''; if (is_array($uyuaosigqymaqsaa)) { foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if ($iwewcwusemqaiggk instanceof WP_Term) { $oysoyeaucuawyaky[] = $this->iooowgsqoyqseyuu($iwewcwusemqaiggk); $kesssewsiegssiya = $this->yyoeeseewqmmyaee($iwewcwusemqaiggk); } else { $oysoyeaucuawyaky = $uyuaosigqymaqsaa; $kesssewsiegssiya = $this->yyoeeseewqmmyaee($iwewcwusemqaiggk); break; } } } else { $oysoyeaucuawyaky = $this->iooowgsqoyqseyuu($uyuaosigqymaqsaa); $kesssewsiegssiya = $this->yyoeeseewqmmyaee($uyuaosigqymaqsaa); } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kymceekcoyyeuocm => [[Constants::gmmygyiecgmggaam => $kesssewsiegssiya, Constants::gueokgaoyascgeqe => Constants::ooqggksagkoaeeke, Constants::ucoiewcoucauqwko => $oysoyeaucuawyaky]]]); } public function yyoeeseewqmmyaee($iwewcwusemqaiggk, string $aqykuigiuwmmcieu = Constants::NAME) { $kesssewsiegssiya = ''; if ($egcqoiemwoyoaewe = $this->get($iwewcwusemqaiggk)) { $kesssewsiegssiya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($egcqoiemwoyoaewe, Constants::gmmygyiecgmggaam); switch ($aqykuigiuwmmcieu) { case Constants::ckmqoekmugkggeym: $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); break; case Constants::uissasisiuymwsmu: $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->uikgwcuascgeissw($kesssewsiegssiya); break; } } return $kesssewsiegssiya; } public function mmoaikqueyiwcesm($iwewcwusemqaiggk, array $ywmkwiwkosakssii = []) : array { $okcscwesammossuq = []; if ($iwewcwusemqaiggk = $this->iooowgsqoyqseyuu($iwewcwusemqaiggk)) { $ywmkwiwkosakssii["\x70\141\x72\x65\156\164"] = $iwewcwusemqaiggk; $okcscwesammossuq = $this->ciugwooasaqcywas($this->yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii); } return $okcscwesammossuq; } public function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null) { $migkyseymeomymmy = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($kesssewsiegssiya) { if (!$iwewcwusemqaiggk) { $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { $iwewcwusemqaiggk = ''; } } $iwewcwusemqaiggk = $this->iooowgsqoyqseyuu($iwewcwusemqaiggk); if ($iwewcwusemqaiggk) { $migkyseymeomymmy = $mumyimcwkaemyyue->qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk); } } if (!$migkyseymeomymmy && Constants::qgciomgukmcwscqw === $kesssewsiegssiya && $mumyimcwkaemyyue->sgayqmgoigoseaoo($iwewcwusemqaiggk)) { $migkyseymeomymmy = true; } if (!$migkyseymeomymmy) { $iwewcwusemqaiggk = false; } return $iwewcwusemqaiggk; } public function esqgqsacwywoakok($kesssewsiegssiya, bool $koaqeegoeiaiccse = true) : array { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $mksyucucyswaukig = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); return [Constants::qaacaqioeyiuakeu => $koaqeegoeiaiccse, Constants::NAME => "\x6e\x65\167{$ymqmyyeuycgmigyo}\x5f\x70\141\x72\x65\156\x74", Constants::gqiasegggowomgie => Constants::gouqcwikiiygyasc, Constants::gmmygyiecgmggaam => $ymqmyyeuycgmigyo, Constants::mkucwyayaakigquq => false, Constants::ikagyegqaweawkkc => true, "\x73\x68\157\x77\137\x6f\x70\x74\x69\x6f\x6e\x5f\x6e\157\156\145" => "\x26\155\144\x61\163\x68\x3b\40{$mksyucucyswaukig->labels->parent_item}\40\x26\x6d\144\x61\163\x68\x3b"]; } public function qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk = null) : string { $nsmgceoqaqogqmuw = ''; if ($aiowsaccomcoikus instanceof Field) { if ($iwewcwusemqaiggk && !$aiowsaccomcoikus->qooeaookuemoqecm()) { $eqgoocgaqwqcimie = $this->igawqaomowicuayw($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea(), true); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } $wwgucssaecqekuek = ["\x63\154\141\x73\x73" => "\146\157\162\x6d\55\x66\x69\x65\154\144"]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($iwewcwusemqaiggk) { $yukwwaakiyeueawg = $swqimwqeweekeusq->uuccukgasskgimsq("\164\150", [], $aiowsaccomcoikus->qcgakseyaikigqco()); $aiowsaccomcoikus->gswweykyogmsyawy(''); $oycckgakyiyswgcy = $swqimwqeweekeusq->uuccukgasskgimsq("\x74\144", [], $aiowsaccomcoikus->render()); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\164\x72", $wwgucssaecqekuek, [$yukwwaakiyeueawg, $oycckgakyiyswgcy]); } else { $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($aiowsaccomcoikus->render(), $wwgucssaecqekuek); } } return $nsmgceoqaqogqmuw; } public function ygqycmmkoiuocoia($iwewcwusemqaiggk) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($iwewcwusemqaiggk), Constants::qioguuqkouiccqig); } public function owaokmsayecmasqu($iwewcwusemqaiggk) { if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia($iwewcwusemqaiggk)) { $iwewcwusemqaiggk = $this->owaokmsayecmasqu($omwmuycmeqcqokom); } return $iwewcwusemqaiggk; } public function cekqoisoaceaqiam($iwewcwusemqaiggk, bool $eemoggewcsiqqgio = true) : array { $auwuoyyagaiegwae = []; $iwewcwusemqaiggk = $this->get($iwewcwusemqaiggk); $voccgqswsiwauyow = $this->qmgcisuuikgmqcsu($iwewcwusemqaiggk); if ($voccgqswsiwauyow) { $auwuoyyagaiegwae[] = $voccgqswsiwauyow; if ($weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()) { $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count; $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu); $giqggecqqikcysgq = min($ocqawgquwsqioses, 10); for ($ciyackuwsqkoqese = 2; $ciyackuwsqkoqese <= $giqggecqqikcysgq; $ciyackuwsqkoqese++) { $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\160\x61\147\145\x2f" . user_trailingslashit($ciyackuwsqkoqese); $auwuoyyagaiegwae[] = $oaeeeywcmcskwwgy; } } } if ($eemoggewcsiqqgio) { $wyoiwuqokyeeuguk = $this->iyssgoiwgwygeacg($iwewcwusemqaiggk, null); foreach ($wyoiwuqokyeeuguk as $post) { $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post)); } } return $auwuoyyagaiegwae; } }
