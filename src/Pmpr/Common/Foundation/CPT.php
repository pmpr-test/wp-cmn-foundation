<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec7e2db2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aakmagwggmkoiiyu()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); } if (!$yyksucsgisomecgg->meqceykmywmqgoym()) { $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\45\163\x20\x70\x6f\x73\164\x20\164\171\x70\x65", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); } parent::__construct(); } else { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if ($post) { $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); } else { if (isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); } } } } } } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x69\x6e\151\x74"], 0)->qcsmikeggeemccuu("\141\144\x64\x5f\155\145\x74\x61\x5f\x62\157\170\145\x73", [$this, "\x77\x61\x63\145\155\x6b\x71\155\151\x77\165\x71\x6f\165\147\141"])->qcsmikeggeemccuu("\x61\x66\x74\145\x72\x5f\163\x77\151\x74\143\150\x5f\x74\150\x65\155\145", [$this, "\x6b\155\x77\141\x75\141\141\143\x6d\x67\145\161\141\153\x71\147"])->qcsmikeggeemccuu("\163\x61\166\x65\137\x70\x6f\163\x74\x5f{$ymqmyyeuycgmigyo}", [$this, "\153\x67\163\x6f\x63\x69\x77\x77\157\151\157\x63\165\x71\141\147"])->qcsmikeggeemccuu("\160\157\x73\x74\x5f\x74\x79\x70\x65\137\x6c\x69\x6e\x6b", [$this, "\145\147\171\171\167\155\151\171\165\x63\x71\x6f\153\165\x63\x6b"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\x70\157\163\164\x5f\165\160\x64\141\x74\145\144\x5f\x6d\x65\x73\x73\x61\x67\x65\x73", [$this, "\160\x6d\151\167\x6b\x77\153\171\147\141\145\167\151\143\161\163"])->cecaguuoecmccuse("\163\165\x62\164\151\164\x6c\x65\x5f\166\x69\145\167\x5f\163\165\x70\160\157\x72\164\145\x64", [$this, "\x6f\x77\171\143\155\145\163\x65\145\x69\x6b\x63\x61\161\x77\x6b"])->cecaguuoecmccuse("\x6d\141\x6e\x61\147\145\x5f{$ymqmyyeuycgmigyo}\x5f\x70\157\163\164\x73\x5f\143\157\x6c\165\155\156\163", [$this, "\x6b\x67\x6f\x67\x6f\143\x63\141\x69\x6d\x75\x79\x77\x73\x6f\x79"])->cecaguuoecmccuse("\x6d\141\x6e\x61\147\145\x5f{$ymqmyyeuycgmigyo}\137\160\x6f\x73\164\163\137\x63\165\x73\164\157\155\137\x63\157\x6c\x75\155\x6e", [$this, "\145\147\x71\153\x63\x79\x65\x71\157\167\167\x79\151\141\x6d\143"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\x5f\160\141\147\151\156\141\x74\x69\x6f\156\137\151\156\x66\157", [$this, "\143\147\161\171\x71\151\x69\163\x75\143\153\171\171\165\145\163"])->aqaqisyssqeomwom("\147\145\164\x5f{$ymqmyyeuycgmigyo}\x5f\160\157\163\164\x73", [$this, "\x69\171\x73\x73\147\x6f\x69\167\147\167\x79\147\145\x61\143\147"], 10, 2)->aqaqisyssqeomwom("\147\145\164\x5f{$ymqmyyeuycgmigyo}\x5f\x70\157\163\x74\137\x64\x61\164\x61", [$this, "\x6d\x71\167\141\161\143\x6b\145\151\171\161\161\157\151\x69\167"], 10, 2)->aqaqisyssqeomwom("\x74\145\155\160\x6c\141\164\145\137\x68\151\145\162\x61\162\x63\x68\171\137\x74\145\x6d\160\x6c\141\164\x65\163", [$this, "\165\153\x67\151\153\151\163\x6b\x75\x6f\163\x75\155\161\x63\x71"], 10, 2)->aqaqisyssqeomwom("\x74\x65\x6d\x70\x6c\x61\164\145\137\x68\x69\x65\x72\141\162\x63\150\171\x5f\160\x61\x72\x61\155\145\x74\145\x72\163", [$this, "\x69\x61\141\153\x73\141\x65\141\147\x61\157\157\x6b\x65\x73\153"], 10, 2); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x72\145\156\x64\145\162\103\x68\151\x6c\144\162\145\x6e")) { $this->cecaguuoecmccuse("\x72\145\x6e\x64\x65\x72\137{$ymqmyyeuycgmigyo}\x5f\143\x68\151\x6c\x64\x72\x65\x6e", [$this, $qgciuiagkkguykgs], 10, 2); } } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if (!$this->register) { $this->register = new RegisterPost(); } return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post)) { $ocogsiouoiuuguym = explode("\55", $seumokooiykcomco->squyiyimquqicqke("\131\55\155\55\x64", $post, false)); $scuukmeowggaqeea = ["\x25\x70\157\x73\164\137\151\x64\45" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\45\160\x6f\x73\164\156\141\x6d\145\x25" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\x25\x79\x65\141\x72\x25" => $ocogsiouoiuuguym[0], "\45\155\x6f\x6e\164\x68\x6e\165\x6d\x25" => $ocogsiouoiuuguym[1], "\x25\144\x61\x79\45" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); } } return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if ($qkweikswegyciaie instanceof MetaBox) { $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); } $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if (!$this->metaBoxes) { $this->qyecwywaoyamkmci(); } return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if ($ugugagoguiycqeys = $this->aqygoeiikwkmkyke()) { if (count($wkkweuacukumqmya) > 2) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); } else { $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); } } return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); } else { if ($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu) { $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); } } if ($ikgwqyuyckaewsow) { $sogksuscggsicmac[] = $ikgwqyuyckaewsow; } } $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); } return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis()) { if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if ($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy()) { [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { $uusmaiomayssaecw = "{$aokagokqyuysuksm}\x5f\x6d\x65\x74\x61\x64\141\x74\x61"; } else { $uusmaiomayssaecw = $aokagokqyuysuksm; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; } } } } return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aoaiwceqgsckygsg()) { $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if (!$yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); } } $this->register(); global $wp_rewrite; if ($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis())) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\x61\144\x6d\151\156\x49\156\151\164"); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { $this->qyecwywaoyamkmci(); } } } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (is_array($qkweikswegyciaie)) { $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\x65\x71\165\x65\147\163\x6b\153\x65\145\x6d\145\x6d\147\x79\x65"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); } } } } } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy(); if ($ckwiwikoeoiaouaa) { [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; } else { if ($aiowsaccomcoikus instanceof Field) { $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski] ?? ''; } else { continue; } } if ($eqgoocgaqwqcimie) { $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); } else { $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); } $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); } } } } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if ($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\x61\162\x67\x73\56\146\151\x65\154\x64\x73")) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\x63\154\141\163\163" => "\x70\157\x73\164\x2d{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\55\x6d\145\164\x61\x64\141\x74\x61\55\x66\x69\x65\154\x64\163"]); } } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\57\x61\x72\x63\150\x69\166\x65"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; } } else { if ($this->cukiusasccucgwqc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x73\151\156\147\x6c\145"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; } } } return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) { if ($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe)) { if (false === strpos($wkaqekwwgqsqwcoi, "\x64\141\x73\150\151\143\157\156\x73\x2d") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); } $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; } $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (property_exists($this, $oaukocmsckciqaok)) { $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); } } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\45\163\40\165\160\144\x61\164\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\x43\x75\163\x74\157\x6d\x20\x66\x69\145\x6c\x64\x20\x75\x70\x64\x61\x74\x65\x64\56", PR__CMN__FOUNDATION), 3 => __("\103\165\163\x74\157\155\40\146\151\x65\x6c\x64\x20\144\x65\154\145\x74\145\x64\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\45\x73\40\165\160\x64\141\164\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\x72\145\x76\151\163\151\157\x6e"]) ? sprintf(__("\x25\163\40\x72\x65\x73\164\157\162\x65\144\40\164\157\x20\162\x65\x76\151\x73\x69\157\156\40\x66\x72\x6f\x6d\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\166\x69\163\x69\x6f\156"], false)) : false, 6 => sprintf(__("\45\163\40\x70\165\x62\x6c\x69\163\x68\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\x25\x73\40\163\x61\166\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\45\x73\x20\x73\x75\x62\155\x69\x74\x74\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\x25\61\44\x73\40\163\143\150\145\144\165\x6c\145\x64\x20\x66\x6f\162\x3a\x20\45\x32\x24\163\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\40\x6a\54\x20\x59\x20\x40\x20\107\72\151", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\x25\163\x20\144\162\141\146\x74\40\x75\x70\x64\x61\164\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\126\x69\145\167\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x70\x72\x65\x76\x69\145\x77", "\x74\162\165\145", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x50\x72\145\x76\x69\x65\167\x20\x25\x73", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\137\142\154\x61\156\153"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; } return $wumguikkgaigkoee; } }
