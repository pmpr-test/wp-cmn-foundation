<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fdd41716df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Process; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; class Queue extends Container { protected string $group = "\x70\x6d\x70\x72"; public function ogokukmyemguwwkw() : string { return $this->group; } public function ekyiieacymauaume(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : int { try { if (function_exists("\x61\163\137\145\156\161\x75\x65\165\145\137\141\x73\171\x6e\x63\137\x61\143\164\151\x6f\x6e")) { return as_enqueue_async_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } return $this->ksicwcssyugsigka(time() + MINUTE_IN_SECONDS, $iaakskwmyqceoscy, $ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function ksicwcssyugsigka(int $yiuogaeewyockeak, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : int { try { return as_schedule_single_action($yiuogaeewyockeak, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function ooosmymooksgmyos(int $yiuogaeewyockeak, int $caqccyygikumwgow, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : int { if ($this->ymguiugmqicamcgg($iaakskwmyqceoscy, $ywmkwiwkosakssii)) { $iymgocmsciwsgiaa = $this->qwcmueausqgiwigy([Constants::cmooywkooekaakwk => $iaakskwmyqceoscy, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo], Constants::oyaoekcogwkcekcc); if (1 < count($iymgocmsciwsgiaa)) { $this->cgykqqawqwuciygg($iaakskwmyqceoscy, $ywmkwiwkosakssii); return 0; } $akaeuwiycmekaqwa = $this->qwcmueausqgiwigy([Constants::cmooywkooekaakwk => $iaakskwmyqceoscy, Constants::ciywsqoeiymemsys => Constants::eyemmiwoaayukksq], Constants::oyaoekcogwkcekcc); if (1 === count($iymgocmsciwsgiaa) + count($akaeuwiycmekaqwa)) { return 0; } $this->cgykqqawqwuciygg($iaakskwmyqceoscy, $ywmkwiwkosakssii); } try { return as_schedule_recurring_action($yiuogaeewyockeak, $caqccyygikumwgow, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function ymguiugmqicamcgg(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : bool { if (!function_exists("\x61\x73\137\x68\141\163\137\x73\x63\x68\145\x64\165\x6c\x65\144\x5f\x61\143\x74\151\x6f\x6e")) { return !is_null($this->ioyuyqoossiokekm($iaakskwmyqceoscy, $ywmkwiwkosakssii)); } try { return as_has_scheduled_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return false; } } public function oasegqoiacqakkyy(int $yiuogaeewyockeak, string $ewaccsuyeiycwwki, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { if ($this->ymguiugmqicamcgg($iaakskwmyqceoscy, $ywmkwiwkosakssii)) { return ''; } try { return as_schedule_cron_action($yiuogaeewyockeak, $ewaccsuyeiycwwki, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function cancel(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { try { as_unschedule_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->group); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); } } public function cgykqqawqwuciygg(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { try { as_unschedule_all_actions($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->group); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); } } public function ioyuyqoossiokekm(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = null) { try { $wewoeyeqgigeosgs = as_next_scheduled_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->group); if (is_numeric($wewoeyeqgigeosgs)) { return $wewoeyeqgigeosgs; } return null; } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return null; } } public function qwcmueausqgiwigy(array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = OBJECT) : array { try { return as_get_scheduled_actions($ywmkwiwkosakssii, $aqykuigiuwmmcieu); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return []; } } public function exists(array $ywmkwiwkosakssii, array $oqseeekuqisekiwy = [Constants::sgoswgskyiiwkyuo]) : bool { $yumccasyisqwmmio = false; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $ywmkwiwkosakssii[Constants::ciywsqoeiymemsys] = $iueymcwwscwqkiyq; $ccsoeikqowcwgykg = $this->qwcmueausqgiwigy($ywmkwiwkosakssii, Constants::oyaoekcogwkcekcc); $yumccasyisqwmmio = count($ccsoeikqowcwgykg) > 0; if ($yumccasyisqwmmio) { break; } } return $yumccasyisqwmmio; } public function qmkoowoikameoqss(Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai), ["\x41\x63\x74\151\x6f\156\x20\x53\143\x68\145\x64\165\154\145\x72\40\121\x75\145\x75\145"]); } }
