<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto wawwaqicwyyeamqu; } switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\144\x66": $saqmwwmqiwmkiwaa = "\141\x70\160\154\151\143\x61\164\x69\157\x6e\57\160\x64\x66"; goto kmemegqksaeuqcow; } miqekiwaouwgqgui: kmemegqksaeuqcow: $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); wawwaqicwyyeamqu: return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto quccsmwoagiquqya; } $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); quccsmwoagiquqya: return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto wuugmygqgsmkgsmc; } $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); wuugmygqgsmkgsmc: return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto wcuuwegqcysecoom; } $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); wcuuwegqcysecoom: return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto wyioauuuyckygcaq; } $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); wyioauuuyckygcaq: return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto suweomwcwyiiscee; } $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); suweomwcwyiiscee: return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto iyaaokkcuycqywco; } $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); iyaaokkcuycqywco: return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto geusysuemiqgegcw; } $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); geusysuemiqgegcw: return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto siowcuqygwiqumii; } $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); siowcuqygwiqumii: return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\57", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\x61\164\x68"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x6d\x69\x6d\x65"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\57", "\x2e", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\164\x65\x6d\x70\55{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\156\x61\155\x65" => $qgoggukmyiemssaa, "\x73\x69\x7a\x65" => filesize($yoisseswouogeswg), "\x74\171\160\x65" => $cqiuiecmyyqkgeoa, "\x65\162\x72\x6f\162" => '', "\164\x6d\x70\x5f\x6e\x61\x6d\145" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\145\x73\x74\x5f\x66\x6f\x72\155" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\x65\162\x72\x6f\x72")) { goto yuiwacwscsiukyqe; } $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\147\165\x69\x64" => $mqqeykegekqaumeq["\x75\162\x6c"] . "\x2f" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\x2f\134\x2e\x5b\x5e\56\135\x2b\x24\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\160\157\x73\x74\137\155\x69\x6d\x65\137\x74\171\x70\145" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\141\164\150"]}\x2f{$qgoggukmyiemssaa}"); goto oooiaawaqeogogky; yuiwacwscsiukyqe: $ksaameoqigiaoigg = new WP_Error("\165\160\x6c\x6f\141\144\137\x66\151\x6c\145\137\x65\x72\x72\157\162", $iswcokucwmiosiaq, ["\x73\x74\x61\x74\165\x73" => 401]); oooiaawaqeogogky: return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\147\145\x74\137\150\x6f\x6d\x65\x5f\160\x61\x74\150")) { require_once ABSPATH . "\167\160\x2d\141\x64\x6d\151\x6e\57\x69\156\x63\x6c\x75\144\x65\163\x2f\x66\151\154\145\56\x70\x68\x70"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { goto cmugciymsqakcssq; } throw new RuntimeException("{$aiieyweysaukqemc}\40\x74\x79\x70\x65\40\x69\x73\x20\156\x6f\164\40\166\141\154\x69\x64\40\157\x72\x20\156\x61\155\145\163\160\x61\143\145\x20\156\x6f\x74\x20\145\x78\x69\163\164\x2e"); goto omgecsuaqiqymwms; cmugciymsqakcssq: $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\x67\x65\x74\106\151\x6c\145\116\x61\155\x65"); omgecsuaqiqymwms: } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if (!($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya))) { goto qqucyqsowaqsmagw; } $smaiamkswqkisawm = basename($esaqeawoigqgagum); qqucyqsowaqsmagw: return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\x2f\56\56\x2f\56\x2e\57\56\56\57\56\x2e\57"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); wksaesosugiyoqoe: } myswmcskaagkuaiq: } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (!is_null($qkkaqsuiooeayqeu)) { goto kkiwuqcmoqmiquqq; } $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134"; kkiwuqcmoqmiquqq: return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\57\x5c\x73\x2a\43\40\102\105\107\111\116\40{$ymqmyyeuycgmigyo}\56\x2a\43\x20\105\x4e\x44\40{$ymqmyyeuycgmigyo}\134\163\x2a\77\x2f\x69\163\125"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\56\150\164\141\143\143\145\163\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { goto amwqgwykwqyqsygy; } $iswcokucwmiosiaq = sprintf(__("\x25\163\40\151\x73\x20\156\x6f\164\40\x72\x65\x61\x64\x61\142\154\x65\56", PR__PLG__PMPR), $esaqeawoigqgagum); goto laqgkacikykmcsos; amwqgwykwqyqsygy: $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { goto jwicyuowwocymagu; } global $is_apache; if (!($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum))) { goto iwyomomasqykuwcw; } if (!is_callable($kgcswwyywoscuqqs)) { goto ygmkqoaymoicisso; } $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); ygmkqoaymoicisso: if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) { goto ekgcsqsycamakgak; } if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { goto mwsuqsikwoimcgiq; } $ksaameoqigiaoigg = true; goto moiwoyyuauwqywom; mwsuqsikwoimcgiq: $iswcokucwmiosiaq = sprintf(__("\124\x68\x65\x20\x2e\x68\x74\x61\143\143\x65\163\163\40\x66\x69\154\145\x20\50\x25\163\x29\40\143\157\165\x6c\x64\x20\x6e\x6f\164\40\142\145\x20\145\144\x69\x74\145\144\56\x20\103\150\145\143\x6b\x20\x69\146\40\x74\x68\145\40\146\x69\x6c\145\40\x68\x61\163\x20\167\162\151\164\x65\x20\x70\145\162\155\x69\163\163\151\x6f\x6e\163\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum); moiwoyyuauwqywom: ekgcsqsycamakgak: iwyomomasqykuwcw: jwicyuowwocymagu: laqgkacikykmcsos: return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { goto amcyugmyywgmwyys; } $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); goto eqqgiqaceosmskyq; amcyugmyywgmwyys: if (preg_match("\140\x5e\50\x68\164\164\160\x73\77\72\x29\x3f\x2f\x2f\50\133\x5e\57\x5d\53\x29\50\57\x2e\52\x29\77\x24\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { goto yiswuyuuwakywmiy; } if (preg_match("\140\x5e\57\x28\133\x5e\x2f\135\x2b\51\x28\x2f\56\x2a\x29\77\x24\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { goto egeeugucoaimuyai; } $xeciwimgioieayek = ''; goto iweqeyugoiogqcsw; egeeugucoaimuyai: $xeciwimgioieayek = $migiiksoiymissge; iweqeyugoiogqcsw: goto coswqmcmeyyaemcs; yiswuyuuwakywmiy: $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; coswqmcmeyyaemcs: eqqgiqaceosmskyq: $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\56\x2e", "\x5c", "\151\156\x64\x65\x78\56\160\x68\160"], preg_replace("\x2f\133\40\74\76\47\134\42\134\162\x5c\156\x5c\x74\x5c\x28\x5c\51\x5d\x2f", '', preg_replace("\x2f\50\x5c\77\x2e\x2a\51\77\50\43\56\x2a\51\77\x24\x2f", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\x3a\56\x2a\44\x2f", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\x2f\x2f", "\56\56", "\x25"], ["\x2f", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if (!($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku))) { goto gcikiyucocqiqkic; } $ksaameoqigiaoigg = $mkomwsiykqigmqca; gcikiyucocqiqkic: return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if (!$mkomwsiykqigmqca) { goto toacieymkgsmouum; } $emukumgmosiqkmyi = preg_replace("\43\134\160\x7b\x43\175\x2b\174\136\134\x2e\57\x23\x75", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\x23\57\134\x2e\50\77\x3d\x2f\x29\174\x5e\x5c\x2e\57\x7c\134\56\57\44\43", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\43\134\x2f\52\133\136\x2f\x5c\x2e\x5d\x2b\57\134\x2e\134\56\43\x55\165"; ykomkgsekoimwoga: if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { goto kgaiygkqciegamkk; } $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); goto ykomkgsekoimwoga; kgaiygkqciegamkk: if (!preg_match("\x23\57\134\56\x7b\62\175\174\x5c\x2e\x7b\x32\175\x2f\43", $emukumgmosiqkmyi)) { goto uwacyygkmmwmqumm; } throw new LogicException("\120\141\164\x68\40\151\163\40\x6f\165\164\163\151\x64\145\40\157\146\x20\164\x68\x65\x20\x64\145\146\x69\156\145\144\x20\x72\157\157\x74\x2c\40\160\x61\164\150\x3a\x20\133" . $mkomwsiykqigmqca . "\x5d\54\x20\162\145\163\157\154\x76\145\x64\x3a\40\x5b" . $emukumgmosiqkmyi . "\x5d"); uwacyygkmmwmqumm: $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); toacieymkgsmouum: return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\167\160\x2d\143\x6f\x6e\146\x69\147") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x77\160\137\x63\x6f\x6e\146\x69\x67\137\156\141\155\145", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\101\x42\123\120\x41\124\x48")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\x2e\160\x68\160"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { goto wgyckicucikswwgc; } $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\56\x70\150\160"; if (!($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\167\x70\55\x73\145\164\164\x69\x6e\x67\x73\x2e\x70\150\160"))) { goto uooyycimwyiscwik; } $mkomwsiykqigmqca = $yqcckkowmayoioai; uooyycimwyiscwik: goto kuewoymyameyusgi; wgyckicucikswwgc: $mkomwsiykqigmqca = $qogsmwakwacwqogk; kuewoymyameyusgi: return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if (!$wpConfigPath) { goto iaemoucqgyeioome; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\x2f\x5e\134\163\52\144\145\x66\151\156\x65\134\x28\134\163\52\42{$ymqmyyeuycgmigyo}\x22\x5c\x73\x2a\x2c\x5c\x73\x2a\50\77\x3c\166\x61\x6c\165\x65\x3e\133\x5e\134\163\51\135\52\x29\134\x73\52\x5c\51\57\x6d", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie)) { goto cqggosuciisguwka; } $gqkqacakewkecqie = "\x64\x65\146\151\156\145\x28\x27{$ymqmyyeuycgmigyo}\x27\x2c\40{$eqgoocgaqwqcimie}\x29\x3b\x20\57\57\40\101\144\x64\x65\x64\40\101\165\164\157\x6d\141\x74\151\143\141\154\x6c\171"; if (!$yumccasyisqwmmio) { goto ocqocwcocigwogao; } if (empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { goto saqssgocioekcyik; } $ewgwqamkygiqaawc = preg_replace("\x2f\136\134\x73\52\x64\145\146\x69\156\x65\134\x28\x5c\x73\52\x22{$ymqmyyeuycgmigyo}\x22\x5c\x73\52\54\134\x73\x2a\50\133\136\134\x73\51\x5d\x2a\x29\134\163\52\134\x29\x2e\53\x2f\x6d", $gqkqacakewkecqie, $ewgwqamkygiqaawc); saqssgocioekcyik: goto aygymyyeaiouckwm; ocqocwcocigwogao: $ewgwqamkygiqaawc = preg_replace("\57\x28\x3c\134\77\160\x68\x70\51\57\x69", "\x3c\x3f\x70\x68\160\xd\xa{$gqkqacakewkecqie}\xd\xa", $ewgwqamkygiqaawc); aygymyyeaiouckwm: $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); cqggosuciisguwka: iaemoucqgyeioome: } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { goto yawiksokukeuwumm; } if (is_array($eqgoocgaqwqcimie)) { goto aacaaeuuscacmgws; } if (!is_string($eqgoocgaqwqcimie)) { goto uyiyiugiugqiqgce; } $aqykuigiuwmmcieu = "\x27{$eqgoocgaqwqcimie}\47"; uyiyiugiugqiqgce: goto imccgasockkumogm; aacaaeuuscacmgws: $aqykuigiuwmmcieu = "\133"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\x27{$uusmaiomayssaecw}\x27\x20\x3d\76\40{$igqsaukqcqscimok}\54"; qcqecwaeywouwwyw: } cusmikqmacqsyoma: $aqykuigiuwmmcieu .= "\x5d"; imccgasockkumogm: goto wiisumwwuyqmqggs; yawiksokukeuwumm: $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\x74\162\x75\145" : "\146\141\x6c\x73\145"; wiisumwwuyqmqggs: return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\52\56\160\x68\160"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\x5c", "\57", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\134") . str_replace(["\56\160\x68\160", "\57"], ['', "\x5c"], array_pop($uomewyckeuqoqocu)); if (!class_exists($uucsugkcsciausuk)) { goto cuiswoyuykyksukc; } try { if ($this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\151\x73\x41\x62\163\164\x72\x61\x63\x74", true)) { goto wewskayogyikqqwe; } $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); wewskayogyikqqwe: } catch (Exception $iewosgggaueeyymg) { goto kgseuyacuyamciku; } cuiswoyuykyksukc: kgseuyacuyamciku: } ciiggekwccqceewc: return $cmkqisoeyioisqaw; } }
