<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use CMB2_Boxes; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Form extends Common { protected ?Model $model = null; public function mgogaykgkoogasim() : ?Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\x5f\151\x6e\x69\x74", [$this, "\171\x65\171\x69\147\x75\171\145\x67\x6d\x6d\x79\165\x73\x65\x61"], 0)->qcsmikeggeemccuu("\x61\144\144\137\155\145\164\x61\x5f\142\x6f\x78\x65\163", [$this, "\x6d\x75\x67\x63\x63\x65\x69\x77\x6f\163\171\x63\151\x77\157\163"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\141\166\145\137\157\142\152\145\x63\x74", Model::class), [$this, "\x67\x73\x65\147\x73\151\157\143\161\x6d\163\157\141\x79\x69\151"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\155\x62\x32\137\x6f\166\x65\x72\x72\x69\x64\145\x5f\155\x65\164\x61\137\x76\x61\154\165\x65", [$this, "\x61\x67\165\143\x79\x69\163\151\153\143\x73\155\x65\x65\x75\x67"], 10, 4); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { global $cmb2Override, $pagenow; $cmb2Override = false; if (!($pagenow === "\141\x64\155\x69\156\56\x70\150\x70")) { goto mkwskuycuyguqqok; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk); if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::awysmmukegasimmq)))) { goto kuicqywysciceggs; } if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) { goto cuykwgmswkskqkyi; } $cmb2Override = true; cuykwgmswkskqkyi: kuicqywysciceggs: mkwskuycuyguqqok: } public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig) { global $cmb2Override; if (!class_exists("\103\115\102\62")) { goto kiqogmwcgcamwiig; } if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\x64\151\x74\x5f\x69\x74\145\x6d", $kqokimuosyuyyucg)) { goto yowsmsiyimmimemc; } $cmb2Override = true; foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) { if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\x6f\142\x6a\145\x63\164\137\164\171\160\145\x73"], true)) { goto kwagwqyusyiyoaqs; } $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\160\157\x73\x74", $_POST); kwagwqyusyiyoaqs: eqkauqciwewmgeoi: } sciwggaeogcoesiu: yowsmsiyimmimemc: kiqogmwcgcamwiig: } public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig) { global $cmb2Override; if (!$mksyucucyswaukig) { goto iomcaiwewsawiamu; } $_REQUEST["\x70\x6f\163\164"] = $this->mgogaykgkoogasim()->keeuqgyooycqoygw($mksyucucyswaukig); $cmb2Override = true; iomcaiwewsawiamu: } public function agucyisikcsmeeug($eqgoocgaqwqcimie, $moqewomugocaueis, $ywmkwiwkosakssii, $aiowsaccomcoikus) { if (!("\157\162\x6d" === $moqewomugocaueis)) { goto uukumskkeggaowck; } if (!($aiowsaccomcoikus && isset($aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]) && $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm])) { goto sqiciiuwmykocycc; } $eqgoocgaqwqcimie = $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]; sqiciiuwmykocycc: $qqswgiawgeaeoecu = (array) ($aiowsaccomcoikus->group[Constants::ciyoccqkiamemcmm] ?? []); if (!($qqswgiawgeaeoecu && "\x63\155\x62\x32\137\x66\151\x65\x6c\x64\x5f\x6e\x6f\137\x6f\x76\x65\162\x72\x69\x64\x65\x5f\166\x61\x6c" === $eqgoocgaqwqcimie)) { goto eequksumcoogyoem; } $eqgoocgaqwqcimie = $qqswgiawgeaeoecu; eequksumcoogyoem: uukumskkeggaowck: return $eqgoocgaqwqcimie; } }
