<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe229367             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Database\Repository; use Pmpr\Common\Foundation\ORM\Database\Schema\DateTime; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; class ListTable extends WPListTable { use ModelTrait; protected ?Repository $query = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->query = $ywmkwiwkosakssii[Constants::meieskyuuegwwcsy] ?? null; $this->showMinimum = $scsaeueqgyymsyei; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $meywaqqsugaoeyys->kooiucqkggeagccu()); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { if (is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); } } else { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); } if ($gcgsqcoqciockquc) { $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->cueaickeeoiwayou() . "\137\160\145\162\x5f\x70\141\x67\x65"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; } parent::__construct($ywmkwiwkosakssii); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->ggmgmqswqkgecosg("\155\x61\x6e\141\147\x65\137{$this->screen->id}\x5f\143\157\154\x75\x6d\156\163", [$this, "\147\x65\x74\x5f\x63\157\x6c\x75\x6d\x6e\163"], 0); } protected function display_tablenav($wcagyqamwoksawik) { if (!$this->qaccsiwkuqigokoe()) { parent::display_tablenav($wcagyqamwoksawik); } } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } function no_items() { echo $this->mgogaykgkoogasim()->euwycwigoeawgckq("\x6e\157\164\137\x66\157\165\x6e\x64"); } public function single_row($igqsaukqcqscimok) { if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { $wwgucssaecqekuek = ["\144\x61\164\141\x2d\151\x64" => $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->aakmagwggmkoiiyu(), $meywaqqsugaoeyys->cueaickeeoiwayou()]; if ($meywaqqsugaoeyys->kcsywgyywsgqgawm() && !$meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::sugcoawcimusgaga, false)) { $egkyssmuqcwaciya[] = "\x75\156\x73\x65\x65\x6e"; } $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ikgwqyuyckaewsow = $qqomumygoacsmsie->asewymkskoaoiokm(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $aaqqkgyougeiueyq) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\55{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aaqqkgyougeiueyq, $igqsaukqcqscimok)}"; } } if ($egkyssmuqcwaciya) { $wwgucssaecqekuek["\x63\154\141\x73\x73"] = $egkyssmuqcwaciya; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\164\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\74\57\164\x72\76"; } } protected function get_views() { $yyowoaoeweomgqey = []; if (!$this->qaccsiwkuqigokoe()) { $yyowoaoeweomgqey = parent::get_views(); $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $yyowoaoeweomgqey = $qqomumygoacsmsie->qquqcgcywuqosyim($yyowoaoeweomgqey, $this->_args[Constants::iaesmigkgskyygem] ?? null); } } return $yyowoaoeweomgqey; } public function get_columns() { return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->qwkcakacwsyqmyyq($this->screen); } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163", ''); } public function column_cb($igqsaukqcqscimok) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\144\151\164\137\x6f\x72\155\137\x69\164\145\x6d\163")) { $this->iuygowkemiiwqmiw("\x63\141\x6c\154\x62\x61\x63\x6b", [Constants::ciyoccqkiamemcmm => $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\x53\145\x6c\145\143\164\x20\x49\164\145\x6d\x20\x23\45\x64", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\x23\70\x32\62\x30\x3b\111\164\x65\x6d\40\x23\x25\x64\x26\x23\70\62\x32\61\x3b\x20\151\x73\x20\154\157\143\153\x65\144", PR__CMN__FOUNDATION)], ["\x63\x6c\141\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if (!$this->qaccsiwkuqigokoe()) { $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::ecwwqsqmiiqocoyw, $this->umaeoegyykkkqmia()); } } return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { $wkkweuacukumqmya = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if ($ywmkwiwkosakssii = $aaqqkgyougeiueyq->usyiuqmiaiosccca()) { if (is_bool($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [$aaqqkgyougeiueyq->iooowgsqoyqseyuu(), false, $aaqqkgyougeiueyq->qcgakseyaikigqco(), sprintf(__("\x54\x61\x62\154\x65\40\117\162\x64\145\x72\40\142\171\x20\x25\x73", PR__CMN__FOUNDATION), $aaqqkgyougeiueyq->qcgakseyaikigqco()), Constants::eeccqomoaqsawouy]; } if (is_array($ywmkwiwkosakssii)) { $wkkweuacukumqmya[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $ywmkwiwkosakssii; } } } return $wkkweuacukumqmya; } protected function get_table_classes() : array { $cmkqisoeyioisqaw = ["\167\x69\x64\145\146\x61\164", "\163\164\x72\x69\160\x65\144", $this->mgogaykgkoogasim()->cueaickeeoiwayou()]; $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $mmyuuewgwesgymca = $qqomumygoacsmsie->imkyoqyocosuqasu(Constants::kmkiaoimmqayiegg, []); if (!empty($mmyuuewgwesgymca)) { $cmkqisoeyioisqaw = $mmyuuewgwesgymca; } } return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\163"]) || $this->has_items())) { $euueacigmgoqkimu .= "\55\x73\x65\x61\162\143\x68\x2d\151\156\x70\165\x74"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie)) { $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\160\x75\x74", [Constants::squoamkioomemiyi => "\x68\x69\144\144\145\x6e", Constants::NAME => "\157\x72\144\145\162\142\141\171", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); } if ($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq)) { $omwieegygisoswgw->awwqwouuoioauoaw("\151\156\160\165\164", [Constants::squoamkioomemiyi => "\x68\151\x64\144\x65\x6e", Constants::NAME => "\x6f\162\x64\x65\162", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); } $this->iuygowkemiiwqmiw("\x73\145\x61\x72\x63\150\x5f\x62\x6f\x78", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\x73"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\142\x75\164\x74\x6f\156", false, false, ["\x49\x44" => "\163\145\141\x72\x63\150\55\163\165\142\155\x69\x74"])], ["\143\154\141\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::meisqwykgaymauka, $aokagokqyuysuksm, $igqsaukqcqscimok, $meywaqqsugaoeyys); if ($ccowyogiqwikkkie) { $aqykuigiuwmmcieu .= implode('', $ccowyogiqwikkkie); } } } else { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, $column_name); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($column_name); if ($aaqqkgyougeiueyq) { if (empty($eqgoocgaqwqcimie) && $aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->iekyeyicoyyawomk()->geyekyouismwgauc($aaqqkgyougeiueyq->iooowgsqoyqseyuu(), $igqsaukqcqscimok, $aaqqkgyougeiueyq->ggmimykuacwcogaq()->kumuygiiqswoyasy()); } $aqykuigiuwmmcieu = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $igqsaukqcqscimok, $meywaqqsugaoeyys); if ($aaqqkgyougeiueyq instanceof Enum) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); } } $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("\x6f\x72\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x6d\x61\x6e\141\147\145\x5f\x63\165\x73\x74\157\155\x5f\143\157\154\x75\155\156", $aqykuigiuwmmcieu, $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; if ($aqykuigiuwmmcieu && $column_name === (array_keys($this->get_columns())[$awyomkauyyymugeq] ?? '') && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\141")) { $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $aokagokqyuysuksm); if (!$iwywmkygwewiamwm) { $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm); } if ($iwywmkygwewiamwm) { $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\x6c\141\x73\x73" => "\x72\x6f\167\55\164\151\x74\x6c\145", "\x61\162\151\141\x2d\154\141\142\x65\154" => sprintf(__("\x45\144\151\x74\40\x22\x25\x73\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\165\164\x74\157\x6e", ["\164\171\160\x65" => "\x62\165\x74\x74\x6f\156", "\x63\154\x61\163\163" => "\164\x6f\147\147\154\145\55\x72\157\x77"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\123\150\157\167\40\x6d\x6f\x72\145\x20\x64\145\x74\141\151\x6c\x73", PR__CMN__FOUNDATION), ["\143\x6c\x61\x73\x73" => "\163\x63\x72\x65\x65\156\x2d\x72\x65\141\144\x65\162\x2d\164\x65\x78\164"])); } } } } return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::ykyeawseyyawawyy, false); if (!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) { $eqgoocgaqwqcimie = Constants::ALL; } return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function prepare_items($ywmkwiwkosakssii = []) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($this->asuigsqoowmekwok()->get_option(Constants::ausqeuugegoygouq, Constants::ugqacsomqcgmoqug))]); if (isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; } $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); } else { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa(); } } if ($siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\x6d\137\x76\151\x65\x77\x5f\x69\x6e\144\x65\x78\137\142\x75\x69\x6c\144\145\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\162\155\x5f\x76\x69\145\167\x5f\151\156\x64\x65\x78\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x62\165\151\154\x64\145\x72", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akmkameqsskoeaoi = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::iieuswywqkawosew, $siykeiywomwwuoiw, $this); if ($akmkameqsskoeaoi) { $siykeiywomwwuoiw = $akmkameqsskoeaoi; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->weyqgwsqeueuwgsm($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if ($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false)) { $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); } $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\x74\157\x74\141\154\x5f\x69\164\x65\155\x73" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::uiiqiokqwmccomiu], "\x74\157\x74\x61\154\137\x70\x61\147\x65\x73" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::yusuiaeueqwieqqq]]); } else { $this->items = []; } } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if (!$this->qaccsiwkuqigokoe()) { $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if ($ccowyogiqwikkkie) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\144\x69\166", ["\x63\154\x61\163\x73" => "\160\x72\55\x70\x72\x69\155\x61\x72\171\55\141\143\x74\151\157\x6e\x73"], true, $ccowyogiqwikkkie); } parent::extra_tablenav($wcagyqamwoksawik); } } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if ($micmwmywmkguiyyk === $column_name) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($moqewomugocaueis = $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok)) { $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($qqomumygoacsmsie instanceof Index) { $ccowyogiqwikkkie = $this->row_actions($qqomumygoacsmsie->igmckyamugkymqku(Constants::mqkiiimeocmcyecq, $moqewomugocaueis, $igqsaukqcqscimok, $meywaqqsugaoeyys)); } } } return $ccowyogiqwikkkie; } }
