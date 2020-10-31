<?php
// source: C:\xampp\htdocs\Zbysaweb\app\factureModule/templates/Administration/customer.latte

use Latte\Runtime as LR;

final class Template0f49652c4f extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
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
			foreach (array_intersect_key(['value' => '24', 'item' => '22'], $this->params) as $_v => $_l) {
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
  <div class="d-flex justify-content-end">
  <a class="btn bg-primary text-white" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:newCustomer")) ?>"><i class="fa fa-plus"></i> Nový odběratel</a>
  </div>
<div class="pt-2">
<table class="table border">
  <thead>
    <tr>
      <th>jméno</th>
      <th>ulice</th>
      <th>číslo domu</th>
      <th>město</th>
      <th>firma</th>
      <th>IČO</th>
      <th>DIČO</th>
      <th>PSČ</th>
      <th>editovat</th>
    </tr>
  </thead>
  <tbody>
<?php
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($table) as $item) {
?>
    <tr>
<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($item) as $value) {
				if (!$iterator->isFirst()) {
					?>        <td> <?php echo LR\Filters::escapeHtmlText($value) /* line 26 */ ?></td>
<?php
				}
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
?>
      <td>
        <a title="upravit" class="btn" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:newCustomer", ['id' => $item->id_customer])) ?>">
          <i class="fas fa-pencil fa"></i>
        </a>
        <a title="smazat" class="btn" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("deleteItem!", ['type'=>'customerModel', 'id' => $item->id_customer ])) ?>">
          <i class="fa fa-trash fa"></i>
        </a>
      </td>
    </tr>
  </tbody>
<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>
</table>
</div>
</div>





<?php
	}

}
