<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052a91f300e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\160\162\x5f\x64\157\x77\156\x6c\157\141\x64"; const ccaesqeykqemuuec = "\x70\162\x5f\x64\x6f\x77\x6e\154\x6f\x61\144\x5f\151\x64"; const uoegqmecccweeymc = "\144\157\x77\156\x6c\157\141\144\x5f\x63\x6f\x75\x6e\164"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x75\165\x79\x63\x71\x6d\x73\x75\171\x71\157\x6b\171\x67\153\171"], 99)->qcsmikeggeemccuu("\164\x65\155\x70\x6c\x61\164\145\137\x72\x65\144\151\162\145\x63\x74", [$this, "\x73\151\x67\x69\171\x75\x6d\147\x69\x71\157\165\x65\x6d\171\171"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\x6e\151\164", [$this, "\163\x79\x71\165\x69\167\x77\x71\x75\163\163\165\151\x61\155\165"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\165\x65\x72\171\137\x76\x61\x72\163", [$this, "\155\165\157\165\155\x67\x6d\x69\165\x75\157\x61\167\x73\x69\x77"]); $this->aqaqisyssqeomwom("\x61\164\164\x61\143\150\155\x65\x6e\164\137\x64\x6f\x77\156\154\157\x61\144\x5f\143\157\x75\156\164", [$this, "\145\155\x6b\x61\x69\x6f\x71\155\151\x6b\x73\x67\x61\x65\x75\x69"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\122\137\x50\x55\x54\x5f\x55\120\x4c\117\x41\x44\137\111\116\x5f\123\124\x41\x54\111\103")) { $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\137\x55\x50\x4c\x4f\101\x44\137\x44\111\122", "\165"); $wggyiigmegawawsc = ["\165\x70\154\x6f\141\144\137\160\x61\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\137\x53\x54\101\124\111\103\137\120\101\x54\x48"), "\165\160\154\x6f\x61\144\137\x75\x72\x6c\137\160\x61\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\x5f\123\124\x41\124\x49\103\x5f\125\122\114")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if ($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu) { $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); } } } } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); } } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if ($aiooqyausygaasqm) { $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); } return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\x70\162\x2d\144\157\167\156\154\157\141\144\134\57\50\133\136\x2f\135\x2b\x29\x5c\x2f\x3f\x24", "\151\156\x64\x65\170\56\x70\150\x70\x3f\x70\157\163\164\x5f\x74\x79\160\145\75\x61\164\x74\x61\143\x68\155\145\156\x74\46\x70\162\x5f\x64\157\167\156\x6c\x6f\x61\144\x3d\x31\x26\x70\162\x5f\x64\x6f\167\x6e\x6c\x6f\x61\144\137\151\x64\75\44\x6d\141\x74\x63\x68\x65\x73\x5b\x31\x5d", "\x74\x6f\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if ($this->exists($acqcekoeswseswws)) { $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\x74\x79\x70\145"]; nocache_headers(); header("\122\x6f\x62\157\x74\x73\x3a\40\x6e\x6f\x6e\x65"); header("\130\55\103\x6f\x6e\164\145\x6e\x74\55\x54\171\160\x65\55\x4f\x70\164\151\157\x6e\x73\x3a\x20\156\x6f\x73\156\x69\146\146"); header("\x43\157\x6e\x74\145\156\164\55\x54\171\160\x65\x3a\x20\x61\160\x70\x6c\151\x63\x61\164\x69\157\x6e\57\x66\x6f\x72\143\145\x2d\x64\x6f\x77\x6e\154\x6f\141\x64"); header("\103\157\x6e\164\x65\156\x74\x2d\104\x65\x73\x63\162\151\x70\x74\151\x6f\156\x3a\x20\106\x69\154\145\40\x54\162\x61\156\163\x66\x65\162"); header("\x43\157\x6e\x74\145\x6e\164\55\x44\151\x73\x70\x6f\163\151\164\x69\x6f\156\72\40\x61\x74\164\141\x63\x68\x6d\x65\x6e\164\73\40\x66\151\154\145\x6e\x61\x6d\145\x3d\x22" . rawurldecode($wkcwykowmmmwioqs) . "\x22"); header("\105\x78\x70\x69\x72\145\163\72\x20\60"); header("\x43\x6f\x6e\164\145\x6e\164\55\x54\171\160\145\x3a\x20\x61\160\160\x6c\151\143\141\164\151\x6f\156\57\157\143\x74\145\x74\55\163\x74\162\145\141\155"); header("\x43\141\x63\150\145\55\103\x6f\x6e\164\x72\157\154\72\x20\155\x75\x73\164\55\x72\x65\x76\x61\154\151\144\x61\x74\145\54\40\160\x6f\163\x74\55\143\150\x65\143\x6b\x3d\x30\x2c\x20\160\x72\x65\55\143\150\145\x63\x6b\x3d\x30"); header("\x43\x6f\x6e\164\x65\156\164\55\x54\162\x61\156\x73\x66\x65\x72\x2d\105\156\x63\157\x64\151\x6e\147\x3a\x20\x62\151\x6e\141\x72\x79"); header("\x43\157\x6e\x74\x65\156\x74\x2d\x4c\x65\156\x67\x74\x68\x3a\40" . filesize($acqcekoeswseswws)); header("\120\x72\x61\147\x6d\141\72\x20\160\165\x62\154\151\x63"); header("\101\x63\143\145\160\164\x2d\x52\141\156\147\145\x73\72\x20\142\171\x74\x65\x73"); header("\x43\x6f\x6e\x74\145\x6e\x74\x2d\x74\171\160\145\x3a\x20{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if ($this->exists($acqcekoeswseswws)) { if (ob_get_length()) { ob_end_clean(); } flush(); readfile($acqcekoeswseswws); } } } exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if ($this->mkdir($mkomwsiykqigmqca)) { $ymqmyyeuycgmigyo = "\151\156\144\x65\170"; $ewgwqamkygiqaawc = "\x69\x66\x20\50\41\x64\145\x66\151\156\145\x64\x28\x27\x41\x42\x53\120\101\x54\110\x27\51\51\x20\173\x20\x65\x78\151\x74\73\40\175"; if (!$miawkwqioaeasiig) { $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}"; if ($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } else { if ($kywouseeaeysccgq) { $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); } } } return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if ($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca)) { $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57{$ymqmyyeuycgmigyo}\x2e\x70\150\160"; if (!$this->exists($esaqeawoigqgagum)) { $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\x3f\160\150\160\x20{$ewgwqamkygiqaawc}"); } } } public function exists($qogsmwakwacwqogk) : bool { if (!is_string($qogsmwakwacwqogk)) { return false; } return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { $this->mkdir($miawkwqioaeasiig); } else { if ($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig)) { $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\56", "\56\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; } } return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; } else { $kigowwqauiumummw = false; } } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if ($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk)) { $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); } return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\x77"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if ($qmwoqyacswkwkiog) { if (!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog)) { $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); } $kigowwqauiumummw = true; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\x61\x6e\x20\156\157\x74\x20\x63\162\145\141\164\145\40\144\x69\x72\72\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if (!$this->exists($mkomwsiykqigmqca)) { $this->mkdir($mkomwsiykqigmqca); } return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\143\x61\156\40\156\157\164\x20\x70\165\x74\40\x63\157\x6e\x74\145\156\x74\72\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if ($this->exists($qogsmwakwacwqogk)) { $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\x42", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION)]; if ($wcoyaokieoeeswcq) { $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if ($iyqygqimawuycsyq && $oiegiwogmwmawkeo) { $oiegiwogmwmawkeo = sprintf("\45\x2e\x31\146\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); } } } return $oiegiwogmwmawkeo; } }
