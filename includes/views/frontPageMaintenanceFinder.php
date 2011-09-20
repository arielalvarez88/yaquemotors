
<div id="maintenance-finder">

    <h2 id="maintenance-finder-header">

        TARIFA DE <br/> MANTENIMIENTO <br/>
        <span>PARA TU VEHICULO</span>
    </h2>

    <form method="get" action="/tarifas-de-mantenimiento">

        <label for="maintenance-finder-brand">MARCA</label>

        <select name="marca" id="maintenance-finder-brand">
            <?php foreach ($brandsAndModels as $brand => $models): ?>

                <?php $selected = $brand == 'nissan' ? 'selected="selected"' : ''; ?>

                <option  value="<?php echo $brand; ?>"  <?php echo $selected;?>>
                    <?php echo ucwords($brand); ?>
                </option>


            <?php endforeach; ?>

        </select>

        <label>
            MODELO
        </label>
        <?php foreach ($brandsAndModels as $brand => $models): ?>

            <?php $visible = $brand == 'nissan' ? ' visible' : ' hidden'; ?>
            <select class="maintenance-finder-model <?php echo $visible; ?>" name="modelo" id="maintenance-finder-model-<?php echo $brand; ?>" >;
                <?php foreach ($models as $model): ?>


                    <option value="<?php echo $model; ?>">
                        <?php echo ucwords($model); ?>
                    </option>
                <?php endforeach; ?>

            </select>

        <?php endforeach; ?>

        <a id="maintenance-finder-find-button">
            BUSCAR


        </a>

    </form>





</div>