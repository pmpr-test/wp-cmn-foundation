<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe229367             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Post extends Common { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x70\x72\137\x61\144\155\x69\156\137\147\x65\x74\x5f\x70\157\x73\164\x5f\x74\x79\x70\145", [$this, "\x79\155\x73\x75\x73\x6f\167\x6d\145\157\161\x65\x73\157\x71\161"]); parent::wigskegsqequoeks(); } public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; $sciomagaqmgggsiu = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } if (!isset($ywmkwiwkosakssii[Constants::gikuasuikwemyqoq])) { $oqseeekuqisekiwy = [Constants::wmmucsiyiyusmssm]; if (Constants::cqycgsyykemiygou === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array(Constants::cqycgsyykemiygou, $sciomagaqmgggsiu, true)) { $oqseeekuqisekiwy = Constants::yqqwmawaesqquaig; } $ywmkwiwkosakssii[Constants::gikuasuikwemyqoq] = $oqseeekuqisekiwy; } $ywmkwiwkosakssii = $this->ocksiywmkyaqseou("\147\x65\x74\x5f\160\x6f\x73\164\163\137\141\x72\147\163", $ywmkwiwkosakssii); $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = $sciomagaqmgggsiu; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $wyoiwuqokyeeuguk = $seumokooiykcomco->wgkooswsoccegaew($eqgoocgaqwqcimie, $ywmkwiwkosakssii); } else { $qwcmueausqgiwigy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, Constants::yayciqueeakqwese); $wyoiwuqokyeeuguk = $seumokooiykcomco->kmegaqgyciwwmegk($qwcmueausqgiwigy, $sciomagaqmgggsiu, $ywmkwiwkosakssii); if (is_numeric($qwcmueausqgiwigy) && !isset($wyoiwuqokyeeuguk[$qwcmueausqgiwigy])) { $post = $seumokooiykcomco->get($qwcmueausqgiwigy); if ($post) { if (!$sciomagaqmgggsiu || in_array($seumokooiykcomco->gueasuouwqysmomu($post), $sciomagaqmgggsiu)) { $wyoiwuqokyeeuguk[$qwcmueausqgiwigy] = $post; } } } } return $wyoiwuqokyeeuguk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok), Constants::kumuoysauoagaiiy => $seumokooiykcomco->squyiyimquqicqke($igqsaukqcqscimok), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok), Constants::uouymeyqasaeckso => $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($igqsaukqcqscimok))]; if ($qqscaoyqikuyeoaw === Constants::yksmaomyamsakwow) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::iwascisiiokuackw => $seumokooiykcomco->mguqscccckuywsya($igqsaukqcqscimok)]); } return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($igqsaukqcqscimok); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
