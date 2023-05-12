<!--Seccion de contenido principal-->
<!--Seccion de contenido principal-->
<section class="container">
    <div>
        <ul class="nav-lateral">
            <li>
                <a href="<?= $_layoutParams['root'] ?>roles">Roles</a>
            </li>
        </ul>
    </div>
    <div>
        <h1>
            Detalle de Rol
        </h1>
        <!-- mostrar exito -->
        <?php if(Session::get('msg_success')): ?>
        <div class="alert-success">
            <?= Session::get('msg_success') ?>
        </div>
        <?php
                Session::destroy();
            endif; ?>
        <table class="table">
            <tr>
                <th>Id:</th>
                <td><?= $this->rol['id'] ?></td>
            </tr>
            <tr>
                <th>Rol:</th>
                <td><?= $this->rol['nombre'] ?></td>
            </tr>
            <tr>
                <th>Fecha creación:</th>
                <td><?= $this->rol['created_at'] ?></td>
            </tr>
            <tr>
                <th>Fecha actualización:</th>
                <td><?= $this->rol['updated_at'] ?></td>
            </tr>
        </table>

    </div>

</section>