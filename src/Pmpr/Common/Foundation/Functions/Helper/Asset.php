<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705a37ba6a79             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Foundation; class Asset extends Common { public function wyouuiscukymcuua(string $eueuqacmukymcyya) : bool { return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->kwcmyyyeiegememu($eueuqacmukymcyya); } public function qkyugogwegiuiime(string $eueuqacmukymcyya, bool $uksimyckcoyyemsk = true) { $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $qcsieyqqegaoocks->qkyugogwegiuiime($eueuqacmukymcyya); if ($uksimyckcoyyemsk) { $qcsieyqqegaoocks->iqmcmgkyssqgoqok($eueuqacmukymcyya); } } public function saisougiwmauksiy(string $eueuqacmukymcyya, bool $uksimyckcoyyemsk = true) { $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $qcsieyqqegaoocks->saisougiwmauksiy($eueuqacmukymcyya); if ($uksimyckcoyyemsk) { $qcsieyqqegaoocks->cawwmsmyseesuyee($eueuqacmukymcyya); } } public function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '') : bool { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\167\160\137\141\144\144\x5f\x69\156\x6c\151\156\145\137\163\x74\171\154\x65\x5f\144\141\164\x61", $icwicymcioeyeyek, $eueuqacmukymcyya); return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->oiqqguakwcieaioo($eueuqacmukymcyya, $icwicymcioeyeyek); } public function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\x61\146\x74\145\162") : bool { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\167\x70\137\141\144\x64\x5f\x69\156\x6c\x69\x6e\x65\x5f\x73\143\x72\151\160\x74\137\x64\141\x74\x61", $icwicymcioeyeyek, $eueuqacmukymcyya); return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->yocqwqycwegayowg($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa); } public function aeiaiwyqyeoswqsc($wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii) : string { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi, $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq] ?? "\x66\165\x6c\154"); } else { $ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy] = false; $wkaqekwwgqsqwcoi = $this->amosaeggmeksgwea()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $ywmkwiwkosakssii); } return $wkaqekwwgqsqwcoi; } public function okeawskgcssugqkk(string $umawqwoyymwaicas) : string { $eeamcawaiqocomwy = $kuoicyiuewoqyaqe = ''; $mismekckwcmuksik = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->jokqcscsomkceomu(); if ($mismekckwcmuksik) { $kuoicyiuewoqyaqe = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mismekckwcmuksik->registered, $umawqwoyymwaicas); } if ($kuoicyiuewoqyaqe) { $ogomymegcoacqisg = $kuoicyiuewoqyaqe->src; if (file_exists(ABSPATH . $kuoicyiuewoqyaqe->src)) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq() . $ogomymegcoacqisg; } else { $eeamcawaiqocomwy = $ogomymegcoacqisg; } } return $eeamcawaiqocomwy; } public function mcgiosceuikscyom() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::imiuimigqgweqskc, '')); } public function iiwuqcgqyoqkyaom() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::ugwqowmumooowags, '')); } public function asqsuswyqyoecwcc() { $this->ckgaqqweiuseiayw("\x72\141\144\x69\157"); } public function qymwusgoassaaacs() { $this->ckgaqqweiuseiayw("\x76\141\x6e\x69\163\x68\x65\x72"); } public function wmuqwaewssekqymw() { $this->ckgaqqweiuseiayw("\x64\x69\x73\141\x62\154\145\162"); } public function oaaywquaycsmykuc() { $this->ckgaqqweiuseiayw("\160\162\x6f\147\162\x65\163\x73\x62\141\162"); } private function amosaeggmeksgwea() : Manager { return Foundation::symcgieuakksimmu()->miocmcoykayoyyau(); } private function ckgaqqweiuseiayw(string $ymqmyyeuycgmigyo) { $eygsasmqycagyayw = $this->amosaeggmeksgwea(); $kuoicyiuewoqyaqe = $eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\x6a\163"))->okawmmwsiuauwsiu()->jyumyyugiwwiqomk(5); $eygsasmqycagyayw->owgyegssycusoagc($kuoicyiuewoqyaqe); } private function egsaoagcwoyawuqu(string $ymqmyyeuycgmigyo) { $eygsasmqycagyayw = $this->amosaeggmeksgwea(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x63\163\x73"))); } }
