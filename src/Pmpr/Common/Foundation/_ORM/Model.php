<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM; use Exception; use Pmpr\Common\Foundation\_ORM\Database\Connection; use Pmpr\Common\Foundation\_ORM\Database\Entity; use Pmpr\Common\Foundation\_ORM\Database\Notification; use Pmpr\Common\Foundation\_ORM\Database\Repository; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\DateTime; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\File; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Database\Schema\Timestamp; use Pmpr\Common\Foundation\_ORM\Database\Migration; use Pmpr\Common\Foundation\_ORM\View\Edit; use Pmpr\Common\Foundation\_ORM\View\Index; use Pmpr\Common\Foundation\_ORM\View\ListTable; use Pmpr\Common\Foundation\_ORM\View\Show; use Pmpr\Common\Foundation\_ORM\View\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\CacheTrait; use Pmpr\Common\Foundation\Traits\LabelsTrait; use WP_Error; abstract class Model extends Common { use ArgsTrait, CacheTrait, FieldsTrait, LabelsTrait; protected string $name = ''; protected string $prefix = ''; protected array $views = []; protected array $callback = []; protected array $schemas = []; public function ikcgmcycisiccyuc() { $this->register(); if ($this->masyeqmaiuqwosei()) { goto qwisiamkmkkwucyo; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $this->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc(static::class))); qwisiamkmkkwucyo: if ($this->ogqgmqymcwsqikme()) { goto yqcusaeysomccaok; } $this->prefix = $this->akuociswqmoigkas(); yqcusaeysomccaok: $this->mcacmissyeeqkeak(Constants::ouuaeeeqeqkagcgi, true)->mcacmissyeeqkeak(Constants::wmsqekqcaciiwyoe, true)->mcacmissyeeqkeak(Constants::kqqquayqkucokyqi, true); $this->mcacmissyeeqkeak(Constants::ENTITY, Entity::class)->mcacmissyeeqkeak(Constants::qaeweykiqukcwawu, Migration::class)->mcacmissyeeqkeak(Constants::yisekuwugkikgkwm, Repository::class)->mcacmissyeeqkeak(Constants::kiecmqmgmigmomck, Connection::class); if (!$this->wuyimwscukmqqsqk(Constants::eguoukkowuumuwgi)) { goto iwkckkeimmeoquyq; } $this->mcacmissyeeqkeak(Constants::eguoukkowuumuwgi, Notification::class); iwkckkeimmeoquyq: $suckquwcuiuyiogc = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms("\120\x52\137\125\120\104\x41\x54\105\137\117\122\115\137\x44\x41\124\x41\102\101\123\x45", 0); if (!($suckquwcuiuyiogc || $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x70\162\55\x75\160\x64\x61\164\x65\x2d\157\x72\155\x2d\144\142"))) { goto masakmomqmeocqqg; } $this->geskigquisseygoc()->cucqgwmoseqakgoe(); masakmomqmeocqqg: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\137\155\145\x6e\165", [$this, "\x65\165\161\x67\167\151\x73\x63\167\x67\161\153\161\153\x65\143"]); } public function euqgwiscwgqkqkec() { $umwgoasiowmqcumw = $this->aioqieywgykaaoec(); foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $ywmkwiwkosakssii) { $wgaiuiysuegayseo = $qqomumygoacsmsie[Constants::qoquaeuooeycomks] ?? false; if (!$wgaiuiysuegayseo) { goto suqckoccuyeeymww; } $kuysccmeoqgaiumc = $this->imkyoqyocosuqasu(Constants::qsegwakiwaiyimyy); $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $wgaiuiysuegayseo, Constants::ysgwugcqguggmigq => $ywmkwiwkosakssii[Constants::ysgwugcqguggmigq], Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::wwgusigoaksqmwsm => function () use($qqomumygoacsmsie, $ywmkwiwkosakssii) { $this->kkmiwqogoaqwuswy($qqomumygoacsmsie, $ywmkwiwkosakssii); }, Constants::gqmskcacocowcwaw => $ywmkwiwkosakssii[Constants::uqaoisqcoykyycwe], Constants::wuowaiyouwecckaw => $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw], Constants::kekcgssiyagioocg => $ywmkwiwkosakssii[Constants::yiuwgggacagyeqmo], Constants::ucmueuwwcmocgmig => $ywmkwiwkosakssii[Constants::ucmueuwwcmocgmig]]); suqckoccuyeeymww: yoqsigmoyaaceqky: } yksywwikmeksikqc: } public final function kkmiwqogoaqwuswy(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) { switch ($qqomumygoacsmsie) { case Constants::weiosaewqequuyuq: $mksyucucyswaukig = new Index($this, $ywmkwiwkosakssii); goto giugwaeuwaomossq; case Constants::ieioeisgwcgysukw: $mksyucucyswaukig = new Show($this, $ywmkwiwkosakssii); goto giugwaeuwaomossq; case Constants::ukwaycqmyyuekwqg: case Constants::awysmmukegasimmq: $mksyucucyswaukig = new Edit($this, $ywmkwiwkosakssii); goto giugwaeuwaomossq; default: $mksyucucyswaukig = new View($this, $ywmkwiwkosakssii); goto giugwaeuwaomossq; } acgqaeakoyasgkku: giugwaeuwaomossq: $this->views[$qqomumygoacsmsie][Constants::ckmqoekmugkggeym] = $mksyucucyswaukig; $mksyucucyswaukig->mqyuagguukgcoeka(); $mksyucucyswaukig->render(); } public function aioqieywgykaaoec() : array { return $this->views; } public function cgswceaawqgeskua(string $qqomumygoacsmsie, string $uusmaiomayssaecw = null) { $ywmkwiwkosakssii = $this->aioqieywgykaaoec()[$qqomumygoacsmsie] ?? []; if (!$uusmaiomayssaecw) { goto sycougcyeqmeiagk; } $ywmkwiwkosakssii = $ywmkwiwkosakssii[$uusmaiomayssaecw] ?? null; sycougcyeqmeiagk: return $ywmkwiwkosakssii; } public function ecmiqywsauuoccwo(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) : self { if (!empty($this->views[$qqomumygoacsmsie])) { goto mqgeseysuwcaqwiy; } $eomymqcmcwieomke = $this->aakmagwggmkoiiyu(); if (!($qqomumygoacsmsie !== Constants::weiosaewqequuyuq)) { goto ssagcgqaucssyego; } $eomymqcmcwieomke = "{$qqomumygoacsmsie}\x5f{$eomymqcmcwieomke}"; ssagcgqaucssyego: $this->views[$qqomumygoacsmsie] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => $qqomumygoacsmsie, Constants::wuowaiyouwecckaw => $eomymqcmcwieomke, Constants::ysgwugcqguggmigq => $this->qeeuwmmksmqiuywg(), Constants::qsegwakiwaiyimyy => $this->euwycwigoeawgckq("\141\x6c\x6c\x5f\151\164\x65\155\163"), Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::yiuwgggacagyeqmo => $this->licekmysugkqeoay(Constants::yiuwgggacagyeqmo)]); mqgeseysuwcaqwiy: return $this; } public function ckwicogmemcwawmy(string $qqomumygoacsmsie, $aokagokqyuysuksm = null) { $iwywmkygwewiamwm = ''; $ywmkwiwkosakssii = $this->cgswceaawqgeskua($qqomumygoacsmsie); if (!($ywmkwiwkosakssii && !empty($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw]))) { goto cuwcsamuuqyuyqsu; } $uoomaookgsyciacm = []; if (!$aokagokqyuysuksm) { goto ekoqieigyoeyauqa; } $uoomaookgsyciacm[$this->kumuygiiqswoyasy()] = $aokagokqyuysuksm; ekoqieigyoeyauqa: $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\x6f\162\x6d\x5f\166\x69\145\167\137\154\x69\156\x6b\137\161\x75\x65\162\x69\145\163", $uoomaookgsyciacm, $qqomumygoacsmsie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $this); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw], $uoomaookgsyciacm); cuwcsamuuqyuyqsu: return $iwywmkygwewiamwm; } public function wsqomecyomgauuog() : self { return $this->igiywquyccyiaucw(Constants::kqqquayqkucokyqi, false); } public function awcggayuseoukmkw() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::kqqquayqkucokyqi); } public function ceosksssgukuoscw() : self { return $this->igiywquyccyiaucw(Constants::ouuaeeeqeqkagcgi, false); } public function amimkmoyyqiysugw() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::ouuaeeeqeqkagcgi); } public function eiweowgmaaccwocm() : self { return $this->igiywquyccyiaucw(Constants::wmsqekqcaciiwyoe, false); } public function ggswuoiywaaaqseo() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wmsqekqcaciiwyoe); } public function cgccmsewskigcuig($moqewomugocaueis = 0) : ?string { $iwywmkygwewiamwm = null; if (!($moqewomugocaueis && $this->awcggayuseoukmkw())) { goto igwkcikeyoowosoi; } $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); if ($this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { goto mimacwyuueomgwwy; } $iwywmkygwewiamwm = $this->ckwicogmemcwawmy(Constants::weiosaewqequuyuq); goto ksckqkmwiqggykke; mimacwyuueomgwwy: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); ksckqkmwiqggykke: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\157\x72\x6d\55\x61\143\x74\151\x6f\156" => Constants::DELETE, $ceiwsaacewygcsqg => $moqewomugocaueis], $iwywmkygwewiamwm); igwkcikeyoowosoi: return $iwywmkygwewiamwm; } public function hkwssiimkcysaiyo() : ?string { $ymqmyyeuycgmigyo = $this->cueaickeeoiwayou(); $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk, '')); if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) { goto iqsgossweywksoia; } $qqomumygoacsmsie = Constants::weiosaewqequuyuq; iqsgossweywksoia: return $qqomumygoacsmsie; } public function qcaekwgmiswccowk(string $qqomumygoacsmsie) : bool { return $this->hkwssiimkcysaiyo() === $qqomumygoacsmsie; } public function aoqwywcqmoqaukkq() { } public function ugmceccgwaaaigiy() : array { if (!empty($this->fields)) { goto awaqksikyomsuaeo; } $this->aoqwywcqmoqaukkq(); awaqksikyomsuaeo: return $this->fields; } public function swsaakqseuaacagq(string $ymqmyyeuycgmigyo, $ekiuyucoiagmscgy) : self { $this->callback[$ymqmyyeuycgmigyo] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi(string $ymqmyyeuycgmigyo) { return $this->callback[$ymqmyyeuycgmigyo] ?? null; } public function osgoqoeuiiiwowke(string $ymqmyyeuycgmigyo, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = true; $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ymqmyyeuycgmigyo); if (!is_callable($ekiuyucoiagmscgy)) { goto cuommomwmsackoqc; } $ksaameoqigiaoigg = $ekiuyucoiagmscgy(...$ywmkwiwkosakssii); cuommomwmsackoqc: return $ksaameoqigiaoigg; } public function uwmqacgewuauagai() { $weiysqkaieiyiuug = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$this->kcsywgyywsgqgawm()) { goto ggeoqeowscwkeumy; } $this->cquokmemekqqywgi($weiysqkaieiyiuug->omkueasmegecueyk(Constants::sugcoawcimusgaga)->eyygsasuqmommkua(0)->jyumyyugiwwiqomk(999)->aaikegqyiyeoygce("\137\137\x72\145\x74\165\x72\x6e\x5f\146\x61\x6c\163\x65")); ggeoqeowscwkeumy: } public function aeosueemgsygqese() : ?array { if (!empty($this->schemas)) { goto qyeswawykmasuqye; } $this->uwmqacgewuauagai(); qyeswawykmasuqye: return $this->schemas; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->aeosueemgsygqese()[$uusmaiomayssaecw] ?? null; } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if ($aaqqkgyougeiueyq->yywskysiycwkwsgw()) { goto uwaimsisescsgyqk; } $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->aeosueemgsygqese())); uwaimsisescsgyqk: $this->schemas[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $aaqqkgyougeiueyq; if (!$aaqqkgyougeiueyq->umcwswocgeismgmo()) { goto uqcsksaywyqeumig; } uqcsksaywyqeumig: return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Schema) { goto jsmisuccwyukksgc; } $this->cquokmemekqqywgi($aiowsaccomcoikus); jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : string { return $this->name; } public function cueaickeeoiwayou() : string { return $this->ogqgmqymcwsqikme() . $this->aakmagwggmkoiiyu(); } public function ogqgmqymcwsqikme() : string { $yuwymayicwwqiske = $this->prefix; if (empty($yuwymayicwwqiske)) { goto kwmiwaecqcgiaqye; } $yuwymayicwwqiske .= "\137"; kwmiwaecqcgiaqye: return $yuwymayicwwqiske; } public final function gssiscqyqsacmeca() : Entity { return $this->maqyuuwugyqqiqkg(Constants::ENTITY); } public final function iekyeyicoyyawomk() : Repository { return $this->maqyuuwugyqqiqkg(Constants::yisekuwugkikgkwm); } public final function geskigquisseygoc() : Migration { return $this->maqyuuwugyqqiqkg(Constants::qaeweykiqukcwawu); } public final function ysgiswuowuciwqaq() : Connection { return $this->maqyuuwugyqqiqkg(Constants::kiecmqmgmigmomck); } public final function ayqesuasiggqoeeo() : ?Notification { return $this->maqyuuwugyqqiqkg(Constants::wqyyquqcmoegoyao); } private function maqyuuwugyqqiqkg(string $ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); if (!($egkyssmuqcwaciya && !is_object($egkyssmuqcwaciya) && class_exists($egkyssmuqcwaciya))) { goto mwieyyqamgwicgco; } if (is_subclass_of($egkyssmuqcwaciya, Container::class)) { goto yqicwmekwuoywyus; } $mksyucucyswaukig = new $egkyssmuqcwaciya(); goto gkoaeuekqockuoiq; yqicwmekwuoywyus: $mksyucucyswaukig = $egkyssmuqcwaciya::symcgieuakksimmu(); gkoaeuekqockuoiq: if (!($mksyucucyswaukig instanceof Entity || $mksyucucyswaukig instanceof Repository || $mksyucucyswaukig instanceof Notification)) { goto uyeyscsaigimsqwq; } $mksyucucyswaukig->asumqyigwsqmyeoc($this); if (!$mksyucucyswaukig instanceof Notification) { goto eekaiaeqewiqkkgm; } $mksyucucyswaukig->dimsswsyskyecscu($this->imkyoqyocosuqasu(Constants::wqyyquqcmoegoyao)[Constants::uqkkmyyqwqaqeage] ?? []); eekaiaeqewiqkkgm: if (!$mksyucucyswaukig instanceof Entity) { goto kceuusiekagyeoys; } $mksyucucyswaukig->yusomaossiaeqoiu($this->kumuygiiqswoyasy()); kceuusiekagyeoys: uyeyscsaigimsqwq: $this->igiywquyccyiaucw($ymqmyyeuycgmigyo, $mksyucucyswaukig); mwieyyqamgwicgco: return $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->igiywquyccyiaucw(Constants::qgqyauaqwqmqseim, $wkaqekwwgqsqwcoi); return $this; } public function eyamqkqiykagecsw() : ?string { return $this->imkyoqyocosuqasu(Constants::qgqyauaqwqmqseim); } public function guiaswksukmgageq(string $sisssumicskyceeg) : self { $this->igiywquyccyiaucw(Constants::egyqyoogakommguc, $sisssumicskyceeg); return $this; } public function giiayuqckuiecosm() : ?string { return $this->imkyoqyocosuqasu(Constants::egyqyoogakommguc); } public function muuwuqssqkaieqge(string $kcumookcwskcyqak) : self { $this->igiywquyccyiaucw(Constants::mmieaueggwwaokig, $kcumookcwskcyqak); return $this; } public function qeeuwmmksmqiuywg() : ?string { return $this->imkyoqyocosuqasu(Constants::mmieaueggwwaokig); } public function uaywwyimkgwyqwya(array $gegaigmgieqwgasy = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($gegaigmgieqwgasy, [Constants::wuowaiyouwecckaw => '', Constants::qoquaeuooeycomks => $this->akuociswqmoigkas(), Constants::yiuwgggacagyeqmo => 10]); $this->igiywquyccyiaucw(Constants::mkywiykkiqimykiw, $ywmkwiwkosakssii); return $this; } public function licekmysugkqeoay(string $uusmaiomayssaecw) { return $this->imkyoqyocosuqasu(Constants::mkywiykkiqimykiw)[$uusmaiomayssaecw] ?? ''; } public function cokoiaeeomgssqgy() : string { return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($this->cueaickeeoiwayou()); } public function myywwqkyiwawwquy(string $qgoqiacsiccwoawi) : string { return $this->iekyeyicoyyawomk()->myywwqkyiwawwquy($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi); } public function kmgukcsewikeswco(string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) : string { return $this->iekyeyicoyyawomk()->kmgukcsewikeswco($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi, $aikcyecgesuiaacw); } public function mwyqswsaeeewsosm($mksyucucyswaukig) : int { $aokagokqyuysuksm = 0; if (is_numeric($mksyucucyswaukig)) { goto mosuacsuaasssciu; } if (is_object($mksyucucyswaukig)) { goto esqwswmoegiqcckg; } if (!is_array($mksyucucyswaukig)) { goto wkiymcoqqiigqaaw; } $aokagokqyuysuksm = $mksyucucyswaukig[$this->kumuygiiqswoyasy()] ?? 0; wkiymcoqqiigqaaw: goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $aokagokqyuysuksm = $this->waecsyqmwascmqoa($mksyucucyswaukig, $this->kumuygiiqswoyasy(), 0); qmokwkocmcyeyesc: goto qksckewucmosemuo; mosuacsuaasssciu: $aokagokqyuysuksm = $mksyucucyswaukig; qksckewucmosemuo: return $aokagokqyuysuksm; } public function kumuygiiqswoyasy(bool $iqoeaggekweuwcgw = false) : string { $ceiwsaacewygcsqg = $this->imkyoqyocosuqasu(Constants::ywgycmwesywaycws, Constants::gouqcwikiiygyasc); if (!$iqoeaggekweuwcgw) { goto kmooekeyemqgucci; } $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg); kmooekeyemqgucci: return $ceiwsaacewygcsqg; } public function ukqioecasimmeygm() : string { return (string) $this->imkyoqyocosuqasu(Constants::kaeeyemckaaeykuy, Constants::qescuiwgsyuikume); } public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array { if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) { goto mkgmaguyswskyioa; } $mguygkocuoaoqqkg = []; goto skwusmoyomgqkimm; mkgmaguyswskyioa: foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig); cmmusgkieoqyymgs: } skuuyysooocugyww: skwusmoyomgqkimm: return $mguygkocuoaoqqkg; } public function scqakcemaqsqkema($mksyucucyswaukig, array $yiosiwewiecqmkaa = []) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) { if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa, true))) { goto cysgqimowcqoqqsc; } $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq) { goto kakkuyeccaacewyo; } $mksyucucyswaukig[$aiowsaccomcoikus] = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $this); kakkuyeccaacewyo: cysgqimowcqoqqsc: gicuuwuuuwumyooa: } usyckeewsgwaysam: return $mksyucucyswaukig; } public function ekuykcasmcmywewi($mksyucucyswaukig) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Enum) { goto casgoamcqkekgeeo; } $mksyucucyswaukig[$uusmaiomayssaecw] = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); casgoamcqkekgeeo: qsokkkyoackoycie: } ismeikacqqyqcmqe: return $mksyucucyswaukig; } public function yomgsemomcmgekyi($aiowsaccomcoikus, $ccmygqgggkyqsias) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto qcgyggiaowuqswuw; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto yseyyukqaowwouua; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus); yseyyukqaowwouua: $sogksuscggsicmac = $aaqqkgyougeiueyq->ymgomemcusiiyksw($ccmygqgggkyqsias); qcgyggiaowuqswuw: return $sogksuscggsicmac; } public function ogegcqqcukiaqscy($aiowsaccomcoikus, $ccmygqgggkyqsias, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto ywqakqkmmcoceqka; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto sooecucuakgkuyis; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus, $ggauoeuaesiymgee); sooecucuakgkuyis: $sogksuscggsicmac = $aaqqkgyougeiueyq->qksikkwyuwmciusw($ccmygqgggkyqsias); ywqakqkmmcoceqka: return $sogksuscggsicmac; } public function cyqesesmeiwoguik(string $aiowsaccomcoikus, string $amcuekkyuiqgieyu) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto kwsqgqmwyyeykgum; } $sogksuscggsicmac = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($amcuekkyuiqgieyu); kwsqgqmwyyeykgum: return $sogksuscggsicmac; } public function wmiscwmeyeomaqya($aiowsaccomcoikus) : array { $aiwgcyaewwagisoo = []; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto emauuoieewwoeyqq; } $aiwgcyaewwagisoo = $aaqqkgyougeiueyq->ywesecymaqwkmcei(); emauuoieewwoeyqq: return $aiwgcyaewwagisoo; } public final function ccekeuwwqqoiwuwy($mksyucucyswaukig) : array { $siquossayskcwkea = []; if ($mksyucucyswaukig instanceof Entity) { goto ekakkiuuquqkccse; } if (!is_object($mksyucucyswaukig)) { goto koukiyqaccegmquc; } $siquossayskcwkea = (array) $mksyucucyswaukig; koukiyqaccegmquc: goto oqwwacmigasucsoc; ekakkiuuquqkccse: $siquossayskcwkea = $mksyucucyswaukig->getAttributes(); oqwwacmigasucsoc: return $siquossayskcwkea; } public final function waecsyqmwascmqoa($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null) { if ($aiowsaccomcoikus instanceof Schema) { goto cakuguiciaiaeukg; } $ksiyqouuaoymsycg = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$ksiyqouuaoymsycg) { goto egkeqqgakieyimuq; } $aiowsaccomcoikus = $ksiyqouuaoymsycg; egkeqqgakieyimuq: cakuguiciaiaeukg: if (!$mksyucucyswaukig instanceof self) { goto wswikooyuaaouqgk; } $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); wswikooyuaaouqgk: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aiowsaccomcoikus instanceof Schema) { goto ckwmkquuyyugigom; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee); goto cumeycwmuuqawwyu; ckwmkquuyyugigom: $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus->iooowgsqoyqseyuu(), $ggauoeuaesiymgee); if (!(is_string($eqgoocgaqwqcimie) && $aiowsaccomcoikus instanceof Json)) { goto awwaiioyywmokwsm; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($eqgoocgaqwqcimie); awwaiioyywmokwsm: cumeycwmuuqawwyu: return $eqgoocgaqwqcimie; } public function eesuqwkusmukgwma(array $gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe], array $qceyowgiyaiaqeyi = []) : self { $this->igiywquyccyiaucw(Constants::wqyyquqcmoegoyao, [Constants::uqkkmyyqwqaqeage => $qceyowgiyaiaqeyi, Constants::egswciakmaaouces => $gsgwomokyuwmqqkg]); return $this; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->imkyoqyocosuqasu(Constants::wqyyquqcmoegoyao)[Constants::egswciakmaaouces] ?? [], true); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { if (!is_numeric($mksyucucyswaukig)) { goto uaicwcqwauosmsqm; } $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); uaicwcqwauosmsqm: $cewmysakgwuuigoy = $this->ukqioecasimmeygm(); $pkyyagewkiyckmwy = $this->waecsyqmwascmqoa($mksyucucyswaukig, $cewmysakgwuuigoy); if ($pkyyagewkiyckmwy) { goto gsqcoqqsioiyoykq; } $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($this->keeuqgyooycqoygw($mksyucucyswaukig)); gsqcoqqsioiyoykq: return $pkyyagewkiyckmwy; } public abstract function register(); }
