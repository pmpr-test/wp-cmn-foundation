<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; class Page extends Common { public function okiaumcqquyioqcy() : bool { global $wp_query; return isset($wp_query) && $wp_query->is_posts_page; } public function cykwscocqwykiocm() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($this->ckkgiiuoguqggymc()); } public function ckkgiiuoguqggymc() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); } public function symuoymymumgwkaw() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->ckkgiiuoguqggymc()); } public function icikwuksyiceccmo() : ?string { $oikyogsosqcyueay = $this->cykwscocqwykiocm(); $aaokuekaimigoyue = "\x62\154\157\x67"; if (!$oikyogsosqcyueay instanceof WP_Post) { goto yyiysucuymcuyycw; } $aaokuekaimigoyue = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->aqcogscycyycgkuq($oikyogsosqcyueay); yyiysucuymcuyycw: return $aaokuekaimigoyue; } public function umeecawcsseswoec() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->weaommwymsyyeoaw(); } public function somwagieycgkcyec() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->umeecawcsseswoec()); } public function awgkmqkqkqawmqcu() : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); $syuuigcamkiegaqy = $eiicaiwgqkgsekce->oymwkcegiigooaqm("\160\x61\147\145\x6e\157\167"); return $syuuigcamkiegaqy === "\167\160\55\x6c\157\x67\151\156\56\x70\x68\x70" || in_array($aiamqeawckcsuaou, ["\162\160", "\x6c\x6f\x73\x74\160\141\x73\x73\167\157\x72\x64", "\x72\145\x67\151\x73\164\145\162"]); } public function qcgakseyaikigqco($post = null) : ?string { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); if ($post) { goto ayemyskkicqyskos; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto gwwgqgceskcqukig; } if ($this->okiaumcqquyioqcy()) { goto isyassymuywsayyy; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs()) { goto esucokaeqgmiaige; } if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto agcwmeycmgsyqeok; } $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->syeuyeikogukksam(); agcwmeycmgsyqeok: goto oqgmiysscyygyaqg; esucokaeqgmiaige: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw(); oqgmiysscyygyaqg: goto qyckkgmuykqyaieq; isyassymuywsayyy: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->cykwscocqwykiocm()); qyckkgmuykqyaieq: goto gqugaamwqqookmyc; gwwgqgceskcqukig: $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); gqugaamwqqookmyc: ayemyskkicqyskos: return $meqocwsecsywiiqs; } public function iqoacwuiemooiysg() : PageInfo { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $yyimiwcuegayoskq = new PageInfo(); if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto uywoegeimqomwqoa; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto mkggmsugkikwywom; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto acikugwgomwemcmu; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto qywueemkicmwyoqg; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto yegimqcqoeaacsyq; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto goukwgqscacouyqs; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto caoauekaaegosauw; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto qcmwkecooegwkkks; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto aemayukkiiaiueaq; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto oimegeaimoymkmsc; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto sgaaocqwgeqismmo; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto ceasygsiuksuwwoc; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto ygsiuoyewwecoemg; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto kaccuycsyukugwao; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto eoeoaoomoeayemks; } $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\x6e\x6b\156\157\x77\x6e"); goto aucqswuoeqocuiqk; eoeoaoomoeayemks: $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\60\64"); aucqswuoeqocuiqk: goto wqmkwsgmeceakwaw; kaccuycsyukugwao: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($useksmwkuswkwcqg))->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); wqmkwsgmeceakwaw: goto ywuegkmgqmweogqq; ygsiuoyewwecoemg: $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cqycgsyykemiygou); ywuegkmgqmweogqq: goto smwkgmymskokcoek; ceasygsiuksuwwoc: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)->aseocggwwegcmqes(Constants::imywcsggckkcywgk); smwkgmymskokcoek: goto mimogmagkwkiyskc; sgaaocqwgeqismmo: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); mimogmagkwkiyskc: goto wcesgqaeqiqawysc; oimegeaimoymkmsc: $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw); wcesgqaeqiqawysc: goto kawmoeuiyqkqmsmo; aemayukkiiaiueaq: $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\x46"), get_the_time("\144")))->ugaqcouwcuiaemgo(Constants::eggusgsscecmiiee); kawmoeuiyqkqmsmo: goto myemeeaqoywegsok; qcmwkecooegwkkks: $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\x59"), get_the_time("\106")))->ugaqcouwcuiaemgo(Constants::qummiiakyucoycws); myemeeaqoywegsok: goto sieseicooqugaqgo; caoauekaaegosauw: $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo(Constants::caaieqwcccuueamg); sieseicooqugaqgo: goto cyekoicwwmekycyy; goukwgqscacouyqs: $yyimiwcuegayoskq->qmueseocuuekommo($mumyimcwkaemyyue->siiwuwaswckkuoya())->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese); cyekoicwwmekycyy: goto remiaquuossuqoma; yegimqcqoeaacsyq: $kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($kesssewsiegssiya); remiaquuossuqoma: goto aikaeokwagkiecao; qywueemkicmwyoqg: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\141\x67\137\151\144"), Constants::ocsomysosuqaimuc))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qeueagcuyogwwyky); aikaeokwagkiecao: goto kamwemiweockugia; acikugwgomwemcmu: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x61\164"), Constants::qgciomgukmcwscqw))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw); kamwemiweockugia: goto gkiikogcsmysucuc; mkggmsugkikwywom: $yyimiwcuegayoskq->qmueseocuuekommo($this->symuoymymumgwkaw())->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack); gkiikogcsmysucuc: goto yeomwmwumiieiywi; uywoegeimqomwqoa: $yyimiwcuegayoskq->qmueseocuuekommo($this->somwagieycgkcyec())->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao); yeomwmwumiieiywi: $yyimiwcuegayoskq->cggwsuueqwqscgei($mumyimcwkaemyyue->esqicqsuigywkaqw()); return $yyimiwcuegayoskq; } public function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($ccamueccusigaaio) { goto gkqsiqmqqemqqwku; } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto uiwmoaosqkcaoqce; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto ymsiicmasqigsymw; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto wakmmggoiykyuamq; } $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); goto coqmamquawyaeyae; wakmmggoiykyuamq: global $wp; $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy($wp->request); coqmamquawyaeyae: goto yiyuuyewoweiaokc; ymsiicmasqigsymw: $migiiksoiymissge = $this->symuoymymumgwkaw(); yiyuuyewoweiaokc: goto ucyimwewacagqocw; uiwmoaosqkcaoqce: $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy(); ucyimwewacagqocw: goto wiokcqeyeaymgwae; gkqsiqmqqemqqwku: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); wiokcqeyeaymgwae: return trailingslashit($migiiksoiymissge); } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $iayakwckycsumkqa = null; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto waoymaouskgiemes; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto amieoocwaeecmywi; } if ($this->okiaumcqquyioqcy()) { goto sksucoueuaiseguw; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto cewcuuesgeiiassq; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto sueiceyeyweumeck; } $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); goto qsgigkoyesqiwoik; sueiceyeyweumeck: $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wieoiwogwmcwukom(); qsgigkoyesqiwoik: goto koikauauameyygqc; cewcuuesgeiiassq: $sqeykgyoooqysmca = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); if (!$sqeykgyoooqysmca) { goto geyysuiiagkkeqam; } $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export; geyysuiiagkkeqam: koikauauameyygqc: goto mqeycgqqaoguwkoa; sksucoueuaiseguw: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->ckkgiiuoguqggymc(), $gioggcykgoikcwiy); mqeycgqqaoguwkoa: goto uogamakkkoeumkuo; amieoocwaeecmywi: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->umeecawcsseswoec(), $gioggcykgoikcwiy); uogamakkkoeumkuo: goto eqgiyaakqasaqymq; waoymaouskgiemes: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); eqgiyaakqasaqymq: return $iayakwckycsumkqa; } public function agegeeiiacceomke(string $aaokuekaimigoyue, string $meqocwsecsywiiqs, string $omkysikckkcieckq = null, array $ywmkwiwkosakssii = []) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $qkqgcaykemoiecma->get($omkysikckkcieckq); $mksyucucyswaukig = null; if (!$suaemuyiacqyugsm) { goto wsocaemogooskccw; } $mksyucucyswaukig = $seumokooiykcomco->get($suaemuyiacqyugsm); wsocaemogooskccw: if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) { goto uqagmecggeymyekm; } $ksiyqouuaoymsycg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::imywcsggckkcywgk, [Constants::ieyywsoeoqmceucw => $aaokuekaimigoyue, Constants::isukysauqkiecswi => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::isukysauqkiecswi, 0), Constants::goqgcigmiawyauai => 1], Constants::oyaoekcogwkcekcc); if (isset($ksiyqouuaoymsycg[0]) && $ksiyqouuaoymsycg[0]) { goto qsowiceqiuciwiku; } $suaemuyiacqyugsm = false; goto acmyiosessocqqsg; qsowiceqiuciwiku: $suaemuyiacqyugsm = $ksiyqouuaoymsycg[0]; $qkqgcaykemoiecma->update($omkysikckkcieckq, $suaemuyiacqyugsm); acmyiosessocqqsg: uqagmecggeymyekm: if ($suaemuyiacqyugsm) { goto kegwaamwygcyissk; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::siwwqayqwykwqwoy => $meqocwsecsywiiqs, Constants::uiaeiwkkmoayqasu => $aaokuekaimigoyue, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); $suaemuyiacqyugsm = $seumokooiykcomco->insert(Constants::imywcsggckkcywgk, $ywmkwiwkosakssii); if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) { goto sawggikqsayoiscm; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($omkysikckkcieckq, $suaemuyiacqyugsm); sawggikqsayoiscm: $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(false); kegwaamwygcyissk: } public function ssacaeeassumyuws(?string $migiiksoiymissge = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, $useksmwkuswkwcqg = Constants::imywcsggckkcywgk) { if ($migiiksoiymissge) { goto sqkuescwoaugawem; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); sqkuescwoaugawem: $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu); } }
