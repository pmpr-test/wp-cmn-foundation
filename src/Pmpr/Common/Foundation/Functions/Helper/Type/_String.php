<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705b088f1290             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\152\x75\x73\x74\137\x6e\x75\155\163"; const kgguuaiguasicuwu = "\x6a\165\163\x74\137\x77\157\162\x64\163"; const qomikmkkemkswwgc = "\101\105\123\x2d\x32\x35\x36\x2d\x43\x42\x43"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw)) { if (PHP_VERSION_ID >= 80000) { $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } } return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\56\x2e") : ?string { $ykiwomimkkuiigoq = abs($ykiwomimkkuiigoq); if (strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq) { $sociqikgoyemqaac = preg_replace("\57\136\50\x2e\173\61\54{$ykiwomimkkuiigoq}\175\x29\50\x5c\163\56\52\174\44\51\57\163", "\134\x31{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); } return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\xd\12", "\15", "\12", "\134\162", "\x5c\x6e", "\x5c\x72\134\156"], "\x3c\x62\162\x2f\76", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\134\52", "\x2e\52", implode("\x7c", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (!is_array($sogksuscggsicmac)) { $sogksuscggsicmac = []; } } else { $sogksuscggsicmac = []; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if ($uomewyckeuqoqocu) { $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if ($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac)) { $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); } } return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if ($eqgoocgaqwqcimie) { $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; } } } else { $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); } return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\x6d\x64\x35", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\x30\x31\x32\63\64\65\x36\x37\x38\71", "\161\162\163\164\x75\166\167\170\171\172"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\157\160\x65\x6e\x73\x73\154\137\x72\141\x6e\x64\x6f\155\137\x70\x73\145\165\x64\157\x5f\x62\x79\164\145\163")) { $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); } else { $eugsosgsugioquqe = sha1(wp_rand()); } if (strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai) { $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); } return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\157\x75\162\x53\x61\154\x74\110\145\x72\145" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\x5b\136\x41\x2d\132\x61\x2d\172\x5d"; break; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\133\x5e\60\55\71\135"; break; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\x5b\136\101\x2d\132\x61\55\172\60\55\x39\135"; } $momkisisegqcmmwi = preg_replace("\x2f{$eouekqmooogkoqoo}\x2f", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); while (strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai) { $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); } $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if (!$momkisisegqcmmwi) { $momkisisegqcmmwi = uniqid('', true); } return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\x65\x74\x53\x68\157\162\x74\x4e\x61\x6d\x65"); if (!$ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } } else { $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); } return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\x61\x70\160\x6c\151\x63\141\164\x69\x6f\x6e\x2f\x70\x64\x66": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); break; } return "\144\x61\164\141\x3a{$saqmwwmqiwmkiwaa}\73\x62\x61\163\x65\x36\x34\x2c{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\x20", "\55", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if ($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw)) { return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); } return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\57\x28\x5b\x61\x2d\172\134\x64\x5d\x29\x28\133\x41\55\132\135\x29\x2f", "\57\x28\x5b\136\137\135\51\50\x5b\x41\55\x5a\x5d\x5b\141\55\172\x5d\51\57"], "\44\x31\x5f\x24\x32", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\137", "\40", $sociqikgoyemqaac))); if (isset($sociqikgoyemqaac[0])) { $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); } return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\x5f", "\55", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\x2d", "\x5f", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if ($sekkmwqwqwcayiwg) { $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); } return "\x27{$ycskuuyucyuqisaq}\x27"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; while ($gaeqamemwmwsyukm) { $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); } return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (extension_loaded("\x6f\160\145\x6e\163\x73\x6c")) { $uusmaiomayssaecw = wp_salt("\x6e\157\156\x63\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); } return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\160\145\x6e\163\163\154\x5f\145\x6e\143\x72\x79\x70\x74")) { $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); } return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if ($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\x70\x65\x6e\x73\163\x6c\x5f\x64\x65\143\x72\x79\x70\x74")) { return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\x5c\60"); } return $ewqeaceqiqsywiic; } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\x67\x65\164\116\141\x6d\145\163\x70\x61\x63\145\x4e\141\x6d\x65"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (function_exists("\x73\x74\162\x5f\x65\156\x64\x73\137\x77\x69\x74\x68")) { $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); } else { if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw); $ksaameoqigiaoigg = 0 === substr_compare($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw, -$ykiwomimkkuiigoq, $ykiwomimkkuiigoq); } } return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\x32\x31" => "\41", "\45\x32\x41" => "\x2a", "\45\62\x37" => "\47", "\x25\62\70" => "\x28", "\45\62\x39" => "\51"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) { $ksaameoqigiaoigg = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) === 0; } return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if ($yuyowiyumyysomoy !== false) { $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); } return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\47") : string { if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) { $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\54\40{$oswgusmmccauqika}", array_map("\145\x73\x63\x5f\163\x71\154", $uomewyckeuqoqocu)); } return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\57\50\77\x3c\x21\x5e\51\133\x61\101\145\105\151\111\157\x4f\165\125\135\x2f", '', $sociqikgoyemqaac); if (strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg) { $sociqikgoyemqaac = $uwomkgseoiegeume; } if (!is_string($sociqikgoyemqaac)) { $sociqikgoyemqaac = ''; } return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\x5f") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\173\173{$euwkouuykmaieusi}\175\x7d"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } }
