<?php
// source: C:\xampp\htdocs\Zbysaweb\app/templates/@layout.latte

use Latte\Runtime as LR;

final class Templateae07523562 extends Latte\Runtime\Template
{
	public $blocks = [
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'scripts' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/style/css/styl.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
          crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://api.mapy.cz/loader.js"></script>
  <script type="text/javascript">Loader.load()</script>
</head>

<body>
<div
    id="contextWithoutFootet">

<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
?>  <div>
    <div class="container">
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-info btn-lg" id="modal" data-toggle="modal" data-target="#myModal"
              hidden="true"></button>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content alert text-center">
            <div class="modal-body">
              <h4><?php echo LR\Filters::escapeHtmlText($flash->message) /* line 38 */ ?><h4>
            </div>
            <div>
              <button type="button" class="btn btn-warning text-dark" data-dismiss="modal" style="width: 20%;">Zavřít
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
			$iterations++;
		}
?>


<?php
		if ($user->isLoggedIn()) {
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:default")) ?>">Přehled</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php
			if (($this->global->fn->isLinkCurrent)('Administration:generatePdf')) {
				?> active <?php
			}
?>">
          <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:generatePdf")) ?>">Generovat PDF Fakturu</a>
        </li>
        <li class="nav-item <?php
			if (($this->global->fn->isLinkCurrent)('Administration:customer')) {
				?> active <?php
			}
?>">
          <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:customer")) ?>">odběratelé</a>
        </li>
        <li class="nav-item <?php
			if (($this->global->fn->isLinkCurrent)('Administration:myAddress')) {
				?> active <?php
			}
?>">
          <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:myAddress")) ?>">moje údaje</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:Out")) ?>"><i class="fa fa-sign-out"></i></a>
        </li>
      </ul>
    </nav>
<?php
		}
		else {
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:custom")) ?>">Navbar</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Left Link 2</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link">Right Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:login")) ?>"><i class="fa fa-sign-in"></i></a>
      </li>
    </ul>
  </nav>
<?php
		}
?>
  <div class="body">
<?php
		$this->renderBlock('content', $this->params, 'html');
?>
  </div>

<?php
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars());
?>

</div>
<footer id="sticky-footer" class="py-4 bg-primary text-light">
  <div class="container text-center">
    <small>Copyright &copy; 2020 Zbyšek Černohous</small>
  </div>
</footer>

</body>
</html>

<script type="text/javascript">
    $(document).ready( function () {
        $("#modal").trigger('click', true)
    })

</script>
<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '27'], $this->params) as $_v => $_l) {
				trigger_error("Variable \$$_v overwritten in foreach on line $_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockScripts(array $_args): void
	{
		extract($_args);
?>

    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 98 */ ?>/js/naja/Naja.js"></script>
    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', naja.initialize.bind(naja));
    </script>

<?php
	}

}
