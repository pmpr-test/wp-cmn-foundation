<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; class Page extends Common { public function okiaumcqquyioqcy() : bool { global $wp_query; return isset($wp_query) && $wp_query->is_posts_page; } public function cykwscocqwykiocm() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($this->ckkgiiuoguqggymc()); } public function ckkgiiuoguqggymc() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); } public function symuoymymumgwkaw() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->ckkgiiuoguqggymc()); } public function icikwuksyiceccmo() : ?string { $oikyogsosqcyueay = $this->cykwscocqwykiocm(); $aaokuekaimigoyue = "\x62\154\x6f\x67"; if (!$oikyogsosqcyueay instanceof WP_Post) { goto iyuiasiuowggciss; } $aaokuekaimigoyue = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->aqcogscycyycgkuq($oikyogsosqcyueay); iyuiasiuowggciss: return $aaokuekaimigoyue; } public function umeecawcsseswoec() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->weaommwymsyyeoaw(); } public function somwagieycgkcyec() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->umeecawcsseswoec()); } public function awgkmqkqkqawmqcu() : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); $syuuigcamkiegaqy = $eiicaiwgqkgsekce->oymwkcegiigooaqm("\160\141\147\x65\156\157\x77"); return $syuuigcamkiegaqy === "\167\x70\55\x6c\157\x67\151\156\56\x70\150\x70" || in_array($aiamqeawckcsuaou, ["\x72\x70", "\154\157\163\164\x70\x61\163\x73\x77\x6f\162\144", "\x72\x65\x67\151\163\x74\145\162"]); } public function qcgakseyaikigqco($post = null) : ?string { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); if ($post) { goto gkyuckeugacsewka; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto ukmkcwicoqcoyqog; } if ($this->okiaumcqquyioqcy()) { goto gqaecycgekomqqgu; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs()) { goto mowimwgkwoymuoae; } if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto yquwqeooeyyociqm; } $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->syeuyeikogukksam(); yquwqeooeyyociqm: goto yukcsywomcgeqoiq; mowimwgkwoymuoae: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw(); yukcsywomcgeqoiq: goto cygqsmeoqscsscqm; gqaecycgekomqqgu: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->cykwscocqwykiocm()); cygqsmeoqscsscqm: goto siuaqaksaumkaeui; ukmkcwicoqcoyqog: $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); siuaqaksaumkaeui: gkyuckeugacsewka: return $meqocwsecsywiiqs; } public function iqoacwuiemooiysg() : PageInfo { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $yyimiwcuegayoskq = new PageInfo(); if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto wuuqakiyccsuwswc; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto umkugowakqmaakky; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto gcqeuqmciwqwqisq; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto wyscaumqgyqycymq; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto uewomuwyiswwamwg; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto imwggkqiceiqwwyw; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto oqoksuwkayakeyco; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto kmqgwuksekimwosw; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto awgeaewuaksssysc; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto wiikygmkoykkkgyw; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto kkowueuygsqqgogc; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto muaokgycwsoimmaw; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto yyyuemkeyacsssye; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto yesymsikkwmuikuc; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto caeucwusaisgqaoe; } $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\x6e\x6b\156\x6f\x77\x6e"); goto cgksasyqkkiiowyg; caeucwusaisgqaoe: $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\x30\64"); cgksasyqkkiiowyg: goto gessacesaaekqkws; yesymsikkwmuikuc: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($useksmwkuswkwcqg))->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); gessacesaaekqkws: goto eqeosomseicwmwqu; yyyuemkeyacsssye: $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cqycgsyykemiygou); eqeosomseicwmwqu: goto komymyuaekmkkiko; muaokgycwsoimmaw: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)->aseocggwwegcmqes(Constants::imywcsggckkcywgk); komymyuaekmkkiko: goto qccawiseummsemsk; kkowueuygsqqgogc: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); qccawiseummsemsk: goto imyemkiyouuuequq; wiikygmkoykkkgyw: $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw); imyemkiyouuuequq: goto mukmkmiwaaowwymu; awgeaewuaksssysc: $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\131"), get_the_time("\x46"), get_the_time("\144")))->ugaqcouwcuiaemgo(Constants::eggusgsscecmiiee); mukmkmiwaaowwymu: goto egamkewimgoayiwc; kmqgwuksekimwosw: $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\106")))->ugaqcouwcuiaemgo(Constants::qummiiakyucoycws); egamkewimgoayiwc: goto ueikeuosueikmmqy; oqoksuwkayakeyco: $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo(Constants::caaieqwcccuueamg); ueikeuosueikmmqy: goto yoummmmsocscggua; imwggkqiceiqwwyw: $yyimiwcuegayoskq->qmueseocuuekommo($mumyimcwkaemyyue->siiwuwaswckkuoya())->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese); yoummmmsocscggua: goto cceqaegwsqgaqges; uewomuwyiswwamwg: $kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($kesssewsiegssiya); cceqaegwsqgaqges: goto sgkiwwkeeuyuyqwg; wyscaumqgyqycymq: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\x67\x5f\x69\x64"), Constants::ocsomysosuqaimuc))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qeueagcuyogwwyky); sgkiwwkeeuyuyqwg: goto okmuocsmgiyuiggc; gcqeuqmciwqwqisq: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x61\x74"), Constants::qgciomgukmcwscqw))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw); okmuocsmgiyuiggc: goto ggyguomagomqcmkq; umkugowakqmaakky: $yyimiwcuegayoskq->qmueseocuuekommo($this->symuoymymumgwkaw())->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack); ggyguomagomqcmkq: goto ccccywcecqgsswqk; wuuqakiyccsuwswc: $yyimiwcuegayoskq->qmueseocuuekommo($this->somwagieycgkcyec())->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao); ccccywcecqgsswqk: $yyimiwcuegayoskq->cggwsuueqwqscgei($mumyimcwkaemyyue->esqicqsuigywkaqw()); return $yyimiwcuegayoskq; } public function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($ccamueccusigaaio) { goto yuyamyuwcskywmgg; } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto sqkqeueggemiwaqi; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto coukkakgwkwmoyou; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto ogcysuekkcyswiku; } $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); goto koeyooaqusayoskm; ogcysuekkcyswiku: global $wp; $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy($wp->request); koeyooaqusayoskm: goto mqmqcqqgqcmiqeyu; coukkakgwkwmoyou: $migiiksoiymissge = $this->symuoymymumgwkaw(); mqmqcqqgqcmiqeyu: goto aiggskceoswousgw; sqkqeueggemiwaqi: $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy(); aiggskceoswousgw: goto wmyggsuagwosceiu; yuyamyuwcskywmgg: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); wmyggsuagwosceiu: return trailingslashit($migiiksoiymissge); } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $iayakwckycsumkqa = null; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto wuaogegqaecwwkyo; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto akcmkmaymmcekecu; } if ($this->okiaumcqquyioqcy()) { goto yauqaiisowsgmsau; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto mmoceucgeiaguqsm; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto oqckmkkyuymqomww; } $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); goto gmqqsceqqmkeuwsg; oqckmkkyuymqomww: $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wieoiwogwmcwukom(); gmqqsceqqmkeuwsg: goto sgyysmcsyuaucmau; mmoceucgeiaguqsm: $sqeykgyoooqysmca = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); if (!$sqeykgyoooqysmca) { goto myiuoyiycqukwuus; } $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export; myiuoyiycqukwuus: sgyysmcsyuaucmau: goto oasuqwiwsowakwam; yauqaiisowsgmsau: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->ckkgiiuoguqggymc(), $gioggcykgoikcwiy); oasuqwiwsowakwam: goto qcogmismkiigwkcy; akcmkmaymmcekecu: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->umeecawcsseswoec(), $gioggcykgoikcwiy); qcogmismkiigwkcy: goto gakocaasskoagogo; wuaogegqaecwwkyo: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); gakocaasskoagogo: return $iayakwckycsumkqa; } public function agegeeiiacceomke(string $aaokuekaimigoyue, string $meqocwsecsywiiqs, string $omkysikckkcieckq = null, array $ywmkwiwkosakssii = []) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $qkqgcaykemoiecma->get($omkysikckkcieckq); $mksyucucyswaukig = null; if (!$suaemuyiacqyugsm) { goto ueiewmqseyuugaum; } $mksyucucyswaukig = $seumokooiykcomco->get($suaemuyiacqyugsm); ueiewmqseyuugaum: if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) { goto cwkowmwgwyakkmki; } $ksiyqouuaoymsycg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::imywcsggckkcywgk, [Constants::ieyywsoeoqmceucw => $aaokuekaimigoyue, Constants::isukysauqkiecswi => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::isukysauqkiecswi, 0), Constants::goqgcigmiawyauai => 1], Constants::oyaoekcogwkcekcc); if (isset($ksiyqouuaoymsycg[0]) && $ksiyqouuaoymsycg[0]) { goto imoksosqowqmimoc; } $suaemuyiacqyugsm = false; goto omscsmekaceaeico; imoksosqowqmimoc: $suaemuyiacqyugsm = $ksiyqouuaoymsycg[0]; $qkqgcaykemoiecma->update($omkysikckkcieckq, $suaemuyiacqyugsm); omscsmekaceaeico: cwkowmwgwyakkmki: if ($suaemuyiacqyugsm) { goto wkosyweqgikaakak; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::siwwqayqwykwqwoy => $meqocwsecsywiiqs, Constants::uiaeiwkkmoayqasu => $aaokuekaimigoyue, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); $suaemuyiacqyugsm = $seumokooiykcomco->insert(Constants::imywcsggckkcywgk, $ywmkwiwkosakssii); if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) { goto qwqaqqqqiksaqkss; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($omkysikckkcieckq, $suaemuyiacqyugsm); qwqaqqqqiksaqkss: $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(false); wkosyweqgikaakak: } public function ssacaeeassumyuws(?string $migiiksoiymissge = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, $useksmwkuswkwcqg = Constants::imywcsggckkcywgk) { if ($migiiksoiymissge) { goto aeqakycgmcyiisae; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); aeqakycgmcyiisae: $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu); } }
