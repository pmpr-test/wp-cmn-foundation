<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716c8ab6c7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\160\162\137\x64\157\x77\x6e\154\157\x61\144"; const ccaesqeykqemuuec = "\160\x72\x5f\144\157\x77\x6e\x6c\x6f\x61\144\137\x69\x64"; const uoegqmecccweeymc = "\144\157\167\x6e\154\157\x61\144\137\x63\157\165\156\x74"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\165\x75\171\x63\161\155\x73\165\171\161\157\x6b\171\147\x6b\171"], 99)->qcsmikeggeemccuu("\164\x65\x6d\160\154\x61\x74\x65\x5f\x72\145\144\151\x72\145\x63\164", [$this, "\163\x69\x67\x69\171\x75\x6d\147\x69\161\x6f\x75\145\x6d\x79\171"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\x69\156\x69\x74", [$this, "\x73\171\161\165\151\167\167\x71\x75\163\x73\165\151\141\x6d\x75"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\165\x65\x72\171\137\166\x61\x72\x73", [$this, "\x6d\165\157\x75\155\147\x6d\x69\x75\165\157\141\x77\163\x69\167"]); $this->aqaqisyssqeomwom("\x61\x74\164\x61\143\150\x6d\145\156\x74\137\144\x6f\167\156\154\x6f\x61\x64\137\143\x6f\x75\156\164", [$this, "\x65\x6d\x6b\x61\151\x6f\x71\x6d\x69\x6b\163\147\141\x65\165\151"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\137\120\125\x54\137\x55\x50\x4c\x4f\x41\104\x5f\111\116\137\123\124\101\x54\111\103")) { $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\137\x55\x50\x4c\x4f\x41\x44\x5f\x44\x49\x52", "\165"); $wggyiigmegawawsc = ["\x75\160\154\157\x61\144\137\x70\141\x74\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\x5f\123\x54\x41\x54\111\x43\137\x50\x41\124\110"), "\x75\x70\154\157\x61\144\x5f\165\162\x6c\137\160\141\164\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\x5f\123\124\101\x54\111\103\x5f\x55\122\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if ($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu) { $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); } } } } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); } } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if ($aiooqyausygaasqm) { $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); } return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\x70\x72\x2d\144\x6f\x77\x6e\154\157\141\x64\x5c\x2f\50\133\x5e\57\x5d\53\x29\134\x2f\x3f\44", "\x69\x6e\x64\145\170\x2e\160\x68\160\77\x70\x6f\163\x74\137\164\x79\160\x65\75\x61\x74\x74\141\x63\150\x6d\145\x6e\164\46\x70\x72\x5f\x64\x6f\x77\x6e\x6c\x6f\141\x64\x3d\61\x26\160\162\x5f\144\157\x77\156\x6c\157\x61\x64\137\151\x64\x3d\x24\155\141\164\x63\150\145\x73\x5b\61\x5d", "\164\157\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if ($this->exists($acqcekoeswseswws)) { $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\164\171\x70\x65"]; nocache_headers(); header("\x52\x6f\x62\x6f\164\163\x3a\40\x6e\157\x6e\145"); header("\130\55\x43\x6f\156\x74\x65\x6e\x74\55\124\x79\160\145\55\117\x70\164\x69\x6f\156\x73\x3a\40\156\157\163\x6e\x69\146\x66"); header("\103\x6f\156\x74\145\156\164\55\124\x79\160\145\72\x20\x61\x70\x70\x6c\x69\143\x61\164\x69\157\156\x2f\x66\157\x72\x63\145\55\x64\x6f\x77\x6e\x6c\157\141\x64"); header("\x43\157\x6e\164\x65\x6e\164\x2d\x44\145\x73\143\162\x69\160\164\151\x6f\x6e\72\x20\x46\151\x6c\145\x20\124\162\x61\x6e\x73\146\x65\x72"); header("\103\157\x6e\x74\x65\x6e\x74\x2d\104\151\163\x70\x6f\163\x69\x74\151\157\x6e\72\40\141\x74\x74\141\143\x68\x6d\x65\x6e\164\x3b\40\x66\x69\154\x65\x6e\x61\155\145\75\42" . rawurldecode($wkcwykowmmmwioqs) . "\x22"); header("\x45\170\160\x69\162\145\163\72\x20\x30"); header("\103\x6f\x6e\164\x65\x6e\164\55\x54\171\160\x65\x3a\40\141\160\x70\x6c\151\143\141\164\x69\157\x6e\57\x6f\x63\164\x65\164\x2d\x73\164\162\x65\x61\x6d"); header("\103\x61\x63\x68\x65\55\x43\x6f\x6e\x74\x72\157\154\72\x20\155\x75\163\x74\55\162\145\x76\x61\x6c\151\144\141\x74\x65\x2c\x20\160\157\x73\x74\55\143\150\145\143\153\x3d\x30\x2c\x20\160\162\145\55\143\x68\x65\143\x6b\75\x30"); header("\103\157\x6e\164\x65\x6e\x74\55\x54\162\141\x6e\163\146\x65\x72\55\x45\x6e\x63\157\x64\151\156\x67\x3a\x20\x62\151\156\x61\x72\171"); header("\x43\157\156\x74\x65\x6e\164\55\x4c\x65\156\147\164\150\72\x20" . filesize($acqcekoeswseswws)); header("\x50\x72\x61\x67\155\x61\x3a\40\160\165\142\x6c\151\143"); header("\101\x63\x63\145\x70\164\x2d\122\x61\156\x67\x65\163\x3a\40\x62\171\164\145\163"); header("\x43\x6f\156\x74\x65\156\164\55\x74\171\160\145\72\x20{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if ($this->exists($acqcekoeswseswws)) { if (ob_get_length()) { ob_end_clean(); } flush(); readfile($acqcekoeswseswws); } } } exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if ($this->mkdir($mkomwsiykqigmqca)) { $ymqmyyeuycgmigyo = "\x69\156\144\145\x78"; $ewgwqamkygiqaawc = "\151\x66\x20\50\x21\x64\x65\146\151\x6e\x65\x64\50\x27\101\x42\123\120\101\124\110\x27\51\51\x20\173\40\x65\170\151\164\x3b\x20\175"; if (!$miawkwqioaeasiig) { $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\57{$miawkwqioaeasiig}"; if ($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } else { if ($kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } } return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if ($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca)) { $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\56\160\150\160"; if (!$this->exists($esaqeawoigqgagum)) { $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\77\160\150\160\40{$ewgwqamkygiqaawc}"); } } } public function exists($qogsmwakwacwqogk) : bool { if (!is_string($qogsmwakwacwqogk)) { return false; } return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { $this->mkdir($miawkwqioaeasiig); } else { if ($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig)) { $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\56", "\56\x2e"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; } } return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; } else { $kigowwqauiumummw = false; } } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if ($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk)) { $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); } return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if ($qmwoqyacswkwkiog) { if (!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog)) { $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); } $kigowwqauiumummw = true; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\141\156\x20\x6e\x6f\x74\x20\143\x72\145\x61\164\145\40\x64\x69\x72\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if (!$this->exists($mkomwsiykqigmqca)) { $this->mkdir($mkomwsiykqigmqca); } return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\x61\x6e\x20\x6e\x6f\164\x20\160\x75\164\40\143\x6f\x6e\164\x65\x6e\164\72\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if ($this->exists($qogsmwakwacwqogk)) { $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\102", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\107\x42", PR__CMN__FOUNDATION)]; if ($wcoyaokieoeeswcq) { $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if ($iyqygqimawuycsyq && $oiegiwogmwmawkeo) { $oiegiwogmwmawkeo = sprintf("\x25\56\61\146\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); } } } return $oiegiwogmwmawkeo; } }
