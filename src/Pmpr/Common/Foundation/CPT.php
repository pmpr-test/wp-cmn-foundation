<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675815b967a0e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aakmagwggmkoiiyu()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); } if (!$yyksucsgisomecgg->meqceykmywmqgoym()) { $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\x25\163\x20\160\157\x73\x74\x20\x74\x79\160\x65", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); } parent::__construct(); } else { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if ($post) { $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); } else { if (isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); } } } } } } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\x6e\151\x74"], 0)->qcsmikeggeemccuu("\x61\144\x64\137\x6d\x65\164\x61\137\142\157\170\x65\x73", [$this, "\167\x61\x63\x65\155\x6b\x71\155\x69\x77\x75\x71\x6f\x75\147\x61"])->qcsmikeggeemccuu("\141\146\164\x65\162\x5f\163\x77\x69\164\x63\150\x5f\x74\x68\145\x6d\x65", [$this, "\153\x6d\x77\x61\165\x61\x61\143\155\147\x65\161\x61\x6b\x71\147"])->qcsmikeggeemccuu("\163\141\166\x65\x5f\160\157\163\x74\137{$ymqmyyeuycgmigyo}", [$this, "\153\147\163\157\x63\151\167\167\157\x69\x6f\x63\165\x71\141\147"])->qcsmikeggeemccuu("\x70\x6f\x73\x74\x5f\164\x79\x70\145\137\154\x69\x6e\153", [$this, "\145\x67\171\171\x77\155\151\171\165\143\161\x6f\153\165\x63\153"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\x70\x6f\x73\x74\x5f\165\x70\144\x61\x74\x65\144\x5f\155\x65\x73\x73\x61\x67\145\163", [$this, "\x70\155\x69\x77\x6b\x77\153\171\147\x61\145\x77\x69\x63\161\x73"])->cecaguuoecmccuse("\163\165\142\164\x69\x74\x6c\145\x5f\x76\151\145\167\137\163\x75\160\160\x6f\x72\x74\x65\144", [$this, "\x6f\x77\171\x63\155\145\163\145\145\151\x6b\x63\141\161\167\x6b"])->cecaguuoecmccuse("\155\x61\x6e\141\147\145\137{$ymqmyyeuycgmigyo}\x5f\x70\157\x73\164\163\x5f\x63\157\x6c\x75\x6d\156\163", [$this, "\153\x67\157\147\157\x63\143\x61\x69\155\165\171\x77\x73\157\x79"])->cecaguuoecmccuse("\155\141\156\x61\147\145\x5f{$ymqmyyeuycgmigyo}\x5f\x70\x6f\x73\164\163\137\143\x75\163\164\157\x6d\x5f\143\x6f\x6c\x75\155\156", [$this, "\x65\147\x71\153\143\171\145\x71\157\x77\167\171\x69\141\x6d\x63"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\137\x70\x61\147\x69\156\x61\164\151\157\156\137\x69\x6e\146\157", [$this, "\143\147\161\171\x71\151\x69\x73\x75\x63\x6b\x79\x79\165\x65\163"])->aqaqisyssqeomwom("\x67\x65\164\x5f{$ymqmyyeuycgmigyo}\137\160\x6f\x73\164\163", [$this, "\x69\x79\x73\163\x67\x6f\151\167\147\167\171\x67\145\x61\143\147"], 10, 2)->aqaqisyssqeomwom("\x67\x65\x74\137{$ymqmyyeuycgmigyo}\137\x70\157\x73\164\x5f\144\x61\x74\141", [$this, "\155\161\x77\x61\161\143\x6b\x65\151\x79\x71\x71\x6f\x69\x69\167"], 10, 2)->aqaqisyssqeomwom("\164\x65\155\x70\154\141\164\145\x5f\150\x69\145\x72\x61\162\x63\150\x79\137\164\145\x6d\160\x6c\x61\x74\x65\163", [$this, "\165\x6b\147\x69\x6b\x69\x73\x6b\x75\157\163\x75\x6d\x71\143\161"], 10, 2)->aqaqisyssqeomwom("\164\x65\155\160\154\x61\164\145\x5f\150\x69\145\162\141\162\x63\x68\x79\x5f\x70\141\162\x61\155\x65\x74\145\162\x73", [$this, "\151\141\141\153\x73\141\145\x61\147\x61\157\x6f\153\145\163\x6b"], 10, 2); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\162\145\x6e\144\x65\x72\103\150\x69\x6c\x64\x72\x65\x6e")) { $this->cecaguuoecmccuse("\x72\x65\x6e\144\145\162\137{$ymqmyyeuycgmigyo}\137\x63\150\151\x6c\144\162\145\156", [$this, $qgciuiagkkguykgs], 10, 2); } } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if (!$this->register) { $this->register = new RegisterPost(); } return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post)) { $ocogsiouoiuuguym = explode("\55", $seumokooiykcomco->squyiyimquqicqke("\131\55\155\55\x64", $post, false)); $scuukmeowggaqeea = ["\x25\x70\x6f\x73\164\x5f\151\x64\45" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\x25\160\157\x73\164\156\141\x6d\145\45" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\45\171\x65\141\x72\45" => $ocogsiouoiuuguym[0], "\45\155\157\156\x74\x68\156\x75\x6d\x25" => $ocogsiouoiuuguym[1], "\x25\x64\141\x79\45" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); } } return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if ($qkweikswegyciaie instanceof MetaBox) { $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); } $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if (!$this->metaBoxes) { $this->qyecwywaoyamkmci(); } return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if ($ugugagoguiycqeys = $this->aqygoeiikwkmkyke()) { if (count($wkkweuacukumqmya) > 2) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); } else { $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); } } return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); } else { if ($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu) { $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); } } if ($ikgwqyuyckaewsow) { $sogksuscggsicmac[] = $ikgwqyuyckaewsow; } } $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); } return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis()) { if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if ($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy()) { [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { $uusmaiomayssaecw = "{$aokagokqyuysuksm}\137\x6d\x65\x74\141\144\x61\x74\141"; } else { $uusmaiomayssaecw = $aokagokqyuysuksm; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; } } } } return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aoaiwceqgsckygsg()) { $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if (!$yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); } } $this->register(); global $wp_rewrite; if ($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis())) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\141\144\155\x69\156\x49\x6e\151\164"); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { $this->qyecwywaoyamkmci(); } } } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (is_array($qkweikswegyciaie)) { $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\145\x71\165\x65\x67\x73\x6b\x6b\x65\x65\x6d\145\155\x67\171\x65"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); } } } } } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy(); if ($ckwiwikoeoiaouaa) { [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; } else { if ($aiowsaccomcoikus instanceof Field) { $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski] ?? ''; } else { continue; } } if ($eqgoocgaqwqcimie) { $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); } else { $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); } $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); } } } } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if ($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\141\162\x67\x73\x2e\146\x69\145\154\x64\x73")) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\143\154\x61\163\163" => "\160\157\x73\x74\x2d{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\55\x6d\145\x74\x61\144\x61\x74\141\55\146\x69\145\x6c\x64\x73"]); } } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\57\x61\x72\x63\x68\151\x76\145"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; } } else { if ($this->cukiusasccucgwqc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\57\163\151\156\x67\154\x65"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; } } } return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) { if ($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe)) { if (false === strpos($wkaqekwwgqsqwcoi, "\x64\x61\163\150\151\x63\157\156\163\x2d") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); } $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; } $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (property_exists($this, $oaukocmsckciqaok)) { $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); } } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\45\x73\40\x75\x70\144\141\164\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\x43\x75\x73\x74\157\x6d\40\146\151\145\x6c\144\40\x75\x70\x64\141\164\145\x64\x2e", PR__CMN__FOUNDATION), 3 => __("\x43\x75\x73\x74\157\155\x20\x66\151\145\x6c\144\40\x64\145\x6c\145\164\145\144\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\x25\x73\40\165\160\x64\141\164\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\162\145\x76\x69\163\151\x6f\x6e"]) ? sprintf(__("\x25\163\40\x72\x65\163\x74\x6f\x72\145\x64\x20\x74\x6f\x20\162\x65\166\151\163\x69\x6f\156\x20\146\162\157\155\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\x65\166\151\x73\x69\x6f\156"], false)) : false, 6 => sprintf(__("\45\x73\x20\x70\x75\142\154\151\x73\x68\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\x25\163\x20\x73\x61\166\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\45\163\40\x73\x75\x62\x6d\151\164\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\45\x31\x24\x73\40\163\x63\x68\145\144\x75\154\145\x64\40\146\x6f\x72\x3a\x20\x25\x32\44\163\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\40\x6a\54\40\x59\40\x40\40\x47\x3a\151", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\45\163\40\144\162\x61\x66\164\40\x75\x70\144\141\x74\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\126\x69\x65\x77\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x70\162\145\166\x69\145\167", "\x74\162\165\x65", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x50\162\145\166\x69\145\167\x20\x25\x73", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\137\x62\x6c\x61\156\153"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; } return $wumguikkgaigkoee; } }
