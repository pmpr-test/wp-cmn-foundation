<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\DB\Schema\DateTime; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Common\Foundation\Interfaces\Constants; class ListTable extends WPListTable { protected ?Model $model = null; protected ?Builder $builder = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->model = $meywaqqsugaoeyys; $this->builder = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem] ?? null; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); if (!$scsaeueqgyymsyei) { goto uueywyysiicuauem; } $this->oykkqiicyegyyssa(); uueywyysiicuauem: $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, $yyksucsgisomecgg->sacmkccceuywoqsq(true)); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto qgyoesyiasqimcoe; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); goto kkwqmewaksmokuqy; qgyoesyiasqimcoe: if (!is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto seieguyaaiqismgo; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); seieguyaaiqismgo: kkwqmewaksmokuqy: if (!$gcgsqcoqciockquc) { goto gsgkayokisiesciy; } $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\160\x65\x72\x5f\x70\141\147\145"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; gsgkayokisiesciy: parent::__construct($ywmkwiwkosakssii); } protected function display_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto ascogkesqmuuaesq; } parent::display_tablenav($wcagyqamwoksawik); ascogkesqmuuaesq: } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } public function mgogaykgkoogasim() : ?Model { return $this->model; } function no_items() { echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\x6e\157\x74\x5f\146\x6f\165\156\144"); } public function single_row($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto iusaeoimukymskgs; } $wwgucssaecqekuek = ["\144\x61\x74\141\55\151\x64" => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->miwqiiqeegeqcwis(), $meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw()]; if (!$meywaqqsugaoeyys->ksmisoyyqmwgwiye($igqsaukqcqscimok)) { goto askukaucmocewkgg; } $egkyssmuqcwaciya[] = "\x75\156\x73\145\x65\x6e"; askukaucmocewkgg: if (!($ikgwqyuyckaewsow = $meywaqqsugaoeyys->ukcqkkgyogwoiccm())) { goto meqmcgmksqiqcoyq; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\55{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aiowsaccomcoikus, $igqsaukqcqscimok)}"; wssaaemscmmiomee: } kiemqsgcmouqscao: meqmcgmksqiqcoyq: if (!$egkyssmuqcwaciya) { goto euskosgaksmimgug; } $wwgucssaecqekuek["\143\x6c\141\x73\163"] = $egkyssmuqcwaciya; euskosgaksmimgug: $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\164\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\74\x2f\x74\x72\x3e"; iusaeoimukymskgs: } protected function get_views() { $umwgoasiowmqcumw = []; if ($this->qaccsiwkuqigokoe()) { goto asciaakaoygususy; } $umwgoasiowmqcumw = parent::get_views(); $umwgoasiowmqcumw = $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\141\x6e\x61\147\145\x5f\166\x69\x65\167\163", $umwgoasiowmqcumw, $this->qkeoieugywkooams()); asciaakaoygususy: return $umwgoasiowmqcumw; } public function qkeoieugywkooams() : ?Builder { if (!(!$this->builder && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto eaggoasiwogmquwc; } $this->builder = $meywaqqsugaoeyys->gqaysymikgeawkqa(); eaggoasiwogmquwc: return $this->builder; } public function get_columns() { $wkkweuacukumqmya = []; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto iaousaauoawkqkkg; } if (!$this->get_bulk_actions()) { goto meoweqcaaosoomeu; } $wkkweuacukumqmya["\x63\x62"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\151\156\x70\165\x74", [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); meoweqcaaosoomeu: $wkkweuacukumqmya = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x6d\x61\156\x61\x67\x65\x5f\143\x6f\x6c\165\x6d\x6e\163", $wkkweuacukumqmya); if (!$meywaqqsugaoeyys->igosuocmowawmwyq()) { goto ywmoieqkigsykequ; } $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __("\101\x63\x74\151\x6f\156\163", PR__CMN__FOUNDATION); ywmoieqkigsykequ: iaousaauoawkqkkg: return $wkkweuacukumqmya; } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\163", ''); } public function column_cb($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto muwyuiikuywigwso; } $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\x64\x69\x74\x5f\x69\164\145\155\163"); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($gkswkiicccswksiq)) { goto kkwucaoumyayagcq; } $this->iuygowkemiiwqmiw("\143\x61\x6c\154\x62\x61\143\x6b", [Constants::ciyoccqkiamemcmm => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\123\x65\x6c\145\143\164\x20\111\164\x65\x6d\x20\x23\45\144", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\43\70\62\62\x30\x3b\111\164\x65\x6d\40\x23\x25\144\x26\x23\x38\x32\62\61\73\40\x69\163\x20\x6c\157\x63\153\145\x64", PR__CMN__FOUNDATION)], ["\x63\154\141\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); kkwucaoumyayagcq: muwyuiikuywigwso: } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if ($this->qaccsiwkuqigokoe()) { goto akcakssqcqcouwew; } if (!(($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) && $meywaqqsugaoeyys->mukyysqkgaimcygs())) { goto gikaiicgqyueeoco; } $ccowyogiqwikkkie[Constants::DELETE] = __("\x44\145\x6c\145\164\145", PR__CMN__FOUNDATION); gikaiicgqyueeoco: $ccowyogiqwikkkie = (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x62\165\x6c\x6b\x5f\141\x63\164\151\x6f\156\163", $ccowyogiqwikkkie, $this->umaeoegyykkkqmia()); akcakssqcqcouwew: return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { return (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\141\x6e\141\x67\x65\137\x73\157\x72\x74\141\x62\x6c\x65\137\143\x6f\x6c\x75\x6d\x6e\163", []); } protected function get_table_classes() : array { $cmkqisoeyioisqaw = $this->mgogaykgkoogasim()->quqgocgogegaauao(Constants::ugsuecoyuqcamsac); if (is_array($cmkqisoeyioisqaw)) { goto akoiqkoqmmmcieug; } $cmkqisoeyioisqaw = ["\x77\151\144\x65\146\141\164", "\x73\164\x72\x69\x70\145\x64", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()]; akoiqkoqmmmcieug: return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!(!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\163"]) || $this->has_items()))) { goto eqekaoaioiykuaiw; } $euueacigmgoqkimu .= "\x2d\x73\x65\x61\x72\143\150\x2d\151\156\x70\165\164"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie))) { goto cgasgmiiqegqesic; } $omwieegygisoswgw->awwqwouuoioauoaw("\151\x6e\160\x75\164", [Constants::squoamkioomemiyi => "\150\151\144\x64\145\156", Constants::NAME => "\157\x72\x64\x65\x72\x62\x61\x79", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); cgasgmiiqegqesic: if (!($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq))) { goto yamoiggaeugmgkku; } $omwieegygisoswgw->awwqwouuoioauoaw("\151\156\160\165\x74", [Constants::squoamkioomemiyi => "\x68\x69\144\x64\145\x6e", Constants::NAME => "\157\x72\144\x65\162", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); yamoiggaeugmgkku: $this->iuygowkemiiwqmiw("\x73\x65\141\x72\x63\x68\137\x62\x6f\170", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\163"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\x62\x75\x74\164\x6f\156", false, false, ["\111\104" => "\x73\x65\141\162\x63\x68\55\163\165\x62\155\151\164"])], ["\143\x6c\141\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); eqekaoaioiykuaiw: } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto oqwyemgwoossauyk; } $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { goto iiuawywwoaeyauge; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name, ''); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name); $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x6d\x61\x6e\x61\147\x65\x5f\143\165\163\164\157\x6d\137\143\157\154\165\155\x6e", '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); if ($aqykuigiuwmmcieu) { goto mkuigmcgkawyawee; } if ($aaqqkgyougeiueyq instanceof DateTime) { goto uqagqomggiacosqm; } $aqykuigiuwmmcieu = $eqgoocgaqwqcimie; goto mwskgsimqagmkcgq; uqagqomggiacosqm: $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name); mwskgsimqagmkcgq: mkuigmcgkawyawee: if (!$aaqqkgyougeiueyq instanceof Enum) { goto ouqwmaaskykywyqo; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); ouqwmaaskykywyqo: $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; $wkkweuacukumqmya = $this->get_columns(); $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya); if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) { goto aakwscykmyyykoms; } if (!($aqykuigiuwmmcieu && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\141"))) { goto ccqgkeesikyegcik; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm); if ($iwywmkygwewiamwm) { goto agqmoymkiswqswqo; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); agqmoymkiswqswqo: if (!$iwywmkygwewiamwm) { goto kwaqakoogeiacmwi; } $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\x6c\x61\x73\x73" => "\162\x6f\x77\55\x74\x69\164\154\x65", "\x61\162\151\141\x2d\154\x61\x62\145\x6c" => sprintf(__("\105\x64\x69\164\x20\42\x25\163\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\x75\x74\164\x6f\x6e", ["\x74\x79\x70\145" => "\x62\165\164\x74\x6f\x6e", "\143\x6c\141\x73\163" => "\164\157\147\147\x6c\x65\x2d\162\x6f\167"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x53\150\x6f\167\x20\155\157\x72\x65\40\x64\145\x74\x61\151\x6c\x73", PR__CMN__FOUNDATION), ["\x63\x6c\141\x73\x73" => "\x73\143\162\145\145\156\55\x72\x65\141\x64\x65\x72\55\164\x65\170\164"])); kwaqakoogeiacmwi: ccqgkeesikyegcik: aakwscykmyyykoms: goto wcoqiwuusoeqiqwi; iiuawywwoaeyauge: $ccowyogiqwikkkie = $meywaqqsugaoeyys->igosuocmowawmwyq($igqsaukqcqscimok); foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { goto miaiggsoiaekmqwy; } if (!is_string($aiamqeawckcsuaou)) { goto gioqkcywauuckmua; } $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; gioqkcywauuckmua: goto suoymucmyegewkmu; miaiggsoiaekmqwy: $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if (!$cmwygeyygwqaemaq) { goto iqeqqwcmaiqakawc; } $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\x61\x73\x2d\x69\143\157\156")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if (!$aegqqyquausewoqe) { goto oyywywoqaqcykucs; } $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); oyywywoqaqcykucs: $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); iqeqqwcmaiqakawc: suoymucmyegewkmu: qkkqiagwgaoyauki: } qoiuwyogucoeaoew: wcoqiwuusoeqiqwi: oqwyemgwoossauyk: return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo = null; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto yuoyackaoigyyyso; } $cqcsaaswaciweiie = $meywaqqsugaoeyys->ukcqkkgyogwoiccm(); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::ykyeawseyyawawyy, false); if (!((!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) && $cqcsaaswaciweiie)) { goto cwcmwogseemgqgqq; } $eqgoocgaqwqcimie = Constants::ALL; cwcmwogseemgqgqq: yuoyackaoigyyyso: return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { return $siykeiywomwwuoiw; } public function prepare_items($ywmkwiwkosakssii = []) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto mgwgiesscqoaqcau; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\x5f\160\145\x72\137\x70\x61\147\x65")]); if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto kcqieuukskyiywss; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; kcqieuukskyiywss: $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { goto gsimeiqkoyqkuecq; } if ($siykeiywomwwuoiw) { goto wukuisoeoeomgegu; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa(); wukuisoeoeomgegu: goto gqywcowiigceimaw; gsimeiqkoyqkuecq: $siykeiywomwwuoiw = $meywaqqsugaoeyys->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\75", $siykeiywomwwuoiw); gqywcowiigceimaw: if ($siykeiywomwwuoiw) { goto quewwumogiocouii; } $this->items = []; goto geugsymgsiuuqccg; quewwumogiocouii: $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\x6d\x5f\166\x69\x65\167\137\151\x6e\x64\x65\x78\137\142\165\151\x6c\144\x65\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\x76\x69\145\x77\x5f\151\x6e\144\145\170\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x62\165\x69\154\144\x65\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw); $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this); $siykeiywomwwuoiw = $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if (!($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false))) { goto eyuoecmogqwkmomi; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); eyuoecmogqwkmomi: $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args(["\160\x65\x72\137\x70\x61\x67\145" => $weyoqgcesqgeusiu, "\164\157\x74\141\154\137\151\x74\x65\155\x73" => $gmwiogsuisuoiwqu["\160\141\147\151\x6e\x61\164\151\157\x6e"]["\x74\157\x74\x61\x6c"], "\164\157\x74\x61\154\137\160\x61\x67\145\x73" => $gmwiogsuisuoiwqu["\160\141\147\x69\156\x61\164\151\x6f\156"]["\x70\141\147\x65\163"]]); geugsymgsiuuqccg: mgwgiesscqoaqcau: } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto bgoygegmogcmeaou; } $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if (!$ccowyogiqwikkkie) { goto ioacywuoyuskqmwy; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x64\x69\166", ["\x63\154\x61\x73\x73" => "\160\x72\55\x70\x72\151\155\x61\x72\171\x2d\x61\143\x74\x69\x6f\156\x73"], true, $ccowyogiqwikkkie); ioacywuoyuskqmwy: parent::extra_tablenav($wcagyqamwoksawik); bgoygegmogcmeaou: } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto iaygaasesyymwgss; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ccowyogiqwikkkie = []; if (!($eqwekkkkmkkeismg = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) { goto awgaewwsskasueke; } $ccowyogiqwikkkie[Constants::awysmmukegasimmq] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\105\x64\151\x74", PR__CMN__FOUNDATION), $eqwekkkkmkkeismg, ["\x61\x72\x69\141\55\154\141\142\145\154" => __("\105\x64\151\164", PR__CMN__FOUNDATION)]); $ccowyogiqwikkkie[Constants::kyccsamqmuwysaws] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\121\x75\151\x63\x6b\x20\105\144\151\164", PR__CMN__FOUNDATION), "\43", ["\x63\154\x61\163\163" => "\157\162\155\x2d\161\165\x69\x63\x6b\x2d\x65\x64\x69\x74", "\141\162\151\x61\55\154\x61\x62\x65\x6c" => __("\x51\165\151\143\x6b\x20\x45\x64\151\x74", PR__CMN__FOUNDATION), "\x64\x61\164\x61\x2d\155\x6f\x64\145\x6c" => $meywaqqsugaoeyys::uqggkiomyiceyooa(), "\144\x61\164\x61\55\157\x62\x6a\x65\143\164" => $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($meywaqqsugaoeyys->ekuykcasmcmywewi($igqsaukqcqscimok))]); awgaewwsskasueke: if (!($aoyimogsmooskgsm = $meywaqqsugaoeyys->uesweuocqoywoyms($eqgoocgaqwqcimie))) { goto cgmcwkmmcmmkiooc; } $ccowyogiqwikkkie[Constants::ieioeisgwcgysukw] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\123\x68\157\x77", PR__CMN__FOUNDATION), $aoyimogsmooskgsm, ["\x61\x72\x69\x61\x2d\154\x61\142\x65\154" => __("\123\150\x6f\167", PR__CMN__FOUNDATION)]); cgmcwkmmcmmkiooc: if (!($maycsqycmwyoqwwy = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) { goto iamooqskosymqsmw; } $ccowyogiqwikkkie[Constants::DELETE] = $meywaqqsugaoeyys->rkmkouiquumiecqy($maycsqycmwyoqwwy); iamooqskosymqsmw: $euiiykgssaaqwcmw = $meywaqqsugaoeyys->eaccsioyemcakcss($igqsaukqcqscimok); if (!$euiiykgssaaqwcmw) { goto kiqmcymowosckmii; } foreach ($euiiykgssaaqwcmw as $uusmaiomayssaecw => $yaaiaiskqiiiugmm) { if (is_string($yaaiaiskqiiiugmm)) { goto iisieuaeyiqwckou; } if (!is_array($yaaiaiskqiiiugmm)) { goto uykwmucgoywoesui; } $ccowyogiqwikkkie[$uusmaiomayssaecw] = $swqimwqeweekeusq->uuccukgasskgimsq("\141", $yaaiaiskqiiiugmm[Constants::ysskgssgwuwmqwym] ?? [], $yaaiaiskqiiiugmm[Constants::TEXT] ?? ''); uykwmucgoywoesui: goto oskwkeaemiqcaqkc; iisieuaeyiqwckou: $ccowyogiqwikkkie[$uusmaiomayssaecw] = $yaaiaiskqiiiugmm; oskwkeaemiqcaqkc: eygqeoiskweuiuqi: } wwccoougkywoaoui: kiqmcymowosckmii: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\162\157\167\x5f\x61\143\164\x69\157\156\x73", $ccowyogiqwikkkie, $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); iaygaasesyymwgss: return $ccowyogiqwikkkie; } }
