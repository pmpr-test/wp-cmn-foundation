<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e934ce45324             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\FormGenerator\Backend\CPTMetaBox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Register\RegisterPost; use WP_Post_Type; class CPT extends CPTMetaBox { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aakmagwggmkoiiyu()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); } if (!$yyksucsgisomecgg->meqceykmywmqgoym()) { $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__('%s post type', PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); } $this->mgieiwsmcswmmiim($this->miwqiiqeegeqcwis()); parent::__construct(); } else { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if ($post) { $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); } else { if (isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); } } } } } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('after_switch_theme', [$this, 'kmwauaacmgeqakqg'])->qcsmikeggeemccuu('post_type_link', [$this, 'egyywmiyucqokuck'], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse('post_updated_messages', [$this, 'pmiwkwkygaewicqs'])->cecaguuoecmccuse('subtitle_view_supported', [$this, 'owycmeseeikcaqwk'])->cecaguuoecmccuse("manage_{$ymqmyyeuycgmigyo}_posts_columns", [$this, 'kgogoccaimuywsoy'])->cecaguuoecmccuse("manage_{$ymqmyyeuycgmigyo}_posts_custom_column", [$this, 'yiaammmogmaisoka'], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}_pagination_info", [$this, 'cgqyqiisuckyyues'])->aqaqisyssqeomwom("get_{$ymqmyyeuycgmigyo}_posts", [$this, 'iyssgoiwgwygeacg'], 10, 2)->aqaqisyssqeomwom("get_{$ymqmyyeuycgmigyo}_post_data", [$this, 'mqwaqckeiyqqoiiw'], 10, 2)->aqaqisyssqeomwom('template_hierarchy_templates', [$this, 'ukgikiskuosumqcq'], 10, 2)->aqaqisyssqeomwom('template_hierarchy_parameters', [$this, 'iaaksaeagaookesk'], 10, 2); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, 'renderChildren')) { $this->cecaguuoecmccuse("render_{$ymqmyyeuycgmigyo}_children", [$this, $qgciuiagkkguykgs], 10, 2); } } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aoaiwceqgsckygsg()) { $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if (!$yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); } } $this->register(); global $wp_rewrite; if ($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis())) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, 'adminInit'); } parent::init(); } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if (!$this->register) { $this->register = new RegisterPost(); } return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post)) { $ocogsiouoiuuguym = explode('-', $seumokooiykcomco->squyiyimquqicqke('Y-m-d', $post, false)); $scuukmeowggaqeea = ['%post_id%' => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), '%postname%' => $seumokooiykcomco->aqcogscycyycgkuq($post), '%year%' => $ocogsiouoiuuguym[0], '%monthnum%' => $ocogsiouoiuuguym[1], '%day%' => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); } } return $iwywmkygwewiamwm; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function yiaammmogmaisoka($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if ($ugugagoguiycqeys = $this->aqygoeiikwkmkyke()) { if (count($wkkweuacukumqmya) > 2) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); } else { $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); } } return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}/archive"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; } } else { if ($this->cukiusasccucgwqc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}/single"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; } } } return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) { if ($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe)) { if (!str_contains($wkaqekwwgqsqwcoi, 'dashicons-') && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); } $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; } $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (property_exists($this, $oaukocmsckciqaok)) { $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); } } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__('%s updated.', PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __('Custom field updated.', PR__CMN__FOUNDATION), 3 => __('Custom field deleted.', PR__CMN__FOUNDATION), 4 => sprintf(__('%s updated.', PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET['revision']) ? sprintf(__('%s restored to revision from %s', PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET['revision'], false)) : false, 6 => sprintf(__('%s published.', PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__('%s saved.', PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__('%s submitted.', PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__('%1$s scheduled for: %2$s.', PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__('M j, Y @ G:i', PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__('%s draft updated.', PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__('View %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo('preview', 'true', $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__('Preview %s', PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => '_blank']); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; } return $wumguikkgaigkoee; } }
