<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM; use Pmpr\Common\Foundation\_ORM\Database\Connection; use Pmpr\Common\Foundation\_ORM\Database\Entity; use Pmpr\Common\Foundation\_ORM\Database\Notification; use Pmpr\Common\Foundation\_ORM\Database\Repository; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Migration; use Pmpr\Common\Foundation\_ORM\View\Edit; use Pmpr\Common\Foundation\_ORM\View\Index; use Pmpr\Common\Foundation\_ORM\View\Show; use Pmpr\Common\Foundation\_ORM\View\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\CacheTrait; use Pmpr\Common\Foundation\Traits\LabelsTrait; abstract class Model extends Common { use ArgsTrait, CacheTrait, FieldsTrait, LabelsTrait; protected string $name = ''; protected string $prefix = ''; protected array $views = []; protected array $callback = []; protected array $schemas = []; public function ikcgmcycisiccyuc() { if ($this->masyeqmaiuqwosei()) { goto iwkckkeimmeoquyq; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $this->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc(static::class))); iwkckkeimmeoquyq: if ($this->ogqgmqymcwsqikme()) { goto masakmomqmeocqqg; } $this->prefix = $this->akuociswqmoigkas(); masakmomqmeocqqg: $this->register(); $this->mcacmissyeeqkeak(Constants::ouuaeeeqeqkagcgi, true)->mcacmissyeeqkeak(Constants::wmsqekqcaciiwyoe, true)->mcacmissyeeqkeak(Constants::kqqquayqkucokyqi, true); $this->mcacmissyeeqkeak(Constants::ENTITY, Entity::class)->mcacmissyeeqkeak(Constants::qaeweykiqukcwawu, Migration::class)->mcacmissyeeqkeak(Constants::yisekuwugkikgkwm, Repository::class)->mcacmissyeeqkeak(Constants::kiecmqmgmigmomck, Connection::class); if (!$this->wuyimwscukmqqsqk(Constants::eguoukkowuumuwgi)) { goto yksywwikmeksikqc; } $this->mcacmissyeeqkeak(Constants::eguoukkowuumuwgi, Notification::class); yksywwikmeksikqc: $suckquwcuiuyiogc = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms("\120\122\137\x55\120\104\101\124\x45\137\117\x52\115\x5f\x44\x41\x54\x41\102\x41\123\105", 0); if (!($suckquwcuiuyiogc || $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\160\x72\55\165\160\x64\141\164\145\55\157\x72\155\55\x64\x62"))) { goto yoqsigmoyaaceqky; } $this->geskigquisseygoc()->cucqgwmoseqakgoe(); yoqsigmoyaaceqky: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\155\145\156\x75", [$this, "\145\165\161\x67\167\151\x73\x63\x77\147\161\153\x71\153\x65\x63"]); } public function euqgwiscwgqkqkec() { $umwgoasiowmqcumw = $this->aioqieywgykaaoec(); foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $ywmkwiwkosakssii) { $wgaiuiysuegayseo = $ywmkwiwkosakssii[Constants::qoquaeuooeycomks] ?? false; if (!$wgaiuiysuegayseo) { goto acgqaeakoyasgkku; } $cmyoswawcimsecyy = $ywmkwiwkosakssii[Constants::ysgwugcqguggmigq] ?? $this->qeeuwmmksmqiuywg(); $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $wgaiuiysuegayseo, Constants::ysgwugcqguggmigq => $cmyoswawcimsecyy, Constants::qsegwakiwaiyimyy => $ywmkwiwkosakssii[Constants::qsegwakiwaiyimyy] ?? $cmyoswawcimsecyy, Constants::wwgusigoaksqmwsm => function () use($qqomumygoacsmsie, $ywmkwiwkosakssii) { $this->kkmiwqogoaqwuswy($qqomumygoacsmsie, $ywmkwiwkosakssii); }, Constants::gqmskcacocowcwaw => $ywmkwiwkosakssii[Constants::uqaoisqcoykyycwe] ?? '', Constants::kekcgssiyagioocg => $ywmkwiwkosakssii[Constants::yiuwgggacagyeqmo] ?? 0, Constants::wuowaiyouwecckaw => $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] ?? $this->cueaickeeoiwayou(), Constants::ucmueuwwcmocgmig => $ywmkwiwkosakssii[Constants::ucmueuwwcmocgmig] ?? Constants::gewmeskawiqikkoc]); acgqaeakoyasgkku: giugwaeuwaomossq: } suqckoccuyeeymww: } public final function kkmiwqogoaqwuswy(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) { switch ($qqomumygoacsmsie) { case Constants::weiosaewqequuyuq: $mksyucucyswaukig = new Index($this, $ywmkwiwkosakssii); goto sycougcyeqmeiagk; case Constants::ieioeisgwcgysukw: $mksyucucyswaukig = new Show($this, $ywmkwiwkosakssii); goto sycougcyeqmeiagk; case Constants::ukwaycqmyyuekwqg: case Constants::awysmmukegasimmq: $mksyucucyswaukig = new Edit($this, $ywmkwiwkosakssii); goto sycougcyeqmeiagk; default: $mksyucucyswaukig = new View($this, $ywmkwiwkosakssii); goto sycougcyeqmeiagk; } ssagcgqaucssyego: sycougcyeqmeiagk: $this->views[$qqomumygoacsmsie][Constants::ckmqoekmugkggeym] = $mksyucucyswaukig; $mksyucucyswaukig->mqyuagguukgcoeka(); $mksyucucyswaukig->render(); } public function aioqieywgykaaoec() : array { return $this->views; } public function cgswceaawqgeskua(string $qqomumygoacsmsie, string $uusmaiomayssaecw = null) { $ywmkwiwkosakssii = $this->aioqieywgykaaoec()[$qqomumygoacsmsie] ?? []; if (!$uusmaiomayssaecw) { goto mqgeseysuwcaqwiy; } $ywmkwiwkosakssii = $ywmkwiwkosakssii[$uusmaiomayssaecw] ?? null; mqgeseysuwcaqwiy: return $ywmkwiwkosakssii; } public function ecmiqywsauuoccwo(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) : self { if (!empty($this->views[$qqomumygoacsmsie])) { goto cuwcsamuuqyuyqsu; } $eomymqcmcwieomke = $this->cueaickeeoiwayou(); if (!($qqomumygoacsmsie !== Constants::weiosaewqequuyuq)) { goto ekoqieigyoeyauqa; } $eomymqcmcwieomke = "{$qqomumygoacsmsie}\137{$eomymqcmcwieomke}"; ekoqieigyoeyauqa: $this->views[$qqomumygoacsmsie] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => $qqomumygoacsmsie, Constants::wuowaiyouwecckaw => $eomymqcmcwieomke, Constants::uqaoisqcoykyycwe => $this->eyamqkqiykagecsw(), Constants::ysgwugcqguggmigq => $this->qeeuwmmksmqiuywg(), Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\162\x6d\x5f\166\151\145\167\137\143\141\x70\141\142\151\x6c\151\164\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $this->euwycwigoeawgckq("\141\x6c\154\x5f\151\164\145\x6d\x73"), Constants::qoquaeuooeycomks => $qqomumygoacsmsie === Constants::weiosaewqequuyuq ? $this->akuociswqmoigkas() : false, Constants::yiuwgggacagyeqmo => $this->licekmysugkqeoay(Constants::yiuwgggacagyeqmo, 0)]); cuwcsamuuqyuyqsu: return $this; } public function ckwicogmemcwawmy(string $qqomumygoacsmsie, $aokagokqyuysuksm = null) { $iwywmkygwewiamwm = ''; $ywmkwiwkosakssii = $this->cgswceaawqgeskua($qqomumygoacsmsie); if (!($ywmkwiwkosakssii && !empty($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw]))) { goto ksckqkmwiqggykke; } $uoomaookgsyciacm = []; if (!$aokagokqyuysuksm) { goto mimacwyuueomgwwy; } $uoomaookgsyciacm[$this->kumuygiiqswoyasy()] = $aokagokqyuysuksm; mimacwyuueomgwwy: $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\157\x72\155\137\166\151\x65\x77\x5f\154\151\x6e\153\137\161\165\x65\162\x69\145\163", $uoomaookgsyciacm, $qqomumygoacsmsie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $this); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw], $uoomaookgsyciacm); ksckqkmwiqggykke: return $iwywmkygwewiamwm; } public function wsqomecyomgauuog() : self { return $this->igiywquyccyiaucw(Constants::kqqquayqkucokyqi, false); } public function awcggayuseoukmkw() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::kqqquayqkucokyqi); } public function ceosksssgukuoscw() : self { return $this->igiywquyccyiaucw(Constants::ouuaeeeqeqkagcgi, false); } public function amimkmoyyqiysugw() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::ouuaeeeqeqkagcgi); } public function eiweowgmaaccwocm() : self { return $this->igiywquyccyiaucw(Constants::wmsqekqcaciiwyoe, false); } public function ggswuoiywaaaqseo() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wmsqekqcaciiwyoe); } public function cgccmsewskigcuig($moqewomugocaueis = 0) : ?string { $iwywmkygwewiamwm = null; if (!($moqewomugocaueis && $this->awcggayuseoukmkw())) { goto awaqksikyomsuaeo; } $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); if ($this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { goto igwkcikeyoowosoi; } $iwywmkygwewiamwm = $this->ckwicogmemcwawmy(Constants::weiosaewqequuyuq); goto iqsgossweywksoia; igwkcikeyoowosoi: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); iqsgossweywksoia: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x6f\x72\x6d\x2d\x61\x63\164\x69\157\156" => Constants::DELETE, $ceiwsaacewygcsqg => $moqewomugocaueis], $iwywmkygwewiamwm); awaqksikyomsuaeo: return $iwywmkygwewiamwm; } public function hkwssiimkcysaiyo() : ?string { $ymqmyyeuycgmigyo = $this->cueaickeeoiwayou(); $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk, '')); if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) { goto cuommomwmsackoqc; } $qqomumygoacsmsie = Constants::weiosaewqequuyuq; cuommomwmsackoqc: return $qqomumygoacsmsie; } public function qcaekwgmiswccowk(string $qqomumygoacsmsie) : bool { return $this->hkwssiimkcysaiyo() === $qqomumygoacsmsie; } public function aoqwywcqmoqaukkq() { } public function ugmceccgwaaaigiy() : array { if (!empty($this->fields)) { goto ggeoqeowscwkeumy; } $this->aoqwywcqmoqaukkq(); ggeoqeowscwkeumy: return $this->fields; } public function swsaakqseuaacagq(string $ymqmyyeuycgmigyo, $ekiuyucoiagmscgy) : self { $this->callback[$ymqmyyeuycgmigyo] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi(string $ymqmyyeuycgmigyo) { return $this->callback[$ymqmyyeuycgmigyo] ?? null; } public function osgoqoeuiiiwowke(string $ymqmyyeuycgmigyo, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = false; $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ymqmyyeuycgmigyo); if (!is_callable($ekiuyucoiagmscgy)) { goto qyeswawykmasuqye; } $ksaameoqigiaoigg = $ekiuyucoiagmscgy(...$ywmkwiwkosakssii); qyeswawykmasuqye: return $ksaameoqigiaoigg; } public function uwmqacgewuauagai() { $weiysqkaieiyiuug = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$this->kcsywgyywsgqgawm()) { goto uwaimsisescsgyqk; } $this->cquokmemekqqywgi($weiysqkaieiyiuug->omkueasmegecueyk(Constants::sugcoawcimusgaga)->eyygsasuqmommkua(0)->jyumyyugiwwiqomk(999)->aaikegqyiyeoygce("\137\x5f\x72\145\164\165\x72\156\137\x66\141\x6c\x73\145")); uwaimsisescsgyqk: } public function aeosueemgsygqese() : ?array { if (!empty($this->schemas)) { goto uqcsksaywyqeumig; } $this->uwmqacgewuauagai(); uqcsksaywyqeumig: return $this->schemas; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->aeosueemgsygqese()[$uusmaiomayssaecw] ?? null; } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if ($aaqqkgyougeiueyq->yywskysiycwkwsgw()) { goto yggmaskeguaqkusc; } $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->aeosueemgsygqese())); yggmaskeguaqkusc: $this->schemas[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $aaqqkgyougeiueyq; if (!$aaqqkgyougeiueyq->umcwswocgeismgmo()) { goto ukwoswyyogmsygqg; } ukwoswyyogmsygqg: return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Schema) { goto yqicwmekwuoywyus; } $this->cquokmemekqqywgi($aiowsaccomcoikus); yqicwmekwuoywyus: kwmiwaecqcgiaqye: } jsmisuccwyukksgc: return $this; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : string { return $this->name; } public function cueaickeeoiwayou() : string { return $this->ogqgmqymcwsqikme() . $this->aakmagwggmkoiiyu(); } public function ogqgmqymcwsqikme() : string { $yuwymayicwwqiske = $this->prefix; if (empty($yuwymayicwwqiske)) { goto gkoaeuekqockuoiq; } $yuwymayicwwqiske .= "\x5f"; gkoaeuekqockuoiq: return $yuwymayicwwqiske; } public final function gssiscqyqsacmeca() : Entity { return $this->maqyuuwugyqqiqkg(Constants::ENTITY); } public final function iekyeyicoyyawomk() : Repository { return $this->maqyuuwugyqqiqkg(Constants::yisekuwugkikgkwm); } public final function geskigquisseygoc() : Migration { return $this->maqyuuwugyqqiqkg(Constants::qaeweykiqukcwawu); } public final function ysgiswuowuciwqaq() : Connection { return $this->maqyuuwugyqqiqkg(Constants::kiecmqmgmigmomck); } public final function ayqesuasiggqoeeo() : ?Notification { return $this->maqyuuwugyqqiqkg(Constants::wqyyquqcmoegoyao); } private function maqyuuwugyqqiqkg(string $ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); if (!($egkyssmuqcwaciya && !is_object($egkyssmuqcwaciya) && class_exists($egkyssmuqcwaciya))) { goto esqwswmoegiqcckg; } if (is_subclass_of($egkyssmuqcwaciya, Container::class)) { goto eekaiaeqewiqkkgm; } $mksyucucyswaukig = new $egkyssmuqcwaciya(); goto kceuusiekagyeoys; eekaiaeqewiqkkgm: $mksyucucyswaukig = $egkyssmuqcwaciya::symcgieuakksimmu(); kceuusiekagyeoys: if (!($mksyucucyswaukig instanceof Entity || $mksyucucyswaukig instanceof Migration || $mksyucucyswaukig instanceof Repository || $mksyucucyswaukig instanceof Notification)) { goto wkiymcoqqiigqaaw; } $mksyucucyswaukig->asumqyigwsqmyeoc($this); if (!$mksyucucyswaukig instanceof Notification) { goto uyeyscsaigimsqwq; } $mksyucucyswaukig->dimsswsyskyecscu($this->imkyoqyocosuqasu(Constants::wqyyquqcmoegoyao)[Constants::uqkkmyyqwqaqeage] ?? []); uyeyscsaigimsqwq: if (!$mksyucucyswaukig instanceof Entity) { goto mwieyyqamgwicgco; } $mksyucucyswaukig->yusomaossiaeqoiu($this->kumuygiiqswoyasy()); mwieyyqamgwicgco: wkiymcoqqiigqaaw: $this->igiywquyccyiaucw($ymqmyyeuycgmigyo, $mksyucucyswaukig); esqwswmoegiqcckg: return $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->igiywquyccyiaucw(Constants::qgqyauaqwqmqseim, $wkaqekwwgqsqwcoi); return $this; } public function eyamqkqiykagecsw() : ?string { return $this->imkyoqyocosuqasu(Constants::qgqyauaqwqmqseim); } public function guiaswksukmgageq(string $sisssumicskyceeg) : self { $this->igiywquyccyiaucw(Constants::egyqyoogakommguc, $sisssumicskyceeg); return $this; } public function giiayuqckuiecosm() : ?string { return $this->imkyoqyocosuqasu(Constants::egyqyoogakommguc); } public function muuwuqssqkaieqge(string $kcumookcwskcyqak) : self { $this->igiywquyccyiaucw(Constants::mmieaueggwwaokig, $kcumookcwskcyqak); return $this; } public function qeeuwmmksmqiuywg() : ?string { return $this->imkyoqyocosuqasu(Constants::mmieaueggwwaokig); } public function uaywwyimkgwyqwya(array $gegaigmgieqwgasy = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($gegaigmgieqwgasy, [Constants::wuowaiyouwecckaw => '', Constants::qoquaeuooeycomks => $this->akuociswqmoigkas(), Constants::yiuwgggacagyeqmo => 10]); $this->igiywquyccyiaucw(Constants::mkywiykkiqimykiw, $ywmkwiwkosakssii); return $this; } public function licekmysugkqeoay(string $uusmaiomayssaecw, $ggauoeuaesiymgee = '') { return $this->imkyoqyocosuqasu(Constants::mkywiykkiqimykiw)[$uusmaiomayssaecw] ?? $ggauoeuaesiymgee; } public function cokoiaeeomgssqgy() : string { return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($this->cueaickeeoiwayou()); } public function myywwqkyiwawwquy(string $qgoqiacsiccwoawi) : string { return $this->iekyeyicoyyawomk()->myywwqkyiwawwquy($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi); } public function kmgukcsewikeswco(string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) : string { return $this->iekyeyicoyyawomk()->kmgukcsewikeswco($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi, $aikcyecgesuiaacw); } public function mwyqswsaeeewsosm($mksyucucyswaukig) : int { $aokagokqyuysuksm = 0; if (is_numeric($mksyucucyswaukig)) { goto kmooekeyemqgucci; } if (is_object($mksyucucyswaukig)) { goto mosuacsuaasssciu; } if (!is_array($mksyucucyswaukig)) { goto qmokwkocmcyeyesc; } $aokagokqyuysuksm = $mksyucucyswaukig[$this->kumuygiiqswoyasy()] ?? 0; qmokwkocmcyeyesc: goto qksckewucmosemuo; mosuacsuaasssciu: $aokagokqyuysuksm = $this->waecsyqmwascmqoa($mksyucucyswaukig, $this->kumuygiiqswoyasy(), 0); qksckewucmosemuo: goto skuuyysooocugyww; kmooekeyemqgucci: $aokagokqyuysuksm = $mksyucucyswaukig; skuuyysooocugyww: return $aokagokqyuysuksm; } public function kumuygiiqswoyasy(bool $iqoeaggekweuwcgw = false) : string { $ceiwsaacewygcsqg = $this->imkyoqyocosuqasu(Constants::ywgycmwesywaycws, Constants::gouqcwikiiygyasc); if (!$iqoeaggekweuwcgw) { goto cmmusgkieoqyymgs; } $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg); cmmusgkieoqyymgs: return $ceiwsaacewygcsqg; } public function ukqioecasimmeygm() : string { return (string) $this->imkyoqyocosuqasu(Constants::kaeeyemckaaeykuy, Constants::qescuiwgsyuikume); } public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array { if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) { goto usyckeewsgwaysam; } $mguygkocuoaoqqkg = []; goto gicuuwuuuwumyooa; usyckeewsgwaysam: foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig); skwusmoyomgqkimm: } mkgmaguyswskyioa: gicuuwuuuwumyooa: return $mguygkocuoaoqqkg; } public function scqakcemaqsqkema($mksyucucyswaukig, array $yiosiwewiecqmkaa = []) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) { if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa, true))) { goto qsokkkyoackoycie; } $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq) { goto ismeikacqqyqcmqe; } $mksyucucyswaukig[$aiowsaccomcoikus] = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $this); ismeikacqqyqcmqe: qsokkkyoackoycie: cysgqimowcqoqqsc: } kakkuyeccaacewyo: return $mksyucucyswaukig; } public function ekuykcasmcmywewi($mksyucucyswaukig) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Enum) { goto qcgyggiaowuqswuw; } $mksyucucyswaukig[$uusmaiomayssaecw] = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); qcgyggiaowuqswuw: yseyyukqaowwouua: } casgoamcqkekgeeo: return $mksyucucyswaukig; } public function yomgsemomcmgekyi($aiowsaccomcoikus, $ccmygqgggkyqsias) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto ywqakqkmmcoceqka; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto sooecucuakgkuyis; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus); sooecucuakgkuyis: $sogksuscggsicmac = $aaqqkgyougeiueyq->ymgomemcusiiyksw($ccmygqgggkyqsias); ywqakqkmmcoceqka: return $sogksuscggsicmac; } public function ogegcqqcukiaqscy($aiowsaccomcoikus, $ccmygqgggkyqsias, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = ''; if (!$aiowsaccomcoikus instanceof Schema) { goto kwsqgqmwyyeykgum; } $aaqqkgyougeiueyq = $aiowsaccomcoikus; goto emauuoieewwoeyqq; kwsqgqmwyyeykgum: $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); emauuoieewwoeyqq: if (!$aaqqkgyougeiueyq instanceof Enum) { goto ekakkiuuquqkccse; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto koukiyqaccegmquc; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus, $ggauoeuaesiymgee); koukiyqaccegmquc: $sogksuscggsicmac = $aaqqkgyougeiueyq->qksikkwyuwmciusw($ccmygqgggkyqsias); ekakkiuuquqkccse: return $sogksuscggsicmac; } public function cyqesesmeiwoguik(string $aiowsaccomcoikus, string $amcuekkyuiqgieyu) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto oqwwacmigasucsoc; } $sogksuscggsicmac = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($amcuekkyuiqgieyu); oqwwacmigasucsoc: return $sogksuscggsicmac; } public function wmiscwmeyeomaqya($aiowsaccomcoikus) : array { $aiwgcyaewwagisoo = []; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto egkeqqgakieyimuq; } $aiwgcyaewwagisoo = $aaqqkgyougeiueyq->ywesecymaqwkmcei(); egkeqqgakieyimuq: return $aiwgcyaewwagisoo; } public final function ccekeuwwqqoiwuwy($mksyucucyswaukig) : array { $siquossayskcwkea = []; if ($mksyucucyswaukig instanceof Entity) { goto wswikooyuaaouqgk; } if (!is_object($mksyucucyswaukig)) { goto cakuguiciaiaeukg; } $siquossayskcwkea = (array) $mksyucucyswaukig; cakuguiciaiaeukg: goto awwaiioyywmokwsm; wswikooyuaaouqgk: $siquossayskcwkea = $mksyucucyswaukig->getAttributes(); awwaiioyywmokwsm: return $siquossayskcwkea; } public final function waecsyqmwascmqoa($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null) { if ($aiowsaccomcoikus instanceof Schema) { goto cumeycwmuuqawwyu; } $ksiyqouuaoymsycg = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$ksiyqouuaoymsycg) { goto ckwmkquuyyugigom; } $aiowsaccomcoikus = $ksiyqouuaoymsycg; ckwmkquuyyugigom: cumeycwmuuqawwyu: if (!$mksyucucyswaukig instanceof self) { goto uaicwcqwauosmsqm; } $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); uaicwcqwauosmsqm: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aiowsaccomcoikus instanceof Schema) { goto goaowamiyyamueiw; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee); goto iaomqomgiwiegoca; goaowamiyyamueiw: $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus->iooowgsqoyqseyuu(), $ggauoeuaesiymgee); if (!(is_string($eqgoocgaqwqcimie) && $aiowsaccomcoikus instanceof Json)) { goto gsqcoqqsioiyoykq; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($eqgoocgaqwqcimie); gsqcoqqsioiyoykq: iaomqomgiwiegoca: return $eqgoocgaqwqcimie; } public function eesuqwkusmukgwma(array $gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe], array $qceyowgiyaiaqeyi = []) : self { $this->igiywquyccyiaucw(Constants::wqyyquqcmoegoyao, [Constants::uqkkmyyqwqaqeage => $qceyowgiyaiaqeyi, Constants::egswciakmaaouces => $gsgwomokyuwmqqkg]); return $this; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->imkyoqyocosuqasu(Constants::wqyyquqcmoegoyao)[Constants::egswciakmaaouces] ?? [], true); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { if (!is_numeric($mksyucucyswaukig)) { goto ysweqawmawicakeo; } $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); ysweqawmawicakeo: $cewmysakgwuuigoy = $this->ukqioecasimmeygm(); $pkyyagewkiyckmwy = $this->waecsyqmwascmqoa($mksyucucyswaukig, $cewmysakgwuuigoy); if ($pkyyagewkiyckmwy) { goto owisckseoogsugqq; } $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($this->keeuqgyooycqoygw($mksyucucyswaukig)); owisckseoogsugqq: return $pkyyagewkiyckmwy; } public abstract function register(); }
