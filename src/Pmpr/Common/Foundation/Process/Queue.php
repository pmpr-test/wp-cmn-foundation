<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Process; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; class Queue extends Container { protected string $group = "\x70\155\160\162"; public function ogokukmyemguwwkw() : string { return $this->group; } public function ekyiieacymauaume(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : int { try { if (!function_exists("\141\x73\x5f\145\156\x71\165\145\x75\145\x5f\141\163\x79\x6e\143\137\x61\143\x74\x69\157\x6e")) { goto giaiosokigwkciok; } return as_enqueue_async_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); giaiosokigwkciok: return $this->ksicwcssyugsigka(time() + MINUTE_IN_SECONDS, $iaakskwmyqceoscy, $ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function ksicwcssyugsigka(int $yiuogaeewyockeak, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : int { try { return as_schedule_single_action($yiuogaeewyockeak, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function ooosmymooksgmyos(int $yiuogaeewyockeak, int $caqccyygikumwgow, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : int { if (!$this->ymguiugmqicamcgg($iaakskwmyqceoscy, $ywmkwiwkosakssii)) { goto ocoykqeawcqmyiak; } $iymgocmsciwsgiaa = $this->qwcmueausqgiwigy([Constants::cmooywkooekaakwk => $iaakskwmyqceoscy, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo], Constants::oyaoekcogwkcekcc); if (!(1 < count($iymgocmsciwsgiaa))) { goto yksceugwkyaiuwym; } $this->cgykqqawqwuciygg($iaakskwmyqceoscy, $ywmkwiwkosakssii); return 0; yksceugwkyaiuwym: $akaeuwiycmekaqwa = $this->qwcmueausqgiwigy([Constants::cmooywkooekaakwk => $iaakskwmyqceoscy, Constants::ciywsqoeiymemsys => Constants::eyemmiwoaayukksq], Constants::oyaoekcogwkcekcc); if (!(1 === count($iymgocmsciwsgiaa) + count($akaeuwiycmekaqwa))) { goto qyqqqsoggykumeuu; } return 0; qyqqqsoggykumeuu: $this->cgykqqawqwuciygg($iaakskwmyqceoscy, $ywmkwiwkosakssii); ocoykqeawcqmyiak: try { return as_schedule_recurring_action($yiuogaeewyockeak, $caqccyygikumwgow, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function ymguiugmqicamcgg(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) : bool { if (!function_exists("\x61\x73\x5f\150\141\x73\x5f\x73\143\150\145\x64\165\154\145\x64\137\141\143\164\x69\157\x6e")) { return !is_null($this->ioyuyqoossiokekm($iaakskwmyqceoscy, $ywmkwiwkosakssii)); } try { return as_has_scheduled_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return false; } } public function oasegqoiacqakkyy(int $yiuogaeewyockeak, string $ewaccsuyeiycwwki, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { if (!$this->ymguiugmqicamcgg($iaakskwmyqceoscy, $ywmkwiwkosakssii)) { goto mcmemeyicaoaqeag; } return ''; mcmemeyicaoaqeag: try { return as_schedule_cron_action($yiuogaeewyockeak, $ewaccsuyeiycwwki, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->ogokukmyemguwwkw()); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return 0; } } public function cancel(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { try { as_unschedule_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->group); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); } } public function cgykqqawqwuciygg(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { try { as_unschedule_all_actions($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->group); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); } } public function ioyuyqoossiokekm(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = null) { try { $wewoeyeqgigeosgs = as_next_scheduled_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $this->group); if (!is_numeric($wewoeyeqgigeosgs)) { goto uqisumgcgcwswuui; } return $wewoeyeqgigeosgs; uqisumgcgcwswuui: return null; } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return null; } } public function qwcmueausqgiwigy(array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = OBJECT) : array { try { return as_get_scheduled_actions($ywmkwiwkosakssii, $aqykuigiuwmmcieu); } catch (Exception $wgaoewqkwgomoaai) { $this->qmkoowoikameoqss($wgaoewqkwgomoaai); return []; } } public function exists(array $ywmkwiwkosakssii, array $oqseeekuqisekiwy = [Constants::sgoswgskyiiwkyuo]) : bool { $yumccasyisqwmmio = false; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $ywmkwiwkosakssii[Constants::ciywsqoeiymemsys] = $iueymcwwscwqkiyq; $ccsoeikqowcwgykg = $this->qwcmueausqgiwigy($ywmkwiwkosakssii, Constants::oyaoekcogwkcekcc); $yumccasyisqwmmio = count($ccsoeikqowcwgykg) > 0; if (!$yumccasyisqwmmio) { goto eawayoqwuukkgywo; } goto gqwwymuckywoyimi; eawayoqwuukkgywo: ayaawwiioeysswkm: } gqwwymuckywoyimi: return $yumccasyisqwmmio; } public function qmkoowoikameoqss(Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai), ["\101\143\164\151\x6f\156\x20\123\x63\150\145\x64\x75\x6c\x65\162\40\x51\x75\x65\165\x65"]); } }
