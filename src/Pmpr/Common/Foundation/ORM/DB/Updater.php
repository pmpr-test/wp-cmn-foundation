<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\154\x6f\141\144\145\144", [$this, "\155\163\x6d\x6b\x65\165\145\143\151\x63\143\171\171\143\x6f\143"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto kuimgwmkcgcoecko; } if (!$egkyssmuqcwaciya) { goto gaiaucesmcqgqwac; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); gaiaucesmcqgqwac: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); kuimgwmkcgcoecko: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\x65\x74\150\x69\x6e\x67\40\167\x72\157\x6e\147\x20\x6f\156\40\x61\x64\x64\x69\x6e\147\40\144\157\143\164\x72\151\156\145\x20\144\x61\164\141\x62\x61\163\145\x20\x74\171\x70\x65\x73\x3a\40\x25\163", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\x69\x6d\145\163\x74\141\x6d\160", "\x74\151\155\x65\x73\x74\x61\x6d\160", DateTimeType::class)->kuweuguyooiciyyu("\x69\156\164\145\x67\145\162", "\151\x6e\164\145\147\x65\x72", SmallIntType::class)->kuweuguyooiciyyu("\x73\x74\x72\151\156\147", "\x65\156\165\155"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\145\164\x68\x69\x6e\x67\40\167\162\x6f\156\147\40\157\156\40\165\160\x64\x61\x74\x69\x6e\147\x20\164\x61\x62\x6c\x65\40\45\163\x3a\40\x25\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto yywwaaiicukuwcao; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto miigqygoawqmkkqm; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); miigqygoawqmkkqm: aacaoywsaqscgyua: } oaskqsoyesmmeaew: yywwaaiicukuwcao: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto eykiuqsamowqykam; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\x63\157\x6c\154\141\x74\x69\x6f\156"); eykiuqsamowqykam: if ($oaoyaayyyeimkioe->charset) { goto ywqouwqomiqwoquu; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\x63\150\x61\162\x73\x65\x74"); ywqouwqomiqwoquu: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); wmcucyuieqgqisis: } qcwkymcgqacaaywc: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto qwsmiaegmcwuskwi; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); qwsmiaegmcwuskwi: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto gysmigyakgaakeoy; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto wammkmaqucqagqww; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto iuooqassskiyeemo; wammkmaqucqagqww: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto wmycwscioqackeig; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto sikmqkecsiyciaei; } $this->many2many[] = $aaqqkgyougeiueyq; sikmqkecsiyciaei: wmycwscioqackeig: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; iuooqassskiyeemo: usmagcaocwiugqum: } yyyyawaqcowsgqcs: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto eokikuciuqkyauum; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } eokikuciuqkyauum: imykswegcuekqwio: } cquyuwsisgqscemm: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto kmcygqkmwcgwamkw; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto seqammocqkyswaim; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto yisoawmmammassqk; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto smkakiyekkqoggao; yisoawmmammassqk: zggweikegkcgkmma: } smkakiyekkqoggao: if ($ksiyqouuaoymsycg) { goto gcsosokicycukoyc; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; gcsosokicycukoyc: seqammocqkyswaim: mqaamqyoywyekiko: } ykuqeyogsasokqis: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto kcqueaewmayywqeq; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto maeccckgcsaaumkw; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto smksoismyouykeoa; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto imquwacukaswoyka; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\x73\164\162\x69\x6e\x67" && $aaqqkgyougeiueyq instanceof Enum) { goto ekgkiioywougquka; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto wyyowcsciaqkuiuq; ekgkiioywougquka: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; wyyowcsciaqkuiuq: imquwacukaswoyka: goto qwgkwokcyocqiyee; smksoismyouykeoa: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; qwgkwokcyocqiyee: goto gcoeaokkagaaeuse; maeccckgcsaaumkw: gcoeaokkagaaeuse: kcqueaewmayywqeq: umccwcqwkoiaakmu: } coskmuqsawiaeyqg: if (!$uwqmqcmssaeieiqa) { goto yicaqocukqoauqgc; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto uwmcugkwqwcuqqsq; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto ikygockuuyimmmwk; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); ikygockuuyimmmwk: uwmcugkwqwcuqqsq: goto gsggsmmwcmkgyyss; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto gsggsmmwcmkgyyss; case "\101\104\104\x20\111\116\x44\x45\x58": case "\x44\122\117\120\40\x49\x4e\x44\x45\130": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\x41\104\x44\x20\x49\x4e\104\x45\130")) { goto cycasoiysmksuwqk; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); cycasoiysmksuwqk: goto gsggsmmwcmkgyyss; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto muimagegskoisckc; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); muimagegskoisckc: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto gsggsmmwcmkgyyss; } yweucowesgsoewyc: gsggsmmwcmkgyyss: qocgmocqauaaekii: } uagsgicwwcakecwq: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); yicaqocukqoauqgc: kmcygqkmwcgwamkw: gysmigyakgaakeoy: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto sueeqeioeiwkscao; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); sueeqeioeiwkscao: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto mmesoisgqucowwms; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); mmesoisgqucowwms: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto uieuouugckwokske; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); uieuouugckwokske: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto uccuykggugcmiyam; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\123\x4f\116": case "\x41\122\x52\x41\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto seaiwkkgyyegiyug; case "\x46\x4f\x52\x45\111\x47\x4e": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto uekueeyqaackuwao; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto icmsyimgycuocisu; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto oeeasouoaaoaaemm; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto ugqucegcucyyayga; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto akieeaeqiwugimie; } wp_die("\162\145\146\x65\162\145\x6e\x63\x65\163\x20\x6f\x72\x20\x6f\156\x20\x69\163\40\x6e\157\164\x20\163\x65\x74"); akieeaeqiwugimie: goto sequgigsgkqaikmq; ugqucegcucyyayga: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); sequgigsgkqaikmq: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto aemoyqueimayqcaw; } $keuuiqywyuiuegkq->on($koegqoagisewcica); aemoyqueimayqcaw: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto woaoeyaowkuukkqm; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); woaoeyaowkuukkqm: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto mmqkuymyyycywmqu; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); mmqkuymyyycywmqu: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto iaockwkwaiqgeuyu; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); iaockwkwaiqgeuyu: oeeasouoaaoaaemm: goto wassyiqsqasaoiau; icmsyimgycuocisu: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto kmwwqgiacsoksgcy; } $this->many2many[] = $aaqqkgyougeiueyq; kmwwqgiacsoksgcy: wassyiqsqasaoiau: uekueeyqaackuwao: goto seaiwkkgyyegiyug; case "\123\105\124": case "\x45\x4e\x55\x4d": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto uaiiuywoakccusge; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); uaiiuywoakccusge: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto seaiwkkgyyegiyug; case "\106\x4c\x4f\101\124": case "\x44\117\125\x42\114\x45": case "\x44\105\103\x49\115\101\114": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto seaiwkkgyyegiyug; case "\x54\111\115\105": case "\x44\x41\x54\x45\124\x49\115\105": case "\x54\x49\115\x45\123\x54\101\x4d\120": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto seaiwkkgyyegiyug; case "\103\x48\101\122": case "\x53\124\122\x49\x4e\107": case "\126\101\122\103\x48\101\x52": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto ysiwoiqiaosqoikm; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto eieiwacwqkgsewai; ysiwoiqiaosqoikm: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); eieiwacwqkgsewai: goto seaiwkkgyyegiyug; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto seaiwkkgyyegiyug; } uauuoyigkmqoasaq: seaiwkkgyyegiyug: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto gskaqcgccswmuqsy; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto gokwmwmaumiwscua; } $keuuiqywyuiuegkq->autoIncrement(); gokwmwmaumiwscua: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto eauiumeeyckucuyc; } $keuuiqywyuiuegkq->unsigned(); eauiumeeyckucuyc: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto gigiwwouakeekoim; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); gigiwwouakeekoim: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto esuuweysgwuwcuue; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); esuuweysgwuwcuue: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto ykuycowuguumseuu; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); ykuycowuguumseuu: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto qugsgsscqyikugyc; } $keuuiqywyuiuegkq->change(); qugsgsscqyikugyc: gskaqcgccswmuqsy: uccuykggugcmiyam: return $aasascamegmwqmqk; } }
