<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6751a8e52d988             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use Illuminate\Contracts\Database\Query\Expression; use Pmpr\Common\Foundation\ORM\Database\Connection; use Pmpr\Common\Foundation\ORM\Database\Entity; use Pmpr\Common\Foundation\ORM\Database\Notification; use Pmpr\Common\Foundation\ORM\Database\Repository; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Json; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Database\Migration; use Pmpr\Common\Foundation\ORM\Model\Log; use Pmpr\Common\Foundation\ORM\Model\Metadata; use Pmpr\Common\Foundation\ORM\View\Edit; use Pmpr\Common\Foundation\ORM\View\Form; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Common\Foundation\ORM\View\Show; use Pmpr\Common\Foundation\ORM\View\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\CacheTrait; use Pmpr\Common\Foundation\Traits\LabelsTrait; abstract class Model extends Container { use ArgsTrait, CacheTrait, LabelsTrait; protected string $name = ''; protected string $prefix = ''; protected array $views = []; protected array $callback = []; protected array $schemas = []; public function ikcgmcycisiccyuc() { if (!$this->ogqgmqymcwsqikme()) { $this->prefix = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); } if (!$this->masyeqmaiuqwosei()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $this->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc(static::class))); } $this->register(); $this->mcacmissyeeqkeak(Constants::wgqiykuoeykksoee, true)->mcacmissyeeqkeak(Constants::ouuaeeeqeqkagcgi, true)->mcacmissyeeqkeak(Constants::wmsqekqcaciiwyoe, true)->mcacmissyeeqkeak(Constants::kqqquayqkucokyqi, true); $this->mcacmissyeeqkeak(Constants::ygeqsmugcaeeeuwu, Form::class)->mcacmissyeeqkeak(Constants::ENTITY, Entity::class)->mcacmissyeeqkeak(Constants::qaeweykiqukcwawu, Migration::class)->mcacmissyeeqkeak(Constants::yisekuwugkikgkwm, Repository::class)->mcacmissyeeqkeak(Constants::kiecmqmgmigmomck, Connection::class); if ($this->wuyimwscukmqqsqk(Constants::eguoukkowuumuwgi)) { $this->mcacmissyeeqkeak(Constants::wqyyquqcmoegoyao, Notification::class); } if ($this->wuyimwscukmqqsqk(Constants::suymgmuuciyawogu)) { $this->mcacmissyeeqkeak(Constants::iggmwsowgyooyoes, Log::class); } if (($kuguwoaesuqsqysu = $this->imkyoqyocosuqasu(Constants::iqecuousiiauysem)) && is_array($kuguwoaesuqsqysu)) { $this->mcacmissyeeqkeak(Constants::ckcuiukmyisueqeo, Metadata::class); } $suckquwcuiuyiogc = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms("\x50\x52\x5f\125\120\x44\101\x54\x45\x5f\117\x52\115\137\104\101\124\x41\102\x41\123\x45", 0); if ($suckquwcuiuyiogc || $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x70\162\x2d\x75\x70\x64\x61\x74\145\x2d\x6f\x72\x6d\x2d\x64\x62")) { $this->geskigquisseygoc()->cucqgwmoseqakgoe(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\156\x5f\155\145\156\165", [$this, "\145\x75\161\147\x77\151\x73\143\x77\x67\x71\153\161\x6b\x65\x63"], 99); } public function euqgwiscwgqkqkec() { $umwgoasiowmqcumw = $this->aioqieywgykaaoec(); foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $ywmkwiwkosakssii) { $cmyoswawcimsecyy = $ywmkwiwkosakssii[Constants::ysgwugcqguggmigq] ?? $this->qeeuwmmksmqiuywg(); $wgaiuiysuegayseo = $ywmkwiwkosakssii[Constants::qoquaeuooeycomks] ?? null; $eomymqcmcwieomke = $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] ?? $this->cueaickeeoiwayou(); $kuysccmeoqgaiumc = $ywmkwiwkosakssii[Constants::qsegwakiwaiyimyy] ?? $cmyoswawcimsecyy; if ($this->qcaekwgmiswccowk($qqomumygoacsmsie)) { $GLOBALS[Constants::qescuiwgsyuikume] = $cmyoswawcimsecyy; } if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($eomymqcmcwieomke)) { $this->suicksywcwiggasc($qqomumygoacsmsie, $ywmkwiwkosakssii); } if ($qqomumygoacsmsie === Constants::weiosaewqequuyuq && $this->kcsywgyywsgqgawm()) { $gaeqamemwmwsyukm = $this->ayqesuasiggqoeeo()->ygmcsmegcysyeoss(); if ($gaeqamemwmwsyukm > 0) { $kuysccmeoqgaiumc .= $this->caokeucsksukesyo()->wmkogisswkckmeua()->uyouiyyykmoqmicg($gaeqamemwmwsyukm); } if ($wgaiuiysuegayseo) { $this->aqaqisyssqeomwom("{$wgaiuiysuegayseo}\x5f\x62\165\142\142\154\145\137\156\x6f\164\x69\146\151\x63\141\x74\151\157\x6e\163", function ($ssywqwawcssumwey) use($gaeqamemwmwsyukm) { if ($gaeqamemwmwsyukm && $gaeqamemwmwsyukm > 0) { $ssywqwawcssumwey += $gaeqamemwmwsyukm; } return $ssywqwawcssumwey; }); } } $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $wgaiuiysuegayseo, Constants::ysgwugcqguggmigq => $cmyoswawcimsecyy, Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::wwgusigoaksqmwsm => function () use($qqomumygoacsmsie) { $ewgsciccscsweqik = $this->cgswceaawqgeskua($qqomumygoacsmsie, Constants::ckmqoekmugkggeym); if ($ewgsciccscsweqik instanceof View) { $ewgsciccscsweqik->render(); } }, Constants::gqmskcacocowcwaw => $ywmkwiwkosakssii[Constants::uqaoisqcoykyycwe] ?? '', Constants::kekcgssiyagioocg => $ywmkwiwkosakssii[Constants::yiuwgggacagyeqmo] ?? 0, Constants::wuowaiyouwecckaw => $eomymqcmcwieomke, Constants::ucmueuwwcmocgmig => $ywmkwiwkosakssii[Constants::ucmueuwwcmocgmig] ?? Constants::gewmeskawiqikkoc, Constants::wecqkaigumwuugca => $ywmkwiwkosakssii[Constants::wecqkaigumwuugca] ?? '', Constants::ykkwcyqesigeeaoe => $ywmkwiwkosakssii[Constants::ykkwcyqesigeeaoe] ?? '']); } } public final function suicksywcwiggasc(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) : View { switch ($qqomumygoacsmsie) { case Constants::weiosaewqequuyuq: $mksyucucyswaukig = new Index($this, $ywmkwiwkosakssii); $this->yyoqecggyacaseko()->ugmceccgwaaaigiy(); break; case Constants::ieioeisgwcgysukw: $mksyucucyswaukig = new Show($this, $ywmkwiwkosakssii); break; case Constants::ukwaycqmyyuekwqg: case Constants::awysmmukegasimmq: $mksyucucyswaukig = new Edit($this, $ywmkwiwkosakssii); $this->yyoqecggyacaseko()->ugmceccgwaaaigiy(); break; default: $mksyucucyswaukig = new View($this, $ywmkwiwkosakssii); break; } $this->views[$qqomumygoacsmsie][Constants::ckmqoekmugkggeym] = $mksyucucyswaukig; $mksyucucyswaukig->mqyuagguukgcoeka(); return $mksyucucyswaukig; } public function aioqieywgykaaoec() : array { return $this->views; } public function cgswceaawqgeskua(string $qqomumygoacsmsie, string $uusmaiomayssaecw = null) { $ywmkwiwkosakssii = $this->aioqieywgykaaoec()[$qqomumygoacsmsie] ?? []; if ($uusmaiomayssaecw && $ywmkwiwkosakssii) { if ($uusmaiomayssaecw === Constants::ckmqoekmugkggeym && !isset($ywmkwiwkosakssii[$uusmaiomayssaecw])) { return $this->suicksywcwiggasc($qqomumygoacsmsie, $ywmkwiwkosakssii); } $ywmkwiwkosakssii = $ywmkwiwkosakssii[$uusmaiomayssaecw] ?? null; } return $ywmkwiwkosakssii; } public function euqcuckiysmgaeak(string $qqomumygoacsmsie) : bool { return !empty($this->cgswceaawqgeskua($qqomumygoacsmsie)); } public function ecmiqywsauuoccwo(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) : self { if (empty($this->views[$qqomumygoacsmsie])) { $qmwoykgeiicumeiw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $sgqiaeyawecismys = $ausqmseyicgkkmiw = ''; $eomymqcmcwieomke = $this->cueaickeeoiwayou(); if ($qqomumygoacsmsie !== Constants::weiosaewqequuyuq) { $sgqiaeyawecismys = $qmwoykgeiicumeiw; $ausqmseyicgkkmiw = $eomymqcmcwieomke; $eomymqcmcwieomke = "{$qqomumygoacsmsie}\137{$eomymqcmcwieomke}"; } $this->views[$qqomumygoacsmsie] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => $qqomumygoacsmsie, Constants::wuowaiyouwecckaw => $eomymqcmcwieomke, Constants::uqaoisqcoykyycwe => $this->eyamqkqiykagecsw(), Constants::ysgwugcqguggmigq => $this->qeeuwmmksmqiuywg(), Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\x6f\x72\155\x5f\166\x69\x65\x77\137\143\141\x70\x61\x62\x69\154\151\x74\171", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $this->euwycwigoeawgckq("\x61\x6c\x6c\137\x69\164\145\x6d\x73"), Constants::qoquaeuooeycomks => $qqomumygoacsmsie === Constants::weiosaewqequuyuq ? $qmwoykgeiicumeiw : null, Constants::yiuwgggacagyeqmo => $this->licekmysugkqeoay(Constants::yiuwgggacagyeqmo, 0), Constants::wecqkaigumwuugca => $sgqiaeyawecismys, Constants::ykkwcyqesigeeaoe => $ausqmseyicgkkmiw]); } return $this; } public function ckwicogmemcwawmy(string $qqomumygoacsmsie, $aokagokqyuysuksm = null) { $iwywmkygwewiamwm = ''; $ywmkwiwkosakssii = $this->cgswceaawqgeskua($qqomumygoacsmsie); if ($ywmkwiwkosakssii && !empty($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw])) { $uoomaookgsyciacm = []; if ($aokagokqyuysuksm) { $uoomaookgsyciacm[$this->kumuygiiqswoyasy()] = $aokagokqyuysuksm; } $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\x6f\x72\x6d\137\x76\x69\x65\x77\137\x6c\x69\x6e\x6b\x5f\161\165\145\162\x69\x65\163", $uoomaookgsyciacm, $qqomumygoacsmsie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $this); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw], $uoomaookgsyciacm); } return $iwywmkygwewiamwm; } public function wsqomecyomgauuog() : self { return $this->igiywquyccyiaucw(Constants::kqqquayqkucokyqi, false); } public function awcggayuseoukmkw() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::kqqquayqkucokyqi); } public function amimkmoyyqiysugw() : bool { return $this->euqcuckiysmgaeak(Constants::awysmmukegasimmq); } public function mwguoawyyuyccsqs() : bool { return $this->euqcuckiysmgaeak(Constants::ukwaycqmyyuekwqg); } public function ggswuoiywaaaqseo() : bool { return $this->euqcuckiysmgaeak(Constants::ieioeisgwcgysukw); } public function cgccmsewskigcuig($moqewomugocaueis = 0) : ?string { $iwywmkygwewiamwm = null; if ($moqewomugocaueis && $this->awcggayuseoukmkw()) { $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); if ($this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); } else { $iwywmkygwewiamwm = $this->ckwicogmemcwawmy(Constants::weiosaewqequuyuq); } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x6f\162\155\x2d\x61\x63\x74\151\x6f\156" => Constants::DELETE, $ceiwsaacewygcsqg => $moqewomugocaueis, Constants::icwieiwoqeocywss => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ikkqcccaweckukug("\144\x65\154\x65\164\x65\x2d\x6f\x72\155")], $iwywmkygwewiamwm); } return $iwywmkygwewiamwm; } public function hkwssiimkcysaiyo() : ?string { $ymqmyyeuycgmigyo = $this->cueaickeeoiwayou(); $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk, '')); if ($qqomumygoacsmsie === $ymqmyyeuycgmigyo) { $qqomumygoacsmsie = Constants::weiosaewqequuyuq; } return $qqomumygoacsmsie; } public function qcaekwgmiswccowk(string $qqomumygoacsmsie) : bool { return $this->hkwssiimkcysaiyo() === $qqomumygoacsmsie; } public function aoqwywcqmoqaukkq() { } public function swsaakqseuaacagq(string $ymqmyyeuycgmigyo, $ekiuyucoiagmscgy) : self { $this->callback[$ymqmyyeuycgmigyo] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi(string $ymqmyyeuycgmigyo) { return $this->callback[$ymqmyyeuycgmigyo] ?? null; } public function osgoqoeuiiiwowke(string $ymqmyyeuycgmigyo, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = false; $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ymqmyyeuycgmigyo); if (is_callable($ekiuyucoiagmscgy)) { $ksaameoqigiaoigg = $ekiuyucoiagmscgy(...$ywmkwiwkosakssii); } return $ksaameoqigiaoigg; } public function uwmqacgewuauagai() { $weiysqkaieiyiuug = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if ($this->kcsywgyywsgqgawm()) { $this->cquokmemekqqywgi($weiysqkaieiyiuug->omkueasmegecueyk(Constants::sugcoawcimusgaga)->eyygsasuqmommkua(0)->jyumyyugiwwiqomk(999)->aaikegqyiyeoygce("\137\x5f\162\145\x74\x75\x72\x6e\137\x66\x61\x6c\163\145")); } } public function aeosueemgsygqese() : ?array { if (empty($this->schemas)) { $this->uwmqacgewuauagai(); $this->schemas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->schemas, "\x67\145\x74\x50\x72\151\157\162\x69\x74\x79"); } return $this->schemas; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->aeosueemgsygqese()[$uusmaiomayssaecw] ?? null; } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if (!$aaqqkgyougeiueyq->yywskysiycwkwsgw()) { $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->schemas) + 1); } $aaqqkgyougeiueyq->asumqyigwsqmyeoc($this->cueaickeeoiwayou()); $this->schemas[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $aaqqkgyougeiueyq; if ($aaqqkgyougeiueyq->umcwswocgeismgmo()) { } return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Schema) { $this->cquokmemekqqywgi($aiowsaccomcoikus); } } return $this; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : string { return $this->name; } public function cueaickeeoiwayou() : string { return $this->ogqgmqymcwsqikme() . $this->aakmagwggmkoiiyu(); } public function okgmqaeuaeymaocm(string $yuwymayicwwqiske) : self { $this->prefix = $yuwymayicwwqiske; return $this; } public function ogqgmqymcwsqikme() : string { $yuwymayicwwqiske = $this->prefix; if (!empty($yuwymayicwwqiske)) { $yuwymayicwwqiske .= "\137"; } return $yuwymayicwwqiske; } public final function gssiscqyqsacmeca() : Entity { return $this->maqyuuwugyqqiqkg(Constants::ENTITY); } public final function iekyeyicoyyawomk() : Repository { return $this->maqyuuwugyqqiqkg(Constants::yisekuwugkikgkwm); } public final function geskigquisseygoc() : Migration { return $this->maqyuuwugyqqiqkg(Constants::qaeweykiqukcwawu); } public final function ysgiswuowuciwqaq() : Connection { return $this->maqyuuwugyqqiqkg(Constants::kiecmqmgmigmomck); } public final function ayqesuasiggqoeeo() : ?Notification { return $this->maqyuuwugyqqiqkg(Constants::wqyyquqcmoegoyao); } public final function yyoqecggyacaseko() : Form { return $this->maqyuuwugyqqiqkg(Constants::ygeqsmugcaeeeuwu); } public final function uaiaimyesysoggsc() : ?Log { return $this->maqyuuwugyqqiqkg(Constants::iggmwsowgyooyoes); } public final function queegmguugiecims() : ?Metadata { return $this->maqyuuwugyqqiqkg(Constants::ckcuiukmyisueqeo); } private function maqyuuwugyqqiqkg(string $ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); if ($egkyssmuqcwaciya && !is_object($egkyssmuqcwaciya) && class_exists($egkyssmuqcwaciya)) { if (is_subclass_of($egkyssmuqcwaciya, Container::class)) { $mksyucucyswaukig = $egkyssmuqcwaciya::ocmycskcuiawkecq($this->cueaickeeoiwayou(), $this); } else { if ($ymqmyyeuycgmigyo === Constants::ENTITY) { $mksyucucyswaukig = new $egkyssmuqcwaciya([], $this); } else { $mksyucucyswaukig = new $egkyssmuqcwaciya(); } } if ($this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($mksyucucyswaukig, "\x73\x65\164\x4d\x6f\x64\145\154")) { $mksyucucyswaukig->asumqyigwsqmyeoc($this); } if ($mksyucucyswaukig instanceof Notification) { $mksyucucyswaukig->syemgsuewkasoaek($this->imkyoqyocosuqasu(Constants::eguoukkowuumuwgi)[Constants::uqkkmyyqwqaqeage] ?? []); } $this->igiywquyccyiaucw($ymqmyyeuycgmigyo, $mksyucucyswaukig); } return $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->igiywquyccyiaucw(Constants::qgqyauaqwqmqseim, $wkaqekwwgqsqwcoi); return $this; } public function eyamqkqiykagecsw() : ?string { return $this->imkyoqyocosuqasu(Constants::qgqyauaqwqmqseim); } public function guiaswksukmgageq(string $sisssumicskyceeg) : self { $this->igiywquyccyiaucw(Constants::egyqyoogakommguc, $sisssumicskyceeg); return $this; } public function giiayuqckuiecosm() : ?string { return $this->imkyoqyocosuqasu(Constants::egyqyoogakommguc); } public function muuwuqssqkaieqge(string $kcumookcwskcyqak) : self { $this->igiywquyccyiaucw(Constants::mmieaueggwwaokig, $kcumookcwskcyqak); return $this; } public function qeeuwmmksmqiuywg() : ?string { return $this->imkyoqyocosuqasu(Constants::mmieaueggwwaokig); } public function uaywwyimkgwyqwya(array $gegaigmgieqwgasy = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($gegaigmgieqwgasy, [Constants::wuowaiyouwecckaw => '', Constants::qoquaeuooeycomks => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this), Constants::yiuwgggacagyeqmo => 10]); $this->igiywquyccyiaucw(Constants::mkywiykkiqimykiw, $ywmkwiwkosakssii); return $this; } public function licekmysugkqeoay(string $uusmaiomayssaecw, $ggauoeuaesiymgee = '') { return $this->imkyoqyocosuqasu(Constants::mkywiykkiqimykiw)[$uusmaiomayssaecw] ?? $ggauoeuaesiymgee; } public function cokoiaeeomgssqgy() : string { return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($this->cueaickeeoiwayou()); } public function myywwqkyiwawwquy(string $qgoqiacsiccwoawi) : string { return $this->iekyeyicoyyawomk()->myywwqkyiwawwquy($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi); } public function kmgukcsewikeswco(string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { return $this->iekyeyicoyyawomk()->kmgukcsewikeswco($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi, $aikcyecgesuiaacw); } public function mwyqswsaeeewsosm($mksyucucyswaukig) : int { $aokagokqyuysuksm = 0; if (is_numeric($mksyucucyswaukig)) { $aokagokqyuysuksm = $mksyucucyswaukig; } else { if (is_object($mksyucucyswaukig)) { $aokagokqyuysuksm = $this->waecsyqmwascmqoa($mksyucucyswaukig, $this->kumuygiiqswoyasy(), 0); } else { if (is_array($mksyucucyswaukig)) { $aokagokqyuysuksm = $mksyucucyswaukig[$this->kumuygiiqswoyasy()] ?? 0; } } } return $aokagokqyuysuksm; } public function kumuygiiqswoyasy(bool $iqoeaggekweuwcgw = false) : string { $ceiwsaacewygcsqg = $this->imkyoqyocosuqasu(Constants::ywgycmwesywaycws, Constants::gouqcwikiiygyasc); if ($iqoeaggekweuwcgw) { $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg); } return $ceiwsaacewygcsqg; } public function ukqioecasimmeygm() : string { return (string) $this->imkyoqyocosuqasu(Constants::kaeeyemckaaeykuy, Constants::qescuiwgsyuikume); } public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array { if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) { foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig); } } else { $mguygkocuoaoqqkg = []; } return $mguygkocuoaoqqkg; } public function scqakcemaqsqkema($mksyucucyswaukig, array $yiosiwewiecqmkaa = []) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) { if (!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa, true)) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if ($aaqqkgyougeiueyq) { $mksyucucyswaukig[$aiowsaccomcoikus] = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $this); } } } return $mksyucucyswaukig; } public function ekuykcasmcmywewi($mksyucucyswaukig) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq instanceof Enum) { $mksyucucyswaukig[$uusmaiomayssaecw] = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); } } return $mksyucucyswaukig; } public function yomgsemomcmgekyi($aiowsaccomcoikus, $ccmygqgggkyqsias) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if ($aaqqkgyougeiueyq instanceof Enum) { if (is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias)) { $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus); } $sogksuscggsicmac = $aaqqkgyougeiueyq->ymgomemcusiiyksw($ccmygqgggkyqsias); } return $sogksuscggsicmac; } public function ogegcqqcukiaqscy($aiowsaccomcoikus, $ccmygqgggkyqsias, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = ''; if (!$aiowsaccomcoikus instanceof Schema) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); } else { $aaqqkgyougeiueyq = $aiowsaccomcoikus; } if ($aaqqkgyougeiueyq instanceof Enum) { if (is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias)) { $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus, $ggauoeuaesiymgee); } $sogksuscggsicmac = $aaqqkgyougeiueyq->qksikkwyuwmciusw($ccmygqgggkyqsias); } return $sogksuscggsicmac; } public function cyqesesmeiwoguik(string $aiowsaccomcoikus, string $amcuekkyuiqgieyu) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if ($aaqqkgyougeiueyq instanceof Enum) { $sogksuscggsicmac = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($amcuekkyuiqgieyu); } return $sogksuscggsicmac; } public function wmiscwmeyeomaqya($aiowsaccomcoikus) : array { $aiwgcyaewwagisoo = []; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if ($aaqqkgyougeiueyq instanceof Enum) { $aiwgcyaewwagisoo = $aaqqkgyougeiueyq->ywesecymaqwkmcei(); } return $aiwgcyaewwagisoo; } public final function ccekeuwwqqoiwuwy($mksyucucyswaukig) : array { $siquossayskcwkea = []; if ($mksyucucyswaukig instanceof Entity) { $siquossayskcwkea = $mksyucucyswaukig->getAttributes(); } else { if (is_object($mksyucucyswaukig)) { $siquossayskcwkea = (array) $mksyucucyswaukig; } } return $siquossayskcwkea; } public final function waecsyqmwascmqoa($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, bool $eeoemssuskyqcqww = true) { if (!$aiowsaccomcoikus instanceof Schema) { $ksiyqouuaoymsycg = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if ($ksiyqouuaoymsycg) { $aiowsaccomcoikus = $ksiyqouuaoymsycg; } } if ($mksyucucyswaukig instanceof self) { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aiowsaccomcoikus instanceof Schema) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus->iooowgsqoyqseyuu(), $ggauoeuaesiymgee); if (is_string($eqgoocgaqwqcimie) && $aiowsaccomcoikus instanceof Json) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($eqgoocgaqwqcimie); } } else { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee); if (!$eqgoocgaqwqcimie && $eeoemssuskyqcqww) { $yquywseiyocsiqco = $this->queegmguugiecims(); if ($yquywseiyocsiqco) { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iiqamgmgaaueasca($mksyucucyswaukig, $aiowsaccomcoikus); } } } return $eqgoocgaqwqcimie; } public function gwyogoiuuusgusmm() : self { return $this->igiywquyccyiaucw(Constants::suymgmuuciyawogu, true); } public function esoauokkgywesoku($ymqmyyeuycgmigyo, $pkyyagewkiyckmwy) { $kuguwoaesuqsqysu = (array) $this->imkyoqyocosuqasu(Constants::iqecuousiiauysem, []); $kuguwoaesuqsqysu[$ymqmyyeuycgmigyo] = $pkyyagewkiyckmwy; $this->igiywquyccyiaucw(Constants::iqecuousiiauysem, $kuguwoaesuqsqysu); return $this; } public function swsugiuyesaiqucu(array $kuguwoaesuqsqysu = []) : self { return $this->igiywquyccyiaucw(Constants::iqecuousiiauysem, $kuguwoaesuqsqysu); } public function eesuqwkusmukgwma(array $gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe], array $qceyowgiyaiaqeyi = []) : self { $this->igiywquyccyiaucw(Constants::eguoukkowuumuwgi, [Constants::uqkkmyyqwqaqeage => $qceyowgiyaiaqeyi, Constants::egswciakmaaouces => $gsgwomokyuwmqqkg]); return $this; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->imkyoqyocosuqasu(Constants::eguoukkowuumuwgi)[Constants::egswciakmaaouces] ?? [], true); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { if (is_numeric($mksyucucyswaukig)) { $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); } $cewmysakgwuuigoy = $this->ukqioecasimmeygm(); $pkyyagewkiyckmwy = $this->waecsyqmwascmqoa($mksyucucyswaukig, $cewmysakgwuuigoy); if (!$pkyyagewkiyckmwy) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($this->mwyqswsaeeewsosm($mksyucucyswaukig)); } return $pkyyagewkiyckmwy; } public function qyeguewwsmosqcwc() { $gouqcwikiiygyasc = 0; if ($this->qcaekwgmiswccowk(Constants::awysmmukegasimmq) || $this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw)) { $gouqcwikiiygyasc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::gouqcwikiiygyasc, 0); } return $gouqcwikiiygyasc; } public abstract function register(); }
