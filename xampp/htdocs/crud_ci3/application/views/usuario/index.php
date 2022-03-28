<h1>FORMULARIO DE REGISTRO</h1>

<form method="POST" action="<?php echo base_url('usuario/insert') ?>">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Perfil
        </label>
        <select name="txtIdper" class="form-control">
            <?php foreach ($selPerfil as $value) { ?>
                <option value="<?php echo $value->per_id ?>"><?php echo $value->per_nombre; ?></option>
            <?php } ?>
            
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Nombres
        </label>
        <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombres">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Apelidos
        </label>
        <input type="text" name="txtApelidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apelidos">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Correo Eletronico
        </label>
        <input type="email" name="txtCorreo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Eletronico">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
           Telefone
        </label>
        <input type="text" name="txtTelefone" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
    </div>
    <button type="submit" class="btn btn-primary">
        Registrar Usuario
    </button>
</form>

<?php

print_r($selPerfil);

?>