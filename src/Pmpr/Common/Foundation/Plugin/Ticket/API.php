<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053ea9b9ccc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; class API extends BaseClass { public function __construct() { $this->domain = $this->saeuwmoyaekkseok('/pmpr/ticket'); $this->ueakuaywsqiooygo(40)->iwoewaiwqaisaagy()->kiaqywwoysssqgig(Constants::aciemiuuwgysykom, $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ooouaomcuuakuaii()); parent::__construct(); } public function tkgawykgecmsaeis() { $keccaugmemegoimu = $this->eqkieiagqmugguew('/get-configs'); if (!is_wp_error($keccaugmemegoimu)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::uiwqcumqkgikqyue); } else { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function oocesgigeqqqyuog($icwicymcioeyeyek) { $keccaugmemegoimu = $this->eqkieiagqmugguew('/add-ticket', [Constants::qmwqkaeamecekiso => ['ticket' => $icwicymcioeyeyek]], Constants::mswoacegomcucaik); if (!is_wp_error($keccaugmemegoimu)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::uiwqcumqkgikqyue); } else { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } public function cooiockiwesywqeg($icwicymcioeyeyek) { $keccaugmemegoimu = $this->eqkieiagqmugguew('/add-request', [Constants::qmwqkaeamecekiso => [Constants::qgeesceacsmeqacu => $icwicymcioeyeyek]], Constants::mswoacegomcucaik); if (!is_wp_error($keccaugmemegoimu)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::uiwqcumqkgikqyue); } else { $sogksuscggsicmac = []; } return $sogksuscggsicmac; } }
