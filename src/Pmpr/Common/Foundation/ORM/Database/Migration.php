<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da387f146             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Doctrine\DBAL\Types\DateTimeType; use Doctrine\DBAL\Types\SmallIntType; use Doctrine\DBAL\Types\Type; use Exception; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Schema\ColumnDefinition; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Illuminate\Database\Schema\Builder; class Migration extends Container { use ModelTrait; protected array $many2many = []; protected ?Builder $builder = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\x6c\x6f\141\144\x65\x64", [$this, "\x65\x73\x6f\x77\x73\x65\x61\141\163\151\171\157\155\143\x69\x71"]); } public function kuweuguyooiciyyu($sqeykgyoooqysmca, $wagccmkkwwmqsaau, $egkyssmuqcwaciya = null) : self { try { $umuecysoywoumgwo = Type::hasType($sqeykgyoooqysmca); if (!$egkyssmuqcwaciya || !$umuecysoywoumgwo) { if ($egkyssmuqcwaciya) { Type::addType($sqeykgyoooqysmca, $egkyssmuqcwaciya); } $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getDoctrineConnection()->getDatabasePlatform()->registerDoctrineTypeMapping($wagccmkkwwmqsaau, $sqeykgyoooqysmca); } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\157\155\145\164\x68\x69\x6e\147\x20\167\162\157\156\x67\40\157\x6e\x20\141\x64\x64\x69\156\147\40\144\x6f\x63\x74\x72\151\156\x65\40\144\x61\164\141\x62\x61\163\145\x20\164\x79\160\145\163\x3a\40\x25\x73", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $this; } public function esowseaasiyomciq() { $umgmeqmiasisceqk = $this->many2many; if ($umgmeqmiasisceqk) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($umgmeqmiasisceqk as $aaqqkgyougeiueyq) { $sogksuscggsicmac = $this->mgogaykgkoogasim()->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if ($sogksuscggsicmac) { [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $ggquyackoukckwms] = $sogksuscggsicmac; $ceiwsaacewygcsqg = $ggquyackoukckwms->kumuygiiqswoyasy(); $this->create([$eqwoegegiamegqsm->eoaomaokwkwqyqiq($usymcioagieycusu . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc()), $eqwoegegiamegqsm->eoaomaokwkwqyqiq($wkwywcemusswkgwk . Constants::mswocgcucqoaesaa)->wuuqgaekqeymecag()->gqseocequggskgww($ceiwsaacewygcsqg)->wqykgeksiuoqcwqe($this->qgimsauacegueskc($ggquyackoukckwms->cueaickeeoiwayou()))], $syeseoiyagmgumcy); } } } } public function uyggaeikeegyewqi() { $this->kuweuguyooiciyyu("\164\151\x6d\145\x73\164\x61\x6d\x70", "\164\x69\x6d\x65\x73\x74\141\x6d\x70", DateTimeType::class)->kuweuguyooiciyyu("\x69\x6e\x74\x65\147\145\162", "\151\x6e\164\145\147\x65\162", SmallIntType::class)->kuweuguyooiciyyu("\163\164\x72\151\156\147", "\x65\x6e\165\155"); } public function qgimsauacegueskc($ymqmyyeuycgmigyo = null) : ?string { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->mgogaykgkoogasim()->cueaickeeoiwayou(); } return $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($ymqmyyeuycgmigyo); } public function cucqgwmoseqakgoe() { $syeseoiyagmgumcy = $this->qgimsauacegueskc(); try { $this->uyggaeikeegyewqi(); $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); $this->iygikoguosecwqgw() ? $this->update($qssskwiqeumgkago, $syeseoiyagmgumcy) : $this->create($qssskwiqeumgkago, $syeseoiyagmgumcy); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x53\x6f\x6d\x65\x74\x68\x69\156\x67\x20\167\162\157\x6e\147\40\x6f\156\40\x75\x70\144\x61\164\151\x6e\147\x20\x74\141\x62\154\x65\40\45\163\72\x20\x25\163", $syeseoiyagmgumcy, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } } private function create($qssskwiqeumgkago, $aasascamegmwqmqk) { if ($siykeiywomwwuoiw = $this->gqaysymikgeawkqa()) { $siykeiywomwwuoiw->create($aasascamegmwqmqk, function (Blueprint &$oaoyaayyyeimkioe) use($qssskwiqeumgkago) { $oaoyaayyyeimkioe->integerIncrements($this->mgogaykgkoogasim()->kumuygiiqswoyasy()); if (!$oaoyaayyyeimkioe->collation) { $oaoyaayyyeimkioe->collation = $this->aceaeommyuooiqge(Constants::yksgeugumyiukkam); } if (!$oaoyaayyyeimkioe->charset) { $oaoyaayyyeimkioe->charset = $this->aceaeommyuooiqge(Constants::goayeyygsuqcukka); } foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $oaoyaayyyeimkioe = $this->gqeeyaqcuukysmes($oaoyaayyyeimkioe, $aaqqkgyougeiueyq); } }); } } public function update($qssskwiqeumgkago, $syeseoiyagmgumcy) { $uwqmqcmssaeieiqa = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($syeseoiyagmgumcy && $siykeiywomwwuoiw) { $ioyqiwcymymygsmu = [Constants::gouqcwikiiygyasc]; $yeacayasgueouoqc = $uwomkgseoiegeume = []; foreach ($qssskwiqeumgkago as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->iueigwuckeaswyuu() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { $gkyciwoiiisgywcs->unset($qssskwiqeumgkago, $ymqmyyeuycgmigyo); if ($aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $sogksuscggsicmac = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); if ($sogksuscggsicmac && !$this->iygikoguosecwqgw($sogksuscggsicmac[0])) { $this->many2many[] = $aaqqkgyougeiueyq; } } $ioyqiwcymymygsmu[] = $ymqmyyeuycgmigyo; } else { $uwomkgseoiegeume[$ymqmyyeuycgmigyo] = $aaqqkgyougeiueyq->gwumsacwqiukkyie(); } } $wkkweuacukumqmya = $siykeiywomwwuoiw->getColumnListing($syeseoiyagmgumcy); foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) { if (!in_array($qgoqiacsiccwoawi, $ioyqiwcymymygsmu, true)) { try { $mouiawueyyesyuwc = $siykeiywomwwuoiw->getColumnType($syeseoiyagmgumcy, $qgoqiacsiccwoawi); $yeacayasgueouoqc[$qgoqiacsiccwoawi] = $mouiawueyyesyuwc; } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } } if (!$gkyciwoiiisgywcs->ooaaysmsqgsqmaqu($yeacayasgueouoqc, $uwomkgseoiegeume, false)) { foreach ($yeacayasgueouoqc as $qgoqiacsiccwoawi => $sqeykgyoooqysmca) { if (!isset($uwomkgseoiegeume[$qgoqiacsiccwoawi])) { $ksiyqouuaoymsycg = false; foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { } } } foreach ($qssskwiqeumgkago as $aokagokqyuysuksm => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Schema) { if (!isset($yeacayasgueouoqc[$aokagokqyuysuksm])) { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::ukwaycqmyyuekwqg, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } else { if ($yeacayasgueouoqc[$aokagokqyuysuksm] !== $uwomkgseoiegeume[$aokagokqyuysuksm]) { if ($yeacayasgueouoqc[$aokagokqyuysuksm] === "\x73\164\162\151\156\147" && $aaqqkgyougeiueyq instanceof Enum) { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::yqaumqyacoeciosi, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } else { $uwqmqcmssaeieiqa[] = [Constants::uqgcmmosieyimiku => Constants::cwyusycokcqkieay, Constants::meisqwykgaymauka => $aokagokqyuysuksm]; } } } } } if ($uwqmqcmssaeieiqa) { $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $qssskwiqeumgkago) { foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) { $qgoqiacsiccwoawi = $ocyscigwmouqaiia[Constants::meisqwykgaymauka]; $aiamqeawckcsuaou = $ocyscigwmouqaiia[Constants::uqgcmmosieyimiku]; switch ($aiamqeawckcsuaou) { case Constants::ukwaycqmyyuekwqg: case Constants::cwyusycokcqkieay: if (isset($qssskwiqeumgkago[$qgoqiacsiccwoawi])) { $aaqqkgyougeiueyq = $qssskwiqeumgkago[$qgoqiacsiccwoawi]; if ($aaqqkgyougeiueyq instanceof Schema) { $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aaqqkgyougeiueyq, $aiamqeawckcsuaou === Constants::cwyusycokcqkieay); } } break; case Constants::kkiywioiccuqokis: $aasascamegmwqmqk->renameColumn($ocyscigwmouqaiia[Constants::sokiwgiwgagukgsg], $qgoqiacsiccwoawi); break; case "\101\x44\x44\40\x49\116\104\105\130": case "\x44\x52\x4f\120\x20\x49\116\104\105\130": $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi); if ($aiamqeawckcsuaou === "\x41\x44\104\40\x49\116\x44\105\130") { $aasascamegmwqmqk->index($qgoqiacsiccwoawi); } break; case Constants::yqaumqyacoeciosi: if ($this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(Constants::mswocgcucqoaesaa, '', $qgoqiacsiccwoawi) !== $qgoqiacsiccwoawi) { $aasascamegmwqmqk->dropForeign([$qgoqiacsiccwoawi]); } $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi); break; } } }; $siykeiywomwwuoiw->table($this->qgimsauacegueskc(), $ekiuyucoiagmscgy); } } } } private function gqaysymikgeawkqa() : ?Builder { if (!$this->builder && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()) { $this->builder = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getSchemaBuilder(); } return $this->builder; } private function iygikoguosecwqgw($aasascamegmwqmqk = null) : bool { if (!$aasascamegmwqmqk) { $aasascamegmwqmqk = $this->qgimsauacegueskc(); } return $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk); } private function aceaeommyuooiqge($omkysikckkcieckq) : ?string { $uiewakwqscemywuo = null; if ($omkysikckkcieckq && $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()) { $uiewakwqscemywuo = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq); } return $uiewakwqscemywuo; } private function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Schema $aaqqkgyougeiueyq, bool $vkgsqsqqqgyaqkog = false) : Blueprint { $aaqqkgyougeiueyq->umkwmemkiowegeuq(); $ymqmyyeuycgmigyo = $aaqqkgyougeiueyq->iooowgsqoyqseyuu(); $sqeykgyoooqysmca = $aaqqkgyougeiueyq->gueasuouwqysmomu(); $ykiwomimkkuiigoq = $aaqqkgyougeiueyq->qamkswcgsoeggmau(); $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->snake2camel($sqeykgyoooqysmca); $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca); if (method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) { $keuuiqywyuiuegkq = null; switch ($sqeykgyoooqysmca) { case "\112\x53\117\x4e": case "\x41\x52\122\x41\131": $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo); break; case "\x46\x4f\x52\x45\111\107\116": if ($aaqqkgyougeiueyq instanceof Foreign) { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $this->many2many[] = $aaqqkgyougeiueyq; } } else { if ($aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { if ($gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { $aaqqkgyougeiueyq->gqseocequggskgww($gsmssqouaueqkeui->kumuygiiqswoyasy())->wqykgeksiuoqcwqe($this->qgimsauacegueskc($gsmssqouaueqkeui->cueaickeeoiwayou())); } else { if (!$aaqqkgyougeiueyq->miosasgcmguoamem() || !$aaqqkgyougeiueyq->syccewqoeggkkgke()) { wp_die("\162\x65\x66\x65\162\x65\x6e\143\x65\x73\x20\x6f\162\40\157\156\x20\x69\163\40\x6e\157\x74\40\163\x65\x74"); } } $aasascamegmwqmqk->integer($ymqmyyeuycgmigyo)->unsigned()->nullable(); $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo); if ($koegqoagisewcica = $aaqqkgyougeiueyq->miosasgcmguoamem()) { $keuuiqywyuiuegkq->on($koegqoagisewcica); } if ($ykqcceqiqygieeks = $aaqqkgyougeiueyq->syccewqoeggkkgke()) { $keuuiqywyuiuegkq->references($ykqcceqiqygieeks); } if ($smgycasaqmgcaekq = $aaqqkgyougeiueyq->giqekaueqsgsmkgo()) { $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq); } if ($muegsmmicsqsgucm = $aaqqkgyougeiueyq->ucqugkkuiooayqie()) { $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm); } } } } break; case "\x53\105\124": case "\105\x4e\x55\115": $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->rswuscuqiwycaoym($qiouiwasaauyaaue)) { $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue); } $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue); break; case "\106\114\x4f\x41\x54": case "\104\117\x55\102\114\x45": case "\x44\105\x43\x49\115\101\x4c": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aaqqkgyougeiueyq->siamswkmsqckqgeu()); break; case "\x54\111\x4d\x45": case "\104\101\124\105\124\x49\115\105": case "\x54\x49\x4d\105\x53\x54\x41\115\120": $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0); break; case "\x43\110\101\x52": case "\123\x54\x52\111\116\107": case "\126\101\122\103\110\101\x52": if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) { $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq); } else { $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); } break; default: $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo); break; } if ($keuuiqywyuiuegkq instanceof ColumnDefinition) { if ($aaqqkgyougeiueyq->oikqausqaykqkmqi()) { $keuuiqywyuiuegkq->autoIncrement(); } $keuuiqywyuiuegkq->default($aaqqkgyougeiueyq->oiswysuiioecsaae()); if ($aaqqkgyougeiueyq->qumigiaaeieaemgy()) { $keuuiqywyuiuegkq->unsigned(); } if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) { $keuuiqywyuiuegkq->unique(); $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo); } if ($guuwoyaeoeeaauug = $aaqqkgyougeiueyq->ogmguwgoqkqkkisa()) { $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug); } if ($kokmwkcqkgkewiuw = $aaqqkgyougeiueyq->yuwwmewqqauckiky()) { $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw); } $keuuiqywyuiuegkq->nullable($aaqqkgyougeiueyq->yseywyqacmugimme()); if ($vkgsqsqqqgyaqkog) { $keuuiqywyuiuegkq->change(); } } } return $aasascamegmwqmqk; } }
