<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522a8f9030b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Icon extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $wmgwaquemmoicmas = (array) $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\57\151\x63\157\x6e\x73\x2e\x6a\x73\x6f\156"); $ykiyyumywksqcisg = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { if ($ksiyqouuaoymsycg = (array) ($wmgwaquemmoicmas[basename($igqsaukqcqscimok)] ?? [])) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = $ksiyqouuaoymsycg; } } } else { $qwcmueausqgiwigy = strtolower($icwicymcioeyeyek[Constants::yayciqueeakqwese]); foreach ($wmgwaquemmoicmas as $wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (array) $wkaqekwwgqsqwcoi; $uyuaosigqymaqsaa = $wkaqekwwgqsqwcoi[Constants::ucoiewcoucauqwko]; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwewcwusemqaiggk = strtolower($iwewcwusemqaiggk); if (str_contains($iwewcwusemqaiggk, $qwcmueausqgiwigy)) { $ykiyyumywksqcisg[$wkaqekwwgqsqwcoi[Constants::okmiyqowuqogaiiy]] = $wkaqekwwgqsqwcoi; break; } } } } return $ykiyyumywksqcisg; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy); return [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\166\x65\162", time(), $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi)), Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::uissasisiuymwsmu => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu)]; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
