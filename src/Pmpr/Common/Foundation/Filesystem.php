<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d13e4bc148             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\160\162\x5f\x64\x6f\x77\x6e\154\x6f\x61\x64"; const ccaesqeykqemuuec = "\160\162\x5f\x64\x6f\x77\x6e\x6c\x6f\x61\x64\137\151\144"; const uoegqmecccweeymc = "\x64\x6f\x77\156\x6c\157\141\144\x5f\x63\x6f\165\156\164"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x75\165\171\x63\x71\x6d\x73\x75\171\x71\x6f\153\171\147\153\x79"], 99)->qcsmikeggeemccuu("\x74\145\x6d\160\x6c\141\164\145\x5f\x72\145\x64\x69\x72\x65\143\x74", [$this, "\x73\151\x67\151\171\x75\x6d\147\x69\161\x6f\x75\x65\x6d\x79\x79"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\x69\156\151\164", [$this, "\x73\171\x71\165\x69\167\x77\161\x75\x73\x73\x75\151\x61\155\x75"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\x65\162\x79\x5f\x76\x61\162\x73", [$this, "\x6d\165\x6f\165\155\x67\x6d\151\x75\x75\157\x61\167\x73\151\x77"]); $this->aqaqisyssqeomwom("\x61\164\164\141\x63\150\155\x65\x6e\x74\x5f\x64\x6f\x77\156\x6c\157\x61\144\x5f\143\x6f\165\x6e\164", [$this, "\x65\x6d\153\x61\151\157\x71\x6d\x69\153\163\147\141\x65\x75\x69"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\137\120\x55\124\x5f\x55\120\114\117\101\104\137\111\116\x5f\x53\124\101\x54\x49\x43")) { $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\137\125\120\114\x4f\x41\x44\137\x44\111\x52", "\x75"); $wggyiigmegawawsc = ["\165\x70\x6c\x6f\141\x64\137\160\141\x74\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\x5f\123\124\101\124\111\x43\x5f\120\101\124\110"), "\x75\x70\x6c\x6f\141\x64\x5f\x75\162\154\x5f\160\141\x74\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\x5f\x53\124\x41\x54\x49\103\137\x55\x52\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if ($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu) { $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); } } } } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); } } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if ($aiooqyausygaasqm) { $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); } return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\x70\x72\x2d\144\x6f\x77\156\154\157\141\144\134\57\x28\x5b\136\x2f\135\x2b\51\134\x2f\x3f\44", "\x69\x6e\144\145\170\56\160\x68\x70\77\160\157\x73\164\x5f\x74\171\160\x65\x3d\x61\x74\164\x61\x63\150\x6d\145\x6e\x74\46\160\162\x5f\144\x6f\x77\156\x6c\157\141\x64\x3d\61\x26\160\162\x5f\x64\x6f\167\x6e\x6c\157\x61\144\x5f\151\144\x3d\x24\x6d\x61\164\x63\x68\x65\x73\x5b\61\135", "\x74\x6f\160"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if ($this->exists($acqcekoeswseswws)) { $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\164\171\160\x65"]; nocache_headers(); header("\122\157\142\x6f\x74\x73\72\x20\x6e\x6f\x6e\145"); header("\x58\x2d\x43\157\x6e\x74\145\x6e\164\x2d\124\x79\160\x65\x2d\x4f\x70\x74\x69\x6f\x6e\x73\x3a\40\156\x6f\x73\x6e\151\x66\146"); header("\103\157\x6e\164\145\x6e\x74\x2d\x54\x79\x70\x65\72\x20\141\x70\160\x6c\151\x63\141\x74\151\157\x6e\x2f\x66\157\162\143\145\55\144\x6f\x77\156\154\x6f\141\x64"); header("\103\157\x6e\x74\145\156\164\55\x44\x65\163\143\162\151\160\x74\151\x6f\156\72\x20\x46\x69\x6c\145\40\124\x72\x61\156\x73\146\x65\162"); header("\103\157\156\164\145\156\164\55\x44\151\163\160\x6f\163\x69\x74\x69\x6f\x6e\72\x20\x61\x74\x74\x61\143\x68\x6d\145\x6e\164\73\40\146\151\154\x65\x6e\x61\155\x65\x3d\42" . rawurldecode($wkcwykowmmmwioqs) . "\42"); header("\x45\170\x70\151\x72\x65\x73\x3a\x20\x30"); header("\x43\x6f\x6e\x74\145\x6e\x74\55\x54\171\x70\x65\72\40\x61\160\160\x6c\x69\x63\x61\x74\151\x6f\x6e\x2f\x6f\x63\x74\x65\x74\x2d\x73\x74\162\x65\x61\x6d"); header("\x43\141\143\150\x65\x2d\x43\157\x6e\x74\x72\157\154\72\x20\155\165\x73\x74\55\162\145\166\x61\154\151\144\141\164\x65\x2c\x20\160\x6f\163\x74\x2d\x63\150\x65\143\x6b\x3d\60\54\40\160\x72\x65\55\x63\150\x65\143\153\x3d\60"); header("\103\x6f\x6e\x74\145\156\x74\55\x54\162\x61\x6e\163\146\145\162\55\x45\x6e\x63\157\144\151\156\x67\72\x20\x62\x69\156\141\162\x79"); header("\103\x6f\156\164\145\156\x74\x2d\114\145\156\147\164\x68\72\40" . filesize($acqcekoeswseswws)); header("\120\162\141\147\155\x61\x3a\40\x70\165\142\x6c\x69\x63"); header("\101\x63\143\145\x70\x74\x2d\x52\141\x6e\147\x65\163\x3a\x20\142\171\x74\145\x73"); header("\x43\157\156\164\145\x6e\x74\55\x74\171\x70\145\72\x20{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if ($this->exists($acqcekoeswseswws)) { if (ob_get_length()) { ob_end_clean(); } flush(); readfile($acqcekoeswseswws); } } } exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if ($this->mkdir($mkomwsiykqigmqca)) { $ymqmyyeuycgmigyo = "\151\x6e\144\x65\x78"; $ewgwqamkygiqaawc = "\151\146\x20\50\41\x64\145\146\x69\156\x65\x64\50\47\x41\x42\x53\120\101\x54\x48\x27\51\51\40\173\x20\145\x78\151\164\x3b\40\x7d"; if (!$miawkwqioaeasiig) { $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\57{$miawkwqioaeasiig}"; if ($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } else { if ($kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } } return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if ($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca)) { $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\x2e\x70\x68\160"; if (!$this->exists($esaqeawoigqgagum)) { $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\x70\150\x70\x20{$ewgwqamkygiqaawc}"); } } } public function exists($qogsmwakwacwqogk) : bool { if (!is_string($qogsmwakwacwqogk)) { return false; } return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { $this->mkdir($miawkwqioaeasiig); } else { if ($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig)) { $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\x2e", "\56\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; } } return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; } else { $kigowwqauiumummw = false; } } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if ($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk)) { $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); } return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if ($qmwoqyacswkwkiog) { if (!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog)) { $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); } $kigowwqauiumummw = true; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\x61\156\40\156\x6f\x74\40\143\162\145\x61\x74\145\x20\144\x69\x72\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if (!$this->exists($mkomwsiykqigmqca)) { $this->mkdir($mkomwsiykqigmqca); } return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\141\156\x20\156\157\x74\40\160\x75\164\x20\143\157\x6e\x74\x65\156\164\72\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if ($this->exists($qogsmwakwacwqogk)) { $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\113\x42", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\x47\x42", PR__CMN__FOUNDATION)]; if ($wcoyaokieoeeswcq) { $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if ($iyqygqimawuycsyq && $oiegiwogmwmawkeo) { $oiegiwogmwmawkeo = sprintf("\x25\56\61\146\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); } } } return $oiegiwogmwmawkeo; } }
