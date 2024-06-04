<?php

namespace App\UI\Info;

use Nette\Application\UI\Presenter;

class InfoPresenter extends Presenter
{
    protected function startup(): void
    {
        parent::startup();
        if (!$this->getUser()->isLoggedIn()) {
            $this->flashMessage('You need to log in to access this page.', 'warning');
            $this->redirect('Home:');
        }
    }

    public function renderDefault(): void
    {
    }
}
