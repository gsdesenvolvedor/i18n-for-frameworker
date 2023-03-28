<?php

use gsisouza\I18nForFrameworker\I18N;

// Set the language based on user preferences, session, or browser settings
$language = 'en';

// Instantiate the I18n class
$i18n = new I18n($language);

// Fetch the translated strings
echo $i18n->translate('welcome'); // Output: Welcome
echo $i18n->translate('hello');   // Output: Hello
