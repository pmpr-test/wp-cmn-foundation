<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671248edea456             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Database\Repository; use Pmpr\Common\Foundation\ORM\Database\Schema\DateTime; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; class ListTable extends WPListTable { use ModelTrait; protected ?Repository $query = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->query = $ywmkwiwkosakssii[Constants::meieskyuuegwwcsy] ?? null; $this->showMinimum = $scsaeueqgyymsyei; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $meywaqqsugaoeyys->kooiucqkggeagccu()); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { if (is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); } } else { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); } if ($gcgsqcoqciockquc) { $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->cueaickeeoiwayou() . "\137\160\x65\162\x5f\x70\x61\x67\145"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; } parent::__construct($ywmkwiwkosakssii); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->ggmgmqswqkgecosg("\155\x61\x6e\x61\147\145\x5f{$this->screen->id}\137\x63\157\154\165\155\x6e\x73", [$this, "\x67\145\164\137\143\x6f\154\x75\x6d\x6e\163"], 0); } protected function display_tablenav($wcagyqamwoksawik) { if (!$this->qaccsiwkuqigokoe()) { parent::display_tablenav($wcagyqamwoksawik); } } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } function no_items() { echo $this->mgogaykgkoogasim()->euwycwigoeawgckq("\x6e\x6f\164\x5f\146\x6f\x75\x6e\x64"); } public function single_row($igqsaukqcqscimok) { if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { $wwgucssaecqekuek = ["\x64\x61\x74\141\x2d\151\144" => $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->aakmagwggmkoiiyu(), $meywaqqsugaoeyys->cueaickeeoiwayou()]; if ($meywaqqsugaoeyys->kcsywgyywsgqgawm() && !$meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::sugcoawcimusgaga, false)) { $egkyssmuqcwaciya[] = "\x75\156\163\x65\145\x6e"; } $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ikgwqyuyckaewsow = $qqomumygoacsmsie->asewymkskoaoiokm(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $aaqqkgyougeiueyq) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\x2d{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aaqqkgyougeiueyq, $igqsaukqcqscimok)}"; } } if ($egkyssmuqcwaciya) { $wwgucssaecqekuek["\143\x6c\141\163\163"] = $egkyssmuqcwaciya; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x74\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\x3c\57\164\162\76"; } } protected function get_views() { $yyowoaoeweomgqey = []; if (!$this->qaccsiwkuqigokoe()) { $yyowoaoeweomgqey = parent::get_views(); $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $yyowoaoeweomgqey = $qqomumygoacsmsie->qquqcgcywuqosyim($yyowoaoeweomgqey); } } return $yyowoaoeweomgqey; } public function get_columns() { return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->qwkcakacwsyqmyyq($this->screen); } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163", ''); } public function column_cb($igqsaukqcqscimok) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\144\x69\x74\137\x69\164\145\x6d\163")) { $this->iuygowkemiiwqmiw("\x63\141\154\154\x62\141\x63\153", [Constants::ciyoccqkiamemcmm => $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\x53\145\154\x65\143\164\x20\111\x74\x65\x6d\x20\x23\45\x64", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\x23\70\x32\x32\x30\x3b\x49\x74\x65\x6d\40\43\x25\x64\x26\43\x38\62\x32\61\73\40\x69\163\x20\154\157\x63\153\145\144", PR__CMN__FOUNDATION)], ["\143\x6c\141\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if (!$this->qaccsiwkuqigokoe()) { $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::ecwwqsqmiiqocoyw, $this->umaeoegyykkkqmia()); } } return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { $wkkweuacukumqmya = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if ($ywmkwiwkosakssii = $aaqqkgyougeiueyq->usyiuqmiaiosccca()) { if (is_bool($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [$aaqqkgyougeiueyq->iooowgsqoyqseyuu(), false, $aaqqkgyougeiueyq->qcgakseyaikigqco(), sprintf(__("\124\x61\x62\x6c\145\x20\117\162\x64\x65\162\40\142\x79\40\x25\163", PR__CMN__FOUNDATION), $aaqqkgyougeiueyq->qcgakseyaikigqco()), Constants::eeccqomoaqsawouy]; } if (is_array($ywmkwiwkosakssii)) { $wkkweuacukumqmya[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $ywmkwiwkosakssii; } } } return $wkkweuacukumqmya; } protected function get_table_classes() : array { $cmkqisoeyioisqaw = ["\167\151\x64\145\x66\x61\x74", "\x73\x74\162\x69\160\145\x64", $this->mgogaykgkoogasim()->cueaickeeoiwayou()]; $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $mmyuuewgwesgymca = $qqomumygoacsmsie->imkyoqyocosuqasu(Constants::kmkiaoimmqayiegg, []); if (!empty($mmyuuewgwesgymca)) { $cmkqisoeyioisqaw = $mmyuuewgwesgymca; } } return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\163"]) || $this->has_items())) { $euueacigmgoqkimu .= "\55\163\145\x61\162\143\150\55\x69\156\160\165\164"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie)) { $omwieegygisoswgw->awwqwouuoioauoaw("\151\x6e\x70\165\164", [Constants::squoamkioomemiyi => "\x68\x69\144\144\x65\156", Constants::NAME => "\157\162\x64\x65\162\x62\141\x79", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); } if ($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq)) { $omwieegygisoswgw->awwqwouuoioauoaw("\151\x6e\x70\x75\164", [Constants::squoamkioomemiyi => "\x68\x69\x64\x64\145\x6e", Constants::NAME => "\157\162\144\x65\x72", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); } $this->iuygowkemiiwqmiw("\x73\145\141\162\143\150\137\x62\x6f\x78", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\163"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\x62\165\x74\164\157\x6e", false, false, ["\x49\104" => "\x73\x65\x61\x72\143\150\x2d\x73\165\x62\x6d\x69\x74"])], ["\x63\x6c\x61\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { $ccowyogiqwikkkie = []; $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::meisqwykgaymauka, $aokagokqyuysuksm, $igqsaukqcqscimok, $meywaqqsugaoeyys); } foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if ($cmwygeyygwqaemaq) { $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\141\x73\x2d\151\x63\157\x6e")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if ($aegqqyquausewoqe) { $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); } $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); } } else { if (is_string($aiamqeawckcsuaou)) { $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; } } } } else { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, $column_name); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($column_name); if ($aaqqkgyougeiueyq) { $aqykuigiuwmmcieu = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $igqsaukqcqscimok, $meywaqqsugaoeyys); if ($aaqqkgyougeiueyq instanceof Enum) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); } } $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("\x6f\x72\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\155\141\x6e\x61\x67\145\x5f\143\x75\x73\164\x6f\155\137\x63\157\x6c\165\x6d\156", $aqykuigiuwmmcieu, $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; if ($aqykuigiuwmmcieu && $column_name === (array_keys($this->get_columns())[$awyomkauyyymugeq] ?? '') && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\141")) { $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $aokagokqyuysuksm); if (!$iwywmkygwewiamwm) { $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm); } if ($iwywmkygwewiamwm) { $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\x6c\x61\163\x73" => "\x72\x6f\x77\x2d\164\x69\x74\x6c\x65", "\x61\x72\x69\x61\x2d\154\141\x62\x65\x6c" => sprintf(__("\x45\144\151\x74\40\x22\x25\x73\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\x75\x74\x74\157\156", ["\164\x79\160\145" => "\142\165\164\164\157\156", "\x63\154\x61\163\163" => "\x74\x6f\x67\147\154\145\x2d\x72\157\167"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\123\150\x6f\x77\40\155\157\162\145\x20\144\145\164\141\151\154\x73", PR__CMN__FOUNDATION), ["\x63\154\x61\163\x73" => "\163\143\162\145\x65\x6e\55\162\x65\x61\144\x65\x72\x2d\164\145\170\x74"])); } } } } return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::ykyeawseyyawawyy, false); if (!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = Constants::ALL; } return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function prepare_items($ywmkwiwkosakssii = []) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($this->asuigsqoowmekwok()->get_option(Constants::ausqeuugegoygouq, Constants::ugqacsomqcgmoqug))]); if (isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; } $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); } else { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa(); } } if ($siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\x6d\x5f\166\x69\145\x77\x5f\x69\x6e\x64\145\170\x5f\142\x75\151\x6c\144\x65\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\162\x6d\x5f\166\151\145\x77\x5f\151\156\x64\145\x78\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x62\x75\x69\154\x64\145\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akmkameqsskoeaoi = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::iieuswywqkawosew, $siykeiywomwwuoiw, $this); if ($akmkameqsskoeaoi) { $siykeiywomwwuoiw = $akmkameqsskoeaoi; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->weyqgwsqeueuwgsm($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if ($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false)) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); } $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\164\157\164\x61\x6c\x5f\x69\x74\x65\x6d\x73" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::uiiqiokqwmccomiu], "\x74\x6f\x74\141\154\x5f\160\141\147\x65\163" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::yusuiaeueqwieqqq]]); } else { $this->items = []; } } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if (!$this->qaccsiwkuqigokoe()) { $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if ($ccowyogiqwikkkie) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x64\x69\x76", ["\x63\x6c\x61\x73\163" => "\x70\162\x2d\x70\162\151\x6d\141\162\171\x2d\141\x63\x74\x69\157\156\x73"], true, $ccowyogiqwikkkie); } parent::extra_tablenav($wcagyqamwoksawik); } } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if ($micmwmywmkguiyyk === $column_name) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($moqewomugocaueis = $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok)) { $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $this->row_actions($qqomumygoacsmsie->igmckyamugkymqku(Constants::mqkiiimeocmcyecq, $moqewomugocaueis, $igqsaukqcqscimok, $meywaqqsugaoeyys)); } } } return $ccowyogiqwikkkie; } }
