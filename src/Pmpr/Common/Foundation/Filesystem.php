<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3806785e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\160\162\137\x64\157\x77\156\x6c\x6f\141\x64"; const ccaesqeykqemuuec = "\x70\162\x5f\x64\157\167\156\x6c\x6f\x61\144\137\x69\x64"; const uoegqmecccweeymc = "\x64\157\x77\156\154\x6f\x61\144\137\143\x6f\165\x6e\164"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x75\165\x79\143\x71\x6d\163\165\x79\x71\157\x6b\171\147\x6b\171"], 99)->qcsmikeggeemccuu("\x74\x65\155\x70\154\141\x74\145\137\162\x65\x64\151\x72\x65\x63\x74", [$this, "\x73\x69\147\151\171\x75\x6d\x67\x69\x71\x6f\165\145\155\x79\171"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\151\x6e\x69\164", [$this, "\x73\x79\161\x75\x69\x77\x77\161\x75\x73\163\165\x69\x61\x6d\x75"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\x65\x72\171\137\x76\141\x72\163", [$this, "\x6d\x75\157\x75\155\147\155\x69\165\165\x6f\x61\x77\163\151\167"]); $this->aqaqisyssqeomwom("\x61\x74\164\141\x63\x68\155\145\156\x74\x5f\144\157\167\x6e\154\157\x61\144\x5f\143\157\165\x6e\x74", [$this, "\x65\155\x6b\x61\x69\x6f\x71\155\151\x6b\x73\147\x61\145\x75\151"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\x5f\x50\x55\124\137\x55\x50\x4c\x4f\101\104\x5f\x49\116\x5f\x53\124\101\124\111\103")) { $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\x5f\x55\120\114\117\101\x44\137\104\111\x52", "\x75"); $wggyiigmegawawsc = ["\165\x70\x6c\x6f\141\144\137\x70\x61\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\137\123\x54\101\124\x49\103\137\x50\x41\x54\x48"), "\x75\x70\x6c\x6f\x61\x64\x5f\x75\162\154\137\x70\x61\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\x5f\123\x54\101\124\111\103\137\x55\x52\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if ($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu) { $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); } } } } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); } } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if ($aiooqyausygaasqm) { $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); } return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\160\162\x2d\144\x6f\x77\x6e\x6c\x6f\x61\x64\x5c\x2f\x28\x5b\x5e\57\135\x2b\51\x5c\57\x3f\x24", "\x69\x6e\144\145\170\x2e\x70\x68\x70\77\160\x6f\x73\164\137\164\171\x70\x65\x3d\141\164\164\141\x63\x68\x6d\x65\156\164\46\x70\x72\137\x64\157\x77\156\154\x6f\141\144\75\x31\46\160\x72\x5f\x64\157\167\x6e\x6c\x6f\141\x64\137\151\144\x3d\x24\x6d\141\x74\143\x68\x65\x73\133\x31\x5d", "\x74\x6f\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if ($this->exists($acqcekoeswseswws)) { $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\164\x79\x70\x65"]; nocache_headers(); header("\122\157\x62\x6f\164\163\72\40\x6e\157\156\145"); header("\x58\55\103\157\x6e\x74\145\x6e\164\x2d\x54\171\x70\x65\55\117\x70\x74\151\157\156\163\72\40\x6e\x6f\x73\x6e\x69\x66\146"); header("\103\157\x6e\164\145\156\x74\x2d\x54\x79\160\145\72\40\141\160\160\154\x69\143\141\x74\151\157\156\57\x66\157\162\x63\x65\x2d\x64\x6f\x77\156\x6c\x6f\x61\144"); header("\103\x6f\156\x74\145\x6e\x74\x2d\104\x65\x73\143\x72\151\x70\164\151\157\156\x3a\x20\106\151\154\145\x20\124\x72\141\156\163\x66\x65\x72"); header("\103\x6f\156\x74\x65\156\164\x2d\104\151\163\160\157\163\x69\x74\151\x6f\x6e\x3a\40\141\164\164\141\x63\150\155\x65\156\164\x3b\x20\x66\x69\x6c\x65\156\x61\155\145\75\42" . rawurldecode($wkcwykowmmmwioqs) . "\42"); header("\x45\170\160\151\x72\x65\163\72\x20\x30"); header("\103\x6f\x6e\164\145\x6e\164\x2d\124\x79\x70\x65\x3a\40\141\160\160\x6c\151\x63\x61\x74\x69\157\156\x2f\x6f\143\x74\x65\x74\55\x73\x74\162\145\141\155"); header("\103\141\143\150\145\55\103\x6f\156\x74\x72\157\x6c\72\40\155\x75\x73\164\55\x72\x65\x76\x61\154\151\144\x61\164\x65\54\x20\x70\157\163\164\55\143\150\145\143\153\75\60\x2c\40\160\162\145\55\x63\150\145\143\153\75\x30"); header("\x43\157\156\164\145\x6e\x74\55\124\162\x61\x6e\x73\146\x65\x72\55\105\x6e\x63\x6f\x64\x69\x6e\147\x3a\40\x62\151\156\141\x72\x79"); header("\x43\x6f\156\164\145\x6e\x74\x2d\x4c\x65\156\x67\164\x68\x3a\40" . filesize($acqcekoeswseswws)); header("\x50\x72\x61\x67\155\x61\72\x20\160\165\142\154\151\x63"); header("\101\143\x63\145\160\164\x2d\x52\x61\156\147\x65\163\x3a\x20\x62\171\x74\145\163"); header("\x43\x6f\156\x74\x65\156\x74\x2d\164\171\160\145\72\x20{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if ($this->exists($acqcekoeswseswws)) { if (ob_get_length()) { ob_end_clean(); } flush(); readfile($acqcekoeswseswws); } } } exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if ($this->mkdir($mkomwsiykqigmqca)) { $ymqmyyeuycgmigyo = "\151\x6e\x64\145\x78"; $ewgwqamkygiqaawc = "\151\x66\40\50\x21\x64\145\146\151\x6e\145\x64\50\47\101\x42\123\120\x41\124\110\47\51\51\40\x7b\x20\x65\170\x69\164\73\x20\175"; if (!$miawkwqioaeasiig) { $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}"; if ($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } else { if ($kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } } return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if ($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca)) { $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\56\x70\x68\x70"; if (!$this->exists($esaqeawoigqgagum)) { $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\77\x70\150\x70\40{$ewgwqamkygiqaawc}"); } } } public function exists($qogsmwakwacwqogk) : bool { if (!is_string($qogsmwakwacwqogk)) { return false; } return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { $this->mkdir($miawkwqioaeasiig); } else { if ($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig)) { $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\x2e", "\x2e\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; } } return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; } else { $kigowwqauiumummw = false; } } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if ($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk)) { $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); } return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if ($qmwoqyacswkwkiog) { if (!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog)) { $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); } $kigowwqauiumummw = true; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\141\x6e\40\156\x6f\x74\x20\x63\x72\145\x61\164\145\x20\x64\x69\162\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if (!$this->exists($mkomwsiykqigmqca)) { $this->mkdir($mkomwsiykqigmqca); } return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\141\156\40\x6e\157\x74\x20\x70\165\164\x20\143\x6f\x6e\164\145\x6e\x74\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if ($this->exists($qogsmwakwacwqogk)) { $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\142", PR__CMN__FOUNDATION), __("\113\x42", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION)]; if ($wcoyaokieoeeswcq) { $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if ($iyqygqimawuycsyq && $oiegiwogmwmawkeo) { $oiegiwogmwmawkeo = sprintf("\x25\x2e\61\146\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); } } } return $oiegiwogmwmawkeo; } }
