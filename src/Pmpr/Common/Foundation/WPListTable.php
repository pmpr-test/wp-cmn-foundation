<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WP_List_Table; use WP_Screen; class WPListTable extends WP_List_Table { use ComponentTrait; protected int $count = 0; protected int $perPage = 10; public function wasgwsogmuquqeaa() : array { return $this->items; } public function __construct($ywmkwiwkosakssii = []) { $this->perPage = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); parent::__construct($ywmkwiwkosakssii); } public function asuigsqoowmekwok() { return $this->screen; } public function ygmcsmegcysyeoss() : int { return $this->count; } public function sooksiiooeywkyaq() : int { return $this->perPage; } public function prepare_items() { $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss(); $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $this->set_pagination_args(["\164\x6f\164\x61\x6c\x5f\160\x61\147\x65\x73" => ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu), "\164\x6f\x74\141\154\x5f\x69\x74\x65\x6d\x73" => $gaeqamemwmwsyukm, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu]); $this->_column_headers = [$this->get_columns(), [], $this->get_sortable_columns()]; } public function mqosuuycwokyuiek() : string { ob_start(); $this->views(); $nsmgceoqaqogqmuw = ob_get_clean(); if (!($nsmgceoqaqogqmuw === false)) { goto hkcqsqgccmogcyim; } $nsmgceoqaqogqmuw = ''; hkcqsqgccmogcyim: return $nsmgceoqaqogqmuw; } }
