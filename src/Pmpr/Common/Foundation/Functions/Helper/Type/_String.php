<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835e37313             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\x6a\x75\x73\x74\x5f\x6e\165\155\163"; const kgguuaiguasicuwu = "\x6a\165\x73\x74\x5f\x77\x6f\x72\x64\x73"; const qomikmkkemkswwgc = "\101\105\x53\55\x32\65\x36\x2d\x43\102\103"; const ogkokieaoeyacyqu = "\x41\102\x43\x44\x45\x46\107\x48\112\113\115\x4e\x50\x51\122\123\124\125\x56\x57\x58\x59\x5a\62\x33\x34\65\x36\x37\x38\71"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw)) { if (PHP_VERSION_ID >= 80000) { $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } } return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\x2e\x2e") : ?string { $ykiwomimkkuiigoq = (int) abs($ykiwomimkkuiigoq); if ($sociqikgoyemqaac && strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq) { $sociqikgoyemqaac = preg_replace("\57\136\50\x2e\173\x31\54{$ykiwomimkkuiigoq}\175\x29\x28\134\163\x2e\x2a\174\x24\51\x2f\163", "\134\61{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); } return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\15\xa", "\xd", "\xa", "\x5c\162", "\x5c\156", "\134\162\x5c\x6e"], "\x3c\142\162\57\76", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\52", "\56\x2a", implode("\x7c", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (!is_array($sogksuscggsicmac)) { $sogksuscggsicmac = []; } } else { $sogksuscggsicmac = []; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if ($uomewyckeuqoqocu) { $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if ($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac)) { $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); } } return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if ($eqgoocgaqwqcimie) { $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; } } } else { $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); } return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\x6d\x64\65", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\x30", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\60\61\x32\x33\x34\x35\x36\67\70\71", "\161\162\x73\x74\x75\x76\x77\170\x79\172"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\157\x70\145\156\163\163\x6c\137\162\x61\156\x64\157\155\x5f\160\x73\145\165\x64\157\137\x62\x79\164\145\163")) { $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); } else { $eugsosgsugioquqe = sha1(wp_rand()); } if (strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai) { $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); } return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\157\165\162\x53\x61\154\164\110\145\162\145" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\110\52", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\x5b\136\x41\55\132\141\55\x7a\135"; break; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\x5b\136\x30\x2d\71\x5d"; break; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\x5b\x5e\101\55\x5a\x61\55\x7a\x30\x2d\71\135"; } $momkisisegqcmmwi = preg_replace("\x2f{$eouekqmooogkoqoo}\57", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); while (strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai) { $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); } $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if (!$momkisisegqcmmwi) { $momkisisegqcmmwi = uniqid('', true); } return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\x53\150\x6f\x72\x74\116\x61\155\x65"); if (!$ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } } else { $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\141\160\160\154\x69\143\x61\164\151\x6f\x6e\x2f\x70\x64\146": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); break; } return "\144\141\164\x61\x3a{$saqmwwmqiwmkiwaa}\73\x62\x61\163\x65\66\x34\54{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\40", "\55", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if ($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw)) { return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); } return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\57\50\x5b\141\x2d\x7a\x5c\x64\135\51\50\133\x41\x2d\132\x5d\x29\57", "\x2f\x28\133\x5e\x5f\135\x29\x28\133\101\x2d\132\135\x5b\x61\55\x7a\135\x29\x2f"], "\x24\61\137\44\62", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\x5f", "\x20", $sociqikgoyemqaac))); if (isset($sociqikgoyemqaac[0])) { $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); } return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\137", "\55", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\x5f", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if ($sekkmwqwqwcayiwg) { $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); } return "\47{$ycskuuyucyuqisaq}\47"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; while ($gaeqamemwmwsyukm) { $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); } return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (extension_loaded("\x6f\x70\145\x6e\x73\163\x6c")) { $uusmaiomayssaecw = wp_salt("\x6e\x6f\156\143\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); } return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\160\x65\156\x73\163\x6c\x5f\x65\156\x63\x72\171\x70\164")) { $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); } return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\160\145\x6e\163\163\154\x5f\x64\x65\143\162\x79\x70\164")) { return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\x5c\x30"); } return $ewqeaceqiqsywiic; } public function sggauymmqugqouay($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } return $this->ogimogiceeekegoi($this->mkwcwqkqeqkqyggc($egkyssmuqcwaciya)); } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\116\141\155\x65\163\x70\x61\x63\x65\116\141\x6d\145"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\62\x31" => "\x21", "\45\62\101" => "\52", "\45\x32\67" => "\47", "\45\62\x38" => "\x28", "\x25\x32\x39" => "\x29"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = str_starts_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if ($yuyowiyumyysomoy !== false) { $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); } return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\x27") : string { if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) { $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\x2c\40{$oswgusmmccauqika}", array_map("\145\x73\x63\x5f\163\161\154", $uomewyckeuqoqocu)); } return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\x2f\x28\77\x3c\41\x5e\x29\x5b\141\101\x65\x45\151\111\157\x4f\x75\125\x5d\57", '', $sociqikgoyemqaac); if (strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg) { $sociqikgoyemqaac = $uwomkgseoiegeume; } if (!is_string($sociqikgoyemqaac)) { $sociqikgoyemqaac = ''; } return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\x5f") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\x7b\x7b{$euwkouuykmaieusi}\175\175"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } public final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if (!$usymaaaeawgmyqig) { $usymaaaeawgmyqig = []; } $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if (!$sociqikgoyemqaac) { $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\x61", "\172"), range(0, 9), ["\x2f", "\x3a", "\x2e", "\134", "\x5f", "\55"]); while ($qsmaqqyoggcuyukq > 0) { $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; } ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; } $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; } $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; } return $sociqikgoyemqaac; } public function gykqksiwukaccoyg(int $ykiwomimkkuiigoq) : string { $wuouqecakiimsmec = ''; $oiyesiaugiyiciue = strlen(self::ogkokieaoeyacyqu); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $ykiwomimkkuiigoq; $ciyackuwsqkoqese++) { $iukyueweicuocgow = $mkcicuowyumccgew->owsaaggskwmeemog(0, $oiyesiaugiyiciue - 1); $wuouqecakiimsmec .= self::ogkokieaoeyacyqu[$iukyueweicuocgow]; } return $wuouqecakiimsmec; } }
