<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Database\Eloquent\Model as EloquentModel; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Resolver; use WP_Error; class Entity extends EloquentModel { use ModelTrait; protected array $errors = []; public function __construct(array $siquossayskcwkea = []) { static::$resolver = new Resolver(); parent::__construct($siquossayskcwkea); } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { $this->errors[] = $iswcokucwmiosiaq; return $this; } public function yusomaossiaeqoiu(string $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function kumuygiiqswoyasy() : string { return $this->primaryKey; } public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie) { return $this::find($gqgemcmoicmgaqie); } public function ciqgsyoasskoiukm(array $icwicymcioeyeyek, Model $meywaqqsugaoeyys = null) { if (!($icwicymcioeyeyek && $meywaqqsugaoeyys)) { goto yugmwomumkosucsc; } $icwicymcioeyeyek = $meywaqqsugaoeyys->oiemcgqyamccuagg($icwicymcioeyeyek); yugmwomumkosucsc: return $this::create($icwicymcioeyeyek); } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::osgiowwgoumoscii: $this->msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak); goto kqwyogqqwumumiwg; case Constants::uokqiiikaewkmiem: $this->gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak); goto kqwyogqqwumumiwg; } ykogqmmywykgouqy: kqwyogqqwumumiwg: } public function qiwiemuiqiugqqqg($icwicymcioeyeyek) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto yccuomocgmewkeca; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto gcaykgmmmqomsyis; } $egkyssmuqcwaciya = $kooyscwkscsogysg::uqggkiomyiceyooa(); $gqkcqoaumsuwkqom = $kooyscwkscsogysg->kumuygiiqswoyasy(); if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto swuggqyiaiqywgge; } if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto tagquiiokseckkqs; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto gkeymcqqsewayscs; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto ooooceiweeackgie; } [$syeseoiyagmgumcy] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (is_numeric($qqswgiawgeaeoecu)) { goto qysmyemoucigsmua; } goto kuaiscyqkgcouiye; qysmyemoucigsmua: $this->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy)->sync($qqswgiawgeaeoecu); kuaiscyqkgcouiye: ooooceiweeackgie: goto qwiyicoywcekgyce; gkeymcqqsewayscs: if (!is_numeric($qqswgiawgeaeoecu)) { goto kygccamgawookukq; } $csamwuowsigosqys = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$csamwuowsigosqys instanceof self) { goto agsuaimomgsoyiem; } $swmgqkqyqcgemack = static::class; $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto iwsaaiggkciigsmc; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); iwsaaiggkciigsmc: agsuaimomgsoyiem: kygccamgawookukq: qwiyicoywcekgyce: goto qoacckkkwsqkokye; tagquiiokseckkqs: $myqeggyewswyoowe = []; if (!is_array($qqswgiawgeaeoecu)) { goto eucakkcoiiwkwsme; } foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) { $jwsqucqyaoaasykk = $kooyscwkscsogysg->gssiscqyqsacmeca(); if ($aokagokqyuysuksm = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) { goto kgqgcggccmiwayua; } $msqyiyqkassmkgce = $jwsqucqyaoaasykk->ciqgsyoasskoiukm($eqgoocgaqwqcimie); goto kwayumouacgkgyas; kgqgcggccmiwayua: $msqyiyqkassmkgce = $jwsqucqyaoaasykk->cyyiiykmaeuqqgok($aokagokqyuysuksm); $msqyiyqkassmkgce = $jwsqucqyaoaasykk->oogeaysoqqooqoam($eqgoocgaqwqcimie, $msqyiyqkassmkgce); kwayumouacgkgyas: if (!$msqyiyqkassmkgce) { goto rgaagksgsewuwgmo; } $myqeggyewswyoowe[] = $msqyiyqkassmkgce; rgaagksgsewuwgmo: cwyaysecsakaqgew: } swesqeqmagkicuws: if (!$myqeggyewswyoowe) { goto mcmcocyuugueaeww; } $this->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe); mcmcocyuugueaeww: eucakkcoiiwkwsme: qoacckkkwsqkokye: goto ocwouquuwsaqakae; swuggqyiaiqywgge: if (!is_numeric($qqswgiawgeaeoecu)) { goto wsqeiwkgoiekwasy; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto smmagoyuqoigoesc; } $miowmmgaiagcuyoo = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$miowmmgaiagcuyoo instanceof self) { goto ayucsuwsiocgycww; } $accumooemgmowewu = static::class; $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto eiicmcasqikiyasw; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); eiicmcasqikiyasw: ayucsuwsiocgycww: smmagoyuqoigoesc: wsqeiwkgoiekwasy: ocwouquuwsaqakae: gcaykgmmmqomsyis: yccuomocgmewkeca: gmsyoscesymiwwue: } aqksouwmeckaqyaq: } public function oogeaysoqqooqoam(array $icwicymcioeyeyek) : self { $icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto syuywgysqyckcqay; } goto kmseiouukkqiumum; syuywgysqyckcqay: $this->setAttribute($oaukocmsckciqaok, $eqgoocgaqwqcimie); kmseiouukkqiumum: } suiywiakesiegcwu: return $this; } public function gsegsiocqmsoayii(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); $aagguieukukuysce = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus(); if ($meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa()) { goto wgeueumgacuuuama; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\102\x75\151\154\x64\x65\x72\40\151\163\x20\x6e\x75\154\154\54\x20\x6d\x61\x79\142\x65\40\164\141\x62\154\x65\40\x6e\x6f\x74\x20\143\162\145\x61\x74\x65\144\56", PR__CMN__FOUNDATION)); goto yukacyeckkwagusw; wgeueumgacuuuama: try { $oikmcqwkmsyiicqs = $this; $gkyciwoiiisgywcs = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = []; $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek); if (!($ecukkacusqswqoem && is_array($ecukkacusqswqoem))) { goto ggewkaiwwgkmkwgc; } $icwicymcioeyeyek = $ecukkacusqswqoem; ggewkaiwwgkmkwgc: if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg)) { goto ycueoqkeakismiqw; } $iggwcmkgmicmouyu = true; $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::foqikyqyomykkqaq, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek); if ($this->ymugiyemyggoumci()) { goto kkieqqwwascekcmo; } $oiegkigmcqckmuiu = $oikmcqwkmsyiicqs::class; $oikmcqwkmsyiicqs = new $oiegkigmcqckmuiu(); kkieqqwwascekcmo: goto awimwukcyiceackk; ycueoqkeakismiqw: $iggwcmkgmicmouyu = false; $oikmcqwkmsyiicqs = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcmgqqsieiswuoqu, $yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek, $yeacayasgueouoqc); awimwukcyiceackk: if (!(!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci())) { goto mugeiwyysiemwaym; } $this->iqauecoycmqkimak(Constants::osgiowwgoumoscii, $icwicymcioeyeyek, $yeacayasgueouoqc); mugeiwyysiemwaym: if ($oikmcqwkmsyiicqs instanceof self) { goto auaywaskqooasiuq; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\117\x62\152\145\x63\164\40\x69\x73\x20\156\x6f\x74\40\x73\165\x62\143\154\x61\x73\x73\40\x6f\146\x20\x4d\157\144\x65\154", PR__CMN__FOUNDATION)); goto ewoqyogcaksucksk; auaywaskqooasiuq: $ueeagokqmgisgauy = $meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\162\155\137\163\141\x76\x65\x5f\166\141\x6c\x69\x64\141\x74\x69\157\156", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $oikmcqwkmsyiicqs, $this); if (empty($ueeagokqmgisgauy)) { goto gkwoqoeaecgkymeu; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); goto ouaoyqugwsagkqaa; gkwoqoeaecgkymeu: $oikmcqwkmsyiicqs->oogeaysoqqooqoam($icwicymcioeyeyek); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::gseyicoqugouoega, $icwicymcioeyeyek); if ($oikmcqwkmsyiicqs->save()) { goto cyymeyomuakqakwo; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\x43\x61\x6e\40\x6e\x6f\x74\40\x73\141\x76\x65\x20\45\163\x2e", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())); goto uwscegkmmumymoaq; cyymeyomuakqakwo: $aokagokqyuysuksm = $oikmcqwkmsyiicqs->{$ceiwsaacewygcsqg}; $oikmcqwkmsyiicqs->qiwiemuiqiugqqqg($icwicymcioeyeyek); if ($iggwcmkgmicmouyu) { goto euymeegkukskiowq; } $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcygmokkcookwamq, $aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); goto cquikgykuscqmigw; euymeegkukskiowq: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::mekoamssmeieqsuk, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->notify($aokagokqyuysuksm, $icwicymcioeyeyek); cquikgykuscqmigw: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::kasgeoiieeaeekiy, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ymgmacamemggesko(); uwscegkmmumymoaq: ouaoyqugwsagkqaa: ewoqyogcaksucksk: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai, false)); } yukacyeckkwagusw: return $sogksuscggsicmac; } public function sgcuwcowgwimgsgk($aokagokqyuysuksm, bool $cwwowqyuwccuykom = false) { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $ksaameoqigiaoigg = false; if (!$mksyucucyswaukig instanceof self) { goto kmiqskugkmaiugae; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\143\141\x6e\137\x64\145\x6c\145\164\145\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}", true, $mksyucucyswaukig, $cwwowqyuwccuykom)) { goto iuaeeeeggkikuiig; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\x6d\x5f\x62\x65\146\x6f\162\145\x5f\144\x65\154\x65\164\145\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", $mksyucucyswaukig, $aokagokqyuysuksm); try { if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto simkiasocoimioew; } if ($mksyucucyswaukig->delete()) { goto qgyaeoqgekocwkmw; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\x64\145\x6c\145\164\145\x5f\146\141\151\154\145\x64", $aokagokqyuysuksm); goto sieykcqauaygcais; qgyaeoqgekocwkmw: $ksaameoqigiaoigg = true; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\x72\x6d\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x64\145\154\x65\164\145\144", $aokagokqyuysuksm); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $meywaqqsugaoeyys->ymgmacamemggesko(); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::sciqoswsucgmimyi, $aokagokqyuysuksm, $mksyucucyswaukig); sieykcqauaygcais: simkiasocoimioew: } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\162\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\144\145\154\145\x74\x65\x5f\146\141\151\154\x65\144", $aokagokqyuysuksm); } iuaeeeeggkikuiig: kmiqskugkmaiugae: return $ksaameoqigiaoigg; } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) : array { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->gsegsiocqmsoayii($icwicymcioeyeyek, $cwwowqyuwccuykom); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], array $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if (!($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek))) { goto cqemkecywkkwaaii; } return $siykeiywomwwuoiw->update($icwicymcioeyeyek); cqemkecywkkwaaii: return 0; } private function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto ieoiygycmseqmmgc; } goto qaikeckkiwasykwk; ieoiygycmseqmmgc: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($oaukocmsckciqaok); if (!($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign)) { goto cykaikwsaskgeemo; } if ($aaqqkgyougeiueyq instanceof Json) { goto giuswooyckooaoms; } if ($aaqqkgyougeiueyq instanceof Enum) { goto qswqmgiwiyyqwioa; } if ($aaqqkgyougeiueyq instanceof Boolean) { goto wqieuwguumokgyqg; } if (!($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie))) { goto wkqwywgikoyqkyeg; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); wkqwywgikoyqkyeg: goto aueiggyawkmkamum; wqieuwguumokgyqg: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; aueiggyawkmkamum: goto omekuqkuugyocmoc; qswqmgiwiyyqwioa: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie) { goto ysggiwiksocomkek; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); ysggiwiksocomkek: omekuqkuugyocmoc: goto uogkcsaewswoaosw; giuswooyckooaoms: if (!empty($eqgoocgaqwqcimie)) { goto gkuwmiusoqwesqoo; } $eqgoocgaqwqcimie = null; gkuwmiusoqwesqoo: if (!is_array($eqgoocgaqwqcimie)) { goto wmsiqkyqsiysgcyy; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); wmsiqkyqsiysgcyy: uogkcsaewswoaosw: if (!empty($eqgoocgaqwqcimie)) { goto miqmoasmioksggkm; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); miqmoasmioksggkm: $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; cykaikwsaskgeemo: qaikeckkiwasykwk: } wcioaoeiiawwqqqq: return $ouggaewqmssscyii; } }
