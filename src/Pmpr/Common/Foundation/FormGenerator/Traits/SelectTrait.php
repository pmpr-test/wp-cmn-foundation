<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait SelectTrait { public function iugmkyouqiwyggik($qiouiwasaauyaaue, int $iqaosyayeiuaisqi = 1) : string { $nsmgceoqaqogqmuw = ''; if (!$qiouiwasaauyaaue) { goto aqoyesawuayoeuag; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) { if (is_string($omkysikckkcieckq)) { goto cuamsmyiamaicwou; } if (!is_array($omkysikckkcieckq)) { goto awwwoikmmaisyisy; } if (isset($omkysikckkcieckq[Constants::uissasisiuymwsmu])) { goto iqicwseckoykqowm; } if (isset($omkysikckkcieckq[Constants::qeiauywscugcaqkq]) && $omkysikckkcieckq[Constants::qeiauywscugcaqkq]) { goto ewugkyumwuomukie; } if (!isset($omkysikckkcieckq[Constants::miceosguuseyyuqe], $omkysikckkcieckq[Constants::geocwaecmeeskuci])) { goto kmwwamokwgagomye; } $omkysikckkcieckq[Constants::qescuiwgsyuikume] = $omkysikckkcieckq[Constants::miceosguuseyyuqe]; $omkysikckkcieckq[Constants::aeweusomuikewuis] = $omkysikckkcieckq[Constants::geocwaecmeeskuci]; kmwwamokwgagomye: if (!isset($omkysikckkcieckq[Constants::qescuiwgsyuikume], $omkysikckkcieckq[Constants::aeweusomuikewuis])) { goto qquugwwesqswouyc; } $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($omkysikckkcieckq[Constants::qescuiwgsyuikume], ["\143\154\x61\x73\x73" => "\x6c\x65\x76\x65\x6c\55{$iqaosyayeiuaisqi}", Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $nsmgceoqaqogqmuw .= $this->iugmkyouqiwyggik($omkysikckkcieckq[Constants::aeweusomuikewuis], $iqaosyayeiuaisqi + 1); qquugwwesqswouyc: goto wwigiswokyqkamsu; ewugkyumwuomukie: if (!isset($omkysikckkcieckq[Constants::qescuiwgsyuikume], $omkysikckkcieckq[Constants::aeweusomuikewuis])) { goto smmgkqeacswimyas; } $_html = $this->iugmkyouqiwyggik($omkysikckkcieckq[Constants::aeweusomuikewuis]); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->uuccukgasskgimsq("\x6f\160\164\x67\x72\x6f\x75\x70", [Constants::uissasisiuymwsmu => $omkysikckkcieckq[Constants::qescuiwgsyuikume]], $_html); smmgkqeacswimyas: wwigiswokyqkamsu: goto yisooseceggsgyqw; iqicwseckoykqowm: $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($omkysikckkcieckq, Constants::uissasisiuymwsmu); $omkysikckkcieckq[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($pkyyagewkiyckmwy, $omkysikckkcieckq); yisooseceggsgyqw: awwwoikmmaisyisy: goto essokuoguqegyeua; cuamsmyiamaicwou: $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($omkysikckkcieckq, ["\143\154\x61\163\163" => "\x6c\x65\x76\145\x6c\x2d{$iqaosyayeiuaisqi}", Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); essokuoguqegyeua: qmmieiquoegeaqok: } uawcmuiummigeqea: aqoyesawuayoeuag: return $nsmgceoqaqogqmuw; } private function sgookowsiykykcua($meqocwsecsywiiqs, array $siquossayskcwkea = []) : string { if (!($eqgoocgaqwqcimie = $this->qooeaookuemoqecm())) { goto ssoooeigmwugyycm; } if (!($eqgoocgaqwqcimie === ($siquossayskcwkea[Constants::ciyoccqkiamemcmm] ?? null))) { goto agoikageaeouqaqi; } $siquossayskcwkea["\163\x65\x6c\145\143\x74\145\144"] = true; agoikageaeouqaqi: ssoooeigmwugyycm: return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x6f\x70\x74\151\157\x6e", $siquossayskcwkea, $meqocwsecsywiiqs); } }
