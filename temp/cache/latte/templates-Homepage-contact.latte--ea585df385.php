<?php
// source: C:\xampp\htdocs\Zbysaweb\app\PublicModule/templates/Homepage/contact.latte

use Latte\Runtime as LR;

final class Templateea585df385 extends Latte\Runtime\Template
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
?>

<?php
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
?><div id="page-contact">
  <div style="width: 80%; margin-left: auto; margin-right: auto;">
  <div class="row text-left d-flex justify-content-center contact rounded">
    <div class="col-md-4 align-middle align-self-center" id="my-img">
      <div>
      <img src="/img/zbys.jpg"  alt="Zbyšek Černohous" width="256px">
      </div>
      <br>
    </div>
    <div class="col-md-4 align-self-center">
      <p><b>Zbyšek Černohous</b>
        <br>B. Smetany 407
        <br>Lanškroun 563 01
      </p>
    </div>
    <div class="col-md-4 align-self-center">
      <p>
        <i class="fa fa-phone"></i>&nbsp;00420&nbsp;739&nbsp;549&nbsp;728
        <br><i class="fa fa-envelope"></i>&nbsp; Zbysa.Cernohous@seznam.cz
      </p>

      <a href="https://www.facebook.com/profile.php?id=100004443242801" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
      &nbsp;&nbsp;
      <a href="https://www.facebook.com/profile.php?id=100004443242801" target="_blank"><i class="fab fa-github fa-3x"></i></a>
    </div>
  </div>
  </div>
</div>
<?php
	}

}
