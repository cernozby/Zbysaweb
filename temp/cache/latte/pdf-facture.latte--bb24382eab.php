<?php
// source: C:\xampp\htdocs\Zbysaweb\app\model/../pdf/facture.latte

use Latte\Runtime as LR;

final class Templatebb24382eab extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
?>
<table class="header">
  <tr>
    <td class="border-left border-top" style=" width: 200px">
      <b>FAKTURA - DOKLAD Č.</b>
    </td>
    <td class="border-top border-right" style="width: 150px; text-align: right">
<?php
		$number = $factureNumber;
?>

      <b><?php echo LR\Filters::escapeHtmlText(date('Y')) /* line 9 */ ?>-<?php
		for ($i=0;
		$i < 4-strlen($number);
		$i++) {
			?>0<?php
		}
		echo LR\Filters::escapeHtmlText($number) /* line 9 */ ?></b>
    </td>
    <td colspan="2"></td>
  </tr>
</table>
<table class="content">
  <tr class="tr-one">
    <td class="one">
      <b>Dodavatel:</b>
    </td>
    <td class="border-right two">
      <?php echo LR\Filters::escapeHtmlText($supplier_firstName) /* line 20 */ ?>&nbsp;<?php echo LR\Filters::escapeHtmlText($supplier_lastName) /* line 20 */ ?>

    </td>
    <td class="one">
      <b>Odběratel:</b>
    </td>
    <td class="two">
      <?php echo LR\Filters::escapeHtmlText($customer_firma) /* line 26 */ ?>

    </td>
  </tr>
  <tr class="tr-two">
    <td class="one"> Adresa:</td>
    <td class="border-right two"> <?php echo LR\Filters::escapeHtmlText($supplier_street) /* line 31 */ ?>&nbsp;<?php
		echo LR\Filters::escapeHtmlText($supplier_houseNumber) /* line 31 */ ?></td>
    <td class="one">Adresa:</td>
    <td class="two"><?php echo LR\Filters::escapeHtmlText($customer_street) /* line 33 */ ?>&nbsp;<?php echo LR\Filters::escapeHtmlText($customer_houseNumber) /* line 33 */ ?></td>
  </tr>
  <tr class="tr-three">
    <td class="one"></td>
    <td class="border-right two"><?php echo LR\Filters::escapeHtmlText($supplier_city) /* line 37 */ ?></td>
    <td class="one"></td>
    <td class="two"><?php echo LR\Filters::escapeHtmlText($customer_city) /* line 39 */ ?></td>
  </tr>
  <tr class="tr-four">
    <td class="one">IČO:</td>
    <td class="border-right two"><?php echo LR\Filters::escapeHtmlText($supplier_ico) /* line 43 */ ?></td>
    <td class="one">IČO:</td>
    <td class="two"><?php echo LR\Filters::escapeHtmlText($customer_ico) /* line 45 */ ?></td>
  </tr>
  <tr class="tr-five">
    <td colspan="2" class="border-right">Neplátce DPH</td>
    <td class="one">DIČ</td>
    <td class="two"><?php echo LR\Filters::escapeHtmlText($customer_dico) /* line 50 */ ?></td>
  </tr>
  <tr class="tr-six">
    <td colspan="2" class="border-right">Podnikatel je zapsán do živnostenského rejstříku</td>
    <td colspan="2"></td>
  </tr>
</table>
<table class="bank" >
  <tr>
    <td>Banka:</td>
    <td class="border-left border-bottom border-right"><?php echo LR\Filters::escapeHtmlText($supplier_bank) /* line 60 */ ?></td>
    <td>Forma úhrady:</td>
    <td class="border-left border-bottom border-right">převodem</td>
  </tr>
  <tr>
    <td>SWIFT:</td>
    <td class="border-left border-bottom border-right"><?php
		if ($supplier_swift) {
			echo LR\Filters::escapeHtmlText($swift) /* line 66 */;
		}
		else {
			?>-<?php
		}
?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>IBAN:</td>
    <td class="border-left border-bottom border-right"><?php
		if ($supplier_iban) {
			echo LR\Filters::escapeHtmlText($iban) /* line 72 */;
		}
		else {
			?>-<?php
		}
?></td>
    <td>Datum vystavení:</td>
    <td class="border-left border-bottom border-right border-top"><?php echo LR\Filters::escapeHtmlText($initDate) /* line 74 */ ?></td>
  </tr>
  <tr>
    <td>Číslo účtu:</td>
    <td class="border-left border-bottom border-right"><?php echo LR\Filters::escapeHtmlText($supplier_bankNumber) /* line 78 */ ?></td>
    <td>Datum splatnosti:</td>
    <td class="border-left border-bottom border-right"><?php echo LR\Filters::escapeHtmlText($limitDate) /* line 80 */ ?></td>
  </tr>
  <tr class="tr-five">
    <td colspan="2" class="border-right"></td>
    <td colspan="2"></td>
  </tr>
</table>


<table class="text">
  <tr>
    <td colspan="4" class="textarea"><?php echo LR\Filters::escapeHtmlText($text) /* line 91 */ ?></td>
  </tr>
  <tr>
    <td>
      CELKEM K ÚHRADĚ:
    </td>
    <td></td>
    <td></td>
    <td class="border-left border-top text-right"><?php echo LR\Filters::escapeHtmlText($value) /* line 99 */ ?>,- Kć</td>
  </tr>
</table>
<table class="footer">
  <tr class="tr-one">
    <td>Vystavil:</td>
    <td><?php echo LR\Filters::escapeHtmlText($supplier_firstName) /* line 105 */ ?>&nbsp;<?php echo LR\Filters::escapeHtmlText($supplier_lastName) /* line 105 */ ?></td>
    <td colspan="2"></td>
  </tr>
  <tr class="tr-two">
    <td>Telefon:</td>
    <td><?php echo LR\Filters::escapeHtmlText($supplier_tel) /* line 110 */ ?></td>
    <td colspan="2"></td>
  </tr>
</table>
<?php
		return get_defined_vars();
	}

}
