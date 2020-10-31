<?php
// source: C:\xampp\htdocs\Zbysaweb\app/templates/Homepage/login.latte

use Latte\Runtime as LR;

final class Templated0cd520647 extends Latte\Runtime\Template
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
		/* line 2 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["loginForm"], []);
?>


    <div class="d-flex justify-content-center form">
      <div class="col-md-4">
        <div class="card bg-gray-light">
          <div class="card-header bg-primary"><span class="panel-title text-light">Přihlášení do systému BOZALA</span></div>
          <div class="card-body">

            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <?php echo end($this->global->formsStack)["email"]->getControl() /* line 12 */ ?>

            </div>

            <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <?php echo end($this->global->formsStack)["passwd"]->getControl() /* line 17 */ ?>

            </div>


            <?php echo end($this->global->formsStack)["login"]->getControl()->addAttributes(['class'=>"btn btn-primary btn-block"]) /* line 21 */ ?>

          </div>
        </div>
      </div>
    </div>
  <br>
  <div class="container">
    <div class="row justify-content-center">
    <p>pokud jste zapoměli heslo, klidkněte <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:forgetPasswd")) ?>">zde.</a></p>
    </div>
  </div>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>




<?php
	}

}
