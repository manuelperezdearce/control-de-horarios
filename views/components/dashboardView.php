<?php
//components/dashboardView.php
function dashboardView()
{
?>
    <article class="w-full flex flex-col gap-4 shadow-md p-3">

        <?php
        actionsView();
        searchbarView();
        orderByView();
        ?>

    </article>

<?php
}
?>