<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; class Page extends Common { public function okiaumcqquyioqcy() : bool { global $wp_query; return isset($wp_query) && $wp_query->is_posts_page; } public function cykwscocqwykiocm() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($this->ckkgiiuoguqggymc()); } public function ckkgiiuoguqggymc() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); } public function symuoymymumgwkaw() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->ckkgiiuoguqggymc()); } public function icikwuksyiceccmo() : ?string { $oikyogsosqcyueay = $this->cykwscocqwykiocm(); $aaokuekaimigoyue = "\142\x6c\x6f\x67"; if (!$oikyogsosqcyueay instanceof WP_Post) { goto uokamacqkkiqccku; } $aaokuekaimigoyue = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->aqcogscycyycgkuq($oikyogsosqcyueay); uokamacqkkiqccku: return $aaokuekaimigoyue; } public function umeecawcsseswoec() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->weaommwymsyyeoaw(); } public function somwagieycgkcyec() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->umeecawcsseswoec()); } public function awgkmqkqkqawmqcu() : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); $syuuigcamkiegaqy = $eiicaiwgqkgsekce->oymwkcegiigooaqm("\x70\141\x67\x65\156\x6f\167"); return $syuuigcamkiegaqy === "\x77\160\x2d\154\x6f\x67\151\156\56\x70\150\x70" || in_array($aiamqeawckcsuaou, ["\162\x70", "\154\x6f\163\164\160\141\163\163\167\157\x72\144", "\162\x65\147\151\163\x74\145\162"]); } public function qcgakseyaikigqco($post = null) : ?string { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); if ($post) { goto cueyocuoyqoygsqk; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto wuqqmyecwsmegamk; } if ($this->okiaumcqquyioqcy()) { goto giykkoouiosqeuqo; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs()) { goto wmyaoiwaoycgwucw; } if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto gmocwmmyommsqkky; } $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->syeuyeikogukksam(); gmocwmmyommsqkky: goto ykuewakwswmuaoqq; wmyaoiwaoycgwucw: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw(); ykuewakwswmuaoqq: goto ogsmeaeskmkauwwy; giykkoouiosqeuqo: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->cykwscocqwykiocm()); ogsmeaeskmkauwwy: goto wywaockmiweeueom; wuqqmyecwsmegamk: $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); wywaockmiweeueom: cueyocuoyqoygsqk: return $meqocwsecsywiiqs; } public function iqoacwuiemooiysg() : PageInfo { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $yyimiwcuegayoskq = new PageInfo(); if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto ggiiuoqggyauekgs; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto kuusyaqguycoyiia; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto oaymmkagwocukmyq; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto qamicqyikayyacok; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto aaoekkysuimcamyu; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto msqmakqaiawgqeau; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto qmukeceewgmekoae; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto mgkwqmyqgswasocy; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto aycyouisaiokysqw; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto syoyogomscqcsoyk; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto iuwcskswgaeuqumi; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto iguyoiwiuikugekq; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto iycouaqccscasucc; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto uqaymuykyqsuayso; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto oieimksmyyeyosik; } $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\165\x6e\x6b\156\x6f\x77\156"); goto qqqecycaqiuckqge; oieimksmyyeyosik: $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\x34\60\x34"); qqqecycaqiuckqge: goto imowaciskmueoogo; uqaymuykyqsuayso: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($useksmwkuswkwcqg))->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); imowaciskmueoogo: goto uicoowkoscsuucui; iycouaqccscasucc: $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cqycgsyykemiygou); uicoowkoscsuucui: goto weeosewyimcickoi; iguyoiwiuikugekq: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)->aseocggwwegcmqes(Constants::imywcsggckkcywgk); weeosewyimcickoi: goto ggaqgegasaaiuacg; iuwcskswgaeuqumi: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); ggaqgegasaaiuacg: goto aaaicwymgocaseis; syoyogomscqcsoyk: $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw); aaaicwymgocaseis: goto moequykwukcqmiga; aycyouisaiokysqw: $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\131"), get_the_time("\x46"), get_the_time("\144")))->ugaqcouwcuiaemgo(Constants::eggusgsscecmiiee); moequykwukcqmiga: goto iuimkcgcsyemcuei; mgkwqmyqgswasocy: $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\x46")))->ugaqcouwcuiaemgo(Constants::qummiiakyucoycws); iuimkcgcsyemcuei: goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo(Constants::caaieqwcccuueamg); somsmcmoyaiiwuyk: goto iuukukcykqykisaa; msqmakqaiawgqeau: $yyimiwcuegayoskq->qmueseocuuekommo($mumyimcwkaemyyue->siiwuwaswckkuoya())->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese); iuukukcykqykisaa: goto wugqaoggyqusmaoa; aaoekkysuimcamyu: $kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($kesssewsiegssiya); wugqaoggyqusmaoa: goto oasqosiqcsiyyaye; qamicqyikayyacok: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\x67\137\x69\144"), Constants::ocsomysosuqaimuc))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qeueagcuyogwwyky); oasqosiqcsiyyaye: goto kuwwysummgiakgwo; oaymmkagwocukmyq: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\141\164"), Constants::qgciomgukmcwscqw))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw); kuwwysummgiakgwo: goto imiqucuaiyoaeaka; kuusyaqguycoyiia: $yyimiwcuegayoskq->qmueseocuuekommo($this->symuoymymumgwkaw())->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack); imiqucuaiyoaeaka: goto yyeiqoiuweqikyyq; ggiiuoqggyauekgs: $yyimiwcuegayoskq->qmueseocuuekommo($this->somwagieycgkcyec())->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao); yyeiqoiuweqikyyq: $yyimiwcuegayoskq->cggwsuueqwqscgei($mumyimcwkaemyyue->esqicqsuigywkaqw()); return $yyimiwcuegayoskq; } public function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($ccamueccusigaaio) { goto ogmogeeogucogway; } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto ikqwewkaooqqcwmw; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto cqokwokkmcecokwi; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto qqyqygkmkeeuaiss; } $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); goto myccwweewiwguqaa; qqyqygkmkeeuaiss: global $wp; $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy($wp->request); myccwweewiwguqaa: goto qgaoikokgokgqaqi; cqokwokkmcecokwi: $migiiksoiymissge = $this->symuoymymumgwkaw(); qgaoikokgokgqaqi: goto oyqwymwomuameswa; ikqwewkaooqqcwmw: $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy(); oyqwymwomuameswa: goto ymcwgkmiysmukacs; ogmogeeogucogway: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); ymcwgkmiysmukacs: return trailingslashit($migiiksoiymissge); } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $iayakwckycsumkqa = null; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto uqckgkumgouqgcus; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto iwsckisegswykacc; } if ($this->okiaumcqquyioqcy()) { goto ecyuccaigwwcquoq; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto mokwmqowycmwwkem; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto eukmaswisycyiwik; } $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); goto ysgkwckuuwmeqmim; eukmaswisycyiwik: $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wieoiwogwmcwukom(); ysgkwckuuwmeqmim: goto wiakkcgyggaeaeoa; mokwmqowycmwwkem: $sqeykgyoooqysmca = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); if (!$sqeykgyoooqysmca) { goto auycewyimycgsusg; } $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export; auycewyimycgsusg: wiakkcgyggaeaeoa: goto oesgammmiwwkggki; ecyuccaigwwcquoq: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->ckkgiiuoguqggymc(), $gioggcykgoikcwiy); oesgammmiwwkggki: goto aawsuekkqeecmsuu; iwsckisegswykacc: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->umeecawcsseswoec(), $gioggcykgoikcwiy); aawsuekkqeecmsuu: goto sgiyakiusoqeesgi; uqckgkumgouqgcus: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); sgiyakiusoqeesgi: return $iayakwckycsumkqa; } public function agegeeiiacceomke(string $aaokuekaimigoyue, string $meqocwsecsywiiqs, string $omkysikckkcieckq = null, array $ywmkwiwkosakssii = []) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $qkqgcaykemoiecma->get($omkysikckkcieckq); $mksyucucyswaukig = null; if (!$suaemuyiacqyugsm) { goto mmkoaqwkqwweiuco; } $mksyucucyswaukig = $seumokooiykcomco->get($suaemuyiacqyugsm); mmkoaqwkqwweiuco: if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) { goto egekcweywqwukqwq; } $ksiyqouuaoymsycg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::imywcsggckkcywgk, [Constants::ieyywsoeoqmceucw => $aaokuekaimigoyue, Constants::isukysauqkiecswi => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::isukysauqkiecswi, 0), Constants::goqgcigmiawyauai => 1], Constants::oyaoekcogwkcekcc); if (isset($ksiyqouuaoymsycg[0]) && $ksiyqouuaoymsycg[0]) { goto wwwyuwogyaymawes; } $suaemuyiacqyugsm = false; goto suigamkkgmwiaakg; wwwyuwogyaymawes: $suaemuyiacqyugsm = $ksiyqouuaoymsycg[0]; $qkqgcaykemoiecma->update($omkysikckkcieckq, $suaemuyiacqyugsm); suigamkkgmwiaakg: egekcweywqwukqwq: if ($suaemuyiacqyugsm) { goto ouaaoissmeyugeye; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::siwwqayqwykwqwoy => $meqocwsecsywiiqs, Constants::uiaeiwkkmoayqasu => $aaokuekaimigoyue, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); $suaemuyiacqyugsm = $seumokooiykcomco->insert(Constants::imywcsggckkcywgk, $ywmkwiwkosakssii); if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) { goto sgkksaaokaceycie; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($omkysikckkcieckq, $suaemuyiacqyugsm); sgkksaaokaceycie: $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(false); ouaaoissmeyugeye: } public function ssacaeeassumyuws(?string $migiiksoiymissge = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, $useksmwkuswkwcqg = Constants::imywcsggckkcywgk) { if ($migiiksoiymissge) { goto uyagiwoqkikiygme; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); uyagiwoqkikiygme: $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu); } }
