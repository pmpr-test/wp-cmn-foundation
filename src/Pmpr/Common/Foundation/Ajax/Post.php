<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716beb88b904             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Post extends Common { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x70\x72\x5f\x61\144\155\151\156\x5f\x67\x65\x74\137\160\157\x73\164\137\164\171\160\145", [$this, "\x79\155\x73\165\x73\157\167\x6d\x65\157\161\x65\x73\x6f\161\161"]); parent::wigskegsqequoeks(); } public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; $sciomagaqmgggsiu = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } if (!isset($ywmkwiwkosakssii[Constants::gikuasuikwemyqoq])) { $oqseeekuqisekiwy = [Constants::wmmucsiyiyusmssm]; if (Constants::cqycgsyykemiygou === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array(Constants::cqycgsyykemiygou, $sciomagaqmgggsiu, true)) { $oqseeekuqisekiwy = Constants::yqqwmawaesqquaig; } $ywmkwiwkosakssii[Constants::gikuasuikwemyqoq] = $oqseeekuqisekiwy; } $ywmkwiwkosakssii = $this->ocksiywmkyaqseou("\x67\145\164\137\160\x6f\163\x74\x73\x5f\141\162\x67\x73", $ywmkwiwkosakssii); $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = $sciomagaqmgggsiu; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $wyoiwuqokyeeuguk = $seumokooiykcomco->wgkooswsoccegaew($eqgoocgaqwqcimie, $ywmkwiwkosakssii); } else { $qwcmueausqgiwigy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, Constants::yayciqueeakqwese); $wyoiwuqokyeeuguk = $seumokooiykcomco->kmegaqgyciwwmegk($qwcmueausqgiwigy, $sciomagaqmgggsiu, $ywmkwiwkosakssii); if (is_numeric($qwcmueausqgiwigy) && !isset($wyoiwuqokyeeuguk[$qwcmueausqgiwigy])) { $post = $seumokooiykcomco->get($qwcmueausqgiwigy); if ($post) { if (!$sciomagaqmgggsiu || in_array($seumokooiykcomco->gueasuouwqysmomu($post), $sciomagaqmgggsiu)) { $wyoiwuqokyeeuguk[$qwcmueausqgiwigy] = $post; } } } } return $wyoiwuqokyeeuguk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok), Constants::kumuoysauoagaiiy => $seumokooiykcomco->squyiyimquqicqke($igqsaukqcqscimok), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok), Constants::uouymeyqasaeckso => $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($igqsaukqcqscimok))]; if ($qqscaoyqikuyeoaw === Constants::yksmaomyamsakwow) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::iwascisiiokuackw => $seumokooiykcomco->mguqscccckuywsya($igqsaukqcqscimok)]); } return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
