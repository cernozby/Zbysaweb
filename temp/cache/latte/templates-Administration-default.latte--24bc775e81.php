<?php
// source: C:\xampp\htdocs\Zbysaweb\app/templates/Administration/default.latte

use Latte\Runtime as LR;

final class Template24bc775e81 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'_' => 'block_b14a7',
	];

	public $blockTypes = [
		'content' => 'html',
		'_' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['item' => '28'], $this->params) as $_v => $_l) {
				trigger_error("Variable \$$_v overwritten in foreach on line $_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockContent(array $_args): void
	{
		extract($_args);
?>
<div class="container pt-5">
    <div class="d-flex justify-content-between">
        <div class="form-inline">
            <label for="sel1">Filtr:&nbsp; &nbsp;</label>
            <select class="form-control" id="filtrFacture">
                <option value="all">vše</option>
                <option value="pay">zaplacené</option>
                <option value="unpay">nezaplacené</option>
                <option value="unsend">neodeslané</option>
            </select>
        </div>
        <a class="btn bg-primary text-white" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:generatePdf")) ?>"><i class="fa fa-plus"></i> Nová faktura</a>
    </div>
    <div class="pt-2">
<div id="<?php echo htmlspecialchars($this->global->snippetDriver->getHtmlId('')) ?>"><?php $this->renderBlock('_', $this->params) ?></div>    </div>
</div>

<script>
    function pay (element) {
       naja.makeRequest('POST', <?php echo LR\Filters::escapeJs($this->global->uiControl->link("FacturePay!")) ?>, { id : element.dataset.id, type : element.dataset.type, value: document.getElementById('filtrFacture').value});
    }

    document.getElementById('filtrFacture').addEventListener("change", function () {
        naja.makeRequest('POST', <?php echo LR\Filters::escapeJs($this->global->uiControl->link("chooseSome!")) ?>, { value : this.value});
    });


    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('opravdu')) {
            e.preventDefault();
        }
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }

</script>







<?php
	}


	public function block_b14a7(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("", "static");
?>
        <table class="table border table-text-center ">
            <thead>
            <tr class="bg-primary text-light">
                <th>Faktura</th>
                <th>Datum vystavení</th>
                <th>Datum Splatnosti</th>
                <th>stav</th>
                <th>Akce</th>
            </tr>
            </thead>
            <tbody>
<?php
		$iterations = 0;
		foreach ($table as $item) {
			$color = "";
			if ($item->state == 'pay') {
				$color = 'bg-success';
			}
			elseif ($item->state !== 'created' && (new DateTime() > Nette\Utils\DateTime::from(str_replace('. ', '-', $item->limitDate)))) {
				$color = 'bg-danger';
			}
			elseif ($item->state == 'download') {
				$color = 'bg-light-yellow';
			}
			?>                    <tr class="<?php echo LR\Filters::escapeHtmlAttr($color) /* line 37 */ ?>">
                        <td>
                            <a target="_blank"
                               class="btn btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("generatePdf!", ['id' => $item->id_facture, 'type' => 'view' ])) ?>"><?php
			echo LR\Filters::escapeHtmlText($item->factureName) /* line 40 */ ?> </a>
                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($item->initDate) /* line 43 */ ?>

                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($item->limitDate) /* line 46 */ ?>

                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText(\Constants::STATES[$item->state]) /* line 49 */ ?>

                        </td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("generatePdf!", ['id' => $item->id_facture, 'type' => 'downland' ])) ?>">
                                <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;stáhnout
                            </a>
<?php
			if ($item->state != 'created') {
				?>                            <button class="btn btn-primary" id="pay" onclick="pay(this)" data-id = "<?php
				echo LR\Filters::escapeHtmlAttr($item->id_facture) /* line 56 */ ?>" data-type = "<?php echo LR\Filters::escapeHtmlAttr($item->state) /* line 56 */ ?>">
                              &nbsp;&nbsp;<?php
				if ($item->state !== 'pay') {
?><i class="fa fa-check"></i>&nbsp;&nbsp;zaplatit
                                <?php
				}
				else {
					?><i class="fa fa-close"></i>&nbsp;&nbsp;zrušit <?php
				}
?>

                            </button>
<?php
			}
			?>                            <a title="upravit" class="btn btn-primary confirmation" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:generatePdf", ['id' => $item->id_facture])) ?>">
                                <i class="fas fa-pencil fa"></i>&nbsp;&nbsp;upravit
                            </a>
                            <a title="smazat" class="btn btn-primary confirmation" " href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("deleteItem!", ['type'=>'factureModel', 'id' => $item->id_facture ])) ?>">
                                <i class="fa fa-trash fa"></i>&nbsp;&nbsp;smazat
                            </a>
                        </td>
                    </tr>
<?php
			$iterations++;
		}
?>
            </tbody>
        </table>
<?php
		$this->global->snippetDriver->leave();
		
	}

}
