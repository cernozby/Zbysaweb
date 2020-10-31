<?php
// source: C:\xampp\htdocs\Zbysaweb\app\PublicModule/templates/@layout.latte

use Latte\Runtime as LR;

final class Templatedd6fda8be9 extends Latte\Runtime\Template
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
  <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 5 */ ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */ ?>/style/css/styl.css">
  <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */ ?>/js/onepage-scroll-1.3.1/onepage-scroll.css">
  <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */ ?>/js/vegas/vegas.css">
  <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */ ?>/js/mobile-image-viewer-modal/jquery.mtfpicviewer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
          crossorigin="anonymous"></script


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="wholeBody">
<div id="contextWithoutFootet">

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
              <h4><?php echo LR\Filters::escapeHtmlText($flash->message) /* line 43 */ ?><h4>
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
		if (!($this->global->fn->isLinkCurrent)('Homepage:default')) {
?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar" style="max-width: 100%">
    <a style="margin-left: 5% !important;" class="navbar-brand" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>"><img src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 57 */ ?>/logo2.png" alt="logo" height="32px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto" style="margin-right: 15% !important" >
        <li class="nav-item">
          <span class="un"><a class="nav-link <?php
			if (($this->global->fn->isLinkCurrent)('Homepage:developer')) {
				?> active <?php
			}
			?>" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:developer")) ?>">programátor</a></span>
        </li>
        <li class="nav-item">
          <span class="un"> <a class="nav-link <?php
			if (($this->global->fn->isLinkCurrent)('Homepage:routeSetter')) {
				?> active <?php
			}
			?>" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:routeSetter")) ?>">stavěč</a></span>
        </li>
        <li class="nav-item">
          <span class="un"> <a class="nav-link <?php
			if (($this->global->fn->isLinkCurrent)('Homepage:blog')) {
				?> active <?php
			}
			?>" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:blog")) ?>">blog</a></span>
        </li>
        <li class="nav-item">
          <span class="un"> <a class="nav-link <?php
			if (($this->global->fn->isLinkCurrent)('Homepage:contact')) {
				?> active <?php
			}
			?>" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:contact")) ?>">kontakt</a></span>
        </li>
      </ul>
    </div>
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


</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', naja.initialize.bind(naja));
</script>

<script>
  $(".main").onepage_scroll({
    sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
    easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                     // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
    animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
    pagination: false,                // You can either show or hide the pagination. Toggle true for show, false for hide.
    updateURL: true,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    beforeMove: function(index) {
    },  // This option accepts a callback function. The function will be called before the page moves.
    afterMove: function(index) {
        transparentNav(index)
    },   // This option accepts a callback function. The function will be called after the page moves.
    loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    keyboard: true,                  // You can activate the keyboard controls
    responsiveFallback: true,        // You can fallback to normal page scroll by defining the width of the browser in which
    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
    // the browser's width is less than 600, the fallback will kick in.
    direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
  });


  $("#first").vegas({
      delay: 20000,
      timer: false,
      firstTransition: 'fade',
      transition: 'fade',
      transitionDuration: '1000',
      animationDuration: '10000',
      cover: 'repeat',

      slides: [
          { src: "/img/climber2.jpg" },
          { src: "/img/climber1.jpg"},
          { src: "/img/climber3.jpg"},
          { src: "/img/climber4.jpg"}
      ],
      animation: 'kenburnsLeft'
  });

</script>


<script>
    $('#my-img').mtfpicviewer({
        selector: 'img',
        attrSelector: 'src',
        parentSelector:'div',
        className:'pic-viewer'
    });
</script>

<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '32'], $this->params) as $_v => $_l) {
				trigger_error("Variable \$$_v overwritten in foreach on line $_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockScripts(array $_args): void
	{
		extract($_args);
?>

    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 85 */ ?>/js/naja/Naja.js"></script>
    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 86 */ ?>/js/vegas/vegas.js"></script>
    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 88 */ ?>/js/onepage-scroll-1.3.1/jquery.onepage-scroll.js"></script>
    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 89 */ ?>/js/mobile-image-viewer-modal/jquery.mtfpicviewer.js"></script>

<?php
	}

}
