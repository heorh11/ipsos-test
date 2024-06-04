<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Nette\Security\AuthenticationException;
use Contributte\Translation\Translator;
use Tracy\Debugger;


class HomePresenter extends Presenter
{
    /** @var Translator @inject */
    public $translator;

    protected function createComponentContactForm(): Form
    {
        $form = new Form;

        $form->addText('firstName', $this->translator->translate('messages.contactForm.firstName'))
            ->setRequired($this->translator->translate('messages.contactForm.firstName') . ' is required.')
            ->addRule(\Nette\Forms\Form::Pattern, 'First name can only contain letters.', '^[A-Za-z]+$');

        $form->addText('lastName', $this->translator->translate('messages.contactForm.lastName'))
            ->setRequired($this->translator->translate('messages.contactForm.lastName') . ' is required.')
            ->addRule(\Nette\Forms\Form::Pattern, 'Last name can only contain letters.', '^[A-Za-z]+$');

        $form->addText('subject', $this->translator->translate('messages.contactForm.subject'))
            ->setRequired($this->translator->translate('messages.contactForm.subject') . ' is required.')
            ->addRule(\Nette\Forms\Form::Pattern, 'Invalid characters in subject.', '^[A-Za-z0-9!?.]+$');

        $form->addTextArea('message', $this->translator->translate('messages.contactForm.message'))
            ->setRequired($this->translator->translate('messages.contactForm.message') . ' is required.')
            ->addRule(\Nette\Forms\Form::Pattern, 'Invalid characters in message.', '^[A-Za-z0-9!?.]+$');

        $form->addSubmit('send', $this->translator->translate('messages.contactForm.submit'));

        $form->onSuccess[] = [$this, 'contactFormSucceeded'];

        return $form;
    }

    public function contactFormSucceeded(Form $form, $values): void
    {
        $this->template->contactFormValues = $values;
        $this->flashMessage($this->translator->translate('messages.contactForm.success'), 'success');
    }

    public function renderContact(): void
    {
        $this->template->contactForm = $this['contactForm']->setRenderer(new \Nette\Forms\Rendering\DefaultFormRenderer());
        $this->template->contactFormValues = $this->template->contactFormValues ?? null;
    }

    protected function createComponentLoginForm(): Form
    {
        $form = new Form;

        $form->addText('username', 'Username')
            ->setRequired('Please enter your username.')
            ->addRule(\Nette\Forms\Form::Pattern, 'Username can only contain letters.', '^[A-Za-z]+$');

        $form->addPassword('password', 'Password')
            ->setRequired('Please enter your password.')
            ->addRule(\Nette\Forms\Form::Pattern, 'Password can only contain numbers.', '^[0-9]+$');


        $form->addSubmit('login', 'Login');

        $form->onSuccess[] = [$this, 'loginFormSucceeded'];

        $form->getElementPrototype()->addAttributes(['class' => 'ajax']);


        return $form;
    }

    public function loginFormSucceeded(Form $form, $values): void
    {
        Debugger::log("Login attempt: Username {$values->username} at " . date('Y-m-d H:i:s'), 'login.log');

        try {
            $this->getUser()->login($values->username, $values->password);
            $this->flashMessage('Login successful', 'success');
            Debugger::log("Login successful: Username {$values->username} at " . date('Y-m-d H:i:s'), 'login.log');
            $this->redirect('Info:default');
        } catch (AuthenticationException $e) {
            $form->addError('Invalid credentials.');
            Debugger::log("Login failed: Username {$values->username} at " . date('Y-m-d H:i:s'), 'login.log');
        }
    }



    public function renderDefault(): void
    {
    }

    protected function startup(): void
    {
        parent::startup();

        // Set locale from session or default
        $session = $this->getSession('locale');
        if (isset($session->locale)) {
            $this->translator->setLocale($session->locale);
        } else {
            $this->translator->setLocale('en'); // Default locale
        }
    }

    public function handleChangeLanguage(string $locale): void
    {
        $this->getSession('locale')->locale = $locale;
        $this->translator->setLocale($locale);
        $this->redirect('this');
    }
}
