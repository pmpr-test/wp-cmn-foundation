<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Database\Eloquent\Model as EloquentModel; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Resolver; use WP_Error; class Entity extends EloquentModel { use ModelTrait; protected array $errors = []; public function __construct(array $siquossayskcwkea = []) { static::$resolver = new Resolver(); parent::__construct($siquossayskcwkea); } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { $this->errors[] = $iswcokucwmiosiaq; return $this; } public function yusomaossiaeqoiu(string $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function kumuygiiqswoyasy() : string { return $this->primaryKey; } public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie) { return $this::find($gqgemcmoicmgaqie); } public function ciqgsyoasskoiukm(array $icwicymcioeyeyek, Model $meywaqqsugaoeyys = null) { if (!($icwicymcioeyeyek && $meywaqqsugaoeyys)) { goto owkyiywsooiwewgw; } $icwicymcioeyeyek = $meywaqqsugaoeyys->oiemcgqyamccuagg($icwicymcioeyeyek); owkyiywsooiwewgw: return $this::create($icwicymcioeyeyek); } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::osgiowwgoumoscii: $this->msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak); goto wqyymgoekecmskmm; case Constants::uokqiiikaewkmiem: $this->gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak); goto wqyymgoekecmskmm; } emuckswusmmeuwma: wqyymgoekecmskmm: } public function qiwiemuiqiugqqqg($icwicymcioeyeyek) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto oguigickaoqigcoi; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto ccqagygkoaagksyw; } $egkyssmuqcwaciya = $kooyscwkscsogysg::uqggkiomyiceyooa(); $gqkcqoaumsuwkqom = $kooyscwkscsogysg->kumuygiiqswoyasy(); if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto qyguqmkmyqeyqaac; } if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto oogmmeccymcuwwac; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto qckqeqqcoawmwwqw; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto oyciiqiqoqkgoqec; } [$syeseoiyagmgumcy] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (is_numeric($qqswgiawgeaeoecu)) { goto csuwemcoeyqemwks; } goto wcmsamoqaogoouey; csuwemcoeyqemwks: $this->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy)->sync($qqswgiawgeaeoecu); wcmsamoqaogoouey: oyciiqiqoqkgoqec: goto yqywgkymmowyggqa; qckqeqqcoawmwwqw: if (!is_numeric($qqswgiawgeaeoecu)) { goto ioocowswsiqoyaai; } $csamwuowsigosqys = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$csamwuowsigosqys instanceof self) { goto ookeyiumgkqqucia; } $swmgqkqyqcgemack = static::class; $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto oeukmyymqaaakksa; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); oeukmyymqaaakksa: ookeyiumgkqqucia: ioocowswsiqoyaai: yqywgkymmowyggqa: goto wygeysociiyqokyk; oogmmeccymcuwwac: $myqeggyewswyoowe = []; if (!is_array($qqswgiawgeaeoecu)) { goto qoqgokiaagioccqg; } foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) { $jwsqucqyaoaasykk = $kooyscwkscsogysg->gssiscqyqsacmeca(); if ($aokagokqyuysuksm = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) { goto emyuskcwqyscewue; } $msqyiyqkassmkgce = $jwsqucqyaoaasykk->ciqgsyoasskoiukm($eqgoocgaqwqcimie); goto alomqucgmacieuoa; emyuskcwqyscewue: $msqyiyqkassmkgce = $jwsqucqyaoaasykk->cyyiiykmaeuqqgok($aokagokqyuysuksm); $msqyiyqkassmkgce = $jwsqucqyaoaasykk->oogeaysoqqooqoam($eqgoocgaqwqcimie, $msqyiyqkassmkgce); alomqucgmacieuoa: if (!$msqyiyqkassmkgce) { goto yiskaoskyyiswkki; } $myqeggyewswyoowe[] = $msqyiyqkassmkgce; yiskaoskyyiswkki: eugisyswkecacase: } iceuoqgyqsmywqqq: if (!$myqeggyewswyoowe) { goto akieywkiweasukyw; } $this->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe); akieywkiweasukyw: qoqgokiaagioccqg: wygeysociiyqokyk: goto igeoagaweewiscas; qyguqmkmyqeyqaac: if (!is_numeric($qqswgiawgeaeoecu)) { goto kqiakyymyiosoeia; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto agwsusimqmoesgck; } $miowmmgaiagcuyoo = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if (!$miowmmgaiagcuyoo instanceof self) { goto yikyagqossasyqcu; } $accumooemgmowewu = static::class; $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($this); if (!$kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { goto kaocmesokyiikyci; } $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); kaocmesokyiikyci: yikyagqossasyqcu: agwsusimqmoesgck: kqiakyymyiosoeia: igeoagaweewiscas: ccqagygkoaagksyw: oguigickaoqigcoi: sswmkkcyawawqwwg: } cgyikucmysgcmweu: } public function oogeaysoqqooqoam(array $icwicymcioeyeyek) : self { $icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto gqwcuusyiggisuok; } goto akieyasekuwqeugc; gqwcuusyiggisuok: $this->setAttribute($oaukocmsckciqaok, $eqgoocgaqwqcimie); akieyasekuwqeugc: } qmugciukukckmeiu: return $this; } public function gsegsiocqmsoayii(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); $aagguieukukuysce = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus(); if ($meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa()) { goto degewusuggmqqeso; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x42\165\151\x6c\144\x65\x72\x20\x69\x73\x20\156\165\x6c\154\x2c\40\155\141\x79\142\145\x20\164\141\142\154\145\x20\x6e\157\x74\x20\143\x72\145\141\x74\x65\x64\x2e", PR__CMN__FOUNDATION)); goto mogweaaaqocouiug; degewusuggmqqeso: try { $oikmcqwkmsyiicqs = $this; $gkyciwoiiisgywcs = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = []; $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek); if (!($ecukkacusqswqoem && is_array($ecukkacusqswqoem))) { goto ikoaokuwokyiigsu; } $icwicymcioeyeyek = $ecukkacusqswqoem; ikoaokuwokyiigsu: if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg)) { goto sqkmkmcmocigewua; } $iggwcmkgmicmouyu = true; $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::foqikyqyomykkqaq, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek); if ($this->ymugiyemyggoumci()) { goto aouauysuwimgygie; } $oiegkigmcqckmuiu = $oikmcqwkmsyiicqs::class; $oikmcqwkmsyiicqs = new $oiegkigmcqckmuiu(); aouauysuwimgygie: goto kquqgyygaeiwkeko; sqkmkmcmocigewua: $iggwcmkgmicmouyu = false; $oikmcqwkmsyiicqs = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcmgqqsieiswuoqu, $yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek, $yeacayasgueouoqc); kquqgyygaeiwkeko: if (!(!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci())) { goto qogyssukouuesqis; } $this->iqauecoycmqkimak(Constants::osgiowwgoumoscii, $icwicymcioeyeyek, $yeacayasgueouoqc); qogyssukouuesqis: if ($oikmcqwkmsyiicqs instanceof self) { goto mgkaweokcicgiegg; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x4f\142\x6a\145\x63\x74\x20\151\x73\40\156\x6f\164\40\163\165\x62\x63\x6c\141\x73\163\40\x6f\146\x20\x4d\157\144\x65\154", PR__CMN__FOUNDATION)); goto ukcoymqsgmcwokoq; mgkaweokcicgiegg: $ueeagokqmgisgauy = $meywaqqsugaoeyys->ocksiywmkyaqseou("\157\x72\155\137\x73\x61\x76\145\137\x76\x61\x6c\x69\x64\141\x74\x69\x6f\156", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $oikmcqwkmsyiicqs, $this); if (empty($ueeagokqmgisgauy)) { goto agwyiymkkwmywcsw; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); goto qkeyoeyiuqeyicqa; agwyiymkkwmywcsw: $oikmcqwkmsyiicqs->oogeaysoqqooqoam($icwicymcioeyeyek); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::gseyicoqugouoega, $icwicymcioeyeyek); if ($oikmcqwkmsyiicqs->save()) { goto ogaqcigmoyoqcsws; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\103\141\156\40\x6e\157\x74\40\163\141\x76\x65\40\x25\x73\56", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())); goto egmauuemqqqqsgic; ogaqcigmoyoqcsws: $aokagokqyuysuksm = $oikmcqwkmsyiicqs->{$ceiwsaacewygcsqg}; $oikmcqwkmsyiicqs->qiwiemuiqiugqqqg($icwicymcioeyeyek); if ($iggwcmkgmicmouyu) { goto kkoukeoyauekomau; } $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcygmokkcookwamq, $aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); goto wgeqwaisweikegck; kkoukeoyauekomau: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::mekoamssmeieqsuk, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->notify($aokagokqyuysuksm, $icwicymcioeyeyek); wgeqwaisweikegck: $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::kasgeoiieeaeekiy, $aokagokqyuysuksm, $icwicymcioeyeyek); $meywaqqsugaoeyys->ymgmacamemggesko(); egmauuemqqqqsgic: qkeyoeyiuqeyicqa: ukcoymqsgmcwokoq: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai, false)); } mogweaaaqocouiug: return $sogksuscggsicmac; } public function sgcuwcowgwimgsgk($aokagokqyuysuksm, bool $cwwowqyuwccuykom = false) { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $ksaameoqigiaoigg = false; if (!$mksyucucyswaukig instanceof self) { goto yqaqgsyaqomgoowq; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys->ocksiywmkyaqseou("\157\162\x6d\x5f\x63\141\x6e\137\x64\145\x6c\145\x74\145\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", true, $mksyucucyswaukig, $cwwowqyuwccuykom)) { goto uemgoaamkymwuiko; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\155\137\x62\145\x66\x6f\x72\145\x5f\x64\145\154\x65\164\x65\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}", $mksyucucyswaukig, $aokagokqyuysuksm); try { if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto wqiwmousomaigmgm; } if ($mksyucucyswaukig->delete()) { goto aywsyyewoswacqqy; } $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\x64\x65\154\145\164\145\x5f\146\x61\x69\x6c\145\x64", $aokagokqyuysuksm); goto goaaoqkgsieiyuqm; aywsyyewoswacqqy: $ksaameoqigiaoigg = true; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\x72\155\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\145\154\145\x74\145\144", $aokagokqyuysuksm); $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $meywaqqsugaoeyys->ymgmacamemggesko(); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::sciqoswsucgmimyi, $aokagokqyuysuksm, $mksyucucyswaukig); goaaoqkgsieiyuqm: wqiwmousomaigmgm: } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\155\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\144\x65\154\145\164\x65\137\x66\141\x69\x6c\145\x64", $aokagokqyuysuksm); } uemgoaamkymwuiko: yqaqgsyaqomgoowq: return $ksaameoqigiaoigg; } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) : array { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->gsegsiocqmsoayii($icwicymcioeyeyek, $cwwowqyuwccuykom); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], array $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if (!($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek))) { goto cyomeoyuoqywoysa; } return $siykeiywomwwuoiw->update($icwicymcioeyeyek); cyomeoyuoqywoysa: return 0; } private function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto suycyuwkgakgikqw; } goto mmgqsmogqmouuskw; suycyuwkgakgikqw: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($oaukocmsckciqaok); if (!($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign)) { goto swqkecoseauacwio; } if ($aaqqkgyougeiueyq instanceof Json) { goto uikqgasygyaeqcac; } if ($aaqqkgyougeiueyq instanceof Enum) { goto ammqgccmiuwcaeuq; } if ($aaqqkgyougeiueyq instanceof Boolean) { goto csoecqymkecmuueu; } if (!($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie))) { goto cwccggguqewowygo; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); cwccggguqewowygo: goto iyaawicgsuuoykiq; csoecqymkecmuueu: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; iyaawicgsuuoykiq: goto skeqeeuuemswqgwu; ammqgccmiuwcaeuq: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie) { goto ayeysmcoemkcsegm; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); ayeysmcoemkcsegm: skeqeeuuemswqgwu: goto gsiegqomuuccaoos; uikqgasygyaeqcac: if (!empty($eqgoocgaqwqcimie)) { goto eseyciuwmwyauuio; } $eqgoocgaqwqcimie = null; eseyciuwmwyauuio: if (!is_array($eqgoocgaqwqcimie)) { goto kkyumyewcymikswk; } $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); kkyumyewcymikswk: gsiegqomuuccaoos: if (!empty($eqgoocgaqwqcimie)) { goto kcieymewycqwegis; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); kcieymewycqwegis: $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; swqkecoseauacwio: mmgqsmogqmouuskw: } qmawgkeuyyqwcmok: return $ouggaewqmssscyii; } }
