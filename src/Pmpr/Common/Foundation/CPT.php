<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d30e2de1d6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aakmagwggmkoiiyu()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); } if (!$yyksucsgisomecgg->meqceykmywmqgoym()) { $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\45\x73\40\x70\x6f\163\164\x20\x74\x79\x70\145", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); } parent::__construct(); } else { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if ($post) { $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); } else { if (isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); } } } } } } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\x6e\x69\164"], 0)->qcsmikeggeemccuu("\x61\144\144\x5f\x6d\x65\x74\141\137\x62\157\170\145\163", [$this, "\167\141\143\145\x6d\x6b\x71\x6d\x69\x77\165\x71\x6f\x75\x67\x61"])->qcsmikeggeemccuu("\141\146\x74\x65\x72\x5f\163\167\x69\x74\x63\x68\137\x74\x68\x65\155\x65", [$this, "\153\x6d\167\141\x75\141\x61\143\155\147\x65\x71\141\x6b\161\147"])->qcsmikeggeemccuu("\163\141\166\145\x5f\x70\x6f\x73\x74\x5f{$ymqmyyeuycgmigyo}", [$this, "\153\x67\163\157\143\x69\167\167\157\151\x6f\143\x75\x71\x61\147"])->qcsmikeggeemccuu("\160\x6f\x73\164\x5f\164\171\160\x65\x5f\154\151\156\x6b", [$this, "\x65\147\171\x79\167\155\151\x79\165\x63\161\x6f\x6b\165\143\153"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\160\x6f\163\164\x5f\x75\160\144\141\x74\x65\x64\x5f\x6d\145\x73\163\141\147\145\163", [$this, "\160\155\151\x77\x6b\167\x6b\x79\x67\x61\x65\167\x69\x63\161\x73"])->cecaguuoecmccuse("\x73\165\x62\x74\151\x74\x6c\x65\137\x76\151\x65\167\x5f\x73\x75\x70\160\x6f\x72\x74\x65\x64", [$this, "\157\167\x79\x63\x6d\145\163\145\145\151\x6b\143\141\x71\167\153"])->cecaguuoecmccuse("\155\141\156\141\x67\145\137{$ymqmyyeuycgmigyo}\137\x70\157\x73\x74\x73\x5f\143\157\154\x75\x6d\x6e\x73", [$this, "\x6b\147\x6f\147\x6f\143\143\x61\x69\x6d\165\x79\x77\x73\x6f\171"])->cecaguuoecmccuse("\x6d\x61\x6e\x61\147\145\137{$ymqmyyeuycgmigyo}\137\x70\x6f\x73\164\163\137\143\165\x73\x74\157\155\137\143\157\154\165\x6d\x6e", [$this, "\145\x67\x71\x6b\x63\x79\x65\x71\157\167\x77\x79\151\x61\x6d\143"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\137\160\x61\x67\151\x6e\x61\x74\151\x6f\x6e\x5f\151\x6e\x66\x6f", [$this, "\143\147\x71\x79\161\151\151\163\x75\x63\153\171\x79\x75\145\x73"])->aqaqisyssqeomwom("\147\145\164\137{$ymqmyyeuycgmigyo}\x5f\160\x6f\163\x74\x73", [$this, "\x69\171\x73\x73\x67\x6f\x69\x77\147\x77\x79\x67\x65\x61\x63\x67"], 10, 2)->aqaqisyssqeomwom("\147\145\164\x5f{$ymqmyyeuycgmigyo}\137\160\x6f\163\x74\137\x64\x61\164\141", [$this, "\155\x71\167\x61\161\x63\x6b\145\151\171\161\x71\x6f\151\x69\167"], 10, 2)->aqaqisyssqeomwom("\x74\145\155\x70\x6c\x61\164\145\x5f\x68\151\x65\162\141\x72\143\x68\171\137\x74\145\x6d\x70\154\141\x74\145\x73", [$this, "\165\x6b\147\x69\153\151\x73\153\x75\x6f\163\165\155\161\x63\x71"], 10, 2)->aqaqisyssqeomwom("\164\x65\x6d\160\154\141\x74\x65\137\150\x69\145\162\141\162\x63\150\x79\137\160\141\162\141\x6d\x65\164\145\x72\x73", [$this, "\151\x61\141\153\163\141\x65\x61\x67\141\157\x6f\153\145\x73\x6b"], 10, 2); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\162\145\156\144\145\162\x43\x68\151\154\x64\162\145\x6e")) { $this->cecaguuoecmccuse("\x72\x65\x6e\x64\x65\x72\x5f{$ymqmyyeuycgmigyo}\x5f\x63\x68\151\x6c\144\162\x65\156", [$this, $qgciuiagkkguykgs], 10, 2); } } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if (!$this->register) { $this->register = new RegisterPost(); } return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post)) { $ocogsiouoiuuguym = explode("\x2d", $seumokooiykcomco->squyiyimquqicqke("\x59\55\155\x2d\x64", $post, false)); $scuukmeowggaqeea = ["\x25\160\x6f\163\164\x5f\x69\144\x25" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\45\160\x6f\163\x74\x6e\141\x6d\x65\x25" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\x25\171\x65\x61\162\x25" => $ocogsiouoiuuguym[0], "\45\x6d\157\156\164\150\x6e\x75\155\45" => $ocogsiouoiuuguym[1], "\x25\144\x61\x79\45" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); } } return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if ($qkweikswegyciaie instanceof MetaBox) { $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); } $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if (!$this->metaBoxes) { $this->qyecwywaoyamkmci(); } return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if ($ugugagoguiycqeys = $this->aqygoeiikwkmkyke()) { if (count($wkkweuacukumqmya) > 2) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); } else { $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); } } return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); } else { if ($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu) { $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); } } if ($ikgwqyuyckaewsow) { $sogksuscggsicmac[] = $ikgwqyuyckaewsow; } } $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); } return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis()) { if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if ($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy()) { [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { $uusmaiomayssaecw = "{$aokagokqyuysuksm}\x5f\x6d\x65\x74\141\x64\x61\x74\141"; } else { $uusmaiomayssaecw = $aokagokqyuysuksm; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; } } } } return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aoaiwceqgsckygsg()) { $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if (!$yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); } } $this->register(); global $wp_rewrite; if ($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis())) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\141\x64\155\x69\156\111\156\x69\164"); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { $this->qyecwywaoyamkmci(); } } } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (is_array($qkweikswegyciaie)) { $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\x65\x71\x75\x65\x67\x73\153\x6b\145\x65\x6d\x65\x6d\147\171\145"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); } } } } } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy(); if ($ckwiwikoeoiaouaa) { [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; } else { if ($aiowsaccomcoikus instanceof Field) { $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski] ?? ''; } else { continue; } } if ($eqgoocgaqwqcimie) { $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); } else { $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); } $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); } } } } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if ($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\x61\x72\147\x73\x2e\146\x69\145\154\144\163")) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\x63\x6c\141\163\x73" => "\160\x6f\163\164\x2d{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\55\x6d\x65\164\141\x64\x61\x74\141\55\146\x69\x65\x6c\144\x73"]); } } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x61\x72\x63\150\151\166\x65"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; } } else { if ($this->cukiusasccucgwqc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x73\x69\156\x67\154\145"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; } } } return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) { if ($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe)) { if (false === strpos($wkaqekwwgqsqwcoi, "\x64\141\x73\x68\x69\x63\x6f\x6e\163\x2d") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); } $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; } $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (property_exists($this, $oaukocmsckciqaok)) { $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); } } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\45\x73\40\x75\x70\x64\x61\164\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\x43\165\163\x74\x6f\155\40\x66\151\145\x6c\x64\x20\165\160\x64\x61\x74\x65\x64\x2e", PR__CMN__FOUNDATION), 3 => __("\103\x75\163\x74\x6f\x6d\40\x66\x69\145\154\144\40\x64\145\x6c\145\164\145\x64\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\45\x73\x20\165\160\144\141\x74\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\162\x65\x76\x69\163\151\x6f\156"]) ? sprintf(__("\x25\x73\x20\162\x65\163\x74\157\x72\x65\144\40\x74\157\x20\x72\x65\x76\151\x73\151\x6f\x6e\x20\x66\162\157\155\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\x65\x76\151\163\x69\157\x6e"], false)) : false, 6 => sprintf(__("\x25\x73\40\160\x75\x62\x6c\x69\163\x68\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\45\163\x20\x73\141\x76\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\x25\163\40\163\165\142\155\x69\164\164\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\45\x31\x24\x73\40\x73\x63\150\x65\144\x75\154\145\144\x20\146\x6f\x72\x3a\40\45\x32\44\163\56", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\x20\152\54\x20\x59\x20\x40\40\107\x3a\151", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\45\163\x20\x64\162\x61\x66\x74\40\165\x70\144\x61\164\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\126\151\x65\x77\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x70\x72\x65\166\x69\145\167", "\x74\x72\165\145", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\120\162\x65\166\151\x65\167\x20\45\x73", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\137\142\154\x61\156\x6b"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; } return $wumguikkgaigkoee; } }
