<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\160\162\137\x64\x6f\167\156\x6c\157\x61\144"; const ccaesqeykqemuuec = "\x70\162\x5f\144\157\x77\156\x6c\x6f\x61\144\x5f\151\144"; const uoegqmecccweeymc = "\x64\x6f\167\x6e\154\157\x61\144\137\x63\x6f\165\x6e\x74"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\165\x75\171\x63\x71\155\x73\x75\171\161\157\x6b\171\x67\153\x79"], 99)->qcsmikeggeemccuu("\164\x65\x6d\160\x6c\141\164\x65\137\x72\x65\144\x69\162\145\143\x74", [$this, "\x73\151\x67\x69\x79\165\155\x67\x69\161\157\x75\145\x6d\171\x79"])->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x69\156\x69\164", [$this, "\x73\171\x71\165\x69\x77\167\x71\165\163\x73\x75\151\x61\x6d\x75"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\x65\162\171\137\x76\141\x72\163", [$this, "\x6d\x75\157\165\x6d\x67\x6d\151\165\165\157\141\x77\x73\x69\167"]); $this->aqaqisyssqeomwom("\x61\x74\164\141\143\x68\155\145\156\164\137\x64\x6f\x77\156\154\157\141\x64\x5f\x63\x6f\165\156\164", [$this, "\x65\x6d\153\x61\151\157\x71\155\151\153\163\147\141\145\165\151"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\137\120\x55\124\x5f\125\x50\x4c\x4f\101\104\x5f\111\x4e\137\123\124\101\x54\x49\x43"))) { goto imuyoescowgckyyc; } $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\x5f\125\120\114\117\101\104\x5f\x44\x49\x52", "\x75"); $wggyiigmegawawsc = ["\165\160\154\157\141\144\137\160\141\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\137\x53\124\101\x54\111\103\137\120\101\124\110"), "\x75\160\154\157\x61\144\x5f\x75\162\x6c\137\160\x61\x74\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\x5f\x53\124\x41\124\111\x43\137\125\122\114")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if (!($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu)) { goto coskskmacukoewgo; } $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); coskskmacukoewgo: eakgamsscsuususi: } pmmcyycmwceweqck: imuyoescowgckyyc: } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (!isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { goto uiookuuakyqyuagw; } $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); uiookuuakyqyuagw: } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if (!$aiooqyausygaasqm) { goto yeqcqmakwyuoaayk; } $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); yeqcqmakwyuoaayk: return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\x70\x72\55\x64\157\x77\x6e\x6c\157\141\144\x5c\x2f\50\x5b\136\57\135\x2b\x29\x5c\57\x3f\x24", "\151\x6e\144\145\x78\56\160\150\160\77\160\157\x73\x74\x5f\x74\171\x70\x65\x3d\x61\164\x74\141\x63\150\155\145\156\164\46\x70\162\137\x64\157\x77\x6e\154\157\141\x64\75\61\46\160\162\x5f\144\x6f\167\x6e\154\x6f\141\144\x5f\151\x64\75\x24\155\x61\164\143\150\x65\163\x5b\61\135", "\164\x6f\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if (!$eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { goto qyeiyecmaomycoks; } $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if (!$this->exists($acqcekoeswseswws)) { goto iqmymqqskgsgsiku; } $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\x74\x79\x70\145"]; nocache_headers(); header("\x52\157\142\x6f\x74\x73\x3a\x20\156\x6f\156\145"); header("\130\55\103\157\156\x74\145\156\164\55\x54\x79\x70\x65\x2d\117\160\x74\151\157\156\x73\72\40\156\157\163\x6e\x69\x66\x66"); header("\103\x6f\x6e\164\145\x6e\164\55\x54\x79\160\145\72\40\141\x70\160\x6c\151\x63\141\164\x69\x6f\156\57\146\x6f\162\143\x65\x2d\x64\157\x77\x6e\154\157\141\x64"); header("\103\157\156\164\x65\156\164\55\104\x65\163\143\162\x69\160\164\151\157\x6e\x3a\40\106\151\x6c\x65\x20\124\x72\x61\x6e\163\x66\145\x72"); header("\x43\x6f\x6e\164\x65\156\x74\x2d\x44\x69\x73\160\x6f\163\x69\x74\x69\157\156\x3a\x20\x61\164\164\141\143\150\155\145\156\x74\x3b\x20\x66\x69\154\x65\156\x61\155\145\75\x22" . rawurldecode($wkcwykowmmmwioqs) . "\x22"); header("\105\170\x70\x69\x72\x65\163\72\x20\60"); header("\x43\x6f\156\164\x65\x6e\x74\55\124\171\160\145\72\x20\141\x70\160\154\151\x63\x61\164\151\157\x6e\57\x6f\x63\164\145\164\x2d\x73\164\162\x65\x61\x6d"); header("\x43\x61\x63\x68\145\x2d\103\157\x6e\164\x72\x6f\x6c\72\40\x6d\165\163\164\55\162\145\166\x61\154\151\144\141\164\145\x2c\x20\160\x6f\x73\164\x2d\x63\150\145\143\x6b\75\x30\54\40\160\162\145\x2d\x63\150\x65\x63\153\75\60"); header("\103\157\x6e\x74\145\x6e\x74\55\124\x72\x61\x6e\163\x66\x65\x72\55\105\x6e\143\157\144\x69\x6e\x67\72\40\x62\151\x6e\141\x72\x79"); header("\x43\x6f\x6e\x74\x65\x6e\164\55\x4c\x65\156\147\x74\x68\72\x20" . filesize($acqcekoeswseswws)); header("\120\162\x61\147\155\141\72\40\160\165\x62\154\151\143"); header("\x41\x63\x63\x65\x70\x74\55\122\141\156\147\145\x73\x3a\40\142\171\x74\x65\163"); header("\103\157\x6e\x74\x65\x6e\164\55\x74\x79\x70\x65\x3a\40{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if (!$this->exists($acqcekoeswseswws)) { goto ukswuuooigiykaso; } if (!ob_get_length()) { goto qwyuoiycqcaaakcq; } ob_end_clean(); qwyuoiycqcaaakcq: flush(); readfile($acqcekoeswseswws); ukswuuooigiykaso: iqmymqqskgsgsiku: qyeiyecmaomycoks: exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if (!$this->mkdir($mkomwsiykqigmqca)) { goto ycogsiaoceaiaosi; } $ymqmyyeuycgmigyo = "\x69\x6e\144\x65\170"; $ewgwqamkygiqaawc = "\x69\146\40\x28\x21\x64\x65\146\151\156\145\x64\x28\x27\x41\x42\x53\x50\101\124\x48\x27\x29\x29\x20\x7b\x20\145\170\x69\x74\x3b\x20\175"; if (!$miawkwqioaeasiig) { goto ayymceqgcuqkqkmo; } if (!$kywouseeaeysccgq) { goto ucewekmmuygqecqk; } $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); ucewekmmuygqecqk: goto gkskumckoocyioge; ayymceqgcuqkqkmo: $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\57{$miawkwqioaeasiig}"; if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) { goto qcqyawqiwksyicok; } $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); qcqyawqiwksyicok: gkskumckoocyioge: ycogsiaoceaiaosi: return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) { goto quikiokiqwkqsqys; } $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\56\x70\x68\x70"; if ($this->exists($esaqeawoigqgagum)) { goto kqeemeukmoukyeiw; } $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\160\x68\160\x20{$ewgwqamkygiqaawc}"); kqeemeukmoukyeiw: quikiokiqwkqsqys: } public function exists($qogsmwakwacwqogk) : bool { if (is_string($qogsmwakwacwqogk)) { goto asqimcomuseoqiue; } return false; asqimcomuseoqiue: return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { goto oqikauiqoeuyoeyc; } if (!($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig))) { goto qkkocwikmsocekwq; } $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\56", "\56\x2e"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; qkkocwikmsocekwq: goto cseseucmsoywsecu; oqikauiqoeuyoeyc: $this->mkdir($miawkwqioaeasiig); cseseucmsoywsecu: return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { goto ocwqeygqmqgawqqy; } $kigowwqauiumummw = false; goto uqimycsoiocokgyi; ocwqeygqmqgawqqy: $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; uqimycsoiocokgyi: } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) { goto oggiokiewaqggaoc; } $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); oggiokiewaqggaoc: return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if (!$qmwoqyacswkwkiog) { goto qawgegcsiawquqcm; } if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) { goto ymcqmgsqsggscmsi; } $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); ymcqmgsqsggscmsi: $kigowwqauiumummw = true; qawgegcsiawquqcm: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\x61\156\x20\x6e\x6f\164\x20\x63\162\x65\141\x74\145\40\x64\151\x72\x3a\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if ($this->exists($mkomwsiykqigmqca)) { goto geakuimqwgsiaask; } $this->mkdir($mkomwsiykqigmqca); geakuimqwgsiaask: return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\141\156\x20\156\x6f\164\x20\160\165\164\40\143\x6f\x6e\164\x65\x6e\164\72\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if (!$this->exists($qogsmwakwacwqogk)) { goto wkigieqkikmiqqgw; } $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\x47\x42", PR__CMN__FOUNDATION)]; if (!$wcoyaokieoeeswcq) { goto ukgsemksqoiukgoc; } $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) { goto aoqycegeggwwkwya; } $oiegiwogmwmawkeo = sprintf("\x25\56\61\x66\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); aoqycegeggwwkwya: ukgsemksqoiukgoc: wkigieqkikmiqqgw: return $oiegiwogmwmawkeo; } }
