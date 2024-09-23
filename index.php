<?php
$name = "nico";
define('nicokiss', 'https://pbs.twimg.com/media/E7GHBjKWQAEMdmm?format=jpg&name=small');

define('stitchDenisse', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTqEzk5hg7a_wSNX5_UQJyMRMfE7TrcVixp3NPyk8NZx0K4bd-exhGHaE_kn0lLIKWhdn6S_y7sAFa1u9JymVjsjJM4PfdpItUOAu1SeQ');
define('nicoCumbiero', 'https://cdn.discordapp.com/attachments/874131541045968927/1287591093453459466/437876513_800082371980669_97288181134316286_n.png?ex=66f21a26&is=66f0c8a6&hm=06b5ff5fd031dab353972e42c5b4df8ab73ae62132fb3673f3f1e4b59fc6a957&');

?>

<h1>
    <script>alert ('alerta :3')</script>
<?= "hola " . $name; ?>

</h1>

<div class="image-container">
    <img src="<?= nicokiss ?>" alt="niggakiss" width="350">
    <img src="<?= nicoCumbiero ?>" alt="nicoCumbiero" width="460">
</div>

<style>
    .image-container img {
        display: inline-block;
        margin-right: 10px; /* Añadir margen entre imágenes si lo deseas */
    }
</style>

<style>
:root{
    color-scheme: light dark;
}

body{

    display: grid;
    place-content: center;
}

</style>