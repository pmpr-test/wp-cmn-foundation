<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16ae3d454f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Common; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Common { protected ?string $name; protected ?string $title; protected array $sections = []; protected array $fields = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\157\x63\x6f\155\155\145\x72\143\145\137\x73\145\x74\x74\151\x6e\147\163\137\164\x61\142\x73\x5f{$this->cisyiemkeykgkomc()}", [$this, "\151\x75\141\165\x63\x75\x6f\157\x6b\147\x6f\x71\151\x69\151\157"])->qcsmikeggeemccuu("\x77\x6f\157\x63\157\x6d\155\145\162\x63\145\x5f\x75\x70\x64\141\x74\x65\137\157\x70\164\x69\x6f\156\163\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6f\161\171\x75\167\x63\143\x73\165\163\x6b\151\x77\x67\x65\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\157\x63\157\x6d\x6d\x65\162\x63\x65\137\x73\x65\x74\x74\x69\x6e\147\x73\137\x74\141\x62\163\x5f\x61\x72\162\x61\171", [$this, "\x67\153\x69\x6f\x73\165\x65\x6d\153\165\143\x69\x69\x71\153\161"], 999); } public final function oqyuwccsuskiwgew() { $this->kqsgewsukomooiok(); woocommerce_update_options($this->ugmceccgwaaaigiy()); } public final function iuaucuookgoqiiio() { $this->kqsgewsukomooiok(); woocommerce_admin_fields($this->ugmceccgwaaaigiy()); } private function kqsgewsukomooiok() { if ($this->fields) { goto msegcuqmgweissmw; } $this->aoqwywcqmoqaukkq(); msegcuqmgweissmw: } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function yqyamkmeukygaome($aokagokqyuysuksm, $meqocwsecsywiiqs, $ikgwqyuyckaewsow) : self { $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::squoamkioomemiyi => Constants::qescuiwgsyuikume]); $this->ewweaossowcqywaw($ikgwqyuyckaewsow); $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::squoamkioomemiyi => "\163\145\x63\x74\x69\157\156\145\156\x64"]); return $this; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { $this->sections[] = $awcmekyiwwkeyisq; return $this; } public function ugmceccgwaaaigiy() : array { return $this->fields; } public function mkksewyosgeumwsa(string $aokagokqyuysuksm, array $ywmkwiwkosakssii = [], $sqeykgyoooqysmca = null) : self { if (!(!isset($ywmkwiwkosakssii[Constants::squoamkioomemiyi]) && $sqeykgyoooqysmca)) { goto siwekyoigwegiosa; } $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = Constants::kqeokggqcsesmqco; $ywmkwiwkosakssii[Constants::ueaisqkksoeisswi] = $sqeykgyoooqysmca; siwekyoigwegiosa: $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] = $this->qmuguoywasawkcyw($aokagokqyuysuksm); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!isset($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig])) { goto qqocmsauqkwoscqy; } foreach ($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig] as $momcykaoccoymeig => $igqsaukqcqscimok) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ymckmcsiymwqucoq, []); if (!$ikgwqyuyckaewsow) { goto myegqayeyqaigmqi; } if (is_array($ikgwqyuyckaewsow)) { goto caiiwysgssyqoouc; } if (!is_string($ikgwqyuyckaewsow)) { goto zsweawcwmisoogao; } $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq] = $this->qmuguoywasawkcyw($ikgwqyuyckaewsow); zsweawcwmisoogao: goto ycoomucecckyease; caiiwysgssyqoouc: foreach ($igqsaukqcqscimok[Constants::ymckmcsiymwqucoq] as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq][$uusmaiomayssaecw] = $this->qmuguoywasawkcyw($aiowsaccomcoikus); swmmiykiawycgoes: } iwccwiiumyyccquy: ycoomucecckyease: myegqayeyqaigmqi: uwsgccckqqookusc: } ucuyaouwikuyyemm: qqocmsauqkwoscqy: $this->fields[] = $ywmkwiwkosakssii; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if (!(!isset($aiowsaccomcoikus[Constants::kqeokggqcsesmqco]) || !$aiowsaccomcoikus[Constants::kqeokggqcsesmqco])) { goto cuwasskqkoysieey; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->unset($aiowsaccomcoikus, Constants::squoamkioomemiyi); cuwasskqkoysieey: $this->mkksewyosgeumwsa($aokagokqyuysuksm, $aiowsaccomcoikus, $sqeykgyoooqysmca); kuyeoaemuwcqkoae: } asoweekcciigkweo: return $this; } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->aakmagwggmkoiiyu()}\x5f\x74\x61\142\137\x73\145\164\x74\x69\x6e\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\143\x5f{$this->aakmagwggmkoiiyu()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\164\141\x62") === $this->cisyiemkeykgkomc(); } public abstract function aoqwywcqmoqaukkq(); }
