<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Illuminate\Database\Connection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Traits\SchemaTrait; use Pmpr\Common\Foundation\ORM\Register; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\Builder as SchemaBuilder; use Illuminate\Database\Schema\ColumnDefinition; use Exception; class Updater extends Common { use SchemaTrait; protected array $schema = []; protected array $many2many = []; protected ?Model $model = null; protected ?SchemaBuilder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\154\157\x61\144\x65\x64", [$this, "\155\x73\x6d\x6b\x65\165\x65\x63\151\x63\x63\x79\171\143\x6f\x63"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!(!$egkyssmuqcwaciya || !$umuecysoywoumgwo)) { goto jkaemsuwyyoamwim; } if (!$egkyssmuqcwaciya) { goto emioyucskiowqumg; } Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); emioyucskiowqumg: $this->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); jkaemsuwyyoamwim: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\123\x6f\x6d\x65\164\x68\x69\x6e\x67\40\167\162\157\x6e\x67\x20\157\x6e\x20\141\144\x64\x69\x6e\x67\x20\144\157\143\164\162\x69\x6e\x65\40\144\x61\x74\141\x62\x61\x73\x65\40\x74\x79\x70\145\163\x3a\40\x25\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\x69\x6d\145\x73\x74\x61\x6d\x70", "\164\151\155\145\163\x74\141\155\160", DateTimeType::class)->kuweuguyooiciyyu("\151\x6e\164\x65\x67\145\x72", "\x69\x6e\x74\x65\147\x65\x72", SmallIntType::class)->kuweuguyooiciyyu("\x73\x74\162\x69\156\x67", "\x65\156\x75\155"); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\x65\x74\150\151\x6e\147\x20\167\162\157\156\x67\40\157\156\40\165\160\x64\x61\164\151\156\x67\x20\x74\x61\142\154\145\x20\x25\163\72\x20\45\x73", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } public function msmkeueciccyycoc() { $umgmeqmiasisceqk = $this->many2many; if (!$umgmeqmiasisceqk) { goto koiyaaokigmamqyc; } foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!$sogksuscggsicmac) { goto amyaoueckysgmmas; } [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$this->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $this->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->miwqiiqeegeqcwis()))], $syeseoiyagmgumcy); amyaoueckysgmmas: yoauoocuckogmsuw: } suwsiaeoumiwkiqg: koiyaaokigmamqyc: } public function create($qssskwiqeumgkago, $aasascamegmwqmqk) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements(Constants::gouqcwikiiygyasc); if ($oaoyaayyyeimkioe->collation) { goto qiqegseqwywcmwoe; } $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge("\x63\157\x6c\x6c\x61\x74\151\x6f\x6e"); qiqegseqwywcmwoe: if ($oaoyaayyyeimkioe->charset) { goto yosyyiksyyscacus; } $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge("\x63\x68\x61\162\x73\145\164"); yosyyiksyyscacus: foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); kikkkocywiyuyuqw: } kwcscewawgicomok: }); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if ($ymqmyyeuycgmigyo) { goto aqeyqwuywqcmuoce; } $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); aqeyqwuywqcmuoce: return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function mgogaykgkoogasim() : Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function skckwsgymkimyuwo() : Connection { return $this->mgogaykgkoogasim()->wegkukwuoewiisyi(); } public function oyeskqayoscwciem() : ?Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($syeseoiyagmgumcy && $siykeiywomwwuoiw)) { goto ykcmomsiayaymysm; } $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto cueuscqkicwwicei; } $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); goto gcecamucuogcciig; cueuscqkicwwicei: $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if (!($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { goto oaociaioauummsey; } $sogksuscggsicmac = $meywaqqsugaoeyys->acamgaegcsioysiw($aaqqkgyougeiueyq); if (!($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0]))) { goto akoweomooyuwamow; } $this->many2many[] = $aaqqkgyougeiueyq; akoweomooyuwamow: oaociaioauummsey: $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; gcecamucuogcciig: qayiqaykkywcyisq: } aymoguycgmuggcik: $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { goto eysuawiooiswaseq; } try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } eysuawiooiswaseq: kiewcwsykccgocuc: } suscosoukqeyyqgs: if ($gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { goto uugiuqkesegaamqw; } foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { goto wyqueeskecameuks; } $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Schema && $qgoqiacsiccwoawi === $aaqqkgyougeiueyq->iiesowcaqmgkkmec())) { goto assoyoeukmqiucyq; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::kkiywioiccuqokis, Constants::meisqwykgaymauka => $aaqqkgyougeiueyq->mwikyscisascoeea(), Constants::sokiwgiwgagukgsg => $qgoqiacsiccwoawi]; $ksiyqouuaoymsycg = true; goto egiauwuekseyeaeq; assoyoeukmqiucyq: euuekiyqwkowiees: } egiauwuekseyeaeq: if ($ksiyqouuaoymsycg) { goto kikkkoqiumqoeiyy; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi]; kikkkoqiumqoeiyy: wyqueeskecameuks: eogomkswkaqwyycm: } iecqkqoiqimmisyw: foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if (!$aaqqkgyougeiueyq instanceof Schema) { goto mqacqosyicuiqwia; } if ($aaqqkgyougeiueyq->iiesowcaqmgkkmec()) { goto owiguescmqyqukui; } if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { goto akyiiioycmgqyuok; } if (!($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm])) { goto iayguaeseyaemwkk; } if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\x73\164\x72\x69\156\147" && $aaqqkgyougeiueyq instanceof Enum) { goto gqycmyieayoegcsy; } $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; goto sqiyuasgusgawuoi; gqycmyieayoegcsy: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; sqiyuasgusgawuoi: iayguaeseyaemwkk: goto ycomeuqeessamows; akyiiioycmgqyuok: $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; ycomeuqeessamows: goto guummoewucyeuiek; owiguescmqyqukui: guummoewucyeuiek: mqacqosyicuiqwia: msiuqseowuumiwuo: } esokkakkumskkmiu: if (!$uwqmqcmssaeieiqa) { goto seyygcwcaogkmaqe; } $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (!isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { goto soqkewsayowwcmco; } $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if (!$aaqqkgyougeiueyq instanceof Schema) { goto ugyawwukegyoqmsq; } $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); ugyawwukegyoqmsq: soqkewsayowwcmco: goto ieoeeyieoskuyiyw; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); goto ieoeeyieoskuyiyw; case "\101\x44\x44\x20\111\x4e\104\105\x58": case "\104\x52\117\x50\x20\111\x4e\x44\x45\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if (!($aiamqeawckcsuaou === "\x41\x44\x44\x20\x49\x4e\x44\105\x58")) { goto ukigmkeewuqomooc; } $aasascamegmwqmqk->index($qgoqiacsiccwoawi); ukigmkeewuqomooc: goto ieoeeyieoskuyiyw; case Constants::yqaumqyacoeciosi: if (!($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi)) { goto wwgikwuigiiqsswq; } $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); wwgikwuigiiqsswq: $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); goto ieoeeyieoskuyiyw; } ciiyqsiswkcwsocm: ieoeeyieoskuyiyw: kwowggaooiyqawyq: } mcuoyseuwoueyaie: }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); seyygcwcaogkmaqe: uugiuqkesegaamqw: ykcmomsiayaymysm: } public function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) { goto qoaawmmcqyacokws; } $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); qoaawmmcqyacokws: return $uiewakwqscemywuo; } public function ysgiswuowuciwqaq() : Connection { return $this->mgogaykgkoogasim()->getConnection(); } public function gqaysymikgeawkqa() : ?SchemaBuilder { if (!(!$this->builder && $this->ysgiswuowuciwqaq())) { goto uwyeycaywowwiquu; } $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder(); uwyeycaywowwiquu: return $this->builder; } public function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if ($aasascamegmwqmqk) { goto cwmuqmoeauqcewoy; } $aasascamegmwqmqk = $this->qgimsauacegueskc(); cwmuqmoeauqcewoy: return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->mwikyscisascoeea(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { goto iomwkkieqcswkkaw; } $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\123\x4f\116": case "\101\x52\x52\101\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); goto eiecgqokmuekaesc; case "\x46\117\122\105\111\x47\116": if (!$aaqqkgyougeiueyq instanceof Foreign) { goto gscyiqmmegqmqcoe; } if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto cciakcwuweqmcose; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto ikukqooiowqywyqo; } if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { goto wicuauokauykwoeu; } if (!(!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto kcwgiwimgqesukqu; } wp_die("\162\145\x66\x65\162\145\x6e\143\x65\x73\x20\x6f\x72\40\157\156\40\151\163\40\156\x6f\164\40\x73\145\164"); kcwgiwimgqesukqu: goto gcecieuocqawmgci; wicuauokauykwoeu: $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->miwqiiqeegeqcwis())); gcecieuocqawmgci: $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if (!($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem())) { goto msmmiaumiasmsiog; } $keuuiqywyuiuegkq->on($koegqoagisewcica); msmmiaumiasmsiog: if (!($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke())) { goto oksqsucimimsswcg; } $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); oksqsucimimsswcg: if (!($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo())) { goto gqeoaceyoiicoaec; } $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); gqeoaceyoiicoaec: if (!($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie())) { goto kkckyqmcyussauma; } $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); kkckyqmcyussauma: ikukqooiowqywyqo: goto uckusgwkoycmkeam; cciakcwuweqmcose: if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto ceosmkqgqgwsowwg; } $this->many2many[] = $aaqqkgyougeiueyq; ceosmkqgqgwsowwg: uckusgwkoycmkeam: gscyiqmmegqmqcoe: goto eiecgqokmuekaesc; case "\x53\105\124": case "\x45\116\125\115": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { goto mieoguuqiwqioeqa; } $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); mieoguuqiwqioeqa: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); goto eiecgqokmuekaesc; case "\x46\114\x4f\x41\124": case "\104\117\x55\102\x4c\x45": case "\x44\105\103\x49\115\101\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); goto eiecgqokmuekaesc; case "\x54\111\x4d\105": case "\x44\101\124\x45\x54\x49\x4d\x45": case "\x54\111\x4d\x45\123\124\x41\115\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); goto eiecgqokmuekaesc; case "\x43\110\101\x52": case "\x53\x54\122\111\x4e\x47": case "\126\x41\122\103\x48\101\122": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { goto qosswumywsaeyqus; } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto swicauyqusmgeccu; qosswumywsaeyqus: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); swicauyqusmgeccu: goto eiecgqokmuekaesc; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); goto eiecgqokmuekaesc; } ggsugekocmsukuci: eiecgqokmuekaesc: if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) { goto igmawmwssyskqqag; } if (!$aaqqkgyougeiueyq->oikqausqaykqkmqi()) { goto maguoggkqamaiuag; } $keuuiqywyuiuegkq->autoIncrement(); maguoggkqamaiuag: $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if (!$aaqqkgyougeiueyq->qumigiaaeieaemgy()) { goto icoiqskygugkgmkm; } $keuuiqywyuiuegkq->unsigned(); icoiqskygugkgmkm: if (!$aaqqkgyougeiueyq->kweqqkiwiugikyam()) { goto kocaieyauyiqmyiy; } $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); kocaieyauyiqmyiy: if (!($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa())) { goto gcqssckowmywoesw; } $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); gcqssckowmywoesw: if (!($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky())) { goto eekkcooqswqouoei; } $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); eekkcooqswqouoei: $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if (!$vkgsqsqqqgyaqkog) { goto cuayqmasemsqsume; } $keuuiqywyuiuegkq->change(); cuayqmasemsqsume: igmawmwssyskqqag: iomwkkieqcswkkaw: return $aasascamegmwqmqk; } }
