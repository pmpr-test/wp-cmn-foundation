<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Database\Eloquent\Model as EloquentModel; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Resolver; use WP_Error; class Entity extends EloquentModel { use ModelTrait; protected array $errors = []; public function __construct(array $siquossayskcwkea = []) { static::$resolver = new Resolver(); parent::__construct($siquossayskcwkea); } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { $this->errors[] = $iswcokucwmiosiaq; return $this; } public function yusomaossiaeqoiu(string $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function kumuygiiqswoyasy() : string { return $this->primaryKey; } public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie) { return $this::find($gqgemcmoicmgaqie); } public function ciqgsyoasskoiukm(array $icwicymcioeyeyek, Model $meywaqqsugaoeyys = null) { if (!($icwicymcioeyeyek && $meywaqqsugaoeyys)) { goto swuggqyiaiqywgge; } $icwicymcioeyeyek = $meywaqqsugaoeyys->oiemcgqyamccuagg($icwicymcioeyeyek); swuggqyiaiqywgge: return $this::create($icwicymcioeyeyek); } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::osgiowwgoumoscii: $this->msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak); goto ocwouquuwsaqakae; case Constants::uokqiiikaewkmiem: $this->gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak); goto ocwouquuwsaqakae; } gcaykgmmmqomsyis: ocwouquuwsaqakae: } public function qiwiemuiqiugqqqg($icwicymcioeyeyek) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto qaikeckkiwasykwk; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto wcioaoeiiawwqqqq; } $egkyssmuqcwaciya = $kooyscwkscsogysg::uqggkiomyiceyooa(); $gqkcqoaumsuwkqom = $kooyscwkscsogysg->kumuygiiqswoyasy(); if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto kmiqskugkmaiugae; } if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto simkiasocoimioew; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto qgyaeoqgekocwkmw; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto yukacyeckkwagusw; } [$syeseoiyagmgumcy] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (is_numeric($qqswgiawgeaeoecu)) { goto ewoqyogcaksucksk; } goto wgeueumgacuuuama; ewoqyogcaksucksk: $this->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy)->sync($qqswgiawgeaeoecu); wgeueumgacuuuama: yukacyeckkwagusw: goto sieykcqauaygcais; qgyaeoqgekocwkmw: if (!is_numeric($qqswgiawgeaeoecu)) { goto auaywaskqooasiuq; } $csamwuowsigosqys = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$csamwuowsigosqys instanceof self) { goto ouaoyqugwsagkqaa; } $swmgqkqyqcgemack = static::class; $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto gkwoqoeaecgkymeu; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); gkwoqoeaecgkymeu: ouaoyqugwsagkqaa: auaywaskqooasiuq: sieykcqauaygcais: goto iuaeeeeggkikuiig; simkiasocoimioew: $myqeggyewswyoowe = []; if (!is_array($qqswgiawgeaeoecu)) { goto uwscegkmmumymoaq; } foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) { $jwsqucqyaoaasykk = $kooyscwkscsogysg->gssiscqyqsacmeca(); if ($aokagokqyuysuksm = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) { goto mugeiwyysiemwaym; } $msqyiyqkassmkgce = $jwsqucqyaoaasykk->ciqgsyoasskoiukm($eqgoocgaqwqcimie); goto euymeegkukskiowq; mugeiwyysiemwaym: $msqyiyqkassmkgce = $jwsqucqyaoaasykk->cyyiiykmaeuqqgok($aokagokqyuysuksm); $msqyiyqkassmkgce = $jwsqucqyaoaasykk->oogeaysoqqooqoam($eqgoocgaqwqcimie, $msqyiyqkassmkgce); euymeegkukskiowq: if (!$msqyiyqkassmkgce) { goto cquikgykuscqmigw; } $myqeggyewswyoowe[] = $msqyiyqkassmkgce; cquikgykuscqmigw: awimwukcyiceackk: } ycueoqkeakismiqw: if (!$myqeggyewswyoowe) { goto cyymeyomuakqakwo; } $this->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe); cyymeyomuakqakwo: uwscegkmmumymoaq: iuaeeeeggkikuiig: goto cqemkecywkkwaaii; kmiqskugkmaiugae: if (!is_numeric($qqswgiawgeaeoecu)) { goto kkieqqwwascekcmo; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto ggewkaiwwgkmkwgc; } $miowmmgaiagcuyoo = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$miowmmgaiagcuyoo instanceof self) { goto syuywgysqyckcqay; } $accumooemgmowewu = static::class; $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto kmseiouukkqiumum; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); kmseiouukkqiumum: syuywgysqyckcqay: ggewkaiwwgkmkwgc: kkieqqwwascekcmo: cqemkecywkkwaaii: wcioaoeiiawwqqqq: qaikeckkiwasykwk: suiywiakesiegcwu: } yccuomocgmewkeca: } public function oogeaysoqqooqoam(array $icwicymcioeyeyek) : self { $icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto wmsiqkyqsiysgcyy; } goto gkuwmiusoqwesqoo; wmsiqkyqsiysgcyy: $this->setAttribute($oaukocmsckciqaok, $eqgoocgaqwqcimie); gkuwmiusoqwesqoo: } ieoiygycmseqmmgc: return $this; } public function gsegsiocqmsoayii(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); $aagguieukukuysce = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus(); if ($meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa()) { goto iqamwyasyoqsugeu; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x42\x75\x69\154\144\145\x72\x20\x69\x73\40\156\165\x6c\x6c\x2c\40\155\x61\171\x62\x65\40\164\x61\142\154\x65\40\156\157\164\x20\x63\x72\x65\x61\x74\x65\x64\x2e", PR__CMN__FOUNDATION)); goto uiqycwuommmmuowy; iqamwyasyoqsugeu: try { $oikmcqwkmsyiicqs = $this; $gkyciwoiiisgywcs = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = []; $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek); if (!($ecukkacusqswqoem && is_array($ecukkacusqswqoem))) { goto ysggiwiksocomkek; } $icwicymcioeyeyek = $ecukkacusqswqoem; ysggiwiksocomkek: if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg)) { goto wqieuwguumokgyqg; } $iggwcmkgmicmouyu = true; $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::foqikyqyomykkqaq, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek); if ($this->ymugiyemyggoumci()) { goto wkqwywgikoyqkyeg; } $oiegkigmcqckmuiu = $oikmcqwkmsyiicqs::class; $oikmcqwkmsyiicqs = new $oiegkigmcqckmuiu(); wkqwywgikoyqkyeg: goto aueiggyawkmkamum; wqieuwguumokgyqg: $iggwcmkgmicmouyu = false; $oikmcqwkmsyiicqs = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcmgqqsieiswuoqu, $yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek, $yeacayasgueouoqc); aueiggyawkmkamum: if (!(!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci())) { goto qswqmgiwiyyqwioa; } $this->iqauecoycmqkimak(Constants::osgiowwgoumoscii, $icwicymcioeyeyek, $yeacayasgueouoqc); qswqmgiwiyyqwioa: if ($oikmcqwkmsyiicqs instanceof self) { goto keewmqmgqegumiwa; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\117\142\152\x65\x63\x74\x20\x69\x73\x20\156\157\164\x20\163\165\x62\x63\x6c\x61\163\x73\40\x6f\x66\x20\x4d\157\144\145\x6c", PR__CMN__FOUNDATION)); goto oqsecqsucukywaee; keewmqmgqegumiwa: $ueeagokqmgisgauy = $meywaqqsugaoeyys->ocksiywmkyaqseou("\157\x72\x6d\137\x73\x61\166\x65\x5f\x76\141\x6c\x69\144\x61\x74\151\157\156", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $oikmcqwkmsyiicqs, $this); if (empty($ueeagokqmgisgauy)) { goto cykaikwsaskgeemo; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); goto eqemoayymokeqaqi; cykaikwsaskgeemo: $oikmcqwkmsyiicqs->oogeaysoqqooqoam($icwicymcioeyeyek); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::gseyicoqugouoega, $icwicymcioeyeyek); if ($oikmcqwkmsyiicqs->save()) { goto uogkcsaewswoaosw; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\x43\141\x6e\40\156\157\x74\40\x73\x61\x76\145\x20\45\x73\x2e", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())); goto miqmoasmioksggkm; uogkcsaewswoaosw: $aokagokqyuysuksm = $oikmcqwkmsyiicqs->{$ceiwsaacewygcsqg}; $oikmcqwkmsyiicqs->qiwiemuiqiugqqqg($icwicymcioeyeyek); if ($iggwcmkgmicmouyu) { goto omekuqkuugyocmoc; } $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcygmokkcookwamq, $aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); goto giuswooyckooaoms; omekuqkuugyocmoc: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::mekoamssmeieqsuk, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->notify($aokagokqyuysuksm, $icwicymcioeyeyek); giuswooyckooaoms: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::kasgeoiieeaeekiy, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ymgmacamemggesko(); miqmoasmioksggkm: eqemoayymokeqaqi: oqsecqsucukywaee: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai, false)); } uiqycwuommmmuowy: return $sogksuscggsicmac; } public function sgcuwcowgwimgsgk($aokagokqyuysuksm, bool $cwwowqyuwccuykom = false) { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $ksaameoqigiaoigg = false; if (!$mksyucucyswaukig instanceof self) { goto ayyyeiyaosoacoqm; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys->ocksiywmkyaqseou("\157\x72\155\x5f\143\x61\x6e\137\x64\x65\x6c\145\164\145\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", true, $mksyucucyswaukig, $cwwowqyuwccuykom)) { goto sguyyaygwyikaggk; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\162\155\137\x62\145\146\157\162\x65\x5f\x64\145\154\145\164\x65\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", $mksyucucyswaukig, $aokagokqyuysuksm); try { if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto kumuckkicykgwqqm; } if ($mksyucucyswaukig->delete()) { goto moqcomgmwiamuomq; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\162\155\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\x64\x65\154\x65\164\x65\137\x66\x61\151\x6c\145\144", $aokagokqyuysuksm); goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $ksaameoqigiaoigg = true; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\162\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\145\154\145\164\x65\144", $aokagokqyuysuksm); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $meywaqqsugaoeyys->ymgmacamemggesko(); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::sciqoswsucgmimyi, $aokagokqyuysuksm, $mksyucucyswaukig); omgkuuyoiugcymmy: kumuckkicykgwqqm: } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\x72\x6d\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x64\x65\x6c\x65\x74\145\x5f\146\x61\x69\154\x65\x64", $aokagokqyuysuksm); } sguyyaygwyikaggk: ayyyeiyaosoacoqm: return $ksaameoqigiaoigg; } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) : array { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->gsegsiocqmsoayii($icwicymcioeyeyek, $cwwowqyuwccuykom); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], array $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if (!($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek))) { goto aiwygewkmigcwusw; } return $siykeiywomwwuoiw->update($icwicymcioeyeyek); aiwygewkmigcwusw: return 0; } private function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto yqeqouqemksasmqc; } goto ksoawacwkgasqgmk; yqeqouqemksasmqc: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($oaukocmsckciqaok); if (!($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign)) { goto kikkkocywiyuyuqw; } if ($aaqqkgyougeiueyq instanceof Json) { goto qiqegseqwywcmwoe; } if ($aaqqkgyougeiueyq instanceof Enum) { goto amyaoueckysgmmas; } if ($aaqqkgyougeiueyq instanceof Boolean) { goto suwsiaeoumiwkiqg; } if (!($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie))) { goto jkaemsuwyyoamwim; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); jkaemsuwyyoamwim: goto yoauoocuckogmsuw; suwsiaeoumiwkiqg: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; yoauoocuckogmsuw: goto koiyaaokigmamqyc; amyaoueckysgmmas: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie) { goto emioyucskiowqumg; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); emioyucskiowqumg: koiyaaokigmamqyc: goto yosyyiksyyscacus; qiqegseqwywcmwoe: if (!empty($eqgoocgaqwqcimie)) { goto wgaqkacekoyiwggi; } $eqgoocgaqwqcimie = null; wgaqkacekoyiwggi: if (!is_array($eqgoocgaqwqcimie)) { goto cscskwugoamcmqyu; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); cscskwugoamcmqyu: yosyyiksyyscacus: if (!empty($eqgoocgaqwqcimie)) { goto kwcscewawgicomok; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); kwcscewawgicomok: $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; kikkkocywiyuyuqw: ksoawacwkgasqgmk: } ekmogkwmcqsykgsq: return $ouggaewqmssscyii; } }
