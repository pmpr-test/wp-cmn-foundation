<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\DB\Schema\DateTime; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Common\Foundation\Interfaces\Constants; class ListTable extends WPListTable { protected ?Model $model = null; protected ?Builder $builder = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->model = $meywaqqsugaoeyys; $this->builder = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem] ?? null; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); if (!$scsaeueqgyymsyei) { goto askukaucmocewkgg; } $this->oykkqiicyegyyssa(); askukaucmocewkgg: $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, $yyksucsgisomecgg->sacmkccceuywoqsq(true)); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto wssaaemscmmiomee; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); goto meqmcgmksqiqcoyq; wssaaemscmmiomee: if (!is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto kiemqsgcmouqscao; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); kiemqsgcmouqscao: meqmcgmksqiqcoyq: if (!$gcgsqcoqciockquc) { goto euskosgaksmimgug; } $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\x5f\160\x65\x72\x5f\160\141\x67\x65"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; euskosgaksmimgug: parent::__construct($ywmkwiwkosakssii); } protected function display_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto iusaeoimukymskgs; } parent::display_tablenav($wcagyqamwoksawik); iusaeoimukymskgs: } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } public function mgogaykgkoogasim() : ?Model { return $this->model; } function no_items() { echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\x6e\157\x74\x5f\x66\157\165\x6e\144"); } public function single_row($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto kkwucaoumyayagcq; } $wwgucssaecqekuek = ["\144\x61\164\141\x2d\x69\x64" => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->miwqiiqeegeqcwis(), $meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw()]; if (!$meywaqqsugaoeyys->ksmisoyyqmwgwiye($igqsaukqcqscimok)) { goto asciaakaoygususy; } $egkyssmuqcwaciya[] = "\165\156\163\145\x65\156"; asciaakaoygususy: if (!($ikgwqyuyckaewsow = $meywaqqsugaoeyys->ukcqkkgyogwoiccm())) { goto ywmoieqkigsykequ; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\x2d{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aiowsaccomcoikus, $igqsaukqcqscimok)}"; meoweqcaaosoomeu: } eaggoasiwogmquwc: ywmoieqkigsykequ: if (!$egkyssmuqcwaciya) { goto iaousaauoawkqkkg; } $wwgucssaecqekuek["\x63\x6c\x61\163\x73"] = $egkyssmuqcwaciya; iaousaauoawkqkkg: $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x74\162", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\x3c\x2f\164\x72\x3e"; kkwucaoumyayagcq: } protected function get_views() { $umwgoasiowmqcumw = []; if ($this->qaccsiwkuqigokoe()) { goto muwyuiikuywigwso; } $umwgoasiowmqcumw = parent::get_views(); $umwgoasiowmqcumw = $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x6d\141\x6e\141\x67\x65\137\x76\x69\x65\x77\x73", $umwgoasiowmqcumw, $this->qkeoieugywkooams()); muwyuiikuywigwso: return $umwgoasiowmqcumw; } public function qkeoieugywkooams() : ?Builder { if (!(!$this->builder && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto gikaiicgqyueeoco; } $this->builder = $meywaqqsugaoeyys->gqaysymikgeawkqa(); gikaiicgqyueeoco: return $this->builder; } public function get_columns() { $wkkweuacukumqmya = []; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto cgasgmiiqegqesic; } if (!$this->get_bulk_actions()) { goto akcakssqcqcouwew; } $wkkweuacukumqmya["\x63\142"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x69\156\x70\165\x74", [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); akcakssqcqcouwew: $wkkweuacukumqmya = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x6d\141\156\x61\x67\145\x5f\143\157\x6c\x75\x6d\156\163", $wkkweuacukumqmya); if (!$meywaqqsugaoeyys->igosuocmowawmwyq()) { goto akoiqkoqmmmcieug; } $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __("\x41\143\164\x69\x6f\156\x73", PR__CMN__FOUNDATION); akoiqkoqmmmcieug: cgasgmiiqegqesic: return $wkkweuacukumqmya; } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\x73", ''); } public function column_cb($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto eqekaoaioiykuaiw; } $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\144\151\x74\x5f\x69\164\x65\155\163"); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($gkswkiicccswksiq)) { goto yamoiggaeugmgkku; } $this->iuygowkemiiwqmiw("\143\x61\154\x6c\x62\x61\x63\153", [Constants::ciyoccqkiamemcmm => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\123\145\154\145\x63\x74\40\111\164\145\155\40\x23\45\x64", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\43\70\62\x32\x30\x3b\x49\164\145\x6d\40\43\x25\x64\x26\x23\x38\62\62\61\x3b\40\x69\163\x20\x6c\x6f\x63\x6b\x65\144", PR__CMN__FOUNDATION)], ["\x63\154\141\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); yamoiggaeugmgkku: eqekaoaioiykuaiw: } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if ($this->qaccsiwkuqigokoe()) { goto qkkqiagwgaoyauki; } if (!(($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) && $meywaqqsugaoeyys->mukyysqkgaimcygs())) { goto qoiuwyogucoeaoew; } $ccowyogiqwikkkie[Constants::DELETE] = __("\104\x65\x6c\145\164\145", PR__CMN__FOUNDATION); qoiuwyogucoeaoew: $ccowyogiqwikkkie = (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\142\x75\154\153\137\x61\143\x74\151\157\156\163", $ccowyogiqwikkkie, $this->umaeoegyykkkqmia()); qkkqiagwgaoyauki: return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { return (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\141\156\141\x67\x65\x5f\163\157\x72\164\141\142\x6c\x65\137\143\x6f\154\x75\155\x6e\163", []); } protected function get_table_classes() : array { $cmkqisoeyioisqaw = $this->mgogaykgkoogasim()->quqgocgogegaauao(Constants::ugsuecoyuqcamsac); if (is_array($cmkqisoeyioisqaw)) { goto oyywywoqaqcykucs; } $cmkqisoeyioisqaw = ["\x77\x69\x64\145\146\141\164", "\163\164\x72\151\160\x65\x64", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()]; oyywywoqaqcykucs: return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!(!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\x73"]) || $this->has_items()))) { goto miaiggsoiaekmqwy; } $euueacigmgoqkimu .= "\55\x73\145\x61\x72\x63\x68\x2d\151\156\160\165\164"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie))) { goto iqeqqwcmaiqakawc; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\x70\165\164", [Constants::squoamkioomemiyi => "\x68\x69\144\144\145\156", Constants::NAME => "\x6f\x72\x64\x65\x72\142\x61\171", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); iqeqqwcmaiqakawc: if (!($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq))) { goto gioqkcywauuckmua; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\x70\165\x74", [Constants::squoamkioomemiyi => "\150\x69\x64\144\145\156", Constants::NAME => "\157\162\144\x65\162", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); gioqkcywauuckmua: $this->iuygowkemiiwqmiw("\x73\145\x61\x72\x63\x68\137\142\x6f\x78", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\x73"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\142\165\164\x74\x6f\x6e", false, false, ["\111\104" => "\x73\145\141\x72\x63\150\55\163\165\142\x6d\151\x74"])], ["\x63\x6c\x61\x73\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); miaiggsoiaekmqwy: } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto gqywcowiigceimaw; } $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { goto wukuisoeoeomgegu; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name, ''); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name); $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\156\x61\147\145\137\x63\165\163\164\x6f\155\137\x63\157\x6c\x75\155\x6e", '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); if ($aqykuigiuwmmcieu) { goto iiuawywwoaeyauge; } if ($aaqqkgyougeiueyq instanceof DateTime) { goto ccqgkeesikyegcik; } $aqykuigiuwmmcieu = $eqgoocgaqwqcimie; goto aakwscykmyyykoms; ccqgkeesikyegcik: $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name); aakwscykmyyykoms: iiuawywwoaeyauge: if (!$aaqqkgyougeiueyq instanceof Enum) { goto wcoqiwuusoeqiqwi; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); wcoqiwuusoeqiqwi: $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; $wkkweuacukumqmya = $this->get_columns(); $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya); if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) { goto kcqieuukskyiywss; } if (!($aqykuigiuwmmcieu && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\x61"))) { goto yuoyackaoigyyyso; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm); if ($iwywmkygwewiamwm) { goto oqwyemgwoossauyk; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); oqwyemgwoossauyk: if (!$iwywmkygwewiamwm) { goto cwcmwogseemgqgqq; } $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\154\141\163\163" => "\x72\157\167\x2d\x74\151\164\x6c\x65", "\x61\x72\x69\x61\55\154\x61\142\145\154" => sprintf(__("\105\x64\x69\x74\x20\42\x25\163\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\142\165\164\164\x6f\x6e", ["\x74\171\160\x65" => "\142\x75\x74\x74\x6f\x6e", "\143\154\141\x73\x73" => "\x74\x6f\147\x67\154\145\55\162\157\x77"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x53\x68\157\167\x20\155\x6f\x72\145\x20\x64\x65\164\x61\x69\154\163", PR__CMN__FOUNDATION), ["\143\154\141\x73\x73" => "\x73\143\162\145\145\156\x2d\x72\145\x61\x64\145\162\x2d\164\145\170\164"])); cwcmwogseemgqgqq: yuoyackaoigyyyso: kcqieuukskyiywss: goto gsimeiqkoyqkuecq; wukuisoeoeomgegu: $ccowyogiqwikkkie = $meywaqqsugaoeyys->igosuocmowawmwyq($igqsaukqcqscimok); foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { goto agqmoymkiswqswqo; } if (!is_string($aiamqeawckcsuaou)) { goto ouqwmaaskykywyqo; } $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; ouqwmaaskykywyqo: goto kwaqakoogeiacmwi; agqmoymkiswqswqo: $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if (!$cmwygeyygwqaemaq) { goto mkuigmcgkawyawee; } $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\141\x73\x2d\151\143\x6f\x6e")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if (!$aegqqyquausewoqe) { goto mwskgsimqagmkcgq; } $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); mwskgsimqagmkcgq: $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); mkuigmcgkawyawee: kwaqakoogeiacmwi: uqagqomggiacosqm: } suoymucmyegewkmu: gsimeiqkoyqkuecq: gqywcowiigceimaw: return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo = null; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto quewwumogiocouii; } $cqcsaaswaciweiie = $meywaqqsugaoeyys->ukcqkkgyogwoiccm(); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::ykyeawseyyawawyy, false); if (!((!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) && $cqcsaaswaciweiie)) { goto eyuoecmogqwkmomi; } $eqgoocgaqwqcimie = Constants::ALL; eyuoecmogqwkmomi: quewwumogiocouii: return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { return $siykeiywomwwuoiw; } public function prepare_items($ywmkwiwkosakssii = []) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto wwccoougkywoaoui; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\x70\145\x72\x5f\x70\x61\x67\x65")]); if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto geugsymgsiuuqccg; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; geugsymgsiuuqccg: $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { goto ioacywuoyuskqmwy; } if ($siykeiywomwwuoiw) { goto mgwgiesscqoaqcau; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa(); mgwgiesscqoaqcau: goto bgoygegmogcmeaou; ioacywuoyuskqmwy: $siykeiywomwwuoiw = $meywaqqsugaoeyys->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\75", $siykeiywomwwuoiw); bgoygegmogcmeaou: if ($siykeiywomwwuoiw) { goto cgmcwkmmcmmkiooc; } $this->items = []; goto iamooqskosymqsmw; cgmcwkmmcmmkiooc: $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\162\155\x5f\166\x69\x65\x77\x5f\x69\156\144\x65\x78\x5f\x62\x75\x69\x6c\144\x65\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\x6d\137\x76\151\145\x77\x5f\151\x6e\x64\x65\x78\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x62\165\x69\x6c\144\x65\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw); $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this); $siykeiywomwwuoiw = $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if (!($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false))) { goto awgaewwsskasueke; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); awgaewwsskasueke: $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args(["\160\145\x72\137\160\x61\147\145" => $weyoqgcesqgeusiu, "\164\x6f\x74\x61\154\x5f\151\x74\x65\155\x73" => $gmwiogsuisuoiwqu["\x70\x61\147\151\x6e\x61\164\x69\157\156"]["\x74\157\x74\141\x6c"], "\x74\157\x74\x61\x6c\137\160\x61\147\x65\163" => $gmwiogsuisuoiwqu["\x70\x61\x67\151\x6e\141\x74\151\x6f\x6e"]["\x70\141\x67\145\x73"]]); iamooqskosymqsmw: wwccoougkywoaoui: } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto uykwmucgoywoesui; } $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if (!$ccowyogiqwikkkie) { goto eygqeoiskweuiuqi; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x64\151\166", ["\143\x6c\x61\x73\163" => "\160\x72\55\160\162\x69\155\141\x72\x79\x2d\141\143\164\151\157\156\163"], true, $ccowyogiqwikkkie); eygqeoiskweuiuqi: parent::extra_tablenav($wcagyqamwoksawik); uykwmucgoywoesui: } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto yeiicwscguyokwyu; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ccowyogiqwikkkie = []; if (!($eqwekkkkmkkeismg = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) { goto iisieuaeyiqwckou; } $ccowyogiqwikkkie[Constants::awysmmukegasimmq] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x45\144\151\164", PR__CMN__FOUNDATION), $eqwekkkkmkkeismg, ["\x61\162\151\x61\55\x6c\141\x62\x65\154" => __("\105\144\x69\164", PR__CMN__FOUNDATION)]); $ccowyogiqwikkkie[Constants::kyccsamqmuwysaws] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\121\165\151\x63\153\x20\x45\x64\x69\x74", PR__CMN__FOUNDATION), "\x23", ["\143\x6c\141\x73\x73" => "\157\162\155\55\161\165\x69\x63\x6b\55\145\x64\x69\x74", "\x61\162\151\x61\55\x6c\141\x62\x65\154" => __("\121\165\x69\143\x6b\40\x45\144\x69\x74", PR__CMN__FOUNDATION), "\144\x61\164\141\55\x6d\157\x64\145\x6c" => $meywaqqsugaoeyys::uqggkiomyiceyooa(), "\144\x61\x74\141\55\157\x62\x6a\145\x63\164" => $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($meywaqqsugaoeyys->ekuykcasmcmywewi($igqsaukqcqscimok))]); iisieuaeyiqwckou: if (!($aoyimogsmooskgsm = $meywaqqsugaoeyys->uesweuocqoywoyms($eqgoocgaqwqcimie))) { goto oskwkeaemiqcaqkc; } $ccowyogiqwikkkie[Constants::ieioeisgwcgysukw] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\123\x68\x6f\x77", PR__CMN__FOUNDATION), $aoyimogsmooskgsm, ["\141\x72\151\x61\55\x6c\x61\x62\145\154" => __("\x53\x68\x6f\x77", PR__CMN__FOUNDATION)]); oskwkeaemiqcaqkc: if (!($maycsqycmwyoqwwy = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) { goto kiqmcymowosckmii; } $ccowyogiqwikkkie[Constants::DELETE] = $meywaqqsugaoeyys->rkmkouiquumiecqy($maycsqycmwyoqwwy); kiqmcymowosckmii: $euiiykgssaaqwcmw = $meywaqqsugaoeyys->eaccsioyemcakcss($igqsaukqcqscimok); if (!$euiiykgssaaqwcmw) { goto issgmmkcgesyeoas; } foreach ($euiiykgssaaqwcmw as $uusmaiomayssaecw => $yaaiaiskqiiiugmm) { if (is_string($yaaiaiskqiiiugmm)) { goto wqmwcuggcisqieao; } if (!is_array($yaaiaiskqiiiugmm)) { goto iacwyogogoccmwsg; } $ccowyogiqwikkkie[$uusmaiomayssaecw] = $swqimwqeweekeusq->uuccukgasskgimsq("\141", $yaaiaiskqiiiugmm[Constants::ysskgssgwuwmqwym] ?? [], $yaaiaiskqiiiugmm[Constants::TEXT] ?? ''); iacwyogogoccmwsg: goto qsyqcokomswykyso; wqmwcuggcisqieao: $ccowyogiqwikkkie[$uusmaiomayssaecw] = $yaaiaiskqiiiugmm; qsyqcokomswykyso: iwosouqsesoqcska: } iaygaasesyymwgss: issgmmkcgesyeoas: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\162\157\x77\x5f\x61\x63\x74\x69\x6f\156\163", $ccowyogiqwikkkie, $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); yeiicwscguyokwyu: return $ccowyogiqwikkkie; } }
