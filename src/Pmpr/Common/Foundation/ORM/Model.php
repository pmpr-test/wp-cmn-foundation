<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use Illuminate\Contracts\Database\Query\Expression; use Pmpr\Common\Foundation\ORM\Database\Connection; use Pmpr\Common\Foundation\ORM\Database\Entity; use Pmpr\Common\Foundation\ORM\Database\Notification; use Pmpr\Common\Foundation\ORM\Database\Repository; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Json; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Database\Migration; use Pmpr\Common\Foundation\ORM\Model\Log; use Pmpr\Common\Foundation\ORM\Model\Metadata; use Pmpr\Common\Foundation\ORM\View\Edit; use Pmpr\Common\Foundation\ORM\View\Form; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Common\Foundation\ORM\View\Show; use Pmpr\Common\Foundation\ORM\View\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\CacheTrait; use Pmpr\Common\Foundation\Traits\LabelsTrait; abstract class Model extends Common { use ArgsTrait, CacheTrait, LabelsTrait; protected string $name = ''; protected string $prefix = ''; protected array $views = []; protected array $callback = []; protected array $schemas = []; public function ikcgmcycisiccyuc() { if ($this->ogqgmqymcwsqikme()) { goto smecgcsaskaiyqwg; } $this->prefix = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); smecgcsaskaiyqwg: if ($this->masyeqmaiuqwosei()) { goto kwqqookuogugoeoc; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $this->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc(static::class))); kwqqookuogugoeoc: $this->register(); $this->mcacmissyeeqkeak(Constants::wgqiykuoeykksoee, true)->mcacmissyeeqkeak(Constants::ouuaeeeqeqkagcgi, true)->mcacmissyeeqkeak(Constants::wmsqekqcaciiwyoe, true)->mcacmissyeeqkeak(Constants::kqqquayqkucokyqi, true); $this->mcacmissyeeqkeak(Constants::ygeqsmugcaeeeuwu, Form::class)->mcacmissyeeqkeak(Constants::ENTITY, Entity::class)->mcacmissyeeqkeak(Constants::qaeweykiqukcwawu, Migration::class)->mcacmissyeeqkeak(Constants::yisekuwugkikgkwm, Repository::class)->mcacmissyeeqkeak(Constants::kiecmqmgmigmomck, Connection::class); if (!$this->wuyimwscukmqqsqk(Constants::eguoukkowuumuwgi)) { goto iwcqqisaagoyaoyq; } $this->mcacmissyeeqkeak(Constants::wqyyquqcmoegoyao, Notification::class); iwcqqisaagoyaoyq: if (!$this->wuyimwscukmqqsqk(Constants::suymgmuuciyawogu)) { goto yeyuwakqagwqqmuc; } $this->mcacmissyeeqkeak(Constants::iggmwsowgyooyoes, Log::class); yeyuwakqagwqqmuc: if (!(($kuguwoaesuqsqysu = $this->imkyoqyocosuqasu(Constants::iqecuousiiauysem)) && is_array($kuguwoaesuqsqysu))) { goto ouakugqyqismmmwq; } $this->mcacmissyeeqkeak(Constants::ckcuiukmyisueqeo, Metadata::class); ouakugqyqismmmwq: $suckquwcuiuyiogc = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms("\x50\x52\x5f\125\120\104\101\124\x45\137\117\122\x4d\x5f\104\101\x54\x41\x42\x41\x53\105", 0); if (!($suckquwcuiuyiogc || $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x70\x72\x2d\165\160\144\x61\164\145\x2d\157\x72\x6d\x2d\144\x62"))) { goto eseyuoaaskemwycm; } $this->geskigquisseygoc()->cucqgwmoseqakgoe(); eseyuoaaskemwycm: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\137\x6d\145\x6e\x75", [$this, "\x65\x75\161\147\x77\x69\x73\143\167\147\161\153\x71\153\145\143"], 99); } public function euqgwiscwgqkqkec() { $umwgoasiowmqcumw = $this->aioqieywgykaaoec(); foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $ywmkwiwkosakssii) { $cmyoswawcimsecyy = $ywmkwiwkosakssii[Constants::ysgwugcqguggmigq] ?? $this->qeeuwmmksmqiuywg(); $wgaiuiysuegayseo = $ywmkwiwkosakssii[Constants::qoquaeuooeycomks] ?? null; $eomymqcmcwieomke = $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] ?? $this->cueaickeeoiwayou(); $kuysccmeoqgaiumc = $ywmkwiwkosakssii[Constants::qsegwakiwaiyimyy] ?? $cmyoswawcimsecyy; if (!$this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($eomymqcmcwieomke)) { goto eyimcucoicmimiao; } $this->suicksywcwiggasc($qqomumygoacsmsie, $ywmkwiwkosakssii); eyimcucoicmimiao: if (!($qqomumygoacsmsie === Constants::weiosaewqequuyuq && $this->kcsywgyywsgqgawm())) { goto swuomeuwkcgwekss; } $gaeqamemwmwsyukm = $this->ayqesuasiggqoeeo()->ygmcsmegcysyeoss(); if (!($gaeqamemwmwsyukm > 0)) { goto eaeowkksqokeigsq; } $kuysccmeoqgaiumc .= $this->caokeucsksukesyo()->wmkogisswkckmeua()->uyouiyyykmoqmicg($gaeqamemwmwsyukm); eaeowkksqokeigsq: if (!$wgaiuiysuegayseo) { goto mkskmcusskkouyyi; } $this->aqaqisyssqeomwom("{$wgaiuiysuegayseo}\x5f\142\x75\x62\142\x6c\145\137\156\157\164\x69\146\151\143\141\164\x69\157\x6e\x73", function ($ssywqwawcssumwey) use($gaeqamemwmwsyukm) { if (!($gaeqamemwmwsyukm && $gaeqamemwmwsyukm > 0)) { goto qcmiieemioisoyyi; } $ssywqwawcssumwey += $gaeqamemwmwsyukm; qcmiieemioisoyyi: return $ssywqwawcssumwey; }); mkskmcusskkouyyi: swuomeuwkcgwekss: $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $wgaiuiysuegayseo, Constants::ysgwugcqguggmigq => $cmyoswawcimsecyy, Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::wwgusigoaksqmwsm => function () use($qqomumygoacsmsie) { $ewgsciccscsweqik = $this->cgswceaawqgeskua($qqomumygoacsmsie, Constants::ckmqoekmugkggeym); if (!$ewgsciccscsweqik instanceof View) { goto ccwwqiosmasqqqwu; } $ewgsciccscsweqik->render(); ccwwqiosmasqqqwu: }, Constants::gqmskcacocowcwaw => $ywmkwiwkosakssii[Constants::uqaoisqcoykyycwe] ?? '', Constants::kekcgssiyagioocg => $ywmkwiwkosakssii[Constants::yiuwgggacagyeqmo] ?? 0, Constants::wuowaiyouwecckaw => $eomymqcmcwieomke, Constants::ucmueuwwcmocgmig => $ywmkwiwkosakssii[Constants::ucmueuwwcmocgmig] ?? Constants::gewmeskawiqikkoc, Constants::wecqkaigumwuugca => $ywmkwiwkosakssii[Constants::wecqkaigumwuugca] ?? '', Constants::ykkwcyqesigeeaoe => $ywmkwiwkosakssii[Constants::ykkwcyqesigeeaoe] ?? '']); qmeuekyqssiomcyy: } akccmuykyisokmqm: } public final function suicksywcwiggasc(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) : View { switch ($qqomumygoacsmsie) { case Constants::weiosaewqequuyuq: $mksyucucyswaukig = new Index($this, $ywmkwiwkosakssii); $this->yyoqecggyacaseko()->ugmceccgwaaaigiy(); goto scmkeeaewmeqguac; case Constants::ieioeisgwcgysukw: $mksyucucyswaukig = new Show($this, $ywmkwiwkosakssii); goto scmkeeaewmeqguac; case Constants::ukwaycqmyyuekwqg: case Constants::awysmmukegasimmq: $mksyucucyswaukig = new Edit($this, $ywmkwiwkosakssii); $this->yyoqecggyacaseko()->ugmceccgwaaaigiy(); goto scmkeeaewmeqguac; default: $mksyucucyswaukig = new View($this, $ywmkwiwkosakssii); goto scmkeeaewmeqguac; } qqeiuucaguymmsws: scmkeeaewmeqguac: $this->views[$qqomumygoacsmsie][Constants::ckmqoekmugkggeym] = $mksyucucyswaukig; $mksyucucyswaukig->mqyuagguukgcoeka(); return $mksyucucyswaukig; } public function aioqieywgykaaoec() : array { return $this->views; } public function cgswceaawqgeskua(string $qqomumygoacsmsie, string $uusmaiomayssaecw = null) { $ywmkwiwkosakssii = $this->aioqieywgykaaoec()[$qqomumygoacsmsie] ?? []; if (!($uusmaiomayssaecw && $ywmkwiwkosakssii)) { goto kqueakeekumokwoe; } if (!($uusmaiomayssaecw === Constants::ckmqoekmugkggeym && !isset($ywmkwiwkosakssii[$uusmaiomayssaecw]))) { goto owqiausosmeaugay; } return $this->suicksywcwiggasc($qqomumygoacsmsie, $ywmkwiwkosakssii); owqiausosmeaugay: $ywmkwiwkosakssii = $ywmkwiwkosakssii[$uusmaiomayssaecw] ?? null; kqueakeekumokwoe: return $ywmkwiwkosakssii; } public function euqcuckiysmgaeak(string $qqomumygoacsmsie) : bool { return !empty($this->cgswceaawqgeskua($qqomumygoacsmsie)); } public function ecmiqywsauuoccwo(string $qqomumygoacsmsie, array $ywmkwiwkosakssii = []) : self { if (!empty($this->views[$qqomumygoacsmsie])) { goto csisksagguuywuia; } $qmwoykgeiicumeiw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $sgqiaeyawecismys = $ausqmseyicgkkmiw = ''; $eomymqcmcwieomke = $this->cueaickeeoiwayou(); if (!($qqomumygoacsmsie !== Constants::weiosaewqequuyuq)) { goto okgweyikqgcceggq; } $sgqiaeyawecismys = $qmwoykgeiicumeiw; $ausqmseyicgkkmiw = $eomymqcmcwieomke; $eomymqcmcwieomke = "{$qqomumygoacsmsie}\x5f{$eomymqcmcwieomke}"; okgweyikqgcceggq: $this->views[$qqomumygoacsmsie] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => $qqomumygoacsmsie, Constants::wuowaiyouwecckaw => $eomymqcmcwieomke, Constants::uqaoisqcoykyycwe => $this->eyamqkqiykagecsw(), Constants::ysgwugcqguggmigq => $this->qeeuwmmksmqiuywg(), Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\162\x6d\x5f\x76\151\x65\x77\137\x63\141\x70\x61\x62\x69\x6c\x69\164\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $this->euwycwigoeawgckq("\141\154\x6c\137\x69\164\x65\x6d\x73"), Constants::qoquaeuooeycomks => $qqomumygoacsmsie === Constants::weiosaewqequuyuq ? $qmwoykgeiicumeiw : null, Constants::yiuwgggacagyeqmo => $this->licekmysugkqeoay(Constants::yiuwgggacagyeqmo, 0), Constants::wecqkaigumwuugca => $sgqiaeyawecismys, Constants::ykkwcyqesigeeaoe => $ausqmseyicgkkmiw]); csisksagguuywuia: return $this; } public function ckwicogmemcwawmy(string $qqomumygoacsmsie, $aokagokqyuysuksm = null) { $iwywmkygwewiamwm = ''; $ywmkwiwkosakssii = $this->cgswceaawqgeskua($qqomumygoacsmsie); if (!($ywmkwiwkosakssii && !empty($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw]))) { goto kquqieqqiieakmoa; } $uoomaookgsyciacm = []; if (!$aokagokqyuysuksm) { goto ycucsikocgkiesgi; } $uoomaookgsyciacm[$this->kumuygiiqswoyasy()] = $aokagokqyuysuksm; ycucsikocgkiesgi: $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\157\162\x6d\137\166\x69\145\x77\137\154\x69\x6e\x6b\x5f\161\165\x65\162\151\145\x73", $uoomaookgsyciacm, $qqomumygoacsmsie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $this); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($ywmkwiwkosakssii[Constants::wuowaiyouwecckaw], $uoomaookgsyciacm); kquqieqqiieakmoa: return $iwywmkygwewiamwm; } public function wsqomecyomgauuog() : self { return $this->igiywquyccyiaucw(Constants::kqqquayqkucokyqi, false); } public function awcggayuseoukmkw() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::kqqquayqkucokyqi); } public function amimkmoyyqiysugw() : bool { return $this->euqcuckiysmgaeak(Constants::awysmmukegasimmq); } public function mwguoawyyuyccsqs() : bool { return $this->euqcuckiysmgaeak(Constants::ukwaycqmyyuekwqg); } public function ggswuoiywaaaqseo() : bool { return $this->euqcuckiysmgaeak(Constants::ieioeisgwcgysukw); } public function cgccmsewskigcuig($moqewomugocaueis = 0) : ?string { $iwywmkygwewiamwm = null; if (!($moqewomugocaueis && $this->awcggayuseoukmkw())) { goto okamgiuocakyggwo; } $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); if ($this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { goto usakoyequcyysywo; } $iwywmkygwewiamwm = $this->ckwicogmemcwawmy(Constants::weiosaewqequuyuq); goto kwmgoowcwggsyokw; usakoyequcyysywo: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); kwmgoowcwggsyokw: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\157\162\155\x2d\141\143\x74\151\x6f\156" => Constants::DELETE, $ceiwsaacewygcsqg => $moqewomugocaueis, Constants::icwieiwoqeocywss => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ikkqcccaweckukug("\144\x65\154\145\164\145\55\157\162\155")], $iwywmkygwewiamwm); okamgiuocakyggwo: return $iwywmkygwewiamwm; } public function hkwssiimkcysaiyo() : ?string { $ymqmyyeuycgmigyo = $this->cueaickeeoiwayou(); $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk, '')); if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) { goto gcywqkqkwkcmoawo; } $qqomumygoacsmsie = Constants::weiosaewqequuyuq; gcywqkqkwkcmoawo: return $qqomumygoacsmsie; } public function qcaekwgmiswccowk(string $qqomumygoacsmsie) : bool { return $this->hkwssiimkcysaiyo() === $qqomumygoacsmsie; } public function aoqwywcqmoqaukkq() { } public function swsaakqseuaacagq(string $ymqmyyeuycgmigyo, $ekiuyucoiagmscgy) : self { $this->callback[$ymqmyyeuycgmigyo] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi(string $ymqmyyeuycgmigyo) { return $this->callback[$ymqmyyeuycgmigyo] ?? null; } public function osgoqoeuiiiwowke(string $ymqmyyeuycgmigyo, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = false; $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ymqmyyeuycgmigyo); if (!is_callable($ekiuyucoiagmscgy)) { goto cmcwskwgaiauugws; } $ksaameoqigiaoigg = $ekiuyucoiagmscgy(...$ywmkwiwkosakssii); cmcwskwgaiauugws: return $ksaameoqigiaoigg; } public function uwmqacgewuauagai() { $weiysqkaieiyiuug = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$this->kcsywgyywsgqgawm()) { goto gmoykcyssieuqueu; } $this->cquokmemekqqywgi($weiysqkaieiyiuug->omkueasmegecueyk(Constants::sugcoawcimusgaga)->eyygsasuqmommkua(0)->jyumyyugiwwiqomk(999)->aaikegqyiyeoygce("\137\x5f\162\145\164\x75\x72\x6e\137\146\x61\x6c\x73\145")); gmoykcyssieuqueu: } public function aeosueemgsygqese() : ?array { if (!empty($this->schemas)) { goto iywiyewymemgqacq; } $this->uwmqacgewuauagai(); $this->schemas = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->schemas, "\147\x65\x74\x50\162\x69\157\x72\151\x74\171"); iywiyewymemgqacq: return $this->schemas; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->aeosueemgsygqese()[$uusmaiomayssaecw] ?? null; } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if ($aaqqkgyougeiueyq->yywskysiycwkwsgw()) { goto kyaiywcwwmeqwyaw; } $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->schemas) + 1); kyaiywcwwmeqwyaw: $this->schemas[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $aaqqkgyougeiueyq; if (!$aaqqkgyougeiueyq->umcwswocgeismgmo()) { goto maswyugssquqqggq; } maswyugssquqqggq: return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Schema) { goto gwucakcwqkiiqyyg; } $this->cquokmemekqqywgi($aiowsaccomcoikus); gwucakcwqkiiqyyg: miyggyguyamiggcm: } egcycueumoemiuai: return $this; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : string { return $this->name; } public function cueaickeeoiwayou() : string { return $this->ogqgmqymcwsqikme() . $this->aakmagwggmkoiiyu(); } public function okgmqaeuaeymaocm(string $yuwymayicwwqiske) : self { $this->prefix = $yuwymayicwwqiske; return $this; } public function ogqgmqymcwsqikme() : string { $yuwymayicwwqiske = $this->prefix; if (empty($yuwymayicwwqiske)) { goto mcyamakgwewogwqi; } $yuwymayicwwqiske .= "\x5f"; mcyamakgwewogwqi: return $yuwymayicwwqiske; } public final function gssiscqyqsacmeca() : Entity { return $this->maqyuuwugyqqiqkg(Constants::ENTITY); } public final function iekyeyicoyyawomk() : Repository { return $this->maqyuuwugyqqiqkg(Constants::yisekuwugkikgkwm); } public final function geskigquisseygoc() : Migration { return $this->maqyuuwugyqqiqkg(Constants::qaeweykiqukcwawu); } public final function ysgiswuowuciwqaq() : Connection { return $this->maqyuuwugyqqiqkg(Constants::kiecmqmgmigmomck); } public final function ayqesuasiggqoeeo() : ?Notification { return $this->maqyuuwugyqqiqkg(Constants::wqyyquqcmoegoyao); } public final function yyoqecggyacaseko() : Form { return $this->maqyuuwugyqqiqkg(Constants::ygeqsmugcaeeeuwu); } public final function uaiaimyesysoggsc() : ?Log { return $this->maqyuuwugyqqiqkg(Constants::iggmwsowgyooyoes); } public final function queegmguugiecims() : ?Metadata { return $this->maqyuuwugyqqiqkg(Constants::ckcuiukmyisueqeo); } private function maqyuuwugyqqiqkg(string $ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); if (!($egkyssmuqcwaciya && !is_object($egkyssmuqcwaciya) && class_exists($egkyssmuqcwaciya))) { goto swuquosuguoomaeq; } if (is_subclass_of($egkyssmuqcwaciya, Container::class)) { goto siuuokwymeygcosy; } if ($ymqmyyeuycgmigyo === Constants::ENTITY) { goto aqamaqggiseeioqq; } $mksyucucyswaukig = new $egkyssmuqcwaciya(); goto sskkiisoqmmsocic; aqamaqggiseeioqq: $mksyucucyswaukig = new $egkyssmuqcwaciya([], $this); sskkiisoqmmsocic: goto icksskeigsiugace; siuuokwymeygcosy: $mksyucucyswaukig = $egkyssmuqcwaciya::ocmycskcuiawkecq($this->cueaickeeoiwayou(), $this); icksskeigsiugace: if (!$this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($mksyucucyswaukig, "\x73\145\x74\115\157\x64\x65\x6c")) { goto ceyygoicaeoqwwio; } $mksyucucyswaukig->asumqyigwsqmyeoc($this); ceyygoicaeoqwwio: if (!$mksyucucyswaukig instanceof Notification) { goto eyaesumwwwgisaym; } $mksyucucyswaukig->syemgsuewkasoaek($this->imkyoqyocosuqasu(Constants::eguoukkowuumuwgi)[Constants::uqkkmyyqwqaqeage] ?? []); eyaesumwwwgisaym: $this->igiywquyccyiaucw($ymqmyyeuycgmigyo, $mksyucucyswaukig); swuquosuguoomaeq: return $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->igiywquyccyiaucw(Constants::qgqyauaqwqmqseim, $wkaqekwwgqsqwcoi); return $this; } public function eyamqkqiykagecsw() : ?string { return $this->imkyoqyocosuqasu(Constants::qgqyauaqwqmqseim); } public function guiaswksukmgageq(string $sisssumicskyceeg) : self { $this->igiywquyccyiaucw(Constants::egyqyoogakommguc, $sisssumicskyceeg); return $this; } public function giiayuqckuiecosm() : ?string { return $this->imkyoqyocosuqasu(Constants::egyqyoogakommguc); } public function muuwuqssqkaieqge(string $kcumookcwskcyqak) : self { $this->igiywquyccyiaucw(Constants::mmieaueggwwaokig, $kcumookcwskcyqak); return $this; } public function qeeuwmmksmqiuywg() : ?string { return $this->imkyoqyocosuqasu(Constants::mmieaueggwwaokig); } public function uaywwyimkgwyqwya(array $gegaigmgieqwgasy = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($gegaigmgieqwgasy, [Constants::wuowaiyouwecckaw => '', Constants::qoquaeuooeycomks => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this), Constants::yiuwgggacagyeqmo => 10]); $this->igiywquyccyiaucw(Constants::mkywiykkiqimykiw, $ywmkwiwkosakssii); return $this; } public function licekmysugkqeoay(string $uusmaiomayssaecw, $ggauoeuaesiymgee = '') { return $this->imkyoqyocosuqasu(Constants::mkywiykkiqimykiw)[$uusmaiomayssaecw] ?? $ggauoeuaesiymgee; } public function cokoiaeeomgssqgy() : string { return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($this->cueaickeeoiwayou()); } public function myywwqkyiwawwquy(string $qgoqiacsiccwoawi) : string { return $this->iekyeyicoyyawomk()->myywwqkyiwawwquy($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi); } public function kmgukcsewikeswco(string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { return $this->iekyeyicoyyawomk()->kmgukcsewikeswco($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi, $aikcyecgesuiaacw); } public function mwyqswsaeeewsosm($mksyucucyswaukig) : int { $aokagokqyuysuksm = 0; if (is_numeric($mksyucucyswaukig)) { goto swwmkisacmieqiae; } if (is_object($mksyucucyswaukig)) { goto iuikeaqqcukamyqm; } if (!is_array($mksyucucyswaukig)) { goto occaiwsgmaykoqey; } $aokagokqyuysuksm = $mksyucucyswaukig[$this->kumuygiiqswoyasy()] ?? 0; occaiwsgmaykoqey: goto mweoqymwyuimuakm; iuikeaqqcukamyqm: $aokagokqyuysuksm = $this->waecsyqmwascmqoa($mksyucucyswaukig, $this->kumuygiiqswoyasy(), 0); mweoqymwyuimuakm: goto imqeimsscmwgasys; swwmkisacmieqiae: $aokagokqyuysuksm = $mksyucucyswaukig; imqeimsscmwgasys: return $aokagokqyuysuksm; } public function kumuygiiqswoyasy(bool $iqoeaggekweuwcgw = false) : string { $ceiwsaacewygcsqg = $this->imkyoqyocosuqasu(Constants::ywgycmwesywaycws, Constants::gouqcwikiiygyasc); if (!$iqoeaggekweuwcgw) { goto kuwecmygikeyisuq; } $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg); kuwecmygikeyisuq: return $ceiwsaacewygcsqg; } public function ukqioecasimmeygm() : string { return (string) $this->imkyoqyocosuqasu(Constants::kaeeyemckaaeykuy, Constants::qescuiwgsyuikume); } public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array { if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) { goto msmiaayuagocuswc; } $mguygkocuoaoqqkg = []; goto ugwysoaqswaocsuu; msmiaayuagocuswc: foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig); kmkoiwuimosekikq: } augwgqgcukgkywiw: ugwysoaqswaocsuu: return $mguygkocuoaoqqkg; } public function scqakcemaqsqkema($mksyucucyswaukig, array $yiosiwewiecqmkaa = []) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) { if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa, true))) { goto uysqwomcuuccagkq; } $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq) { goto qeieqkqcyuasgqqk; } $mksyucucyswaukig[$aiowsaccomcoikus] = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $this); qeieqkqcyuasgqqk: uysqwomcuuccagkq: kmykwuqougkwauiy: } akkecgwmiimmeqmy: return $mksyucucyswaukig; } public function ekuykcasmcmywewi($mksyucucyswaukig) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Enum) { goto wsksakoqeqwkigoq; } $mksyucucyswaukig[$uusmaiomayssaecw] = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); wsksakoqeqwkigoq: scykswkumgcoqgcc: } sucekaeksayiwooe: return $mksyucucyswaukig; } public function yomgsemomcmgekyi($aiowsaccomcoikus, $ccmygqgggkyqsias) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto mioseimsuqaqiqae; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto auiaaeeakqkocmqu; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus); auiaaeeakqkocmqu: $sogksuscggsicmac = $aaqqkgyougeiueyq->ymgomemcusiiyksw($ccmygqgggkyqsias); mioseimsuqaqiqae: return $sogksuscggsicmac; } public function ogegcqqcukiaqscy($aiowsaccomcoikus, $ccmygqgggkyqsias, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = ''; if (!$aiowsaccomcoikus instanceof Schema) { goto qisaayswqcmucoqg; } $aaqqkgyougeiueyq = $aiowsaccomcoikus; goto ewecikeyyqmewkgy; qisaayswqcmucoqg: $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); ewecikeyyqmewkgy: if (!$aaqqkgyougeiueyq instanceof Enum) { goto awsqsasmmamcskkk; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto eugoueaksseemowq; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus, $ggauoeuaesiymgee); eugoueaksseemowq: $sogksuscggsicmac = $aaqqkgyougeiueyq->qksikkwyuwmciusw($ccmygqgggkyqsias); awsqsasmmamcskkk: return $sogksuscggsicmac; } public function cyqesesmeiwoguik(string $aiowsaccomcoikus, string $amcuekkyuiqgieyu) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto wsiysogusuimayic; } $sogksuscggsicmac = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($amcuekkyuiqgieyu); wsiysogusuimayic: return $sogksuscggsicmac; } public function wmiscwmeyeomaqya($aiowsaccomcoikus) : array { $aiwgcyaewwagisoo = []; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto iyuiasiuowggciss; } $aiwgcyaewwagisoo = $aaqqkgyougeiueyq->ywesecymaqwkmcei(); iyuiasiuowggciss: return $aiwgcyaewwagisoo; } public final function ccekeuwwqqoiwuwy($mksyucucyswaukig) : array { $siquossayskcwkea = []; if ($mksyucucyswaukig instanceof Entity) { goto mowimwgkwoymuoae; } if (!is_object($mksyucucyswaukig)) { goto yquwqeooeyyociqm; } $siquossayskcwkea = (array) $mksyucucyswaukig; yquwqeooeyyociqm: goto yukcsywomcgeqoiq; mowimwgkwoymuoae: $siquossayskcwkea = $mksyucucyswaukig->getAttributes(); yukcsywomcgeqoiq: return $siquossayskcwkea; } public final function waecsyqmwascmqoa($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, bool $eeoemssuskyqcqww = true) { if ($aiowsaccomcoikus instanceof Schema) { goto cygqsmeoqscsscqm; } $ksiyqouuaoymsycg = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$ksiyqouuaoymsycg) { goto gqaecycgekomqqgu; } $aiowsaccomcoikus = $ksiyqouuaoymsycg; gqaecycgekomqqgu: cygqsmeoqscsscqm: if (!$mksyucucyswaukig instanceof self) { goto ukmkcwicoqcoyqog; } $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); ukmkcwicoqcoyqog: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aiowsaccomcoikus instanceof Schema) { goto cgksasyqkkiiowyg; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee); if (!(!$eqgoocgaqwqcimie && $eeoemssuskyqcqww)) { goto caeucwusaisgqaoe; } $yquywseiyocsiqco = $this->queegmguugiecims(); if (!$yquywseiyocsiqco) { goto gkyuckeugacsewka; } $eqgoocgaqwqcimie = $yquywseiyocsiqco->iiqamgmgaaueasca($mksyucucyswaukig, $aiowsaccomcoikus); gkyuckeugacsewka: caeucwusaisgqaoe: goto yesymsikkwmuikuc; cgksasyqkkiiowyg: $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus->iooowgsqoyqseyuu(), $ggauoeuaesiymgee); if (!(is_string($eqgoocgaqwqcimie) && $aiowsaccomcoikus instanceof Json)) { goto siuaqaksaumkaeui; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($eqgoocgaqwqcimie); siuaqaksaumkaeui: yesymsikkwmuikuc: return $eqgoocgaqwqcimie; } public function gwyogoiuuusgusmm() : self { return $this->igiywquyccyiaucw(Constants::suymgmuuciyawogu, true); } public function esoauokkgywesoku($ymqmyyeuycgmigyo, $pkyyagewkiyckmwy) { $kuguwoaesuqsqysu = (array) $this->imkyoqyocosuqasu(Constants::iqecuousiiauysem, []); $kuguwoaesuqsqysu[$ymqmyyeuycgmigyo] = $pkyyagewkiyckmwy; $this->igiywquyccyiaucw(Constants::iqecuousiiauysem, $kuguwoaesuqsqysu); return $this; } public function swsugiuyesaiqucu(array $kuguwoaesuqsqysu = []) : self { return $this->igiywquyccyiaucw(Constants::iqecuousiiauysem, $kuguwoaesuqsqysu); } public function eesuqwkusmukgwma(array $gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe], array $qceyowgiyaiaqeyi = []) : self { $this->igiywquyccyiaucw(Constants::eguoukkowuumuwgi, [Constants::uqkkmyyqwqaqeage => $qceyowgiyaiaqeyi, Constants::egswciakmaaouces => $gsgwomokyuwmqqkg]); return $this; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->imkyoqyocosuqasu(Constants::eguoukkowuumuwgi)[Constants::egswciakmaaouces] ?? [], true); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { if (!is_numeric($mksyucucyswaukig)) { goto gessacesaaekqkws; } $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); gessacesaaekqkws: $cewmysakgwuuigoy = $this->ukqioecasimmeygm(); $pkyyagewkiyckmwy = $this->waecsyqmwascmqoa($mksyucucyswaukig, $cewmysakgwuuigoy); if ($pkyyagewkiyckmwy) { goto yyyuemkeyacsssye; } $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($this->mwyqswsaeeewsosm($mksyucucyswaukig)); yyyuemkeyacsssye: return $pkyyagewkiyckmwy; } public function qyeguewwsmosqcwc() { $gouqcwikiiygyasc = 0; if (!($this->qcaekwgmiswccowk(Constants::awysmmukegasimmq) || $this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw))) { goto eqeosomseicwmwqu; } $gouqcwikiiygyasc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::gouqcwikiiygyasc, 0); eqeosomseicwmwqu: return $gouqcwikiiygyasc; } public abstract function register(); }
