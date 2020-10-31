<?php
// source: C:\xampp\htdocs\Zbysaweb\app/templates/Administration/myAddress.latte

use Latte\Runtime as LR;

final class Templatebe0d383d74 extends Latte\Runtime\Template
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

<div class="container text-left mt-5 bg-primary text-white rounded">
  <h3 class="text-center pt-4 pb-2 border-bottom"> Moje údaje </h3>
  <?php
		/* line 5 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["supplierForm"], ['class' => "p-3"]);
?>

  <div class="form-row">
    <div class="form-group col-md-6">
      <?php if ($_label = end($this->global->formsStack)["firstName"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["firstName"]->getControl()->addAttributes(['class' => "form-control"]) /* line 9 */ ?>

    </div>
    <div class="form-group col-md-6">
    <?php if ($_label = end($this->global->formsStack)["lastName"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["lastName"]->getControl()->addAttributes(['class' => "form-control"]) /* line 13 */ ?>

    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["city"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["city"]->getControl()->addAttributes(['class' => "form-control"]) /* line 19 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["cityPostCode"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["cityPostCode"]->getControl()->addAttributes(['class' => "form-control"]) /* line 23 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["street"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["street"]->getControl()->addAttributes(['class' => "form-control"]) /* line 27 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["houseNumber"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["houseNumber"]->getControl()->addAttributes(['class' => "form-control"]) /* line 31 */ ?>

  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["bank"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["bank"]->getControl()->addAttributes(['class' => "form-control"]) /* line 37 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["swift"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["swift"]->getControl()->addAttributes(['class' => "form-control"]) /* line 41 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["iban"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["iban"]->getControl()->addAttributes(['class' => "form-control"]) /* line 45 */ ?>

  </div>
  <div class="form-group col-md-3">
    <?php if ($_label = end($this->global->formsStack)["bankNumber"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["bankNumber"]->getControl()->addAttributes(['class' => "form-control"]) /* line 49 */ ?>

  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <?php if ($_label = end($this->global->formsStack)["ico"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["ico"]->getControl()->addAttributes(['class' => "form-control"]) /* line 55 */ ?>

    </div>
    <div class="form-group col-md-3">
      <?php if ($_label = end($this->global->formsStack)["tel"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["tel"]->getControl()->addAttributes(['class' => "form-control"]) /* line 59 */ ?>

    </div>
    <div class="form-group col-md-3">
      <?php if ($_label = end($this->global->formsStack)["dueDays"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["dueDays"]->getControl()->addAttributes(['class' => "form-control"]) /* line 63 */ ?>

    </div>
    <div class="form-group col-md-3">
      <?php if ($_label = end($this->global->formsStack)["nextFactureNumber"]->getLabel()) echo $_label ?>

      <?php echo end($this->global->formsStack)["nextFactureNumber"]->getControl()->addAttributes(['class' => "form-control"]) /* line 67 */ ?>

    </div>
  </div
  <div class="form-row">
    <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-light col-md-3 "]) /* line 71 */ ?>

  </div>
  <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

</div>

<?php
	}

}
