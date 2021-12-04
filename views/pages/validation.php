<?php

if (!isset($router)) {
    return;
}

header("refresh:5;url=" . $router->url('home'));

$current = 'validation';

$css = <<<HTML
<link href="style/validation.css" rel="stylesheet" >
HTML;
$js = '';
?>

<h1 class="validation-title">Votre message a bien été envoyé</h1>
<h2>Merci de votre participation</h2>
<p>Vous allez être automatiquement redirigé (<a href="<?= $router->url('home') ?>">cliquez ici</a> si ce n'est pas le cas).</p>
