<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Icon extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $wmgwaquemmoicmas = (array) $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . '/icons.json'); $ykiyyumywksqcisg = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { if ($ksiyqouuaoymsycg = (array) ($wmgwaquemmoicmas[basename($igqsaukqcqscimok)] ?? [])) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = $ksiyqouuaoymsycg; } } } else { $qwcmueausqgiwigy = strtolower($icwicymcioeyeyek[Constants::yayciqueeakqwese]); foreach ($wmgwaquemmoicmas as $wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (array) $wkaqekwwgqsqwcoi; $uyuaosigqymaqsaa = $wkaqekwwgqsqwcoi[Constants::ucoiewcoucauqwko]; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwewcwusemqaiggk = strtolower($iwewcwusemqaiggk); if (str_contains($iwewcwusemqaiggk, $qwcmueausqgiwigy)) { $ykiyyumywksqcisg[$wkaqekwwgqsqwcoi[Constants::okmiyqowuqogaiiy]] = $wkaqekwwgqsqwcoi; break; } } } } return $ykiyyumywksqcisg; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $wkaqekwwgqsqwcoi = $igqsaukqcqscimok[Constants::okmiyqowuqogaiiy] ?? ''; $kisaucuwwaaiwuqe = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); $qookweymeqawmcwo = [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo('ver', time(), $kisaucuwwaaiwuqe), Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::uissasisiuymwsmu => $igqsaukqcqscimok[Constants::uissasisiuymwsmu] ?? '']; return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $igqsaukqcqscimok[Constants::okmiyqowuqogaiiy] ?? ''; } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
