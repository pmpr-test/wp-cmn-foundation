<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853d170784             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Exception; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\ColumnDefinition; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Illuminate\Database\Schema\Builder; class Migration extends Container { use ModelTrait; protected array $many2many = []; protected ?Builder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_loaded', [$this, 'esowseaasiyomciq']); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!$egkyssmuqcwaciya || !$umuecysoywoumgwo) { if ($egkyssmuqcwaciya) { Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); } $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("Something wrong on adding doctrine database types: %s", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function esowseaasiyomciq() { $umgmeqmiasisceqk = $this->many2many; if ($umgmeqmiasisceqk) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if ($sogksuscggsicmac) { [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$eqwoegegiamegqsm->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $eqwoegegiamegqsm->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->cueaickeeoiwayou()))], $syeseoiyagmgumcy); } } } } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu('timestamp', 'timestamp', DateTimeType::class)->kuweuguyooiciyyu('integer', 'integer', SmallIntType::class)->kuweuguyooiciyyu('string', 'enum'); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->mgogaykgkoogasim()->cueaickeeoiwayou(); } return $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("Something wrong on updating table %s: %s", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } private function create($qssskwiqeumgkago, $aasascamegmwqmqk) { if ($siykeiywomwwuoiw = $this->gqaysymikgeawkqa()) { $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements($this->mgogaykgkoogasim()->kumuygiiqswoyasy()); if (!$oaoyaayyyeimkioe->collation) { $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge(Constants::yksgeugumyiukkam); } if (!$oaoyaayyyeimkioe->charset) { $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge(Constants::goayeyygsuqcukka); } foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); } }); } } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($syeseoiyagmgumcy && $siykeiywomwwuoiw) { $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if ($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $sogksuscggsicmac = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if ($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0])) { $this->many2many[] = $aaqqkgyougeiueyq; } } $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; } else { $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); } } $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (!in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } } if (!$gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (!isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { } } } foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Schema) { if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } else { if ($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm]) { if ($yeacayasgueouoqc[$aokagokqyuysuksm] === 'string' && $aaqqkgyougeiueyq instanceof Enum) { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } else { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } } } } } if ($uwqmqcmssaeieiqa) { $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if ($aaqqkgyougeiueyq instanceof Schema) { $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); } } break; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); break; case 'ADD INDEX': case 'DROP INDEX': $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if ($aiamqeawckcsuaou === 'ADD INDEX') { $aasascamegmwqmqk->index($qgoqiacsiccwoawi); } break; case Constants::yqaumqyacoeciosi: if ($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi) { $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); } $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); break; } } }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); } } } } private function gqaysymikgeawkqa() : ?Builder { if (!$this->builder && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()) { $this->builder = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getSchemaBuilder(); } return $this->builder; } private function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if (!$aasascamegmwqmqk) { $aasascamegmwqmqk = $this->qgimsauacegueskc(); } return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } private function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if ($omkysikckkcieckq && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()) { $uiewakwqscemywuo = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); } return $uiewakwqscemywuo; } private function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->iooowgsqoyqseyuu(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case 'JSON': case 'ARRAY': $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); break; case 'FOREIGN': if ($aaqqkgyougeiueyq instanceof Foreign) { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $this->many2many[] = $aaqqkgyougeiueyq; } } else { if ($aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->cueaickeeoiwayou())); } else { if (!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke()) { wp_die('references or on is not set'); } } $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if ($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem()) { $keuuiqywyuiuegkq->on($koegqoagisewcica); } if ($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke()) { $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); } if ($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo()) { $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); } if ($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie()) { $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); } } } } break; case 'SET': case 'ENUM': $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); break; case 'FLOAT': case 'DOUBLE': case 'DECIMAL': $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); break; case 'TIME': case 'DATETIME': case 'TIMESTAMP': $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); break; case 'CHAR': case 'STRING': case 'VARCHAR': if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); } else { $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); } break; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); break; } if ($keuuiqywyuiuegkq instanceof ColumnDefinition) { if ($aaqqkgyougeiueyq->oikqausqaykqkmqi()) { $keuuiqywyuiuegkq->autoIncrement(); } $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if ($aaqqkgyougeiueyq->qumigiaaeieaemgy()) { $keuuiqywyuiuegkq->unsigned(); } if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) { $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); } if ($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa()) { $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); } if ($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky()) { $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); } $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if ($vkgsqsqqqgyaqkog) { $keuuiqywyuiuegkq->change(); } } } return $aasascamegmwqmqk; } }
