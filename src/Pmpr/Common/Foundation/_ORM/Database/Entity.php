<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Database\Eloquent\Model as EloquentModel; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Resolver; use WP_Error; class Entity extends EloquentModel { use ModelTrait; protected array $errors = []; public function __construct(array $siquossayskcwkea = []) { static::$resolver = new Resolver(); parent::__construct($siquossayskcwkea); } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { $this->errors[] = $iswcokucwmiosiaq; return $this; } public function yusomaossiaeqoiu(string $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function kumuygiiqswoyasy() : string { return $this->primaryKey; } public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie) { return $this::find($gqgemcmoicmgaqie); } public function ciqgsyoasskoiukm(array $icwicymcioeyeyek, Model $meywaqqsugaoeyys = null) { if (!($icwicymcioeyeyek && $meywaqqsugaoeyys)) { goto kgqgcggccmiwayua; } $icwicymcioeyeyek = $meywaqqsugaoeyys->oiemcgqyamccuagg($icwicymcioeyeyek); kgqgcggccmiwayua: return $this::create($icwicymcioeyeyek); } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::osgiowwgoumoscii: $this->msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak); goto kwayumouacgkgyas; case Constants::uokqiiikaewkmiem: $this->gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak); goto kwayumouacgkgyas; } rgaagksgsewuwgmo: kwayumouacgkgyas: } public function qiwiemuiqiugqqqg($icwicymcioeyeyek) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto cyymeyomuakqakwo; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto cquikgykuscqmigw; } $egkyssmuqcwaciya = $kooyscwkscsogysg::uqggkiomyiceyooa(); $gqkcqoaumsuwkqom = $kooyscwkscsogysg->kumuygiiqswoyasy(); if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto mugeiwyysiemwaym; } if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto ycueoqkeakismiqw; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto ggewkaiwwgkmkwgc; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto syuywgysqyckcqay; } [$syeseoiyagmgumcy] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (is_numeric($qqswgiawgeaeoecu)) { goto suiywiakesiegcwu; } goto kmseiouukkqiumum; suiywiakesiegcwu: $this->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy)->sync($qqswgiawgeaeoecu); kmseiouukkqiumum: syuywgysqyckcqay: goto kkieqqwwascekcmo; ggewkaiwwgkmkwgc: if (!is_numeric($qqswgiawgeaeoecu)) { goto yccuomocgmewkeca; } $csamwuowsigosqys = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$csamwuowsigosqys instanceof self) { goto gcaykgmmmqomsyis; } $swmgqkqyqcgemack = static::class; $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto ocwouquuwsaqakae; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); ocwouquuwsaqakae: gcaykgmmmqomsyis: yccuomocgmewkeca: kkieqqwwascekcmo: goto awimwukcyiceackk; ycueoqkeakismiqw: $myqeggyewswyoowe = []; if (!is_array($qqswgiawgeaeoecu)) { goto swuggqyiaiqywgge; } foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) { $jwsqucqyaoaasykk = $kooyscwkscsogysg->gssiscqyqsacmeca(); if ($aokagokqyuysuksm = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) { goto gkeymcqqsewayscs; } $msqyiyqkassmkgce = $jwsqucqyaoaasykk->ciqgsyoasskoiukm($eqgoocgaqwqcimie); goto qwiyicoywcekgyce; gkeymcqqsewayscs: $msqyiyqkassmkgce = $jwsqucqyaoaasykk->cyyiiykmaeuqqgok($aokagokqyuysuksm); $msqyiyqkassmkgce = $jwsqucqyaoaasykk->oogeaysoqqooqoam($eqgoocgaqwqcimie, $msqyiyqkassmkgce); qwiyicoywcekgyce: if (!$msqyiyqkassmkgce) { goto tagquiiokseckkqs; } $myqeggyewswyoowe[] = $msqyiyqkassmkgce; tagquiiokseckkqs: ooooceiweeackgie: } kuaiscyqkgcouiye: if (!$myqeggyewswyoowe) { goto qoacckkkwsqkokye; } $this->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe); qoacckkkwsqkokye: swuggqyiaiqywgge: awimwukcyiceackk: goto euymeegkukskiowq; mugeiwyysiemwaym: if (!is_numeric($qqswgiawgeaeoecu)) { goto qysmyemoucigsmua; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto kygccamgawookukq; } $miowmmgaiagcuyoo = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$miowmmgaiagcuyoo instanceof self) { goto agsuaimomgsoyiem; } $accumooemgmowewu = static::class; $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto iwsaaiggkciigsmc; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); iwsaaiggkciigsmc: agsuaimomgsoyiem: kygccamgawookukq: qysmyemoucigsmua: euymeegkukskiowq: cquikgykuscqmigw: cyymeyomuakqakwo: eucakkcoiiwkwsme: } mcmcocyuugueaeww: } public function oogeaysoqqooqoam(array $icwicymcioeyeyek) : self { $icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto ouaoyqugwsagkqaa; } goto gkwoqoeaecgkymeu; ouaoyqugwsagkqaa: $this->setAttribute($oaukocmsckciqaok, $eqgoocgaqwqcimie); gkwoqoeaecgkymeu: } uwscegkmmumymoaq: return $this; } public function gsegsiocqmsoayii(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); $aagguieukukuysce = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus(); if ($meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa()) { goto gkuwmiusoqwesqoo; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\102\x75\x69\154\x64\145\162\40\x69\x73\x20\x6e\x75\154\154\54\40\155\x61\171\142\x65\x20\x74\141\x62\154\145\40\156\157\164\x20\143\162\x65\x61\164\145\x64\56", PR__CMN__FOUNDATION)); goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: try { $oikmcqwkmsyiicqs = $this; $gkyciwoiiisgywcs = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = []; $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek); if (!($ecukkacusqswqoem && is_array($ecukkacusqswqoem))) { goto auaywaskqooasiuq; } $icwicymcioeyeyek = $ecukkacusqswqoem; auaywaskqooasiuq: if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg)) { goto wgeueumgacuuuama; } $iggwcmkgmicmouyu = true; $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::foqikyqyomykkqaq, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek); if ($this->ymugiyemyggoumci()) { goto ewoqyogcaksucksk; } $oiegkigmcqckmuiu = $oikmcqwkmsyiicqs::class; $oikmcqwkmsyiicqs = new $oiegkigmcqckmuiu(); ewoqyogcaksucksk: goto yukacyeckkwagusw; wgeueumgacuuuama: $iggwcmkgmicmouyu = false; $oikmcqwkmsyiicqs = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcmgqqsieiswuoqu, $yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek, $yeacayasgueouoqc); yukacyeckkwagusw: if (!(!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci())) { goto qgyaeoqgekocwkmw; } $this->iqauecoycmqkimak(Constants::osgiowwgoumoscii, $icwicymcioeyeyek, $yeacayasgueouoqc); qgyaeoqgekocwkmw: if ($oikmcqwkmsyiicqs instanceof self) { goto qaikeckkiwasykwk; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\117\142\152\145\143\x74\40\x69\163\x20\x6e\157\x74\x20\163\165\142\143\x6c\141\x73\163\x20\157\146\x20\115\157\x64\145\154", PR__CMN__FOUNDATION)); goto ieoiygycmseqmmgc; qaikeckkiwasykwk: $ueeagokqmgisgauy = $meywaqqsugaoeyys->ocksiywmkyaqseou("\157\162\x6d\x5f\163\x61\166\145\137\166\141\154\x69\144\x61\x74\x69\157\156", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $oikmcqwkmsyiicqs, $this); if (empty($ueeagokqmgisgauy)) { goto cqemkecywkkwaaii; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); goto wcioaoeiiawwqqqq; cqemkecywkkwaaii: $oikmcqwkmsyiicqs->oogeaysoqqooqoam($icwicymcioeyeyek); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::gseyicoqugouoega, $icwicymcioeyeyek); if ($oikmcqwkmsyiicqs->save()) { goto iuaeeeeggkikuiig; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\x43\x61\156\40\x6e\157\164\x20\163\141\166\145\x20\x25\163\56", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())); goto kmiqskugkmaiugae; iuaeeeeggkikuiig: $aokagokqyuysuksm = $oikmcqwkmsyiicqs->{$ceiwsaacewygcsqg}; $oikmcqwkmsyiicqs->qiwiemuiqiugqqqg($icwicymcioeyeyek); if ($iggwcmkgmicmouyu) { goto sieykcqauaygcais; } $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcygmokkcookwamq, $aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); goto simkiasocoimioew; sieykcqauaygcais: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::mekoamssmeieqsuk, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->notify($aokagokqyuysuksm, $icwicymcioeyeyek); simkiasocoimioew: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::kasgeoiieeaeekiy, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ymgmacamemggesko(); kmiqskugkmaiugae: wcioaoeiiawwqqqq: ieoiygycmseqmmgc: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai, false)); } wmsiqkyqsiysgcyy: return $sogksuscggsicmac; } public function sgcuwcowgwimgsgk($aokagokqyuysuksm, bool $cwwowqyuwccuykom = false) { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $ksaameoqigiaoigg = false; if (!$mksyucucyswaukig instanceof self) { goto qswqmgiwiyyqwioa; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\162\x6d\x5f\x63\x61\x6e\137\x64\x65\154\145\x74\x65\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", true, $mksyucucyswaukig, $cwwowqyuwccuykom)) { goto aueiggyawkmkamum; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\x6d\137\x62\145\x66\157\162\x65\x5f\x64\x65\154\x65\164\145\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}", $mksyucucyswaukig, $aokagokqyuysuksm); try { if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto wqieuwguumokgyqg; } if ($mksyucucyswaukig->delete()) { goto ysggiwiksocomkek; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\x65\154\x65\164\145\137\146\141\x69\154\x65\144", $aokagokqyuysuksm); goto wkqwywgikoyqkyeg; ysggiwiksocomkek: $ksaameoqigiaoigg = true; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\162\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\x65\x6c\x65\164\145\144", $aokagokqyuysuksm); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $meywaqqsugaoeyys->ymgmacamemggesko(); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::sciqoswsucgmimyi, $aokagokqyuysuksm, $mksyucucyswaukig); wkqwywgikoyqkyeg: wqieuwguumokgyqg: } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\x72\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\145\x6c\145\164\145\137\146\x61\x69\154\145\144", $aokagokqyuysuksm); } aueiggyawkmkamum: qswqmgiwiyyqwioa: return $ksaameoqigiaoigg; } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) : array { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->gsegsiocqmsoayii($icwicymcioeyeyek, $cwwowqyuwccuykom); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], array $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if (!($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek))) { goto omekuqkuugyocmoc; } return $siykeiywomwwuoiw->update($icwicymcioeyeyek); omekuqkuugyocmoc: return 0; } private function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto miqmoasmioksggkm; } goto uogkcsaewswoaosw; miqmoasmioksggkm: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($oaukocmsckciqaok); if (!($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign)) { goto aiwygewkmigcwusw; } if ($aaqqkgyougeiueyq instanceof Json) { goto kumuckkicykgwqqm; } if ($aaqqkgyougeiueyq instanceof Enum) { goto moqcomgmwiamuomq; } if ($aaqqkgyougeiueyq instanceof Boolean) { goto iqamwyasyoqsugeu; } if (!($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie))) { goto oqsecqsucukywaee; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); oqsecqsucukywaee: goto uiqycwuommmmuowy; iqamwyasyoqsugeu: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; uiqycwuommmmuowy: goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie) { goto keewmqmgqegumiwa; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); keewmqmgqegumiwa: omgkuuyoiugcymmy: goto sguyyaygwyikaggk; kumuckkicykgwqqm: if (!empty($eqgoocgaqwqcimie)) { goto cykaikwsaskgeemo; } $eqgoocgaqwqcimie = null; cykaikwsaskgeemo: if (!is_array($eqgoocgaqwqcimie)) { goto eqemoayymokeqaqi; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); eqemoayymokeqaqi: sguyyaygwyikaggk: if (!empty($eqgoocgaqwqcimie)) { goto ayyyeiyaosoacoqm; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); ayyyeiyaosoacoqm: $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; aiwygewkmigcwusw: uogkcsaewswoaosw: } giuswooyckooaoms: return $ouggaewqmssscyii; } }
