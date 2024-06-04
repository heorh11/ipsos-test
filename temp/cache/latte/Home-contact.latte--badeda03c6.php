<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\gheor\ipsos-test\app\UI\Home/contact.latte */
final class Template_badeda03c6 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\gheor\\ipsos-test\\app\\UI\\Home/contact.latte';

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

		$this->renderBlock('header', get_defined_vars()) /* line 1 */;
		$this->renderBlock('content', get_defined_vars()) /* line 12 */;
	}


	/** {block header} on line 1 */
	public function blockHeader(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '     <h1>';
		echo LR\Filters::escapeHtmlText(($this->filters->translate)(\Contributte\Translation\Helpers::prefixMessage('messages.contactForm.title', $ᴛ_contributteTranslationPrefix ?? null))) /* line 2 */;
		echo '</h1>
     <div class=\'nav\'>
        <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($presenter->link('Info:info'))) /* line 4 */;
		echo '">Info</a>
     </div>
     <div class=\'languages\'>
     <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('changeLanguage!', ['cs'])) /* line 7 */;
		echo '">Cs</a> 
     <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('changeLanguage!', ['en'])) /* line 8 */;
		echo '">En</a>
     </div>
    
';
	}


	/** {block content} on line 12 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$ʟ_tmp = $this->global->uiControl->getComponent('contactForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 13 */;

		echo "\n";
		if ($contactFormValues) /* line 15 */ {
			echo '        <h2>';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)(\Contributte\Translation\Helpers::prefixMessage('messages.contactForm.submittedValues', $ᴛ_contributteTranslationPrefix ?? null))) /* line 16 */;
			echo '</h2>
        <ul>
            <li>';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)(\Contributte\Translation\Helpers::prefixMessage('messages.contactForm.firstName', $ᴛ_contributteTranslationPrefix ?? null))) /* line 18 */;
			echo ': ';
			echo LR\Filters::escapeHtmlText($contactFormValues->firstName) /* line 18 */;
			echo '</li>
            <li>';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)(\Contributte\Translation\Helpers::prefixMessage('messages.contactForm.lastName', $ᴛ_contributteTranslationPrefix ?? null))) /* line 19 */;
			echo ': ';
			echo LR\Filters::escapeHtmlText($contactFormValues->lastName) /* line 19 */;
			echo '</li>
            <li>';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)(\Contributte\Translation\Helpers::prefixMessage('messages.contactForm.subject', $ᴛ_contributteTranslationPrefix ?? null))) /* line 20 */;
			echo ': ';
			echo LR\Filters::escapeHtmlText($contactFormValues->subject) /* line 20 */;
			echo '</li>
            <li>';
			echo LR\Filters::escapeHtmlText(($this->filters->translate)(\Contributte\Translation\Helpers::prefixMessage('messages.contactForm.message', $ᴛ_contributteTranslationPrefix ?? null))) /* line 21 */;
			echo ': ';
			echo LR\Filters::escapeHtmlText($contactFormValues->message) /* line 21 */;
			echo '</li>
        </ul>
';
		}
	}
}
