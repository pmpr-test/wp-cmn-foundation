<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Exception; use Pmpr\Common\Foundation\Container\Container; use Symfony\Component\Filesystem\Filesystem as Factory; class Filesystem extends Container { const eaumoeaimugiqauu = "\x70\162\137\x64\157\x77\x6e\x6c\x6f\x61\x64"; const ccaesqeykqemuuec = "\x70\162\x5f\144\157\x77\156\154\157\141\x64\x5f\x69\144"; const uoegqmecccweeymc = "\144\x6f\x77\156\x6c\x6f\x61\x64\137\x63\157\x75\156\164"; public ?Factory $factory = null; public function __construct() { $this->factory = new Factory(); parent::__construct(); } public function yywyeskyawwcugcq() : ?Factory { return $this->factory; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\165\165\x79\143\161\x6d\x73\165\171\x71\x6f\153\x79\147\x6b\171"], 99)->qcsmikeggeemccuu("\x74\145\155\x70\x6c\x61\164\x65\x5f\x72\x65\x64\151\x72\145\x63\164", [$this, "\163\151\147\x69\171\x75\x6d\x67\151\161\157\x75\145\x6d\171\x79"])->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\151\x6e\151\x74", [$this, "\x73\x79\x71\x75\151\167\x77\x71\x75\163\163\165\x69\x61\x6d\165"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\165\x65\x72\171\137\x76\x61\x72\x73", [$this, "\x6d\x75\x6f\x75\155\x67\155\151\165\165\157\141\x77\163\x69\167"]); $this->aqaqisyssqeomwom("\141\x74\x74\141\143\x68\x6d\145\156\x74\137\x64\x6f\167\x6e\154\x6f\x61\x64\137\143\157\x75\156\x74", [$this, "\145\155\x6b\141\x69\x6f\x71\x6d\x69\x6b\x73\147\x61\x65\x75\x69"], 10, 2); } public function syquiwwqussuiamu() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo() && $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\137\x50\x55\124\x5f\x55\120\x4c\x4f\101\104\137\x49\x4e\x5f\123\x54\x41\124\111\103"))) { goto omoayecymwmcysyw; } $smaiamkswqkisawm = $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\x52\137\125\120\x4c\x4f\x41\104\137\x44\x49\122", "\165"); $wggyiigmegawawsc = ["\x75\x70\x6c\157\141\144\137\160\x61\164\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x50\x52\137\123\124\x41\124\x49\103\x5f\x50\101\124\110"), "\165\160\154\x6f\141\144\x5f\165\x72\154\137\x70\141\x74\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\120\122\137\x53\124\x41\124\111\103\137\x55\x52\x4c")]; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $moyaaaascoeowegu) { $moyaaaascoeowegu = $this->ocksiywmkyaqseou($uusmaiomayssaecw, trailingslashit($moyaaaascoeowegu) . $smaiamkswqkisawm); if (!($moyaaaascoeowegu && $qkqgcaykemoiecma->get($uusmaiomayssaecw) !== $moyaaaascoeowegu)) { goto usgcuuuscucqesug; } $qkqgcaykemoiecma->update($uusmaiomayssaecw, $moyaaaascoeowegu); usgcuuuscucqesug: qmiugaqisqiwooio: } ugguwkkgqoyseuma: omoayecymwmcysyw: } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::eaumoeaimugiqauu; $kkeqqkkkqwkocsyu[] = self::ccaesqeykqemuuec; return $kkeqqkkkqwkocsyu; } public function sigiyumgiqouemyy() { global $wp; if (!isset($wp->query_vars[self::eaumoeaimugiqauu], $wp->query_vars[self::ccaesqeykqemuuec])) { goto weyegmawkwggekgi; } $this->acsweksygkmmgggk($wp->query_vars[self::ccaesqeykqemuuec]); weyegmawkwggekgi: } public function emkaioqmiksgaeui($gaeqamemwmwsyukm, $aiooqyausygaasqm = null) : int { if (!$aiooqyausygaasqm) { goto eeusamaykaysmgoq; } $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::uoegqmecccweeymc, $aiooqyausygaasqm); eeusamaykaysmgoq: return $gaeqamemwmwsyukm; } public function uuycqmsuyqokygky() { $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["\160\x72\55\144\x6f\167\156\x6c\157\141\144\134\x2f\50\133\x5e\x2f\x5d\x2b\51\x5c\x2f\77\44", "\x69\x6e\144\x65\x78\x2e\160\x68\x70\x3f\160\157\163\x74\137\x74\171\160\145\x3d\141\x74\164\x61\143\x68\x6d\x65\156\164\x26\160\x72\x5f\144\157\167\x6e\154\157\x61\144\x3d\61\46\x70\162\137\144\157\x77\156\154\157\x61\144\x5f\151\144\75\44\x6d\141\x74\x63\150\145\163\133\x31\x5d", "\x74\157\x70"]]); } public function acsweksygkmmgggk($aokagokqyuysuksm) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->owgcciayoweymuws()->decrypt($aokagokqyuysuksm); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if (!$eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { goto ecikykuqgeaqamwk; } $acqcekoeswseswws = $eaeiswmwiqewicoc->ckoygqywcuqasqea($aiooqyausygaasqm); if (!$this->exists($acqcekoeswseswws)) { goto coegigeuyugiwuou; } $soykeeumeuwqkaym = $this->emkaioqmiksgaeui(0, $aiooqyausygaasqm); $okcwyqcycoicewqy = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($acqcekoeswseswws); $wkcwykowmmmwioqs = basename($acqcekoeswseswws); $sqeykgyoooqysmca = $okcwyqcycoicewqy["\164\x79\x70\x65"]; nocache_headers(); header("\x52\157\142\x6f\x74\163\x3a\40\156\157\156\145"); header("\130\55\x43\157\156\164\145\x6e\x74\55\124\x79\160\x65\55\x4f\x70\164\x69\x6f\x6e\163\x3a\x20\156\157\x73\x6e\x69\x66\x66"); header("\103\157\156\x74\145\156\164\x2d\x54\171\x70\x65\72\40\x61\160\x70\x6c\x69\143\141\164\x69\x6f\x6e\x2f\x66\x6f\162\143\x65\x2d\x64\x6f\167\x6e\x6c\157\141\x64"); header("\103\x6f\156\164\x65\x6e\164\x2d\104\x65\163\x63\162\x69\x70\x74\151\157\x6e\72\40\106\151\x6c\145\40\124\x72\141\x6e\163\x66\x65\162"); header("\103\157\x6e\x74\x65\156\164\x2d\x44\151\163\x70\157\x73\x69\x74\x69\x6f\156\72\x20\141\x74\164\x61\143\150\x6d\145\156\x74\73\40\x66\x69\x6c\x65\x6e\x61\155\x65\x3d\x22" . rawurldecode($wkcwykowmmmwioqs) . "\42"); header("\105\170\x70\151\162\145\163\72\40\x30"); header("\103\157\156\164\145\x6e\164\x2d\124\171\160\x65\x3a\40\141\x70\x70\x6c\151\143\141\x74\x69\x6f\156\57\157\x63\x74\x65\x74\x2d\x73\164\x72\145\x61\155"); header("\103\141\143\150\145\55\x43\x6f\x6e\164\x72\157\154\72\x20\x6d\x75\163\164\55\x72\145\x76\x61\154\x69\144\x61\164\x65\54\x20\x70\x6f\163\x74\55\143\x68\145\x63\153\x3d\60\x2c\40\x70\162\145\55\143\x68\x65\x63\153\75\60"); header("\103\x6f\156\164\145\156\164\x2d\x54\x72\x61\x6e\x73\146\x65\162\x2d\x45\x6e\x63\x6f\x64\151\156\x67\72\x20\x62\151\156\x61\x72\171"); header("\x43\x6f\x6e\x74\145\x6e\x74\x2d\114\x65\x6e\147\x74\x68\x3a\40" . filesize($acqcekoeswseswws)); header("\120\162\x61\x67\155\141\72\x20\160\x75\142\154\x69\143"); header("\x41\143\x63\145\x70\x74\x2d\x52\141\156\147\x65\x73\72\40\142\x79\x74\145\x73"); header("\103\x6f\x6e\x74\x65\x6e\x74\55\x74\x79\x70\x65\x3a\40{$sqeykgyoooqysmca}"); $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw($aiooqyausygaasqm, self::uoegqmecccweeymc, $soykeeumeuwqkaym + 1, $soykeeumeuwqkaym); if (!$this->exists($acqcekoeswseswws)) { goto mgykqueoqmyucwky; } if (!ob_get_length()) { goto wqgmqkugcksgscke; } ob_end_clean(); wqgmqkugcksgscke: flush(); readfile($acqcekoeswseswws); mgykqueoqmyucwky: coegigeuyugiwuou: ecikykuqgeaqamwk: exit; } public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, bool $kywouseeaeysccgq = true) : string { $smaiamkswqkisawm = false; if (!$this->mkdir($mkomwsiykqigmqca)) { goto weecgesamaiayuqo; } $ymqmyyeuycgmigyo = "\151\156\x64\x65\170"; $ewgwqamkygiqaawc = "\x69\146\40\50\x21\144\145\x66\x69\156\x65\x64\x28\x27\101\102\123\x50\x41\x54\x48\x27\51\51\x20\173\x20\x65\170\151\164\x3b\x20\175"; if (!$miawkwqioaeasiig) { goto gsyagiygoyamakyu; } if (!$kywouseeaeysccgq) { goto caicmucqkokaecsg; } $this->iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); caicmucqkokaecsg: goto ucgagqogckeuiewi; gsyagiygoyamakyu: $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}"; if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) { goto gekkisqyegwkwcmg; } $this->iwmggquwuwgeeqmy($smaiamkswqkisawm, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc); gekkisqyegwkwcmg: ucgagqogckeuiewi: weecgesamaiayuqo: return untrailingslashit($smaiamkswqkisawm); } public function iwmggquwuwgeeqmy($mkomwsiykqigmqca, $ymqmyyeuycgmigyo, $ewgwqamkygiqaawc) { if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) { goto skqiqqeyqokasmeg; } $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f{$ymqmyyeuycgmigyo}\56\x70\150\x70"; if ($this->exists($esaqeawoigqgagum)) { goto eusygaeoggqeuuki; } $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\77\x70\x68\160\x20{$ewgwqamkygiqaawc}"); eusygaeoggqeuuki: skqiqqeyqokasmeg: } public function exists($qogsmwakwacwqogk) : bool { if (is_string($qogsmwakwacwqogk)) { goto cgckkkoaumakemuc; } return false; cgckkkoaumakemuc: return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk); } public function uuegkqwagymmusiy($miawkwqioaeasiig, int $aoqagsqecokqqwqg = 0) : bool { $qgokqwkgckkyagiq = true; if (!$this->exists($miawkwqioaeasiig)) { goto gyuiwqyyauwqokmc; } if (!($this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig))) { goto qiuouckkycciwuyo; } $scmkawqewakwsacs = array_diff(scandir($miawkwqioaeasiig), ["\x2e", "\x2e\56"]); $qgokqwkgckkyagiq = count($scmkawqewakwsacs) < $aoqagsqecokqqwqg; qiuouckkycciwuyo: goto oeqaiwecuckgoyky; gyuiwqyyauwqokmc: $this->mkdir($miawkwqioaeasiig); oeqaiwecuckgoyky: return $qgokqwkgckkyagiq; } public function remove($ucasskoyoewwmmii) : bool { try { if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) { goto ywiwqkssuiiukwuk; } $kigowwqauiumummw = false; goto imucwaggwqomwwki; ywiwqkssuiiukwuk: $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii); $kigowwqauiumummw = true; imucwaggwqomwwki: } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function ukagseqcawyaeoio($iwywmkygwewiamwm) { try { $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function souwykwwmyygqyqi($qogsmwakwacwqogk) { $ewgwqamkygiqaawc = ''; if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) { goto yiuwiekcyyquyuak; } $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk); yiuwiekcyyquyuak: return $ewgwqamkygiqaawc; } public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '') { $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\x77"); return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek); } public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool { return @is_file($qogsmwakwacwqogk); } public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool { return true; } public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool { $kigowwqauiumummw = false; try { if (!$qmwoqyacswkwkiog) { goto wawmuaweemsioqms; } if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) { goto sgmqeqeuscaaegqk; } $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk); sgmqeqeuscaaegqk: $kigowwqauiumummw = true; wawmuaweemsioqms: } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\x61\156\x20\156\x6f\x74\x20\x63\x72\145\141\x74\x65\40\x64\x69\x72\x3a\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool { return @is_readable($qogsmwakwacwqogk); } public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool { return @is_writable($qogsmwakwacwqogk); } public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool { return @is_dir($mkomwsiykqigmqca); } public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '') { $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs; if ($this->exists($mkomwsiykqigmqca)) { goto wuaokqmoyoikkkyu; } $this->mkdir($mkomwsiykqigmqca); wuaokqmoyoikkkyu: return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false; } public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq) : string { return $this->yywyeskyawwcugcq()->makePathRelative($iugswueasgysomii, $wuuguueokgwuowcq); } public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool { try { $this->yywyeskyawwcugcq()->appendToFile($wkcwykowmmmwioqs, $ewgwqamkygiqaawc); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null) { $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww); } public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, ?string $ewgwqamkygiqaawc = '', int $cowcciqkqkmuagae = 0) : bool { try { $this->mkdir(dirname($wkcwykowmmmwioqs)); $this->touch($wkcwykowmmmwioqs); $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $cowcciqkqkmuagae); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x63\141\x6e\x20\156\157\164\x20\160\165\164\40\x63\157\156\x74\145\x6e\164\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } return $kigowwqauiumummw; } public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false) : bool { try { $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false) { $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo); } public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false) { $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum); } public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false) : bool { try { $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy); $kigowwqauiumummw = true; } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; } return $kigowwqauiumummw; } public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = []) { $this->yywyeskyawwcugcq()->mirror($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue); } public function mikiwoyomouecayw(string $mkomwsiykqigmqca, string $wkcwykowmmmwioqs, array $icwicymcioeyeyek = []) { return $this->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, json_encode($icwicymcioeyeyek, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); } public function egiiqeqcckaaicoa($qogsmwakwacwqogk) { $oiegiwogmwmawkeo = ''; if (!$this->exists($qogsmwakwacwqogk)) { goto wymawskeqaagkwuo; } $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk); $wyicceigkekkkwgs = [__("\142", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\x4d\102", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION)]; if (!$wcoyaokieoeeswcq) { goto mueeqqskseeiykwg; } $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024)); $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / 1024 ** floor($iyqygqimawuycsyq); $iyqygqimawuycsyq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wyicceigkekkkwgs, $iyqygqimawuycsyq); if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) { goto sgguiaisyueoswkk; } $oiegiwogmwmawkeo = sprintf("\45\x2e\61\x66\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo); sgguiaisyueoswkk: mueeqqskseeiykwg: wymawskeqaagkwuo: return $oiegiwogmwmawkeo; } }
