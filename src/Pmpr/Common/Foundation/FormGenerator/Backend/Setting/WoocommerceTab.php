<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705b088f1290             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Common; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Common { protected ?string $name; protected ?string $title; protected array $sections = []; protected array $fields = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\x6f\143\x6f\x6d\x6d\x65\162\x63\145\x5f\163\145\x74\164\151\x6e\147\163\x5f\x74\141\142\163\137{$this->cisyiemkeykgkomc()}", [$this, "\x69\x75\141\x75\x63\165\x6f\157\x6b\147\157\161\151\151\x69\x6f"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\155\x6d\x65\162\x63\145\137\165\160\144\141\x74\x65\x5f\x6f\x70\x74\151\157\156\x73\x5f{$this->cisyiemkeykgkomc()}", [$this, "\157\161\171\165\x77\x63\x63\163\x75\x73\x6b\151\x77\x67\x65\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\x6f\x63\157\155\x6d\145\162\143\x65\x5f\163\x65\x74\x74\151\x6e\x67\x73\137\x74\141\x62\x73\x5f\141\x72\162\141\171", [$this, "\147\x6b\x69\157\x73\x75\145\155\x6b\165\143\x69\151\x71\x6b\161"], 999); } public final function oqyuwccsuskiwgew() { $this->kqsgewsukomooiok(); woocommerce_update_options($this->ugmceccgwaaaigiy()); } public final function iuaucuookgoqiiio() { $this->kqsgewsukomooiok(); woocommerce_admin_fields($this->ugmceccgwaaaigiy()); } private function kqsgewsukomooiok() { if (!$this->fields) { $this->aoqwywcqmoqaukkq(); } } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function yqyamkmeukygaome($aokagokqyuysuksm, $meqocwsecsywiiqs, $ikgwqyuyckaewsow) : self { $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::squoamkioomemiyi => Constants::qescuiwgsyuikume]); $this->ewweaossowcqywaw($ikgwqyuyckaewsow); $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::squoamkioomemiyi => "\163\x65\x63\x74\x69\x6f\x6e\x65\x6e\x64"]); return $this; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { $this->sections[] = $awcmekyiwwkeyisq; return $this; } public function ugmceccgwaaaigiy() : array { return $this->fields; } public function mkksewyosgeumwsa(string $aokagokqyuysuksm, array $ywmkwiwkosakssii = [], $sqeykgyoooqysmca = null) : self { if (!isset($ywmkwiwkosakssii[Constants::squoamkioomemiyi]) && $sqeykgyoooqysmca) { $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = Constants::kqeokggqcsesmqco; $ywmkwiwkosakssii[Constants::ueaisqkksoeisswi] = $sqeykgyoooqysmca; } $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] = $this->qmuguoywasawkcyw($aokagokqyuysuksm); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (isset($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig])) { foreach ($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig] as $momcykaoccoymeig => $igqsaukqcqscimok) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ymckmcsiymwqucoq, []); if ($ikgwqyuyckaewsow) { if (is_array($ikgwqyuyckaewsow)) { foreach ($igqsaukqcqscimok[Constants::ymckmcsiymwqucoq] as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq][$uusmaiomayssaecw] = $this->qmuguoywasawkcyw($aiowsaccomcoikus); } } else { if (is_string($ikgwqyuyckaewsow)) { $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq] = $this->qmuguoywasawkcyw($ikgwqyuyckaewsow); } } } } } $this->fields[] = $ywmkwiwkosakssii; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if (!isset($aiowsaccomcoikus[Constants::kqeokggqcsesmqco]) || !$aiowsaccomcoikus[Constants::kqeokggqcsesmqco]) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->unset($aiowsaccomcoikus, Constants::squoamkioomemiyi); } $this->mkksewyosgeumwsa($aokagokqyuysuksm, $aiowsaccomcoikus, $sqeykgyoooqysmca); } return $this; } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->aakmagwggmkoiiyu()}\x5f\164\141\142\x5f\163\145\164\x74\151\156\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\143\x5f{$this->aakmagwggmkoiiyu()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\164\x61\142") === $this->cisyiemkeykgkomc(); } public abstract function aoqwywcqmoqaukkq(); }
