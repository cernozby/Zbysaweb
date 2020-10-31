<?php
// source: C:\xampp\htdocs\Zbysaweb\app/templates/Administration/newCustomer.latte

use Latte\Runtime as LR;

final class Templatef1de00a3f5 extends Latte\Runtime\Template
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
  <div class="d-flex justify-content-end">
    <a class="btn bg-primary text-white" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:customer")) ?>"><i class="fa fa-arrow-left"></i> Všichni odběratelé</a>
  </div>
 <div class="text-left bg-primary mt-2 text-white rounded">
  <h3 class="text-center pt-4 pb-2 border-bottom"> Nový odběratel </h3>
  <?php
		/* line 9 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["customerForm"], ['class' => "p-3"]);
?>

  <div class="form-row">
    <div class="form-group col-md-6">
      <?php if ($_label = end($this->global->formsStack)["name"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["name"]->getControl()->addAttributes(['class' => "form-control"]) /* line 13 */ ?>

    </div>
    <div class="form-group col-md-6">
    <?php if ($_label = end($this->global->formsStack)["firma"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["firma"]->getControl()->addAttributes(['class' => "form-control"]) /* line 17 */ ?>

    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["city"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["city"]->getControl()->addAttributes(['class' => "form-control"]) /* line 23 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["cityPostCode"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["cityPostCode"]->getControl()->addAttributes(['class' => "form-control"]) /* line 27 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["street"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["street"]->getControl()->addAttributes(['class' => "form-control"]) /* line 31 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["houseNumber"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["houseNumber"]->getControl()->addAttributes(['class' => "form-control"]) /* line 35 */ ?>

  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <?php if ($_label = end($this->global->formsStack)["ico"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["ico"]->getControl()->addAttributes(['class' => "form-control"]) /* line 41 */ ?>

    </div>
    <div class="form-group col-md-6">
      <?php if ($_label = end($this->global->formsStack)["dico"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["dico"]->getControl()->addAttributes(['class' => "form-control"]) /* line 45 */ ?>

    </div>
  </div
  <div class="form-row">
    <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-light col-md-3 "]) /* line 49 */ ?>

  </div>
    <?php echo end($this->global->formsStack)["id_customer"]->getControl() /* line 51 */ ?>

  <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

</div>
</div><?php
	}

}
