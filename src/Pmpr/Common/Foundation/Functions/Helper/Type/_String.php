<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19cd8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\x6a\x75\x73\x74\137\156\x75\x6d\x73"; const kgguuaiguasicuwu = "\x6a\x75\163\164\137\167\x6f\x72\x64\163"; const qomikmkkemkswwgc = "\x41\105\x53\55\x32\65\66\55\103\102\103"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!(!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw))) { goto egooqaeyqemyyueq; } if (PHP_VERSION_ID >= 80000) { goto ckgwkegaqysuugsa; } $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); goto waqycyookeekysyw; ckgwkegaqysuugsa: $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); waqycyookeekysyw: egooqaeyqemyyueq: return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\56\x2e") : ?string { $ykiwomimkkuiigoq = abs($ykiwomimkkuiigoq); if (!(strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq)) { goto ugckgwumakkmewem; } $sociqikgoyemqaac = preg_replace("\x2f\136\50\56\173\x31\x2c{$ykiwomimkkuiigoq}\x7d\51\50\134\x73\56\x2a\x7c\x24\51\x2f\163", "\134\61{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); ugckgwumakkmewem: return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\15\xa", "\15", "\12", "\134\x72", "\134\x6e", "\134\x72\x5c\156"], "\74\x62\162\57\76", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); eqcwgomkucsikows: } kkcgaqkugmqqeyka: return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\134\52", "\56\52", implode("\174", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { goto wayyaaaewkgkyayk; } $sogksuscggsicmac = []; goto ameikuoiuqcsucgo; wayyaaaewkgkyayk: $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (is_array($sogksuscggsicmac)) { goto beesceygkkecsask; } $sogksuscggsicmac = []; beesceygkkecsask: ameikuoiuqcsucgo: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if (!$uomewyckeuqoqocu) { goto gqiuuyygewuqosqe; } $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if (!($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac))) { goto awewuysgsucyuiqu; } $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); awewuysgsucyuiqu: gqiuuyygewuqosqe: return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { goto siaaikmageayqqsu; } $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); goto uckeiuaoqmigcksq; siaaikmageayqqsu: foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if (!$eqgoocgaqwqcimie) { goto cqwcweokuiayeicq; } $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; cqwcweokuiayeicq: oykgoscoqcimcsqg: } egieyaugcwckokym: uckeiuaoqmigcksq: return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\x6d\x64\65", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\60\x31\x32\x33\64\x35\66\x37\x38\x39", "\161\162\x73\164\165\166\167\170\x79\172"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\x6f\160\x65\x6e\x73\163\x6c\137\162\x61\x6e\144\157\x6d\x5f\x70\163\145\x75\144\157\137\142\171\x74\x65\x73")) { goto wqwoeeeqwccksawi; } $eugsosgsugioquqe = sha1(wp_rand()); goto aymooygqycguekai; wqwoeeeqwccksawi: $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); aymooygqycguekai: if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) { goto sweakucgmumqsakg; } $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); sweakucgmumqsakg: return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\157\x75\x72\x53\x61\x6c\x74\x48\145\x72\x65" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\x48\52", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\x5b\x5e\101\x2d\x5a\x61\x2d\172\135"; goto scuegucswagswcio; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\133\136\60\x2d\x39\x5d"; goto scuegucswagswcio; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\133\x5e\101\x2d\132\x61\55\x7a\60\55\x39\x5d"; } wiumcqqogqsqyaqo: scuegucswagswcio: $momkisisegqcmmwi = preg_replace("\57{$eouekqmooogkoqoo}\x2f", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); ecooysegquiascci: if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) { goto amyuqgaegykwgcgk; } $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); goto ecooysegquiascci; amyuqgaegykwgcgk: $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if ($momkisisegqcmmwi) { goto smgwweikoueukkom; } $momkisisegqcmmwi = uniqid('', true); smgwweikoueukkom: return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { goto quyumosiyumgeqao; } $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); goto swysacsiqeaqkeik; quyumosiyumgeqao: $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\x67\145\x74\123\150\x6f\162\x74\x4e\141\x6d\x65"); if ($ymqmyyeuycgmigyo) { goto wekosqocigkegwgq; } $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); wekosqocigkegwgq: swysacsiqeaqkeik: return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\141\160\160\x6c\x69\x63\x61\164\151\157\156\x2f\x70\144\x66": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); goto muiuuoeuoqqqqycq; } meeeuaakuscgcomc: muiuuoeuoqqqqycq: return "\x64\x61\164\141\x3a{$saqmwwmqiwmkiwaa}\73\x62\x61\163\x65\x36\64\x2c{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\40", "\55", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) { goto goemgwueaswqayue; } return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); goemgwueaswqayue: return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\x2f\x28\133\x61\55\172\x5c\x64\x5d\x29\50\133\x41\55\132\x5d\51\x2f", "\57\50\133\136\x5f\x5d\x29\x28\x5b\101\55\132\x5d\x5b\x61\x2d\x7a\x5d\51\x2f"], "\x24\x31\137\44\x32", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\x20", '', ucwords(str_replace("\137", "\x20", $sociqikgoyemqaac))); if (!isset($sociqikgoyemqaac[0])) { goto quecaykkiwwgqoay; } $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); quecaykkiwwgqoay: return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\137", "\55", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\137", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if (!$sekkmwqwqwcayiwg) { goto uymqegkssemcqegk; } $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); uymqegkssemcqegk: return "\x27{$ycskuuyucyuqisaq}\47"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; yakgkywayukuuoeo: if (!$gaeqamemwmwsyukm) { goto mmmaegqwqsqomcso; } $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); goto yakgkywayukuuoeo; mmmaegqwqsqomcso: return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (!extension_loaded("\x6f\160\145\x6e\x73\163\x6c")) { goto gkiswiyesyseqgyi; } $uusmaiomayssaecw = wp_salt("\156\157\x6e\x63\x65"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); gkiswiyesyseqgyi: return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\160\145\x6e\163\x73\x6c\x5f\145\156\143\162\x79\x70\x74"))) { goto mwqgcamgeuigkmag; } $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); mwqgcamgeuigkmag: return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\160\x65\156\163\163\x6c\x5f\144\145\143\162\171\x70\164"))) { goto psgawyoyqymeaqmg; } return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\134\60"); psgawyoyqymeaqmg: return $ewqeaceqiqsywiic; } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\116\x61\155\x65\x73\x70\x61\x63\x65\x4e\141\155\145"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (function_exists("\x73\164\162\137\x65\x6e\x64\x73\137\x77\151\164\x68")) { goto ikccqyauagueyquo; } if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto wwsimimccosesome; } $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw); $ksaameoqigiaoigg = 0 === substr_compare($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw, -$ykiwomimkkuiigoq, $ykiwomimkkuiigoq); wwsimimccosesome: goto wmgwiaksugguumki; ikccqyauagueyquo: $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); wmgwiaksugguumki: return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\62\x31" => "\x21", "\x25\x32\x41" => "\52", "\45\62\x37" => "\x27", "\45\x32\x38" => "\50", "\45\62\71" => "\51"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto eiwsqkiauqoseceu; } $ksaameoqigiaoigg = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) === 0; eiwsqkiauqoseceu: return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if (!($yuyowiyumyysomoy !== false)) { goto meuauqksicgeyqci; } $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); meuauqksicgeyqci: return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\x27") : string { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto ycwuaycumimegeaw; } $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\54\40{$oswgusmmccauqika}", array_map("\145\x73\143\x5f\163\161\154", $uomewyckeuqoqocu)); ycwuaycumimegeaw: return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\57\x28\x3f\74\x21\136\51\x5b\141\x41\145\x45\151\111\x6f\117\165\125\135\x2f", '', $sociqikgoyemqaac); if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) { goto emcwccgymecyuwog; } $sociqikgoyemqaac = $uwomkgseoiegeume; emcwccgymecyuwog: if (is_string($sociqikgoyemqaac)) { goto qcmugwqioeggciuq; } $sociqikgoyemqaac = ''; qcmugwqioeggciuq: return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\x5f") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\173\x7b{$euwkouuykmaieusi}\175\175"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } }
