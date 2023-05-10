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
            Lista de Roles
            <a href="<?= $_layoutParams['root'] ?>roles/create" class="btn btn-primary">Nuevo Rol</a>
        </h1>
        <?php if(isset($this->roles) && count($this->roles)): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>Nombre del rol</td>
                        <td>Botones</td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-info"><?= $this->notice; ?></p>
        <?php endif; ?>

    </div>

</section>