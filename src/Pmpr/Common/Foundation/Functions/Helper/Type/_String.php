<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67143a37bcbb1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\x6a\x75\x73\164\x5f\x6e\165\x6d\x73"; const kgguuaiguasicuwu = "\x6a\x75\163\164\137\x77\157\x72\x64\x73"; const qomikmkkemkswwgc = "\x41\105\x53\x2d\62\65\66\x2d\x43\102\103"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw)) { if (PHP_VERSION_ID >= 80000) { $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } } return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\x2e\56") : ?string { $ykiwomimkkuiigoq = abs($ykiwomimkkuiigoq); if (strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq) { $sociqikgoyemqaac = preg_replace("\57\136\50\x2e\173\x31\54{$ykiwomimkkuiigoq}\x7d\51\50\x5c\163\x2e\x2a\x7c\x24\x29\x2f\163", "\x5c\x31{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); } return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\xd\12", "\xd", "\12", "\134\x72", "\134\x6e", "\134\162\134\x6e"], "\74\142\162\57\x3e", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\52", "\x2e\52", implode("\174", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (!is_array($sogksuscggsicmac)) { $sogksuscggsicmac = []; } } else { $sogksuscggsicmac = []; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if ($uomewyckeuqoqocu) { $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if ($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac)) { $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); } } return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if ($eqgoocgaqwqcimie) { $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; } } } else { $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); } return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\155\144\65", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\x30", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\x30\61\62\63\64\65\66\x37\x38\x39", "\x71\x72\x73\164\165\166\x77\170\171\x7a"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\157\160\145\156\x73\x73\x6c\x5f\x72\141\156\x64\157\155\x5f\x70\163\145\x75\144\157\x5f\142\x79\x74\x65\x73")) { $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); } else { $eugsosgsugioquqe = sha1(wp_rand()); } if (strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai) { $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); } return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\x79\157\165\x72\123\x61\x6c\164\x48\145\162\x65" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\133\x5e\101\55\x5a\x61\55\x7a\x5d"; break; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\x5b\x5e\x30\x2d\x39\x5d"; break; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\x5b\x5e\101\x2d\132\x61\x2d\172\60\x2d\71\x5d"; } $momkisisegqcmmwi = preg_replace("\57{$eouekqmooogkoqoo}\57", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); while (strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai) { $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); } $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if (!$momkisisegqcmmwi) { $momkisisegqcmmwi = uniqid('', true); } return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\x67\x65\164\x53\150\x6f\162\164\x4e\141\x6d\145"); if (!$ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } } else { $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\141\160\x70\x6c\x69\x63\x61\x74\x69\157\x6e\x2f\x70\144\146": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); break; } return "\144\x61\x74\x61\x3a{$saqmwwmqiwmkiwaa}\73\x62\x61\x73\x65\66\64\54{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\40", "\55", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if ($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw)) { return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); } return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\x2f\50\x5b\x61\55\172\134\x64\x5d\51\x28\133\x41\55\x5a\x5d\51\x2f", "\57\x28\x5b\x5e\137\x5d\x29\50\x5b\101\55\132\x5d\133\x61\x2d\172\135\x29\x2f"], "\44\x31\x5f\x24\x32", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\x5f", "\40", $sociqikgoyemqaac))); if (isset($sociqikgoyemqaac[0])) { $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); } return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\x5f", "\x2d", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\x5f", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if ($sekkmwqwqwcayiwg) { $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); } return "\x27{$ycskuuyucyuqisaq}\47"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; while ($gaeqamemwmwsyukm) { $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); } return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (extension_loaded("\157\160\145\x6e\163\x73\154")) { $uusmaiomayssaecw = wp_salt("\x6e\157\156\x63\x65"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); } return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\x70\145\156\x73\163\x6c\x5f\x65\x6e\x63\x72\x79\160\164")) { $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); } return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\x70\145\x6e\163\x73\154\x5f\x64\x65\143\x72\171\160\164")) { return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\x5c\60"); } return $ewqeaceqiqsywiic; } public function sggauymmqugqouay($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } return $this->ogimogiceeekegoi($this->mkwcwqkqeqkqyggc($egkyssmuqcwaciya)); } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\164\x4e\141\155\145\x73\160\141\x63\x65\x4e\141\155\145"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (function_exists("\x73\x74\x72\137\145\x6e\144\x73\x5f\x77\151\x74\x68")) { $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw); $ksaameoqigiaoigg = 0 === substr_compare($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw, -$ykiwomimkkuiigoq, $ykiwomimkkuiigoq); } } return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\45\62\x31" => "\x21", "\x25\x32\x41" => "\x2a", "\x25\x32\67" => "\47", "\x25\x32\70" => "\x28", "\x25\x32\71" => "\x29"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) === 0; } return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if ($yuyowiyumyysomoy !== false) { $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); } return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\x27") : string { if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) { $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\54\x20{$oswgusmmccauqika}", array_map("\x65\x73\x63\137\x73\161\154", $uomewyckeuqoqocu)); } return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\57\50\x3f\x3c\x21\136\51\133\141\x41\x65\105\x69\x49\157\x4f\x75\x55\x5d\x2f", '', $sociqikgoyemqaac); if (strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg) { $sociqikgoyemqaac = $uwomkgseoiegeume; } if (!is_string($sociqikgoyemqaac)) { $sociqikgoyemqaac = ''; } return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\x5f") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\173\x7b{$euwkouuykmaieusi}\175\x7d"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } public final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if (!$usymaaaeawgmyqig) { $usymaaaeawgmyqig = []; } $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if (!$sociqikgoyemqaac) { $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\141", "\x7a"), range(0, 9), ["\57", "\x3a", "\x2e", "\134", "\x5f", "\55"]); while ($qsmaqqyoggcuyukq > 0) { $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; } ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; } $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; } $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; } return $sociqikgoyemqaac; } }
