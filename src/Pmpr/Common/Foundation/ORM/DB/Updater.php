<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\x6c\157\x61\144\x65\144", [$this, "\x6d\163\x6d\153\x65\x75\145\x63\151\x63\x63\171\171\x63\157\x63"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto gqywcowiigceimaw; } if (!$egkyssmuqcwaciya) { goto gsimeiqkoyqkuecq; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); gsimeiqkoyqkuecq: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); gqywcowiigceimaw: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\x65\164\150\x69\x6e\x67\x20\167\162\157\156\x67\x20\x6f\156\x20\x61\144\x64\151\x6e\x67\x20\144\157\143\x74\162\x69\156\x65\x20\x64\141\164\x61\142\x61\x73\x65\40\x74\171\x70\x65\x73\72\x20\x25\163", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\x69\x6d\145\x73\x74\x61\x6d\160", "\164\151\155\x65\x73\x74\141\x6d\160", DateTimeType::class)->kuweuguyooiciyyu("\151\156\164\145\147\x65\x72", "\x69\x6e\164\145\x67\x65\162", SmallIntType::class)->kuweuguyooiciyyu("\163\164\162\x69\x6e\147", "\145\156\165\155"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\x65\x74\x68\151\x6e\x67\x20\x77\162\157\x6e\x67\x20\x6f\x6e\x20\x75\x70\x64\x61\x74\x69\x6e\x67\40\164\141\142\154\x65\40\45\x73\72\40\45\163", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto mgwgiesscqoaqcau; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto geugsymgsiuuqccg; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); geugsymgsiuuqccg: quewwumogiocouii: } eyuoecmogqwkmomi: mgwgiesscqoaqcau: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto ioacywuoyuskqmwy; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\x63\157\154\154\141\x74\151\x6f\156"); ioacywuoyuskqmwy: if ($oaoyaayyyeimkioe->charset) { goto bgoygegmogcmeaou; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\x63\x68\141\162\x73\x65\164"); bgoygegmogcmeaou: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); cgmcwkmmcmmkiooc: } awgaewwsskasueke: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto iamooqskosymqsmw; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); iamooqskosymqsmw: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto cquyuwsisgqscemm; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto oskwkeaemiqcaqkc; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto kiqmcymowosckmii; oskwkeaemiqcaqkc: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto iisieuaeyiqwckou; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto uykwmucgoywoesui; } $this->many2many[] = $aaqqkgyougeiueyq; uykwmucgoywoesui: iisieuaeyiqwckou: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; kiqmcymowosckmii: eygqeoiskweuiuqi: } wwccoougkywoaoui: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto iacwyogogoccmwsg; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } iacwyogogoccmwsg: iwosouqsesoqcska: } iaygaasesyymwgss: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto iuooqassskiyeemo; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto mssaawaiaimogowg; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto yueosioyegouuwqo; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto issgmmkcgesyeoas; yueosioyegouuwqo: yeiicwscguyokwyu: } issgmmkcgesyeoas: if ($ksiyqouuaoymsycg) { goto giuoqsumkimmuaya; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; giuoqsumkimmuaya: mssaawaiaimogowg: qsyqcokomswykyso: } wqmwcuggcisqieao: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto eykiuqsamowqykam; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto miigqygoawqmkkqm; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto oaskqsoyesmmeaew; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto kuimgwmkcgcoecko; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\x73\164\162\x69\156\x67" && $aaqqkgyougeiueyq instanceof Enum) { goto swkeiggkawwgewuw; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto gaiaucesmcqgqwac; swkeiggkawwgewuw: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; gaiaucesmcqgqwac: kuimgwmkcgcoecko: goto aacaoywsaqscgyua; oaskqsoyesmmeaew: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; aacaoywsaqscgyua: goto yywwaaiicukuwcao; miigqygoawqmkkqm: yywwaaiicukuwcao: eykiuqsamowqykam: umamqqwcoewcigew: } ccyiggckemwgooco: if (!$uwqmqcmssaeieiqa) { goto wammkmaqucqagqww; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto usmagcaocwiugqum; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto yyyyawaqcowsgqcs; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); yyyyawaqcowsgqcs: usmagcaocwiugqum: goto wmcucyuieqgqisis; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto wmcucyuieqgqisis; case "\101\x44\x44\x20\x49\116\104\105\130": case "\104\122\x4f\x50\x20\x49\116\x44\x45\130": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\x41\x44\x44\x20\111\116\104\105\130")) { goto sikmqkecsiyciaei; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); sikmqkecsiyciaei: goto wmcucyuieqgqisis; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto wmycwscioqackeig; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); wmycwscioqackeig: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto wmcucyuieqgqisis; } qwsmiaegmcwuskwi: wmcucyuieqgqisis: qcwkymcgqacaaywc: } ywqouwqomiqwoquu: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); wammkmaqucqagqww: iuooqassskiyeemo: cquyuwsisgqscemm: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto imykswegcuekqwio; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); imykswegcuekqwio: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto eokikuciuqkyauum; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); eokikuciuqkyauum: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto ykuqeyogsasokqis; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); ykuqeyogsasokqis: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto yicaqocukqoauqgc; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\x4a\123\117\x4e": case "\x41\122\x52\101\x59": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto mqaamqyoywyekiko; case "\x46\x4f\122\x45\111\107\x4e": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto maeccckgcsaaumkw; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto smksoismyouykeoa; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto imquwacukaswoyka; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto gcsosokicycukoyc; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto yisoawmmammassqk; } wp_die("\x72\145\x66\145\x72\x65\x6e\x63\x65\163\x20\x6f\x72\x20\x6f\156\40\151\x73\40\x6e\x6f\164\x20\163\145\x74"); yisoawmmammassqk: goto seqammocqkyswaim; gcsosokicycukoyc: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); seqammocqkyswaim: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto coskmuqsawiaeyqg; } $keuuiqywyuiuegkq->on($koegqoagisewcica); coskmuqsawiaeyqg: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto umccwcqwkoiaakmu; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); umccwcqwkoiaakmu: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto ekgkiioywougquka; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); ekgkiioywougquka: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto wyyowcsciaqkuiuq; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); wyyowcsciaqkuiuq: imquwacukaswoyka: goto qwgkwokcyocqiyee; smksoismyouykeoa: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto zggweikegkcgkmma; } $this->many2many[] = $aaqqkgyougeiueyq; zggweikegkcgkmma: qwgkwokcyocqiyee: maeccckgcsaaumkw: goto mqaamqyoywyekiko; case "\123\105\124": case "\105\116\x55\115": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto gcoeaokkagaaeuse; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); gcoeaokkagaaeuse: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto mqaamqyoywyekiko; case "\x46\x4c\x4f\x41\124": case "\104\117\x55\102\x4c\x45": case "\104\x45\103\x49\x4d\101\114": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto mqaamqyoywyekiko; case "\124\x49\x4d\x45": case "\104\101\x54\105\124\111\x4d\105": case "\x54\x49\115\x45\x53\x54\101\x4d\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto mqaamqyoywyekiko; case "\x43\110\x41\x52": case "\123\124\x52\x49\x4e\107": case "\x56\x41\122\103\x48\101\122": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto kcqueaewmayywqeq; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto uagsgicwwcakecwq; kcqueaewmayywqeq: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); uagsgicwwcakecwq: goto mqaamqyoywyekiko; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto mqaamqyoywyekiko; } smkakiyekkqoggao: mqaamqyoywyekiko: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto muimagegskoisckc; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto qocgmocqauaaekii; } $keuuiqywyuiuegkq->autoIncrement(); qocgmocqauaaekii: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto gsggsmmwcmkgyyss; } $keuuiqywyuiuegkq->unsigned(); gsggsmmwcmkgyyss: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto yweucowesgsoewyc; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); yweucowesgsoewyc: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto ikygockuuyimmmwk; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); ikygockuuyimmmwk: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto uwmcugkwqwcuqqsq; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); uwmcugkwqwcuqqsq: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto cycasoiysmksuwqk; } $keuuiqywyuiuegkq->change(); cycasoiysmksuwqk: muimagegskoisckc: yicaqocukqoauqgc: return $aasascamegmwqmqk; } }
