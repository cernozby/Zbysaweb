<?php
// source: C:\xampp\htdocs\Zbysaweb\app\factureModule/templates/Administration/generatePdf.latte

use Latte\Runtime as LR;

final class Template44638b466b extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockContent(array $_args): void
	{
		extract($_args);
?>

<div class="container pt-5">
  <div class="text-left bg-primary mt-2 text-white rounded">
    <h3 class="text-center pt-4 pb-2 border-bottom"> Generátor faktury </h3>
    <?php
		/* line 6 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["factureForm"], ['class' => "p-3"]);
?>

      <?php echo end($this->global->formsStack)["id_facture"]->getControl() /* line 7 */ ?>

    <div class="form-row">
      <div class="form-group col-md-4">
        <?php if ($_label = end($this->global->formsStack)["factureName"]->getLabel()) echo $_label ?>

        <?php echo end($this->global->formsStack)["factureName"]->getControl()->addAttributes(['class' => "form-control"]) /* line 11 */ ?>

      </div>
      <div class="form-group col-md-2">
        <?php if ($_label = end($this->global->formsStack)["customer_id"]->getLabel()) echo $_label ?>

        <?php echo end($this->global->formsStack)["customer_id"]->getControl()->addAttributes(['class' => "form-control"]) /* line 15 */ ?>

      </div>
      <div class="form-group col-md-2">
      <?php if ($_label = end($this->global->formsStack)["initDate"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["initDate"]->getControl()->addAttributes(['class' => "form-control"]) /* line 19 */ ?>

      </div>
      <div class="form-group col-md-2">
        <?php if ($_label = end($this->global->formsStack)["value"]->getLabel()) echo $_label ?>

        <?php echo end($this->global->formsStack)["value"]->getControl()->addAttributes(['class' => "form-control"]) /* line 23 */ ?>

      </div>
      <div class="form-group col-md-2">
        <?php if ($_label = end($this->global->formsStack)["factureNumber"]->getLabel()) echo $_label ?>

        <?php echo end($this->global->formsStack)["factureNumber"]->getControl()->addAttributes(['class' => "form-control"]) /* line 27 */ ?>

      </div>
    </div>
    <div class="form-group">
      <?php if ($_label = end($this->global->formsStack)["text"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["text"]->getControl()->addAttributes(['class' => "form-control"]) /* line 32 */ ?>

    </div>
    <div class="form-row">
      <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-light col-md-3 "]) /* line 35 */ ?>

    </div>
    <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

  </div>
</div><?php
	}

}
