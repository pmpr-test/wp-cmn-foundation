<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795745ee4997             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Database\Eloquent\Model as EloquentModel; use Pmpr\Common\Foundation\ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Json; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Database\Schema\Text; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Model\Log; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Entity extends EloquentModel { use ModelTrait; protected array $errors = []; public function __construct(array $siquossayskcwkea = [], ?Model $meywaqqsugaoeyys = null) { if ($meywaqqsugaoeyys) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->setTable($meywaqqsugaoeyys->cokoiaeeomgssqgy()); $this->setConnection($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $this->yusomaossiaeqoiu($meywaqqsugaoeyys->kumuygiiqswoyasy()); $vkkeimekwwkyiyyc = []; if ($meywaqqsugaoeyys->uqeoyqiwywwmsiew(Constants::CREATED_AT)) { $vkkeimekwwkyiyyc[] = Constants::CREATED_AT; } if ($meywaqqsugaoeyys->uqeoyqiwywwmsiew(Constants::UPDATED_AT)) { $vkkeimekwwkyiyyc[] = Constants::UPDATED_AT; } $this->timestamps = $vkkeimekwwkyiyyc; } static::$resolver = Resolver::symcgieuakksimmu(); parent::__construct($siquossayskcwkea); } public function getUpdatedAtColumn() : ?string { return $this->mcqcwciaoqyggeoa(Constants::UPDATED_AT); } public function getCreatedAtColumn() : ?string { return $this->mcqcwciaoqyggeoa(Constants::CREATED_AT); } public function mcqcwciaoqyggeoa(string $aiowsaccomcoikus) : ?string { $vkkeimekwwkyiyyc = $this->timestamps; if ($vkkeimekwwkyiyyc) { if (is_array($vkkeimekwwkyiyyc)) { if (in_array($aiowsaccomcoikus, $vkkeimekwwkyiyyc, true)) { $vkkeimekwwkyiyyc = $aiowsaccomcoikus; } else { $vkkeimekwwkyiyyc = null; } } else { $vkkeimekwwkyiyyc = $aiowsaccomcoikus; } } return $vkkeimekwwkyiyyc; } private function kimugmgsumeqgoue($meywaqqsugaoeyys) { if (is_string($meywaqqsugaoeyys) && is_subclass_of($meywaqqsugaoeyys, Model::class)) { $meywaqqsugaoeyys = $meywaqqsugaoeyys::symcgieuakksimmu(); } return new static([], $meywaqqsugaoeyys); } public function newInstance($siquossayskcwkea = [], $cmaccwokqweqweqi = false) { $oikmcqwkmsyiicqs = $this->kimugmgsumeqgoue($this->mgogaykgkoogasim()); $oikmcqwkmsyiicqs->exists = $cmaccwokqweqweqi; $oikmcqwkmsyiicqs->mergeCasts($this->casts); $oikmcqwkmsyiicqs->fill((array) $siquossayskcwkea); return $oikmcqwkmsyiicqs; } protected function newRelatedInstance($egkyssmuqcwaciya) { return tap($this->kimugmgsumeqgoue($egkyssmuqcwaciya), function ($owgumcsyqsamiemg) { $ewouoaawsumasiay = $owgumcsyqsamiemg->getConnectionName(); if (empty($ewouoaawsumasiay)) { $owgumcsyqsamiemg->setConnection($this->connection); } }); } protected function newRelatedThroughInstance($egkyssmuqcwaciya) { return $this->kimugmgsumeqgoue($egkyssmuqcwaciya); } public function getForeignKey() { $mgkygaegeiiquucs = $this->getKeyName(); return $this->mgogaykgkoogasim()->aakmagwggmkoiiyu() . "\x5f" . $mgkygaegeiiquucs; } public function meisyqiaeakooigg() : string { return $this->getForeignKey(); } public function getConnectionName() { return $this->mgogaykgkoogasim()->cueaickeeoiwayou(); } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq, $ymqmyyeuycgmigyo = null) : self { if ($ymqmyyeuycgmigyo) { $this->errors[$ymqmyyeuycgmigyo] = $iswcokucwmiosiaq; } else { $this->errors[] = $iswcokucwmiosiaq; } return $this; } public function yusomaossiaeqoiu(string $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function kumuygiiqswoyasy() : string { return $this->primaryKey; } public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie) { return static::find($gqgemcmoicmgaqie); } public function ciqgsyoasskoiukm(array $icwicymcioeyeyek, Model $meywaqqsugaoeyys = null) { if ($icwicymcioeyeyek && $meywaqqsugaoeyys) { $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek); if ($ecukkacusqswqoem && is_array($ecukkacusqswqoem)) { $icwicymcioeyeyek = $ecukkacusqswqoem; } } return $this::create($icwicymcioeyeyek); } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::qukociwggmsusagw: $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::qukociwggmsusagw, $uwomkgseoiegeume, $msqkueqksqwmskak); break; case Constants::aesecoisycsqcgmo: $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::aesecoisycsqcgmo, $uwomkgseoiegeume, $msqkueqksqwmskak); break; } } public function qiwiemuiqiugqqqg($icwicymcioeyeyek) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $moqewomugocaueis = $meywaqqsugaoeyys->mwyqswsaeeewsosm($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq instanceof Foreign) { $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($kooyscwkscsogysg) { $gqkcqoaumsuwkqom = $kooyscwkscsogysg->kumuygiiqswoyasy(); if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { if (is_numeric($qqswgiawgeaeoecu) && !$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $miowmmgaiagcuyoo = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if ($miowmmgaiagcuyoo instanceof self) { $miowmmgaiagcuyoo->hasOne($kooyscwkscsogysg)->save($this); if ($kooyscwkscsogysg->kcsywgyywsgqgawm($uusmaiomayssaecw)) { $meywaqqsugaoeyys->ayqesuasiggqoeeo()->qicmaqwoqqguccmo($meywaqqsugaoeyys->mwyqswsaeeewsosm($this)); } } } } else { if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { $myqeggyewswyoowe = []; if (is_array($qqswgiawgeaeoecu)) { foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) { $jwsqucqyaoaasykk = $kooyscwkscsogysg->gssiscqyqsacmeca(); if ($aokagokqyuysuksm = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) { $msqyiyqkassmkgce = $jwsqucqyaoaasykk->cyyiiykmaeuqqgok($aokagokqyuysuksm); $msqyiyqkassmkgce = $msqyiyqkassmkgce->oogeaysoqqooqoam($eqgoocgaqwqcimie); } else { $msqyiyqkassmkgce = $jwsqucqyaoaasykk->ciqgsyoasskoiukm($eqgoocgaqwqcimie); } if ($msqyiyqkassmkgce) { $myqeggyewswyoowe[] = $msqyiyqkassmkgce; } } if ($myqeggyewswyoowe) { $this->hasMany($kooyscwkscsogysg)->saveMany($myqeggyewswyoowe); } } } else { if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { if (is_numeric($qqswgiawgeaeoecu)) { $csamwuowsigosqys = $kooyscwkscsogysg->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($qqswgiawgeaeoecu); if ($csamwuowsigosqys instanceof self) { $csamwuowsigosqys->hasMany($meywaqqsugaoeyys)->save($this); } } } else { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { $gkioossaaiumqqsq = $meywaqqsugaoeyys->iekyeyicoyyawomk(); [$syeseoiyagmgumcy] = $gkioossaaiumqqsq->acamgaegcsioysiw($aaqqkgyougeiueyq); if (is_numeric($qqswgiawgeaeoecu) || is_array($qqswgiawgeaeoecu)) { $this->belongsToMany($kooyscwkscsogysg, $syeseoiyagmgumcy)->sync($qqswgiawgeaeoecu); } else { $kigkqqecukocigoo = $gkioossaaiumqqsq->iykmimcgkyyoimoc($gkioossaaiumqqsq->mgacegaoeamymmya($uusmaiomayssaecw, $icwicymcioeyeyek), $uusmaiomayssaecw); if ($moqewomugocaueis && $kigkqqecukocigoo) { $this->belongsToMany($kooyscwkscsogysg, $syeseoiyagmgumcy)->detach($kigkqqecukocigoo); } } } } } } } } } } public function gccwawquiskkswiu($mksyucucyswaukig, $wmsemckauqqyacgm) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($wmsemckauqqyacgm); if ($aaqqkgyougeiueyq instanceof Foreign) { try { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig)); if ($mksyucucyswaukig instanceof self) { $sgmoseoaumayiowg = $meywaqqsugaoeyys->waecsyqmwascmqoa($mksyucucyswaukig, $wmsemckauqqyacgm); if ($kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { } else { if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { } else { if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { $mksyucucyswaukig->belongsTo($kooyscwkscsogysg, $wmsemckauqqyacgm)->dissociate(); $mksyucucyswaukig->save(); } else { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { } } } } } } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } public function oogeaysoqqooqoam(array $icwicymcioeyeyek) : self { $icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok) { continue; } $this->setAttribute($oaukocmsckciqaok, $eqgoocgaqwqcimie); } return $this; } private function yuokwuuigmcwmuyi($aokagokqyuysuksm, $msqkueqksqwmskak, $uwomkgseoiegeume) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($kmkmskeiwsggmkay = $meywaqqsugaoeyys->uaiaimyesysoggsc()) { $qssskwiqeumgkago = $meywaqqsugaoeyys->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq->umcwswocgeismgmo()) { $ymyqweogikqywwqc = $meywaqqsugaoeyys->waecsyqmwascmqoa($msqkueqksqwmskak, $aaqqkgyougeiueyq); $cusosqmyoqiykqgw = $meywaqqsugaoeyys->waecsyqmwascmqoa($uwomkgseoiegeume, $aaqqkgyougeiueyq); if ($ymyqweogikqywwqc != $cusosqmyoqiykqgw) { $kmkmskeiwsggmkay->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::meksegaoamowuwoq => $meywaqqsugaoeyys->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(), Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->iooowgsqoyqseyuu(), Log::uoioosmmoaakkyuu => $msqkueqksqwmskak, Log::uugekaiouaeowkmy => $uwomkgseoiegeume, $kmkmskeiwsggmkay->meqwysqkeuyqiioi() => $aokagokqyuysuksm], true); } } } } } private function cusiewwmwiqkqawe($aokagokqyuysuksm, $icwicymcioeyeyek) : array { $eciuecguuowmeyqg = []; if ($yquywseiyocsiqco = $this->mgogaykgkoogasim()->queegmguugiecims()) { $kuguwoaesuqsqysu = $yquywseiyocsiqco->uuoweqwcguauaemy(); foreach ($kuguwoaesuqsqysu as $uusmaiomayssaecw => $ywmkwiwkosakssii) { $eqgoocgaqwqcimie = Constants::oimusiegakqgwosg; $gwiwsycaaqgwmewg = Constants::uoecwawqwkyiaumu . $uusmaiomayssaecw; if (isset($icwicymcioeyeyek[Constants::ckcuiukmyisueqeo][$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ckcuiukmyisueqeo][$uusmaiomayssaecw]; } else { if (isset($icwicymcioeyeyek[$gwiwsycaaqgwmewg])) { $eqgoocgaqwqcimie = $icwicymcioeyeyek[$gwiwsycaaqgwmewg]; } else { if (isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $icwicymcioeyeyek[$uusmaiomayssaecw]; } } } if ($eqgoocgaqwqcimie !== Constants::oimusiegakqgwosg) { $sogksuscggsicmac = $this->aawsuyueaaimeqsm($aokagokqyuysuksm, $uusmaiomayssaecw, $eqgoocgaqwqcimie); if (is_array($sogksuscggsicmac) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $eciuecguuowmeyqg[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } } } } return $eciuecguuowmeyqg; } public function gsegsiocqmsoayii(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy(); $aagguieukukuysce = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus(); $gkyciwoiiisgywcs = $meywaqqsugaoeyys->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg); $oikmcqwkmsyiicqs = null; $iggwcmkgmicmouyu = empty($aokagokqyuysuksm); if ($meywaqqsugaoeyys->iekyeyicoyyawomk()->gqaysymikgeawkqa()) { try { $yeacayasgueouoqc = []; $ecukkacusqswqoem = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::emsskyeoaqokwsoa, $icwicymcioeyeyek, $aokagokqyuysuksm); if ($ecukkacusqswqoem && is_array($ecukkacusqswqoem)) { $icwicymcioeyeyek = $ecukkacusqswqoem; } if (!$this->ymugiyemyggoumci()) { if ($iggwcmkgmicmouyu) { $oikmcqwkmsyiicqs = $this->kimugmgsumeqgoue($meywaqqsugaoeyys); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::foqikyqyomykkqaq, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::aesecoisycsqcgmo, $icwicymcioeyeyek); } else { $oikmcqwkmsyiicqs = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcmgqqsieiswuoqu, $yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::aesecoisycsqcgmo, $icwicymcioeyeyek, $yeacayasgueouoqc); } } if (!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci()) { $this->iqauecoycmqkimak(Constants::qukociwggmsusagw, $icwicymcioeyeyek, $yeacayasgueouoqc); } if ($oikmcqwkmsyiicqs instanceof self) { $ueeagokqmgisgauy = $meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\162\x6d\137\x73\141\x76\145\137\166\x61\154\151\x64\141\164\151\x6f\x6e", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $oikmcqwkmsyiicqs, $this); if (empty($ueeagokqmgisgauy)) { $oikmcqwkmsyiicqs->oogeaysoqqooqoam($icwicymcioeyeyek); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::gseyicoqugouoega, $icwicymcioeyeyek); date_default_timezone_set($meywaqqsugaoeyys->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->wuewyokucwcuqcyw()); if ($oikmcqwkmsyiicqs->save()) { $aokagokqyuysuksm = $oikmcqwkmsyiicqs->{$ceiwsaacewygcsqg}; $this->yuokwuuigmcwmuyi($aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); $kuguwoaesuqsqysu = $this->cusiewwmwiqkqawe($aokagokqyuysuksm, $icwicymcioeyeyek); $oikmcqwkmsyiicqs->qiwiemuiqiugqqqg($icwicymcioeyeyek); $siquossayskcwkea = $meywaqqsugaoeyys->ccekeuwwqqoiwuwy($oikmcqwkmsyiicqs); if ($iggwcmkgmicmouyu) { $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::mekoamssmeieqsuk, $aokagokqyuysuksm, $icwicymcioeyeyek, $siquossayskcwkea); if ($iauqwemmwkwkemqi = $meywaqqsugaoeyys->ayqesuasiggqoeeo()) { $iauqwemmwkwkemqi->notify($aokagokqyuysuksm, $icwicymcioeyeyek); } } else { $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::qcygmokkcookwamq, $aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek, $siquossayskcwkea); } $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::kasgeoiieeaeekiy, $aokagokqyuysuksm, $icwicymcioeyeyek, $siquossayskcwkea); $meywaqqsugaoeyys->ymgmacamemggesko(); $sogksuscggsicmac = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, Constants::iikosyqiawkweouo => $siquossayskcwkea]; } else { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\x43\141\156\40\x6e\157\x74\40\163\141\166\145\x20\x25\x73\56", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())); } } else { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); } } else { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\117\142\x6a\145\x63\164\40\x69\163\40\x6e\157\164\40\163\165\142\143\154\x61\x73\163\x20\157\146\x20\115\x6f\144\145\154", PR__CMN__FOUNDATION)); } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai)); } } else { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\102\165\x69\x6c\x64\x65\x72\40\151\163\40\x6e\165\154\x6c\54\x20\x6d\x61\171\x62\x65\40\x74\141\x62\154\x65\x20\x6e\x6f\164\40\143\x72\145\x61\164\145\x64\x2e", PR__CMN__FOUNDATION)); } $aiamqeawckcsuaou = $iggwcmkgmicmouyu ? "\143\162\x65\x61\x74\x65\x64" : "\x75\x70\x64\141\x74\145\144"; $iueymcwwscwqkiyq = !is_wp_error($sogksuscggsicmac) ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\x72\x6d\x5f{$iueymcwwscwqkiyq}\x5f{$aiamqeawckcsuaou}", $oikmcqwkmsyiicqs, $icwicymcioeyeyek); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\162\x6d\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f{$iueymcwwscwqkiyq}\x5f{$aiamqeawckcsuaou}", $oikmcqwkmsyiicqs, $icwicymcioeyeyek); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\155\137{$meywaqqsugaoeyys->aakmagwggmkoiiyu()}\x5f{$iueymcwwscwqkiyq}\137{$aiamqeawckcsuaou}", $oikmcqwkmsyiicqs, $icwicymcioeyeyek); return $sogksuscggsicmac; } public function aawsuyueaaimeqsm($uyaimqisayeqocig, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($yquywseiyocsiqco = $meywaqqsugaoeyys->queegmguugiecims()) { $ugugimquukqwogge = [Constants::osocaqqumyuooqyo => $uusmaiomayssaecw, Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie]; $moqewomugocaueis = $meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig); $qgoqiacsiccwoawi = $yquywseiyocsiqco->meqwysqkeuyqiioi(); $eqwoegegiamegqsm = $meywaqqsugaoeyys->caokeucsksukesyo()->skckwsgymkimyuwo(); $swwmymiaiosiyqis = $yquywseiyocsiqco->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, $moqewomugocaueis), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::osocaqqumyuooqyo, $uusmaiomayssaecw)]); if ($swwmymiaiosiyqis) { if ($yquywseiyocsiqco->waecsyqmwascmqoa($swwmymiaiosiyqis, Constants::iwmgegikocuwggua) == $eqgoocgaqwqcimie) { return false; } $ugugimquukqwogge = (array) $swwmymiaiosiyqis; $ugugimquukqwogge[Constants::iwmgegikocuwggua] = $eqgoocgaqwqcimie; } else { if (empty($eqgoocgaqwqcimie)) { return false; } $ugugimquukqwogge[$qgoqiacsiccwoawi] = $moqewomugocaueis; } return $yquywseiyocsiqco->gssiscqyqsacmeca()->gsegsiocqmsoayii($ugugimquukqwogge, true); } return false; } public function sgcuwcowgwimgsgk($aokagokqyuysuksm, bool $cwwowqyuwccuykom = false) { $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm); $ksaameoqigiaoigg = false; if ($mksyucucyswaukig instanceof self) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys->ocksiywmkyaqseou("\x6f\162\155\137\143\141\156\x5f\x64\x65\x6c\x65\x74\145\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", true, $mksyucucyswaukig, $cwwowqyuwccuykom)) { $meywaqqsugaoeyys->ewcsyqaaigkicgse("\157\x72\155\137\x62\145\x66\157\x72\145\137\144\x65\154\145\164\145\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}", $mksyucucyswaukig, $aokagokqyuysuksm); try { if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { if ($mksyucucyswaukig->delete()) { $ksaameoqigiaoigg = true; $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\x72\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\144\x65\154\145\164\145\x64", $aokagokqyuysuksm); if ($iauqwemmwkwkemqi = $meywaqqsugaoeyys->ayqesuasiggqoeeo()) { $iauqwemmwkwkemqi->qicmaqwoqqguccmo($aokagokqyuysuksm); } $meywaqqsugaoeyys->ymgmacamemggesko(); $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::sciqoswsucgmimyi, $aokagokqyuysuksm, $mksyucucyswaukig); } else { $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\x6d\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\144\x65\x6c\x65\x74\145\x5f\146\141\x69\154\145\144", $aokagokqyuysuksm); } } } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($meywaqqsugaoeyys->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); $meywaqqsugaoeyys->ewcsyqaaigkicgse("\x6f\162\x6d\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x64\145\x6c\145\164\x65\x5f\146\141\151\x6c\x65\144", $aokagokqyuysuksm); } } } return $ksaameoqigiaoigg; } public final function eaywmggcsekawucw($kkwiugaciesikaqk, string $qgoqiacsiccwoawi, $eqgoocgaqwqcimie, bool $oeyyimgeuqaseqai = false) { return $this->wqikesawekycweoi($kkwiugaciesikaqk, [$qgoqiacsiccwoawi => $eqgoocgaqwqcimie], $oeyyimgeuqaseqai); } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mgogaykgkoogasim()->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->gsegsiocqmsoayii($icwicymcioeyeyek, $oeyyimgeuqaseqai); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if ($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek)) { return $siykeiywomwwuoiw->update($icwicymcioeyeyek); } return 0; } private function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok) { continue; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($oaukocmsckciqaok); if ($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign) { if ($aaqqkgyougeiueyq instanceof Json) { if (empty($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = null; } if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } } else { if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); } } else { if ($aaqqkgyougeiueyq instanceof Boolean) { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; } else { if ($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } } } } if (empty($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); } $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; } } return $ouggaewqmssscyii; } }
