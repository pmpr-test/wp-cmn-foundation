<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ed89d7ce97             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Icon extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $wmgwaquemmoicmas = (array) $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this) . "\57\151\x63\x6f\x6e\163\x2e\152\x73\x6f\x6e"); $ykiyyumywksqcisg = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { if ($ksiyqouuaoymsycg = (array) ($wmgwaquemmoicmas[basename($igqsaukqcqscimok)] ?? [])) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = $ksiyqouuaoymsycg; } } } else { $qwcmueausqgiwigy = strtolower($icwicymcioeyeyek[Constants::yayciqueeakqwese]); foreach ($wmgwaquemmoicmas as $wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (array) $wkaqekwwgqsqwcoi; $uyuaosigqymaqsaa = $wkaqekwwgqsqwcoi[Constants::ucoiewcoucauqwko]; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwewcwusemqaiggk = strtolower($iwewcwusemqaiggk); if (str_contains($iwewcwusemqaiggk, $qwcmueausqgiwigy)) { $ykiyyumywksqcisg[$wkaqekwwgqsqwcoi[Constants::okmiyqowuqogaiiy]] = $wkaqekwwgqsqwcoi; break; } } } } return $ykiyyumywksqcisg; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy); return [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\166\x65\x72", time(), $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi)), Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::uissasisiuymwsmu => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu)]; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
