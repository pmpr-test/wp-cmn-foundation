<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecaf054ce9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPSetting; use WP_Post; use WP_Term; class Action extends Callback { public function mameiwsayuyquoeq() { $this->ewcsyqaaigkicgse('add_twig_functions', $this->yyyewgugioamwckw()); $this->aqiicausqkomqkqy(); $this->render(); $this->ugugagoguiycqeys(); $this->mseykiqqcmyesccu(); $this->eeoeyakoiycwiuoa(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('twig_render_filename', [$this, 'ooqekmgsqomsakio']); } public function aqiicausqkomqkqy() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('extract', function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) { foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } }, ['needs_context' => true]); $this->yyyewgugioamwckw()->kmmegqceukkkawme('basename', function ($mkomwsiykqigmqca) { return basename($mkomwsiykqigmqca); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('call_user_func', function ($akemggqscawwikim, ...$qookweymeqawmcwo) { return $akemggqscawwikim(...$qookweymeqawmcwo); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('uniqid', function () { return uniqid('', true); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('echo', function ($sociqikgoyemqaac) { echo $sociqikgoyemqaac; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_number', 'is_numeric'); } public function sqmuqsscmimwqoki() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_get_attachment_url', function ($qssimkkaqkwceqqs) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($qssimkkaqkwceqqs); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_meta', function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_get_attachment_image_url', function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') { if ($oiegiwogmwmawkeo) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo); } else { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($qssimkkaqkwceqqs); } return $eeamcawaiqocomwy; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_type_object', function ($post) { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post)); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_type', function ($post) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('has_post_thumbnail', function ($post) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oaqimsyggeyyceig($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('has_excerpt', function ($post) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->seewsasmyoyciiee($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_permalink', function ($post, $cwwowqyuwccuykom = false) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post, $cwwowqyuwccuykom); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_pagination_limit', function () { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('have_posts', function () { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_search_result', function () { return $this->caokeucsksukesyo()->owicscwgeuqcqaig()->ysqksgcoyccgsuam(); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_post', 'the_post'); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_content', function ($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_content', function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) { the_content($yauwwygqkmsmamik, $ecckicuukiesgaig); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_custom_post_type_single', function () { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc($this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas()); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_image', function ($post = null) { return $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_video', function ($post = null) { return $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mccouuwycwemasea($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_mime_type', function ($aiooqyausygaasqm = null) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_post', function ($post = null, $cwwowqyuwccuykom = false) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($post, Constants::ckmqoekmugkggeym, $cwwowqyuwccuykom) instanceof WP_Post; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_term', function ($iwewcwusemqaiggk = null) { return $this->caokeucsksukesyo()->kckogqkiycqeumoa()->is($iwewcwusemqaiggk); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_attachment', function ($post = null) { return $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->aauyuieeeaakygki($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_page', function ($suaemuyiacqyugsm = null) { return is_page($suaemuyiacqyugsm); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_status', function ($post = null) { return get_post_status($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_category_link', 'get_category_link'); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post', function ($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_date', function ($saqmwwmqiwmkiwaa = '', $post = null, bool $egkeamycaysqsoma = true) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, $egkeamycaysqsoma); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_title', function ($post = 0) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_title', 'the_title'); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_excerpt', function ($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->masoymaamekuykso($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_edit_link', function ($mksyucucyswaukig) { $iwywmkygwewiamwm = '#'; if ($mksyucucyswaukig instanceof WP_Post) { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->yyykkcyiksewsoqy($mksyucucyswaukig); } else { if ($mksyucucyswaukig instanceof WP_Term) { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->yyykkcyiksewsoqy($mksyucucyswaukig); } } return $iwywmkygwewiamwm; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_title', function ($mksyucucyswaukig) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($mksyucucyswaukig); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_id', function ($mksyucucyswaukig) { $aokagokqyuysuksm = ''; if ($mksyucucyswaukig instanceof WP_Post) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($mksyucucyswaukig); } else { if ($mksyucucyswaukig instanceof WP_Term) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($mksyucucyswaukig); } else { if (is_numeric($mksyucucyswaukig)) { $aokagokqyuysuksm = $mksyucucyswaukig; } } } return $aokagokqyuysuksm; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_post_thumbnail', function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_post_thumbnail_url', function ($post, $oiegiwogmwmawkeo = 'post-thumbnail') { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->uamasysiccecccmw($post, $oiegiwogmwmawkeo); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_post_thumbnail_caption', function ($post) { return $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->mykymcoowoyseiwc($post); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('post_class', function ($egkyssmuqcwaciya, $post = null) { post_class($egkyssmuqcwaciya, $post); }); } public function ugugagoguiycqeys() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_template', [$this, 'yiyqecawioyosoaw']); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_cookie', function ($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw($uusmaiomayssaecw, $ggauoeuaesiymgee); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_cover_template', function ($qqscaoyqikuyeoaw, $cwugquwaukuuosaw = '', $yucgcsieomwqgwws = '.html.twig') { return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kiouesoscyimiwow($qqscaoyqikuyeoaw, $cwugquwaukuuosaw, $yucgcsieomwqgwws); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('can_show_on_grid', function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) { $aqykuigiuwmmcieu = ''; if (is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii) { $uasyiiacieyekiia = ['xs', 'sm', 'md', 'lg', 'xl']; foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) { $uuyoeicyoayimaoa = $ywmkwiwkosakssii[$ycuyiqagsmgikago] ?? false; if ($ycuyiqagsmgikago === 'xs') { $ycuyiqagsmgikago = ''; } else { $ycuyiqagsmgikago .= '-'; } if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) { $aqykuigiuwmmcieu .= " d-{$ycuyiqagsmgikago}none"; } else { $aqykuigiuwmmcieu .= " d-{$ycuyiqagsmgikago}block"; } } } return rtrim($aqykuigiuwmmcieu); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('unset', function ($uomewyckeuqoqocu, $uusmaiomayssaecw) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); return $uomewyckeuqoqocu; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('create', function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_if_has_content', function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { if ($ewgwqamkygiqaawc) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); } }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('can_lazy_load', function () { return $this->sscegwueamckwmcy('can_lazy_load', true); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('card_bottom_margin', function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) { return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('margin_bottom', function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) { return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('prepare_columns', function ($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec = 6) { return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->ewgmueueeycoikso([Constants::mseyscuumygemsis => $mogykyiukkoqceec, Constants::mcwismemiumceoos => $qgqgaykggoemycsk, Constants::soquiwyuimckgiow => $wkkweuacukumqmya]); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_setting', function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return WPSetting::symcgieuakksimmu()->eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_url', function ($eeamcawaiqocomwy) { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eeamcawaiqocomwy); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_icon', function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc]); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_icon', function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc]); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_alert', function (string $ewgwqamkygiqaawc, string $sqeykgyoooqysmca = Constants::ecioqysekgaasegg, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $ywmkwiwkosakssii[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('frontend_spinner', function ($ywmkwiwkosakssii = []) { echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_frontend_spinner', function ($ywmkwiwkosakssii = []) { echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_frontend_modal', function ($ywmkwiwkosakssii = []) { echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->icqkogwskuwscskk($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_frontend_alert', function ($ywmkwiwkosakssii = []) { echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_backend_spinner', function ($ywmkwiwkosakssii = []) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_backend_card', function ($ywmkwiwkosakssii = []) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->yammmmogeegasyso($ywmkwiwkosakssii); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_amp', function () { return $this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu(); }); } public function render() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_user_data', [$this, 'oeaigciskewsiiec']); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_author_data', [$this, 'oeaigciskewsiiec']); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_post_data', function ($aiowsaccomcoikus = Constants::qescuiwgsyuikume, $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) { $cwwowqyuwccuykom = false; if ($ccamueccusigaaio) { $cwwowqyuwccuykom = true; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($ccamueccusigaaio, Constants::ckmqoekmugkggeym, $cwwowqyuwccuykom); if ($post) { $ccamueccusigaaio = $post; } $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou('render_post_data_args', $ywmkwiwkosakssii, $aiowsaccomcoikus, $ccamueccusigaaio); switch ($aiowsaccomcoikus) { case Constants::squoamkioomemiyi: case Constants::uouymeyqasaeckso: $icwicymcioeyeyek = $seumokooiykcomco->gueasuouwqysmomu($post, true); break; case 'info': case 'data': $icwicymcioeyeyek = $seumokooiykcomco->auosyisuakguyimw($post, $ywmkwiwkosakssii); break; case Constants::coiowssmsymuaiis: case Constants::egwoacukmsioosum: case Constants::mkousmkiawwousws: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $oiegiwogmwmawkeo = $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq] ?? Constants::egwoacukmsioosum; $wwgucssaecqekuek = $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym] ?? []; if ($eaeiswmwiqewicoc->aauyuieeeaakygki($ccamueccusigaaio)) { $icwicymcioeyeyek = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek); } else { $icwicymcioeyeyek = $wgkqagumoowawogg->smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek); } break; case 'image_url': case 'image_src': $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $oiegiwogmwmawkeo = $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq] ?? Constants::egwoacukmsioosum; if ($eaeiswmwiqewicoc->aauyuieeeaakygki($ccamueccusigaaio)) { $icwicymcioeyeyek = $eaeiswmwiqewicoc->iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo); } else { $icwicymcioeyeyek = $wgkqagumoowawogg->uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo); } break; case Constants::NAME: case Constants::qescuiwgsyuikume: $icwicymcioeyeyek = $seumokooiykcomco->qcgakseyaikigqco($ccamueccusigaaio); break; case Constants::kumuoysauoagaiiy: case Constants::kyakumqgcsaskweq: case Constants::cwewykcqimckqycw: $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); switch ($aiowsaccomcoikus) { case Constants::cwewykcqimckqycw: $ggauoeuaesiymgee = $uuwwyaeymswgsgsi->yoaaussmackoisuw(); break; case Constants::kyakumqgcsaskweq: $ggauoeuaesiymgee = $uuwwyaeymswgsgsi->isiuiegyqiomccsw(); break; case Constants::kumuoysauoagaiiy: default: $ggauoeuaesiymgee = $uuwwyaeymswgsgsi->uyomwmskouyyqyyq(); break; } $somiuasmmwkuceag = $ywmkwiwkosakssii[Constants::kuokyuesqeoaeeai] ?? 'fa'; $saqmwwmqiwmkiwaa = $ywmkwiwkosakssii[Constants::yqemseykugmsyeqa] ?? $ggauoeuaesiymgee; $icwicymcioeyeyek = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($seumokooiykcomco->squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag); break; case Constants::auqoykcmsiauccao: case Constants::sauwwsocmukoaayu: $icwicymcioeyeyek = $seumokooiykcomco->ycqquoiyyuesegsy($ccamueccusigaaio); break; case Constants::TEXT: case Constants::ssmskyqgcmeiayco: $icwicymcioeyeyek = $seumokooiykcomco->souwykwwmyygqyqi($ccamueccusigaaio); break; case 'desc': case Constants::syooqwmkmsmgwcqw: case Constants::eqkeooqcsscoggia: $icwicymcioeyeyek = $seumokooiykcomco->masoymaamekuykso($ccamueccusigaaio, $ywmkwiwkosakssii['check'] ?? true); break; default: $icwicymcioeyeyek = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus, $ccamueccusigaaio); } if (is_string($icwicymcioeyeyek)) { $icwicymcioeyeyek = rawurldecode($icwicymcioeyeyek); } return $icwicymcioeyeyek; }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_term_data', function ($aiowsaccomcoikus = Constants::qescuiwgsyuikume, $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($iwewcwusemqaiggk = $aoskwucuugeuaeus->get($ccamueccusigaaio)) { $ccamueccusigaaio = $iwewcwusemqaiggk; } $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou('render_term_data_args', $ywmkwiwkosakssii, $aiowsaccomcoikus, $ccamueccusigaaio); switch ($aiowsaccomcoikus) { case Constants::mkousmkiawwousws: case Constants::egwoacukmsioosum: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq, Constants::egwoacukmsioosum); $wwgucssaecqekuek = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ysskgssgwuwmqwym, []); $icwicymcioeyeyek = $aoskwucuugeuaeus->smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek); break; case Constants::squoamkioomemiyi: case Constants::gmmygyiecgmggaam: $icwicymcioeyeyek = $aoskwucuugeuaeus->yyoeeseewqmmyaee($ccamueccusigaaio, Constants::ckmqoekmugkggeym); break; case Constants::NAME: case Constants::qescuiwgsyuikume: $icwicymcioeyeyek = $aoskwucuugeuaeus->qcgakseyaikigqco($ccamueccusigaaio); break; case Constants::auqoykcmsiauccao: case Constants::ogigqueukwysusii: case Constants::sauwwsocmukoaayu: $icwicymcioeyeyek = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($ccamueccusigaaio); break; case Constants::TEXT: case Constants::ssmskyqgcmeiayco: case Constants::eqkeooqcsscoggia: $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->meqceykmywmqgoym($ccamueccusigaaio); break; default: $icwicymcioeyeyek = $aoskwucuugeuaeus->igawqaomowicuayw($ccamueccusigaaio, $aiowsaccomcoikus); } if (is_string($icwicymcioeyeyek)) { $icwicymcioeyeyek = rawurldecode($icwicymcioeyeyek); } return $icwicymcioeyeyek; }); } public function mseykiqqcmyesccu() { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $this->yyyewgugioamwckw()->kmmegqceukkkawme('wc_is_account_page', [$cgceoyqmmwumqyqa, 'ckeyeaouokcgeqeq']); $this->yyyewgugioamwckw()->kmmegqceukkkawme('woo_price_discount', function ($product) { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->eccmmwqkaocgogms($product); }); $this->yyyewgugioamwckw()->kmmegqceukkkawme('wc_price', function ($aumscagymwyyicag, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii); }); } public function comment() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('comment_class', 'comment_class')->kmmegqceukkkawme('comments_open', 'comments_open')->kmmegqceukkkawme('get_comment_text', 'get_comment_text')->kmmegqceukkkawme('get_comment_link', 'get_comment_link')->kmmegqceukkkawme('get_comment_time', 'get_comment_time')->kmmegqceukkkawme('comment_id_fields', 'comment_id_fields')->kmmegqceukkkawme('edit_comment_link', 'edit_comment_link')->kmmegqceukkkawme('get_next_comments_link', 'get_next_comments_link')->kmmegqceukkkawme('get_comment_reply_link', 'get_comment_reply_link')->kmmegqceukkkawme('get_comment_author_link', 'get_comment_author_link')->kmmegqceukkkawme('get_comments_number_text', 'get_comments_number_text')->kmmegqceukkkawme('get_previous_comments_link', 'get_previous_comments_link')->kmmegqceukkkawme('get_comment_date', function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) { return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma); })->kmmegqceukkkawme('get_comment', function ($aokagokqyuysuksm = null) { return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->get($aokagokqyuysuksm); })->kmmegqceukkkawme('get_comment_author', function ($comment = 0) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); }); } public function mkukcsqosmkeeask() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_logout_url', 'wp_logout_url')->kmmegqceukkkawme('current_user_can', 'current_user_can')->kmmegqceukkkawme('admin_url', function ($mkomwsiykqigmqca, $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->oiucukewkckkwiqc($mkomwsiykqigmqca, $mgkceomocowocqyo, $aaceqemaqqeckueq); })->kmmegqceukkkawme('wp_nonce_field', function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) { return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewgquygaowykwacc($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false); })->kmmegqceukkkawme('wp_referer_field', function () { return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wmakaaiqyiaemasw(); })->kmmegqceukkkawme('sanitize_title', function ($cmwygeyygwqaemaq) { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->meqocwsecsywiiqs($cmwygeyygwqaemaq); })->kmmegqceukkkawme('is_user_logged_in', function () { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); }); } public function eeoeyakoiycwiuoa() { $this->yyyewgugioamwckw()->kmmegqceukkkawme('__', '__')->kmmegqceukkkawme('wpautop', 'wpautop')->kmmegqceukkkawme('wp_head', 'wp_head')->kmmegqceukkkawme('editor', function ($ewgwqamkygiqaawc, $sccmgseqoqakqusw, $qeqooyuoiasweuck = []) { wp_editor((string) $ewgwqamkygiqaawc, $sccmgseqoqakqusw, $qeqooyuoiasweuck); })->kmmegqceukkkawme('is_admin', 'is_admin')->kmmegqceukkkawme('wp_footer', 'wp_footer')->kmmegqceukkkawme('bloginfo', 'get_bloginfo')->kmmegqceukkkawme('get_header', 'get_header')->kmmegqceukkkawme('get_footer', 'get_footer')->kmmegqceukkkawme('body_class', 'body_class')->kmmegqceukkkawme('wp_nav_menu', 'wp_nav_menu')->kmmegqceukkkawme('wptexturize', 'wptexturize')->kmmegqceukkkawme('wp_is_mobile', 'wp_is_mobile')->kmmegqceukkkawme('add_thickbox', 'add_thickbox')->kmmegqceukkkawme('wp_body_open', 'wp_body_open')->kmmegqceukkkawme('wp_kses_post', 'wp_kses_post')->kmmegqceukkkawme('has_nav_menu', 'has_nav_menu')->kmmegqceukkkawme('submit_button', 'submit_button')->kmmegqceukkkawme('get_search_form', 'get_search_form')->kmmegqceukkkawme('get_search_query', 'get_search_query')->kmmegqceukkkawme('comments_template', 'comments_template')->kmmegqceukkkawme('_admin_search_query', '_admin_search_query')->kmmegqceukkkawme('language_attributes', 'language_attributes')->kmmegqceukkkawme('do_settings_sections', 'do_settings_sections')->kmmegqceukkkawme('wp_dropdown_categories', 'wp_dropdown_categories')->kmmegqceukkkawme('wp_print_footer_scripts', 'wp_print_footer_scripts')->kmmegqceukkkawme('wp_print_styles', function () { wp_print_styles(); })->kmmegqceukkkawme('is_mobile', function () { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm(); })->kmmegqceukkkawme('is_tablet', function () { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->qsqicssyqieuqooy(); })->kmmegqceukkkawme('is_computer', function () { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->oyekugiwykcqismq(); })->kmmegqceukkkawme('is_desktop', function () { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->swgywqyswmcgguwi(); })->kmmegqceukkkawme('do_meta_boxes', function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) { do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig); })->kmmegqceukkkawme('dynamic_sidebar', function ($momcykaoccoymeig) { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->esuiacmywcmmsmao($momcykaoccoymeig); })->kmmegqceukkkawme('is_active_sidebar', function ($momcykaoccoymeig) { return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ooksqgokuwcmoqcu($momcykaoccoymeig); })->kmmegqceukkkawme('is_front_page', function () { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw(); })->kmmegqceukkkawme('is_archive', function () { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy(); })->kmmegqceukkkawme('the_widget', function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); })->kmmegqceukkkawme('is_paged', function () { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw(); })->kmmegqceukkkawme('is_tax', function ($kesssewsiegssiya = null) { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy($kesssewsiegssiya); })->kmmegqceukkkawme('get_post_type_archive_link', function ($useksmwkuswkwcqg) { return $this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($useksmwkuswkwcqg); })->kmmegqceukkkawme('home_url', function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); })->kmmegqceukkkawme('selected', function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) { if (is_array($yeacayasgueouoqc)) { if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc, true)) { $yeacayasgueouoqc = $ymmmmaiuoocagigk; } else { $yeacayasgueouoqc = null; } } return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false); })->kmmegqceukkkawme('checked', function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) { if (is_array($yeacayasgueouoqc)) { if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc, true)) { $yeacayasgueouoqc = $gmeoaiyogiokeeau; } else { $yeacayasgueouoqc = null; } } return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false); })->kmmegqceukkkawme('apply_filters', function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) { return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo); })->kmmegqceukkkawme('pmpr_apply_filters', function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw($scwiymciagumsuiw), ...$qookweymeqawmcwo); })->kmmegqceukkkawme('get_format_from_mime_type', function ($qiwqkoiamayyqase) { $sqeykgyoooqysmca = ''; if (str_contains($qiwqkoiamayyqase, 'image')) { $sqeykgyoooqysmca = 'image'; } else { if (str_contains($qiwqkoiamayyqase, 'pdf')) { $sqeykgyoooqysmca = 'pdf'; } } return $sqeykgyoooqysmca; })->kmmegqceukkkawme('wp_get_attachment_image', function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, $wisgiwskwawciiee = []) { return $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee); })->kmmegqceukkkawme('get_avatar', function ($sqwmoeogqwooeukc, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') { return $this->caokeucsksukesyo()->issssuygyewuaswa()->ogcwgigqwycqswms($sqwmoeogqwooeukc, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee); })->kmmegqceukkkawme('the_author_meta', function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) { return $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw($aiowsaccomcoikus, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)); })->kmmegqceukkkawme('get_author_posts_url', function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') { return $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum); })->kmmegqceukkkawme('get_post_term', function ($post = null, $kesssewsiegssiya = '', $ywmkwiwkosakssii = []) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($post, $kesssewsiegssiya, $ywmkwiwkosakssii); })->kmmegqceukkkawme('get_post_terms', function ($post = null, $kesssewsiegssiya = '', $ywmkwiwkosakssii = []) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($post, $kesssewsiegssiya, $ywmkwiwkosakssii); })->kmmegqceukkkawme('get_term_link', function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') { return $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); })->kmmegqceukkkawme('term_description', function ($iwewcwusemqaiggk = 0) { return $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->meqceykmywmqgoym($iwewcwusemqaiggk); })->kmmegqceukkkawme('get_term_children', function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) { return $this->caokeucsksukesyo()->kckogqkiycqeumoa()->mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii); })->kmmegqceukkkawme('get_term_title', function ($iwewcwusemqaiggk) { return $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($iwewcwusemqaiggk); })->kmmegqceukkkawme('do_action', function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) { $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo); })->kmmegqceukkkawme('pmpr_do_action', function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) { $this->ewcsyqaaigkicgse($aiamqeawckcsuaou, ...$qookweymeqawmcwo); })->kmmegqceukkkawme('get_option', function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq, $ggauoeuaesiymgee); })->kmmegqceukkkawme('get_page_by_path', function ($mkomwsiykqigmqca) { return $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($mkomwsiykqigmqca); }); $this->sqmuqsscmimwqoki(); $this->comment(); $this->mkukcsqosmkeeask(); } public function ooqekmgsqomsakio($wkcwykowmmmwioqs) : string { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() || $this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cgwcgscqeqauaagi($wkcwykowmmmwioqs); $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs); $yeacayasgueouoqc = $gkyciwoiiisgywcs->get($uomewyckeuqoqocu, 0); if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gsaceacmqiuqoouo(str_replace('@', '', $yeacayasgueouoqc))) { $woqmauweeqyeyymc = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->smukuowsyyssmcok(); if ($woqmauweeqyeyymc && $yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq()) { $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get(explode('__', $yeacayasgueouoqc), 2, $yeacayasgueouoqc); if (is_string($ymqmyyeuycgmigyo)) { $cqygeiuceemyuywc = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}/{$wksoawcgagcgoask->gueasuouwqysmomu()}/{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs); if ($this->kasioquywmeosmsi()->exists($cqygeiuceemyuywc, $woqmauweeqyeyymc->aakmagwggmkoiiyu())) { $wkcwykowmmmwioqs = $cqygeiuceemyuywc; } } } } } return $wkcwykowmmmwioqs; } public function oeaigciskewsiiec($aiowsaccomcoikus = Constants::NAME, $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = []) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($mkucggyaiaukqoce); } $icwicymcioeyeyek = null; if ($mkucggyaiaukqoce) { $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); switch ($aiowsaccomcoikus) { case Constants::auqoykcmsiauccao: case Constants::sauwwsocmukoaayu: $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($mkucggyaiaukqoce); break; case Constants::NAME: case Constants::qescuiwgsyuikume: case Constants::cuyqkgecokgmcwqu: $icwicymcioeyeyek = $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce); break; case Constants::eqkeooqcsscoggia: $icwicymcioeyeyek = $this->caokeucsksukesyo()->mguqscccckuywsya()->meqceykmywmqgoym($ycoeoaakqyskgykq); break; case Constants::ceaooaoacwwcuoqm: $oiegiwogmwmawkeo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq) ?? 64; $icwicymcioeyeyek = $yoiguusocukqeayg->ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __('User Avatar', PR__CMN__FOUNDATION)); break; default: $icwicymcioeyeyek = $yoiguusocukqeayg->igawqaomowicuayw($aiowsaccomcoikus, $ycoeoaakqyskgykq); } } return $icwicymcioeyeyek; } public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, bool $cwwowqyuwccuykom = false) { $aqykuigiuwmmcieu = null; $eyoesceegakeygsi = $this->kasioquywmeosmsi(); if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) { $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw; } else { if (!$yeacayasgueouoqc) { $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg(); } if (!$yeacayasgueouoqc) { _doing_it_wrong(__FUNCTION__, sprintf('current argument can not be empty, please pass _self variable in twig templates to get_template', PR__CMN__FOUNDATION), '1.3.200'); } $yeacayasgueouoqc = str_replace('//', '/', $yeacayasgueouoqc); if ($yeacayasgueouoqc) { if ($ccamueccusigaaio) { if (is_array($ccamueccusigaaio)) { foreach ($ccamueccusigaaio as $igqsaukqcqscimok) { if ($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true)) { break; } } } else { $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "/{$ccamueccusigaaio}"; } } $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc); if ($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu) { $ekwsasieesaqcsiw = '.'; if (preg_match('/\\.[0-9a-z]+$/i', $qqscaoyqikuyeoaw)) { $ekwsasieesaqcsiw .= 'twig'; } $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw)); $aqykuigiuwmmcieu = preg_replace("/({$ymqmyyeuycgmigyo}(?!.*{$ymqmyyeuycgmigyo}))/", $qqscaoyqikuyeoaw, $yeacayasgueouoqc); } } if (!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu)) { if ($qqscaoyqikuyeoaw !== 'index' && !$cwwowqyuwccuykom) { $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw('index', $aqykuigiuwmmcieu); } else { $aqykuigiuwmmcieu = null; } } if ($aqykuigiuwmmcieu) { $aqykuigiuwmmcieu = $this->sscegwueamckwmcy('theme_template_requirements', $aqykuigiuwmmcieu); } } if ($aqykuigiuwmmcieu) { $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu); } return $aqykuigiuwmmcieu; } }
