<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\x6a\165\x73\164\x5f\156\x75\155\x73"; const kgguuaiguasicuwu = "\152\x75\163\x74\x5f\167\x6f\x72\144\x73"; const qomikmkkemkswwgc = "\101\105\x53\x2d\x32\x35\66\x2d\103\102\103"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!(!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw))) { goto wkgqkogygougamck; } if (PHP_VERSION_ID >= 80000) { goto ayyowoawokgaayaw; } $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); goto awmmoggkmyueoasu; ayyowoawokgaayaw: $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); awmmoggkmyueoasu: wkgqkogygougamck: return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\x2e\x2e") : ?string { $ykiwomimkkuiigoq = abs($ykiwomimkkuiigoq); if (!(strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq)) { goto yukcaoieiswcmemu; } $sociqikgoyemqaac = preg_replace("\x2f\136\50\56\x7b\x31\x2c{$ykiwomimkkuiigoq}\175\x29\50\134\163\x2e\x2a\x7c\x24\x29\57\x73", "\134\x31{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); yukcaoieiswcmemu: return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\xd\12", "\15", "\xa", "\x5c\x72", "\134\x6e", "\134\x72\134\156"], "\74\142\162\x2f\76", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); ggywskiemyoaeqaw: } wqmqkiimcwkskqya: return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\52", "\x2e\x2a", implode("\x7c", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { goto swiiegskwgeogcoq; } $sogksuscggsicmac = []; goto mgmiwyeiyuecmaso; swiiegskwgeogcoq: $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (is_array($sogksuscggsicmac)) { goto owkkogeoyukumywq; } $sogksuscggsicmac = []; owkkogeoyukumywq: mgmiwyeiyuecmaso: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if (!$uomewyckeuqoqocu) { goto ocykqucykqysewkc; } $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if (!($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac))) { goto gaokasygggaaywkq; } $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); gaokasygggaaywkq: ocykqucykqysewkc: return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { goto cmwgwwgycwmmssak; } $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); goto sqsawqgiyogosigw; cmwgwwgycwmmssak: foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if (!$eqgoocgaqwqcimie) { goto iyayoqqcasquscwy; } $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; iyayoqqcasquscwy: osiuigcwawuayisk: } gwggseoomcggqiim: sqsawqgiyogosigw: return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\155\144\65", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\x30", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\x30\x31\62\63\64\65\66\x37\x38\x39", "\x71\x72\x73\164\x75\x76\x77\x78\x79\172"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\157\160\145\156\163\163\x6c\137\162\141\x6e\x64\x6f\155\x5f\x70\x73\145\x75\x64\x6f\137\142\171\x74\145\x73")) { goto iciwkuugsssieams; } $eugsosgsugioquqe = sha1(wp_rand()); goto weoyykiwcagymoms; iciwkuugsssieams: $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); weoyykiwcagymoms: if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) { goto koksqyyscgosmgua; } $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); koksqyyscgosmgua: return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\157\165\x72\123\x61\154\164\x48\x65\x72\145" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\110\52", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\x5b\x5e\101\x2d\132\141\x2d\172\x5d"; goto yyckoawemeecakki; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\x5b\136\x30\55\71\135"; goto yyckoawemeecakki; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\133\136\101\x2d\132\x61\x2d\x7a\x30\55\71\x5d"; } qyisaqamyeauiyws: yyckoawemeecakki: $momkisisegqcmmwi = preg_replace("\57{$eouekqmooogkoqoo}\57", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); qsoeqiaiaaksgcik: if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) { goto umkuoiowcowgywug; } $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); goto qsoeqiaiaaksgcik; umkuoiowcowgywug: $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if ($momkisisegqcmmwi) { goto iycmcucyyqgqaiwa; } $momkisisegqcmmwi = uniqid('', true); iycmcucyyqgqaiwa: return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { goto waqycyookeekysyw; } $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); goto egooqaeyqemyyueq; waqycyookeekysyw: $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\x67\x65\164\123\x68\x6f\x72\164\116\141\x6d\x65"); if ($ymqmyyeuycgmigyo) { goto ckgwkegaqysuugsa; } $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); ckgwkegaqysuugsa: egooqaeyqemyyueq: return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\x61\x70\x70\x6c\151\x63\141\x74\151\x6f\156\57\160\144\146": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); goto ugckgwumakkmewem; } kkcgaqkugmqqeyka: ugckgwumakkmewem: return "\144\x61\164\141\x3a{$saqmwwmqiwmkiwaa}\x3b\142\x61\x73\x65\x36\x34\x2c{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\x20", "\x2d", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) { goto eqcwgomkucsikows; } return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); eqcwgomkucsikows: return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\57\x28\133\141\x2d\172\x5c\x64\135\51\50\x5b\x41\55\132\x5d\x29\57", "\57\50\x5b\136\137\x5d\x29\x28\x5b\x41\x2d\x5a\x5d\x5b\141\55\172\x5d\x29\57"], "\44\x31\137\44\62", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\137", "\x20", $sociqikgoyemqaac))); if (!isset($sociqikgoyemqaac[0])) { goto beesceygkkecsask; } $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); beesceygkkecsask: return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\x5f", "\55", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\137", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if (!$sekkmwqwqwcayiwg) { goto wayyaaaewkgkyayk; } $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); wayyaaaewkgkyayk: return "\x27{$ycskuuyucyuqisaq}\x27"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; awewuysgsucyuiqu: if (!$gaeqamemwmwsyukm) { goto ameikuoiuqcsucgo; } $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); goto awewuysgsucyuiqu; ameikuoiuqcsucgo: return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (!extension_loaded("\157\x70\x65\x6e\x73\163\x6c")) { goto gqiuuyygewuqosqe; } $uusmaiomayssaecw = wp_salt("\x6e\157\156\x63\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); gqiuuyygewuqosqe: return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\x70\145\x6e\163\x73\x6c\x5f\145\x6e\143\x72\171\160\164"))) { goto egieyaugcwckokym; } $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); egieyaugcwckokym: return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\160\145\x6e\163\163\154\137\x64\x65\x63\x72\171\x70\x74"))) { goto oykgoscoqcimcsqg; } return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\x5c\x30"); oykgoscoqcimcsqg: return $ewqeaceqiqsywiic; } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\116\141\x6d\145\x73\160\141\x63\145\116\141\x6d\x65"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (function_exists("\163\164\x72\137\145\x6e\144\163\x5f\167\151\x74\x68")) { goto siaaikmageayqqsu; } if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto cqwcweokuiayeicq; } $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw); $ksaameoqigiaoigg = 0 === substr_compare($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw, -$ykiwomimkkuiigoq, $ykiwomimkkuiigoq); cqwcweokuiayeicq: goto uckeiuaoqmigcksq; siaaikmageayqqsu: $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); uckeiuaoqmigcksq: return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\x32\x31" => "\41", "\x25\62\101" => "\x2a", "\x25\62\67" => "\x27", "\x25\x32\x38" => "\x28", "\x25\62\x39" => "\51"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto wqwoeeeqwccksawi; } $ksaameoqigiaoigg = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) === 0; wqwoeeeqwccksawi: return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if (!($yuyowiyumyysomoy !== false)) { goto aymooygqycguekai; } $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); aymooygqycguekai: return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\47") : string { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto sweakucgmumqsakg; } $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\54\40{$oswgusmmccauqika}", array_map("\145\163\x63\x5f\x73\161\x6c", $uomewyckeuqoqocu)); sweakucgmumqsakg: return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\57\50\77\x3c\x21\x5e\51\133\x61\x41\145\x45\x69\111\157\x4f\x75\x55\x5d\57", '', $sociqikgoyemqaac); if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) { goto scuegucswagswcio; } $sociqikgoyemqaac = $uwomkgseoiegeume; scuegucswagswcio: if (is_string($sociqikgoyemqaac)) { goto wiumcqqogqsqyaqo; } $sociqikgoyemqaac = ''; wiumcqqogqsqyaqo: return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\x5f") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\x7b\x7b{$euwkouuykmaieusi}\175\x7d"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } }
