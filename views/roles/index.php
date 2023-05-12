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
            <a href="<?= $_layoutParams['root'] ?>roles/create" class="btn btn-outline-primary">Nuevo Rol</a>
        </h1>
        <!-- mostrar exito -->
        <?php if(Session::get('msg_success')): ?>
            <div class="alert-success">
                <?= Session::get('msg_success') ?>
            </div>
        <?php
                Session::destroy();
            endif; ?>
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
                    <?php foreach($this->roles as $model): ?>
                        <tr>
                            <td><?= $model['id'] ?></td>
                            <td><?= $model['nombre'] ?></td>
                            <td>
                                <a href="<?= $_layoutParams['root'] ?>roles/show/<?= $model['id'] ?>">Ver</a>
                                <a href="<?= $_layoutParams['root'] ?>roles/edit/<?= $model['id'] ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-info"><?= $this->notice; ?></p>
        <?php endif; ?>

    </div>

</section>