<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { goto gigiwwouakeekoim; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if (!$post) { goto eauiumeeyckucuyc; } $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { goto eieiwacwqkgsewai; } if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { goto ysiwoiqiaosqoikm; } $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); ysiwoiqiaosqoikm: goto gokwmwmaumiwscua; eieiwacwqkgsewai: $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); gokwmwmaumiwscua: uaiiuywoakccusge: } uekueeyqaackuwao: eauiumeeyckucuyc: goto esuuweysgwuwcuue; gigiwwouakeekoim: $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aakmagwggmkoiiyu()) { goto icmsyimgycuocisu; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); icmsyimgycuocisu: if ($yyksucsgisomecgg->meqceykmywmqgoym()) { goto wassyiqsqasaoiau; } $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\x25\x73\x20\160\x6f\x73\x74\x20\164\171\160\x65", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); wassyiqsqasaoiau: parent::__construct(); esuuweysgwuwcuue: } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\x69\x74"], 0)->qcsmikeggeemccuu("\x61\144\x64\137\x6d\145\x74\141\137\x62\157\x78\x65\163", [$this, "\167\x61\143\x65\155\153\x71\x6d\151\167\x75\161\x6f\165\147\x61"])->qcsmikeggeemccuu("\141\146\164\145\x72\x5f\x73\167\x69\x74\x63\x68\x5f\164\x68\x65\155\x65", [$this, "\153\x6d\x77\x61\x75\141\x61\143\x6d\147\x65\161\x61\153\x71\x67"])->qcsmikeggeemccuu("\x73\141\x76\x65\x5f\160\157\163\164\x5f{$ymqmyyeuycgmigyo}", [$this, "\153\147\x73\x6f\143\151\167\167\x6f\151\157\x63\165\x71\141\147"])->qcsmikeggeemccuu("\160\x6f\163\x74\x5f\x74\171\x70\x65\137\x6c\151\156\153", [$this, "\145\x67\171\171\167\155\151\171\165\x63\x71\157\x6b\x75\143\x6b"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\160\157\x73\x74\x5f\x75\160\x64\x61\164\x65\144\x5f\x6d\x65\x73\163\x61\147\145\163", [$this, "\160\x6d\x69\x77\x6b\167\x6b\171\147\x61\x65\167\151\143\x71\x73"])->cecaguuoecmccuse("\x73\x75\142\x74\151\x74\154\145\x5f\166\151\x65\167\137\163\165\160\160\x6f\162\x74\145\144", [$this, "\157\x77\171\x63\155\x65\163\x65\145\151\x6b\x63\x61\161\167\x6b"])->cecaguuoecmccuse("\x6d\141\156\x61\x67\x65\x5f{$ymqmyyeuycgmigyo}\137\160\157\163\x74\163\x5f\x63\157\154\165\x6d\156\x73", [$this, "\x6b\147\x6f\147\x6f\143\143\141\151\x6d\165\171\x77\163\x6f\x79"])->cecaguuoecmccuse("\155\141\156\x61\x67\145\137{$ymqmyyeuycgmigyo}\x5f\160\x6f\163\164\163\x5f\x63\x75\x73\x74\157\x6d\x5f\x63\157\154\x75\x6d\156", [$this, "\145\x67\x71\x6b\143\171\145\161\157\x77\x77\171\x69\141\155\x63"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\x5f\160\x61\x67\151\156\x61\x74\x69\x6f\156\x5f\x69\156\146\x6f", [$this, "\143\147\x71\171\x71\151\x69\163\x75\143\153\171\171\165\145\x73"])->aqaqisyssqeomwom("\147\x65\x74\137{$ymqmyyeuycgmigyo}\137\x70\157\x73\x74\x73", [$this, "\151\x79\163\163\147\x6f\151\167\147\167\x79\x67\x65\x61\143\147"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\137{$ymqmyyeuycgmigyo}\x5f\160\x6f\x73\x74\x5f\144\x61\x74\x61", [$this, "\155\161\x77\141\x71\x63\153\x65\151\171\161\x71\157\151\x69\167"], 10, 2)->aqaqisyssqeomwom("\164\145\155\160\x6c\141\x74\x65\x5f\x68\151\x65\x72\141\162\143\x68\x79\x5f\x74\x65\155\x70\154\141\x74\x65\x73", [$this, "\165\x6b\x67\151\153\151\163\153\x75\x6f\x73\165\155\161\x63\x71"], 10, 2)->aqaqisyssqeomwom("\x74\x65\x6d\160\x6c\141\x74\x65\137\x68\151\145\x72\x61\x72\x63\x68\171\137\160\141\x72\141\155\x65\164\x65\162\163", [$this, "\x69\141\141\153\163\141\x65\x61\147\x61\x6f\x6f\x6b\x65\x73\153"], 10, 2); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x72\x65\156\144\x65\162\x43\x68\151\x6c\144\162\145\x6e"))) { goto ykuycowuguumseuu; } $this->cecaguuoecmccuse("\162\x65\156\144\145\162\137{$ymqmyyeuycgmigyo}\137\x63\x68\151\x6c\x64\162\x65\156", [$this, $qgciuiagkkguykgs], 10, 2); ykuycowuguumseuu: } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if ($this->register) { goto qugsgsscqyikugyc; } $this->register = new RegisterPost(); qugsgsscqyikugyc: return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post))) { goto saycoceqywiekqsi; } $ocogsiouoiuuguym = explode("\x2d", $seumokooiykcomco->squyiyimquqicqke("\x59\x2d\x6d\x2d\x64", $post, false)); $scuukmeowggaqeea = ["\45\x70\157\163\164\137\151\144\45" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\45\160\x6f\163\x74\156\x61\x6d\x65\x25" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\x25\171\x65\141\x72\x25" => $ocogsiouoiuuguym[0], "\45\x6d\x6f\x6e\164\x68\156\165\x6d\x25" => $ocogsiouoiuuguym[1], "\x25\144\141\171\45" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); uccuykggugcmiyam: } gskaqcgccswmuqsy: saycoceqywiekqsi: return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if (!$qkweikswegyciaie instanceof MetaBox) { goto sqaowueaequoigsa; } $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); sqaowueaequoigsa: $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if ($this->metaBoxes) { goto eqmauwqqowsiwaue; } $this->qyecwywaoyamkmci(); eqmauwqqowsiwaue: return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if (!($ugugagoguiycqeys = $this->aqygoeiikwkmkyke())) { goto yuyiqaawwgaywgqo; } if (count($wkkweuacukumqmya) > 2) { goto waycokyiesmqgqcg; } $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); goto yqkyoaiwcyqeaqwu; waycokyiesmqgqcg: $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); yqkyoaiwcyqeaqwu: yuyiqaawwgaywgqo: return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto wscikmsmwmocsqeu; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { goto oegaywiwywuyksaq; } if (!($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu)) { goto ysaumykuimqigeqa; } $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); ysaumykuimqigeqa: goto eyskqaccgeomqmyw; oegaywiwywuyksaq: $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); eyskqaccgeomqmyw: if (!$ikgwqyuyckaewsow) { goto uiowwckamqucksim; } $sogksuscggsicmac[] = $ikgwqyuyckaewsow; uiowwckamqucksim: qmiqicgscsuoyeqo: } kkogaccoqmsmmkmo: $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); wscikmsmwmocsqeu: return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis())) { goto pssquaaiioygwqoq; } if (is_array($icwicymcioeyeyek)) { goto icawmkaswkmwicsa; } $icwicymcioeyeyek = []; icawmkaswkmwicsa: $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto ykiyuciecskusaae; } [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { goto imsgusweocmiyygi; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; goto qwueqigcisoogaec; imsgusweocmiyygi: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; qwueqigcisoogaec: foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wgmeyycmqioioaqc; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { goto weuueokkumksgaeo; } $uusmaiomayssaecw = $aokagokqyuysuksm; goto igckskemqkqueukg; weuueokkumksgaeo: $uusmaiomayssaecw = "{$aokagokqyuysuksm}\137\x6d\x65\x74\x61\x64\141\x74\x61"; igckskemqkqueukg: $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; wgmeyycmqioioaqc: csoeisssoumqqeoa: } kmeekqukcecuscye: ykiyuciecskusaae: pssquaaiioygwqoq: return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aoaiwceqgsckygsg()) { goto momgmqemgcasyuqq; } $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if ($yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { goto ucugeysomcyceyos; } $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); ucugeysomcyceyos: momgmqemgcasyuqq: $this->register(); global $wp_rewrite; if (!($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis()))) { goto qmuikumqukcyaeqa; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); qmuikumqukcyaeqa: if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto imaiuooqwwokwemw; } $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\x61\144\x6d\151\x6e\111\x6e\151\164"); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { goto keyiswqkmqqquosw; } $this->qyecwywaoyamkmci(); keyiswqkmqqquosw: imaiuooqwwokwemw: } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { goto gimsiyauegmikyka; } $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto kuymgsewmeoimeuq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (!is_array($qkweikswegyciaie)) { goto oaseseemoaqcgqeu; } $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\145\x71\165\145\147\163\x6b\x6b\x65\x65\x6d\145\x6d\147\x79\145"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); oaseseemoaqcgqeu: mioaoacqueiyueak: } mioqycmmeucswoms: kuymgsewmeoimeuq: gimsiyauegmikyka: } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto wamgcqkaieummksu; } [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { goto kisuswmyqsocukgk; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; goto wisaekiyyweeemuy; kisuswmyqsocukgk: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; wisaekiyyweeemuy: $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { goto asueqykmkoaimguq; } if ($aiowsaccomcoikus instanceof Field) { goto meegaqaesckqmyec; } goto emqmqkeygumaasam; goto scccyaiaggeasgqg; meegaqaesckqmyec: $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski]; scccyaiaggeasgqg: goto iyocimuyeemkaaso; asueqykmkoaimguq: $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; iyocimuyeemkaaso: if ($eqgoocgaqwqcimie) { goto isaouwiaamimceeg; } $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); goto kcwyeqmysgqkoqcm; isaouwiaamimceeg: $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); kcwyeqmysgqkoqcm: $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); emqmqkeygumaasam: } aosasoogesueygak: wamgcqkaieummksu: } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if (!($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\x61\162\x67\163\56\146\151\145\154\144\x73"))) { goto mwgaaiaswusakkaq; } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\x63\154\141\163\x73" => "\160\x6f\163\x74\x2d{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\55\155\x65\164\141\144\x61\164\x61\x2d\146\x69\145\154\144\163"]); mwgaaiaswusakkaq: } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { goto emgssiqceagusgyg; } if (!$this->cukiusasccucgwqc()) { goto oeosugomyqyekmuq; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x73\151\156\147\x6c\145"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto gooqkmwgsmseuiwq; } $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; gooqkmwgsmseuiwq: oeosugomyqyekmuq: goto ysusaysykymegguk; emgssiqceagusgyg: $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x61\x72\x63\x68\151\166\x65"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto ugowqoisymsioeye; } $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; ugowqoisymsioeye: ysusaysykymegguk: return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) { goto csskguekqcwcmocu; } if (!($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe))) { goto oaciskoioaecgwee; } if (!(false === strpos($wkaqekwwgqsqwcoi, "\144\x61\163\x68\x69\143\157\x6e\163\55") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi))) { goto yskswskmsgoouyco; } $wkaqekwwgqsqwcoi = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); yskswskmsgoouyco: $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; oaciskoioaecgwee: $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); csskguekqcwcmocu: } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!property_exists($this, $oaukocmsckciqaok)) { goto mmusoowesqcmuqew; } $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); mmusoowesqcmuqew: } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) { goto wkwkeicwosmkcygc; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\45\163\40\165\x70\144\x61\x74\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\x43\x75\x73\x74\x6f\155\x20\x66\151\x65\x6c\x64\40\x75\160\144\x61\x74\145\x64\56", PR__CMN__FOUNDATION), 3 => __("\x43\x75\163\x74\157\155\x20\x66\151\145\154\144\40\x64\145\154\x65\x74\x65\x64\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\45\163\40\165\160\x64\141\164\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\162\x65\x76\151\163\x69\157\x6e"]) ? sprintf(__("\x25\163\x20\162\x65\163\164\x6f\162\145\x64\40\164\x6f\x20\162\x65\x76\x69\163\151\x6f\156\40\146\x72\157\155\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\145\166\x69\163\151\x6f\x6e"], false)) : false, 6 => sprintf(__("\45\x73\40\x70\x75\142\x6c\151\x73\x68\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\x25\x73\x20\163\x61\166\x65\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\45\163\40\x73\x75\142\155\x69\x74\x74\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\45\61\44\163\40\x73\x63\x68\x65\x64\x75\x6c\x65\x64\x20\146\157\162\72\x20\x25\62\44\163\56", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\x20\x6a\x2c\x20\x59\x20\100\x20\x47\72\x69", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\45\163\40\x64\x72\141\146\x74\x20\165\x70\144\x61\164\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\126\x69\x65\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x70\162\x65\x76\x69\x65\167", "\x74\x72\x75\145", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x50\x72\145\x76\x69\x65\x77\40\45\x73", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\x5f\x62\154\141\156\x6b"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; wkwkeicwosmkcygc: return $wumguikkgaigkoee; } }
