<?php
// source: C:\xampp\htdocs\Zbysaweb\app\PublicModule/templates/Homepage/developer.latte

use Latte\Runtime as LR;

final class Templatede87382bd3 extends Latte\Runtime\Template
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
?><div id="second">
  <div class="skills">
    <div class="skills-label">
      <h3>DOVEDNOSTI</h3>
      <br>
      <p><b>Studuji na CVUT FIT. Neustále se učím nové věci. Baví mě to!</b></p>
    </div>
    <div class="hr-line"></div>
  </div>

  <div style="width: 80%; margin-left: auto; margin-right: auto;" >

    <div class="row justify-content-md-center col-md-12">
      <div class="col-md-8 text-center d-flex justify-content-center redirect-btn">
        <h3>Programy, ve kterých pracuji.</h3>
      </div>
    </div>


    <div class="row col-md-12">
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-php.png" alt="html" class="image" height="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 align-self-center">
        <img src="img/icon-nette.png" alt="html" class="image" height="64px" width="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-js.png" alt="html" class="image" height="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-sql.png" alt="html" class="image" height="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-html.png" alt="html" class="image" height="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-css.png" alt="html" class="image" height="128px">
      </div>
    </div>
    <br>
    <br>
    <div class="row justify-content-md-center col-md-12">
      <div class="col-md-8 text-center d-flex justify-content-center redirect-btn">
        <h3>Programy, se kterými mám pouze školní zkušenost</h3>
      </div>
    </div>


    <div class="row col-md-12 justify-content-center">
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-c.png" alt="html" class="image" height="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/icon-python.png" alt="html" class="image" height="128px">
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <img src="img/java.png" alt="html" class="image" height="128px">
      </div>
    </div>
    <br>
    <br>
    <div class="row justify-content-md-center col-md-12">
      <div class="col-md-6 text-center btn-skills d-flex justify-content-center redirect-btn">
        <a class="link text-decoration-none" href=""><h3>Výběr mých prací / projektů&nbsp;<i class="fa fa-forward"></i> </h3></a>
      </div>
    </div>

  </div>
  <div class="row text-left d-flex justify-content-center contact">
    <div class="col-md-3 align-middle align-self-center"><h3>KONTAKT</h3></div>
    <div class="col-md-3">
      <p><b>Zbyšek Černohous</b>
        <br>B. Smetany 407
        <br>Lanškroun 563 01
      </p>
    </div>
    <div class="col-md-4">
      <p>
        <i class="fa fa-phone"></i> 00420 739 549 728
        <br><i class="fa fa-envelope"></i> Zbysa.Cernohous@seznam.cz
      </p>
    </div>
    <div class="col-md-2">
      <p>
        <a href="https://www.facebook.com/profile.php?id=100004443242801" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
        &nbsp;&nbsp;
        <a href="https://www.facebook.com/profile.php?id=100004443242801" target="_blank"><i class="fab fa-github fa-3x"></i></a>
      </p>
    </div>
  </div>
</div>
<div class="d-flex flex-column">
</div>



<?php
	}

}
