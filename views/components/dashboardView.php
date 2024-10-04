<?php
//components/dashboardView.php
function dashboardView()
{
?>
    <article class="flex justify-center flex-wrap gap-4 shadow-none p-0 bg-transparent shadow-md [&>section]:bg-slate-50 [&>*]:rounded-md [&>*]:p-3 [&>*]:shadow-md  [&>*]:flex-auto">
        <section>
            <?php actionsView() ?>
        </section>
        <section>
            <?php searchbarView() ?>
        </section>
        <section>
            <?php orderByView() ?>
        </section>
    </article>
<?php
}
?>