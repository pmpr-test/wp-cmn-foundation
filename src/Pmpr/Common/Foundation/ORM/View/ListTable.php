<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\DB\Schema\DateTime; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Common\Foundation\Interfaces\Constants; class ListTable extends WPListTable { protected ?Model $model = null; protected ?Builder $builder = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->model = $meywaqqsugaoeyys; $this->builder = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem] ?? null; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); if (!$scsaeueqgyymsyei) { goto ycakugokkqkuqyiu; } $this->oykkqiicyegyyssa(); ycakugokkqkuqyiu: $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, $yyksucsgisomecgg->sacmkccceuywoqsq(true)); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto sycygoiaiqqageym; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); goto gygawoqywkukmqee; sycygoiaiqqageym: if (!is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto oouoqimaaqcmccay; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); oouoqimaaqcmccay: gygawoqywkukmqee: if (!$gcgsqcoqciockquc) { goto kciouyuaqkyqomam; } $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, true); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; kciouyuaqkyqomam: parent::__construct($ywmkwiwkosakssii); } protected function display_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto wwkgkaecgiwggcck; } parent::display_tablenav($wcagyqamwoksawik); wwkgkaecgiwggcck: } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } public function mgogaykgkoogasim() : ?Model { return $this->model; } function no_items() { echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\x6e\157\164\x5f\x66\x6f\165\156\x64"); } public function single_row($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto gimmuoqwckiseaik; } $wwgucssaecqekuek = ["\144\141\x74\x61\x2d\x69\x64" => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->miwqiiqeegeqcwis(), $meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw()]; if (!$meywaqqsugaoeyys->ksmisoyyqmwgwiye($igqsaukqcqscimok)) { goto umgaesggesswoaqe; } $egkyssmuqcwaciya[] = "\x75\156\163\145\145\156"; umgaesggesswoaqe: if (!($ikgwqyuyckaewsow = $meywaqqsugaoeyys->ukcqkkgyogwoiccm())) { goto quwcqmyokicssyew; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\55{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aiowsaccomcoikus, $igqsaukqcqscimok)}"; kiwqkcaekqqyuegq: } qsygcycwieukkgwc: quwcqmyokicssyew: if (!$egkyssmuqcwaciya) { goto iqcogmsguwoikame; } $wwgucssaecqekuek["\143\x6c\141\163\163"] = $egkyssmuqcwaciya; iqcogmsguwoikame: $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x74\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\x3c\x2f\164\x72\76"; gimmuoqwckiseaik: } protected function get_views() { $umwgoasiowmqcumw = []; if ($this->qaccsiwkuqigokoe()) { goto cmqucgoewuyieoyk; } $umwgoasiowmqcumw = parent::get_views(); $umwgoasiowmqcumw = $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x6d\x61\x6e\x61\x67\145\x5f\166\151\x65\167\163", $umwgoasiowmqcumw, $this->qkeoieugywkooams()); cmqucgoewuyieoyk: return $umwgoasiowmqcumw; } public function qkeoieugywkooams() : ?Builder { if (!(!$this->builder && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto yqykqysmiquwoasu; } $this->builder = $meywaqqsugaoeyys->gqaysymikgeawkqa(); yqykqysmiquwoasu: return $this->builder; } public function get_columns() { $wkkweuacukumqmya = []; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto omugkkesagcyagmk; } if (!$this->get_bulk_actions()) { goto ayyweymyuuiauamo; } $wkkweuacukumqmya["\143\x62"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x69\x6e\x70\x75\x74", [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); ayyweymyuuiauamo: $wkkweuacukumqmya = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x6d\x61\156\x61\147\x65\137\143\157\154\x75\x6d\x6e\x73", $wkkweuacukumqmya); if (!$meywaqqsugaoeyys->igosuocmowawmwyq()) { goto mosqsmqimqgqoase; } $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __("\101\x63\x74\151\x6f\x6e\x73", PR__CMN__FOUNDATION); mosqsmqimqgqoase: omugkkesagcyagmk: return $wkkweuacukumqmya; } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\x73", ''); } public function column_cb($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto kqksuugcgsyeoayy; } $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\144\151\164\x5f\x69\164\x65\x6d\x73"); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($gkswkiicccswksiq)) { goto ygcsmkuycoagwyou; } $this->iuygowkemiiwqmiw("\x63\141\x6c\x6c\x62\x61\143\x6b", [Constants::ciyoccqkiamemcmm => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\x53\x65\x6c\x65\x63\x74\x20\111\x74\145\155\40\43\45\x64", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\x23\70\62\x32\x30\73\x49\x74\x65\x6d\40\x23\x25\x64\x26\43\x38\62\x32\61\x3b\40\x69\163\x20\x6c\157\x63\x6b\x65\144", PR__CMN__FOUNDATION)], ["\143\154\x61\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); ygcsmkuycoagwyou: kqksuugcgsyeoayy: } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if ($this->qaccsiwkuqigokoe()) { goto qqewoyookaskiuek; } if (!(($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) && $meywaqqsugaoeyys->mukyysqkgaimcygs())) { goto iggyqogweyosuikc; } $ccowyogiqwikkkie[Constants::DELETE] = __("\x44\x65\x6c\x65\164\x65", PR__CMN__FOUNDATION); iggyqogweyosuikc: $ccowyogiqwikkkie = (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\142\x75\x6c\x6b\x5f\141\143\164\151\x6f\x6e\163", $ccowyogiqwikkkie, $this->umaeoegyykkkqmia()); qqewoyookaskiuek: return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { return (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\x61\x6e\x61\x67\x65\x5f\x73\157\x72\x74\x61\142\154\x65\137\x63\157\x6c\x75\155\156\163", []); } protected function get_table_classes() : array { $cmkqisoeyioisqaw = $this->mgogaykgkoogasim()->quqgocgogegaauao(Constants::ugsuecoyuqcamsac); if (is_array($cmkqisoeyioisqaw)) { goto ssoucoucsgccekwe; } $cmkqisoeyioisqaw = ["\x77\151\x64\x65\146\141\x74", "\x73\x74\162\x69\x70\x65\x64", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()]; ssoucoucsgccekwe: return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!(!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\163"]) || $this->has_items()))) { goto eegqyykygiccaoeo; } $euueacigmgoqkimu .= "\55\163\x65\141\x72\143\150\x2d\x69\156\160\165\164"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie))) { goto qkcyqocqqwmqgqww; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\x6e\x70\x75\164", [Constants::squoamkioomemiyi => "\150\x69\144\144\x65\x6e", Constants::NAME => "\x6f\162\144\x65\162\x62\x61\171", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); qkcyqocqqwmqgqww: if (!($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq))) { goto miyqyeiwquwsacsm; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\x70\165\164", [Constants::squoamkioomemiyi => "\x68\151\144\144\x65\x6e", Constants::NAME => "\157\x72\x64\x65\162", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); miyqyeiwquwsacsm: $this->iuygowkemiiwqmiw("\163\145\141\x72\x63\150\137\x62\x6f\170", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\163"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\142\165\x74\164\x6f\x6e", false, false, ["\x49\104" => "\x73\x65\x61\x72\x63\x68\55\163\165\142\x6d\151\164"])], ["\x63\x6c\141\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); eegqyykygiccaoeo: } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto aegysmeecgcgayyw; } $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { goto esuiysskoweawsue; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name, ''); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name); $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\156\x61\x67\x65\x5f\143\165\163\164\157\155\137\x63\157\154\165\x6d\x6e", '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); if ($aqykuigiuwmmcieu) { goto hoeeyiowekaeemko; } if ($aaqqkgyougeiueyq instanceof DateTime) { goto foeeqckqsyockkak; } $aqykuigiuwmmcieu = $eqgoocgaqwqcimie; goto iekumemscwieugqw; foeeqckqsyockkak: $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name); iekumemscwieugqw: hoeeyiowekaeemko: if (!$aaqqkgyougeiueyq instanceof Enum) { goto kymkucucyeoeikim; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); kymkucucyeoeikim: $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; $wkkweuacukumqmya = $this->get_columns(); $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya); if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) { goto uqqaiagaeqgqgaiy; } if (!($aqykuigiuwmmcieu && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\141"))) { goto uguigkcmukuouway; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm); if ($iwywmkygwewiamwm) { goto usquiuuyiyqaeyiu; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); usquiuuyiyqaeyiu: if (!$iwywmkygwewiamwm) { goto qicwaskssogcokgm; } $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\154\141\163\163" => "\x72\x6f\167\55\164\x69\x74\x6c\x65", "\x61\x72\151\141\x2d\x6c\x61\x62\x65\154" => sprintf(__("\105\144\151\164\40\x22\45\163\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\165\x74\x74\157\156", ["\164\x79\160\x65" => "\142\x75\x74\164\x6f\x6e", "\x63\x6c\x61\x73\163" => "\x74\157\x67\147\154\145\55\x72\157\x77"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x53\150\157\x77\x20\155\x6f\162\145\x20\x64\145\x74\x61\x69\154\x73", PR__CMN__FOUNDATION), ["\143\154\x61\163\163" => "\x73\143\162\x65\145\156\x2d\x72\x65\x61\144\145\x72\x2d\164\x65\170\x74"])); qicwaskssogcokgm: uguigkcmukuouway: uqqaiagaeqgqgaiy: goto gaomwagkcciesyqy; esuiysskoweawsue: $ccowyogiqwikkkie = $meywaqqsugaoeyys->igosuocmowawmwyq($igqsaukqcqscimok); foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { goto eeqesooyqagwawae; } if (!is_string($aiamqeawckcsuaou)) { goto suswcqoyyqkkquuo; } $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; suswcqoyyqkkquuo: goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if (!$cmwygeyygwqaemaq) { goto acaqummmoyiemqss; } $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\141\163\55\151\x63\157\x6e")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if (!$aegqqyquausewoqe) { goto soqqemyioggmoakg; } $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); soqqemyioggmoakg: $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); acaqummmoyiemqss: oqugqwcyomiaaoqu: wmmggowmigekyoso: } ywqgcegomwaiuquc: gaomwagkcciesyqy: aegysmeecgcgayyw: return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo = null; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto soaccwqimeksgwiw; } $cqcsaaswaciweiie = $meywaqqsugaoeyys->ukcqkkgyogwoiccm(); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::ykyeawseyyawawyy, false); if (!((!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) && $cqcsaaswaciweiie)) { goto suqkuqygkkgwyaie; } $eqgoocgaqwqcimie = Constants::ALL; suqkuqygkkgwyaie: soaccwqimeksgwiw: return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { return $siykeiywomwwuoiw; } public function prepare_items($ywmkwiwkosakssii = []) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto wmywuusgukmmaams; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => 20]); if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto wiysogeqqwgioyka; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; wiysogeqqwgioyka: $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { goto cgiscsqwwgqqaeqi; } if ($siykeiywomwwuoiw) { goto skkamseieeusycye; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa(); skkamseieeusycye: goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $siykeiywomwwuoiw = $meywaqqsugaoeyys->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); syiqkaasoueowwui: if ($siykeiywomwwuoiw) { goto ewymsmkkiksgwysk; } $this->items = []; goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\162\155\x5f\166\x69\x65\x77\137\x69\x6e\x64\x65\x78\x5f\142\165\x69\x6c\x64\145\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\x72\155\x5f\166\151\145\x77\x5f\x69\x6e\144\x65\170\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x62\165\x69\154\x64\x65\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw); $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this); $siykeiywomwwuoiw = $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if (!($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false))) { goto giaacoqqqsekcayy; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); giaacoqqqsekcayy: $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args(["\x70\145\x72\x5f\160\x61\147\x65" => $weyoqgcesqgeusiu, "\164\157\164\x61\154\x5f\x69\x74\145\155\x73" => $gmwiogsuisuoiwqu["\160\x61\147\151\x6e\x61\x74\x69\157\x6e"]["\164\x6f\164\141\x6c"], "\x74\x6f\x74\141\154\137\160\x61\x67\x65\x73" => $gmwiogsuisuoiwqu["\x70\x61\147\x69\x6e\141\164\x69\157\x6e"]["\x70\x61\147\x65\x73"]]); cmegwsegsosyqcai: wmywuusgukmmaams: } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto ooeausyowguqicuo; } $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if (!$ccowyogiqwikkkie) { goto gkyawqqcmigqgaiq; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\144\151\x76", ["\x63\x6c\141\163\x73" => "\x70\162\x2d\160\162\x69\x6d\141\162\x79\x2d\x61\143\164\x69\x6f\x6e\163"], true, $ccowyogiqwikkkie); gkyawqqcmigqgaiq: parent::extra_tablenav($wcagyqamwoksawik); ooeausyowguqicuo: } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto sggawugoykqcmsug; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ccowyogiqwikkkie = []; if (!($eqwekkkkmkkeismg = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) { goto egyyiccaeeiooaua; } $ccowyogiqwikkkie[Constants::awysmmukegasimmq] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\105\x64\151\164", PR__CMN__FOUNDATION), $eqwekkkkmkkeismg, ["\x61\x72\151\x61\55\154\141\142\x65\x6c" => __("\x45\144\151\164", PR__CMN__FOUNDATION)]); $ccowyogiqwikkkie[Constants::kyccsamqmuwysaws] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x51\x75\151\143\x6b\x20\x45\144\151\164", PR__CMN__FOUNDATION), "\x23", ["\x63\154\141\x73\163" => "\x6f\162\155\55\161\165\x69\143\153\55\x65\x64\151\x74", "\141\x72\151\141\x2d\154\x61\142\x65\154" => __("\121\x75\151\x63\x6b\x20\105\x64\151\x74", PR__CMN__FOUNDATION), "\144\x61\x74\x61\55\155\x6f\x64\x65\x6c" => $meywaqqsugaoeyys::uqggkiomyiceyooa(), "\144\x61\x74\x61\x2d\157\142\x6a\145\x63\164" => $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($meywaqqsugaoeyys->ekuykcasmcmywewi($igqsaukqcqscimok))]); egyyiccaeeiooaua: if (!($aoyimogsmooskgsm = $meywaqqsugaoeyys->uesweuocqoywoyms($eqgoocgaqwqcimie))) { goto scisgsyemmsekgos; } $ccowyogiqwikkkie[Constants::ieioeisgwcgysukw] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\123\x68\x6f\167", PR__CMN__FOUNDATION), $aoyimogsmooskgsm, ["\141\162\x69\141\x2d\x6c\141\142\145\154" => __("\x53\x68\157\167", PR__CMN__FOUNDATION)]); scisgsyemmsekgos: if (!($maycsqycmwyoqwwy = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) { goto cewmoqyysgsmuiya; } $ccowyogiqwikkkie[Constants::DELETE] = $meywaqqsugaoeyys->rkmkouiquumiecqy($maycsqycmwyoqwwy); cewmoqyysgsmuiya: $euiiykgssaaqwcmw = $meywaqqsugaoeyys->eaccsioyemcakcss($igqsaukqcqscimok); if (!$euiiykgssaaqwcmw) { goto ueigkucgaucgeimc; } foreach ($euiiykgssaaqwcmw as $uusmaiomayssaecw => $yaaiaiskqiiiugmm) { if (is_string($yaaiaiskqiiiugmm)) { goto wgewmqieuamsoayy; } if (!is_array($yaaiaiskqiiiugmm)) { goto ugqaaewwmkocwwgy; } $ccowyogiqwikkkie[$uusmaiomayssaecw] = $swqimwqeweekeusq->uuccukgasskgimsq("\141", $yaaiaiskqiiiugmm[Constants::ysskgssgwuwmqwym] ?? [], $yaaiaiskqiiiugmm[Constants::TEXT] ?? ''); ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $ccowyogiqwikkkie[$uusmaiomayssaecw] = $yaaiaiskqiiiugmm; kqgcyoscsusgoaqi: omqiayeucoioqoao: } igooksugieceoege: ueigkucgaucgeimc: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\162\157\167\137\141\x63\x74\x69\x6f\156\163", $ccowyogiqwikkkie, $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); sggawugoykqcmsug: return $ccowyogiqwikkkie; } }
