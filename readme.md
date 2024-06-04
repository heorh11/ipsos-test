Contact Form
Creating a New Page
Create a new page at /contact with a presenter and template.
On the new page, /contact, create a new component with a contact form containing the following inputs:
Name
Surname
Subject
Message Text
After submitting the form, display the input values below the form using Latte and show a FlashMessage ("Message successfully sent").
Adding Translator and Translations
Implement Translator and provide translations for form inputs and FlashMessage. Store translations in a NEON file.
Implement language switching functionality on the /contact page using signals (handlers).
Authentication and User Rights
Adding a New User
Add a new user "Ipsos" with the password "123456" to the configuration file.
Create another page at /info, accessible only to authenticated users (page content is not required).
Logging Service
Create a new service to log all login attempts to a file in the log folder.
Modify the login form to work using AJAX.
