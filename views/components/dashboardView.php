<?php
function dashboardView()
{
?>
    <section class="w-full">
        <article class="max-w-[1400px] mx-auto flex [&>*]:m-2 shadow-md p-2">

            <?php crearRegistroView(); ?>
            <?php searchbarView(); ?>

        </article>
    </section>
<?php
}
?>