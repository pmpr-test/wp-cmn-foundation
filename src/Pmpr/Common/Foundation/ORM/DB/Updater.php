<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\154\x6f\141\x64\145\x64", [$this, "\155\x73\x6d\x6b\145\x75\145\x63\151\x63\143\171\171\x63\157\143"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto ywqouwqomiqwoquu; } if (!$egkyssmuqcwaciya) { goto eykiuqsamowqykam; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); eykiuqsamowqykam: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); ywqouwqomiqwoquu: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\x65\164\150\x69\156\x67\40\167\x72\x6f\x6e\x67\40\157\156\40\141\x64\144\151\x6e\x67\40\144\x6f\143\x74\162\x69\156\145\x20\x64\141\164\x61\x62\141\163\145\x20\164\x79\x70\x65\163\x3a\x20\45\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\x69\x6d\x65\163\164\141\x6d\160", "\x74\x69\155\x65\x73\164\x61\155\x70", DateTimeType::class)->kuweuguyooiciyyu("\151\156\164\x65\x67\145\x72", "\151\156\x74\x65\147\145\x72", SmallIntType::class)->kuweuguyooiciyyu("\163\164\162\x69\156\x67", "\145\x6e\165\155"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\123\x6f\155\145\x74\150\151\156\x67\40\x77\x72\x6f\156\x67\40\157\x6e\x20\x75\x70\144\141\164\151\156\147\40\x74\x61\x62\154\145\40\45\x73\72\40\x25\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto yyyyawaqcowsgqcs; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto qwsmiaegmcwuskwi; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); qwsmiaegmcwuskwi: wmcucyuieqgqisis: } qcwkymcgqacaaywc: yyyyawaqcowsgqcs: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto usmagcaocwiugqum; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\143\157\154\154\141\164\151\x6f\156"); usmagcaocwiugqum: if ($oaoyaayyyeimkioe->charset) { goto sikmqkecsiyciaei; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\143\150\141\x72\x73\145\164"); sikmqkecsiyciaei: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); wammkmaqucqagqww: } wmycwscioqackeig: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto iuooqassskiyeemo; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); iuooqassskiyeemo: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto kmwwqgiacsoksgcy; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto mqaamqyoywyekiko; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto smkakiyekkqoggao; mqaamqyoywyekiko: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto ykuqeyogsasokqis; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto eokikuciuqkyauum; } $this->many2many[] = $aaqqkgyougeiueyq; eokikuciuqkyauum: ykuqeyogsasokqis: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; smkakiyekkqoggao: imykswegcuekqwio: } cquyuwsisgqscemm: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto gcsosokicycukoyc; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } gcsosokicycukoyc: yisoawmmammassqk: } zggweikegkcgkmma: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto uauuoyigkmqoasaq; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto smksoismyouykeoa; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto wyyowcsciaqkuiuq; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto umccwcqwkoiaakmu; wyyowcsciaqkuiuq: ekgkiioywougquka: } umccwcqwkoiaakmu: if ($ksiyqouuaoymsycg) { goto imquwacukaswoyka; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; imquwacukaswoyka: smksoismyouykeoa: coskmuqsawiaeyqg: } seqammocqkyswaim: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto uwmcugkwqwcuqqsq; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto yweucowesgsoewyc; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto qocgmocqauaaekii; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto uagsgicwwcakecwq; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\x73\164\x72\151\156\x67" && $aaqqkgyougeiueyq instanceof Enum) { goto gcoeaokkagaaeuse; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto kcqueaewmayywqeq; gcoeaokkagaaeuse: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; kcqueaewmayywqeq: uagsgicwwcakecwq: goto gsggsmmwcmkgyyss; qocgmocqauaaekii: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; gsggsmmwcmkgyyss: goto ikygockuuyimmmwk; yweucowesgsoewyc: ikygockuuyimmmwk: uwmcugkwqwcuqqsq: maeccckgcsaaumkw: } qwgkwokcyocqiyee: if (!$uwqmqcmssaeieiqa) { goto seaiwkkgyyegiyug; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto sueeqeioeiwkscao; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto gysmigyakgaakeoy; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); gysmigyakgaakeoy: sueeqeioeiwkscao: goto yicaqocukqoauqgc; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto yicaqocukqoauqgc; case "\x41\x44\x44\x20\111\116\104\105\x58": case "\x44\122\117\x50\40\111\116\x44\x45\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\x41\x44\104\x20\111\x4e\x44\105\130")) { goto mmesoisgqucowwms; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); mmesoisgqucowwms: goto yicaqocukqoauqgc; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto uieuouugckwokske; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); uieuouugckwokske: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto yicaqocukqoauqgc; } kmcygqkmwcgwamkw: yicaqocukqoauqgc: muimagegskoisckc: } cycasoiysmksuwqk: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); seaiwkkgyyegiyug: uauuoyigkmqoasaq: kmwwqgiacsoksgcy: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto akieeaeqiwugimie; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); akieeaeqiwugimie: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto ugqucegcucyyayga; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); ugqucegcucyyayga: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto sequgigsgkqaikmq; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); sequgigsgkqaikmq: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto yuyiqaawwgaywgqo; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\x53\117\x4e": case "\x41\x52\122\101\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto aemoyqueimayqcaw; case "\106\117\122\x45\x49\107\x4e": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto gigiwwouakeekoim; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto gokwmwmaumiwscua; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto eieiwacwqkgsewai; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto oeeasouoaaoaaemm; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto iaockwkwaiqgeuyu; } wp_die("\x72\x65\x66\145\162\145\156\143\x65\x73\x20\157\162\x20\x6f\x6e\40\x69\163\40\156\157\164\x20\163\145\164"); iaockwkwaiqgeuyu: goto icmsyimgycuocisu; oeeasouoaaoaaemm: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); icmsyimgycuocisu: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto wassyiqsqasaoiau; } $keuuiqywyuiuegkq->on($koegqoagisewcica); wassyiqsqasaoiau: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto uekueeyqaackuwao; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); uekueeyqaackuwao: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto uaiiuywoakccusge; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); uaiiuywoakccusge: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto ysiwoiqiaosqoikm; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); ysiwoiqiaosqoikm: eieiwacwqkgsewai: goto eauiumeeyckucuyc; gokwmwmaumiwscua: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto mmqkuymyyycywmqu; } $this->many2many[] = $aaqqkgyougeiueyq; mmqkuymyyycywmqu: eauiumeeyckucuyc: gigiwwouakeekoim: goto aemoyqueimayqcaw; case "\x53\105\x54": case "\105\x4e\125\x4d": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto esuuweysgwuwcuue; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); esuuweysgwuwcuue: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto aemoyqueimayqcaw; case "\106\114\x4f\101\124": case "\x44\117\125\x42\114\105": case "\104\105\103\x49\x4d\101\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto aemoyqueimayqcaw; case "\x54\111\x4d\x45": case "\x44\101\x54\x45\124\x49\115\105": case "\x54\111\x4d\105\x53\124\x41\115\120": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto aemoyqueimayqcaw; case "\103\x48\x41\x52": case "\123\124\122\111\x4e\x47": case "\x56\x41\x52\103\x48\x41\x52": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto ykuycowuguumseuu; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto qugsgsscqyikugyc; ykuycowuguumseuu: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); qugsgsscqyikugyc: goto aemoyqueimayqcaw; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto aemoyqueimayqcaw; } woaoeyaowkuukkqm: aemoyqueimayqcaw: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto yqkyoaiwcyqeaqwu; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto gskaqcgccswmuqsy; } $keuuiqywyuiuegkq->autoIncrement(); gskaqcgccswmuqsy: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto uccuykggugcmiyam; } $keuuiqywyuiuegkq->unsigned(); uccuykggugcmiyam: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto saycoceqywiekqsi; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); saycoceqywiekqsi: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto sqaowueaequoigsa; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); sqaowueaequoigsa: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto eqmauwqqowsiwaue; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); eqmauwqqowsiwaue: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto waycokyiesmqgqcg; } $keuuiqywyuiuegkq->change(); waycokyiesmqgqcg: yqkyoaiwcyqeaqwu: yuyiqaawwgaywgqo: return $aasascamegmwqmqk; } }
