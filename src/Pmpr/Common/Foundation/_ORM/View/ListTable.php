<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\View; use Pmpr\Common\Foundation\_ORM\Database\Repository; use Pmpr\Common\Foundation\_ORM\Database\Schema\DateTime; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; class ListTable extends WPListTable { use ModelTrait; protected ?Repository $query = null; protected bool $showMinimum = false; public function __construct(Model $meywaqqsugaoeyys, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->query = $ywmkwiwkosakssii[Constants::meieskyuuegwwcsy] ?? null; $this->showMinimum = $scsaeueqgyymsyei; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $meywaqqsugaoeyys->kooiucqkggeagccu()); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto saauykgakaeiyoua; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); goto qwemkcoaseywkuuc; saauykgakaeiyoua: if (!is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto owuuuiekkaeoeacq; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); owuuuiekkaeoeacq: qwemkcoaseywkuuc: if (!$gcgsqcoqciockquc) { goto mqimkwickkgqqeoi; } $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $meywaqqsugaoeyys->cueaickeeoiwayou() . "\137\x70\x65\162\137\160\x61\147\x65"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; mqimkwickkgqqeoi: parent::__construct($ywmkwiwkosakssii); } protected function display_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto kwyimqumkuuyaiku; } parent::display_tablenav($wcagyqamwoksawik); kwyimqumkuuyaiku: } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } function no_items() { echo $this->mgogaykgkoogasim()->euwycwigoeawgckq("\x6e\157\164\137\x66\x6f\x75\x6e\x64"); } public function single_row($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto isewysikysqewkis; } $wwgucssaecqekuek = ["\144\x61\164\x61\55\x69\144" => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->aakmagwggmkoiiyu(), $meywaqqsugaoeyys->cueaickeeoiwayou()]; if ($meywaqqsugaoeyys->waecsyqmwascmqoa($igqsaukqcqscimok, Constants::sugcoawcimusgaga, false)) { goto gkqiqaqecmoogmaa; } $egkyssmuqcwaciya[] = "\x75\156\163\145\145\x6e"; gkqiqaqecmoogmaa: $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$qqomumygoacsmsie instanceof Index) { goto gsymkkskwsgggoic; } $ikgwqyuyckaewsow = $qqomumygoacsmsie->asewymkskoaoiokm(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\x2d{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aiowsaccomcoikus, $igqsaukqcqscimok)}"; ceiuqsiqgiuiekem: } mceucsaeouuwyumm: gsymkkskwsgggoic: if (!$egkyssmuqcwaciya) { goto ugykmcouiwiscoqu; } $wwgucssaecqekuek["\x63\x6c\x61\163\163"] = $egkyssmuqcwaciya; ugykmcouiwiscoqu: $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\164\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\x3c\57\x74\162\x3e"; isewysikysqewkis: } protected function get_views() { $yyowoaoeweomgqey = []; if ($this->qaccsiwkuqigokoe()) { goto igmmqwyawcuuckkq; } $yyowoaoeweomgqey = parent::get_views(); $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$qqomumygoacsmsie instanceof Index) { goto wiwoiyoakywqyaiy; } $yyowoaoeweomgqey = $qqomumygoacsmsie->qquqcgcywuqosyim($yyowoaoeweomgqey); wiwoiyoakywqyaiy: igmmqwyawcuuckkq: return $yyowoaoeweomgqey; } public function get_columns() { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$this->get_bulk_actions()) { goto eouwacqiommmeaqc; } $wkkweuacukumqmya["\143\x62"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\151\x6e\160\x75\164", [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); eouwacqiommmeaqc: $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!($qqomumygoacsmsie instanceof Index && $qqomumygoacsmsie->mekqsagqkuiocckw(Constants::meisqwykgaymauka))) { goto sqwuqegeiisoiiuq; } $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __("\x41\x63\x74\151\x6f\156\x73", PR__CMN__FOUNDATION); sqwuqegeiisoiiuq: return $wkkweuacukumqmya; } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73", ''); } public function column_cb($igqsaukqcqscimok) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\145\144\x69\164\x5f\151\164\x65\155\163")) { goto uscokkmquayiukag; } $this->iuygowkemiiwqmiw("\143\141\154\x6c\142\x61\x63\x6b", [Constants::ciyoccqkiamemcmm => $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\x53\x65\154\x65\143\x74\x20\111\164\x65\155\40\43\45\144", PR__CMN__FOUNDATION), Constants::TEXT => __("\46\x23\x38\62\62\60\x3b\x49\164\x65\x6d\x20\43\x25\x64\x26\x23\x38\62\62\x31\73\40\151\x73\x20\154\157\143\x6b\145\x64", PR__CMN__FOUNDATION)], ["\x63\154\141\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); uscokkmquayiukag: } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if ($this->qaccsiwkuqigokoe()) { goto ugogoekeckgcmuaw; } $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$qqomumygoacsmsie instanceof Index) { goto ykqsuiyyosyeyscc; } $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::ecwwqsqmiiqocoyw, $this->umaeoegyykkkqmia()); ykqsuiyyosyeyscc: ugogoekeckgcmuaw: return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { $wkkweuacukumqmya = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($ywmkwiwkosakssii = $aaqqkgyougeiueyq->usyiuqmiaiosccca())) { goto icumkkykaoqycqqu; } if (!is_bool($ywmkwiwkosakssii)) { goto mcqucouuiuoagqwc; } $ywmkwiwkosakssii = [$aaqqkgyougeiueyq->getID, false, $aaqqkgyougeiueyq->qcgakseyaikigqco(), sprintf(__("\x54\x61\142\154\x65\40\x4f\162\144\x65\x72\40\x62\x79\x20\45\x73", PR__CMN__FOUNDATION), $aaqqkgyougeiueyq->qcgakseyaikigqco()), Constants::eeccqomoaqsawouy]; mcqucouuiuoagqwc: if (!is_array($ywmkwiwkosakssii)) { goto eweaaismksecwagy; } $wkkweuacukumqmya[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $ywmkwiwkosakssii; eweaaismksecwagy: icumkkykaoqycqqu: syusgosewwkoagoq: } egesuwkqkmaigaoe: return $wkkweuacukumqmya; } protected function get_table_classes() : array { $cmkqisoeyioisqaw = ["\167\151\144\x65\146\x61\x74", "\x73\164\162\151\x70\x65\144", $this->mgogaykgkoogasim()->cueaickeeoiwayou()]; $qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$qqomumygoacsmsie instanceof Index) { goto owgsameoayaogsma; } $mmyuuewgwesgymca = $qqomumygoacsmsie->imkyoqyocosuqasu(Constants::kmkiaoimmqayiegg, []); if (empty($mmyuuewgwesgymca)) { goto oeamoqweiueaueay; } $cmkqisoeyioisqaw = $mmyuuewgwesgymca; oeamoqweiueaueay: owgsameoayaogsma: return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!(!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\163"]) || $this->has_items()))) { goto gqimwsyemoewagcy; } $euueacigmgoqkimu .= "\55\163\x65\141\x72\143\150\x2d\151\156\x70\x75\164"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie))) { goto kyiwsiakwgiwouyi; } $omwieegygisoswgw->awwqwouuoioauoaw("\151\156\x70\x75\x74", [Constants::squoamkioomemiyi => "\150\151\144\144\145\156", Constants::NAME => "\x6f\x72\x64\145\162\x62\x61\x79", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); kyiwsiakwgiwouyi: if (!($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq))) { goto awgmegueeqeyqamu; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\x6e\x70\x75\x74", [Constants::squoamkioomemiyi => "\x68\x69\x64\x64\x65\x6e", Constants::NAME => "\157\162\x64\x65\162", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); awgmegueeqeyqamu: $this->iuygowkemiiwqmiw("\x73\x65\x61\x72\143\150\137\x62\x6f\170", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\x73"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\x62\165\164\x74\x6f\156", false, false, ["\x49\x44" => "\x73\x65\x61\x72\143\x68\55\163\x75\142\x6d\x69\164"])], ["\143\x6c\x61\x73\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); gqimwsyemoewagcy: } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto kyiuewcikkqagwwg; } $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { goto eqiiaokcgakicaye; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name, ''); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($column_name); $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\x6d\141\x6e\141\x67\145\137\x63\165\x73\164\157\x6d\137\143\157\x6c\165\155\156", '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); if ($aqykuigiuwmmcieu) { goto oeusomaaeekakake; } if ($aaqqkgyougeiueyq instanceof DateTime) { goto aeiemwacaiygemmg; } $aqykuigiuwmmcieu = $eqgoocgaqwqcimie; goto yyqygaokeccgugos; aeiemwacaiygemmg: $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name); yyqygaokeccgugos: oeusomaaeekakake: if (!$aaqqkgyougeiueyq instanceof Enum) { goto kwuckkyqaygwgcuy; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); kwuckkyqaygwgcuy: $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; $wkkweuacukumqmya = $this->get_columns(); $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya); if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) { goto ikcwmsgocyuqiumc; } if (!($aqykuigiuwmmcieu && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\x61"))) { goto cyosacayacumuaks; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $aokagokqyuysuksm); if ($iwywmkygwewiamwm) { goto giuccakymqymawgk; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm); giuccakymqymawgk: if (!$iwywmkygwewiamwm) { goto sicgyiyiocyygkoc; } $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\x63\x6c\x61\163\163" => "\x72\157\167\x2d\164\151\x74\x6c\145", "\x61\162\x69\x61\55\154\x61\142\145\154" => sprintf(__("\105\144\x69\x74\40\42\45\163\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\165\x74\164\157\156", ["\x74\x79\160\x65" => "\142\x75\164\164\x6f\156", "\143\x6c\141\x73\x73" => "\164\157\147\147\154\x65\x2d\162\x6f\167"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x53\150\157\x77\40\155\x6f\162\145\x20\144\145\164\141\151\x6c\x73", PR__CMN__FOUNDATION), ["\143\x6c\141\163\x73" => "\x73\143\162\145\145\x6e\x2d\x72\x65\x61\144\x65\x72\x2d\164\x65\x78\164"])); sicgyiyiocyygkoc: cyosacayacumuaks: ikcwmsgocyuqiumc: goto gcucsowqoeiwmyyq; eqiiaokcgakicaye: $ccowyogiqwikkkie = []; $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$qqomumygoacsmsie instanceof Index) { goto aoaqwygkaagiuuws; } $ccowyogiqwikkkie = $qqomumygoacsmsie->igmckyamugkymqku(Constants::meisqwykgaymauka, $aokagokqyuysuksm, $igqsaukqcqscimok, $meywaqqsugaoeyys); aoaqwygkaagiuuws: foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { goto iuwkiyimqmgguose; } if (!is_string($aiamqeawckcsuaou)) { goto ayceeyuocgowqwsa; } $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; ayceeyuocgowqwsa: goto yggseoaommssscwo; iuwkiyimqmgguose: $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if (!$cmwygeyygwqaemaq) { goto sksgcusuyqcwqswe; } $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\x61\163\x2d\151\x63\x6f\156")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if (!$aegqqyquausewoqe) { goto qkyciyiwkmgkmquk; } $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); qkyciyiwkmgkmquk: $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); sksgcusuyqcwqswe: yggseoaommssscwo: maaisuqwkymeguys: } esagiiawomyacuiw: gcucsowqoeiwmyyq: kyiuewcikkqagwwg: return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Index::ykyeawseyyawawyy, false); if (!(!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo)) { goto aumowowgewgqmwci; } $eqgoocgaqwqcimie = Constants::ALL; aumowowgewgqmwci: return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function prepare_items($ywmkwiwkosakssii = []) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($this->asuigsqoowmekwok()->get_option(Constants::ausqeuugegoygouq, Constants::ugqacsomqcgmoqug))]); if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto oasggeyceiyieuuo; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; oasggeyceiyieuuo: $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { goto wwcqoeuwskquakwy; } if ($siykeiywomwwuoiw) { goto omuauimgkygcecsc; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa(); omuauimgkygcecsc: goto quamuugoocyyceec; wwcqoeuwskquakwy: $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); quamuugoocyyceec: if ($siykeiywomwwuoiw) { goto mugscgugcogcasue; } $this->items = []; goto qyyyycwaookqaoke; mugscgugcogcasue: $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\155\x5f\x76\x69\x65\167\x5f\151\x6e\x64\145\x78\x5f\x62\x75\151\154\144\145\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\x72\x6d\137\166\x69\145\x77\x5f\x69\x6e\x64\145\x78\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\142\165\151\154\144\145\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akmkameqsskoeaoi = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::iieuswywqkawosew, $siykeiywomwwuoiw, $this); if (!$akmkameqsskoeaoi) { goto qcssigmcayuyweiy; } $siykeiywomwwuoiw = $akmkameqsskoeaoi; qcssigmcayuyweiy: $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->ewkswoqykwsuckok($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if (!($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false))) { goto iymaiwqimisgacmk; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->iekyeyicoyyawomk()->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); iymaiwqimisgacmk: $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\x74\157\x74\141\x6c\137\x69\164\145\x6d\x73" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::uiiqiokqwmccomiu], "\x74\157\164\141\154\x5f\160\x61\x67\145\x73" => $gmwiogsuisuoiwqu[Constants::ycuusiweasqygwiw][Constants::yusuiaeueqwieqqq]]); qyyyycwaookqaoke: } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto ygcgoaokauigwuus; } $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if (!$ccowyogiqwikkkie) { goto ssywsaaqqaucesau; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x64\x69\x76", ["\x63\154\x61\x73\163" => "\x70\162\x2d\x70\162\151\x6d\x61\162\171\55\141\x63\164\x69\157\x6e\163"], true, $ccowyogiqwikkkie); ssywsaaqqaucesau: parent::extra_tablenav($wcagyqamwoksawik); ygcgoaokauigwuus: } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto ousmyagwsiooumos; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($moqewomugocaueis = $meywaqqsugaoeyys->mwyqswsaeeewsosm($igqsaukqcqscimok))) { goto auumaoycmsmsgigs; } $qqomumygoacsmsie = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$qqomumygoacsmsie instanceof Index) { goto ysiqakyaiooyscwy; } $ccowyogiqwikkkie = $this->row_actions($qqomumygoacsmsie->igmckyamugkymqku(Constants::mqkiiimeocmcyecq, $moqewomugocaueis, $igqsaukqcqscimok, $meywaqqsugaoeyys)); ysiqakyaiooyscwy: auumaoycmsmsgigs: ousmyagwsiooumos: return $ccowyogiqwikkkie; } }
