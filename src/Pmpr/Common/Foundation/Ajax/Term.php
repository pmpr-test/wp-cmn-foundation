<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aad01909e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Term extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pr_admin_add_new_term', [$this, 'mcqkssugiqcgqkqy']); $this->koaegcswmcqsiykq("pr_admin_get_taxonomy", [$this, 'ymsusowmeoqesoqq']); parent::wigskegsqequoeks(); } public function mcqkssugiqcgqkqy() { $occymigcemkqucuw = false; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $post = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::mswoacegomcucaik); $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::ciyoccqkiamemcmm); $kesssewsiegssiya = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::gmmygyiecgmggaam); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->insert($eqgoocgaqwqcimie, $kesssewsiegssiya, [Constants::qioguuqkouiccqig => $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qioguuqkouiccqig, -1)]); if (is_array($sogksuscggsicmac)) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $occymigcemkqucuw = true; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false); $iiueagsqmqqkiiwm = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mesaqgkuiqquyoaq($ywmkwiwkosakssii); $sogksuscggsicmac = [Constants::cyqwkyucgoeyuyyq => $aoskwucuugeuaeus->get($aoskwucuugeuaeus->iooowgsqoyqseyuu($sogksuscggsicmac, true)), Constants::SELECT => $iiueagsqmqqkiiwm]; } else { $sogksuscggsicmac = $gosmywauqawmcyga->mumsqekeeuykyemy(__('Ops! Something is wrong. Are you try to add exist value?!', PR__CMN__FOUNDATION)); } } else { $sogksuscggsicmac = $gosmywauqawmcyga->mumsqekeeuykyemy(__('Ops! Something is wrong. Are you hacking?! :(', PR__CMN__FOUNDATION)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($sogksuscggsicmac, $occymigcemkqucuw); } public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = $this->ocksiywmkyaqseou('get_terms_args', $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]); $ywmkwiwkosakssii[Constants::mkucwyayaakigquq] = false; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->wgkooswsoccegaew($eqgoocgaqwqcimie, $ywmkwiwkosakssii); } else { $kesssewsiegssiya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, Constants::squoamkioomemiyi); $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igkcwemyysqkwuuy($icwicymcioeyeyek[Constants::yayciqueeakqwese], $kesssewsiegssiya, $ywmkwiwkosakssii); } return $uyuaosigqymaqsaa; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); return [Constants::gouqcwikiiygyasc => $aoskwucuugeuaeus->iooowgsqoyqseyuu($igqsaukqcqscimok), Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok), Constants::gmmygyiecgmggaam => $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->uikgwcuascgeissw($aoskwucuugeuaeus->yyoeeseewqmmyaee($igqsaukqcqscimok, Constants::ckmqoekmugkggeym), Constants::uissasisiuymwsmu)]; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($igqsaukqcqscimok); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return ''; } }
