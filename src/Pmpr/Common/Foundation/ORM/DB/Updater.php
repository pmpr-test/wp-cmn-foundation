<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\154\157\x61\x64\x65\144", [$this, "\x6d\163\155\x6b\145\165\x65\143\151\x63\x63\171\171\x63\x6f\x63"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto eyuoecmogqwkmomi; } if (!$egkyssmuqcwaciya) { goto gqywcowiigceimaw; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); gqywcowiigceimaw: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); eyuoecmogqwkmomi: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\x65\164\x68\151\156\147\x20\167\x72\157\x6e\x67\40\x6f\x6e\40\x61\144\x64\x69\x6e\x67\x20\144\x6f\143\164\x72\x69\156\145\x20\x64\x61\x74\141\x62\141\163\x65\40\x74\x79\160\145\x73\x3a\x20\x25\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\x74\x69\155\x65\163\164\141\x6d\160", "\x74\151\x6d\x65\163\x74\x61\155\x70", DateTimeType::class)->kuweuguyooiciyyu("\x69\x6e\164\x65\147\145\162", "\x69\x6e\x74\145\x67\x65\x72", SmallIntType::class)->kuweuguyooiciyyu("\163\164\x72\151\156\147", "\145\156\165\x6d"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\x65\x74\x68\x69\x6e\x67\x20\167\x72\157\x6e\147\40\157\x6e\40\x75\x70\144\x61\164\151\x6e\147\40\x74\141\142\154\x65\x20\45\x73\x3a\40\45\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto ioacywuoyuskqmwy; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto mgwgiesscqoaqcau; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); mgwgiesscqoaqcau: geugsymgsiuuqccg: } quewwumogiocouii: ioacywuoyuskqmwy: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto bgoygegmogcmeaou; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\143\x6f\154\154\x61\164\x69\157\156"); bgoygegmogcmeaou: if ($oaoyaayyyeimkioe->charset) { goto awgaewwsskasueke; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\143\150\x61\x72\x73\x65\164"); awgaewwsskasueke: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); iamooqskosymqsmw: } cgmcwkmmcmmkiooc: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto wwccoougkywoaoui; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); wwccoougkywoaoui: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto imykswegcuekqwio; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto kiqmcymowosckmii; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto iaygaasesyymwgss; kiqmcymowosckmii: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto oskwkeaemiqcaqkc; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto iisieuaeyiqwckou; } $this->many2many[] = $aaqqkgyougeiueyq; iisieuaeyiqwckou: oskwkeaemiqcaqkc: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; iaygaasesyymwgss: uykwmucgoywoesui: } eygqeoiskweuiuqi: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto wqmwcuggcisqieao; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } wqmwcuggcisqieao: iacwyogogoccmwsg: } iwosouqsesoqcska: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto cquyuwsisgqscemm; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto ccyiggckemwgooco; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto giuoqsumkimmuaya; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto yeiicwscguyokwyu; giuoqsumkimmuaya: yueosioyegouuwqo: } yeiicwscguyokwyu: if ($ksiyqouuaoymsycg) { goto mssaawaiaimogowg; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; mssaawaiaimogowg: ccyiggckemwgooco: issgmmkcgesyeoas: } qsyqcokomswykyso: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto ywqouwqomiqwoquu; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto yywwaaiicukuwcao; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto aacaoywsaqscgyua; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto oaskqsoyesmmeaew; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\163\164\162\x69\x6e\147" && $aaqqkgyougeiueyq instanceof Enum) { goto gaiaucesmcqgqwac; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto kuimgwmkcgcoecko; gaiaucesmcqgqwac: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; kuimgwmkcgcoecko: oaskqsoyesmmeaew: goto miigqygoawqmkkqm; aacaoywsaqscgyua: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: eykiuqsamowqykam: ywqouwqomiqwoquu: swkeiggkawwgewuw: } umamqqwcoewcigew: if (!$uwqmqcmssaeieiqa) { goto iuooqassskiyeemo; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto sikmqkecsiyciaei; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto usmagcaocwiugqum; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); usmagcaocwiugqum: sikmqkecsiyciaei: goto qwsmiaegmcwuskwi; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto qwsmiaegmcwuskwi; case "\x41\x44\x44\40\111\x4e\x44\105\x58": case "\104\x52\117\x50\x20\111\x4e\104\105\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\101\104\x44\x20\111\116\x44\x45\130")) { goto wmycwscioqackeig; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); wmycwscioqackeig: goto qwsmiaegmcwuskwi; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto wammkmaqucqagqww; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); wammkmaqucqagqww: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto qwsmiaegmcwuskwi; } yyyyawaqcowsgqcs: qwsmiaegmcwuskwi: wmcucyuieqgqisis: } qcwkymcgqacaaywc: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); iuooqassskiyeemo: cquyuwsisgqscemm: imykswegcuekqwio: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto eokikuciuqkyauum; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); eokikuciuqkyauum: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto ykuqeyogsasokqis; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); ykuqeyogsasokqis: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto mqaamqyoywyekiko; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); mqaamqyoywyekiko: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto kmcygqkmwcgwamkw; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\x4a\123\117\x4e": case "\x41\x52\x52\101\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto smkakiyekkqoggao; case "\x46\x4f\122\105\111\x47\x4e": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto gcoeaokkagaaeuse; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto qwgkwokcyocqiyee; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto smksoismyouykeoa; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto seqammocqkyswaim; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto gcsosokicycukoyc; } wp_die("\x72\x65\x66\145\162\145\156\143\x65\x73\40\x6f\162\40\157\156\40\x69\x73\x20\x6e\157\x74\40\163\x65\164"); gcsosokicycukoyc: goto coskmuqsawiaeyqg; seqammocqkyswaim: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); coskmuqsawiaeyqg: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto umccwcqwkoiaakmu; } $keuuiqywyuiuegkq->on($koegqoagisewcica); umccwcqwkoiaakmu: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto ekgkiioywougquka; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); ekgkiioywougquka: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto wyyowcsciaqkuiuq; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); wyyowcsciaqkuiuq: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto imquwacukaswoyka; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); imquwacukaswoyka: smksoismyouykeoa: goto maeccckgcsaaumkw; qwgkwokcyocqiyee: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto yisoawmmammassqk; } $this->many2many[] = $aaqqkgyougeiueyq; yisoawmmammassqk: maeccckgcsaaumkw: gcoeaokkagaaeuse: goto smkakiyekkqoggao; case "\123\105\x54": case "\x45\x4e\125\115": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto kcqueaewmayywqeq; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); kcqueaewmayywqeq: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto smkakiyekkqoggao; case "\106\114\117\101\124": case "\104\117\x55\x42\114\x45": case "\104\105\103\111\115\x41\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto smkakiyekkqoggao; case "\124\111\115\105": case "\104\x41\x54\x45\124\x49\x4d\x45": case "\x54\x49\115\105\x53\124\101\115\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto smkakiyekkqoggao; case "\103\110\x41\122": case "\x53\x54\122\x49\x4e\x47": case "\x56\101\x52\103\110\101\x52": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto uagsgicwwcakecwq; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto qocgmocqauaaekii; uagsgicwwcakecwq: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); qocgmocqauaaekii: goto smkakiyekkqoggao; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto smkakiyekkqoggao; } zggweikegkcgkmma: smkakiyekkqoggao: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto yicaqocukqoauqgc; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto gsggsmmwcmkgyyss; } $keuuiqywyuiuegkq->autoIncrement(); gsggsmmwcmkgyyss: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto yweucowesgsoewyc; } $keuuiqywyuiuegkq->unsigned(); yweucowesgsoewyc: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto ikygockuuyimmmwk; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); ikygockuuyimmmwk: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto uwmcugkwqwcuqqsq; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); uwmcugkwqwcuqqsq: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto cycasoiysmksuwqk; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); cycasoiysmksuwqk: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto muimagegskoisckc; } $keuuiqywyuiuegkq->change(); muimagegskoisckc: yicaqocukqoauqgc: kmcygqkmwcgwamkw: return $aasascamegmwqmqk; } }
