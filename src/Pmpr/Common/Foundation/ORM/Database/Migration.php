<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             676d4ae089ce3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Exception; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\ColumnDefinition; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Illuminate\Database\Schema\Builder; class Migration extends Container { use ModelTrait; protected array $many2many = []; protected ?Builder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\154\157\141\x64\x65\144", [$this, "\145\x73\x6f\x77\x73\x65\x61\x61\x73\151\x79\x6f\155\x63\x69\x71"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!$egkyssmuqcwaciya || !$umuecysoywoumgwo) { if ($egkyssmuqcwaciya) { Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); } $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\x65\x74\150\151\x6e\x67\x20\x77\x72\x6f\156\147\40\157\x6e\40\141\144\x64\151\156\x67\x20\144\157\x63\164\x72\x69\156\145\40\x64\x61\164\141\142\x61\x73\x65\x20\x74\171\x70\145\163\72\x20\45\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function esowseaasiyomciq() { $umgmeqmiasisceqk = $this->many2many; if ($umgmeqmiasisceqk) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if ($sogksuscggsicmac) { [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$eqwoegegiamegqsm->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $eqwoegegiamegqsm->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->cueaickeeoiwayou()))], $syeseoiyagmgumcy); } } } } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\x74\x69\155\x65\163\164\x61\155\160", "\x74\x69\x6d\x65\163\x74\141\155\x70", DateTimeType::class)->kuweuguyooiciyyu("\x69\156\x74\145\x67\145\162", "\151\x6e\164\145\x67\x65\x72", SmallIntType::class)->kuweuguyooiciyyu("\163\x74\x72\151\x6e\147", "\145\156\165\155"); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->mgogaykgkoogasim()->cueaickeeoiwayou(); } return $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\x6d\x65\164\150\x69\156\147\40\167\x72\x6f\x6e\x67\40\157\x6e\40\x75\160\144\141\x74\x69\x6e\147\40\164\141\x62\154\145\40\45\163\x3a\40\x25\163", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } private function create($qssskwiqeumgkago, $aasascamegmwqmqk) { if ($siykeiywomwwuoiw = $this->gqaysymikgeawkqa()) { $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements($this->mgogaykgkoogasim()->kumuygiiqswoyasy()); if (!$oaoyaayyyeimkioe->collation) { $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge(Constants::yksgeugumyiukkam); } if (!$oaoyaayyyeimkioe->charset) { $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge(Constants::goayeyygsuqcukka); } foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); } }); } } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($syeseoiyagmgumcy && $siykeiywomwwuoiw) { $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if ($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $sogksuscggsicmac = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if ($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0])) { $this->many2many[] = $aaqqkgyougeiueyq; } } $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; } else { $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); } } $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (!in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } } if (!$gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (!isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { } } } foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Schema) { if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } else { if ($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm]) { if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\163\x74\x72\151\156\147" && $aaqqkgyougeiueyq instanceof Enum) { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } else { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } } } } } if ($uwqmqcmssaeieiqa) { $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if ($aaqqkgyougeiueyq instanceof Schema) { $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); } } break; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); break; case "\x41\x44\104\x20\x49\x4e\x44\x45\130": case "\x44\x52\117\x50\40\111\x4e\104\x45\x58": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if ($aiamqeawckcsuaou === "\101\x44\104\x20\x49\116\x44\105\130") { $aasascamegmwqmqk->index($qgoqiacsiccwoawi); } break; case Constants::yqaumqyacoeciosi: if ($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi) { $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); } $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); break; } } }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); } } } } private function gqaysymikgeawkqa() : ?Builder { if (!$this->builder && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()) { $this->builder = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getSchemaBuilder(); } return $this->builder; } private function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if (!$aasascamegmwqmqk) { $aasascamegmwqmqk = $this->qgimsauacegueskc(); } return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } private function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if ($omkysikckkcieckq && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()) { $uiewakwqscemywuo = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); } return $uiewakwqscemywuo; } private function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->iooowgsqoyqseyuu(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\x4a\123\x4f\x4e": case "\101\122\122\x41\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); break; case "\106\x4f\122\x45\111\107\116": if ($aaqqkgyougeiueyq instanceof Foreign) { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $this->many2many[] = $aaqqkgyougeiueyq; } } else { if ($aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->cueaickeeoiwayou())); } else { if (!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke()) { wp_die("\x72\x65\x66\145\162\145\156\143\145\x73\x20\x6f\x72\x20\157\x6e\40\151\163\40\156\x6f\x74\x20\x73\x65\x74"); } } $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if ($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem()) { $keuuiqywyuiuegkq->on($koegqoagisewcica); } if ($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke()) { $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); } if ($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo()) { $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); } if ($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie()) { $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); } } } } break; case "\123\x45\x54": case "\x45\x4e\125\x4d": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); break; case "\106\114\117\101\x54": case "\x44\117\125\x42\x4c\x45": case "\104\x45\x43\111\x4d\101\114": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); break; case "\x54\x49\x4d\x45": case "\104\101\124\105\x54\x49\115\105": case "\x54\x49\115\x45\x53\124\101\115\x50": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); break; case "\x43\110\101\122": case "\x53\x54\x52\111\116\107": case "\x56\x41\122\103\x48\x41\122": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); } else { $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); } break; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); break; } if ($keuuiqywyuiuegkq instanceof ColumnDefinition) { if ($aaqqkgyougeiueyq->oikqausqaykqkmqi()) { $keuuiqywyuiuegkq->autoIncrement(); } $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if ($aaqqkgyougeiueyq->qumigiaaeieaemgy()) { $keuuiqywyuiuegkq->unsigned(); } if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) { $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); } if ($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa()) { $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); } if ($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky()) { $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); } $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if ($vkgsqsqqqgyaqkog) { $keuuiqywyuiuegkq->change(); } } } return $aasascamegmwqmqk; } }
