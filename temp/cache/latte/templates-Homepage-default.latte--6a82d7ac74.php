<?php
// source: C:\xampp\htdocs\Zbysaweb\app\PublicModule/templates/Homepage/default.latte

use Latte\Runtime as LR;

final class Template6a82d7ac74 extends Latte\Runtime\Template
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
<div class="main">
    <section id="first">
        <div class="public-layout text-center">
            <p>
                <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */ ?>/logo2.png" alt="logo" height="72px;">
                <br>
                <br>
                <a id="it" class="link text-decoration-none " href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:developer")) ?>"><i class="fas fa-laptop-code"></i> PROGRAMÁTOR
                    <i class="fas fa-laptop-code"></i></a>
                <br>
                <a class="link text-decoration-none" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:routeSetter")) ?>"><img src="img/drill.png" height="48px"> STAVĚČ <img
                            src="img/drill.png" height="48px"></a>
                <br>
                <a class="link text-decoration-none" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:blog")) ?>"><img src="img/icon-climber.png" height="48px"> BLOG <img
                            src="img/icon-climber.png" height="48px"></a>
                <br>
                <a class="link text-decoration-none" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:contact")) ?>"><i class="fas fa-phone"></i> KONTAKT <i
                            class="fas fa-phone"></i></a>
                <br>
                <a href="#6" class="link text-decoration-none"><i class="fas fa-info"></i> O MNĚ <i
                            class="fas fa-info"></i></a>
            </p>
        </div>
    </section>
</div>



<?php
	}

}
