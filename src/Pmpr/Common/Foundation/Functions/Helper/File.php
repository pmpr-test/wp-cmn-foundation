<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356231cfee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\144\146": $saqmwwmqiwmkiwaa = "\141\x70\x70\154\x69\143\141\x74\151\x6f\x6e\57\x70\x64\x66"; break; } $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); } return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); } return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); } return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); } return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); } return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); } return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); } return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); } return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); } return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\141\164\x68"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\155\151\155\x65"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\164\x65\x6d\160\55{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\x6e\141\x6d\145" => $qgoggukmyiemssaa, "\x73\151\172\145" => filesize($yoisseswouogeswg), "\x74\x79\160\145" => $cqiuiecmyyqkgeoa, "\x65\162\162\x6f\162" => '', "\x74\x6d\x70\137\x6e\x61\155\x65" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\x74\145\x73\164\x5f\146\157\162\155" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\x65\162\162\x6f\x72")) { $ksaameoqigiaoigg = new WP_Error("\165\160\154\157\141\144\137\146\151\154\145\137\145\162\x72\x6f\162", $iswcokucwmiosiaq, ["\163\x74\141\x74\165\x73" => 401]); } else { $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\x67\165\x69\144" => $mqqeykegekqaumeq["\165\162\154"] . "\57" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\x2f\134\56\x5b\x5e\56\135\x2b\44\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\160\x6f\163\164\137\x6d\151\x6d\x65\137\164\171\x70\x65" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\x61\x74\150"]}\57{$qgoggukmyiemssaa}"); } return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\x67\145\x74\x5f\150\157\x6d\145\137\160\141\x74\x68")) { include_once ABSPATH . "\167\160\55\x61\144\x6d\151\156\x2f\x69\x6e\x63\x6c\165\144\x65\163\x2f\x66\151\x6c\145\56\x70\150\x70"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\x67\145\x74\106\x69\x6c\145\116\141\155\x65"); } else { throw new RuntimeException("{$aiieyweysaukqemc}\x20\x74\x79\x70\145\x20\151\x73\40\156\157\164\x20\166\x61\154\x69\x64\x20\x6f\162\x20\x6e\x61\155\145\x73\x70\141\143\145\x20\x6e\157\164\40\145\x78\x69\x73\x74\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if ($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya)) { $smaiamkswqkisawm = basename($esaqeawoigqgagum); } return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\x2f\56\x2e\57\56\x2e\57\56\56\57\56\x2e\57"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); } } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (is_null($qkkaqsuiooeayqeu)) { $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\x5c"; } return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\57\x5c\x73\x2a\x23\40\102\x45\x47\x49\116\x20{$ymqmyyeuycgmigyo}\56\x2a\43\40\105\x4e\x44\40{$ymqmyyeuycgmigyo}\134\x73\52\77\57\151\163\125"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\x2e\150\x74\x61\143\x63\145\x73\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (!preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { global $is_apache; if ($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) { if (is_callable($kgcswwyywoscuqqs)) { $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); } if (is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs)) { if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { $iswcokucwmiosiaq = sprintf(__("\x54\x68\145\x20\x2e\150\x74\x61\143\x63\145\x73\163\x20\x66\151\154\145\40\x28\x25\163\x29\x20\x63\157\165\x6c\x64\40\x6e\157\164\x20\142\145\40\x65\144\x69\164\x65\x64\56\x20\x43\x68\145\143\153\40\x69\x66\40\164\x68\x65\x20\146\151\x6c\145\40\150\141\163\x20\x77\162\151\164\x65\x20\x70\x65\162\155\151\163\163\151\x6f\x6e\x73\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum); } else { $ksaameoqigiaoigg = true; } } } } } else { $iswcokucwmiosiaq = sprintf(__("\x25\163\40\151\163\x20\x6e\x6f\164\40\162\145\141\144\141\142\154\x65\56", PR__PLG__PMPR), $esaqeawoigqgagum); } return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { if (preg_match("\140\136\50\x68\164\164\160\163\x3f\x3a\x29\x3f\x2f\x2f\x28\x5b\136\x2f\135\53\x29\x28\57\56\52\x29\77\x24\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; } else { if (preg_match("\x60\x5e\x2f\x28\x5b\136\57\x5d\x2b\x29\50\x2f\x2e\x2a\x29\x3f\44\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $migiiksoiymissge; } else { $xeciwimgioieayek = ''; } } } else { $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); } $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\56\56", "\134", "\x69\x6e\144\145\170\56\x70\150\160"], preg_replace("\57\x5b\40\x3c\76\47\134\42\x5c\x72\134\156\134\x74\x5c\x28\134\51\135\57", '', preg_replace("\x2f\50\134\x3f\56\x2a\x29\x3f\50\43\x2e\52\51\77\44\57", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\x3a\x2e\52\44\x2f", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\57\57", "\56\x2e", "\45"], ["\x2f", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if ($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku)) { $ksaameoqigiaoigg = $mkomwsiykqigmqca; } return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if ($mkomwsiykqigmqca) { $emukumgmosiqkmyi = preg_replace("\x23\134\x70\173\103\175\53\x7c\136\x5c\56\57\43\165", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\43\57\x5c\56\x28\x3f\75\57\x29\174\136\x5c\x2e\x2f\174\134\x2e\x2f\x24\x23", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\43\x5c\x2f\52\x5b\136\57\134\x2e\135\53\57\134\x2e\x5c\56\x23\125\x75"; while (preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); } if (preg_match("\x23\x2f\134\56\x7b\62\x7d\x7c\134\56\x7b\62\175\x2f\43", $emukumgmosiqkmyi)) { throw new LogicException("\120\141\x74\x68\40\x69\163\40\157\165\164\163\151\144\145\40\157\x66\x20\x74\150\x65\40\144\145\x66\151\156\x65\x64\x20\x72\157\157\164\x2c\40\160\141\164\x68\72\40\x5b" . $mkomwsiykqigmqca . "\135\x2c\40\x72\x65\x73\157\x6c\x76\145\x64\x3a\40\133" . $emukumgmosiqkmyi . "\x5d"); } $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); } return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\167\160\55\x63\157\x6e\146\151\x67") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\160\137\143\x6f\156\x66\x69\147\137\156\x61\155\145", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\x41\102\123\120\x41\x54\110")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\x2e\160\x68\x70"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { $mkomwsiykqigmqca = $qogsmwakwacwqogk; } else { $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\56\160\150\x70"; if ($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\167\x70\x2d\x73\x65\164\164\x69\156\147\x73\56\160\x68\x70")) { $mkomwsiykqigmqca = $yqcckkowmayoioai; } } return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if ($wpConfigPath) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\x2f\x5e\x5c\163\x2a\x64\145\x66\151\x6e\145\134\x28\x5c\163\x2a\x22{$ymqmyyeuycgmigyo}\42\x5c\163\x2a\54\x5c\163\52\x28\x3f\74\x76\x61\x6c\165\x65\76\x5b\136\x5c\x73\x29\x5d\x2a\x29\134\163\x2a\x5c\x29\x2f\155", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie) { $gqkqacakewkecqie = "\144\x65\x66\x69\156\x65\50\47{$ymqmyyeuycgmigyo}\47\54\40{$eqgoocgaqwqcimie}\51\73\40\x2f\57\40\x41\x64\x64\x65\x64\x20\101\x75\164\157\155\141\x74\151\143\141\154\154\x79"; if (!$yumccasyisqwmmio) { $ewgwqamkygiqaawc = preg_replace("\57\50\74\134\x3f\160\150\160\51\x2f\x69", "\74\x3f\x70\150\160\15\xa{$gqkqacakewkecqie}\xd\12", $ewgwqamkygiqaawc); } else { if (!empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { $ewgwqamkygiqaawc = preg_replace("\57\136\134\163\x2a\144\x65\146\151\156\x65\x5c\x28\134\x73\x2a\x22{$ymqmyyeuycgmigyo}\42\x5c\163\52\x2c\134\x73\x2a\x28\x5b\x5e\134\163\x29\135\x2a\51\134\163\52\134\51\x2e\x2b\x2f\x6d", $gqkqacakewkecqie, $ewgwqamkygiqaawc); } } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); } } } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\x74\x72\x75\x65" : "\146\x61\154\x73\145"; } else { if (is_array($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\x5b"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\x27{$uusmaiomayssaecw}\x27\x20\75\x3e\40{$igqsaukqcqscimok}\54"; } $aqykuigiuwmmcieu .= "\135"; } else { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\x27{$eqgoocgaqwqcimie}\x27"; } } } return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\52\x2e\160\150\160"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\x5c", "\57", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\134") . str_replace(["\x2e\160\x68\160", "\57"], ['', "\x5c"], array_pop($uomewyckeuqoqocu)); if (class_exists($uucsugkcsciausuk)) { try { if (!$this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\x69\x73\x41\142\x73\164\x72\x61\143\x74", true)) { $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); } } catch (Exception $iewosgggaueeyymg) { continue; } } } return $cmkqisoeyioisqaw; } }
