<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'messages' => 
  array (
    'contactForm.firstName' => 'First Name',
    'contactForm.lastName' => 'Last Name',
    'contactForm.subject' => 'Subject',
    'contactForm.message' => 'Message',
    'contactForm.submit' => 'Submit',
    'contactForm.success' => 'Message successfully sent',
    'contactForm.title' => 'Contact Form',
    'contactForm.submittedValues' => 'Submitted Values',
  ),
));

$catalogueCs = new MessageCatalogue('cs', array (
  'messages' => 
  array (
    'contactForm.firstName' => 'Jméno',
    'contactForm.lastName' => 'Příjmení',
    'contactForm.subject' => 'Předmět',
    'contactForm.message' => 'Text zprávy',
    'contactForm.submit' => 'Odeslat',
    'contactForm.success' => 'Zpráva úspěšně odeslána',
    'contactForm.title' => 'Kontaktní formulář',
    'contactForm.submittedValues' => 'Odeslané hodnoty',
  ),
));
$catalogue->addFallbackCatalogue($catalogueCs);

return $catalogue;
