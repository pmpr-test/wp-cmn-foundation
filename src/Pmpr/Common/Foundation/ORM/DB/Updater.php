<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\154\157\x61\144\145\144", [$this, "\155\163\155\153\x65\x75\x65\x63\151\x63\143\x79\x79\x63\157\143"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto uykwmucgoywoesui; } if (!$egkyssmuqcwaciya) { goto eygqeoiskweuiuqi; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); eygqeoiskweuiuqi: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); uykwmucgoywoesui: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\x65\164\x68\151\x6e\147\x20\x77\x72\157\156\147\40\157\x6e\x20\x61\x64\144\x69\156\x67\40\144\x6f\x63\164\162\151\156\145\40\144\x61\x74\x61\x62\141\x73\x65\x20\x74\171\160\145\x73\x3a\x20\x25\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\151\x6d\145\163\164\x61\x6d\x70", "\164\151\155\145\x73\164\141\155\x70", DateTimeType::class)->kuweuguyooiciyyu("\x69\x6e\164\145\x67\145\x72", "\151\156\x74\145\147\x65\x72", SmallIntType::class)->kuweuguyooiciyyu("\x73\x74\x72\x69\156\147", "\145\x6e\165\x6d"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\x65\x74\x68\151\x6e\x67\x20\167\162\x6f\156\147\40\157\x6e\x20\x75\160\144\x61\164\x69\x6e\147\40\x74\141\x62\154\145\x20\45\163\72\x20\45\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto iaygaasesyymwgss; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto kiqmcymowosckmii; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); kiqmcymowosckmii: oskwkeaemiqcaqkc: } iisieuaeyiqwckou: iaygaasesyymwgss: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto iwosouqsesoqcska; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\143\x6f\x6c\154\141\164\x69\157\156"); iwosouqsesoqcska: if ($oaoyaayyyeimkioe->charset) { goto iacwyogogoccmwsg; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\x63\x68\x61\x72\x73\145\x74"); iacwyogogoccmwsg: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); qsyqcokomswykyso: } wqmwcuggcisqieao: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto issgmmkcgesyeoas; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); issgmmkcgesyeoas: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto ekgkiioywougquka; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto ccyiggckemwgooco; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto umamqqwcoewcigew; ccyiggckemwgooco: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto mssaawaiaimogowg; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto giuoqsumkimmuaya; } $this->many2many[] = $aaqqkgyougeiueyq; giuoqsumkimmuaya: mssaawaiaimogowg: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; umamqqwcoewcigew: yueosioyegouuwqo: } yeiicwscguyokwyu: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto kuimgwmkcgcoecko; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } kuimgwmkcgcoecko: gaiaucesmcqgqwac: } swkeiggkawwgewuw: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto umccwcqwkoiaakmu; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto qcwkymcgqacaaywc; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto eykiuqsamowqykam; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto miigqygoawqmkkqm; eykiuqsamowqykam: yywwaaiicukuwcao: } miigqygoawqmkkqm: if ($ksiyqouuaoymsycg) { goto ywqouwqomiqwoquu; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; ywqouwqomiqwoquu: qcwkymcgqacaaywc: aacaoywsaqscgyua: } oaskqsoyesmmeaew: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto imykswegcuekqwio; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto iuooqassskiyeemo; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto wmycwscioqackeig; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto sikmqkecsiyciaei; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\163\164\162\x69\x6e\x67" && $aaqqkgyougeiueyq instanceof Enum) { goto yyyyawaqcowsgqcs; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto usmagcaocwiugqum; yyyyawaqcowsgqcs: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; usmagcaocwiugqum: sikmqkecsiyciaei: goto wammkmaqucqagqww; wmycwscioqackeig: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; wammkmaqucqagqww: goto cquyuwsisgqscemm; iuooqassskiyeemo: cquyuwsisgqscemm: imykswegcuekqwio: qwsmiaegmcwuskwi: } wmcucyuieqgqisis: if (!$uwqmqcmssaeieiqa) { goto coskmuqsawiaeyqg; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto yisoawmmammassqk; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto zggweikegkcgkmma; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); zggweikegkcgkmma: yisoawmmammassqk: goto mqaamqyoywyekiko; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto mqaamqyoywyekiko; case "\101\x44\104\x20\111\116\104\x45\x58": case "\x44\x52\117\x50\40\111\116\104\105\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\101\104\x44\40\x49\x4e\104\105\x58")) { goto gcsosokicycukoyc; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); gcsosokicycukoyc: goto mqaamqyoywyekiko; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto seqammocqkyswaim; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); seqammocqkyswaim: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto mqaamqyoywyekiko; } smkakiyekkqoggao: mqaamqyoywyekiko: ykuqeyogsasokqis: } eokikuciuqkyauum: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); coskmuqsawiaeyqg: umccwcqwkoiaakmu: ekgkiioywougquka: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto wyyowcsciaqkuiuq; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); wyyowcsciaqkuiuq: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto imquwacukaswoyka; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); imquwacukaswoyka: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto smksoismyouykeoa; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); smksoismyouykeoa: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto aemoyqueimayqcaw; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\x4a\123\117\116": case "\x41\x52\x52\x41\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto qwgkwokcyocqiyee; case "\x46\x4f\122\105\111\107\116": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto kmcygqkmwcgwamkw; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto muimagegskoisckc; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto cycasoiysmksuwqk; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto uagsgicwwcakecwq; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto kcqueaewmayywqeq; } wp_die("\162\x65\146\145\162\x65\156\x63\145\163\x20\x6f\162\40\157\x6e\x20\x69\x73\x20\x6e\x6f\164\40\x73\145\x74"); kcqueaewmayywqeq: goto qocgmocqauaaekii; uagsgicwwcakecwq: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); qocgmocqauaaekii: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto gsggsmmwcmkgyyss; } $keuuiqywyuiuegkq->on($koegqoagisewcica); gsggsmmwcmkgyyss: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto yweucowesgsoewyc; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); yweucowesgsoewyc: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto ikygockuuyimmmwk; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); ikygockuuyimmmwk: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto uwmcugkwqwcuqqsq; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); uwmcugkwqwcuqqsq: cycasoiysmksuwqk: goto yicaqocukqoauqgc; muimagegskoisckc: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto gcoeaokkagaaeuse; } $this->many2many[] = $aaqqkgyougeiueyq; gcoeaokkagaaeuse: yicaqocukqoauqgc: kmcygqkmwcgwamkw: goto qwgkwokcyocqiyee; case "\x53\x45\124": case "\105\116\125\115": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto gysmigyakgaakeoy; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); gysmigyakgaakeoy: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto qwgkwokcyocqiyee; case "\106\x4c\117\x41\x54": case "\x44\117\x55\102\x4c\x45": case "\x44\105\103\x49\x4d\101\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto qwgkwokcyocqiyee; case "\x54\111\115\105": case "\104\x41\x54\x45\124\111\115\105": case "\124\x49\115\x45\123\124\101\x4d\120": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto qwgkwokcyocqiyee; case "\103\x48\x41\x52": case "\x53\x54\x52\111\116\x47": case "\x56\101\x52\103\x48\x41\122": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto sueeqeioeiwkscao; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto mmesoisgqucowwms; sueeqeioeiwkscao: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); mmesoisgqucowwms: goto qwgkwokcyocqiyee; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto qwgkwokcyocqiyee; } maeccckgcsaaumkw: qwgkwokcyocqiyee: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto sequgigsgkqaikmq; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto uieuouugckwokske; } $keuuiqywyuiuegkq->autoIncrement(); uieuouugckwokske: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto seaiwkkgyyegiyug; } $keuuiqywyuiuegkq->unsigned(); seaiwkkgyyegiyug: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto uauuoyigkmqoasaq; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); uauuoyigkmqoasaq: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto kmwwqgiacsoksgcy; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); kmwwqgiacsoksgcy: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto akieeaeqiwugimie; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); akieeaeqiwugimie: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto ugqucegcucyyayga; } $keuuiqywyuiuegkq->change(); ugqucegcucyyayga: sequgigsgkqaikmq: aemoyqueimayqcaw: return $aasascamegmwqmqk; } }
