<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _String extends Common { const qmaymycqykgikgqw = "\152\165\x73\x74\137\156\165\155\x73"; const kgguuaiguasicuwu = "\x6a\165\163\x74\137\x77\157\x72\144\x73"; const qomikmkkemkswwgc = "\x41\105\x53\x2d\62\65\x36\55\x43\102\x43"; public function skksumsyamssouqc(?string $wokkuqgcqcyuaiko, ?string $ekwsasieesaqcsiw) : bool|int { $myagqecycsaiyqsk = false; if (!(!empty($wokkuqgcqcyuaiko) && !empty($ekwsasieesaqcsiw))) { goto gquyeowwseuycuoq; } if (PHP_VERSION_ID >= 80000) { goto uiakqoyqmcwokgse; } $myagqecycsaiyqsk = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); goto oksimyciqsugcami; uiakqoyqmcwokgse: $myagqecycsaiyqsk = str_contains($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); oksimyciqsugcami: gquyeowwseuycuoq: return $myagqecycsaiyqsk; } public function kogyygyqqyqcioeg(?string $sociqikgoyemqaac, int $ykiwomimkkuiigoq, string $qmeuaeiseuacgiqc = "\56\56\x2e") : ?string { $ykiwomimkkuiigoq = abs($ykiwomimkkuiigoq); if (!(strlen($sociqikgoyemqaac) > $ykiwomimkkuiigoq)) { goto uecycmeaoqgqcomm; } $sociqikgoyemqaac = preg_replace("\57\x5e\x28\x2e\173\61\54{$ykiwomimkkuiigoq}\175\51\x28\134\x73\56\x2a\174\x24\x29\57\163", "\134\61{$qmeuaeiseuacgiqc}", $sociqikgoyemqaac); uecycmeaoqgqcomm: return $sociqikgoyemqaac; } public function nl2br($sociqikgoyemqaac) : string { return (string) str_replace(["\xd\xa", "\xd", "\12", "\x5c\x72", "\134\x6e", "\x5c\162\x5c\156"], "\x3c\142\x72\57\x3e", $sociqikgoyemqaac); } public function qquwggyuqouqumam(string $cmwygeyygwqaemaq, array $kqmcoiicsmgwaisg = []) : string { foreach ($kqmcoiicsmgwaisg as $iwiewowoqmoekyqi => $moyaaaascoeowegu) { $cmwygeyygwqaemaq = str_replace(sprintf(Constants::gqyiyqoweswesamk, $iwiewowoqmoekyqi), $moyaaaascoeowegu, $cmwygeyygwqaemaq); wkokasiqoeycyukq: } siiwoymcomqegmya: return $cmwygeyygwqaemaq; } public function csqkegwecgkgyaqe(array $uomewyckeuqoqocu = []) { return str_replace("\x5c\52", "\56\x2a", implode("\174", array_unique($uomewyckeuqoqocu))); } public function queuakuqucciemcc(string $sociqikgoyemqaac = '', int $oackocuockesooug = 0, bool $xkqaigkogigocask = true, int $gquaqgsmiuqsaoum = 512) : array { try { if ($sociqikgoyemqaac) { goto qioeuukaqkcsiiwk; } $sogksuscggsicmac = []; goto cycwiouaowuswkmk; qioeuukaqkcsiiwk: $sogksuscggsicmac = json_decode($sociqikgoyemqaac, $xkqaigkogigocask, $gquaqgsmiuqsaoum, JSON_THROW_ON_ERROR | $oackocuockesooug); if (is_array($sogksuscggsicmac)) { goto cgqmyikikqgmksgg; } $sogksuscggsicmac = []; cgqmyikikqgmksgg: cycwiouaowuswkmk: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function wegeuqkaeuusoike(array $uomewyckeuqoqocu = [], int $qiouiwasaauyaaue = 0, bool $sekkmwqwqwcayiwg = false, int $gquaqgsmiuqsaoum = 512) : string { $sogksuscggsicmac = ''; if (!$uomewyckeuqoqocu) { goto sguosuigwgwkikgs; } $sogksuscggsicmac = wp_json_encode($uomewyckeuqoqocu, $qiouiwasaauyaaue, $gquaqgsmiuqsaoum); if (!($sekkmwqwqwcayiwg && is_string($sogksuscggsicmac))) { goto aoiwocgacociakoy; } $sogksuscggsicmac = htmlspecialchars($sogksuscggsicmac, ENT_QUOTES); aoiwocgacociakoy: sguosuigwgwkikgs: return $sogksuscggsicmac; } public function wkyacaaqicyakocs(array $uomewyckeuqoqocu = [], string $uusmaiomayssaecw = '', string $geqcesmqwkeayoiu = '') : string { $ksaameoqigiaoigg = ''; if ($uusmaiomayssaecw) { goto vkmscascaoysaqoc; } $ksaameoqigiaoigg = implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu); goto soskeqqausokwugo; vkmscascaoysaqoc: foreach ($uomewyckeuqoqocu as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$uusmaiomayssaecw] ?? ''; if (!$eqgoocgaqwqcimie) { goto amkeeqecmwsmwqma; } $ksaameoqigiaoigg .= $eqgoocgaqwqcimie . $geqcesmqwkeayoiu; amkeeqecmwsmwqma: wgkamcmqescgqcyw: } ycyueqmkqyycmaus: soskeqqausokwugo: return rtrim($ksaameoqigiaoigg, $geqcesmqwkeayoiu); } public function scramble(string $sociqikgoyemqaac) : string { $ykiwomimkkuiigoq = 16; $sociqikgoyemqaac = hash("\x6d\144\x35", $sociqikgoyemqaac); $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26); $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq); $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT); return strtr($eugsosgsugioquqe, "\x30\61\x32\x33\64\65\x36\x37\70\x39", "\161\162\x73\164\165\x76\x77\x78\x79\172"); } public function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string { if (function_exists("\x6f\160\145\156\163\163\154\137\162\141\156\144\157\x6d\137\x70\163\145\165\144\x6f\x5f\x62\171\164\145\x73")) { goto ioqmgaeuiicymgky; } $eugsosgsugioquqe = sha1(wp_rand()); goto ywmcuouqguawueqm; ioqmgaeuiicymgky: $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20)); ywmcuouqguawueqm: if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) { goto gkoaywyuyqemyiqw; } $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai); gkoaywyuyqemyiqw: return $eugsosgsugioquqe; } public function uniqid($eomsgokgyssmwmai = 8, $ccamueccusigaaio = Constants::ygoseweigiigswiu) { $sosyakcgakmeueii = md5("\x79\157\x75\x72\x53\141\x6c\164\x48\x65\x72\145" . uniqid('', true)); $asakkwwsyqsqqkkw = pack("\x48\x2a", $sosyakcgakmeueii); $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw); switch ($ccamueccusigaaio) { case Constants::kgguuaiguasicuwu: $eouekqmooogkoqoo = "\x5b\136\101\55\132\141\55\x7a\x5d"; goto gcgsyyiismkwoyck; case Constants::qmaymycqykgikgqw: $eouekqmooogkoqoo = "\x5b\136\x30\55\x39\x5d"; goto gcgsyyiismkwoyck; case Constants::ygoseweigiigswiu: default: $eouekqmooogkoqoo = "\x5b\x5e\101\x2d\132\x61\55\x7a\x30\55\x39\135"; } aswikmsouwkequca: gcgsyyiismkwoyck: $momkisisegqcmmwi = preg_replace("\x2f{$eouekqmooogkoqoo}\x2f", '', $umkokecyamcwcqwe); $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai)); qywueycgouwamkso: if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) { goto ycgsmkkioyqqawyk; } $momkisisegqcmmwi .= $this->uniqid($eomsgokgyssmwmai); goto qywueycgouwamkso; ycgsmkkioyqqawyk: $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai); if ($momkisisegqcmmwi) { goto wecgakiimqymkmiy; } $momkisisegqcmmwi = uniqid('', true); wecgakiimqymkmiy: return $momkisisegqcmmwi; } public function mkwcwqkqeqkqyggc($egkyssmuqcwaciya) { if (is_object($egkyssmuqcwaciya)) { goto qaykqsyoyscaqsce; } $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); goto cuqwswgmwuwmgkwe; qaykqsyoyscaqsce: $ymqmyyeuycgmigyo = $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\147\145\x74\123\150\157\x72\x74\116\141\x6d\x65"); if ($ymqmyyeuycgmigyo) { goto uggisigeswwyqmqi; } $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya)); $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya); uggisigeswwyqmqi: cuqwswgmwuwmgkwe: return $ymqmyyeuycgmigyo; } public function uiyouwwuscecumsg(string $sociqikgoyemqaac, string $saqmwwmqiwmkiwaa) : string { $sociqikgoyemqaac = base64_encode($sociqikgoyemqaac); switch ($saqmwwmqiwmkiwaa) { case "\141\x70\x70\x6c\151\143\x61\164\x69\157\156\x2f\x70\144\x66": $sociqikgoyemqaac = chunk_split($sociqikgoyemqaac); goto twusqqkmqgswisei; } ysykemiscamquoce: twusqqkmqgswisei: return "\x64\x61\x74\141\72{$saqmwwmqiwmkiwaa}\x3b\x62\141\163\x65\66\x34\x2c{$sociqikgoyemqaac}"; } public function ogimogiceeekegoi($sociqikgoyemqaac) : ?string { return $this->cyakegkcqemuyaey($this->kwuyaykukcmaqggg($sociqikgoyemqaac)); } public function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string { return str_replace("\x20", "\55", $this->ywuiyekyoaowmuss($this->kwuyaykukcmaqggg($sociqikgoyemqaac))); } public function qoqowykumameucwa($sociqikgoyemqaac) : ?string { return $this->snake2camel($this->cyakegkcqemuyaey($sociqikgoyemqaac)); } public function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw) { if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) { goto oaimckymswkqoysq; } return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq); oaimckymswkqoysq: return $sociqikgoyemqaac; } public function kwuyaykukcmaqggg($sociqikgoyemqaac) : string { return strtolower(preg_replace(["\57\50\133\x61\x2d\x7a\x5c\144\135\51\50\x5b\101\55\132\x5d\51\x2f", "\x2f\x28\x5b\x5e\137\135\51\50\133\101\55\132\135\x5b\x61\55\x7a\x5d\x29\x2f"], "\44\x31\137\44\62", $sociqikgoyemqaac)); } public function snake2camel($sociqikgoyemqaac) : ?string { $sociqikgoyemqaac = str_replace("\x20", '', ucwords(str_replace("\137", "\40", $sociqikgoyemqaac))); if (!isset($sociqikgoyemqaac[0])) { goto mwmwmswiueocaeug; } $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]); mwmwmswiueocaeug: return $sociqikgoyemqaac; } public function ywuiyekyoaowmuss($sociqikgoyemqaac) : string { return strtolower(str_replace("\137", "\x2d", $sociqikgoyemqaac)); } public function cyakegkcqemuyaey($sociqikgoyemqaac) : string { return strtolower(str_replace("\55", "\137", $sociqikgoyemqaac)); } public function amkcmaguoecyiscg($ycskuuyucyuqisaq, bool $sekkmwqwqwcayiwg = true) : string { if (!$sekkmwqwqwcayiwg) { goto ukugqakgsqqmgege; } $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq); ukugqakgsqqmgege: return "\47{$ycskuuyucyuqisaq}\47"; } public function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg) { $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg; $gaeqamemwmwsyukm = 1; gcgwqksqskumiumq: if (!$gaeqamemwmwsyukm) { goto awcgiyqmoemqumeg; } $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm); goto gcgwqksqskumiumq; awcgiyqmoemqumeg: return $iosuwkkwwioumeqg; } private function aiqugukmqusggokw() : array { $uusmaiomayssaecw = $imiwcieyucysgsck = ''; if (!extension_loaded("\157\x70\145\x6e\x73\x73\154")) { goto emiugswuagoacakq; } $uusmaiomayssaecw = wp_salt("\x6e\x6f\x6e\x63\145"); $qyeakkwsgqowiiue = openssl_cipher_iv_length(self::qomikmkkemkswwgc); $imiwcieyucysgsck = substr(md5($uusmaiomayssaecw), 0, $qyeakkwsgqowiiue); emiugswuagoacakq: return [$uusmaiomayssaecw, $imiwcieyucysgsck]; } public function encrypt($aookoykkmqggiqei) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\x70\x65\156\163\x73\154\137\x65\156\143\x72\171\x70\164"))) { goto cywmgwogisiyymoi; } $uyygoeqicauysaec = openssl_encrypt($aookoykkmqggiqei, self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck); return base64_encode($uyygoeqicauysaec); cywmgwogisiyymoi: return $aookoykkmqggiqei; } public function decrypt($ewqeaceqiqsywiic) : string { [$uusmaiomayssaecw, $imiwcieyucysgsck] = $this->aiqugukmqusggokw(); if (!($uusmaiomayssaecw && $imiwcieyucysgsck && function_exists("\x6f\160\x65\x6e\x73\x73\x6c\x5f\x64\x65\143\x72\x79\x70\x74"))) { goto qkygewgkycsuawgm; } return rtrim(openssl_decrypt(base64_decode($ewqeaceqiqsywiic), self::qomikmkkemkswwgc, $uusmaiomayssaecw, OPENSSL_RAW_DATA, $imiwcieyucysgsck), "\134\x30"); qkygewgkycsuawgm: return $ewqeaceqiqsywiic; } public function aisesaskgsuywqqy($egkyssmuqcwaciya) : string { return $this->cmmaeeeoaaeqqqmm($egkyssmuqcwaciya, "\x67\145\164\116\x61\155\x65\x73\160\x61\143\x65\116\x61\x6d\x65"); } public function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (function_exists("\x73\164\162\137\x65\x6e\144\x73\x5f\x77\151\164\x68")) { goto kcesecosoiwocymi; } if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto omagsowousaeaiou; } $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw); $ksaameoqigiaoigg = 0 === substr_compare($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw, -$ykiwomimkkuiigoq, $ykiwomimkkuiigoq); omagsowousaeaiou: goto ckyamgmuoswcaiak; kcesecosoiwocymi: $ksaameoqigiaoigg = str_ends_with($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw); ckyamgmuoswcaiak: return $ksaameoqigiaoigg; } public function usemqqucksuocoeq($sociqikgoyemqaac) : string { $ukokkqkkkggcmksy = ["\x25\62\x31" => "\x21", "\45\62\101" => "\x2a", "\x25\x32\x37" => "\47", "\x25\62\x38" => "\50", "\45\62\x39" => "\51"]; return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy); } public function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool { $ksaameoqigiaoigg = false; if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) { goto umosyyqqcuqiscco; } $ksaameoqigiaoigg = strpos($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) === 0; umosyyqqcuqiscco: return $ksaameoqigiaoigg; } public function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq) { $yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy); if (!($yuyowiyumyysomoy !== false)) { goto qauuogkoosmuggas; } $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy); $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq); qauuogkoosmuggas: return $ycskuuyucyuqisaq; } public function eqyqgywiseiwqocc($uomewyckeuqoqocu, string $oswgusmmccauqika = "\x27") : string { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto wwcougcmsuqogqyc; } $uomewyckeuqoqocu = implode("{$oswgusmmccauqika}\x2c\40{$oswgusmmccauqika}", array_map("\x65\163\143\x5f\x73\161\154", $uomewyckeuqoqocu)); wwcougcmsuqogqyc: return $uomewyckeuqoqocu; } public function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5) { $uwomkgseoiegeume = preg_replace("\x2f\x28\x3f\74\x21\136\x29\133\141\x41\145\x45\151\111\x6f\117\x75\x55\x5d\57", '', $sociqikgoyemqaac); if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) { goto mcguyegywqyasmii; } $sociqikgoyemqaac = $uwomkgseoiegeume; mcguyegywqyasmii: return $sociqikgoyemqaac; } public function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string { $aiieyweysaukqemc = $this->aisesaskgsuywqqy($egkyssmuqcwaciya); $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc); } public function yaaoeasygeggswcq(string $uusmaiomayssaecw, string $yuwymayicwwqiske = "\137") : string { return $this->wkgaescyescmucmg($uusmaiomayssaecw, $yuwymayicwwqiske) ? $uusmaiomayssaecw : $yuwymayicwwqiske . $uusmaiomayssaecw; } public function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string { return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2)); } public function eyscwqmkygoioemu(string $wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso) : string { $eyagkkkqkwcuygso = array_map(static function ($euwkouuykmaieusi) { return "\x7b\x7b{$euwkouuykmaieusi}\x7d\x7d"; }, $eyagkkkqkwcuygso); return sprintf($wamcomkuwysqgwgk, ...$eyagkkkqkwcuygso); } }
