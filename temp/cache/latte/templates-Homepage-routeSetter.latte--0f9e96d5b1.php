<?php
// source: C:\xampp\htdocs\Zbysaweb\app\PublicModule/templates/Homepage/routeSetter.latte

use Latte\Runtime as LR;

final class Template0f9e96d5b1 extends Latte\Runtime\Template
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
?><div class="route-setter">
  <div class="content">
    <div class="title">

      <p></p>
      <p><b>Stavění je pro mě srdcová záležitost. Mám rád, když lidi baví moje cesty</b></p>
    </div>
      <div class="body-content row col-md-12 justify-content-around">
          <div class="column col-md-4 rounded">
              <p><b>Komerční stavění</b></p>

              <p class="text-left">
                  Ve svém domovském městě se pod hlavičkou HK lanškoun starám nyný starám o obměnu bouldrovky
                  a částečně i o stěnu na lano. Mimo to jsem stavěl na rouzných stěnách v české republice.
              </p>
          </div>
          <div class="column col-md-4 rounded">
              <p><b>závodní stavění</b></p>

              <p class="text-left">
                  Stavění závodů se věnuji přibližně osm let, převážně stavím závody pro děti s cestamy do 7c/8a.
                  Jako hlavní nebo vedlejší stavěč jsem stavěl všechny úrovně tuzemské dětských závodů, od malých okresních po celorepublikové.
                  Jsem držitelem licence <b>hlavní stavěč ČHS</b>
              </p>
          </div>
      </div>
    <p>Stavět jsem začal přibližně deset let zpátky na své domovské stěne v Lanškrouně. Pomáhal jsem s přestavbou stěny a přípravou dětských závodů.</p>
  <p>Boužel pro lezení a školu mi na stavění nezbývábá tolik času, jak bych si představoval</p>
  <p>Odborná kvalifikace pro závody: Hlavní stavěč ČHS</p>
  <p>Seznam postavených závodů jako hlavní stavěč</p>
  <p>Seznam postavených závodů jako pomocný stavěč</p>
  <p>Spoustu postavených cest a bouldrů různě po republice a v okolí lánškrouna</p>
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


<?php
	}

}
