<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702d5e1cff             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case 'pdf': $saqmwwmqiwmkiwaa = 'application/pdf'; break; } $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); } return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); } return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); } return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); } return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); } return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); } return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); } return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); } return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if ($mcowwqgmkuemoumu instanceof DirectoryIterator) { $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); } return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace('/', DIRECTORY_SEPARATOR, $mqqeykegekqaumeq['path']) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode(',', $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace(' ', '+', $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 'mime'); $qgoggukmyiemssaa = md5(microtime()) . str_replace('/', '.', $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "temp-{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ['name' => $qgoggukmyiemssaa, 'size' => filesize($yoisseswouogeswg), 'type' => $cqiuiecmyyqkgeoa, 'error' => '', 'tmp_name' => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ['test_form' => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, 'error')) { $ksaameoqigiaoigg = new WP_Error('upload_file_error', $iswcokucwmiosiaq, ['status' => 401]); } else { $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ['guid' => $mqqeykegekqaumeq['url'] . '/' . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace('/\\.[^.]+$/', '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', 'post_mime_type' => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq['path']}/{$qgoggukmyiemssaa}"); } return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists('get_home_path')) { include_once ABSPATH . 'wp-admin/includes/file.php'; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, 'getFileName'); } else { throw new RuntimeException("{$aiieyweysaukqemc} type is not valid or namespace not exist."); } } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if ($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya)) { $smaiamkswqkisawm = basename($esaqeawoigqgagum); } return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}/../../../../"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); } } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (is_null($qkkaqsuiooeayqeu)) { $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === '\\'; } return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "/\\s*# BEGIN {$ymqmyyeuycgmigyo}.*# END {$ymqmyyeuycgmigyo}\\s*?/isU"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . '.htaccess'; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (!preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { global $is_apache; if ($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) { if (is_callable($kgcswwyywoscuqqs)) { $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); } if (is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs)) { if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { $iswcokucwmiosiaq = sprintf(__('The .htaccess file (%s) could not be edited. Check if the file has write permissions.', PR__CMN__FOUNDATION), $esaqeawoigqgagum); } else { $ksaameoqigiaoigg = true; } } } } } else { $iswcokucwmiosiaq = sprintf(__('%s is not readable.', PR__PLG__PMPR), $esaqeawoigqgagum); } return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { if (preg_match('`^(https?:)?//([^/]+)(/.*)?$`i', $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; } else { if (preg_match('`^/([^/]+)(/.*)?$`i', $migiiksoiymissge, $meyiiwcswqmuggyg)) { $xeciwimgioieayek = $migiiksoiymissge; } else { $xeciwimgioieayek = ''; } } } else { $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); } $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(['..', '\\', 'index.php'], preg_replace('/[ <>\'\\"\\r\\n\\t\\(\\)]/', '', preg_replace("/(\\?.*)?(#.*)?\$/", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace('/:.*$/', '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(['//', '..', '%'], ['/', '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if ($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku)) { $ksaameoqigiaoigg = $mkomwsiykqigmqca; } return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if ($mkomwsiykqigmqca) { $emukumgmosiqkmyi = preg_replace('#\\p{C}+|^\\./#u', '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace('#/\\.(?=/)|^\\./|\\./$#', '', $emukumgmosiqkmyi); $ucccueqywigcukcc = '#\\/*[^/\\.]+/\\.\\.#Uu'; while (preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); } if (preg_match('#/\\.{2}|\\.{2}/#', $emukumgmosiqkmyi)) { throw new LogicException('Path is outside of the defined root, path: [' . $mkomwsiykqigmqca . '], resolved: [' . $emukumgmosiqkmyi . ']'); } $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); } return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = 'wp-config') : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('wp_config_name', $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms('ABSPATH')); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}.php"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { $mkomwsiykqigmqca = $qogsmwakwacwqogk; } else { $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}.php"; if ($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}wp-settings.php")) { $mkomwsiykqigmqca = $yqcckkowmayoioai; } } return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if ($wpConfigPath) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("/^\\s*define\\(\\s*\"{$ymqmyyeuycgmigyo}\"\\s*,\\s*(?<value>[^\\s)]*)\\s*\\)/m", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie) { $gqkqacakewkecqie = "define('{$ymqmyyeuycgmigyo}', {$eqgoocgaqwqcimie}); // Added Automatically"; if (!$yumccasyisqwmmio) { $ewgwqamkygiqaawc = preg_replace('/(<\\?php)/i', "<?php\r\n{$gqkqacakewkecqie}\r\n", $ewgwqamkygiqaawc); } else { if (!empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { $ewgwqamkygiqaawc = preg_replace("/^\\s*define\\(\\s*\"{$ymqmyyeuycgmigyo}\"\\s*,\\s*([^\\s)]*)\\s*\\).+/m", $gqkqacakewkecqie, $ewgwqamkygiqaawc); } } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); } } } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? 'true' : 'false'; } else { if (is_array($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "["; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "'{$uusmaiomayssaecw}' => {$igqsaukqcqscimok},"; } $aqykuigiuwmmcieu .= "]"; } else { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = "'{$eqgoocgaqwqcimie}'"; } } } return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name('*.php'); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace('\\', '/', $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, '\\') . str_replace(['.php', '/'], ['', '\\'], array_pop($uomewyckeuqoqocu)); if (class_exists($uucsugkcsciausuk)) { try { if (!$this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, 'isAbstract', true)) { $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); } } catch (Exception $iewosgggaueeyymg) { continue; } } } return $cmkqisoeyioisqaw; } }
