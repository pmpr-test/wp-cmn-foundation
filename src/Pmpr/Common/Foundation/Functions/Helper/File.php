<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto uiqqoqeguqksakak; } switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\x64\146": $saqmwwmqiwmkiwaa = "\141\160\160\154\x69\x63\141\x74\151\x6f\x6e\x2f\160\144\x66"; goto wokoooqeguamsuso; } ykwmsugmueoosyka: wokoooqeguamsuso: $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); uiqqoqeguqksakak: return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto iggimwweuooskmqi; } $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); iggimwweuooskmqi: return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto oieyimeswqquigei; } $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); oieyimeswqquigei: return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto sieqieowwakamuei; } $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); sieqieowwakamuei: return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto qcssqeugkggmssuq; } $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); qcssqeugkggmssuq: return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto smsgocwimiqgewse; } $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); smsgocwimiqgewse: return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto qksoacweieioouuu; } $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); qksoacweieioouuu: return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto cgummkmwkkyaomqq; } $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); cgummkmwkkyaomqq: return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto mygyyacgawkwoaak; } $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); mygyyacgawkwoaak: return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\x61\x74\x68"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\54", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\x20", "\x2b", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\155\151\x6d\x65"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\x2e", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\164\x65\x6d\x70\x2d{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\x6e\x61\x6d\145" => $qgoggukmyiemssaa, "\163\x69\x7a\x65" => filesize($yoisseswouogeswg), "\164\171\160\x65" => $cqiuiecmyyqkgeoa, "\x65\x72\x72\157\162" => '', "\164\x6d\160\137\x6e\x61\155\x65" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\145\x73\x74\x5f\146\x6f\162\155" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\145\x72\162\x6f\162")) { goto mqecqicimeusigcs; } $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\x67\165\x69\x64" => $mqqeykegekqaumeq["\x75\162\154"] . "\57" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\57\x5c\56\133\x5e\56\x5d\x2b\x24\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\x70\x6f\x73\x74\137\x6d\x69\x6d\x65\x5f\164\x79\x70\x65" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\141\x74\x68"]}\57{$qgoggukmyiemssaa}"); goto agwucmswyeecgiwk; mqecqicimeusigcs: $ksaameoqigiaoigg = new WP_Error("\165\160\154\157\x61\144\137\146\151\154\145\137\x65\x72\x72\x6f\x72", $iswcokucwmiosiaq, ["\163\x74\x61\164\x75\x73" => 401]); agwucmswyeecgiwk: return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\x67\145\x74\137\x68\x6f\155\x65\x5f\x70\141\x74\150")) { require_once ABSPATH . "\167\x70\55\x61\x64\x6d\151\156\x2f\x69\x6e\x63\154\165\144\x65\x73\57\x66\151\154\145\x2e\x70\x68\x70"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { goto wocmissqwqoccqgq; } throw new RuntimeException("{$aiieyweysaukqemc}\x20\x74\171\160\x65\40\x69\163\40\x6e\x6f\164\40\x76\141\x6c\x69\144\x20\x6f\x72\x20\x6e\141\x6d\x65\x73\x70\x61\143\x65\40\156\157\x74\x20\145\170\151\x73\x74\56"); goto ouyqacmgssaeeyaq; wocmissqwqoccqgq: $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\147\145\x74\x46\151\154\145\116\141\155\x65"); ouyqacmgssaeeyaq: } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if (!($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya))) { goto auwsmkeaswcqwkiy; } $smaiamkswqkisawm = basename($esaqeawoigqgagum); auwsmkeaswcqwkiy: return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\57\56\56\x2f\56\x2e\57\x2e\x2e\57\56\x2e\x2f"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); wyouyacqwaoscwco: } ywymuuggyeqggyqo: } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (!is_null($qkkaqsuiooeayqeu)) { goto kuiimqmaogsaoimi; } $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134"; kuiimqmaogsaoimi: return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\x2f\x5c\163\x2a\x23\x20\x42\x45\x47\111\116\40{$ymqmyyeuycgmigyo}\56\52\x23\x20\105\x4e\104\x20{$ymqmyyeuycgmigyo}\x5c\163\52\x3f\57\151\x73\x55"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\56\150\x74\141\x63\x63\145\163\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { goto oemswegiqoiyocyi; } $iswcokucwmiosiaq = sprintf(__("\45\163\40\x69\x73\x20\x6e\x6f\164\40\162\145\x61\x64\141\x62\x6c\x65\56", PR__PLG__PMPR), $esaqeawoigqgagum); goto ckocyicqgqesqcyw; oemswegiqoiyocyi: $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { goto gayuuyucaseyequa; } global $is_apache; if (!($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum))) { goto yogcgegoayymyisi; } if (!is_callable($kgcswwyywoscuqqs)) { goto ueyagkiewoigukeq; } $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); ueyagkiewoigukeq: if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) { goto iwcmwyyeuwuogkmy; } if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { goto oeqaomymqmegqway; } $ksaameoqigiaoigg = true; goto aeaaqimiugqwsiuo; oeqaomymqmegqway: $iswcokucwmiosiaq = sprintf(__("\124\150\x65\40\x2e\150\164\141\x63\143\x65\x73\x73\x20\x66\x69\154\145\x20\x28\45\x73\x29\40\x63\157\165\x6c\x64\40\156\157\x74\40\x62\145\x20\145\144\x69\164\145\144\56\40\103\150\145\143\x6b\40\151\146\x20\x74\150\145\40\146\151\x6c\x65\x20\150\x61\163\40\167\162\151\x74\145\x20\x70\145\x72\155\151\163\163\151\x6f\156\163\x2e", PR__CMN__FOUNDATION), $esaqeawoigqgagum); aeaaqimiugqwsiuo: iwcmwyyeuwuogkmy: yogcgegoayymyisi: gayuuyucaseyequa: ckocyicqgqesqcyw: return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { goto uiokqiccsgcmweuw; } $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); goto eycgkegwmmsgwgsu; uiokqiccsgcmweuw: if (preg_match("\x60\136\x28\150\x74\164\160\163\x3f\x3a\x29\77\57\x2f\x28\133\x5e\x2f\135\x2b\x29\50\57\56\52\x29\x3f\44\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) { goto yooikokuygygyscy; } if (preg_match("\140\136\57\50\x5b\x5e\57\x5d\x2b\x29\50\57\56\x2a\51\x3f\x24\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { goto oiuwwaimuiuasyak; } $xeciwimgioieayek = ''; goto mceqeoceqiqsqyig; oiuwwaimuiuasyak: $xeciwimgioieayek = $migiiksoiymissge; mceqeoceqiqsqyig: goto yikcmigmymmyykyy; yooikokuygygyscy: $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; yikcmigmymmyykyy: eycgkegwmmsgwgsu: $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\x2e\56", "\134", "\151\156\144\x65\x78\x2e\x70\x68\x70"], preg_replace("\57\133\x20\74\76\x27\134\42\x5c\162\x5c\x6e\x5c\164\x5c\50\134\x29\135\x2f", '', preg_replace("\57\50\x5c\77\56\x2a\x29\x3f\x28\43\x2e\52\51\77\x24\x2f", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\72\x2e\52\x24\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\57\x2f", "\x2e\56", "\x25"], ["\57", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if (!($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku))) { goto ayyowoawokgaayaw; } $ksaameoqigiaoigg = $mkomwsiykqigmqca; ayyowoawokgaayaw: return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if (!$mkomwsiykqigmqca) { goto wqmqkiimcwkskqya; } $emukumgmosiqkmyi = preg_replace("\43\134\160\x7b\103\175\53\x7c\x5e\134\x2e\x2f\43\165", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\43\x2f\134\56\50\x3f\75\57\x29\x7c\136\134\56\57\174\x5c\56\x2f\x24\x23", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\43\x5c\x2f\52\133\136\57\134\x2e\x5d\53\57\134\56\134\56\43\x55\x75"; wkgqkogygougamck: if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { goto awmmoggkmyueoasu; } $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); goto wkgqkogygougamck; awmmoggkmyueoasu: if (!preg_match("\x23\x2f\x5c\x2e\173\62\x7d\x7c\x5c\x2e\x7b\x32\x7d\57\x23", $emukumgmosiqkmyi)) { goto yukcaoieiswcmemu; } throw new LogicException("\x50\x61\164\x68\x20\151\163\x20\157\165\164\x73\x69\x64\145\x20\x6f\146\x20\164\150\145\40\144\145\x66\x69\156\145\144\40\162\157\x6f\x74\x2c\40\x70\x61\x74\x68\72\x20\x5b" . $mkomwsiykqigmqca . "\x5d\54\40\x72\x65\163\x6f\x6c\x76\145\144\x3a\x20\x5b" . $emukumgmosiqkmyi . "\135"); yukcaoieiswcmemu: $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); wqmqkiimcwkskqya: return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\x77\x70\55\143\157\x6e\146\x69\147") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\160\137\x63\x6f\156\146\151\147\137\156\141\x6d\145", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\x41\102\123\x50\101\x54\110")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\x2e\x70\x68\160"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { goto owkkogeoyukumywq; } $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\x2e\160\x68\x70"; if (!($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\x77\x70\55\163\145\x74\164\x69\156\147\163\56\x70\x68\x70"))) { goto ggywskiemyoaeqaw; } $mkomwsiykqigmqca = $yqcckkowmayoioai; ggywskiemyoaeqaw: goto swiiegskwgeogcoq; owkkogeoyukumywq: $mkomwsiykqigmqca = $qogsmwakwacwqogk; swiiegskwgeogcoq: return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if (!$wpConfigPath) { goto osiuigcwawuayisk; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\57\136\x5c\x73\x2a\144\145\146\151\156\x65\134\50\134\163\x2a\x22{$ymqmyyeuycgmigyo}\42\134\163\x2a\x2c\134\163\52\x28\77\74\166\141\154\165\x65\x3e\x5b\x5e\x5c\x73\x29\135\x2a\51\x5c\163\x2a\134\x29\57\155", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie)) { goto gwggseoomcggqiim; } $gqkqacakewkecqie = "\x64\x65\146\x69\x6e\x65\x28\47{$ymqmyyeuycgmigyo}\47\x2c\40{$eqgoocgaqwqcimie}\51\73\40\x2f\x2f\x20\x41\144\144\145\x64\40\101\x75\164\157\x6d\141\164\x69\x63\141\x6c\154\171"; if (!$yumccasyisqwmmio) { goto gaokasygggaaywkq; } if (empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { goto mgmiwyeiyuecmaso; } $ewgwqamkygiqaawc = preg_replace("\x2f\136\134\x73\x2a\x64\145\x66\x69\x6e\145\x5c\x28\134\163\x2a\42{$ymqmyyeuycgmigyo}\x22\134\x73\52\54\134\x73\52\x28\x5b\136\x5c\163\x29\x5d\x2a\x29\134\163\x2a\134\51\56\53\x2f\x6d", $gqkqacakewkecqie, $ewgwqamkygiqaawc); mgmiwyeiyuecmaso: goto ocykqucykqysewkc; gaokasygggaaywkq: $ewgwqamkygiqaawc = preg_replace("\57\x28\x3c\134\x3f\x70\x68\160\51\57\151", "\74\x3f\x70\150\160\xd\12{$gqkqacakewkecqie}\xd\12", $ewgwqamkygiqaawc); ocykqucykqysewkc: $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); gwggseoomcggqiim: osiuigcwawuayisk: } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { goto koksqyyscgosmgua; } if (is_array($eqgoocgaqwqcimie)) { goto iciwkuugsssieams; } if (!is_string($eqgoocgaqwqcimie)) { goto sqsawqgiyogosigw; } $aqykuigiuwmmcieu = "\47{$eqgoocgaqwqcimie}\x27"; sqsawqgiyogosigw: goto weoyykiwcagymoms; iciwkuugsssieams: $aqykuigiuwmmcieu = "\133"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\47{$uusmaiomayssaecw}\47\x20\75\x3e\x20{$igqsaukqcqscimok}\x2c"; cmwgwwgycwmmssak: } iyayoqqcasquscwy: $aqykuigiuwmmcieu .= "\135"; weoyykiwcagymoms: goto yyckoawemeecakki; koksqyyscgosmgua: $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\x74\x72\x75\145" : "\x66\141\154\x73\x65"; yyckoawemeecakki: return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\52\x2e\160\x68\160"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\x5c", "\57", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\x5c") . str_replace(["\x2e\x70\x68\160", "\x2f"], ['', "\134"], array_pop($uomewyckeuqoqocu)); if (!class_exists($uucsugkcsciausuk)) { goto iycmcucyyqgqaiwa; } try { if ($this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\x69\163\101\142\163\x74\162\x61\143\x74", true)) { goto qsoeqiaiaaksgcik; } $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); qsoeqiaiaaksgcik: } catch (Exception $iewosgggaueeyymg) { goto umkuoiowcowgywug; } iycmcucyyqgqaiwa: umkuoiowcowgywug: } qyisaqamyeauiyws: return $cmkqisoeyioisqaw; } }
