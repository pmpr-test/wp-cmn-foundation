<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use WP_Post_Type; class CPT extends Container { protected ?int $id = 0; protected ?string $content = ''; protected ?string $title = ''; protected ?string $slug = ''; protected array $metaBoxes = []; protected ?RegisterPost $register = null; public function __construct($aokagokqyuysuksm = null) { if (!$aokagokqyuysuksm) { goto wwagacmausicisuq; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); if (!$post) { goto aoyasgammyaegmqk; } $qmcuiciekkawmmms = [Constants::egkuckyqcaygmymg => Constants::ssmskyqgcmeiayco, Constants::siwwqayqwykwqwoy => Constants::qescuiwgsyuikume, Constants::uiaeiwkkmoayqasu => Constants::ouywiegeiyuaaawo]; $gmawcgiwcmsukeiu = get_object_vars($this); foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) { goto egcsgekkgiikcmsc; } if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) { goto cwcegeayeuuqccgs; } $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie); cwcegeayeuuqccgs: goto somiowsyicsqgggg; egcsgekkgiikcmsc: $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie); somiowsyicsqgggg: ygasycygmaumayys: } omusesiokggskasg: aoyasgammyaegmqk: goto omgqccwciyuekagc; wwagacmausicisuq: $this->mgoeqkosywwaoqyw(); $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aakmagwggmkoiiyu()) { goto egukkoceuuaqqwqu; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $yyksucsgisomecgg->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this))); egukkoceuuaqqwqu: if ($yyksucsgisomecgg->meqceykmywmqgoym()) { goto mkqikqqsikqoqgwy; } $yyksucsgisomecgg->gucwmccyimoagwcm(sprintf(__("\x25\163\x20\x70\157\163\x74\x20\x74\x79\x70\x65", PR__CMN__FOUNDATION), $yyksucsgisomecgg->giiayuqckuiecosm())); mkqikqqsikqoqgwy: parent::__construct(); omgqccwciyuekagc: } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\156\x69\164"], 0)->qcsmikeggeemccuu("\141\x64\144\137\155\145\164\141\x5f\142\157\x78\145\163", [$this, "\x77\141\143\x65\155\x6b\161\x6d\151\x77\165\x71\157\165\x67\141"])->qcsmikeggeemccuu("\x61\146\164\145\162\137\163\x77\151\x74\x63\150\x5f\x74\150\x65\155\145", [$this, "\x6b\155\x77\x61\165\141\141\143\x6d\147\x65\161\x61\153\161\x67"])->qcsmikeggeemccuu("\x73\141\166\x65\137\x70\x6f\x73\164\x5f{$ymqmyyeuycgmigyo}", [$this, "\x6b\x67\163\x6f\x63\151\167\167\157\x69\x6f\x63\165\161\141\147"])->qcsmikeggeemccuu("\x70\157\163\x74\137\x74\171\x70\x65\137\x6c\x69\156\153", [$this, "\x65\147\171\171\167\155\151\x79\x75\143\x71\157\153\x75\143\x6b"], 10, 2); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\x70\x6f\x73\164\137\x75\160\144\x61\x74\145\x64\x5f\x6d\145\163\163\141\x67\x65\163", [$this, "\x70\x6d\151\x77\153\167\x6b\x79\147\x61\145\x77\x69\x63\161\x73"])->cecaguuoecmccuse("\163\x75\x62\164\x69\x74\154\145\x5f\x76\x69\145\167\x5f\x73\165\160\x70\157\162\x74\145\144", [$this, "\157\x77\x79\x63\155\x65\x73\x65\145\151\153\143\x61\161\167\153"])->cecaguuoecmccuse("\x6d\x61\156\x61\147\145\x5f{$ymqmyyeuycgmigyo}\137\160\157\x73\x74\163\x5f\x63\157\x6c\165\155\x6e\x73", [$this, "\153\147\x6f\x67\157\143\143\x61\151\155\x75\171\167\x73\157\x79"])->cecaguuoecmccuse("\x6d\141\x6e\141\x67\x65\137{$ymqmyyeuycgmigyo}\137\160\157\163\164\163\137\x63\x75\163\x74\x6f\x6d\x5f\143\x6f\154\165\155\x6e", [$this, "\x65\x67\161\153\x63\x79\145\x71\157\x77\167\x79\x69\141\x6d\143"], 10, 2); $this->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}\x5f\160\x61\x67\x69\x6e\x61\164\151\x6f\156\x5f\151\156\146\157", [$this, "\143\147\161\171\x71\x69\151\x73\165\x63\153\x79\x79\165\145\163"])->aqaqisyssqeomwom("\147\x65\x74\137{$ymqmyyeuycgmigyo}\x5f\x70\157\x73\164\163", [$this, "\151\171\163\163\x67\157\151\x77\147\x77\171\x67\145\x61\x63\147"], 10, 2)->aqaqisyssqeomwom("\147\x65\x74\137{$ymqmyyeuycgmigyo}\137\x70\157\x73\x74\x5f\x64\141\164\141", [$this, "\x6d\161\167\141\x71\143\x6b\x65\151\x79\x71\161\x6f\x69\x69\167"], 10, 2)->aqaqisyssqeomwom("\164\x65\155\160\x6c\141\164\145\137\x68\x69\145\162\141\x72\x63\150\171\x5f\164\x65\x6d\160\154\141\x74\x65\163", [$this, "\x75\153\x67\x69\x6b\x69\x73\x6b\x75\157\x73\x75\x6d\x71\143\161"], 10, 2)->aqaqisyssqeomwom("\164\x65\x6d\160\x6c\141\164\145\137\x68\151\145\162\x61\162\143\150\171\x5f\x70\141\x72\x61\x6d\145\x74\x65\x72\x73", [$this, "\151\x61\141\x6b\x73\x61\145\141\x67\141\157\x6f\x6b\x65\x73\153"], 10, 2); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\162\x65\x6e\x64\145\x72\103\150\151\x6c\144\162\145\x6e"))) { goto wuiecqogyoemkmyo; } $this->cecaguuoecmccuse("\162\x65\x6e\144\145\162\137{$ymqmyyeuycgmigyo}\x5f\143\x68\x69\154\x64\162\x65\x6e", [$this, $qgciuiagkkguykgs], 10, 2); wuiecqogyoemkmyo: } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oyeskqayoscwciem() : RegisterPost { if ($this->register) { goto nmkyycyeioimqmcc; } $this->register = new RegisterPost(); nmkyycyeioimqmcc: return $this->register; } public function egyywmiyucqokuck($iwywmkygwewiamwm, $post = 0) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $this->miwqiiqeegeqcwis() === $seumokooiykcomco->gueasuouwqysmomu($post))) { goto eacucucugqmmwees; } $ocogsiouoiuuguym = explode("\55", $seumokooiykcomco->squyiyimquqicqke("\131\x2d\x6d\x2d\144", $post, false)); $scuukmeowggaqeea = ["\45\x70\x6f\163\164\x5f\x69\144\x25" => $seumokooiykcomco->iooowgsqoyqseyuu($post, true), "\45\160\157\163\164\156\x61\155\145\x25" => $seumokooiykcomco->aqcogscycyycgkuq($post), "\45\171\x65\x61\x72\x25" => $ocogsiouoiuuguym[0], "\45\x6d\157\156\164\x68\x6e\x75\155\x25" => $ocogsiouoiuuguym[1], "\x25\x64\x61\171\45" => $ocogsiouoiuuguym[2]]; foreach ($scuukmeowggaqeea as $igqsaukqcqscimok => $eqgoocgaqwqcimie) { $iwywmkygwewiamwm = str_replace($igqsaukqcqscimok, $eqgoocgaqwqcimie, $iwywmkygwewiamwm); uqucqgwcgoqomyuk: } yoggkcicgggcyesq: eacucucugqmmwees: return $iwywmkygwewiamwm; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if (!$qkweikswegyciaie instanceof MetaBox) { goto igkaiscayyickgkg; } $qkweikswegyciaie->pknsqyeeymygoqqu($this->miwqiiqeegeqcwis())->register(); igkaiscayyickgkg: $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if ($this->metaBoxes) { goto cmkiiseesikwqgou; } $this->qyecwywaoyamkmci(); cmkiiseesikwqgou: return $this->metaBoxes; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($yyimiwcuegayoskq, [Constants::imywcsggckkcywgk => 1, Constants::yusuiaeueqwieqqq => 1, Constants::goqgcigmiawyauai => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()]); $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->wsqeykgqiemswysa($this->miwqiiqeegeqcwis()); $yyimiwcuegayoskq[Constants::yusuiaeueqwieqqq] = (int) ceil($gaeqamemwmwsyukm / max(1, $yyimiwcuegayoskq[Constants::goqgcigmiawyauai])); return $yyimiwcuegayoskq; } public function aqygoeiikwkmkyke() : array { return []; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { } public final function kgogoccaimuywsoy($wkkweuacukumqmya = []) { if (!($ugugagoguiycqeys = $this->aqygoeiikwkmkyke())) { goto uwoyauwaiqakumuy; } if (count($wkkweuacukumqmya) > 2) { goto kwyiqscekoommuog; } $wkkweuacukumqmya = array_merge($wkkweuacukumqmya, $ugugagoguiycqeys); goto geuasysqogwouqaa; kwyiqscekoommuog: $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, $ugugagoguiycqeys, 2); geuasysqogwouqaa: uwoyauwaiqakumuy: return $wkkweuacukumqmya; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto asgweagmgkwuaeey; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { goto yawqcawaywkgqkkq; } if (!($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu)) { goto ecoikiciouuikmgs; } $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); ecoikiciouuikmgs: goto cskuqsmksmimaewq; yawqcawaywkgqkkq: $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); cskuqsmksmimaewq: if (!$ikgwqyuyckaewsow) { goto macuoqyigoeqkkwa; } $sogksuscggsicmac[] = $ikgwqyuyckaewsow; macuoqyigoeqkkwa: aaiwsawyuaucyeas: } yauywgkiwqgwmoge: $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); asgweagmgkwuaeey: return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($post && $seumokooiykcomco->gueasuouwqysmomu($post) === $this->miwqiiqeegeqcwis())) { goto waukqcouoysuesec; } if (is_array($icwicymcioeyeyek)) { goto awqyqyqeqkciygcg; } $icwicymcioeyeyek = []; awqyqyqeqkciygcg: $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto ikaeueycwmsyseia; } [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { goto eakqkewcgqyewkee; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; goto ggmkcyyawgwomqmo; eakqkewcgqyewkee: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; ggmkcyyawgwomqmo: foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto omwseuoiosmmksik; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { goto muamuiocsyikcmou; } $uusmaiomayssaecw = $aokagokqyuysuksm; goto eyeayegkquuoikii; muamuiocsyikcmou: $uusmaiomayssaecw = "{$aokagokqyuysuksm}\137\x6d\145\164\141\144\x61\x74\141"; eyeayegkquuoikii: $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; omwseuoiosmmksik: keyoygyawmmuiysi: } esyqewcegauewswi: ikaeueycwmsyseia: waukqcouoysuesec: return $icwicymcioeyeyek; } public function init() { $yyksucsgisomecgg = $this->oyeskqayoscwciem(); if ($yyksucsgisomecgg->aoaiwceqgsckygsg()) { goto qwcmwosyocyqyomq; } $yyksucsgisomecgg->wakugsseussemkka([Constants::qescuiwgsyuikume, Constants::yaiacqocwcgmooio, Constants::syooqwmkmsmgwcqw, Constants::egwoacukmsioosum]); if ($yyksucsgisomecgg->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { goto caeakwsemagcwswc; } $yyksucsgisomecgg->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->miwqiiqeegeqcwis())); caeakwsemagcwswc: qwcmwosyocyqyomq: $this->register(); global $wp_rewrite; if (!($acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis()))) { goto qouwgawyockmkiqw; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee($acqqmqmcquukaqsc); qouwgawyockmkiqw: if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gsikauqawyoasewq; } $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->waquemyyiseosamm($this, "\141\x64\x6d\151\x6e\111\156\151\x74"); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->miwqiiqeegeqcwis())) { goto wqeeammwsuusmyum; } $this->qyecwywaoyamkmci(); wqeeammwsuusmyum: gsikauqawyoasewq: } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ymqmyyeuycgmigyo)) { goto ueuqqoamggagceok; } $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if (!$uaqusiikkokccqou) { goto kwywuqumeioqgcme; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (!is_array($qkweikswegyciaie)) { goto wwuiqmaaemswyeas; } $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $ymqmyyeuycgmigyo, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, "\x65\161\x75\x65\x67\163\x6b\x6b\145\x65\x6d\x65\155\x67\x79\x65"]]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); wwuiqmaaemswyeas: uccmgkcygwcoqqmc: } wwuoaqqiaaguyyiu: kwywuqumeioqgcme: ueuqqoamggagceok: } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy())) { goto gsaiaaeooukaeygk; } [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { goto wwswgqyqcewsqkek; } $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; goto qcsiiiieegyokook; wwswgqyqcewsqkek: $ikgwqyuyckaewsow = $eaygsswawaiqcwag; qcsiiiieegyokook: $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { goto igyikaemwiwqyeqq; } if ($aiowsaccomcoikus instanceof Field) { goto caqisoicuegsemyy; } goto cyiwyicwqagqigyw; goto suaiaeakuwkeaggc; caqisoicuegsemyy: $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski]; suaiaeakuwkeaggc: goto uwkuaykqqqkwgcey; igyikaemwiwqyeqq: $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; uwkuaykqqqkwgcey: if ($eqgoocgaqwqcimie) { goto ceyyuykckoayuosu; } $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); goto aumygwwssywsogem; ceyyuykckoayuosu: $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); aumygwwssywsogem: $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); cyiwyicwqagqigyw: } iaeuoauagoisyium: gsaiaaeooukaeygk: } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if (!($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, "\x61\x72\147\x73\56\146\x69\145\x6c\144\163"))) { goto kokqmecseosgceak; } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ["\x63\x6c\x61\x73\163" => "\x70\157\163\164\55{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}\x2d\155\145\x74\141\144\x61\164\x61\55\x66\x69\145\x6c\144\x73"]); kokqmecseosgceak: } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { return $qookweymeqawmcwo; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { $aaokuekaimigoyue = $this->miwqiiqeegeqcwis(); if ($this->migkyseymeomymmy()) { goto iuaauoycciukeqaw; } if (!$this->cukiusasccucgwqc()) { goto iiyuccyiiyoguicm; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\163\151\x6e\147\154\x65"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto oggqgmiqwuceekqm; } $aquuecykqwyukece[Constants::qqoouomkeecygage][] = $qqscaoyqikuyeoaw; oggqgmiqwuceekqm: iiyuccyiiyoguicm: goto amegcwiaikcwyuws; iuaauoycciukeqaw: $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy("{$aaokuekaimigoyue}\x2f\x61\162\x63\x68\x69\x76\145"); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto swmkwwkoguyyoogq; } $aquuecykqwyukece[Constants::mswmgkkakuooukme][] = $qqscaoyqikuyeoaw; swmkwwkoguyyoogq: amegcwiaikcwyuws: return $aquuecykqwyukece; } public function register() { $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) { goto ycsgumakqqweigca; } if (!($wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::uqaoisqcoykyycwe))) { goto guouwiieuysyiewm; } if (!(false === strpos($wkaqekwwgqsqwcoi, "\144\x61\163\150\x69\143\157\x6e\163\55") && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi))) { goto emcskqgacoswgmog; } $wkaqekwwgqsqwcoi = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); emcskqgacoswgmog: $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] = $wkaqekwwgqsqwcoi; guouwiieuysyiewm: $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); ycsgumakqqweigca: } public function migkyseymeomymmy() : bool { return $this->caokeucsksukesyo()->gscioiumssogceuc()->migkyseymeomymmy($this->miwqiiqeegeqcwis()); } public function kmwauaacmgeqakqg() { $this->register(); $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->ggqucmukcaycuckk(); } public function mgoeqkosywwaoqyw() { } public function cukiusasccucgwqc() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->kccakwkaqugygwmq() && $mumyimcwkaemyyue->cukiusasccucgwqc($this->miwqiiqeegeqcwis()); } public function owycmeseeikcaqwk() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !($mumyimcwkaemyyue->migkyseymeomymmy() || $mumyimcwkaemyyue->eyokaicigoeymwoo()); } private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!property_exists($this, $oaukocmsckciqaok)) { goto uismokoooeicygyy; } $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie); uismokoooeicygyy: } public function miwqiiqeegeqcwis() : ?string { return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { return []; } public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $mksyucucyswaukig = $seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym); if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) { goto soooekmauiwsaemc; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm(); $useksmwkuswkwcqg = $mksyucucyswaukig->name; $wumguikkgaigkoee[$useksmwkuswkwcqg] = [ 0 => '', 1 => sprintf(__("\x25\163\40\x75\160\x64\x61\164\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 2 => __("\x43\x75\163\x74\157\x6d\x20\x66\151\145\x6c\x64\x20\165\x70\144\141\x74\145\x64\x2e", PR__CMN__FOUNDATION), 3 => __("\103\x75\x73\164\157\155\40\146\151\145\x6c\144\x20\144\145\x6c\x65\x74\x65\144\56", PR__CMN__FOUNDATION), 4 => sprintf(__("\x25\x73\40\x75\160\x64\x61\x74\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 5 => isset($_GET["\x72\145\x76\151\x73\x69\157\x6e"]) ? sprintf(__("\45\163\x20\x72\x65\163\164\x6f\162\x65\144\40\164\x6f\40\x72\x65\166\151\x73\x69\x6f\156\40\x66\162\x6f\x6d\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\x65\x76\x69\x73\151\157\156"], false)) : false, 6 => sprintf(__("\45\x73\40\160\165\x62\x6c\151\163\x68\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 7 => sprintf(__("\x25\163\x20\x73\x61\166\x65\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 8 => sprintf(__("\x25\163\40\x73\165\142\x6d\151\164\x74\x65\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg), 9 => sprintf(__("\45\x31\44\x73\x20\163\143\150\145\x64\x75\154\145\144\x20\146\157\162\72\x20\x25\62\44\x73\56", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\40\152\54\x20\131\40\x40\40\107\72\x69", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis(strtotime($post->post_date)))), 10 => sprintf(__("\x25\163\40\x64\x72\141\x66\164\x20\x75\x70\x64\141\x74\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg), ]; $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $ggesmiygmwcmqcsu = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\x56\x69\145\x77\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), $migiiksoiymissge); $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $ggesmiygmwcmqcsu; $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $ggesmiygmwcmqcsu; $iuoegeaieeqiqawi = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x70\162\x65\166\x69\145\167", "\x74\162\165\145", $migiiksoiymissge); $swwmqmiaquwuuauw = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf(__("\120\162\x65\x76\x69\145\x77\40\x25\x73", PR__CMN__FOUNDATION), $iuoegeaieeqiqawi), $migiiksoiymissge, [Constants::mgsccwumkcawaqcy => "\x5f\142\x6c\141\156\x6b"]); $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $swwmqmiaquwuuauw; $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $swwmqmiaquwuuauw; soooekmauiwsaemc: return $wumguikkgaigkoee; } }
