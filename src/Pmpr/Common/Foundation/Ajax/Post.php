<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c47480ec             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Post extends Common { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\160\162\x5f\x61\x64\155\x69\x6e\137\147\145\x74\137\160\157\x73\164\x5f\164\x79\160\x65", [$this, "\171\x6d\x73\x75\163\157\x77\155\x65\x6f\x71\145\x73\157\x71\161"]); parent::wigskegsqequoeks(); } public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; $sciomagaqmgggsiu = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } if (!isset($ywmkwiwkosakssii[Constants::gikuasuikwemyqoq])) { $oqseeekuqisekiwy = [Constants::wmmucsiyiyusmssm]; if (Constants::cqycgsyykemiygou === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array(Constants::cqycgsyykemiygou, $sciomagaqmgggsiu, true)) { $oqseeekuqisekiwy = Constants::yqqwmawaesqquaig; } $ywmkwiwkosakssii[Constants::gikuasuikwemyqoq] = $oqseeekuqisekiwy; } $ywmkwiwkosakssii = $this->ocksiywmkyaqseou("\x67\145\x74\x5f\160\157\x73\x74\163\x5f\141\x72\x67\163", $ywmkwiwkosakssii); $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = $sciomagaqmgggsiu; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $wyoiwuqokyeeuguk = $seumokooiykcomco->wgkooswsoccegaew($eqgoocgaqwqcimie, $ywmkwiwkosakssii); } else { $qwcmueausqgiwigy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, Constants::yayciqueeakqwese); $wyoiwuqokyeeuguk = $seumokooiykcomco->kmegaqgyciwwmegk($qwcmueausqgiwigy, $sciomagaqmgggsiu, $ywmkwiwkosakssii); if (is_numeric($qwcmueausqgiwigy) && !isset($wyoiwuqokyeeuguk[$qwcmueausqgiwigy])) { $post = $seumokooiykcomco->get($qwcmueausqgiwigy); if ($post) { if (!$sciomagaqmgggsiu || in_array($seumokooiykcomco->gueasuouwqysmomu($post), $sciomagaqmgggsiu)) { $wyoiwuqokyeeuguk[$qwcmueausqgiwigy] = $post; } } } } return $wyoiwuqokyeeuguk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok), Constants::kumuoysauoagaiiy => $seumokooiykcomco->squyiyimquqicqke($igqsaukqcqscimok), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok), Constants::uouymeyqasaeckso => $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($igqsaukqcqscimok))]; if ($qqscaoyqikuyeoaw === Constants::yksmaomyamsakwow) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::iwascisiiokuackw => $seumokooiykcomco->mguqscccckuywsya($igqsaukqcqscimok)]); } return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
