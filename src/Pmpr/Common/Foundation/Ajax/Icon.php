<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Icon extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $wmgwaquemmoicmas = (array) $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\x2f\x69\143\x6f\x6e\163\x2e\152\163\x6f\156"); $ykiyyumywksqcisg = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto kcqwswsyeosyiqsa; } $qwcmueausqgiwigy = strtolower($icwicymcioeyeyek[Constants::yayciqueeakqwese]); foreach ($wmgwaquemmoicmas as $wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (array) $wkaqekwwgqsqwcoi; $uyuaosigqymaqsaa = $wkaqekwwgqsqwcoi[Constants::ucoiewcoucauqwko]; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwewcwusemqaiggk = strtolower($iwewcwusemqaiggk); if (!str_contains($iwewcwusemqaiggk, $qwcmueausqgiwigy)) { goto eyesqscgaacqewus; } $ykiyyumywksqcisg[$wkaqekwwgqsqwcoi[Constants::okmiyqowuqogaiiy]] = $wkaqekwwgqsqwcoi; goto mooigscaaqwuikos; eyesqscgaacqewus: icumymgsimikeayo: } mooigscaaqwuikos: aqwgmgywcwigwows: } akusqieqmgiqoyio: goto ekeeiceksommsomi; kcqwswsyeosyiqsa: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!($ksiyqouuaoymsycg = (array) ($wmgwaquemmoicmas[basename($igqsaukqcqscimok)] ?? []))) { goto cokkyaiqeeeecuqi; } $ykiyyumywksqcisg[$uusmaiomayssaecw] = $ksiyqouuaoymsycg; cokkyaiqeeeecuqi: kscwqewukwiwsyqc: } uuagyckakcaquqss: ekeeiceksommsomi: return $ykiyyumywksqcisg; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy); return [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\166\x65\x72", time(), $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi)), Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::uissasisiuymwsmu => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu)]; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
