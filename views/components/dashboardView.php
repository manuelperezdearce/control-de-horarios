<?php
//components/dashboardView.php
function dashboardView()
{
?>
    <article class="w-full flex flex-wrap justify-around gap-4 shadow-md p-4">

        <?php
        actionsView();
        searchbarView();
        orderByView();
        ?>

    </article>

<?php
}
?>