<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\x6c\x6f\141\x64\x65\x64", [$this, "\x6d\x73\x6d\153\x65\165\145\x63\151\x63\143\x79\x79\143\157\x63"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto eyuoecmogqwkmomi; } if (!$egkyssmuqcwaciya) { goto gqywcowiigceimaw; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); gqywcowiigceimaw: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); eyuoecmogqwkmomi: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\123\157\155\x65\164\x68\151\156\147\x20\167\x72\x6f\156\147\x20\x6f\156\40\141\144\x64\151\x6e\x67\x20\144\157\143\164\162\151\156\145\40\x64\x61\x74\141\142\x61\163\145\x20\164\x79\160\x65\163\x3a\40\x25\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\x74\151\x6d\145\163\x74\141\155\160", "\x74\x69\x6d\x65\163\x74\141\x6d\160", DateTimeType::class)->kuweuguyooiciyyu("\x69\x6e\164\145\147\x65\x72", "\x69\x6e\164\145\x67\x65\162", SmallIntType::class)->kuweuguyooiciyyu("\163\x74\x72\x69\156\147", "\x65\x6e\x75\x6d"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\123\157\x6d\145\164\x68\151\156\x67\x20\167\162\157\x6e\147\x20\x6f\x6e\40\165\x70\x64\x61\164\x69\x6e\147\40\164\x61\x62\154\145\x20\45\163\x3a\40\x25\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto ioacywuoyuskqmwy; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto mgwgiesscqoaqcau; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); mgwgiesscqoaqcau: geugsymgsiuuqccg: } quewwumogiocouii: ioacywuoyuskqmwy: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto bgoygegmogcmeaou; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\x63\157\x6c\x6c\x61\x74\151\157\156"); bgoygegmogcmeaou: if ($oaoyaayyyeimkioe->charset) { goto awgaewwsskasueke; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\x63\x68\x61\x72\x73\x65\164"); awgaewwsskasueke: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); iamooqskosymqsmw: } cgmcwkmmcmmkiooc: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto wwccoougkywoaoui; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); wwccoougkywoaoui: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto imykswegcuekqwio; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto kiqmcymowosckmii; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto iaygaasesyymwgss; kiqmcymowosckmii: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto oskwkeaemiqcaqkc; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto iisieuaeyiqwckou; } $this->many2many[] = $aaqqkgyougeiueyq; iisieuaeyiqwckou: oskwkeaemiqcaqkc: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; iaygaasesyymwgss: uykwmucgoywoesui: } eygqeoiskweuiuqi: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto wqmwcuggcisqieao; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } wqmwcuggcisqieao: iacwyogogoccmwsg: } iwosouqsesoqcska: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto cquyuwsisgqscemm; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto ccyiggckemwgooco; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto giuoqsumkimmuaya; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto yeiicwscguyokwyu; giuoqsumkimmuaya: yueosioyegouuwqo: } yeiicwscguyokwyu: if ($ksiyqouuaoymsycg) { goto mssaawaiaimogowg; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; mssaawaiaimogowg: ccyiggckemwgooco: issgmmkcgesyeoas: } qsyqcokomswykyso: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto ywqouwqomiqwoquu; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto yywwaaiicukuwcao; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto aacaoywsaqscgyua; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto oaskqsoyesmmeaew; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\163\x74\162\x69\x6e\x67" && $aaqqkgyougeiueyq instanceof Enum) { goto gaiaucesmcqgqwac; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto kuimgwmkcgcoecko; gaiaucesmcqgqwac: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; kuimgwmkcgcoecko: oaskqsoyesmmeaew: goto miigqygoawqmkkqm; aacaoywsaqscgyua: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: eykiuqsamowqykam: ywqouwqomiqwoquu: swkeiggkawwgewuw: } umamqqwcoewcigew: if (!$uwqmqcmssaeieiqa) { goto iuooqassskiyeemo; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto sikmqkecsiyciaei; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto usmagcaocwiugqum; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); usmagcaocwiugqum: sikmqkecsiyciaei: goto qwsmiaegmcwuskwi; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto qwsmiaegmcwuskwi; case "\x41\104\104\x20\x49\116\x44\105\x58": case "\104\122\x4f\x50\40\x49\116\104\105\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\x41\104\x44\40\111\x4e\104\105\130")) { goto wmycwscioqackeig; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); wmycwscioqackeig: goto qwsmiaegmcwuskwi; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto wammkmaqucqagqww; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); wammkmaqucqagqww: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto qwsmiaegmcwuskwi; } yyyyawaqcowsgqcs: qwsmiaegmcwuskwi: wmcucyuieqgqisis: } qcwkymcgqacaaywc: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); iuooqassskiyeemo: cquyuwsisgqscemm: imykswegcuekqwio: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto eokikuciuqkyauum; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); eokikuciuqkyauum: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto ykuqeyogsasokqis; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); ykuqeyogsasokqis: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto mqaamqyoywyekiko; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); mqaamqyoywyekiko: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto kmcygqkmwcgwamkw; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\123\x4f\x4e": case "\x41\x52\x52\101\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto smkakiyekkqoggao; case "\x46\117\x52\105\x49\107\116": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto gcoeaokkagaaeuse; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto qwgkwokcyocqiyee; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto smksoismyouykeoa; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto seqammocqkyswaim; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto gcsosokicycukoyc; } wp_die("\162\x65\x66\x65\162\145\x6e\x63\x65\163\40\x6f\x72\x20\x6f\x6e\40\x69\x73\x20\x6e\x6f\164\40\163\x65\x74"); gcsosokicycukoyc: goto coskmuqsawiaeyqg; seqammocqkyswaim: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); coskmuqsawiaeyqg: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto umccwcqwkoiaakmu; } $keuuiqywyuiuegkq->on($koegqoagisewcica); umccwcqwkoiaakmu: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto ekgkiioywougquka; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); ekgkiioywougquka: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto wyyowcsciaqkuiuq; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); wyyowcsciaqkuiuq: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto imquwacukaswoyka; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); imquwacukaswoyka: smksoismyouykeoa: goto maeccckgcsaaumkw; qwgkwokcyocqiyee: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto yisoawmmammassqk; } $this->many2many[] = $aaqqkgyougeiueyq; yisoawmmammassqk: maeccckgcsaaumkw: gcoeaokkagaaeuse: goto smkakiyekkqoggao; case "\123\105\x54": case "\105\x4e\125\115": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto kcqueaewmayywqeq; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); kcqueaewmayywqeq: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto smkakiyekkqoggao; case "\106\114\117\x41\124": case "\x44\x4f\125\102\114\105": case "\x44\105\103\111\x4d\x41\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto smkakiyekkqoggao; case "\124\x49\115\105": case "\104\x41\124\x45\124\111\x4d\105": case "\124\111\115\105\x53\x54\101\x4d\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto smkakiyekkqoggao; case "\x43\110\101\122": case "\123\x54\x52\x49\116\107": case "\x56\x41\x52\103\110\101\x52": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto uagsgicwwcakecwq; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto qocgmocqauaaekii; uagsgicwwcakecwq: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); qocgmocqauaaekii: goto smkakiyekkqoggao; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto smkakiyekkqoggao; } zggweikegkcgkmma: smkakiyekkqoggao: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto yicaqocukqoauqgc; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto gsggsmmwcmkgyyss; } $keuuiqywyuiuegkq->autoIncrement(); gsggsmmwcmkgyyss: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto yweucowesgsoewyc; } $keuuiqywyuiuegkq->unsigned(); yweucowesgsoewyc: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto ikygockuuyimmmwk; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); ikygockuuyimmmwk: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto uwmcugkwqwcuqqsq; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); uwmcugkwqwcuqqsq: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto cycasoiysmksuwqk; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); cycasoiysmksuwqk: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto muimagegskoisckc; } $keuuiqywyuiuegkq->change(); muimagegskoisckc: yicaqocukqoauqgc: kmcygqkmwcgwamkw: return $aasascamegmwqmqk; } }
