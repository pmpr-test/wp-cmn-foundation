<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795745ee4997             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\x64\x66": $saqmwwmqiwmkiwaa = "\141\x70\x70\154\x69\x63\141\x74\151\157\156\57\x70\x64\146"; break; } $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); } return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); } return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); } return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); } return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); } return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); } return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); } return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); } return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); } return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\x61\164\150"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x6d\x69\x6d\145"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\x74\x65\x6d\160\55{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\x6e\x61\155\x65" => $qgoggukmyiemssaa, "\163\151\172\x65" => filesize($yoisseswouogeswg), "\164\171\160\x65" => $cqiuiecmyyqkgeoa, "\145\162\162\x6f\162" => '', "\164\x6d\160\x5f\x6e\141\x6d\x65" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\x74\145\163\x74\137\146\157\162\155" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\145\x72\162\157\162")) { $ksaameoqigiaoigg = new WP_Error("\165\160\154\157\x61\x64\137\x66\x69\154\145\137\x65\x72\162\x6f\x72", $iswcokucwmiosiaq, ["\163\164\x61\164\x75\x73" => 401]); } else { $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\x67\x75\x69\x64" => $mqqeykegekqaumeq["\165\x72\154"] . "\x2f" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\x2f\x5c\56\x5b\136\x2e\x5d\x2b\44\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\160\x6f\x73\164\x5f\155\151\x6d\x65\x5f\x74\x79\x70\x65" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\x61\164\150"]}\57{$qgoggukmyiemssaa}"); } return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\147\x65\x74\137\150\157\155\145\x5f\x70\x61\x74\x68")) { include_once ABSPATH . "\x77\x70\x2d\141\144\x6d\151\156\57\151\x6e\143\154\x75\x64\x65\x73\57\x66\151\x6c\145\56\160\150\x70"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\147\145\164\106\151\154\145\x4e\141\x6d\x65"); } else { throw new RuntimeException("{$aiieyweysaukqemc}\x20\164\171\x70\x65\x20\x69\163\40\x6e\x6f\x74\40\166\x61\x6c\x69\x64\40\x6f\x72\40\156\141\155\145\x73\160\x61\143\145\x20\x6e\x6f\164\x20\145\x78\x69\163\x74\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if ($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya)) { $smaiamkswqkisawm = basename($esaqeawoigqgagum); } return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\x2f\56\56\57\x2e\56\x2f\56\56\57\56\56\x2f"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); } } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (is_null($qkkaqsuiooeayqeu)) { $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\x5c"; } return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\57\x5c\163\x2a\43\x20\x42\x45\x47\x49\x4e\40{$ymqmyyeuycgmigyo}\56\x2a\x23\40\105\x4e\104\x20{$ymqmyyeuycgmigyo}\x5c\x73\x2a\77\x2f\x69\163\125"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\x2e\150\164\x61\143\143\145\x73\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (!preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { global $is_apache; if ($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) { if (is_callable($kgcswwyywoscuqqs)) { $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); } if (is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs)) { if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { $iswcokucwmiosiaq = sprintf(__("\124\150\145\x20\x2e\150\164\141\143\x63\145\x73\163\x20\x66\151\x6c\x65\40\x28\45\x73\51\x20\143\x6f\165\x6c\x64\40\x6e\157\x74\40\142\x65\40\145\x64\x69\x74\x65\144\56\40\103\150\x65\x63\153\40\151\146\40\164\150\145\x20\146\151\x6c\x65\x20\150\x61\163\40\167\x72\x69\x74\x65\x20\160\x65\x72\x6d\151\x73\163\151\157\156\163\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum); } else { $ksaameoqigiaoigg = true; } } } } } else { $iswcokucwmiosiaq = sprintf(__("\x25\163\x20\x69\163\40\156\157\164\40\162\145\x61\x64\x61\142\x6c\x65\x2e", PR__PLG__PMPR), $esaqeawoigqgagum); } return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { if (preg_match("\x60\x5e\50\x68\x74\164\160\163\77\x3a\x29\x3f\x2f\57\x28\x5b\136\57\135\x2b\51\50\57\x2e\x2a\x29\77\x24\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; } else { if (preg_match("\140\136\57\x28\133\136\x2f\x5d\x2b\x29\50\x2f\56\52\51\x3f\x24\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $migiiksoiymissge; } else { $xeciwimgioieayek = ''; } } } else { $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); } $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\x2e\56", "\134", "\x69\156\x64\x65\x78\56\x70\x68\x70"], preg_replace("\57\x5b\x20\x3c\x3e\47\134\x22\x5c\x72\134\156\x5c\x74\x5c\x28\134\x29\135\57", '', preg_replace("\57\x28\x5c\77\x2e\x2a\x29\77\50\x23\56\x2a\51\77\x24\57", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\72\56\52\x24\x2f", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\x2f\x2f", "\x2e\56", "\x25"], ["\x2f", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if ($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku)) { $ksaameoqigiaoigg = $mkomwsiykqigmqca; } return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if ($mkomwsiykqigmqca) { $emukumgmosiqkmyi = preg_replace("\x23\134\x70\173\x43\175\53\174\136\x5c\x2e\57\43\x75", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\x23\57\134\x2e\x28\77\x3d\x2f\x29\174\136\x5c\56\x2f\x7c\x5c\56\x2f\x24\43", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\x23\134\57\52\x5b\136\x2f\134\56\x5d\53\57\x5c\56\x5c\x2e\43\125\165"; while (preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); } if (preg_match("\x23\x2f\134\56\x7b\x32\175\x7c\134\56\x7b\62\x7d\x2f\43", $emukumgmosiqkmyi)) { throw new LogicException("\x50\141\164\150\x20\151\163\40\x6f\165\164\163\151\144\x65\x20\x6f\146\40\164\x68\x65\40\144\145\x66\151\156\x65\x64\40\x72\x6f\x6f\164\x2c\40\x70\x61\x74\x68\x3a\40\x5b" . $mkomwsiykqigmqca . "\x5d\x2c\40\162\x65\163\x6f\x6c\x76\145\x64\x3a\x20\x5b" . $emukumgmosiqkmyi . "\135"); } $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); } return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\167\160\55\143\157\156\x66\x69\x67") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x77\160\x5f\x63\157\x6e\146\151\147\137\x6e\141\x6d\145", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\101\102\x53\x50\101\124\x48")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\x2e\160\150\x70"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { $mkomwsiykqigmqca = $qogsmwakwacwqogk; } else { $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\56\160\x68\160"; if ($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\x77\x70\x2d\163\145\164\164\x69\x6e\x67\x73\x2e\160\x68\160")) { $mkomwsiykqigmqca = $yqcckkowmayoioai; } } return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if ($wpConfigPath) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\57\136\134\x73\52\144\145\146\x69\x6e\145\x5c\50\134\163\52\x22{$ymqmyyeuycgmigyo}\x22\134\163\52\54\x5c\163\x2a\50\77\74\x76\141\x6c\165\x65\76\x5b\x5e\134\x73\x29\135\x2a\x29\134\x73\x2a\134\x29\57\x6d", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie) { $gqkqacakewkecqie = "\144\145\x66\x69\156\145\50\47{$ymqmyyeuycgmigyo}\47\x2c\x20{$eqgoocgaqwqcimie}\x29\73\x20\x2f\57\40\101\x64\144\145\x64\x20\x41\165\164\x6f\155\x61\164\x69\143\x61\x6c\154\171"; if (!$yumccasyisqwmmio) { $ewgwqamkygiqaawc = preg_replace("\57\x28\74\x5c\x3f\160\150\160\51\x2f\151", "\74\77\160\150\160\15\xa{$gqkqacakewkecqie}\xd\xa", $ewgwqamkygiqaawc); } else { if (!empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { $ewgwqamkygiqaawc = preg_replace("\x2f\136\x5c\163\x2a\144\145\146\151\156\x65\134\50\x5c\x73\x2a\42{$ymqmyyeuycgmigyo}\x22\x5c\x73\52\54\x5c\x73\x2a\50\133\x5e\x5c\163\x29\x5d\x2a\51\134\163\52\x5c\x29\56\x2b\x2f\x6d", $gqkqacakewkecqie, $ewgwqamkygiqaawc); } } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); } } } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\164\x72\165\145" : "\146\x61\154\x73\145"; } else { if (is_array($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\x5b"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\47{$uusmaiomayssaecw}\x27\40\x3d\76\x20{$igqsaukqcqscimok}\54"; } $aqykuigiuwmmcieu .= "\x5d"; } else { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\x27{$eqgoocgaqwqcimie}\x27"; } } } return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\x2a\x2e\x70\150\160"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\134", "\x2f", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\134") . str_replace(["\56\x70\x68\160", "\x2f"], ['', "\x5c"], array_pop($uomewyckeuqoqocu)); if (class_exists($uucsugkcsciausuk)) { try { if (!$this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\x69\x73\101\x62\x73\164\162\141\x63\x74", true)) { $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); } } catch (Exception $iewosgggaueeyymg) { continue; } } } return $cmkqisoeyioisqaw; } }
