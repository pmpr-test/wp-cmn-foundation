<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\DB\Schema\DateTime; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Common\Foundation\Interfaces\Constants; class ListTable extends WPListTable { protected ?Model $model = null; protected ?Builder $builder = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->model = $meywaqqsugaoeyys; $this->builder = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem] ?? null; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); if (!$scsaeueqgyymsyei) { goto kqyeukywmgismyaq; } $this->oykkqiicyegyyssa(); kqyeukywmgismyaq: $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, $yyksucsgisomecgg->sacmkccceuywoqsq(true)); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto cqeoguiqiymkyweo; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); goto omgcsmsikaggaooc; cqeoguiqiymkyweo: if (!is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto mukwsuuuqcgesmwc; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); mukwsuuuqcgesmwc: omgcsmsikaggaooc: if (!$gcgsqcoqciockquc) { goto wykuosegisygosiq; } $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\160\x65\x72\x5f\x70\141\147\x65"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; wykuosegisygosiq: parent::__construct($ywmkwiwkosakssii); } protected function display_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto ugikgkwuwmgymgus; } parent::display_tablenav($wcagyqamwoksawik); ugikgkwuwmgymgus: } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } public function mgogaykgkoogasim() : ?Model { return $this->model; } function no_items() { echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\x6e\157\x74\x5f\x66\157\165\156\x64"); } public function single_row($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto sqmqwqeoygcmqcim; } $wwgucssaecqekuek = ["\x64\141\164\141\x2d\x69\144" => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->miwqiiqeegeqcwis(), $meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw()]; if (!$meywaqqsugaoeyys->ksmisoyyqmwgwiye($igqsaukqcqscimok)) { goto gsgyayuaekgyoumc; } $egkyssmuqcwaciya[] = "\165\156\x73\145\x65\156"; gsgyayuaekgyoumc: if (!($ikgwqyuyckaewsow = $meywaqqsugaoeyys->ukcqkkgyogwoiccm())) { goto wyqmeyoaggwuioak; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\x2d{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aiowsaccomcoikus, $igqsaukqcqscimok)}"; aeuosggumiiwoesm: } omemqagskckoeoog: wyqmeyoaggwuioak: if (!$egkyssmuqcwaciya) { goto uyksacasqywyessc; } $wwgucssaecqekuek["\x63\154\141\163\163"] = $egkyssmuqcwaciya; uyksacasqywyessc: $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\164\162", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\74\57\164\x72\x3e"; sqmqwqeoygcmqcim: } protected function get_views() { $umwgoasiowmqcumw = []; if ($this->qaccsiwkuqigokoe()) { goto syykqmkiyoekqsek; } $umwgoasiowmqcumw = parent::get_views(); $umwgoasiowmqcumw = $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\x61\156\x61\x67\x65\137\x76\x69\x65\167\x73", $umwgoasiowmqcumw, $this->qkeoieugywkooams()); syykqmkiyoekqsek: return $umwgoasiowmqcumw; } public function qkeoieugywkooams() : ?Builder { if (!(!$this->builder && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto aiqekkyauwswayyq; } $this->builder = $meywaqqsugaoeyys->gqaysymikgeawkqa(); aiqekkyauwswayyq: return $this->builder; } public function get_columns() { $wkkweuacukumqmya = []; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto wsqiqkiucakewgou; } if (!$this->get_bulk_actions()) { goto mmcikqikqecaeswu; } $wkkweuacukumqmya["\143\142"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x69\x6e\160\x75\164", [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); mmcikqikqecaeswu: $wkkweuacukumqmya = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x6d\141\156\x61\147\145\137\143\157\x6c\165\155\156\163", $wkkweuacukumqmya); if (!$meywaqqsugaoeyys->igosuocmowawmwyq()) { goto ywsywoumuaykkeaa; } $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __("\101\143\164\x69\157\156\x73", PR__CMN__FOUNDATION); ywsywoumuaykkeaa: wsqiqkiucakewgou: return $wkkweuacukumqmya; } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\163", ''); } public function column_cb($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto wiiqigwgyuiuksia; } $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\151\164\x5f\x69\164\x65\155\x73"); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($gkswkiicccswksiq)) { goto yaumwqeommqigswq; } $this->iuygowkemiiwqmiw("\143\x61\x6c\x6c\142\x61\x63\153", [Constants::ciyoccqkiamemcmm => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\123\x65\154\x65\x63\x74\40\111\x74\145\x6d\40\43\45\144", PR__CMN__FOUNDATION), Constants::TEXT => __("\46\x23\70\62\x32\x30\73\x49\x74\145\155\x20\43\45\144\46\x23\70\62\x32\61\x3b\x20\x69\163\40\x6c\x6f\x63\x6b\x65\x64", PR__CMN__FOUNDATION)], ["\x63\x6c\141\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); yaumwqeommqigswq: wiiqigwgyuiuksia: } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if ($this->qaccsiwkuqigokoe()) { goto agyycikucwgmysee; } if (!(($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) && $meywaqqsugaoeyys->mukyysqkgaimcygs())) { goto mqoygcuqwacgycek; } $ccowyogiqwikkkie[Constants::DELETE] = __("\104\145\x6c\x65\164\145", PR__CMN__FOUNDATION); mqoygcuqwacgycek: $ccowyogiqwikkkie = (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\142\165\154\153\x5f\x61\x63\x74\151\157\156\x73", $ccowyogiqwikkkie, $this->umaeoegyykkkqmia()); agyycikucwgmysee: return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { return (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\x61\x6e\141\x67\145\x5f\x73\157\162\x74\141\x62\x6c\x65\x5f\x63\x6f\154\165\x6d\x6e\163", []); } protected function get_table_classes() : array { $cmkqisoeyioisqaw = $this->mgogaykgkoogasim()->quqgocgogegaauao(Constants::ugsuecoyuqcamsac); if (is_array($cmkqisoeyioisqaw)) { goto aiukiwqmikscoswm; } $cmkqisoeyioisqaw = ["\167\151\x64\x65\146\x61\x74", "\x73\164\x72\x69\x70\145\144", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()]; aiukiwqmikscoswm: return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!(!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\x73"]) || $this->has_items()))) { goto gskacikgkwcuauko; } $euueacigmgoqkimu .= "\55\163\145\x61\162\x63\x68\x2d\151\x6e\160\x75\164"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie))) { goto mcmkqgkwyqoiikcq; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\x70\165\x74", [Constants::squoamkioomemiyi => "\x68\x69\144\144\x65\x6e", Constants::NAME => "\157\162\144\145\x72\142\x61\171", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); mcmkqgkwyqoiikcq: if (!($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq))) { goto ssyukuseoymackeo; } $omwieegygisoswgw->awwqwouuoioauoaw("\151\156\x70\165\164", [Constants::squoamkioomemiyi => "\150\151\144\x64\145\156", Constants::NAME => "\x6f\162\x64\x65\x72", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); ssyukuseoymackeo: $this->iuygowkemiiwqmiw("\x73\145\141\162\x63\x68\x5f\142\x6f\x78", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\163"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\142\165\x74\x74\157\x6e", false, false, ["\111\104" => "\x73\x65\x61\162\x63\150\x2d\x73\x75\142\155\x69\164"])], ["\x63\154\x61\x73\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); gskacikgkwcuauko: } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto eaggoasiwogmquwc; } $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { goto iusaeoimukymskgs; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name, ''); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name); $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x6d\x61\x6e\141\147\145\137\143\165\x73\x74\157\x6d\137\143\157\x6c\x75\155\156", '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); if ($aqykuigiuwmmcieu) { goto ascogkesqmuuaesq; } if ($aaqqkgyougeiueyq instanceof DateTime) { goto kkwqmewaksmokuqy; } $aqykuigiuwmmcieu = $eqgoocgaqwqcimie; goto gsgkayokisiesciy; kkwqmewaksmokuqy: $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name); gsgkayokisiesciy: ascogkesqmuuaesq: if (!$aaqqkgyougeiueyq instanceof Enum) { goto askukaucmocewkgg; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); askukaucmocewkgg: $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; $wkkweuacukumqmya = $this->get_columns(); $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya); if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) { goto euskosgaksmimgug; } if (!($aqykuigiuwmmcieu && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\141"))) { goto meqmcgmksqiqcoyq; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm); if ($iwywmkygwewiamwm) { goto kiemqsgcmouqscao; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); kiemqsgcmouqscao: if (!$iwywmkygwewiamwm) { goto wssaaemscmmiomee; } $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\x6c\x61\163\x73" => "\x72\x6f\167\x2d\x74\x69\x74\154\145", "\141\162\x69\x61\x2d\154\141\x62\145\154" => sprintf(__("\x45\144\151\x74\40\42\x25\x73\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\142\165\x74\164\x6f\156", ["\164\171\x70\x65" => "\x62\x75\x74\x74\157\x6e", "\x63\154\141\163\163" => "\164\157\x67\x67\x6c\x65\x2d\162\157\167"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x53\150\x6f\167\40\x6d\x6f\162\145\x20\144\x65\x74\141\x69\154\163", PR__CMN__FOUNDATION), ["\x63\154\141\163\x73" => "\x73\x63\162\145\x65\156\x2d\162\x65\x61\144\x65\x72\x2d\x74\x65\x78\x74"])); wssaaemscmmiomee: meqmcgmksqiqcoyq: euskosgaksmimgug: goto asciaakaoygususy; iusaeoimukymskgs: $ccowyogiqwikkkie = $meywaqqsugaoeyys->igosuocmowawmwyq($igqsaukqcqscimok); foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { goto seieguyaaiqismgo; } if (!is_string($aiamqeawckcsuaou)) { goto uueywyysiicuauem; } $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; uueywyysiicuauem: goto qgyoesyiasqimcoe; seieguyaaiqismgo: $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if (!$cmwygeyygwqaemaq) { goto giooasyeqwaaocea; } $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\x61\x73\55\x69\x63\157\156")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if (!$aegqqyquausewoqe) { goto qmegcmqemmywoqas; } $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); qmegcmqemmywoqas: $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); giooasyeqwaaocea: qgyoesyiasqimcoe: kwiuqqwamsimqgme: } yyieomeeqycmikqw: asciaakaoygususy: eaggoasiwogmquwc: return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo = null; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ywmoieqkigsykequ; } $cqcsaaswaciweiie = $meywaqqsugaoeyys->ukcqkkgyogwoiccm(); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::ykyeawseyyawawyy, false); if (!((!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) && $cqcsaaswaciweiie)) { goto meoweqcaaosoomeu; } $eqgoocgaqwqcimie = Constants::ALL; meoweqcaaosoomeu: ywmoieqkigsykequ: return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { return $siykeiywomwwuoiw; } public function prepare_items($ywmkwiwkosakssii = []) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto yamoiggaeugmgkku; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\160\145\x72\137\x70\x61\x67\x65")]); if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto iaousaauoawkqkkg; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; iaousaauoawkqkkg: $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { goto muwyuiikuywigwso; } if ($siykeiywomwwuoiw) { goto kkwucaoumyayagcq; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa(); kkwucaoumyayagcq: goto gikaiicgqyueeoco; muwyuiikuywigwso: $siykeiywomwwuoiw = $meywaqqsugaoeyys->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); gikaiicgqyueeoco: if ($siykeiywomwwuoiw) { goto akoiqkoqmmmcieug; } $this->items = []; goto cgasgmiiqegqesic; akoiqkoqmmmcieug: $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\162\x6d\137\x76\x69\x65\167\x5f\x69\x6e\x64\x65\x78\137\x62\x75\151\x6c\144\145\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\155\x5f\166\x69\145\167\x5f\151\x6e\144\x65\x78\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x62\165\x69\x6c\x64\145\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw); $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this); $siykeiywomwwuoiw = $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if (!($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false))) { goto akcakssqcqcouwew; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); akcakssqcqcouwew: $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args(["\x70\145\162\137\160\x61\x67\x65" => $weyoqgcesqgeusiu, "\164\x6f\x74\141\x6c\x5f\151\164\145\x6d\x73" => $gmwiogsuisuoiwqu["\x70\141\147\x69\x6e\x61\x74\x69\x6f\156"]["\x74\x6f\164\141\x6c"], "\x74\x6f\164\141\x6c\x5f\x70\141\x67\145\163" => $gmwiogsuisuoiwqu["\x70\141\x67\151\156\141\x74\x69\157\156"]["\x70\141\147\145\163"]]); cgasgmiiqegqesic: yamoiggaeugmgkku: } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto qoiuwyogucoeaoew; } $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if (!$ccowyogiqwikkkie) { goto eqekaoaioiykuaiw; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x64\151\166", ["\143\x6c\141\x73\163" => "\x70\x72\55\x70\162\x69\x6d\141\x72\171\x2d\x61\x63\164\x69\157\x6e\x73"], true, $ccowyogiqwikkkie); eqekaoaioiykuaiw: parent::extra_tablenav($wcagyqamwoksawik); qoiuwyogucoeaoew: } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto ouqwmaaskykywyqo; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ccowyogiqwikkkie = []; if (!($eqwekkkkmkkeismg = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) { goto qkkqiagwgaoyauki; } $ccowyogiqwikkkie[Constants::awysmmukegasimmq] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x45\144\x69\x74", PR__CMN__FOUNDATION), $eqwekkkkmkkeismg, ["\141\162\151\x61\55\154\x61\x62\x65\x6c" => __("\105\144\x69\x74", PR__CMN__FOUNDATION)]); $ccowyogiqwikkkie[Constants::kyccsamqmuwysaws] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\121\165\x69\x63\153\40\105\x64\x69\x74", PR__CMN__FOUNDATION), "\43", ["\143\x6c\141\x73\x73" => "\157\162\155\x2d\161\x75\151\x63\153\x2d\145\144\151\164", "\x61\x72\151\141\55\x6c\141\142\145\154" => __("\x51\165\x69\143\153\x20\x45\144\x69\x74", PR__CMN__FOUNDATION), "\x64\141\164\x61\55\155\157\144\x65\x6c" => $meywaqqsugaoeyys::uqggkiomyiceyooa(), "\x64\x61\x74\141\55\157\x62\x6a\x65\x63\164" => $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($meywaqqsugaoeyys->ekuykcasmcmywewi($igqsaukqcqscimok))]); qkkqiagwgaoyauki: if (!($aoyimogsmooskgsm = $meywaqqsugaoeyys->uesweuocqoywoyms($eqgoocgaqwqcimie))) { goto oyywywoqaqcykucs; } $ccowyogiqwikkkie[Constants::ieioeisgwcgysukw] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\123\150\x6f\x77", PR__CMN__FOUNDATION), $aoyimogsmooskgsm, ["\141\x72\x69\x61\x2d\x6c\141\x62\x65\154" => __("\x53\150\157\x77", PR__CMN__FOUNDATION)]); oyywywoqaqcykucs: if (!($maycsqycmwyoqwwy = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) { goto iqeqqwcmaiqakawc; } $ccowyogiqwikkkie[Constants::DELETE] = $meywaqqsugaoeyys->rkmkouiquumiecqy($maycsqycmwyoqwwy); iqeqqwcmaiqakawc: $euiiykgssaaqwcmw = $meywaqqsugaoeyys->eaccsioyemcakcss($igqsaukqcqscimok); if (!$euiiykgssaaqwcmw) { goto mkuigmcgkawyawee; } foreach ($euiiykgssaaqwcmw as $uusmaiomayssaecw => $yaaiaiskqiiiugmm) { if (is_string($yaaiaiskqiiiugmm)) { goto uqagqomggiacosqm; } if (!is_array($yaaiaiskqiiiugmm)) { goto suoymucmyegewkmu; } $ccowyogiqwikkkie[$uusmaiomayssaecw] = $swqimwqeweekeusq->uuccukgasskgimsq("\x61", $yaaiaiskqiiiugmm[Constants::ysskgssgwuwmqwym] ?? [], $yaaiaiskqiiiugmm[Constants::TEXT] ?? ''); suoymucmyegewkmu: goto mwskgsimqagmkcgq; uqagqomggiacosqm: $ccowyogiqwikkkie[$uusmaiomayssaecw] = $yaaiaiskqiiiugmm; mwskgsimqagmkcgq: miaiggsoiaekmqwy: } gioqkcywauuckmua: mkuigmcgkawyawee: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\162\x6f\167\137\141\x63\164\151\x6f\156\x73", $ccowyogiqwikkkie, $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); ouqwmaaskykywyqo: return $ccowyogiqwikkkie; } }
