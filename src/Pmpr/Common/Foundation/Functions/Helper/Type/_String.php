<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4e36cacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\x6a\165\x73\x74\137\x6e\165\x6d\x73"; const kgguuaiguasicuwu = "\x6a\165\x73\x74\137\167\157\x72\x64\163"; const qomikmkkemkswwgc = "\101\x45\x53\x2d\62\x35\x36\x2d\x43\x42\103"; const ogkokieaoeyacyqu = "\101\102\x43\104\105\x46\107\x48\112\113\x4d\116\120\x51\122\123\x54\125\x56\127\130\131\x5a\x32\x33\64\x35\66\67\70\71"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw)) { if (PHP_VERSION_ID >= 80000) { $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } } return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\x2e\x2e\x2e") : ?string { $ykiwomimkkuiigoq = (int) abs($ykiwomimkkuiigoq); if ($sociqikgoyemqaac && strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq) { $sociqikgoyemqaac = preg_replace("\x2f\x5e\x28\56\173\61\x2c{$ykiwomimkkuiigoq}\x7d\51\50\134\163\x2e\52\174\x24\51\57\x73", "\x5c\61{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); } return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\15\xa", "\15", "\12", "\x5c\162", "\134\156", "\134\162\x5c\156"], "\x3c\142\162\x2f\x3e", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\52", "\56\x2a", implode("\174", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (!is_array($sogksuscggsicmac)) { $sogksuscggsicmac = []; } } else { $sogksuscggsicmac = []; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if ($uomewyckeuqoqocu) { $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if ($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac)) { $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); } } return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if ($eqgoocgaqwqcimie) { $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; } } } else { $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); } return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\155\x64\65", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\60\x31\62\x33\64\65\66\67\x38\x39", "\161\162\x73\164\x75\166\x77\x78\171\172"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\x6f\160\x65\156\x73\163\x6c\x5f\162\141\x6e\x64\x6f\155\137\x70\x73\145\x75\144\x6f\x5f\142\171\164\145\x73")) { $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); } else { $eugsosgsugioquqe = sha1(wp_rand()); } if (strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai) { $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); } return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\x6f\165\162\x53\x61\x6c\164\110\x65\162\x65" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\x48\52", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\133\136\101\55\x5a\141\55\172\x5d"; break; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\133\x5e\60\55\71\135"; break; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\x5b\x5e\x41\x2d\132\x61\x2d\x7a\x30\55\x39\135"; } $momkisisegqcmmwi = preg_replace("\x2f{$eouekqmooogkoqoo}\57", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); while (strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai) { $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); } $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if (!$momkisisegqcmmwi) { $momkisisegqcmmwi = uniqid('', true); } return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\x67\145\164\123\x68\157\162\164\116\141\155\x65"); if (!$ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } } else { $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\x61\x70\160\x6c\151\x63\x61\164\x69\157\x6e\57\x70\x64\x66": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); break; } return "\144\x61\164\141\72{$saqmwwmqiwmkiwaa}\73\x62\x61\x73\x65\66\x34\54{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\x20", "\x2d", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if ($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw)) { return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); } return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\57\50\x5b\x61\x2d\x7a\x5c\x64\x5d\51\50\x5b\x41\x2d\x5a\135\x29\x2f", "\57\50\x5b\x5e\x5f\x5d\x29\x28\x5b\x41\55\x5a\x5d\x5b\141\x2d\172\135\51\57"], "\x24\61\x5f\x24\x32", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\x20", '', ucwords(str_replace("\x5f", "\x20", $sociqikgoyemqaac))); if (isset($sociqikgoyemqaac[0])) { $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); } return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\137", "\x2d", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\137", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if ($sekkmwqwqwcayiwg) { $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); } return "\x27{$ycskuuyucyuqisaq}\47"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; while ($gaeqamemwmwsyukm) { $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); } return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (extension_loaded("\157\x70\145\x6e\x73\163\154")) { $uusmaiomayssaecw = wp_salt("\x6e\x6f\156\x63\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); } return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\160\145\x6e\x73\x73\x6c\x5f\x65\x6e\x63\x72\x79\x70\x74")) { $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); } return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\x70\145\156\163\163\x6c\137\x64\145\143\x72\x79\x70\x74")) { return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\134\60"); } return $ewqeaceqiqsywiic; } public function sggauymmqugqouay($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } return $this->ogimogiceeekegoi($this->mkwcwqkqeqkqyggc($egkyssmuqcwaciya)); } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\164\x4e\141\x6d\x65\x73\160\x61\143\x65\116\x61\x6d\145"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\x32\x31" => "\x21", "\x25\x32\101" => "\52", "\x25\x32\x37" => "\x27", "\45\x32\x38" => "\x28", "\45\x32\71" => "\51"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = str_starts_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if ($yuyowiyumyysomoy !== false) { $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); } return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\47") : string { if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) { $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\x2c\40{$oswgusmmccauqika}", array_map("\145\163\143\x5f\163\x71\154", $uomewyckeuqoqocu)); } return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\57\x28\77\74\41\x5e\51\133\141\101\145\105\151\x49\x6f\x4f\x75\x55\135\x2f", '', $sociqikgoyemqaac); if (strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg) { $sociqikgoyemqaac = $uwomkgseoiegeume; } if (!is_string($sociqikgoyemqaac)) { $sociqikgoyemqaac = ''; } return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\137") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\x7b\x7b{$euwkouuykmaieusi}\x7d\175"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } public final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if (!$usymaaaeawgmyqig) { $usymaaaeawgmyqig = []; } $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if (!$sociqikgoyemqaac) { $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\141", "\172"), range(0, 9), ["\x2f", "\x3a", "\x2e", "\x5c", "\x5f", "\55"]); while ($qsmaqqyoggcuyukq > 0) { $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; } ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; } $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; } $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; } return $sociqikgoyemqaac; } public function gykqksiwukaccoyg(int $ykiwomimkkuiigoq) : string { $wuouqecakiimsmec = ''; $oiyesiaugiyiciue = strlen(self::ogkokieaoeyacyqu); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $ykiwomimkkuiigoq; $ciyackuwsqkoqese++) { $iukyueweicuocgow = $mkcicuowyumccgew->owsaaggskwmeemog(0, $oiyesiaugiyiciue - 1); $wuouqecakiimsmec .= self::ogkokieaoeyacyqu[$iukyueweicuocgow]; } return $wuouqecakiimsmec; } }
