<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; class Page extends Common { public function okiaumcqquyioqcy() : bool { global $wp_query; return isset($wp_query) && $wp_query->is_posts_page; } public function cykwscocqwykiocm() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($this->ckkgiiuoguqggymc()); } public function ckkgiiuoguqggymc() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); } public function symuoymymumgwkaw() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->ckkgiiuoguqggymc()); } public function icikwuksyiceccmo() : ?string { $oikyogsosqcyueay = $this->cykwscocqwykiocm(); $aaokuekaimigoyue = "\x62\154\x6f\147"; if (!$oikyogsosqcyueay instanceof WP_Post) { goto msqawsuquouuugkc; } $aaokuekaimigoyue = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->aqcogscycyycgkuq($oikyogsosqcyueay); msqawsuquouuugkc: return $aaokuekaimigoyue; } public function umeecawcsseswoec() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->weaommwymsyyeoaw(); } public function somwagieycgkcyec() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->umeecawcsseswoec()); } public function awgkmqkqkqawmqcu() : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); $syuuigcamkiegaqy = $eiicaiwgqkgsekce->oymwkcegiigooaqm("\160\x61\x67\x65\x6e\x6f\167"); return $syuuigcamkiegaqy === "\167\160\55\154\x6f\147\x69\156\56\x70\150\x70" || in_array($aiamqeawckcsuaou, ["\162\160", "\x6c\x6f\x73\164\160\141\163\x73\x77\157\x72\144", "\162\x65\x67\x69\163\164\x65\x72"]); } public function qcgakseyaikigqco($post = null) : ?string { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); if ($post) { goto wakwsokmekawssyi; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto eckksscswgomeoqs; } if ($this->okiaumcqquyioqcy()) { goto myuwuwgiccywkiog; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs()) { goto uaqeuukkceomqisi; } if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto kaacyyeegamkqkak; } $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->syeuyeikogukksam(); kaacyyeegamkqkak: goto imqikuakumuqamky; uaqeuukkceomqisi: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw(); imqikuakumuqamky: goto ackiyyoociyuiaio; myuwuwgiccywkiog: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->cykwscocqwykiocm()); ackiyyoociyuiaio: goto ewgmqmguwukoekoc; eckksscswgomeoqs: $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); ewgmqmguwukoekoc: wakwsokmekawssyi: return $meqocwsecsywiiqs; } public function iqoacwuiemooiysg() : PageInfo { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $yyimiwcuegayoskq = new PageInfo(); if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto usukaqsqeowqkwwu; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto seymakqosammeimy; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto uaeqweeeyaoceeae; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto oqmwiucmyoiwciws; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto gqaiosgasmiekmma; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto syuuameqwoymyswo; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto gaqiaugiyyuoaywe; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto mouaeysyaawwqsmq; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto ayuwgkkummcqqesk; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto cwgsuaukyieoswoq; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto yukscyeaqukseeim; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto lwkkgmcgkowgygcs; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto miuwoyekioyugegk; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto mmiukekqescmgkie; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto okgaykwweumwcsyq; } $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\156\x6b\x6e\x6f\167\156"); goto qwuuagecegiqouig; okgaykwweumwcsyq: $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\x34\x30\64"); qwuuagecegiqouig: goto agmcywmicucyeiig; mmiukekqescmgkie: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($useksmwkuswkwcqg))->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); agmcywmicucyeiig: goto uoowsoawqkggioeo; miuwoyekioyugegk: $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cqycgsyykemiygou); uoowsoawqkggioeo: goto ueyqgegieiwkocck; lwkkgmcgkowgygcs: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)->aseocggwwegcmqes(Constants::imywcsggckkcywgk); ueyqgegieiwkocck: goto ickoqwmqsgowyscy; yukscyeaqukseeim: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); ickoqwmqsgowyscy: goto uwoawkimmaqcwqcq; cwgsuaukyieoswoq: $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw); uwoawkimmaqcwqcq: goto eqgkqikoqkaiuocm; ayuwgkkummcqqesk: $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\x46"), get_the_time("\x64")))->ugaqcouwcuiaemgo(Constants::eggusgsscecmiiee); eqgkqikoqkaiuocm: goto gsiaweqgymagyokg; mouaeysyaawwqsmq: $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\106")))->ugaqcouwcuiaemgo(Constants::qummiiakyucoycws); gsiaweqgymagyokg: goto ismswigsaeymicgu; gaqiaugiyyuoaywe: $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\131")))->ugaqcouwcuiaemgo(Constants::caaieqwcccuueamg); ismswigsaeymicgu: goto kykgeuicqicmuucg; syuuameqwoymyswo: $yyimiwcuegayoskq->qmueseocuuekommo($mumyimcwkaemyyue->siiwuwaswckkuoya())->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese); kykgeuicqicmuucg: goto eeyukwscccmigmuq; gqaiosgasmiekmma: $kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($kesssewsiegssiya); eeyukwscccmigmuq: goto sqummycmewomisus; oqmwiucmyoiwciws: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\147\x5f\151\144"), Constants::ocsomysosuqaimuc))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qeueagcuyogwwyky); sqummycmewomisus: goto ismmoaqwqiyscccu; uaeqweeeyaoceeae: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\141\164"), Constants::qgciomgukmcwscqw))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw); ismmoaqwqiyscccu: goto weciiuggqamwweai; seymakqosammeimy: $yyimiwcuegayoskq->qmueseocuuekommo($this->symuoymymumgwkaw())->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack); weciiuggqamwweai: goto ukaumyigguemyqmg; usukaqsqeowqkwwu: $yyimiwcuegayoskq->qmueseocuuekommo($this->somwagieycgkcyec())->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao); ukaumyigguemyqmg: $yyimiwcuegayoskq->cggwsuueqwqscgei($mumyimcwkaemyyue->esqicqsuigywkaqw()); return $yyimiwcuegayoskq; } public function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($ccamueccusigaaio) { goto oyauiswikoukcyqy; } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto komaikgkmaeoescu; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto wukeekgkakowukck; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto mekmkiaykamiugmo; } $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); goto okieooymmiqqwsui; mekmkiaykamiugmo: global $wp; $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy($wp->request); okieooymmiqqwsui: goto wwgssoakwoscwoss; wukeekgkakowukck: $migiiksoiymissge = $this->symuoymymumgwkaw(); wwgssoakwoscwoss: goto syeosgmcsoykgmoi; komaikgkmaeoescu: $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy(); syeosgmcsoykgmoi: goto cmaemkmgukqugeow; oyauiswikoukcyqy: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); cmaemkmgukqugeow: return trailingslashit($migiiksoiymissge); } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $iayakwckycsumkqa = null; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto kyayieiyyyqgkcyc; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto aiaagscmgeyuqaky; } if ($this->okiaumcqquyioqcy()) { goto qkqkgaaomgkyowwy; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto gammgmwagsemkuua; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto kgyqmwecomucoumg; } $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); goto euekwowaokcqsgsw; kgyqmwecomucoumg: $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wieoiwogwmcwukom(); euekwowaokcqsgsw: goto euuqcskgauwamyuw; gammgmwagsemkuua: $sqeykgyoooqysmca = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); if (!$sqeykgyoooqysmca) { goto qmukimkmkeagqocg; } $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export; qmukimkmkeagqocg: euuqcskgauwamyuw: goto wioguogamqaikqqy; qkqkgaaomgkyowwy: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->ckkgiiuoguqggymc(), $gioggcykgoikcwiy); wioguogamqaikqqy: goto wmgigiqsosicakwu; aiaagscmgeyuqaky: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->umeecawcsseswoec(), $gioggcykgoikcwiy); wmgigiqsosicakwu: goto uwaoaysiccasmygw; kyayieiyyyqgkcyc: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); uwaoaysiccasmygw: return $iayakwckycsumkqa; } public function agegeeiiacceomke(string $aaokuekaimigoyue, string $meqocwsecsywiiqs, string $omkysikckkcieckq = null, array $ywmkwiwkosakssii = []) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $qkqgcaykemoiecma->get($omkysikckkcieckq); $mksyucucyswaukig = null; if (!$suaemuyiacqyugsm) { goto okccyiwkococowmi; } $mksyucucyswaukig = $seumokooiykcomco->get($suaemuyiacqyugsm); okccyiwkococowmi: if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) { goto moaqsaoasisemagk; } $ksiyqouuaoymsycg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::imywcsggckkcywgk, [Constants::ieyywsoeoqmceucw => $aaokuekaimigoyue, Constants::isukysauqkiecswi => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::isukysauqkiecswi, 0), Constants::goqgcigmiawyauai => 1], Constants::oyaoekcogwkcekcc); if (isset($ksiyqouuaoymsycg[0]) && $ksiyqouuaoymsycg[0]) { goto iquwggoqmwgkouio; } $suaemuyiacqyugsm = false; goto aumkeyeqwqukcyqm; iquwggoqmwgkouio: $suaemuyiacqyugsm = $ksiyqouuaoymsycg[0]; $qkqgcaykemoiecma->update($omkysikckkcieckq, $suaemuyiacqyugsm); aumkeyeqwqukcyqm: moaqsaoasisemagk: if ($suaemuyiacqyugsm) { goto sgggogwmywukuwoq; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::siwwqayqwykwqwoy => $meqocwsecsywiiqs, Constants::uiaeiwkkmoayqasu => $aaokuekaimigoyue, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); $suaemuyiacqyugsm = $seumokooiykcomco->insert(Constants::imywcsggckkcywgk, $ywmkwiwkosakssii); if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) { goto fauegywkmasowmki; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($omkysikckkcieckq, $suaemuyiacqyugsm); fauegywkmasowmki: $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(false); sgggogwmywukuwoq: } public function ssacaeeassumyuws(?string $migiiksoiymissge = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, $useksmwkuswkwcqg = Constants::imywcsggckkcywgk) { if ($migiiksoiymissge) { goto bkusemkaeowgcggg; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); bkusemkaeowgcggg: $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu); } }
