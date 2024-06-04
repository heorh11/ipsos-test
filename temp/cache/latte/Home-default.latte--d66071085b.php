<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\gheor\ipsos-test\app\UI\Home/default.latte */
final class Template_d66071085b extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\gheor\\ipsos-test\\app\\UI\\Home/default.latte';

	public const Blocks = [
		['header' => 'blockHeader', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo "\n";
		$this->renderBlock('header', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 8 */;
		echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('public' / 'nette.ajax.js')) /* line 15 */;
		echo '"></script>';
	}


	/** {block header} on line 2 */
	public function blockHeader(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <h1>Login</h1>
    <div class=\'nav\'>
          <a class="nav" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($presenter->link('Home:contact'))) /* line 5 */;
		echo '">Contact Us</a>
     </div>
';
	}


	/** {block content} on line 8 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$ʟ_tmp = $this->global->uiControl->getComponent('loginForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 9 */;

		echo '
    
';
	}
}
