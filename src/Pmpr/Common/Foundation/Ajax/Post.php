<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d8ad41a06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Post extends Common { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x70\162\x5f\141\x64\x6d\x69\156\x5f\147\x65\x74\x5f\x70\157\x73\164\x5f\x74\x79\160\x65", [$this, "\171\x6d\163\165\163\157\x77\155\x65\157\161\x65\163\x6f\161\x71"]); parent::wigskegsqequoeks(); } public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; $sciomagaqmgggsiu = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } if (!isset($ywmkwiwkosakssii[Constants::gikuasuikwemyqoq])) { $oqseeekuqisekiwy = [Constants::wmmucsiyiyusmssm]; if (Constants::cqycgsyykemiygou === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array(Constants::cqycgsyykemiygou, $sciomagaqmgggsiu, true)) { $oqseeekuqisekiwy = Constants::yqqwmawaesqquaig; } $ywmkwiwkosakssii[Constants::gikuasuikwemyqoq] = $oqseeekuqisekiwy; } $ywmkwiwkosakssii = $this->ocksiywmkyaqseou("\147\x65\164\x5f\x70\157\163\164\163\137\x61\x72\147\x73", $ywmkwiwkosakssii); $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = $sciomagaqmgggsiu; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $wyoiwuqokyeeuguk = $seumokooiykcomco->wgkooswsoccegaew($eqgoocgaqwqcimie, $ywmkwiwkosakssii); } else { $qwcmueausqgiwigy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, Constants::yayciqueeakqwese); $wyoiwuqokyeeuguk = $seumokooiykcomco->kmegaqgyciwwmegk($qwcmueausqgiwigy, $sciomagaqmgggsiu, $ywmkwiwkosakssii); if (is_numeric($qwcmueausqgiwigy) && !isset($wyoiwuqokyeeuguk[$qwcmueausqgiwigy])) { $post = $seumokooiykcomco->get($qwcmueausqgiwigy); if ($post) { if (!$sciomagaqmgggsiu || in_array($seumokooiykcomco->gueasuouwqysmomu($post), $sciomagaqmgggsiu)) { $wyoiwuqokyeeuguk[$qwcmueausqgiwigy] = $post; } } } } return $wyoiwuqokyeeuguk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok), Constants::kumuoysauoagaiiy => $seumokooiykcomco->squyiyimquqicqke($igqsaukqcqscimok), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok), Constants::uouymeyqasaeckso => $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($igqsaukqcqscimok))]; if ($qqscaoyqikuyeoaw === Constants::yksmaomyamsakwow) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::iwascisiiokuackw => $seumokooiykcomco->mguqscccckuywsya($igqsaukqcqscimok)]); } return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
