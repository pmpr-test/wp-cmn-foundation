<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581610eed2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\144\x66": $saqmwwmqiwmkiwaa = "\x61\160\160\x6c\x69\x63\x61\x74\151\x6f\x6e\x2f\160\x64\x66"; break; } $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); } return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); } return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); } return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); } return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); } return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); } return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); } return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); } return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); } return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\57", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\x70\141\164\x68"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\155\151\155\x65"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\57", "\56", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\164\x65\x6d\x70\55{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\x6e\x61\155\145" => $qgoggukmyiemssaa, "\x73\x69\172\x65" => filesize($yoisseswouogeswg), "\164\x79\x70\145" => $cqiuiecmyyqkgeoa, "\145\x72\162\157\162" => '', "\164\155\160\x5f\x6e\x61\155\x65" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\x65\163\164\137\146\157\x72\155" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\145\x72\162\157\x72")) { $ksaameoqigiaoigg = new WP_Error("\165\160\154\x6f\x61\x64\x5f\146\151\x6c\145\137\145\162\162\157\x72", $iswcokucwmiosiaq, ["\x73\x74\x61\164\165\163" => 401]); } else { $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\x67\x75\151\144" => $mqqeykegekqaumeq["\x75\162\154"] . "\57" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\x2f\x5c\56\x5b\136\x2e\135\53\44\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\160\157\x73\x74\137\155\x69\x6d\145\x5f\164\x79\x70\x65" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\x61\164\x68"]}\x2f{$qgoggukmyiemssaa}"); } return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\147\x65\164\137\x68\157\x6d\x65\x5f\160\141\x74\150")) { include_once ABSPATH . "\167\160\55\x61\144\x6d\x69\156\57\x69\x6e\x63\x6c\165\144\x65\163\57\x66\x69\x6c\145\56\160\150\x70"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\147\x65\164\x46\151\x6c\145\x4e\x61\x6d\x65"); } else { throw new RuntimeException("{$aiieyweysaukqemc}\40\x74\171\x70\x65\x20\x69\x73\40\x6e\157\164\40\x76\141\154\x69\x64\40\x6f\162\40\156\x61\x6d\x65\x73\160\141\x63\145\x20\156\x6f\164\40\145\170\151\163\x74\56"); } } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if ($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya)) { $smaiamkswqkisawm = basename($esaqeawoigqgagum); } return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\x2f\56\x2e\x2f\56\56\57\x2e\56\57\56\56\57"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); } } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (is_null($qkkaqsuiooeayqeu)) { $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134"; } return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\x2f\134\x73\x2a\43\x20\102\x45\x47\x49\116\40{$ymqmyyeuycgmigyo}\x2e\x2a\43\40\105\116\x44\40{$ymqmyyeuycgmigyo}\134\x73\52\77\x2f\x69\163\x55"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\56\150\x74\141\x63\143\x65\163\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (!preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { global $is_apache; if ($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) { if (is_callable($kgcswwyywoscuqqs)) { $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); } if (is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs)) { if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { $iswcokucwmiosiaq = sprintf(__("\124\x68\145\x20\x2e\x68\x74\141\143\x63\x65\x73\x73\x20\x66\151\154\x65\x20\x28\45\x73\x29\40\x63\157\x75\x6c\144\40\x6e\x6f\164\40\x62\x65\40\145\144\151\164\145\144\x2e\x20\x43\150\x65\x63\153\x20\151\146\x20\164\150\x65\40\x66\x69\x6c\145\x20\150\141\x73\x20\x77\162\x69\x74\x65\40\160\x65\162\155\x69\163\x73\x69\157\156\x73\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum); } else { $ksaameoqigiaoigg = true; } } } } } else { $iswcokucwmiosiaq = sprintf(__("\x25\x73\x20\151\163\x20\156\157\x74\40\x72\x65\x61\x64\x61\x62\154\145\x2e", PR__PLG__PMPR), $esaqeawoigqgagum); } return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { if (preg_match("\140\136\x28\150\164\164\160\163\77\72\51\x3f\57\x2f\50\133\136\x2f\135\53\x29\x28\x2f\56\52\51\x3f\x24\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; } else { if (preg_match("\140\136\57\x28\133\x5e\x2f\x5d\x2b\x29\50\57\56\x2a\51\77\44\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $migiiksoiymissge; } else { $xeciwimgioieayek = ''; } } } else { $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); } $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\56\x2e", "\x5c", "\151\x6e\x64\x65\x78\x2e\x70\150\160"], preg_replace("\57\x5b\40\x3c\76\47\x5c\x22\134\162\134\x6e\x5c\164\x5c\50\134\x29\x5d\x2f", '', preg_replace("\x2f\x28\134\x3f\56\52\x29\77\50\43\x2e\52\x29\x3f\x24\x2f", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\57\x3a\x2e\52\x24\x2f", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\x2f\57", "\x2e\56", "\x25"], ["\x2f", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if ($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku)) { $ksaameoqigiaoigg = $mkomwsiykqigmqca; } return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if ($mkomwsiykqigmqca) { $emukumgmosiqkmyi = preg_replace("\x23\134\x70\173\x43\175\x2b\x7c\x5e\134\56\57\x23\x75", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\43\x2f\134\x2e\x28\x3f\75\x2f\x29\x7c\x5e\x5c\x2e\x2f\174\x5c\x2e\57\44\43", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\x23\x5c\x2f\x2a\133\x5e\57\134\x2e\135\53\x2f\x5c\x2e\x5c\x2e\x23\125\x75"; while (preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); } if (preg_match("\x23\57\134\56\173\x32\x7d\174\x5c\56\173\x32\175\x2f\43", $emukumgmosiqkmyi)) { throw new LogicException("\120\141\x74\150\40\x69\163\40\157\165\164\x73\x69\144\x65\x20\x6f\x66\x20\164\x68\x65\40\x64\x65\146\x69\x6e\x65\x64\40\x72\157\x6f\x74\x2c\x20\160\x61\164\x68\x3a\40\133" . $mkomwsiykqigmqca . "\135\x2c\x20\162\145\163\157\x6c\166\145\x64\72\x20\x5b" . $emukumgmosiqkmyi . "\135"); } $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); } return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\167\160\x2d\143\x6f\156\146\x69\147") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x77\160\137\143\x6f\x6e\146\151\147\x5f\x6e\141\155\145", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\101\102\123\120\101\124\110")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\56\x70\150\x70"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { $mkomwsiykqigmqca = $qogsmwakwacwqogk; } else { $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\56\x70\x68\x70"; if ($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\x77\x70\55\x73\x65\164\x74\x69\x6e\147\x73\x2e\160\150\160")) { $mkomwsiykqigmqca = $yqcckkowmayoioai; } } return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if ($wpConfigPath) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\57\136\134\x73\x2a\144\x65\x66\151\x6e\145\134\x28\134\163\52\42{$ymqmyyeuycgmigyo}\42\x5c\x73\52\54\134\163\x2a\x28\x3f\x3c\x76\x61\x6c\x75\145\76\x5b\136\x5c\163\x29\x5d\52\x29\134\163\52\134\51\x2f\155", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie) { $gqkqacakewkecqie = "\x64\x65\146\x69\x6e\145\50\x27{$ymqmyyeuycgmigyo}\x27\54\x20{$eqgoocgaqwqcimie}\x29\73\x20\x2f\57\40\x41\144\x64\145\x64\x20\x41\x75\x74\x6f\155\x61\x74\x69\x63\141\154\x6c\171"; if (!$yumccasyisqwmmio) { $ewgwqamkygiqaawc = preg_replace("\x2f\50\x3c\x5c\x3f\160\x68\x70\51\57\x69", "\74\x3f\x70\150\160\15\xa{$gqkqacakewkecqie}\15\xa", $ewgwqamkygiqaawc); } else { if (!empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { $ewgwqamkygiqaawc = preg_replace("\x2f\x5e\134\x73\x2a\144\x65\146\151\x6e\x65\134\50\x5c\163\x2a\x22{$ymqmyyeuycgmigyo}\42\134\x73\52\x2c\x5c\x73\x2a\50\133\x5e\134\x73\x29\135\52\x29\x5c\x73\x2a\134\x29\56\x2b\x2f\155", $gqkqacakewkecqie, $ewgwqamkygiqaawc); } } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); } } } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\x74\x72\165\x65" : "\x66\x61\x6c\x73\x65"; } else { if (is_array($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\133"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\47{$uusmaiomayssaecw}\47\40\x3d\76\40{$igqsaukqcqscimok}\x2c"; } $aqykuigiuwmmcieu .= "\x5d"; } else { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "\x27{$eqgoocgaqwqcimie}\x27"; } } } return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\52\56\x70\x68\x70"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\x5c", "\57", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\134") . str_replace(["\56\160\x68\160", "\x2f"], ['', "\x5c"], array_pop($uomewyckeuqoqocu)); if (class_exists($uucsugkcsciausuk)) { try { if (!$this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\151\163\x41\142\163\164\x72\141\143\164", true)) { $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); } } catch (Exception $iewosgggaueeyymg) { continue; } } } return $cmkqisoeyioisqaw; } }
