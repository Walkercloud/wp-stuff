<style type="text/css">
    table{
        width: 500px;
        border: 0;
    }
</style>

<table>
    <tr>
        <td><img src="http://placehold.it/500x200" /></td>
    </tr>
    <tr>
        <td>Cher <?php echo $new_user->first_name.' '.$new_user->last_name; ?>,</td>
    </tr>
    <tr>
        <td>Merci de votre inscription sur le site, je vous propose un petit jeu pour fêter votre arrivée</td>
    </tr>
    <tr>
        <td><a target="_blank" href="<?php echo $url_page_jeu; ?>">Cliquez ici</a> pour y participer tout de suite. Bonne chance!</td>
    </tr>
</table>