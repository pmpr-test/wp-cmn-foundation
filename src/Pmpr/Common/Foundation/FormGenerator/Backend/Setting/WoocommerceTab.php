<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Common; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Common { protected ?string $name; protected ?string $title; protected array $sections = []; protected array $fields = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\157\143\x6f\155\155\145\x72\143\145\137\163\x65\x74\164\x69\156\x67\x73\137\164\141\x62\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\x69\165\141\x75\143\165\157\157\153\x67\157\x71\x69\151\x69\157"])->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\155\145\x72\x63\145\137\x75\x70\144\141\164\145\x5f\157\160\x74\x69\157\x6e\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\157\x71\x79\165\x77\143\143\x73\165\163\153\151\x77\147\x65\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\157\x6d\x6d\145\162\x63\x65\x5f\163\145\x74\x74\x69\x6e\147\x73\137\164\141\142\x73\x5f\141\162\x72\x61\171", [$this, "\x67\153\151\x6f\x73\x75\x65\x6d\x6b\x75\143\x69\151\x71\x6b\161"], 999); } public final function oqyuwccsuskiwgew() { $this->kqsgewsukomooiok(); woocommerce_update_options($this->ugmceccgwaaaigiy()); } public final function iuaucuookgoqiiio() { $this->kqsgewsukomooiok(); woocommerce_admin_fields($this->ugmceccgwaaaigiy()); } private function kqsgewsukomooiok() { if ($this->fields) { goto muygyqckegkuiwyi; } $this->aoqwywcqmoqaukkq(); muygyqckegkuiwyi: } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function yqyamkmeukygaome($aokagokqyuysuksm, $meqocwsecsywiiqs, $ikgwqyuyckaewsow) : self { $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::squoamkioomemiyi => Constants::qescuiwgsyuikume]); $this->ewweaossowcqywaw($ikgwqyuyckaewsow); $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::squoamkioomemiyi => "\x73\145\143\x74\x69\x6f\156\145\x6e\144"]); return $this; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { $this->sections[] = $awcmekyiwwkeyisq; return $this; } public function ugmceccgwaaaigiy() : array { return $this->fields; } public function mkksewyosgeumwsa(string $aokagokqyuysuksm, array $ywmkwiwkosakssii = [], $sqeykgyoooqysmca = null) : self { if (!(!isset($ywmkwiwkosakssii[Constants::squoamkioomemiyi]) && $sqeykgyoooqysmca)) { goto osgmksikyyqqcaag; } $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = Constants::kqeokggqcsesmqco; $ywmkwiwkosakssii[Constants::ueaisqkksoeisswi] = $sqeykgyoooqysmca; osgmksikyyqqcaag: $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] = $this->qmuguoywasawkcyw($aokagokqyuysuksm); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!isset($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig])) { goto ieyimqciuswcokke; } foreach ($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig] as $momcykaoccoymeig => $igqsaukqcqscimok) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ymckmcsiymwqucoq, []); if (!$ikgwqyuyckaewsow) { goto ggqmaecmwgeqkuge; } if (is_array($ikgwqyuyckaewsow)) { goto qkmmgqgcegcuawuu; } if (!is_string($ikgwqyuyckaewsow)) { goto ooiaoiygiiamsmum; } $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq] = $this->qmuguoywasawkcyw($ikgwqyuyckaewsow); ooiaoiygiiamsmum: goto auouiegmaiasywkw; qkmmgqgcegcuawuu: foreach ($igqsaukqcqscimok[Constants::ymckmcsiymwqucoq] as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq][$uusmaiomayssaecw] = $this->qmuguoywasawkcyw($aiowsaccomcoikus); migwkuscokgmogea: } egicsmysugywycqq: auouiegmaiasywkw: ggqmaecmwgeqkuge: ouyqaaywykeqimmi: } gsewiomcwceysquc: ieyimqciuswcokke: $this->fields[] = $ywmkwiwkosakssii; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if (!(!isset($aiowsaccomcoikus[Constants::kqeokggqcsesmqco]) || !$aiowsaccomcoikus[Constants::kqeokggqcsesmqco])) { goto gkekqmkyumkmywky; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->unset($aiowsaccomcoikus, Constants::squoamkioomemiyi); gkekqmkyumkmywky: $this->mkksewyosgeumwsa($aokagokqyuysuksm, $aiowsaccomcoikus, $sqeykgyoooqysmca); aqaseyqwkgoyaiyg: } csismgmuaiogeucq: return $this; } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->aakmagwggmkoiiyu()}\x5f\164\141\x62\137\163\x65\x74\x74\x69\156\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\x63\137{$this->aakmagwggmkoiiyu()}\137{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\164\x61\142") === $this->cisyiemkeykgkomc(); } public abstract function aoqwywcqmoqaukkq(); }
