<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574c05515f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use WP_List_Table; use WP_Screen; class WPListTable extends WP_List_Table { use HookTrait, HelperTrait, WrapperTrait, TemplateTrait; protected int $count = 0; protected int $perPage = 10; public function wasgwsogmuquqeaa() : array { return $this->items; } public function __construct($ywmkwiwkosakssii = []) { $this->perPage = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); parent::__construct($ywmkwiwkosakssii); } public function asuigsqoowmekwok() { return $this->screen; } public function ygmcsmegcysyeoss() : int { return $this->count; } public function sooksiiooeywkyaq() : int { return $this->perPage; } public function prepare_items() { $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss(); $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $this->set_pagination_args(["\x74\157\x74\x61\154\137\160\x61\x67\145\163" => ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu), "\x74\x6f\x74\141\154\137\x69\x74\x65\x6d\163" => $gaeqamemwmwsyukm, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu]); $this->_column_headers = [$this->get_columns(), [], $this->get_sortable_columns()]; } public function mqosuuycwokyuiek() : string { ob_start(); $this->views(); $nsmgceoqaqogqmuw = ob_get_clean(); if ($nsmgceoqaqogqmuw === false) { $nsmgceoqaqogqmuw = ''; } return $nsmgceoqaqogqmuw; } }
