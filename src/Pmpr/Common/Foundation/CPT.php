<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { goto omgqccwciyuekagc; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if (!$post) { goto wwagacmausicisuq; } $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { goto somiowsyicsqgggg; } if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { goto egcsgekkgiikcmsc; } $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); egcsgekkgiikcmsc: goto aoyasgammyaegmqk; somiowsyicsqgggg: $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); aoyasgammyaegmqk: cwcegeayeuuqccgs: } ygasycygmaumayys: wwagacmausicisuq: goto wuiecqogyoemkmyo; omgqccwciyuekagc: $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aakmagwggmkoiiyu()) { goto mkqikqqsikqoqgwy; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); mkqikqqsikqoqgwy: if ($yyksucsgisomecgg->meqceykmywmqgoym()) { goto omusesiokggskasg; } $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\45\x73\x20\160\x6f\x73\x74\40\164\x79\160\x65", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); omusesiokggskasg: parent::__construct(); wuiecqogyoemkmyo: } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\x6e\151\x74"], 0)->qcsmikeggeemccuu("\141\x64\144\x5f\155\145\x74\141\x5f\x62\157\170\x65\163", [$this, "\167\x61\x63\145\155\x6b\x71\155\x69\167\x75\x71\x6f\x75\x67\141"])->qcsmikeggeemccuu("\x61\146\x74\145\x72\x5f\x73\x77\x69\x74\143\x68\x5f\164\x68\x65\x6d\145", [$this, "\x6b\x6d\167\141\x75\141\x61\143\x6d\x67\145\161\x61\153\x71\147"])->qcsmikeggeemccuu("\163\x61\166\145\x5f\160\157\x73\x74\137{$ymqmyyeuycgmigyo}", [$this, "\153\x67\x73\157\x63\x69\x77\167\157\x69\157\x63\165\161\x61\147"])->qcsmikeggeemccuu("\x70\157\163\x74\x5f\164\171\160\145\x5f\x6c\151\156\153", [$this, "\145\x67\171\x79\167\155\151\x79\x75\x63\x71\x6f\153\165\x63\153"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\160\x6f\163\164\x5f\165\160\144\x61\x74\145\144\137\155\145\x73\x73\141\x67\145\x73", [$this, "\160\x6d\151\167\153\x77\153\x79\147\x61\145\167\151\143\161\163"])->cecaguuoecmccuse("\163\165\142\164\151\x74\x6c\x65\137\166\151\145\167\x5f\163\x75\160\160\x6f\x72\164\145\144", [$this, "\157\x77\171\143\x6d\145\x73\x65\145\151\x6b\143\x61\x71\x77\153"])->cecaguuoecmccuse("\155\141\156\141\147\x65\137{$ymqmyyeuycgmigyo}\x5f\x70\157\x73\164\x73\137\143\157\x6c\165\155\x6e\x73", [$this, "\x6b\x67\157\147\157\x63\143\x61\x69\x6d\165\x79\x77\x73\x6f\x79"])->cecaguuoecmccuse("\x6d\x61\x6e\141\x67\145\x5f{$ymqmyyeuycgmigyo}\x5f\160\x6f\x73\164\163\137\x63\165\163\164\x6f\155\137\x63\x6f\x6c\x75\x6d\x6e", [$this, "\145\147\161\153\x63\171\x65\x71\x6f\x77\x77\171\x69\141\x6d\x63"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\137\160\141\147\151\x6e\x61\164\151\157\156\x5f\151\156\x66\x6f", [$this, "\143\147\161\171\x71\151\151\x73\x75\143\153\x79\171\165\x65\163"])->aqaqisyssqeomwom("\x67\145\164\x5f{$ymqmyyeuycgmigyo}\x5f\x70\x6f\163\164\x73", [$this, "\151\x79\x73\163\x67\x6f\x69\167\x67\x77\171\x67\145\141\143\147"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\x5f{$ymqmyyeuycgmigyo}\137\x70\157\x73\x74\137\x64\141\x74\x61", [$this, "\155\x71\x77\141\161\x63\x6b\145\x69\x79\x71\x71\157\x69\151\167"], 10, 2)->aqaqisyssqeomwom("\x74\x65\155\160\x6c\141\164\x65\137\150\x69\145\x72\141\162\143\x68\x79\x5f\164\145\x6d\160\154\x61\164\145\163", [$this, "\165\x6b\147\x69\x6b\151\x73\x6b\165\157\163\165\155\161\143\x71"], 10, 2)->aqaqisyssqeomwom("\x74\145\x6d\160\154\141\x74\145\137\150\151\x65\x72\x61\162\x63\x68\x79\137\x70\141\x72\141\x6d\145\164\x65\x72\163", [$this, "\x69\141\x61\x6b\163\x61\x65\x61\147\141\x6f\157\x6b\x65\x73\x6b"], 10, 2); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\162\145\156\144\145\x72\x43\150\x69\x6c\x64\162\145\x6e"))) { goto nmkyycyeioimqmcc; } $this->cecaguuoecmccuse("\162\x65\x6e\144\145\162\x5f{$ymqmyyeuycgmigyo}\137\x63\150\151\154\144\x72\x65\x6e", [$this, $qgciuiagkkguykgs], 10, 2); nmkyycyeioimqmcc: } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if ($this->register) { goto yoggkcicgggcyesq; } $this->register = new RegisterPost(); yoggkcicgggcyesq: return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post))) { goto igkaiscayyickgkg; } $ocogsiouoiuuguym = explode("\55", $seumokooiykcomco->squyiyimquqicqke("\x59\55\x6d\x2d\144", $post, false)); $scuukmeowggaqeea = ["\x25\x70\x6f\163\164\137\x69\x64\x25" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\x25\x70\x6f\163\x74\156\x61\155\x65\45" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\45\x79\x65\x61\162\45" => $ocogsiouoiuuguym[0], "\45\x6d\157\x6e\x74\150\x6e\x75\x6d\45" => $ocogsiouoiuuguym[1], "\45\x64\x61\x79\x25" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); eacucucugqmmwees: } uqucqgwcgoqomyuk: igkaiscayyickgkg: return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if (!$qkweikswegyciaie instanceof MetaBox) { goto cmkiiseesikwqgou; } $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); cmkiiseesikwqgou: $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if ($this->metaBoxes) { goto kwyiqscekoommuog; } $this->qyecwywaoyamkmci(); kwyiqscekoommuog: return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if (!($ugugagoguiycqeys = $this->aqygoeiikwkmkyke())) { goto yauywgkiwqgwmoge; } if (count($wkkweuacukumqmya) > 2) { goto geuasysqogwouqaa; } $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); goto uwoyauwaiqakumuy; geuasysqogwouqaa: $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); uwoyauwaiqakumuy: yauywgkiwqgwmoge: return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto awqyqyqeqkciygcg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { goto cskuqsmksmimaewq; } if (!($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu)) { goto yawqcawaywkgqkkq; } $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); yawqcawaywkgqkkq: goto macuoqyigoeqkkwa; cskuqsmksmimaewq: $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); macuoqyigoeqkkwa: if (!$ikgwqyuyckaewsow) { goto asgweagmgkwuaeey; } $sogksuscggsicmac[] = $ikgwqyuyckaewsow; asgweagmgkwuaeey: ecoikiciouuikmgs: } aaiwsawyuaucyeas: $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); awqyqyqeqkciygcg: return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis())) { goto caeakwsemagcwswc; } if (is_array($icwicymcioeyeyek)) { goto eakqkewcgqyewkee; } $icwicymcioeyeyek = []; eakqkewcgqyewkee: $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto waukqcouoysuesec; } [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { goto ggmkcyyawgwomqmo; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; goto esyqewcegauewswi; ggmkcyyawgwomqmo: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; esyqewcegauewswi: foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ikaeueycwmsyseia; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { goto eyeayegkquuoikii; } $uusmaiomayssaecw = $aokagokqyuysuksm; goto omwseuoiosmmksik; eyeayegkquuoikii: $uusmaiomayssaecw = "{$aokagokqyuysuksm}\x5f\x6d\x65\x74\x61\144\141\x74\x61"; omwseuoiosmmksik: $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; ikaeueycwmsyseia: muamuiocsyikcmou: } keyoygyawmmuiysi: waukqcouoysuesec: caeakwsemagcwswc: return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aoaiwceqgsckygsg()) { goto qouwgawyockmkiqw; } $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if ($yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { goto qwcmwosyocyqyomq; } $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); qwcmwosyocyqyomq: qouwgawyockmkiqw: $this->register(); global $wp_rewrite; if (!($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis()))) { goto wqeeammwsuusmyum; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); wqeeammwsuusmyum: if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto wwuoaqqiaaguyyiu; } $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\x61\144\155\x69\x6e\111\156\151\x74"); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { goto gsikauqawyoasewq; } $this->qyecwywaoyamkmci(); gsikauqawyoasewq: wwuoaqqiaaguyyiu: } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { goto wwswgqyqcewsqkek; } $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto ueuqqoamggagceok; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (!is_array($qkweikswegyciaie)) { goto kwywuqumeioqgcme; } $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\145\x71\165\x65\147\163\153\153\145\x65\155\x65\x6d\147\171\x65"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); kwywuqumeioqgcme: wwuiqmaaemswyeas: } uccmgkcygwcoqqmc: ueuqqoamggagceok: wwswgqyqcewsqkek: } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto kokqmecseosgceak; } [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { goto qcsiiiieegyokook; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; goto iaeuoauagoisyium; qcsiiiieegyokook: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; iaeuoauagoisyium: $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { goto uwkuaykqqqkwgcey; } if ($aiowsaccomcoikus instanceof Field) { goto suaiaeakuwkeaggc; } goto caqisoicuegsemyy; goto igyikaemwiwqyeqq; suaiaeakuwkeaggc: $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski]; igyikaemwiwqyeqq: goto ceyyuykckoayuosu; uwkuaykqqqkwgcey: $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; ceyyuykckoayuosu: if ($eqgoocgaqwqcimie) { goto aumygwwssywsogem; } $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); goto gsaiaaeooukaeygk; aumygwwssywsogem: $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); gsaiaaeooukaeygk: $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); caqisoicuegsemyy: } cyiwyicwqagqigyw: kokqmecseosgceak: } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if (!($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\141\x72\x67\163\x2e\146\x69\x65\x6c\x64\x73"))) { goto swmkwwkoguyyoogq; } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\x63\154\x61\x73\x73" => "\160\x6f\x73\x74\55{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\55\155\x65\x74\141\x64\141\164\141\x2d\146\x69\x65\154\144\x73"]); swmkwwkoguyyoogq: } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { goto amegcwiaikcwyuws; } if (!$this->cukiusasccucgwqc()) { goto iuaauoycciukeqaw; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\57\x73\x69\x6e\x67\154\145"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto iiyuccyiiyoguicm; } $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; iiyuccyiiyoguicm: iuaauoycciukeqaw: goto emcskqgacoswgmog; amegcwiaikcwyuws: $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\141\162\143\x68\151\x76\x65"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto oggqgmiqwuceekqm; } $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; oggqgmiqwuceekqm: emcskqgacoswgmog: return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) { goto uismokoooeicygyy; } if (!($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe))) { goto ycsgumakqqweigca; } if (!(false === strpos($wkaqekwwgqsqwcoi, "\x64\x61\163\150\x69\143\157\x6e\x73\55") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi))) { goto guouwiieuysyiewm; } $wkaqekwwgqsqwcoi = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); guouwiieuysyiewm: $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; ycsgumakqqweigca: $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); uismokoooeicygyy: } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!property_exists($this, $oaukocmsckciqaok)) { goto soooekmauiwsaemc; } $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); soooekmauiwsaemc: } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) { goto msokmumgqigwgwwc; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\x25\x73\40\165\x70\x64\x61\164\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\103\x75\x73\164\157\155\x20\x66\151\145\x6c\x64\40\165\x70\x64\x61\x74\x65\144\56", PR__CMN__FOUNDATION), 3 => __("\x43\x75\163\164\157\x6d\40\x66\151\x65\154\x64\40\x64\x65\x6c\x65\x74\145\144\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\45\x73\40\165\x70\144\x61\x74\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\162\x65\166\x69\163\151\157\x6e"]) ? sprintf(__("\45\x73\40\x72\x65\163\164\x6f\x72\x65\144\40\x74\157\x20\x72\x65\166\151\163\151\157\x6e\x20\146\162\157\x6d\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\x76\151\163\151\x6f\x6e"], false)) : false, 6 => sprintf(__("\x25\163\x20\x70\x75\142\154\151\163\x68\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\x25\163\x20\x73\x61\166\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\x25\x73\x20\163\x75\x62\x6d\151\x74\x74\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\45\x31\44\163\40\x73\x63\x68\145\144\165\x6c\x65\x64\40\x66\x6f\x72\x3a\40\x25\x32\44\x73\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\40\152\x2c\x20\131\x20\100\x20\x47\x3a\x69", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\45\x73\40\x64\x72\x61\146\164\40\x75\x70\x64\x61\164\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x56\151\x65\x77\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\160\162\145\x76\x69\145\167", "\x74\x72\165\x65", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x50\162\145\166\151\x65\x77\x20\45\x73", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\x5f\142\154\x61\156\153"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; msokmumgqigwgwwc: return $wumguikkgaigkoee; } }
