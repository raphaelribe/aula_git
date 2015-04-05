<?php
// Modifica a zona de tempo a ser utilizada. Disnovível desde o PHP 5.1
date_default_timezone_set('UTC');


// Exibe alguma coisa como: Monday
//echo date("l");

// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM
echo " ". date('Y ');

// Exibe: July 1, 2000 is on a Saturday
//echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));


/* utiliza as constantes do parâmetro de formato */
// Exibe alguma coisa como: Mon, 15 Aug 2005 15:12:46 UTC
//echo date(DATE_RFC822);

// Exibe alguma coisa como: 2000-07-01T00:00:00+00:00
//echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>