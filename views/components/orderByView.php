<?php
function orderByView()
{ ?>
    <article class="w-full">
        <label for="" class="form-label w-full">Ordenar por:</label>
        <div class="flex flex-row gap-2">
            <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">ID</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Seleccionar...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">Nombre</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Seleccionar...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">Email</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Seleccionar...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </article>
<?php }
?>