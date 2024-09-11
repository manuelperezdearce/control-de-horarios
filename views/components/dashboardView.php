<?php
//components/dashboardView.php
function dashboardView()
{
?>
    <section class="w-full">
        <article class="max-w-[1400px] mx-auto flex flex-wrap justify-around [&>*]:m-2 shadow-md p-2">

            <?php crearRegistroView(); ?>
            <div class="flex flex-row flex-wrap items-end">
                <?php searchbarView(); ?>
                <?php include __DIR__ . "/../components/orderByView.php"; ?>
            </div>


        </article>
    </section>
<?php
}
?>