<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c47480ec             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Database\Repository; use Pmpr\Common\Foundation\ORM\Database\Schema\DateTime; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; class ListTable extends WPListTable { use ModelTrait; protected ?Repository $query = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->query = $ywmkwiwkosakssii[Constants::meieskyuuegwwcsy] ?? null; $this->showMinimum = $scsaeueqgyymsyei; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $meywaqqsugaoeyys->kooiucqkggeagccu()); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { if (is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); } } else { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); } if ($gcgsqcoqciockquc) { $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->cueaickeeoiwayou() . "\137\x70\145\162\x5f\160\141\147\145"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; } parent::__construct($ywmkwiwkosakssii); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->ggmgmqswqkgecosg("\155\x61\156\x61\x67\145\137{$this->screen->id}\x5f\x63\x6f\x6c\165\155\x6e\x73", [$this, "\x67\x65\x74\x5f\x63\157\x6c\165\155\x6e\163"], 0); } protected function display_tablenav($wcagyqamwoksawik) { if (!$this->qaccsiwkuqigokoe()) { parent::display_tablenav($wcagyqamwoksawik); } } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } function no_items() { echo $this->mgogaykgkoogasim()->euwycwigoeawgckq("\156\157\x74\137\x66\x6f\x75\156\144"); } public function single_row($igqsaukqcqscimok) { if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { $wwgucssaecqekuek = ["\x64\141\164\141\55\151\144" => $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->aakmagwggmkoiiyu(), $meywaqqsugaoeyys->cueaickeeoiwayou()]; if ($meywaqqsugaoeyys->kcsywgyywsgqgawm() && !$meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::sugcoawcimusgaga, false)) { $egkyssmuqcwaciya[] = "\x75\156\x73\145\x65\x6e"; } $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ikgwqyuyckaewsow = $qqomumygoacsmsie->asewymkskoaoiokm(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $aaqqkgyougeiueyq) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\x2d{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aaqqkgyougeiueyq, $igqsaukqcqscimok)}"; } } if ($egkyssmuqcwaciya) { $wwgucssaecqekuek["\143\154\141\163\163"] = $egkyssmuqcwaciya; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x74\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\74\57\x74\162\76"; } } protected function get_views() { $yyowoaoeweomgqey = []; if (!$this->qaccsiwkuqigokoe()) { $yyowoaoeweomgqey = parent::get_views(); $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $yyowoaoeweomgqey = $qqomumygoacsmsie->qquqcgcywuqosyim($yyowoaoeweomgqey, $this->_args[Constants::iaesmigkgskyygem] ?? null); } } return $yyowoaoeweomgqey; } public function get_columns() { return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->qwkcakacwsyqmyyq($this->screen); } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163", ''); } public function column_cb($igqsaukqcqscimok) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\144\151\164\137\151\164\145\155\163")) { $this->iuygowkemiiwqmiw("\x63\x61\x6c\154\x62\x61\x63\153", [Constants::ciyoccqkiamemcmm => $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\x53\145\x6c\x65\143\x74\x20\111\164\x65\155\x20\43\45\x64", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\43\x38\62\x32\x30\x3b\x49\x74\x65\155\x20\43\45\x64\x26\43\x38\x32\62\x31\x3b\x20\x69\163\40\154\x6f\143\x6b\145\144", PR__CMN__FOUNDATION)], ["\x63\x6c\x61\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); } } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if (!$this->qaccsiwkuqigokoe()) { $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::ecwwqsqmiiqocoyw, $this->umaeoegyykkkqmia()); } } return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { $wkkweuacukumqmya = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if ($ywmkwiwkosakssii = $aaqqkgyougeiueyq->usyiuqmiaiosccca()) { if (is_bool($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [$aaqqkgyougeiueyq->iooowgsqoyqseyuu(), false, $aaqqkgyougeiueyq->qcgakseyaikigqco(), sprintf(__("\124\x61\142\x6c\145\x20\x4f\162\x64\x65\162\x20\142\x79\x20\x25\163", PR__CMN__FOUNDATION), $aaqqkgyougeiueyq->qcgakseyaikigqco()), Constants::eeccqomoaqsawouy]; } if (is_array($ywmkwiwkosakssii)) { $wkkweuacukumqmya[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $ywmkwiwkosakssii; } } } return $wkkweuacukumqmya; } protected function get_table_classes() : array { $cmkqisoeyioisqaw = ["\x77\x69\144\x65\146\141\164", "\x73\164\162\x69\x70\x65\144", $this->mgogaykgkoogasim()->cueaickeeoiwayou()]; $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $mmyuuewgwesgymca = $qqomumygoacsmsie->imkyoqyocosuqasu(Constants::kmkiaoimmqayiegg, []); if (!empty($mmyuuewgwesgymca)) { $cmkqisoeyioisqaw = $mmyuuewgwesgymca; } } return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\x73"]) || $this->has_items())) { $euueacigmgoqkimu .= "\x2d\163\145\x61\162\143\150\55\x69\x6e\160\165\x74"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie)) { $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\160\165\x74", [Constants::squoamkioomemiyi => "\x68\151\x64\144\x65\x6e", Constants::NAME => "\157\x72\144\x65\x72\x62\141\171", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); } if ($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq)) { $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\x70\x75\x74", [Constants::squoamkioomemiyi => "\x68\x69\x64\x64\x65\x6e", Constants::NAME => "\157\162\x64\x65\x72", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); } $this->iuygowkemiiwqmiw("\163\145\141\x72\143\150\137\x62\x6f\x78", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\x73"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\x62\x75\x74\x74\157\x6e", false, false, ["\x49\104" => "\x73\x65\x61\x72\143\x68\x2d\163\x75\142\x6d\x69\x74"])], ["\143\x6c\141\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::meisqwykgaymauka, $aokagokqyuysuksm, $igqsaukqcqscimok, $meywaqqsugaoeyys); if ($ccowyogiqwikkkie) { $aqykuigiuwmmcieu .= implode('', $ccowyogiqwikkkie); } } } else { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, $column_name); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($column_name); if ($aaqqkgyougeiueyq) { $aqykuigiuwmmcieu = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $igqsaukqcqscimok, $meywaqqsugaoeyys); if ($aaqqkgyougeiueyq instanceof Enum) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); } } $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("\157\162\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x6d\x61\156\x61\x67\x65\x5f\143\165\163\x74\x6f\155\137\x63\157\154\165\155\x6e", $aqykuigiuwmmcieu, $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; if ($aqykuigiuwmmcieu && $column_name === (array_keys($this->get_columns())[$awyomkauyyymugeq] ?? '') && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\x61")) { $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $aokagokqyuysuksm); if (!$iwywmkygwewiamwm) { $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm); } if ($iwywmkygwewiamwm) { $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\x63\154\141\x73\163" => "\162\157\x77\x2d\x74\151\x74\154\145", "\141\x72\x69\x61\x2d\x6c\141\x62\x65\154" => sprintf(__("\x45\144\x69\x74\40\x22\45\x73\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\165\x74\x74\x6f\156", ["\x74\x79\160\145" => "\142\165\x74\x74\x6f\x6e", "\x63\154\141\163\x73" => "\x74\157\x67\x67\x6c\145\x2d\162\157\167"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x53\150\157\167\x20\155\x6f\x72\145\40\x64\x65\x74\x61\151\x6c\163", PR__CMN__FOUNDATION), ["\143\x6c\141\163\x73" => "\x73\143\x72\145\145\x6e\x2d\x72\145\141\x64\x65\x72\55\x74\145\170\x74"])); } } } } return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::ykyeawseyyawawyy, false); if (!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = Constants::ALL; } return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function prepare_items($ywmkwiwkosakssii = []) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($this->asuigsqoowmekwok()->get_option(Constants::ausqeuugegoygouq, Constants::ugqacsomqcgmoqug))]); if (isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; } $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); } else { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa(); } } if ($siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\x72\155\137\x76\x69\145\x77\x5f\x69\x6e\144\145\170\x5f\x62\x75\151\x6c\x64\145\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\166\151\x65\167\x5f\151\x6e\x64\145\x78\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\142\165\x69\x6c\x64\145\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akmkameqsskoeaoi = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::iieuswywqkawosew, $siykeiywomwwuoiw, $this); if ($akmkameqsskoeaoi) { $siykeiywomwwuoiw = $akmkameqsskoeaoi; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->weyqgwsqeueuwgsm($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if ($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false)) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); } $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\x74\x6f\x74\x61\x6c\x5f\x69\164\145\155\x73" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::uiiqiokqwmccomiu], "\164\x6f\x74\141\154\x5f\x70\141\x67\x65\163" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::yusuiaeueqwieqqq]]); } else { $this->items = []; } } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if (!$this->qaccsiwkuqigokoe()) { $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if ($ccowyogiqwikkkie) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\144\x69\x76", ["\x63\x6c\x61\x73\x73" => "\160\x72\x2d\160\x72\151\x6d\141\x72\x79\x2d\x61\143\164\151\157\x6e\x73"], true, $ccowyogiqwikkkie); } parent::extra_tablenav($wcagyqamwoksawik); } } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if ($micmwmywmkguiyyk === $column_name) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($moqewomugocaueis = $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok)) { $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $this->row_actions($qqomumygoacsmsie->igmckyamugkymqku(Constants::mqkiiimeocmcyecq, $moqewomugocaueis, $igqsaukqcqscimok, $meywaqqsugaoeyys)); } } } return $ccowyogiqwikkkie; } }
