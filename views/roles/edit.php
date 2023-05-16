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
            Nuevo Rol
        </h1>
        <div class="form">
            <!-- mostrar error -->
            <?php if(Session::get('msg_error')): ?>
            <div class="alert-danger">
                <?= Session::get('msg_error') ?>
            </div>
            <?php
                Session::destroy();
            endif; ?>

            <form action="<?= $_layoutParams['root'] . $this->process ?>" method="post">
                <div class="form-group">
                    <label for="nombre">Rol</label>
                    <input type="text" name="nombre" value="<?= $this->rol['nombre'] ?>" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="send" value="<?= $this->send ?>">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>

</section>