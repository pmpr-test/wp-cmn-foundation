<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67955288a0e50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\x6a\165\163\164\137\x6e\x75\155\x73"; const kgguuaiguasicuwu = "\152\165\163\x74\x5f\167\157\162\144\163"; const qomikmkkemkswwgc = "\101\x45\123\55\62\65\66\55\103\102\x43"; const ogkokieaoeyacyqu = "\x41\102\103\x44\x45\x46\x47\x48\x4a\x4b\x4d\116\120\x51\x52\123\x54\125\126\x57\130\x59\x5a\62\x33\x34\65\66\67\70\x39"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw)) { if (PHP_VERSION_ID >= 80000) { $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } } return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\56\56") : ?string { $ykiwomimkkuiigoq = (int) abs($ykiwomimkkuiigoq); if ($sociqikgoyemqaac && strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq) { $sociqikgoyemqaac = preg_replace("\x2f\136\50\56\173\x31\54{$ykiwomimkkuiigoq}\175\51\50\134\163\x2e\x2a\x7c\44\x29\57\163", "\x5c\x31{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); } return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\xd\12", "\xd", "\xa", "\134\162", "\134\x6e", "\134\x72\134\156"], "\x3c\142\162\x2f\76", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\x2a", "\56\x2a", implode("\x7c", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (!is_array($sogksuscggsicmac)) { $sogksuscggsicmac = []; } } else { $sogksuscggsicmac = []; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if ($uomewyckeuqoqocu) { $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if ($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac)) { $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); } } return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if ($eqgoocgaqwqcimie) { $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; } } } else { $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); } return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\155\x64\65", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\x30", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\x30\61\62\x33\x34\65\66\67\70\71", "\x71\x72\x73\164\165\x76\167\170\x79\x7a"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\157\160\x65\x6e\163\163\x6c\137\x72\141\x6e\x64\x6f\155\137\160\163\x65\x75\x64\x6f\137\142\171\x74\145\163")) { $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); } else { $eugsosgsugioquqe = sha1(wp_rand()); } if (strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai) { $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); } return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\x6f\x75\162\x53\141\154\x74\110\145\162\x65" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\x48\52", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\x5b\136\x41\55\x5a\141\x2d\172\x5d"; break; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\133\136\60\55\71\x5d"; break; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\133\136\101\55\132\141\x2d\x7a\60\x2d\x39\135"; } $momkisisegqcmmwi = preg_replace("\x2f{$eouekqmooogkoqoo}\x2f", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); while (strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai) { $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); } $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if (!$momkisisegqcmmwi) { $momkisisegqcmmwi = uniqid('', true); } return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\x53\x68\x6f\x72\x74\116\x61\x6d\x65"); if (!$ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } } else { $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\141\160\160\154\151\x63\x61\164\x69\x6f\x6e\x2f\160\144\x66": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); break; } return "\x64\141\x74\x61\x3a{$saqmwwmqiwmkiwaa}\x3b\142\141\163\x65\x36\64\x2c{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\x20", "\x2d", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if ($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw)) { return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); } return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\x2f\50\x5b\141\55\x7a\x5c\x64\x5d\x29\50\133\x41\x2d\132\x5d\51\x2f", "\57\50\133\x5e\x5f\135\x29\50\x5b\101\x2d\132\135\x5b\141\55\172\135\51\x2f"], "\44\61\137\44\x32", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\x5f", "\x20", $sociqikgoyemqaac))); if (isset($sociqikgoyemqaac[0])) { $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); } return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\137", "\x2d", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\137", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if ($sekkmwqwqwcayiwg) { $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); } return "\47{$ycskuuyucyuqisaq}\x27"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; while ($gaeqamemwmwsyukm) { $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); } return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (extension_loaded("\157\x70\x65\156\163\x73\x6c")) { $uusmaiomayssaecw = wp_salt("\x6e\157\156\x63\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); } return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\x70\x65\x6e\163\163\x6c\x5f\145\x6e\x63\162\x79\x70\164")) { $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); } return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\x70\x65\156\x73\x73\x6c\x5f\x64\145\x63\x72\171\x70\164")) { return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\x5c\60"); } return $ewqeaceqiqsywiic; } public function sggauymmqugqouay($egkyssmuqcwaciya) : string { if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } return $this->ogimogiceeekegoi($this->mkwcwqkqeqkqyggc($egkyssmuqcwaciya)); } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\164\x4e\141\x6d\x65\x73\160\141\143\145\x4e\141\155\145"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\x32\61" => "\x21", "\45\62\x41" => "\x2a", "\45\62\67" => "\x27", "\45\62\70" => "\50", "\45\62\x39" => "\x29"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = str_starts_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if ($yuyowiyumyysomoy !== false) { $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); } return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\47") : string { if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) { $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\54\x20{$oswgusmmccauqika}", array_map("\x65\x73\143\x5f\163\161\x6c", $uomewyckeuqoqocu)); } return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\x2f\x28\77\x3c\41\136\x29\x5b\x61\101\145\x45\x69\111\157\117\x75\x55\135\57", '', $sociqikgoyemqaac); if (strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg) { $sociqikgoyemqaac = $uwomkgseoiegeume; } if (!is_string($sociqikgoyemqaac)) { $sociqikgoyemqaac = ''; } return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\137") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\173\x7b{$euwkouuykmaieusi}\x7d\175"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } public final function quacgsocsmycocig($qsmaqqyoggcuyukq, $uusmaiomayssaecw) : string { $cgymsaomwkoiomoi = $qsmaqqyoggcuyukq; static $usymaaaeawgmyqig; if (!$usymaaaeawgmyqig) { $usymaaaeawgmyqig = []; } $sociqikgoyemqaac = $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] ?? false; if (!$sociqikgoyemqaac) { $yygmoeguaqyumuui = str_split($uusmaiomayssaecw, 3); $omasqoksqewuwwkq = array_unique($yygmoeguaqyumuui); sort($omasqoksqewuwwkq); $uwqiwmiaigcasuuo = []; $scmmmikqkkwmaekc = array_merge(range("\141", "\172"), range(0, 9), ["\57", "\72", "\x2e", "\x5c", "\x5f", "\55"]); while ($qsmaqqyoggcuyukq > 0) { $kuuiuigeacouwmaa = (int) floor(log($qsmaqqyoggcuyukq, 2)); $uwqiwmiaigcasuuo[$kuuiuigeacouwmaa] = $scmmmikqkkwmaekc[$kuuiuigeacouwmaa]; $qsmaqqyoggcuyukq -= 2 ** $kuuiuigeacouwmaa; } ksort($uwqiwmiaigcasuuo); $uwqiwmiaigcasuuo = array_values($uwqiwmiaigcasuuo); $cyisaawicueoikww = []; foreach ($omasqoksqewuwwkq as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $cyisaawicueoikww[$eqgoocgaqwqcimie] = $uwqiwmiaigcasuuo[$momcykaoccoymeig]; } $sociqikgoyemqaac = ''; foreach ($yygmoeguaqyumuui as $eusockqasqqmoess) { $sociqikgoyemqaac .= $cyisaawicueoikww[$eusockqasqqmoess]; } $usymaaaeawgmyqig[$cgymsaomwkoiomoi . $uusmaiomayssaecw] = $sociqikgoyemqaac; } return $sociqikgoyemqaac; } public function gykqksiwukaccoyg(int $ykiwomimkkuiigoq) : string { $wuouqecakiimsmec = ''; $oiyesiaugiyiciue = strlen(self::ogkokieaoeyacyqu); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $ykiwomimkkuiigoq; $ciyackuwsqkoqese++) { $iukyueweicuocgow = $mkcicuowyumccgew->owsaaggskwmeemog(0, $oiyesiaugiyiciue - 1); $wuouqecakiimsmec .= self::ogkokieaoeyacyqu[$iukyueweicuocgow]; } return $wuouqecakiimsmec; } }
