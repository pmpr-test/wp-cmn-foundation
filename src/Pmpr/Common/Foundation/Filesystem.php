<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\x70\x72\x5f\x64\x6f\x77\156\x6c\157\x61\x64"; const ccaesqeykqemuuec = "\160\162\x5f\x64\x6f\x77\x6e\x6c\157\x61\144\x5f\151\144"; const uoegqmecccweeymc = "\x64\x6f\167\x6e\154\157\x61\144\137\143\157\x75\156\x74"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x75\x75\x79\x63\161\155\163\x75\171\x71\157\153\171\147\x6b\171"], 99)->qcsmikeggeemccuu("\164\145\x6d\x70\154\141\164\145\x5f\x72\x65\x64\x69\x72\145\143\164", [$this, "\163\x69\x67\151\x79\x75\155\x67\151\161\157\x75\x65\155\x79\x79"])->qcsmikeggeemccuu("\x61\144\155\151\156\x5f\x69\x6e\151\x74", [$this, "\x73\171\x71\165\x69\x77\167\161\165\163\163\165\151\141\155\165"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\x75\145\162\x79\x5f\166\x61\162\x73", [$this, "\x6d\x75\157\x75\155\147\x6d\151\x75\x75\157\141\167\x73\x69\x77"]); $this->aqaqisyssqeomwom("\141\164\x74\141\143\x68\155\x65\x6e\x74\x5f\144\x6f\x77\156\154\x6f\141\x64\137\143\157\165\x6e\164", [$this, "\x65\155\x6b\x61\151\157\x71\155\151\153\163\x67\141\x65\x75\x69"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\x5f\120\x55\x54\x5f\125\120\114\x4f\101\x44\x5f\111\116\137\x53\x54\101\x54\111\103"))) { goto uiookuuakyqyuagw; } $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\x5f\x55\120\x4c\x4f\101\104\137\104\x49\122", "\165"); $wggyiigmegawawsc = ["\165\160\x6c\x6f\x61\144\x5f\x70\141\164\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\137\123\x54\x41\x54\111\103\137\x50\x41\124\x48"), "\165\x70\x6c\x6f\x61\x64\x5f\165\x72\x6c\x5f\160\141\164\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\x5f\x53\124\x41\x54\111\x43\137\x55\122\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if (!($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu)) { goto imuyoescowgckyyc; } $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); imuyoescowgckyyc: coskskmacukoewgo: } eakgamsscsuususi: uiookuuakyqyuagw: } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (!isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { goto yeqcqmakwyuoaayk; } $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); yeqcqmakwyuoaayk: } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if (!$aiooqyausygaasqm) { goto qwyuoiycqcaaakcq; } $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); qwyuoiycqcaaakcq: return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\160\162\x2d\x64\x6f\167\156\154\x6f\141\144\x5c\x2f\50\133\136\57\x5d\x2b\51\134\57\77\44", "\x69\156\x64\145\x78\56\x70\x68\x70\77\x70\x6f\163\x74\137\164\x79\x70\145\75\x61\164\x74\x61\143\150\155\x65\x6e\164\x26\160\162\x5f\x64\157\x77\x6e\154\x6f\141\x64\x3d\x31\46\160\x72\137\144\x6f\x77\156\154\x6f\x61\144\x5f\x69\144\75\x24\155\x61\164\143\150\145\x73\133\x31\135", "\x74\x6f\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if (!$eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { goto qcqyawqiwksyicok; } $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if (!$this->exists($acqcekoeswseswws)) { goto qyeiyecmaomycoks; } $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\164\x79\160\145"]; nocache_headers(); header("\x52\157\142\x6f\164\x73\x3a\40\x6e\x6f\x6e\x65"); header("\130\x2d\103\x6f\x6e\164\x65\x6e\x74\55\x54\x79\160\145\55\117\160\x74\x69\157\x6e\x73\x3a\40\156\x6f\x73\x6e\151\x66\146"); header("\103\x6f\x6e\x74\x65\x6e\x74\x2d\x54\171\x70\x65\x3a\40\x61\160\x70\154\x69\x63\141\164\151\x6f\156\57\146\x6f\162\x63\145\x2d\144\x6f\x77\x6e\154\157\x61\144"); header("\x43\x6f\x6e\x74\145\x6e\x74\x2d\x44\145\x73\143\162\x69\x70\164\151\157\x6e\72\40\106\151\x6c\145\40\124\162\x61\156\163\x66\x65\162"); header("\103\157\x6e\164\145\x6e\164\55\104\x69\x73\160\157\x73\151\x74\151\x6f\156\x3a\40\141\x74\x74\141\143\x68\155\145\156\164\73\40\146\151\x6c\145\156\x61\x6d\145\75\42" . rawurldecode($wkcwykowmmmwioqs) . "\42"); header("\105\170\x70\151\162\x65\x73\x3a\x20\x30"); header("\103\157\156\x74\145\x6e\x74\55\124\171\160\145\72\x20\x61\160\160\154\151\143\x61\164\151\x6f\156\x2f\x6f\143\x74\x65\164\55\x73\x74\162\x65\141\x6d"); header("\x43\141\143\x68\x65\55\x43\157\x6e\164\x72\x6f\x6c\72\40\x6d\165\163\x74\x2d\x72\145\166\141\154\x69\x64\x61\x74\x65\x2c\x20\x70\x6f\x73\164\x2d\x63\x68\145\143\153\x3d\60\x2c\40\160\x72\x65\x2d\x63\x68\145\x63\x6b\x3d\x30"); header("\103\x6f\x6e\164\x65\x6e\x74\x2d\124\162\141\156\163\146\x65\162\55\105\x6e\x63\x6f\x64\151\156\147\72\x20\142\151\x6e\x61\162\x79"); header("\x43\x6f\156\164\145\156\164\x2d\x4c\x65\156\x67\x74\x68\x3a\40" . filesize($acqcekoeswseswws)); header("\120\x72\141\147\155\x61\x3a\x20\160\x75\x62\x6c\x69\143"); header("\x41\143\x63\145\160\x74\x2d\122\141\156\147\145\x73\x3a\x20\x62\171\164\x65\x73"); header("\103\157\x6e\x74\145\156\164\x2d\164\x79\x70\x65\72\x20{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if (!$this->exists($acqcekoeswseswws)) { goto iqmymqqskgsgsiku; } if (!ob_get_length()) { goto ukswuuooigiykaso; } ob_end_clean(); ukswuuooigiykaso: flush(); readfile($acqcekoeswseswws); iqmymqqskgsgsiku: qyeiyecmaomycoks: qcqyawqiwksyicok: exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if (!$this->mkdir($mkomwsiykqigmqca)) { goto kqeemeukmoukyeiw; } $ymqmyyeuycgmigyo = "\151\156\144\x65\x78"; $ewgwqamkygiqaawc = "\151\146\40\x28\41\144\x65\x66\151\x6e\145\x64\50\x27\101\x42\x53\x50\x41\124\x48\47\51\51\40\x7b\40\145\x78\151\164\x3b\x20\x7d"; if (!$miawkwqioaeasiig) { goto gkskumckoocyioge; } if (!$kywouseeaeysccgq) { goto ayymceqgcuqkqkmo; } $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); ayymceqgcuqkqkmo: goto ycogsiaoceaiaosi; gkskumckoocyioge: $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\57{$miawkwqioaeasiig}"; if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) { goto ucewekmmuygqecqk; } $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); ucewekmmuygqecqk: ycogsiaoceaiaosi: kqeemeukmoukyeiw: return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) { goto asqimcomuseoqiue; } $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\x2e\x70\x68\160"; if ($this->exists($esaqeawoigqgagum)) { goto quikiokiqwkqsqys; } $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\x70\x68\x70\x20{$ewgwqamkygiqaawc}"); quikiokiqwkqsqys: asqimcomuseoqiue: } public function exists($qogsmwakwacwqogk) : bool { if (is_string($qogsmwakwacwqogk)) { goto qkkocwikmsocekwq; } return false; qkkocwikmsocekwq: return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { goto cseseucmsoywsecu; } if (!($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig))) { goto oqikauiqoeuyoeyc; } $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\x2e", "\56\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; oqikauiqoeuyoeyc: goto ocwqeygqmqgawqqy; cseseucmsoywsecu: $this->mkdir($miawkwqioaeasiig); ocwqeygqmqgawqqy: return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { goto uqimycsoiocokgyi; } $kigowwqauiumummw = false; goto oggiokiewaqggaoc; uqimycsoiocokgyi: $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; oggiokiewaqggaoc: } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) { goto ymcqmgsqsggscmsi; } $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); ymcqmgsqsggscmsi: return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\x77"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if (!$qmwoqyacswkwkiog) { goto geakuimqwgsiaask; } if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) { goto qawgegcsiawquqcm; } $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); qawgegcsiawquqcm: $kigowwqauiumummw = true; geakuimqwgsiaask: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\x61\x6e\40\x6e\157\164\40\143\162\x65\x61\x74\145\40\x64\151\x72\72\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if ($this->exists($mkomwsiykqigmqca)) { goto aoqycegeggwwkwya; } $this->mkdir($mkomwsiykqigmqca); aoqycegeggwwkwya: return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\x61\156\x20\x6e\157\x74\x20\x70\165\164\x20\x63\157\156\x74\145\x6e\x74\72\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if (!$this->exists($qogsmwakwacwqogk)) { goto ekeokeoweycsyqos; } $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\113\x42", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION)]; if (!$wcoyaokieoeeswcq) { goto wkigieqkikmiqqgw; } $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) { goto ukgsemksqoiukgoc; } $oiegiwogmwmawkeo = sprintf("\x25\56\61\x66\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); ukgsemksqoiukgoc: wkigieqkikmiqqgw: ekeokeoweycsyqos: return $oiegiwogmwmawkeo; } }
