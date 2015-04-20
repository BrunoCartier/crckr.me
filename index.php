<?php
    function redirect($url)
    {
        header('Location: '. $url);
        exit();
    }

    function make_redirect($accept_language)
    {
        if (isset($accept_language)) {
            $short_locale = strtolower(substr($accept_language, 0, 2));

            if ($short_locale === 'fr') {
                redirect('fr/regles-de-crocker');
            }
        }

        redirect('/en/crockers-rules');
    }

    make_redirect($_SERVER['HTTP_ACCEPT_LANGUAGE']);
