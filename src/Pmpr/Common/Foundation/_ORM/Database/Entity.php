<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Database\Eloquent\Model as EloquentModel; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Resolver; use WP_Error; class Entity extends EloquentModel { use ModelTrait; protected array $errors = []; public function __construct(array $siquossayskcwkea = []) { static::$resolver = new Resolver(); parent::__construct($siquossayskcwkea); } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { $this->errors[] = $iswcokucwmiosiaq; return $this; } public function yusomaossiaeqoiu(string $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function kumuygiiqswoyasy() : string { return $this->primaryKey; } public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie) { return $this::find($gqgemcmoicmgaqie); } public function ciqgsyoasskoiukm(array $icwicymcioeyeyek, Model $meywaqqsugaoeyys = null) { if (!($icwicymcioeyeyek && $meywaqqsugaoeyys)) { goto awkqcyusycccekwq; } $icwicymcioeyeyek = $meywaqqsugaoeyys->oiemcgqyamccuagg($icwicymcioeyeyek); awkqcyusycccekwq: return $this::create($icwicymcioeyeyek); } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::osgiowwgoumoscii: $this->msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak); goto yugmwomumkosucsc; case Constants::uokqiiikaewkmiem: $this->gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak); goto yugmwomumkosucsc; } kqwyogqqwumumiwg: yugmwomumkosucsc: } public function qiwiemuiqiugqqqg($icwicymcioeyeyek) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto gcaykgmmmqomsyis; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto ocwouquuwsaqakae; } $egkyssmuqcwaciya = $kooyscwkscsogysg::uqggkiomyiceyooa(); $gqkcqoaumsuwkqom = $kooyscwkscsogysg->kumuygiiqswoyasy(); if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto qoacckkkwsqkokye; } if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto qwiyicoywcekgyce; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto ooooceiweeackgie; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto kuaiscyqkgcouiye; } [$syeseoiyagmgumcy] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (is_numeric($qqswgiawgeaeoecu)) { goto kygccamgawookukq; } goto qysmyemoucigsmua; kygccamgawookukq: $this->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy)->sync($qqswgiawgeaeoecu); qysmyemoucigsmua: kuaiscyqkgcouiye: goto gkeymcqqsewayscs; ooooceiweeackgie: if (!is_numeric($qqswgiawgeaeoecu)) { goto agsuaimomgsoyiem; } $csamwuowsigosqys = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$csamwuowsigosqys instanceof self) { goto iwsaaiggkciigsmc; } $swmgqkqyqcgemack = static::class; $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto eucakkcoiiwkwsme; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); eucakkcoiiwkwsme: iwsaaiggkciigsmc: agsuaimomgsoyiem: gkeymcqqsewayscs: goto tagquiiokseckkqs; qwiyicoywcekgyce: $myqeggyewswyoowe = []; if (!is_array($qqswgiawgeaeoecu)) { goto mcmcocyuugueaeww; } foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) { $jwsqucqyaoaasykk = $kooyscwkscsogysg->gssiscqyqsacmeca(); if ($aokagokqyuysuksm = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) { goto cwyaysecsakaqgew; } $msqyiyqkassmkgce = $jwsqucqyaoaasykk->ciqgsyoasskoiukm($eqgoocgaqwqcimie); goto kgqgcggccmiwayua; cwyaysecsakaqgew: $msqyiyqkassmkgce = $jwsqucqyaoaasykk->cyyiiykmaeuqqgok($aokagokqyuysuksm); $msqyiyqkassmkgce = $jwsqucqyaoaasykk->oogeaysoqqooqoam($eqgoocgaqwqcimie, $msqyiyqkassmkgce); kgqgcggccmiwayua: if (!$msqyiyqkassmkgce) { goto kwayumouacgkgyas; } $myqeggyewswyoowe[] = $msqyiyqkassmkgce; kwayumouacgkgyas: swesqeqmagkicuws: } wsqeiwkgoiekwasy: if (!$myqeggyewswyoowe) { goto rgaagksgsewuwgmo; } $this->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe); rgaagksgsewuwgmo: mcmcocyuugueaeww: tagquiiokseckkqs: goto swuggqyiaiqywgge; qoacckkkwsqkokye: if (!is_numeric($qqswgiawgeaeoecu)) { goto smmagoyuqoigoesc; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto ayucsuwsiocgycww; } $miowmmgaiagcuyoo = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$miowmmgaiagcuyoo instanceof self) { goto eiicmcasqikiyasw; } $accumooemgmowewu = static::class; $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto gmsyoscesymiwwue; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); gmsyoscesymiwwue: eiicmcasqikiyasw: ayucsuwsiocgycww: smmagoyuqoigoesc: swuggqyiaiqywgge: ocwouquuwsaqakae: gcaykgmmmqomsyis: aqksouwmeckaqyaq: } ykogqmmywykgouqy: } public function oogeaysoqqooqoam(array $icwicymcioeyeyek) : self { $icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto kmseiouukkqiumum; } goto suiywiakesiegcwu; kmseiouukkqiumum: $this->setAttribute($oaukocmsckciqaok, $eqgoocgaqwqcimie); suiywiakesiegcwu: } yccuomocgmewkeca: return $this; } public function gsegsiocqmsoayii(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); $aagguieukukuysce = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus(); if ($meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa()) { goto ewoqyogcaksucksk; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x42\165\151\154\x64\x65\x72\40\x69\x73\x20\x6e\x75\154\154\x2c\40\x6d\141\171\142\145\40\164\x61\x62\x6c\x65\x20\156\157\x74\x20\143\162\x65\x61\164\x65\x64\56", PR__CMN__FOUNDATION)); goto wgeueumgacuuuama; ewoqyogcaksucksk: try { $oikmcqwkmsyiicqs = $this; $gkyciwoiiisgywcs = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = []; $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek); if (!($ecukkacusqswqoem && is_array($ecukkacusqswqoem))) { goto syuywgysqyckcqay; } $icwicymcioeyeyek = $ecukkacusqswqoem; syuywgysqyckcqay: if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg)) { goto kkieqqwwascekcmo; } $iggwcmkgmicmouyu = true; $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::foqikyqyomykkqaq, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek); if ($this->ymugiyemyggoumci()) { goto ggewkaiwwgkmkwgc; } $oiegkigmcqckmuiu = $oikmcqwkmsyiicqs::class; $oikmcqwkmsyiicqs = new $oiegkigmcqckmuiu(); ggewkaiwwgkmkwgc: goto ycueoqkeakismiqw; kkieqqwwascekcmo: $iggwcmkgmicmouyu = false; $oikmcqwkmsyiicqs = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcmgqqsieiswuoqu, $yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek, $yeacayasgueouoqc); ycueoqkeakismiqw: if (!(!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci())) { goto awimwukcyiceackk; } $this->iqauecoycmqkimak(Constants::osgiowwgoumoscii, $icwicymcioeyeyek, $yeacayasgueouoqc); awimwukcyiceackk: if ($oikmcqwkmsyiicqs instanceof self) { goto ouaoyqugwsagkqaa; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x4f\x62\x6a\145\143\164\x20\x69\x73\x20\x6e\157\164\40\x73\165\142\x63\154\x61\163\163\40\157\146\x20\x4d\157\x64\x65\154", PR__CMN__FOUNDATION)); goto auaywaskqooasiuq; ouaoyqugwsagkqaa: $ueeagokqmgisgauy = $meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\162\x6d\137\x73\141\166\145\x5f\166\x61\154\151\144\x61\164\151\x6f\x6e", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $oikmcqwkmsyiicqs, $this); if (empty($ueeagokqmgisgauy)) { goto uwscegkmmumymoaq; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); goto gkwoqoeaecgkymeu; uwscegkmmumymoaq: $oikmcqwkmsyiicqs->oogeaysoqqooqoam($icwicymcioeyeyek); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::gseyicoqugouoega, $icwicymcioeyeyek); if ($oikmcqwkmsyiicqs->save()) { goto cquikgykuscqmigw; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\x43\141\156\40\x6e\x6f\164\40\x73\141\166\x65\x20\x25\x73\56", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())); goto cyymeyomuakqakwo; cquikgykuscqmigw: $aokagokqyuysuksm = $oikmcqwkmsyiicqs->{$ceiwsaacewygcsqg}; $oikmcqwkmsyiicqs->qiwiemuiqiugqqqg($icwicymcioeyeyek); if ($iggwcmkgmicmouyu) { goto mugeiwyysiemwaym; } $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcygmokkcookwamq, $aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); goto euymeegkukskiowq; mugeiwyysiemwaym: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::mekoamssmeieqsuk, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->notify($aokagokqyuysuksm, $icwicymcioeyeyek); euymeegkukskiowq: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::kasgeoiieeaeekiy, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ymgmacamemggesko(); cyymeyomuakqakwo: gkwoqoeaecgkymeu: auaywaskqooasiuq: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai, false)); } wgeueumgacuuuama: return $sogksuscggsicmac; } public function sgcuwcowgwimgsgk($aokagokqyuysuksm, bool $cwwowqyuwccuykom = false) { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $ksaameoqigiaoigg = false; if (!$mksyucucyswaukig instanceof self) { goto iuaeeeeggkikuiig; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\x72\155\137\x63\141\156\137\144\x65\154\x65\x74\145\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}", true, $mksyucucyswaukig, $cwwowqyuwccuykom)) { goto simkiasocoimioew; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\x72\x6d\x5f\x62\145\x66\157\162\145\137\x64\145\154\145\164\x65\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", $mksyucucyswaukig, $aokagokqyuysuksm); try { if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto sieykcqauaygcais; } if ($mksyucucyswaukig->delete()) { goto yukacyeckkwagusw; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\x72\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\x65\154\145\164\x65\137\146\x61\151\x6c\145\144", $aokagokqyuysuksm); goto qgyaeoqgekocwkmw; yukacyeckkwagusw: $ksaameoqigiaoigg = true; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\x72\155\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x64\145\154\145\x74\145\144", $aokagokqyuysuksm); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $meywaqqsugaoeyys->ymgmacamemggesko(); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::sciqoswsucgmimyi, $aokagokqyuysuksm, $mksyucucyswaukig); qgyaeoqgekocwkmw: sieykcqauaygcais: } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x64\x65\x6c\x65\164\x65\137\x66\x61\x69\x6c\145\x64", $aokagokqyuysuksm); } simkiasocoimioew: iuaeeeeggkikuiig: return $ksaameoqigiaoigg; } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) : array { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->gsegsiocqmsoayii($icwicymcioeyeyek, $cwwowqyuwccuykom); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], array $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if (!($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek))) { goto kmiqskugkmaiugae; } return $siykeiywomwwuoiw->update($icwicymcioeyeyek); kmiqskugkmaiugae: return 0; } private function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto qaikeckkiwasykwk; } goto wcioaoeiiawwqqqq; qaikeckkiwasykwk: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($oaukocmsckciqaok); if (!($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign)) { goto miqmoasmioksggkm; } if ($aaqqkgyougeiueyq instanceof Json) { goto omekuqkuugyocmoc; } if ($aaqqkgyougeiueyq instanceof Enum) { goto aueiggyawkmkamum; } if ($aaqqkgyougeiueyq instanceof Boolean) { goto wkqwywgikoyqkyeg; } if (!($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie))) { goto ysggiwiksocomkek; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); ysggiwiksocomkek: goto wqieuwguumokgyqg; wkqwywgikoyqkyeg: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; wqieuwguumokgyqg: goto qswqmgiwiyyqwioa; aueiggyawkmkamum: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie) { goto wmsiqkyqsiysgcyy; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); wmsiqkyqsiysgcyy: qswqmgiwiyyqwioa: goto giuswooyckooaoms; omekuqkuugyocmoc: if (!empty($eqgoocgaqwqcimie)) { goto ieoiygycmseqmmgc; } $eqgoocgaqwqcimie = null; ieoiygycmseqmmgc: if (!is_array($eqgoocgaqwqcimie)) { goto gkuwmiusoqwesqoo; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); gkuwmiusoqwesqoo: giuswooyckooaoms: if (!empty($eqgoocgaqwqcimie)) { goto uogkcsaewswoaosw; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); uogkcsaewswoaosw: $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; miqmoasmioksggkm: wcioaoeiiawwqqqq: } cqemkecywkkwaaii: return $ouggaewqmssscyii; } }