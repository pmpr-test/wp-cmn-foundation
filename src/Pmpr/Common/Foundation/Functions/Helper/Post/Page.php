<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; class Page extends Common { public function okiaumcqquyioqcy() : bool { global $wp_query; return isset($wp_query) && $wp_query->is_posts_page; } public function cykwscocqwykiocm() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->get($this->ckkgiiuoguqggymc()); } public function ckkgiiuoguqggymc() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); } public function symuoymymumgwkaw() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->ckkgiiuoguqggymc()); } public function icikwuksyiceccmo() : ?string { $oikyogsosqcyueay = $this->cykwscocqwykiocm(); $aaokuekaimigoyue = "\142\154\x6f\147"; if (!$oikyogsosqcyueay instanceof WP_Post) { goto qqicgmcqukmywgwu; } $aaokuekaimigoyue = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->aqcogscycyycgkuq($oikyogsosqcyueay); qqicgmcqukmywgwu: return $aaokuekaimigoyue; } public function umeecawcsseswoec() { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->weaommwymsyyeoaw(); } public function somwagieycgkcyec() { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->umeecawcsseswoec()); } public function awgkmqkqkqawmqcu() : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); $syuuigcamkiegaqy = $eiicaiwgqkgsekce->oymwkcegiigooaqm("\x70\141\x67\x65\156\x6f\x77"); return $syuuigcamkiegaqy === "\167\160\55\x6c\x6f\x67\x69\156\56\160\150\x70" || in_array($aiamqeawckcsuaou, ["\162\x70", "\154\157\163\164\x70\141\x73\x73\167\x6f\x72\x64", "\x72\145\147\151\163\x74\x65\x72"]); } public function qcgakseyaikigqco($post = null) : ?string { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); if ($post) { goto gwwgqgceskcqukig; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto isyassymuywsayyy; } if ($this->okiaumcqquyioqcy()) { goto esucokaeqgmiaige; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs()) { goto yyiysucuymcuyycw; } if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto mousymoamqcmauki; } $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->syeuyeikogukksam(); mousymoamqcmauki: goto agcwmeycmgsyqeok; yyiysucuymcuyycw: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw(); agcwmeycmgsyqeok: goto oqgmiysscyygyaqg; esucokaeqgmiaige: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->cykwscocqwykiocm()); oqgmiysscyygyaqg: goto qyckkgmuykqyaieq; isyassymuywsayyy: $meqocwsecsywiiqs = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); qyckkgmuykqyaieq: gwwgqgceskcqukig: return $meqocwsecsywiiqs; } public function iqoacwuiemooiysg() : PageInfo { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $yyimiwcuegayoskq = new PageInfo(); if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto mkggmsugkikwywom; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto acikugwgomwemcmu; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto qywueemkicmwyoqg; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto yegimqcqoeaacsyq; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto goukwgqscacouyqs; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto caoauekaaegosauw; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto qcmwkecooegwkkks; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto aemayukkiiaiueaq; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto oimegeaimoymkmsc; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto sgaaocqwgeqismmo; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto ceasygsiuksuwwoc; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto ygsiuoyewwecoemg; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto kaccuycsyukugwao; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto eoeoaoomoeayemks; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto gqugaamwqqookmyc; } $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\x6e\x6b\x6e\157\167\x6e"); goto ayemyskkicqyskos; gqugaamwqqookmyc: $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\x34\60\64"); ayemyskkicqyskos: goto aucqswuoeqocuiqk; eoeoaoomoeayemks: $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); $yyimiwcuegayoskq->qmueseocuuekommo($this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($useksmwkuswkwcqg))->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); aucqswuoeqocuiqk: goto wqmkwsgmeceakwaw; kaccuycsyukugwao: $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cqycgsyykemiygou); wqmkwsgmeceakwaw: goto ywuegkmgqmweogqq; ygsiuoyewwecoemg: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)->aseocggwwegcmqes(Constants::imywcsggckkcywgk); ywuegkmgqmweogqq: goto smwkgmymskokcoek; ceasygsiuksuwwoc: $yyimiwcuegayoskq->qmueseocuuekommo($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); smwkgmymskokcoek: goto mimogmagkwkiyskc; sgaaocqwgeqismmo: $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); $yyimiwcuegayoskq->qmueseocuuekommo($this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw); mimogmagkwkiyskc: goto wcesgqaeqiqawysc; oimegeaimoymkmsc: $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\106"), get_the_time("\x64")))->ugaqcouwcuiaemgo(Constants::eggusgsscecmiiee); wcesgqaeqiqawysc: goto kawmoeuiyqkqmsmo; aemayukkiiaiueaq: $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\x59"), get_the_time("\x46")))->ugaqcouwcuiaemgo(Constants::qummiiakyucoycws); kawmoeuiyqkqmsmo: goto myemeeaqoywegsok; qcmwkecooegwkkks: $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo(Constants::caaieqwcccuueamg); myemeeaqoywegsok: goto sieseicooqugaqgo; caoauekaaegosauw: $yyimiwcuegayoskq->qmueseocuuekommo($mumyimcwkaemyyue->siiwuwaswckkuoya())->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese); sieseicooqugaqgo: goto cyekoicwwmekycyy; goukwgqscacouyqs: $kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($kesssewsiegssiya); cyekoicwwmekycyy: goto remiaquuossuqoma; yegimqcqoeaacsyq: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\x61\x67\x5f\x69\x64"), Constants::ocsomysosuqaimuc))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qeueagcuyogwwyky); remiaquuossuqoma: goto aikaeokwagkiecao; qywueemkicmwyoqg: $yyimiwcuegayoskq->qmueseocuuekommo($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x61\164"), Constants::qgciomgukmcwscqw))->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw); aikaeokwagkiecao: goto kamwemiweockugia; acikugwgomwemcmu: $yyimiwcuegayoskq->qmueseocuuekommo($this->symuoymymumgwkaw())->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack); kamwemiweockugia: goto gkiikogcsmysucuc; mkggmsugkikwywom: $yyimiwcuegayoskq->qmueseocuuekommo($this->somwagieycgkcyec())->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao); gkiikogcsmysucuc: $yyimiwcuegayoskq->cggwsuueqwqscgei($mumyimcwkaemyyue->esqicqsuigywkaqw()); return $yyimiwcuegayoskq; } public function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($ccamueccusigaaio) { goto uiwmoaosqkcaoqce; } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto ymsiicmasqigsymw; } if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto wakmmggoiykyuamq; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto uywoegeimqomwqoa; } $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); goto yeomwmwumiieiywi; uywoegeimqomwqoa: global $wp; $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy($wp->request); yeomwmwumiieiywi: goto coqmamquawyaeyae; wakmmggoiykyuamq: $migiiksoiymissge = $this->symuoymymumgwkaw(); coqmamquawyaeyae: goto yiyuuyewoweiaokc; ymsiicmasqigsymw: $migiiksoiymissge = $gqusacuooiagkuom->gmigwwwmwemyaayy(); yiyuuyewoweiaokc: goto ucyimwewacagqocw; uiwmoaosqkcaoqce: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio, $cwwowqyuwccuykom, $eoocgqsqmwuegiae); ucyimwewacagqocw: return trailingslashit($migiiksoiymissge); } public function masoymaamekuykso($post = null, bool $gioggcykgoikcwiy = false) : ?string { $iayakwckycsumkqa = null; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto amieoocwaeecmywi; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw()) { goto sksucoueuaiseguw; } if ($this->okiaumcqquyioqcy()) { goto cewcuuesgeiiassq; } if ($this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy()) { goto sueiceyeyweumeck; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { goto wiokcqeyeaymgwae; } $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); goto geyysuiiagkkeqam; wiokcqeyeaymgwae: $iayakwckycsumkqa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wieoiwogwmcwukom(); geyysuiiagkkeqam: goto qsgigkoyesqiwoik; sueiceyeyweumeck: $sqeykgyoooqysmca = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq(); if (!$sqeykgyoooqysmca) { goto gkqsiqmqqemqqwku; } $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export; gkqsiqmqqemqqwku: qsgigkoyesqiwoik: goto koikauauameyygqc; cewcuuesgeiiassq: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->ckkgiiuoguqggymc(), $gioggcykgoikcwiy); koikauauameyygqc: goto mqeycgqqaoguwkoa; sksucoueuaiseguw: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($this->umeecawcsseswoec(), $gioggcykgoikcwiy); mqeycgqqaoguwkoa: goto uogamakkkoeumkuo; amieoocwaeecmywi: $iayakwckycsumkqa = $seumokooiykcomco->masoymaamekuykso($post, $gioggcykgoikcwiy); uogamakkkoeumkuo: return $iayakwckycsumkqa; } public function agegeeiiacceomke(string $aaokuekaimigoyue, string $meqocwsecsywiiqs, string $omkysikckkcieckq = null, array $ywmkwiwkosakssii = []) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $qkqgcaykemoiecma->get($omkysikckkcieckq); $mksyucucyswaukig = null; if (!$suaemuyiacqyugsm) { goto waoymaouskgiemes; } $mksyucucyswaukig = $seumokooiykcomco->get($suaemuyiacqyugsm); waoymaouskgiemes: if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) { goto qsowiceqiuciwiku; } $ksiyqouuaoymsycg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::imywcsggckkcywgk, [Constants::ieyywsoeoqmceucw => $aaokuekaimigoyue, Constants::isukysauqkiecswi => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::isukysauqkiecswi, 0), Constants::goqgcigmiawyauai => 1], Constants::oyaoekcogwkcekcc); if (isset($ksiyqouuaoymsycg[0]) && $ksiyqouuaoymsycg[0]) { goto eqgiyaakqasaqymq; } $suaemuyiacqyugsm = false; goto wsocaemogooskccw; eqgiyaakqasaqymq: $suaemuyiacqyugsm = $ksiyqouuaoymsycg[0]; $qkqgcaykemoiecma->update($omkysikckkcieckq, $suaemuyiacqyugsm); wsocaemogooskccw: qsowiceqiuciwiku: if ($suaemuyiacqyugsm) { goto uqagmecggeymyekm; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::siwwqayqwykwqwoy => $meqocwsecsywiiqs, Constants::uiaeiwkkmoayqasu => $aaokuekaimigoyue, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); $suaemuyiacqyugsm = $seumokooiykcomco->insert(Constants::imywcsggckkcywgk, $ywmkwiwkosakssii); if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) { goto acmyiosessocqqsg; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($omkysikckkcieckq, $suaemuyiacqyugsm); acmyiosessocqqsg: $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(false); uqagmecggeymyekm: } public function ssacaeeassumyuws(?string $migiiksoiymissge = null, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, $useksmwkuswkwcqg = Constants::imywcsggckkcywgk) { if ($migiiksoiymissge) { goto sawggikqsayoiscm; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); sawggikqsayoiscm: $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH); return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu); } }
