<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\137\x6c\157\x61\x64\x65\x64", [$this, "\155\163\155\x6b\x65\165\145\x63\x69\143\x63\171\171\x63\157\143"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto ywqouwqomiqwoquu; } if (!$egkyssmuqcwaciya) { goto eykiuqsamowqykam; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); eykiuqsamowqykam: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); ywqouwqomiqwoquu: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\145\x74\150\x69\156\x67\40\167\x72\157\x6e\147\40\157\156\40\141\144\x64\x69\156\x67\x20\x64\157\143\x74\x72\151\156\x65\40\x64\141\164\141\x62\141\163\x65\x20\164\x79\x70\x65\x73\x3a\40\45\163", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\x74\151\x6d\145\x73\164\x61\155\160", "\x74\151\155\145\163\164\141\155\160", DateTimeType::class)->kuweuguyooiciyyu("\151\156\164\145\x67\x65\x72", "\151\x6e\x74\145\x67\145\162", SmallIntType::class)->kuweuguyooiciyyu("\x73\x74\x72\x69\x6e\147", "\145\x6e\165\x6d"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\123\157\x6d\x65\164\x68\x69\156\x67\40\167\x72\x6f\156\x67\40\x6f\156\40\165\160\144\141\x74\x69\x6e\147\x20\164\x61\142\154\x65\x20\45\x73\x3a\x20\x25\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto yyyyawaqcowsgqcs; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto qwsmiaegmcwuskwi; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); qwsmiaegmcwuskwi: wmcucyuieqgqisis: } qcwkymcgqacaaywc: yyyyawaqcowsgqcs: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto usmagcaocwiugqum; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\143\157\154\x6c\141\164\x69\x6f\156"); usmagcaocwiugqum: if ($oaoyaayyyeimkioe->charset) { goto sikmqkecsiyciaei; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\x63\150\141\x72\x73\145\164"); sikmqkecsiyciaei: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); wammkmaqucqagqww: } wmycwscioqackeig: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto iuooqassskiyeemo; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); iuooqassskiyeemo: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto kmwwqgiacsoksgcy; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto mqaamqyoywyekiko; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto smkakiyekkqoggao; mqaamqyoywyekiko: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto ykuqeyogsasokqis; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto eokikuciuqkyauum; } $this->many2many[] = $aaqqkgyougeiueyq; eokikuciuqkyauum: ykuqeyogsasokqis: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; smkakiyekkqoggao: imykswegcuekqwio: } cquyuwsisgqscemm: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto gcsosokicycukoyc; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } gcsosokicycukoyc: yisoawmmammassqk: } zggweikegkcgkmma: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto uauuoyigkmqoasaq; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto smksoismyouykeoa; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto wyyowcsciaqkuiuq; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto umccwcqwkoiaakmu; wyyowcsciaqkuiuq: ekgkiioywougquka: } umccwcqwkoiaakmu: if ($ksiyqouuaoymsycg) { goto imquwacukaswoyka; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; imquwacukaswoyka: smksoismyouykeoa: coskmuqsawiaeyqg: } seqammocqkyswaim: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto uwmcugkwqwcuqqsq; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto yweucowesgsoewyc; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto qocgmocqauaaekii; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto uagsgicwwcakecwq; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\x73\164\x72\x69\x6e\147" && $aaqqkgyougeiueyq instanceof Enum) { goto gcoeaokkagaaeuse; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto kcqueaewmayywqeq; gcoeaokkagaaeuse: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; kcqueaewmayywqeq: uagsgicwwcakecwq: goto gsggsmmwcmkgyyss; qocgmocqauaaekii: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; gsggsmmwcmkgyyss: goto ikygockuuyimmmwk; yweucowesgsoewyc: ikygockuuyimmmwk: uwmcugkwqwcuqqsq: maeccckgcsaaumkw: } qwgkwokcyocqiyee: if (!$uwqmqcmssaeieiqa) { goto seaiwkkgyyegiyug; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto sueeqeioeiwkscao; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto gysmigyakgaakeoy; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); gysmigyakgaakeoy: sueeqeioeiwkscao: goto yicaqocukqoauqgc; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto yicaqocukqoauqgc; case "\x41\104\104\40\111\116\104\x45\130": case "\104\122\117\x50\40\x49\116\104\105\130": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\101\x44\x44\40\x49\x4e\104\105\130")) { goto mmesoisgqucowwms; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); mmesoisgqucowwms: goto yicaqocukqoauqgc; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto uieuouugckwokske; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); uieuouugckwokske: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto yicaqocukqoauqgc; } kmcygqkmwcgwamkw: yicaqocukqoauqgc: muimagegskoisckc: } cycasoiysmksuwqk: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); seaiwkkgyyegiyug: uauuoyigkmqoasaq: kmwwqgiacsoksgcy: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto akieeaeqiwugimie; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); akieeaeqiwugimie: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto ugqucegcucyyayga; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); ugqucegcucyyayga: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto sequgigsgkqaikmq; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); sequgigsgkqaikmq: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto yuyiqaawwgaywgqo; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\123\x4f\116": case "\x41\122\x52\101\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto aemoyqueimayqcaw; case "\x46\117\x52\x45\111\107\116": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto gigiwwouakeekoim; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto gokwmwmaumiwscua; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto eieiwacwqkgsewai; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto oeeasouoaaoaaemm; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto iaockwkwaiqgeuyu; } wp_die("\162\x65\146\x65\x72\145\x6e\x63\x65\x73\x20\157\162\40\x6f\x6e\40\151\163\x20\156\157\164\40\163\145\164"); iaockwkwaiqgeuyu: goto icmsyimgycuocisu; oeeasouoaaoaaemm: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); icmsyimgycuocisu: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto wassyiqsqasaoiau; } $keuuiqywyuiuegkq->on($koegqoagisewcica); wassyiqsqasaoiau: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto uekueeyqaackuwao; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); uekueeyqaackuwao: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto uaiiuywoakccusge; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); uaiiuywoakccusge: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto ysiwoiqiaosqoikm; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); ysiwoiqiaosqoikm: eieiwacwqkgsewai: goto eauiumeeyckucuyc; gokwmwmaumiwscua: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto mmqkuymyyycywmqu; } $this->many2many[] = $aaqqkgyougeiueyq; mmqkuymyyycywmqu: eauiumeeyckucuyc: gigiwwouakeekoim: goto aemoyqueimayqcaw; case "\123\105\124": case "\105\x4e\125\x4d": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto esuuweysgwuwcuue; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); esuuweysgwuwcuue: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto aemoyqueimayqcaw; case "\106\114\x4f\101\x54": case "\104\117\x55\x42\114\105": case "\104\x45\x43\x49\x4d\x41\114": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto aemoyqueimayqcaw; case "\124\x49\115\105": case "\104\101\x54\x45\124\x49\115\x45": case "\x54\111\x4d\x45\x53\124\101\x4d\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto aemoyqueimayqcaw; case "\103\x48\x41\122": case "\123\x54\x52\111\116\107": case "\126\101\122\x43\x48\x41\122": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto ykuycowuguumseuu; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto qugsgsscqyikugyc; ykuycowuguumseuu: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); qugsgsscqyikugyc: goto aemoyqueimayqcaw; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto aemoyqueimayqcaw; } woaoeyaowkuukkqm: aemoyqueimayqcaw: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto yqkyoaiwcyqeaqwu; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto gskaqcgccswmuqsy; } $keuuiqywyuiuegkq->autoIncrement(); gskaqcgccswmuqsy: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto uccuykggugcmiyam; } $keuuiqywyuiuegkq->unsigned(); uccuykggugcmiyam: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto saycoceqywiekqsi; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); saycoceqywiekqsi: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto sqaowueaequoigsa; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); sqaowueaequoigsa: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto eqmauwqqowsiwaue; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); eqmauwqqowsiwaue: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto waycokyiesmqgqcg; } $keuuiqywyuiuegkq->change(); waycokyiesmqgqcg: yqkyoaiwcyqeaqwu: yuyiqaawwgaywgqo: return $aasascamegmwqmqk; } }
