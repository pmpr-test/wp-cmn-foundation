<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67955288a0e50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\x64\146": $saqmwwmqiwmkiwaa = "\141\x70\160\x6c\151\x63\141\x74\x69\x6f\x6e\x2f\x70\x64\146"; break; } $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); } return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); } return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); } return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); } return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); } return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); } return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); } return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); } return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); } return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\57", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\x61\164\x68"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\x20", "\53", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x6d\151\x6d\145"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\x74\x65\x6d\x70\55{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\156\x61\x6d\x65" => $qgoggukmyiemssaa, "\163\151\172\145" => filesize($yoisseswouogeswg), "\164\x79\x70\145" => $cqiuiecmyyqkgeoa, "\145\x72\x72\x6f\162" => '', "\x74\155\160\137\x6e\141\x6d\145" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\x65\163\x74\137\x66\157\x72\155" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\145\162\162\x6f\x72")) { $ksaameoqigiaoigg = new WP_Error("\165\x70\154\157\141\144\137\146\x69\154\x65\137\145\162\162\x6f\x72", $iswcokucwmiosiaq, ["\x73\164\x61\164\x75\163" => 401]); } else { $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\147\165\x69\144" => $mqqeykegekqaumeq["\165\162\x6c"] . "\57" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\57\134\56\133\x5e\56\135\x2b\44\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\160\157\163\x74\x5f\155\151\x6d\x65\137\164\x79\160\145" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\141\164\x68"]}\57{$qgoggukmyiemssaa}"); } return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\147\145\x74\x5f\150\x6f\x6d\x65\137\x70\x61\164\x68")) { include_once ABSPATH . "\x77\160\55\x61\x64\x6d\x69\x6e\57\151\156\x63\154\x75\x64\x65\x73\57\x66\151\154\145\x2e\160\150\x70"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\x67\145\x74\x46\151\154\x65\x4e\x61\x6d\x65"); } else { throw new RuntimeException("{$aiieyweysaukqemc}\40\164\x79\x70\x65\x20\x69\163\x20\156\157\x74\40\166\141\x6c\x69\x64\x20\157\x72\x20\156\141\x6d\x65\x73\160\x61\143\145\x20\156\x6f\164\x20\x65\x78\151\163\164\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if ($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya)) { $smaiamkswqkisawm = basename($esaqeawoigqgagum); } return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\57\56\x2e\x2f\56\56\x2f\56\56\57\56\x2e\x2f"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); } } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (is_null($qkkaqsuiooeayqeu)) { $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134"; } return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\57\134\163\x2a\43\40\102\105\x47\111\116\40{$ymqmyyeuycgmigyo}\56\52\x23\x20\105\116\x44\40{$ymqmyyeuycgmigyo}\x5c\x73\52\77\x2f\151\163\125"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\x2e\150\x74\x61\x63\143\145\163\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (!preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { global $is_apache; if ($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) { if (is_callable($kgcswwyywoscuqqs)) { $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); } if (is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs)) { if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { $iswcokucwmiosiaq = sprintf(__("\x54\150\x65\40\56\150\x74\141\143\143\x65\163\163\x20\146\x69\154\x65\40\x28\x25\x73\x29\40\143\157\165\154\x64\x20\156\x6f\x74\x20\x62\x65\x20\x65\x64\x69\x74\x65\144\x2e\x20\103\150\x65\143\x6b\x20\x69\146\40\164\150\145\40\146\x69\154\x65\40\150\141\x73\x20\x77\x72\151\x74\145\x20\x70\x65\x72\x6d\151\x73\x73\x69\x6f\x6e\x73\x2e", PR__CMN__FOUNDATION), $esaqeawoigqgagum); } else { $ksaameoqigiaoigg = true; } } } } } else { $iswcokucwmiosiaq = sprintf(__("\45\163\x20\151\x73\x20\x6e\157\x74\x20\162\145\x61\144\141\142\x6c\145\x2e", PR__PLG__PMPR), $esaqeawoigqgagum); } return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { if (preg_match("\x60\x5e\50\x68\164\x74\x70\x73\77\x3a\x29\x3f\x2f\57\x28\133\x5e\57\135\53\x29\x28\x2f\x2e\x2a\x29\x3f\44\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; } else { if (preg_match("\140\136\x2f\x28\133\136\57\x5d\53\x29\x28\x2f\56\52\51\x3f\x24\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $migiiksoiymissge; } else { $xeciwimgioieayek = ''; } } } else { $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); } $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\56\x2e", "\134", "\151\156\144\145\170\56\160\150\x70"], preg_replace("\57\133\x20\x3c\x3e\47\x5c\42\134\x72\134\x6e\134\164\x5c\50\134\x29\135\57", '', preg_replace("\57\x28\x5c\77\x2e\x2a\x29\77\50\43\56\x2a\x29\x3f\44\x2f", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\72\56\52\x24\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\x2f\x2f", "\56\56", "\x25"], ["\57", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if ($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku)) { $ksaameoqigiaoigg = $mkomwsiykqigmqca; } return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if ($mkomwsiykqigmqca) { $emukumgmosiqkmyi = preg_replace("\43\134\x70\x7b\x43\x7d\x2b\174\x5e\x5c\x2e\57\43\x75", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\x23\57\x5c\56\x28\x3f\x3d\x2f\x29\x7c\x5e\x5c\56\x2f\x7c\134\x2e\x2f\x24\x23", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\x23\x5c\x2f\52\133\136\57\134\x2e\135\53\x2f\134\56\x5c\x2e\x23\125\x75"; while (preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); } if (preg_match("\43\57\x5c\56\173\62\x7d\174\x5c\x2e\173\x32\175\x2f\x23", $emukumgmosiqkmyi)) { throw new LogicException("\x50\141\164\150\x20\151\163\x20\157\165\x74\x73\x69\144\x65\x20\x6f\x66\x20\x74\x68\x65\40\x64\x65\x66\151\156\145\144\40\162\x6f\x6f\x74\54\x20\160\x61\164\150\x3a\40\133" . $mkomwsiykqigmqca . "\x5d\54\40\162\x65\163\157\x6c\166\145\144\x3a\40\133" . $emukumgmosiqkmyi . "\135"); } $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); } return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\167\x70\x2d\143\157\156\x66\x69\147") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x77\160\137\143\x6f\x6e\146\x69\147\x5f\x6e\141\x6d\x65", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\x41\x42\123\120\x41\x54\x48")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\x2e\x70\150\160"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { $mkomwsiykqigmqca = $qogsmwakwacwqogk; } else { $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\56\x70\150\x70"; if ($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\167\160\55\163\145\x74\x74\151\x6e\147\163\56\160\150\160")) { $mkomwsiykqigmqca = $yqcckkowmayoioai; } } return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if ($wpConfigPath) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\57\136\134\163\52\144\x65\x66\x69\156\x65\134\x28\134\x73\x2a\42{$ymqmyyeuycgmigyo}\42\x5c\163\x2a\54\134\x73\52\x28\77\74\166\x61\x6c\x75\x65\76\133\x5e\134\163\x29\135\x2a\x29\x5c\x73\52\134\x29\x2f\155", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie) { $gqkqacakewkecqie = "\x64\x65\x66\151\156\145\50\47{$ymqmyyeuycgmigyo}\47\54\x20{$eqgoocgaqwqcimie}\x29\73\x20\x2f\x2f\x20\x41\144\x64\145\x64\40\101\x75\164\157\x6d\x61\x74\151\x63\x61\154\x6c\171"; if (!$yumccasyisqwmmio) { $ewgwqamkygiqaawc = preg_replace("\x2f\50\74\x5c\77\x70\150\160\51\57\x69", "\74\77\x70\x68\160\15\xa{$gqkqacakewkecqie}\xd\xa", $ewgwqamkygiqaawc); } else { if (!empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { $ewgwqamkygiqaawc = preg_replace("\57\x5e\x5c\163\x2a\x64\x65\x66\x69\x6e\x65\134\x28\134\163\x2a\42{$ymqmyyeuycgmigyo}\42\x5c\x73\52\54\x5c\163\52\x28\x5b\x5e\x5c\x73\51\x5d\x2a\51\134\x73\52\134\51\56\x2b\x2f\155", $gqkqacakewkecqie, $ewgwqamkygiqaawc); } } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); } } } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\164\x72\x75\145" : "\x66\x61\x6c\163\x65"; } else { if (is_array($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\133"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\47{$uusmaiomayssaecw}\47\x20\75\x3e\40{$igqsaukqcqscimok}\x2c"; } $aqykuigiuwmmcieu .= "\135"; } else { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\47{$eqgoocgaqwqcimie}\x27"; } } } return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\x2a\56\160\150\160"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\x5c", "\57", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\134") . str_replace(["\56\160\150\x70", "\x2f"], ['', "\x5c"], array_pop($uomewyckeuqoqocu)); if (class_exists($uucsugkcsciausuk)) { try { if (!$this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\151\x73\x41\x62\x73\x74\x72\141\143\164", true)) { $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); } } catch (Exception $iewosgggaueeyymg) { continue; } } } return $cmkqisoeyioisqaw; } }
