<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\152\x75\163\x74\137\156\165\x6d\163"; const kgguuaiguasicuwu = "\x6a\165\x73\164\x5f\167\157\x72\x64\163"; const qomikmkkemkswwgc = "\101\105\x53\x2d\x32\65\x36\x2d\103\102\x43"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!(!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw))) { goto cigcsyiesymkuywu; } if (PHP_VERSION_ID >= 80000) { goto saueosiwcgqsmgmk; } $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); goto kgmwmmiemqggaqeq; saueosiwcgqsmgmk: $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); kgmwmmiemqggaqeq: cigcsyiesymkuywu: return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\x2e\56\56") : ?string { $ykiwomimkkuiigoq = abs($ykiwomimkkuiigoq); if (!(strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq)) { goto ugwqwcgoswkkwcee; } $sociqikgoyemqaac = preg_replace("\x2f\x5e\50\56\x7b\x31\54{$ykiwomimkkuiigoq}\175\51\50\134\163\x2e\x2a\174\x24\x29\57\163", "\134\x31{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); ugwqwcgoswkkwcee: return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\xd\12", "\xd", "\xa", "\134\162", "\x5c\x6e", "\x5c\x72\134\x6e"], "\x3c\142\x72\57\x3e", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); aosmakasyommmioc: } kgigsakiwsqqioim: return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\x2a", "\56\52", implode("\x7c", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { goto sgqaaocqgayiigos; } $sogksuscggsicmac = []; goto wmyagwwmquqeyyok; sgqaaocqgayiigos: $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (is_array($sogksuscggsicmac)) { goto swmkkiiauusieuqw; } $sogksuscggsicmac = []; swmkkiiauusieuqw: wmyagwwmquqeyyok: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if (!$uomewyckeuqoqocu) { goto eoawekcguswgyykc; } $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if (!($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac))) { goto mocauoaugmiuacuu; } $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); mocauoaugmiuacuu: eoawekcguswgyykc: return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { goto vgggsmmgmwumikmc; } $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); goto ycomuqussgiacuom; vgggsmmgmwumikmc: foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if (!$eqgoocgaqwqcimie) { goto akymcmmokgskeqiu; } $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; akymcmmokgskeqiu: iwkwesmeiywuuugk: } wwiasiiquqqmmqay: ycomuqussgiacuom: return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\x6d\144\x35", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\60\61\62\63\64\x35\66\x37\70\x39", "\161\162\x73\164\165\x76\x77\170\x79\x7a"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\x6f\x70\x65\156\x73\163\154\137\162\141\x6e\144\157\x6d\137\160\163\145\165\x64\x6f\x5f\x62\171\x74\145\x73")) { goto yuuyqoyguaqsswey; } $eugsosgsugioquqe = sha1(wp_rand()); goto uqekawymqmyaqaao; yuuyqoyguaqsswey: $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); uqekawymqmyaqaao: if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) { goto iwigaaoiqyugwacm; } $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); iwigaaoiqyugwacm: return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\171\157\165\162\x53\141\x6c\x74\x48\x65\x72\x65" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\110\52", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\133\136\x41\x2d\x5a\141\55\172\x5d"; goto yqismiumwaaeqgwu; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\133\136\60\x2d\x39\135"; goto yqismiumwaaeqgwu; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\x5b\x5e\x41\x2d\x5a\141\55\172\x30\x2d\x39\135"; } wusuosaiqosakcqq: yqismiumwaaeqgwu: $momkisisegqcmmwi = preg_replace("\57{$eouekqmooogkoqoo}\x2f", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); iieykwekyukgsias: if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) { goto kaueiekkeciiaswy; } $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); goto iieykwekyukgsias; kaueiekkeciiaswy: $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if ($momkisisegqcmmwi) { goto yiuwqcqesuysmegs; } $momkisisegqcmmwi = uniqid('', true); yiuwqcqesuysmegs: return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { goto kmawikcwmucoyeio; } $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); goto wokoooqeguamsuso; kmawikcwmucoyeio: $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\164\x53\x68\x6f\162\164\116\x61\x6d\145"); if ($ymqmyyeuycgmigyo) { goto mauoymckskucuemc; } $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); mauoymckskucuemc: wokoooqeguamsuso: return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\141\160\160\x6c\151\x63\141\x74\151\x6f\x6e\57\160\144\146": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); goto ykwmsugmueoosyka; } uiqqoqeguqksakak: ykwmsugmueoosyka: return "\144\x61\164\141\72{$saqmwwmqiwmkiwaa}\73\x62\141\163\145\66\x34\x2c{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\40", "\55", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) { goto iggimwweuooskmqi; } return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); iggimwweuooskmqi: return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\57\50\133\141\55\172\134\x64\x5d\51\50\x5b\x41\x2d\x5a\135\x29\x2f", "\57\x28\133\136\137\x5d\x29\50\x5b\x41\x2d\x5a\x5d\133\141\x2d\172\135\x29\x2f"], "\x24\x31\137\x24\62", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\x5f", "\x20", $sociqikgoyemqaac))); if (!isset($sociqikgoyemqaac[0])) { goto oieyimeswqquigei; } $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); oieyimeswqquigei: return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\137", "\x2d", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\x2d", "\x5f", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if (!$sekkmwqwqwcayiwg) { goto sieqieowwakamuei; } $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); sieqieowwakamuei: return "\47{$ycskuuyucyuqisaq}\x27"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; smsgocwimiqgewse: if (!$gaeqamemwmwsyukm) { goto qcssqeugkggmssuq; } $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); goto smsgocwimiqgewse; qcssqeugkggmssuq: return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (!extension_loaded("\x6f\x70\145\x6e\163\x73\x6c")) { goto qksoacweieioouuu; } $uusmaiomayssaecw = wp_salt("\156\x6f\156\x63\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); qksoacweieioouuu: return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\160\145\156\163\163\154\137\x65\x6e\x63\x72\x79\160\x74"))) { goto cgummkmwkkyaomqq; } $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); cgummkmwkkyaomqq: return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\157\x70\x65\156\x73\x73\x6c\137\x64\145\143\162\x79\x70\164"))) { goto mygyyacgawkwoaak; } return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\x5c\x30"); mygyyacgawkwoaak: return $ewqeaceqiqsywiic; } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\116\x61\155\x65\163\x70\141\x63\x65\116\141\155\x65"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (function_exists("\163\x74\162\x5f\x65\x6e\x64\163\x5f\167\151\164\150")) { goto agwucmswyeecgiwk; } if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto mqecqicimeusigcs; } $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw); $ksaameoqigiaoigg = 0 === substr_compare($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw, -$ykiwomimkkuiigoq, $ykiwomimkkuiigoq); mqecqicimeusigcs: goto wocmissqwqoccqgq; agwucmswyeecgiwk: $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); wocmissqwqoccqgq: return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\62\61" => "\41", "\x25\x32\x41" => "\52", "\45\x32\67" => "\47", "\x25\x32\70" => "\50", "\x25\62\x39" => "\x29"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto ouyqacmgssaeeyaq; } $ksaameoqigiaoigg = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) === 0; ouyqacmgssaeeyaq: return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if (!($yuyowiyumyysomoy !== false)) { goto auwsmkeaswcqwkiy; } $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); auwsmkeaswcqwkiy: return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\47") : string { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto ywymuuggyeqggyqo; } $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\54\x20{$oswgusmmccauqika}", array_map("\145\x73\143\137\163\x71\x6c", $uomewyckeuqoqocu)); ywymuuggyeqggyqo: return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, int $aoqagsqecokqqwqg = 5) : string { $uwomkgseoiegeume = preg_replace("\x2f\x28\77\74\41\x5e\x29\x5b\x61\x41\x65\x45\x69\111\157\x4f\165\x55\x5d\x2f", '', $sociqikgoyemqaac); if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) { goto wyouyacqwaoscwco; } $sociqikgoyemqaac = $uwomkgseoiegeume; wyouyacqwaoscwco: if (is_string($sociqikgoyemqaac)) { goto kuiimqmaogsaoimi; } $sociqikgoyemqaac = ''; kuiimqmaogsaoimi: return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\137") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\173\x7b{$euwkouuykmaieusi}\x7d\175"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } }
