<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce8e3ee38             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aakmagwggmkoiiyu()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); } if (!$yyksucsgisomecgg->meqceykmywmqgoym()) { $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\45\x73\x20\x70\x6f\163\164\x20\x74\171\x70\145", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); } parent::__construct(); } else { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if ($post) { $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); } else { if (isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); } } } } } } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x69\156\x69\x74"], 0)->qcsmikeggeemccuu("\141\x64\144\137\x6d\x65\164\141\x5f\142\157\x78\x65\163", [$this, "\x77\141\x63\145\155\x6b\161\155\x69\167\x75\x71\157\x75\147\141"])->qcsmikeggeemccuu("\x61\x66\x74\x65\x72\x5f\x73\x77\x69\164\x63\x68\x5f\x74\x68\x65\155\145", [$this, "\x6b\x6d\x77\141\165\x61\141\143\155\x67\x65\161\x61\x6b\161\x67"])->qcsmikeggeemccuu("\163\x61\166\x65\x5f\x70\157\x73\164\x5f{$ymqmyyeuycgmigyo}", [$this, "\x6b\147\x73\157\143\x69\x77\167\x6f\x69\x6f\143\x75\161\141\147"])->qcsmikeggeemccuu("\x70\157\x73\164\x5f\164\171\x70\145\137\x6c\151\156\x6b", [$this, "\145\147\171\x79\167\x6d\151\171\x75\x63\x71\157\x6b\x75\x63\x6b"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\160\x6f\163\164\x5f\165\x70\144\141\x74\x65\144\x5f\x6d\145\163\163\141\147\145\163", [$this, "\160\x6d\151\167\153\167\153\x79\147\141\x65\167\x69\x63\161\163"])->cecaguuoecmccuse("\x73\x75\142\x74\x69\164\x6c\x65\137\166\x69\145\x77\137\x73\x75\160\x70\157\x72\x74\x65\x64", [$this, "\157\167\171\x63\x6d\145\163\145\x65\151\153\143\141\161\x77\x6b"])->cecaguuoecmccuse("\155\x61\x6e\x61\147\x65\137{$ymqmyyeuycgmigyo}\x5f\x70\157\x73\164\x73\137\143\x6f\x6c\x75\155\156\x73", [$this, "\x6b\x67\x6f\147\x6f\143\x63\x61\x69\x6d\165\171\167\163\x6f\x79"])->cecaguuoecmccuse("\x6d\x61\156\141\x67\145\x5f{$ymqmyyeuycgmigyo}\x5f\x70\157\x73\x74\163\x5f\x63\x75\163\164\x6f\x6d\x5f\x63\157\154\x75\155\x6e", [$this, "\145\x67\161\153\143\x79\x65\161\157\x77\167\171\151\x61\x6d\x63"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\137\160\141\x67\151\156\x61\x74\151\157\x6e\137\151\x6e\x66\x6f", [$this, "\x63\147\161\x79\x71\x69\x69\x73\x75\143\x6b\x79\171\165\x65\x73"])->aqaqisyssqeomwom("\x67\x65\164\137{$ymqmyyeuycgmigyo}\137\160\157\163\164\x73", [$this, "\151\x79\x73\163\147\x6f\x69\x77\x67\x77\171\x67\145\x61\x63\x67"], 10, 2)->aqaqisyssqeomwom("\x67\145\164\137{$ymqmyyeuycgmigyo}\137\x70\x6f\x73\x74\137\144\141\164\x61", [$this, "\155\161\167\141\x71\x63\153\145\151\171\161\161\157\151\151\x77"], 10, 2)->aqaqisyssqeomwom("\x74\145\x6d\160\154\141\x74\145\x5f\150\151\145\162\x61\x72\x63\150\171\x5f\164\x65\x6d\160\154\x61\x74\145\163", [$this, "\x75\x6b\x67\x69\153\x69\x73\153\x75\157\x73\x75\x6d\x71\143\x71"], 10, 2)->aqaqisyssqeomwom("\164\145\155\x70\x6c\x61\164\145\137\150\x69\145\x72\x61\x72\143\150\171\137\x70\x61\162\x61\155\145\x74\145\x72\163", [$this, "\x69\141\141\x6b\163\x61\145\x61\147\x61\x6f\157\153\x65\x73\153"], 10, 2); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x72\x65\156\x64\145\162\x43\150\x69\154\144\162\x65\156")) { $this->cecaguuoecmccuse("\x72\x65\156\x64\x65\x72\x5f{$ymqmyyeuycgmigyo}\x5f\x63\x68\x69\x6c\x64\162\x65\x6e", [$this, $qgciuiagkkguykgs], 10, 2); } } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if (!$this->register) { $this->register = new RegisterPost(); } return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post)) { $ocogsiouoiuuguym = explode("\x2d", $seumokooiykcomco->squyiyimquqicqke("\131\55\x6d\x2d\x64", $post, false)); $scuukmeowggaqeea = ["\45\160\x6f\163\164\x5f\151\x64\45" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\x25\160\157\163\164\x6e\141\x6d\145\x25" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\x25\x79\x65\141\x72\45" => $ocogsiouoiuuguym[0], "\45\x6d\157\x6e\164\x68\156\165\155\45" => $ocogsiouoiuuguym[1], "\45\144\x61\x79\x25" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); } } return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if ($qkweikswegyciaie instanceof MetaBox) { $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); } $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if (!$this->metaBoxes) { $this->qyecwywaoyamkmci(); } return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if ($ugugagoguiycqeys = $this->aqygoeiikwkmkyke()) { if (count($wkkweuacukumqmya) > 2) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); } else { $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); } } return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); } else { if ($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu) { $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); } } if ($ikgwqyuyckaewsow) { $sogksuscggsicmac[] = $ikgwqyuyckaewsow; } } $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); } return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis()) { if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if ($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy()) { [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { $uusmaiomayssaecw = "{$aokagokqyuysuksm}\137\155\145\x74\x61\144\141\x74\141"; } else { $uusmaiomayssaecw = $aokagokqyuysuksm; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; } } } } return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if (!$yyksucsgisomecgg->aoaiwceqgsckygsg()) { $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if (!$yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); } } $this->register(); global $wp_rewrite; if ($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis())) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\141\x64\155\x69\x6e\x49\x6e\151\x74"); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { $this->qyecwywaoyamkmci(); } } } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (is_array($qkweikswegyciaie)) { $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\145\161\165\145\x67\163\x6b\x6b\145\145\x6d\x65\x6d\x67\171\145"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); } } } } } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy(); if ($ckwiwikoeoiaouaa) { [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; } else { if ($aiowsaccomcoikus instanceof Field) { $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski] ?? ''; } else { continue; } } if ($eqgoocgaqwqcimie) { $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); } else { $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); } $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); } } } } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if ($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\141\162\x67\x73\x2e\146\x69\145\x6c\144\163")) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\143\154\141\163\163" => "\160\x6f\x73\x74\x2d{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\x2d\155\x65\164\x61\144\141\x74\x61\55\x66\151\145\x6c\x64\163"]); } } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\57\141\x72\143\x68\151\x76\145"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; } } else { if ($this->cukiusasccucgwqc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\57\x73\x69\156\x67\154\x65"); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; } } } return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) { if ($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe)) { if (false === strpos($wkaqekwwgqsqwcoi, "\x64\141\x73\x68\151\143\157\x6e\163\x2d") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); } $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; } $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (property_exists($this, $oaukocmsckciqaok)) { $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); } } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\x25\163\40\165\160\144\141\x74\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\x43\x75\x73\x74\x6f\x6d\x20\x66\x69\x65\154\144\x20\x75\x70\x64\141\164\x65\x64\x2e", PR__CMN__FOUNDATION), 3 => __("\103\x75\163\x74\x6f\155\x20\x66\151\x65\x6c\x64\40\144\x65\154\x65\x74\x65\144\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\x25\163\40\165\160\x64\141\x74\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\x72\x65\166\151\x73\151\x6f\156"]) ? sprintf(__("\x25\x73\x20\162\x65\x73\164\157\x72\145\144\40\164\157\x20\x72\x65\x76\151\x73\x69\157\156\40\146\x72\x6f\155\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\x65\166\151\x73\151\x6f\156"], false)) : false, 6 => sprintf(__("\45\x73\x20\160\x75\x62\154\x69\x73\150\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\45\x73\x20\x73\141\x76\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\45\x73\x20\x73\x75\142\155\151\x74\164\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\45\x31\44\x73\40\163\143\150\x65\144\x75\x6c\145\144\40\146\x6f\x72\72\x20\x25\62\x24\163\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\40\152\54\40\131\40\x40\x20\107\72\x69", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\x25\x73\40\144\x72\141\146\164\40\x75\x70\x64\141\164\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x56\151\145\x77\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\160\x72\145\166\x69\145\167", "\164\162\165\145", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\120\x72\145\166\x69\x65\x77\40\x25\163", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\137\x62\154\x61\156\x6b"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; } return $wumguikkgaigkoee; } }
