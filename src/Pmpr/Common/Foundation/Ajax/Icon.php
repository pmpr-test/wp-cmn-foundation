<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Icon extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $wmgwaquemmoicmas = (array) $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($this->cmewgsgomuwkkoou() . "\57\x69\x63\x6f\156\163\56\152\x73\157\x6e"); $ykiyyumywksqcisg = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto sgmqeqeuscaaegqk; } $qwcmueausqgiwigy = strtolower($icwicymcioeyeyek[Constants::yayciqueeakqwese]); foreach ($wmgwaquemmoicmas as $wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (array) $wkaqekwwgqsqwcoi; $uyuaosigqymaqsaa = $wkaqekwwgqsqwcoi[Constants::ucoiewcoucauqwko]; foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwewcwusemqaiggk = strtolower($iwewcwusemqaiggk); if (!str_contains($iwewcwusemqaiggk, $qwcmueausqgiwigy)) { goto yiuwiekcyyquyuak; } $ykiyyumywksqcisg[$wkaqekwwgqsqwcoi[Constants::okmiyqowuqogaiiy]] = $wkaqekwwgqsqwcoi; goto ywiwqkssuiiukwuk; yiuwiekcyyquyuak: imucwaggwqomwwki: } ywiwqkssuiiukwuk: oeqaiwecuckgoyky: } gyuiwqyyauwqokmc: goto wawmuaweemsioqms; sgmqeqeuscaaegqk: foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!($ksiyqouuaoymsycg = (array) ($wmgwaquemmoicmas[basename($igqsaukqcqscimok)] ?? []))) { goto qiuouckkycciwuyo; } $ykiyyumywksqcisg[$uusmaiomayssaecw] = $ksiyqouuaoymsycg; qiuouckkycciwuyo: cgckkkoaumakemuc: } skqiqqeyqokasmeg: wawmuaweemsioqms: return $ykiyyumywksqcisg; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy); return [Constants::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\166\x65\x72", time(), $this->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi)), Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::uissasisiuymwsmu => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu)]; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::okmiyqowuqogaiiy, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
