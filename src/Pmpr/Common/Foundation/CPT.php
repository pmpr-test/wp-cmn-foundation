<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { goto uiowwckamqucksim; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if (!$post) { goto eyskqaccgeomqmyw; } $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { goto ysaumykuimqigeqa; } if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { goto qmiqicgscsuoyeqo; } $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); qmiqicgscsuoyeqo: goto oegaywiwywuyksaq; ysaumykuimqigeqa: $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); oegaywiwywuyksaq: kkogaccoqmsmmkmo: } yuyiqaawwgaywgqo: eyskqaccgeomqmyw: goto wscikmsmwmocsqeu; uiowwckamqucksim: $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aakmagwggmkoiiyu()) { goto waycokyiesmqgqcg; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); waycokyiesmqgqcg: if ($yyksucsgisomecgg->meqceykmywmqgoym()) { goto yqkyoaiwcyqeaqwu; } $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\x25\x73\40\160\157\x73\x74\40\x74\171\160\145", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); yqkyoaiwcyqeaqwu: parent::__construct(); wscikmsmwmocsqeu: } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\151\x6e\151\164"], 0)->qcsmikeggeemccuu("\x61\144\x64\x5f\x6d\x65\x74\x61\x5f\142\x6f\x78\145\x73", [$this, "\167\141\x63\x65\155\x6b\161\x6d\x69\x77\x75\x71\157\165\147\141"])->qcsmikeggeemccuu("\141\146\164\x65\162\x5f\163\x77\x69\x74\x63\150\x5f\164\x68\x65\x6d\145", [$this, "\153\x6d\167\141\165\141\141\143\155\x67\x65\161\141\153\x71\147"])->qcsmikeggeemccuu("\x73\141\166\145\137\x70\x6f\163\x74\137{$ymqmyyeuycgmigyo}", [$this, "\153\147\x73\x6f\x63\151\x77\167\x6f\151\x6f\x63\165\x71\141\x67"])->qcsmikeggeemccuu("\x70\x6f\x73\x74\x5f\x74\171\x70\145\x5f\x6c\x69\156\153", [$this, "\145\147\x79\x79\167\155\x69\x79\x75\x63\x71\157\x6b\x75\143\x6b"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\160\157\163\x74\137\x75\x70\144\x61\164\145\144\x5f\x6d\145\163\x73\x61\147\145\163", [$this, "\x70\155\x69\x77\153\167\153\171\x67\x61\145\167\x69\143\x71\x73"])->cecaguuoecmccuse("\163\x75\142\164\151\164\x6c\x65\137\166\x69\145\x77\137\163\x75\160\x70\x6f\x72\164\x65\x64", [$this, "\157\x77\171\x63\x6d\145\163\145\x65\151\153\x63\x61\x71\x77\153"])->cecaguuoecmccuse("\155\141\x6e\141\147\x65\x5f{$ymqmyyeuycgmigyo}\x5f\160\157\x73\164\x73\x5f\143\x6f\x6c\x75\155\156\163", [$this, "\x6b\x67\x6f\147\157\143\x63\141\x69\x6d\x75\171\x77\163\x6f\171"])->cecaguuoecmccuse("\x6d\x61\156\x61\147\145\x5f{$ymqmyyeuycgmigyo}\x5f\160\157\163\x74\x73\x5f\x63\165\x73\164\x6f\x6d\137\x63\x6f\154\165\x6d\156", [$this, "\x65\x67\x71\153\143\x79\145\x71\157\x77\167\171\x69\x61\155\x63"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\137\160\141\147\x69\156\x61\x74\151\157\156\x5f\x69\x6e\146\x6f", [$this, "\143\147\x71\x79\x71\x69\x69\163\165\x63\x6b\x79\171\x75\x65\163"])->aqaqisyssqeomwom("\147\x65\164\x5f{$ymqmyyeuycgmigyo}\137\160\157\x73\x74\x73", [$this, "\x69\x79\163\163\x67\x6f\x69\167\147\x77\x79\x67\145\x61\143\x67"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\x5f{$ymqmyyeuycgmigyo}\x5f\x70\157\163\x74\x5f\144\x61\164\x61", [$this, "\155\161\167\x61\x71\143\x6b\145\151\171\161\161\x6f\x69\x69\x77"], 10, 2)->aqaqisyssqeomwom("\164\145\155\x70\154\x61\x74\x65\x5f\150\151\145\x72\141\x72\x63\150\x79\137\x74\145\x6d\x70\x6c\141\164\145\x73", [$this, "\165\153\x67\151\153\151\163\153\165\157\x73\165\x6d\x71\x63\x71"], 10, 2)->aqaqisyssqeomwom("\x74\x65\155\x70\154\x61\164\x65\137\150\151\x65\x72\141\x72\x63\x68\171\137\160\x61\x72\141\x6d\145\x74\145\x72\x73", [$this, "\151\x61\141\153\x73\141\x65\x61\x67\x61\157\157\153\x65\163\x6b"], 10, 2); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x72\145\156\144\x65\x72\x43\x68\x69\154\144\x72\x65\156"))) { goto icawmkaswkmwicsa; } $this->cecaguuoecmccuse("\x72\x65\x6e\x64\145\x72\x5f{$ymqmyyeuycgmigyo}\x5f\x63\150\151\x6c\144\x72\145\156", [$this, $qgciuiagkkguykgs], 10, 2); icawmkaswkmwicsa: } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if ($this->register) { goto imsgusweocmiyygi; } $this->register = new RegisterPost(); imsgusweocmiyygi: return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post))) { goto csoeisssoumqqeoa; } $ocogsiouoiuuguym = explode("\x2d", $seumokooiykcomco->squyiyimquqicqke("\x59\55\155\55\144", $post, false)); $scuukmeowggaqeea = ["\45\x70\157\x73\164\137\151\x64\45" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\45\x70\x6f\x73\164\x6e\x61\x6d\x65\x25" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\x25\171\x65\141\x72\x25" => $ocogsiouoiuuguym[0], "\45\155\157\x6e\164\150\x6e\x75\155\x25" => $ocogsiouoiuuguym[1], "\45\x64\x61\x79\x25" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); kmeekqukcecuscye: } qwueqigcisoogaec: csoeisssoumqqeoa: return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if (!$qkweikswegyciaie instanceof MetaBox) { goto weuueokkumksgaeo; } $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); weuueokkumksgaeo: $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if ($this->metaBoxes) { goto igckskemqkqueukg; } $this->qyecwywaoyamkmci(); igckskemqkqueukg: return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if (!($ugugagoguiycqeys = $this->aqygoeiikwkmkyke())) { goto pssquaaiioygwqoq; } if (count($wkkweuacukumqmya) > 2) { goto wgmeyycmqioioaqc; } $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); goto ykiyuciecskusaae; wgmeyycmqioioaqc: $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); ykiyuciecskusaae: pssquaaiioygwqoq: return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto mioaoacqueiyueak; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { goto keyiswqkmqqquosw; } if (!($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu)) { goto qmuikumqukcyaeqa; } $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); qmuikumqukcyaeqa: goto imaiuooqwwokwemw; keyiswqkmqqquosw: $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); imaiuooqwwokwemw: if (!$ikgwqyuyckaewsow) { goto mioqycmmeucswoms; } $sogksuscggsicmac[] = $ikgwqyuyckaewsow; mioqycmmeucswoms: momgmqemgcasyuqq: } ucugeysomcyceyos: $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); mioaoacqueiyueak: return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis())) { goto asueqykmkoaimguq; } if (is_array($icwicymcioeyeyek)) { goto oaseseemoaqcgqeu; } $icwicymcioeyeyek = []; oaseseemoaqcgqeu: $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto scccyaiaggeasgqg; } [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { goto kuymgsewmeoimeuq; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; goto gimsiyauegmikyka; kuymgsewmeoimeuq: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; gimsiyauegmikyka: foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto meegaqaesckqmyec; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { goto aosasoogesueygak; } $uusmaiomayssaecw = $aokagokqyuysuksm; goto emqmqkeygumaasam; aosasoogesueygak: $uusmaiomayssaecw = "{$aokagokqyuysuksm}\137\x6d\145\164\141\144\x61\x74\x61"; emqmqkeygumaasam: $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; meegaqaesckqmyec: wisaekiyyweeemuy: } kisuswmyqsocukgk: scccyaiaggeasgqg: asueqykmkoaimguq: return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aoaiwceqgsckygsg()) { goto isaouwiaamimceeg; } $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if ($yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { goto iyocimuyeemkaaso; } $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); iyocimuyeemkaaso: isaouwiaamimceeg: $this->register(); global $wp_rewrite; if (!($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis()))) { goto kcwyeqmysgqkoqcm; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); kcwyeqmysgqkoqcm: if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto mwgaaiaswusakkaq; } $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\141\x64\155\x69\156\111\x6e\151\x74"); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { goto wamgcqkaieummksu; } $this->qyecwywaoyamkmci(); wamgcqkaieummksu: mwgaaiaswusakkaq: } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { goto ysusaysykymegguk; } $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto emgssiqceagusgyg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (!is_array($qkweikswegyciaie)) { goto oeosugomyqyekmuq; } $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\145\161\165\145\147\163\153\153\x65\145\155\x65\155\147\x79\x65"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); oeosugomyqyekmuq: gooqkmwgsmseuiwq: } ugowqoisymsioeye: emgssiqceagusgyg: ysusaysykymegguk: } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto amkcomscieegkygc; } [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { goto yskswskmsgoouyco; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; goto oaciskoioaecgwee; yskswskmsgoouyco: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; oaciskoioaecgwee: $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { goto yuoyeeuqqaockyqw; } if ($aiowsaccomcoikus instanceof Field) { goto wkwkeicwosmkcygc; } goto mmusoowesqcmuqew; goto ugcyukgoaiiysymc; wkwkeicwosmkcygc: $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski]; ugcyukgoaiiysymc: goto kygcymkakucoeock; yuoyeeuqqaockyqw: $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; kygcymkakucoeock: if ($eqgoocgaqwqcimie) { goto qkiqquymecyoouki; } $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); goto iqukigoyiqgcggue; qkiqquymecyoouki: $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); iqukigoyiqgcggue: $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); mmusoowesqcmuqew: } csskguekqcwcmocu: amkcomscieegkygc: } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if (!($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\141\x72\x67\163\x2e\x66\151\x65\154\x64\x73"))) { goto uugekiumuwemyuyc; } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\x63\x6c\x61\163\x73" => "\160\x6f\x73\x74\x2d{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\55\x6d\145\164\141\x64\141\164\x61\x2d\146\151\145\154\x64\163"]); uugekiumuwemyuyc: } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { goto giiucsyqgcooaima; } if (!$this->cukiusasccucgwqc()) { goto qcywwqceiqogcoyo; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\163\x69\156\x67\154\145"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto osoqssymqqoqcuky; } $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; osoqssymqqoqcuky: qcywwqceiqogcoyo: goto awikkaqmmuqkukma; giiucsyqgcooaima: $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x61\162\143\x68\x69\x76\145"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto qoameasiqwaqgmca; } $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; qoameasiqwaqgmca: awikkaqmmuqkukma: return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) { goto uqkqmseoeemyaqck; } if (!($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe))) { goto mieeugiewckceagc; } if (!(false === strpos($wkaqekwwgqsqwcoi, "\x64\x61\163\x68\151\x63\x6f\156\163\55") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi))) { goto uckeuuaqimqamuyc; } $wkaqekwwgqsqwcoi = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); uckeuuaqimqamuyc: $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; mieeugiewckceagc: $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); uqkqmseoeemyaqck: } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!property_exists($this, $oaukocmsckciqaok)) { goto cceyoumkiicaguio; } $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); cceyoumkiicaguio: } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) { goto yayykakkyeoieicm; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\45\163\40\x75\160\144\x61\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\103\x75\x73\x74\x6f\155\x20\x66\151\145\x6c\144\x20\x75\x70\x64\x61\x74\145\144\x2e", PR__CMN__FOUNDATION), 3 => __("\x43\x75\x73\164\157\155\x20\146\x69\x65\x6c\x64\40\144\145\154\145\164\145\x64\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\45\163\40\165\160\x64\141\164\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\162\145\x76\x69\163\151\x6f\x6e"]) ? sprintf(__("\45\163\40\162\x65\x73\x74\x6f\162\145\x64\x20\x74\157\40\162\x65\x76\151\x73\x69\x6f\156\40\146\162\157\x6d\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\145\x76\151\163\151\157\x6e"], false)) : false, 6 => sprintf(__("\45\x73\40\160\x75\142\154\x69\163\x68\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\x25\163\x20\x73\x61\x76\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\45\x73\40\163\x75\x62\155\151\164\164\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\x25\61\44\x73\40\163\x63\150\x65\144\165\154\145\x64\x20\146\157\x72\72\40\x25\x32\x24\x73\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\x20\152\54\x20\131\40\x40\x20\x47\72\151", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\45\163\x20\144\162\x61\x66\x74\x20\165\160\144\x61\164\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x56\151\x65\x77\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x70\162\145\x76\151\x65\x77", "\164\162\165\145", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x50\162\x65\166\151\145\x77\40\x25\163", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\137\142\154\141\x6e\153"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; yayykakkyeoieicm: return $wumguikkgaigkoee; } }
