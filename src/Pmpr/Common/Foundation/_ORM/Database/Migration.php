<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Exception; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\ColumnDefinition; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Illuminate\Database\Schema\Builder; class Migration extends Common { use ModelTrait; protected array $many2many = []; protected ?Builder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\154\157\x61\144\145\x64", [$this, "\x65\163\x6f\x77\163\145\x61\x61\x73\x69\171\x6f\155\143\x69\161"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto iaomqomgiwiegoca; } if (!$egkyssmuqcwaciya) { goto goaowamiyyamueiw; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); goaowamiyyamueiw: $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); iaomqomgiwiegoca: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\145\164\150\x69\156\147\40\x77\x72\157\x6e\x67\40\x6f\x6e\40\141\x64\144\x69\156\147\40\x64\157\x63\x74\x72\x69\x6e\145\40\x64\141\164\x61\x62\141\163\x65\40\x74\x79\x70\x65\163\x3a\40\x25\163", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function esowseaasiyomciq() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto cuseccewekgcgkyg; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto ookcgumoacskyymy; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$eqwoegegiamegqsm->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $eqwoegegiamegqsm->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->cueaickeeoiwayou()))], $syeseoiyagmgumcy); ookcgumoacskyymy: owisckseoogsugqq: } ysweqawmawicakeo: cuseccewekgcgkyg: } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\x69\x6d\x65\163\164\x61\155\160", "\164\151\x6d\145\x73\164\x61\155\160", DateTimeType::class)->kuweuguyooiciyyu("\x69\156\x74\145\147\145\x72", "\151\156\164\x65\147\x65\162", SmallIntType::class)->kuweuguyooiciyyu("\163\164\x72\x69\156\147", "\145\156\x75\155"); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto kgysyqkoqgwmoscq; } $ymqmyyeuycgmigyo = $this->mgogaykgkoogasim()->cueaickeeoiwayou(); kgysyqkoqgwmoscq: return $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\123\x6f\155\x65\x74\x68\x69\x6e\147\x20\167\x72\157\156\147\x20\x6f\x6e\x20\165\160\x64\x61\x74\x69\156\x67\40\164\x61\x62\x6c\x65\40\x25\x73\x3a\x20\x25\163", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } private function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw?->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements($this->mgogaykgkoogasim()->kumuygiiqswoyasy()); if ($oaoyaayyyeimkioe->collation) { goto makomwwyomweyamm; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge(Constants::yksgeugumyiukkam); makomwwyomweyamm: if ($oaoyaayyyeimkioe->charset) { goto oqwcmgwimeisusoe; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge(Constants::goayeyygsuqcukka); oqwcmgwimeisusoe: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); asaowisseacciyia: } acesyuieuuqwgkwm: }); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto eacysqsegwcqawsa; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto cigesysuauaiccms; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto qumkwsqqocooyuoq; cigesysuauaiccms: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto owgakkqgckqcegoi; } $sogksuscggsicmac = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto gwiaimosqoiquwkc; } $this->many2many[] = $aaqqkgyougeiueyq; gwiaimosqoiquwkc: owgakkqgckqcegoi: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; qumkwsqqocooyuoq: ugswokwmkumcmigc: } qiaaqkymeuuueoqk: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto wwswmaewcaisauei; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } wwswmaewcaisauei: kkewoqqowugagwoy: } gcskyqewysqaceeg: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto iquecygaakmiomeg; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto ooysmgyeqoiesgqm; } $ksiyqouuaoymsycg = false; if ($ksiyqouuaoymsycg) { goto wmaeicoyyciuaiuy; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; wmaeicoyyciuaiuy: ooysmgyeqoiesgqm: ocgkwqqmgasuoies: } wsemeeocquawyauo: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto gicmaqmuscawegie; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto magymcqykamwqigw; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto oiiqqgyqmggyiums; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\163\164\162\x69\x6e\147" && $aaqqkgyougeiueyq instanceof Enum) { goto qqmmycmsoqegcqqw; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto isqwwmikecauwyuc; qqmmycmsoqegcqqw: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; isqwwmikecauwyuc: oiiqqgyqmggyiums: goto ukogwqiuuuakkawy; magymcqykamwqigw: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; ukogwqiuuuakkawy: gicmaqmuscawegie: aaogeemgkogagkai: } kwoyiysciqumswcy: if (!$uwqmqcmssaeieiqa) { goto kceeuicccqscwgsu; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto asqqqqakiagymemk; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto iyeswoaqkaeggiiy; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); iyeswoaqkaeggiiy: asqqqqakiagymemk: goto gygqgauaceiuawkq; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto gygqgauaceiuawkq; case "\x41\104\104\x20\111\x4e\104\105\x58": case "\x44\x52\x4f\x50\40\x49\x4e\104\x45\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\x41\x44\104\x20\111\116\104\x45\130")) { goto jkgouewqysmscmqs; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); jkgouewqysmscmqs: goto gygqgauaceiuawkq; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto sgiuwkisugmewmcs; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); sgiuwkisugmewmcs: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto gygqgauaceiuawkq; } ucksaiwquekagyqe: gygqgauaceiuawkq: ayamomygygmgwgkg: } oymyqcoekqyuiguq: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); kceeuicccqscwgsu: iquecygaakmiomeg: eacysqsegwcqawsa: } private function gqaysymikgeawkqa() : ?Builder { if (!(!$this->builder && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq())) { goto yimeskeioamqmuwg; } $this->builder = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getSchemaBuilder(); yimeskeioamqmuwg: return $this->builder; } private function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto yeemsgmumygmumqw; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); yeemsgmumygmumqw: return $this->gqaysymikgeawkqa()?->hasTable($aasascamegmwqmqk); } private function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq())) { goto wkaoyycsoeoyqcae; } $uiewakwqscemywuo = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); wkaoyycsoeoyqcae: return $uiewakwqscemywuo; } private function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->iooowgsqoyqseyuu(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto sgiouaqukyycswqm; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\x53\117\x4e": case "\x41\x52\x52\101\x59": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto cwugokqsmiomgmqg; case "\106\x4f\122\105\x49\x47\x4e": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto ugiqiewymimqecsu; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto wyugqoowakyicyic; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto becceuuwokgoaewy; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto akeoaicoieaiekcw; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto yksamaucqkqsawkk; } wp_die("\162\x65\146\145\x72\145\x6e\143\x65\163\x20\157\162\x20\x6f\156\x20\x69\163\40\x6e\x6f\x74\40\x73\x65\164"); yksamaucqkqsawkk: goto kskqquqsegiiogek; akeoaicoieaiekcw: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->cueaickeeoiwayou())); kskqquqsegiiogek: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto mocaoayiouggauiy; } $keuuiqywyuiuegkq->on($koegqoagisewcica); mocaoayiouggauiy: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto ygskksomysgaokek; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); ygskksomysgaokek: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto wwcwmkowgooocaem; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); wwcwmkowgooocaem: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto qgkiguggkyiycwow; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); qgkiguggkyiycwow: becceuuwokgoaewy: goto aeaciamekuqyieys; wyugqoowakyicyic: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto ekoegocuqoycoeyq; } $this->many2many[] = $aaqqkgyougeiueyq; ekoegocuqoycoeyq: aeaciamekuqyieys: ugiqiewymimqecsu: goto cwugokqsmiomgmqg; case "\123\105\124": case "\105\x4e\x55\x4d": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto iuysqgmmgqiywssm; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); iuysqgmmgqiywssm: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto cwugokqsmiomgmqg; case "\106\x4c\x4f\x41\124": case "\104\x4f\x55\102\x4c\105": case "\104\x45\103\111\x4d\101\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto cwugokqsmiomgmqg; case "\124\111\115\x45": case "\104\x41\124\105\x54\111\115\105": case "\124\111\115\105\123\124\x41\x4d\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto cwugokqsmiomgmqg; case "\x43\110\x41\x52": case "\x53\x54\122\111\116\107": case "\x56\x41\122\103\110\101\x52": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto weouocwmwicayyiy; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto ggyoywwggggekycs; weouocwmwicayyiy: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); ggyoywwggggekycs: goto cwugokqsmiomgmqg; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto cwugokqsmiomgmqg; } uuuceqkseqkqawko: cwugokqsmiomgmqg: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto syoeqaqkseguwmgy; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto gkkwmqoacciwomqs; } $keuuiqywyuiuegkq->autoIncrement(); gkkwmqoacciwomqs: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto kucqcgeesiccuuia; } $keuuiqywyuiuegkq->unsigned(); kucqcgeesiccuuia: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto oycuaqewsskgkqci; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); oycuaqewsskgkqci: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto ocmagamuyawyiyka; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); ocmagamuyawyiyka: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto amqgiisymksuuuss; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); amqgiisymksuuuss: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto iwgmywqocewwgoeo; } $keuuiqywyuiuegkq->change(); iwgmywqocewwgoeo: syoeqaqkseguwmgy: sgiouaqukyycswqm: return $aasascamegmwqmqk; } }
