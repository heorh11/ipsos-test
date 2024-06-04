<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cs', array (
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


return $catalogue;
