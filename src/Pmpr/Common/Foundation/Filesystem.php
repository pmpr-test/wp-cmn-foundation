<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\160\162\137\144\x6f\x77\x6e\154\157\141\x64"; const ccaesqeykqemuuec = "\160\162\137\x64\157\x77\156\154\157\x61\144\x5f\x69\x64"; const uoegqmecccweeymc = "\144\x6f\167\156\154\157\141\144\137\143\x6f\x75\156\x74"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\165\165\x79\143\161\155\x73\165\x79\x71\x6f\153\171\x67\x6b\171"], 99)->qcsmikeggeemccuu("\164\145\x6d\160\x6c\141\164\145\137\x72\x65\144\151\x72\x65\143\164", [$this, "\x73\151\147\151\x79\165\x6d\147\x69\x71\x6f\x75\x65\155\171\x79"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x69\156\x69\x74", [$this, "\x73\171\x71\x75\x69\x77\x77\x71\x75\163\x73\165\151\141\155\x75"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\145\162\x79\137\x76\141\x72\x73", [$this, "\155\x75\x6f\x75\155\147\155\151\165\165\x6f\x61\167\163\x69\167"]); $this->aqaqisyssqeomwom("\x61\164\x74\x61\143\x68\155\145\156\x74\x5f\x64\x6f\x77\x6e\154\157\141\144\x5f\x63\157\x75\x6e\x74", [$this, "\145\155\x6b\141\151\157\161\155\x69\x6b\x73\147\141\x65\x75\x69"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\x5f\x50\125\124\137\125\x50\114\117\101\104\x5f\x49\x4e\x5f\123\x54\101\x54\111\103"))) { goto uiookuuakyqyuagw; } $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\x5f\x55\x50\x4c\117\x41\x44\x5f\x44\x49\x52", "\x75"); $wggyiigmegawawsc = ["\165\x70\x6c\x6f\141\144\137\160\x61\x74\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\x5f\123\124\101\x54\111\103\137\120\x41\x54\110"), "\165\160\x6c\157\141\144\x5f\x75\162\154\137\x70\141\x74\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\137\123\124\101\x54\x49\x43\x5f\125\122\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if (!($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu)) { goto imuyoescowgckyyc; } $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); imuyoescowgckyyc: coskskmacukoewgo: } eakgamsscsuususi: uiookuuakyqyuagw: } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (!isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { goto yeqcqmakwyuoaayk; } $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); yeqcqmakwyuoaayk: } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if (!$aiooqyausygaasqm) { goto qwyuoiycqcaaakcq; } $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); qwyuoiycqcaaakcq: return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\x70\x72\x2d\x64\x6f\167\156\x6c\157\141\144\x5c\x2f\x28\x5b\136\57\x5d\x2b\51\x5c\x2f\x3f\x24", "\x69\156\x64\145\x78\56\160\x68\160\77\x70\x6f\x73\164\137\164\x79\x70\x65\75\141\164\x74\x61\143\x68\155\145\x6e\164\46\160\162\x5f\144\157\x77\156\154\157\141\144\75\x31\46\160\162\x5f\144\x6f\x77\156\154\x6f\x61\x64\137\x69\x64\x3d\x24\x6d\x61\x74\x63\x68\x65\x73\133\61\x5d", "\164\x6f\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if (!$eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { goto qcqyawqiwksyicok; } $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if (!$this->exists($acqcekoeswseswws)) { goto qyeiyecmaomycoks; } $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\x74\x79\x70\145"]; nocache_headers(); header("\122\157\x62\x6f\x74\163\72\x20\156\157\156\145"); header("\x58\55\103\157\156\164\145\156\164\55\124\171\160\x65\x2d\117\160\164\151\x6f\x6e\x73\x3a\x20\x6e\x6f\x73\x6e\151\146\146"); header("\103\x6f\156\164\145\156\164\x2d\124\171\160\145\72\40\141\160\x70\x6c\x69\143\141\x74\x69\157\x6e\x2f\x66\x6f\x72\143\145\55\x64\157\167\156\x6c\x6f\141\x64"); header("\103\x6f\156\164\x65\x6e\164\x2d\x44\145\163\143\x72\x69\160\164\151\x6f\x6e\x3a\x20\x46\x69\x6c\145\x20\x54\162\x61\156\163\146\145\162"); header("\103\157\x6e\x74\x65\x6e\164\x2d\x44\x69\163\160\x6f\163\151\x74\x69\x6f\156\72\40\x61\164\x74\141\x63\x68\x6d\x65\x6e\164\73\x20\x66\x69\x6c\145\x6e\x61\155\145\x3d\x22" . rawurldecode($wkcwykowmmmwioqs) . "\x22"); header("\105\170\x70\x69\162\145\163\72\40\60"); header("\103\157\156\164\x65\x6e\x74\55\x54\171\160\145\x3a\40\141\x70\160\154\151\x63\x61\x74\151\x6f\156\x2f\x6f\x63\164\145\164\55\x73\x74\162\x65\x61\x6d"); header("\x43\x61\143\150\x65\55\x43\x6f\156\164\x72\157\x6c\x3a\x20\x6d\x75\163\x74\x2d\x72\x65\x76\x61\x6c\x69\144\x61\164\x65\x2c\40\x70\x6f\x73\x74\55\x63\150\x65\143\153\75\x30\54\x20\x70\x72\x65\x2d\143\x68\145\143\x6b\x3d\60"); header("\x43\x6f\156\164\x65\156\x74\x2d\x54\x72\x61\156\x73\x66\145\x72\55\x45\x6e\143\157\144\151\156\x67\72\x20\142\151\156\141\x72\171"); header("\x43\157\156\x74\x65\156\x74\x2d\x4c\x65\x6e\147\164\150\72\40" . filesize($acqcekoeswseswws)); header("\x50\x72\x61\147\155\x61\72\40\x70\x75\x62\154\x69\143"); header("\x41\x63\143\x65\x70\x74\55\x52\141\x6e\x67\x65\163\72\40\142\171\164\x65\163"); header("\x43\x6f\156\x74\145\156\164\x2d\x74\171\x70\145\x3a\x20{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if (!$this->exists($acqcekoeswseswws)) { goto iqmymqqskgsgsiku; } if (!ob_get_length()) { goto ukswuuooigiykaso; } ob_end_clean(); ukswuuooigiykaso: flush(); readfile($acqcekoeswseswws); iqmymqqskgsgsiku: qyeiyecmaomycoks: qcqyawqiwksyicok: exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if (!$this->mkdir($mkomwsiykqigmqca)) { goto kqeemeukmoukyeiw; } $ymqmyyeuycgmigyo = "\151\156\144\145\x78"; $ewgwqamkygiqaawc = "\151\146\40\x28\41\x64\145\146\151\x6e\x65\144\50\x27\x41\102\123\120\x41\x54\110\x27\x29\51\x20\173\x20\145\x78\x69\x74\x3b\40\175"; if (!$miawkwqioaeasiig) { goto gkskumckoocyioge; } if (!$kywouseeaeysccgq) { goto ayymceqgcuqkqkmo; } $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); ayymceqgcuqkqkmo: goto ycogsiaoceaiaosi; gkskumckoocyioge: $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}"; if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) { goto ucewekmmuygqecqk; } $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); ucewekmmuygqecqk: ycogsiaoceaiaosi: kqeemeukmoukyeiw: return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) { goto asqimcomuseoqiue; } $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f{$ymqmyyeuycgmigyo}\56\160\150\x70"; if ($this->exists($esaqeawoigqgagum)) { goto quikiokiqwkqsqys; } $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\x70\150\x70\x20{$ewgwqamkygiqaawc}"); quikiokiqwkqsqys: asqimcomuseoqiue: } public function exists($qogsmwakwacwqogk) : bool { if (is_string($qogsmwakwacwqogk)) { goto qkkocwikmsocekwq; } return false; qkkocwikmsocekwq: return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { goto cseseucmsoywsecu; } if (!($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig))) { goto oqikauiqoeuyoeyc; } $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\56", "\56\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; oqikauiqoeuyoeyc: goto ocwqeygqmqgawqqy; cseseucmsoywsecu: $this->mkdir($miawkwqioaeasiig); ocwqeygqmqgawqqy: return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { goto uqimycsoiocokgyi; } $kigowwqauiumummw = false; goto oggiokiewaqggaoc; uqimycsoiocokgyi: $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; oggiokiewaqggaoc: } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) { goto ymcqmgsqsggscmsi; } $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); ymcqmgsqsggscmsi: return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if (!$qmwoqyacswkwkiog) { goto geakuimqwgsiaask; } if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) { goto qawgegcsiawquqcm; } $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); qawgegcsiawquqcm: $kigowwqauiumummw = true; geakuimqwgsiaask: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\141\x6e\40\156\x6f\x74\x20\x63\x72\145\141\164\x65\x20\x64\x69\162\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if ($this->exists($mkomwsiykqigmqca)) { goto aoqycegeggwwkwya; } $this->mkdir($mkomwsiykqigmqca); aoqycegeggwwkwya: return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\141\x6e\x20\156\x6f\x74\x20\x70\165\164\x20\143\157\156\x74\145\x6e\x74\x3a\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if (!$this->exists($qogsmwakwacwqogk)) { goto ekeokeoweycsyqos; } $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\142", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\115\102", PR__CMN__FOUNDATION), __("\x47\x42", PR__CMN__FOUNDATION)]; if (!$wcoyaokieoeeswcq) { goto wkigieqkikmiqqgw; } $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) { goto ukgsemksqoiukgoc; } $oiegiwogmwmawkeo = sprintf("\x25\x2e\x31\146\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); ukgsemksqoiukgoc: wkigieqkikmiqqgw: ekeokeoweycsyqos: return $oiegiwogmwmawkeo; } }
