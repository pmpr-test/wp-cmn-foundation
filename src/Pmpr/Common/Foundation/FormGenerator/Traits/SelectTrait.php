<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc48145c0e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait SelectTrait { public function iugmkyouqiwyggik($qiouiwasaauyaaue, int $iqaosyayeiuaisqi = 1) : string { $nsmgceoqaqogqmuw = ''; if ($qiouiwasaauyaaue) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) { if (is_string($omkysikckkcieckq)) { $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($omkysikckkcieckq, ["\x63\154\141\x73\163" => "\x6c\x65\166\145\154\55{$iqaosyayeiuaisqi}", Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); } else { if (is_array($omkysikckkcieckq)) { if (isset($omkysikckkcieckq[Constants::uissasisiuymwsmu])) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($omkysikckkcieckq, Constants::uissasisiuymwsmu); $omkysikckkcieckq[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($pkyyagewkiyckmwy, $omkysikckkcieckq); } else { if (isset($omkysikckkcieckq[Constants::qeiauywscugcaqkq]) && $omkysikckkcieckq[Constants::qeiauywscugcaqkq]) { if (isset($omkysikckkcieckq[Constants::qescuiwgsyuikume], $omkysikckkcieckq[Constants::aeweusomuikewuis])) { $_html = $this->iugmkyouqiwyggik($omkysikckkcieckq[Constants::aeweusomuikewuis]); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->uuccukgasskgimsq("\x6f\x70\x74\x67\x72\157\x75\x70", [Constants::uissasisiuymwsmu => $omkysikckkcieckq[Constants::qescuiwgsyuikume]], $_html); } } else { if (isset($omkysikckkcieckq[Constants::miceosguuseyyuqe], $omkysikckkcieckq[Constants::geocwaecmeeskuci])) { $omkysikckkcieckq[Constants::qescuiwgsyuikume] = $omkysikckkcieckq[Constants::miceosguuseyyuqe]; $omkysikckkcieckq[Constants::aeweusomuikewuis] = $omkysikckkcieckq[Constants::geocwaecmeeskuci]; } if (isset($omkysikckkcieckq[Constants::qescuiwgsyuikume], $omkysikckkcieckq[Constants::aeweusomuikewuis])) { $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($omkysikckkcieckq[Constants::qescuiwgsyuikume], ["\143\x6c\x61\x73\x73" => "\x6c\x65\x76\x65\154\x2d{$iqaosyayeiuaisqi}", Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $nsmgceoqaqogqmuw .= $this->iugmkyouqiwyggik($omkysikckkcieckq[Constants::aeweusomuikewuis], $iqaosyayeiuaisqi + 1); } } } } } } } return $nsmgceoqaqogqmuw; } private function sgookowsiykykcua($meqocwsecsywiiqs, array $siquossayskcwkea = []) : string { if ($eqgoocgaqwqcimie = $this->qooeaookuemoqecm()) { if ($eqgoocgaqwqcimie === ($siquossayskcwkea[Constants::ciyoccqkiamemcmm] ?? null)) { $siquossayskcwkea["\x73\145\154\x65\x63\x74\x65\144"] = true; } } return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x6f\160\x74\151\157\156", $siquossayskcwkea, $meqocwsecsywiiqs); } }
