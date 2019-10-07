<?php global $qode_options_proya, $wp_query; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Silbentrennung -->
    <script>
    var Hyphenopoly = {
        require: {
            "la": "honorificabilitudinitas",
            "de-de": "Silbentrennungsalgorithmus",
            "en-us": "Supercalifragilisticexpialidocious"
        },
        paths: {
            patterndir: "/silbentrennung/patterns/",
            maindir: "/silbentrennung/"
        },
        setup: {
            selectors: {
                "p, a, td": {}
            }
        }
    };
    </script>
    <script src="/silbentrennung/Hyphenopoly_Loader.js"></script>	
    <!-- Ende Silbentrennung -->
</head>
