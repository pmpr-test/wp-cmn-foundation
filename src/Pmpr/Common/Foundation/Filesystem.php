<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671248edea456             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\x70\162\x5f\144\157\167\x6e\x6c\157\141\144"; const ccaesqeykqemuuec = "\x70\162\x5f\x64\x6f\167\x6e\154\157\x61\144\137\x69\144"; const uoegqmecccweeymc = "\144\157\167\x6e\x6c\157\x61\x64\x5f\x63\157\165\156\x74"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x75\165\171\x63\161\155\163\165\171\161\x6f\153\171\147\153\171"], 99)->qcsmikeggeemccuu("\x74\145\155\x70\154\141\x74\x65\x5f\162\145\144\151\162\145\x63\164", [$this, "\x73\151\147\x69\x79\165\x6d\x67\151\161\x6f\165\x65\x6d\171\171"])->qcsmikeggeemccuu("\x61\x64\155\151\156\x5f\151\156\x69\x74", [$this, "\163\171\161\165\x69\x77\167\161\165\x73\163\165\151\141\x6d\x75"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\x65\x72\x79\x5f\x76\x61\x72\x73", [$this, "\x6d\x75\x6f\165\x6d\147\x6d\x69\165\x75\x6f\x61\x77\163\151\167"]); $this->aqaqisyssqeomwom("\141\x74\x74\141\x63\x68\155\x65\x6e\164\137\x64\x6f\x77\x6e\x6c\x6f\x61\x64\137\143\157\165\x6e\164", [$this, "\145\155\x6b\x61\x69\157\x71\x6d\x69\x6b\x73\x67\141\145\165\151"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\137\120\x55\124\x5f\125\x50\x4c\117\x41\x44\137\x49\116\137\123\x54\101\x54\x49\103")) { $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\137\125\120\x4c\117\x41\104\x5f\x44\x49\x52", "\165"); $wggyiigmegawawsc = ["\165\160\154\x6f\141\x64\137\160\x61\164\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\x5f\123\x54\101\x54\x49\x43\x5f\120\x41\124\x48"), "\165\160\154\157\x61\144\137\165\x72\154\x5f\x70\x61\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\137\x53\x54\101\x54\111\103\x5f\x55\122\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if ($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu) { $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); } } } } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); } } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if ($aiooqyausygaasqm) { $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); } return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\160\x72\x2d\144\x6f\167\156\154\157\141\144\x5c\57\50\133\136\x2f\x5d\x2b\51\x5c\57\77\44", "\151\156\x64\145\170\x2e\x70\150\x70\x3f\x70\x6f\x73\164\x5f\x74\x79\160\x65\x3d\x61\x74\164\x61\143\150\x6d\145\x6e\x74\46\x70\x72\x5f\144\x6f\167\x6e\154\157\x61\x64\75\x31\46\x70\x72\137\x64\x6f\167\x6e\154\157\x61\144\137\151\x64\75\44\155\141\x74\x63\x68\145\x73\x5b\x31\x5d", "\x74\x6f\160"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if ($this->exists($acqcekoeswseswws)) { $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\164\x79\x70\x65"]; nocache_headers(); header("\122\x6f\x62\157\x74\163\72\40\156\157\156\145"); header("\130\x2d\103\157\x6e\x74\x65\156\164\x2d\124\x79\160\x65\55\117\160\x74\x69\x6f\x6e\x73\x3a\x20\x6e\157\x73\156\x69\146\x66"); header("\103\157\156\x74\x65\x6e\164\55\x54\x79\x70\x65\72\x20\x61\160\x70\x6c\x69\143\x61\164\151\x6f\156\57\x66\x6f\x72\x63\145\x2d\x64\157\167\156\154\x6f\x61\144"); header("\x43\157\x6e\x74\145\x6e\x74\55\x44\145\x73\143\x72\x69\160\x74\151\x6f\156\x3a\40\106\x69\x6c\145\x20\124\162\x61\x6e\163\x66\145\162"); header("\103\157\156\x74\x65\156\164\55\104\151\x73\x70\157\163\x69\164\151\157\156\72\40\x61\x74\164\x61\x63\x68\x6d\x65\156\164\73\x20\x66\x69\154\x65\156\141\155\x65\75\x22" . rawurldecode($wkcwykowmmmwioqs) . "\x22"); header("\105\x78\160\x69\162\x65\x73\72\x20\60"); header("\x43\x6f\156\x74\x65\156\164\x2d\124\x79\160\x65\72\40\141\160\160\x6c\x69\143\141\x74\151\x6f\156\x2f\157\x63\164\145\x74\x2d\163\164\162\145\141\x6d"); header("\103\x61\x63\150\145\55\103\x6f\x6e\x74\x72\157\154\72\x20\x6d\x75\163\164\55\162\145\166\141\154\x69\144\141\x74\x65\54\x20\x70\157\x73\164\55\x63\x68\x65\143\x6b\x3d\x30\54\40\x70\162\145\55\143\150\145\x63\153\75\x30"); header("\x43\x6f\156\164\x65\156\164\x2d\124\x72\141\156\163\x66\145\x72\55\x45\x6e\x63\157\x64\151\x6e\147\x3a\40\x62\x69\156\141\162\x79"); header("\103\157\x6e\164\x65\156\164\x2d\x4c\x65\x6e\x67\164\x68\72\x20" . filesize($acqcekoeswseswws)); header("\120\162\141\147\155\141\72\x20\160\165\142\x6c\151\143"); header("\x41\143\143\145\x70\164\55\122\x61\156\147\x65\163\72\x20\x62\x79\x74\x65\x73"); header("\x43\157\x6e\164\x65\156\164\x2d\164\x79\x70\145\72\40{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if ($this->exists($acqcekoeswseswws)) { if (ob_get_length()) { ob_end_clean(); } flush(); readfile($acqcekoeswseswws); } } } exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if ($this->mkdir($mkomwsiykqigmqca)) { $ymqmyyeuycgmigyo = "\x69\x6e\144\x65\170"; $ewgwqamkygiqaawc = "\x69\x66\40\x28\x21\144\x65\x66\151\156\x65\144\x28\47\101\x42\123\x50\x41\x54\x48\x27\51\51\x20\x7b\x20\145\x78\151\164\x3b\40\175"; if (!$miawkwqioaeasiig) { $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\57{$miawkwqioaeasiig}"; if ($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } else { if ($kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } } return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if ($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca)) { $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\x2e\160\x68\x70"; if (!$this->exists($esaqeawoigqgagum)) { $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\x3f\160\150\x70\40{$ewgwqamkygiqaawc}"); } } } public function exists($qogsmwakwacwqogk) : bool { if (!is_string($qogsmwakwacwqogk)) { return false; } return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { $this->mkdir($miawkwqioaeasiig); } else { if ($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig)) { $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\56", "\56\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; } } return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; } else { $kigowwqauiumummw = false; } } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if ($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk)) { $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); } return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if ($qmwoqyacswkwkiog) { if (!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog)) { $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); } $kigowwqauiumummw = true; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\x61\156\x20\x6e\157\x74\40\x63\x72\145\141\x74\145\40\144\151\162\72\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if (!$this->exists($mkomwsiykqigmqca)) { $this->mkdir($mkomwsiykqigmqca); } return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\141\x6e\x20\156\157\x74\x20\160\x75\164\x20\x63\x6f\156\164\145\x6e\164\72\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if ($this->exists($qogsmwakwacwqogk)) { $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\142", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\x47\102", PR__CMN__FOUNDATION)]; if ($wcoyaokieoeeswcq) { $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if ($iyqygqimawuycsyq && $oiegiwogmwmawkeo) { $oiegiwogmwmawkeo = sprintf("\45\56\x31\x66\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); } } } return $oiegiwogmwmawkeo; } }
