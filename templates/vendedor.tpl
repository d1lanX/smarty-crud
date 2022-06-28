{include file="header.tpl" title={$titulo}}
<body>
    
    <div class="container">

        <form class="row g-3 needs-validation mt-5"
         action="../php/vendedor.php" method="POST" validate>

            <div class="col-12 mt-5 text-center">
                <h1 class="display-6">Nuevo Vendedor</h1>
            </div>
            <div class="col-md-4 mt-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre"
                name="nombre" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-4 mt-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido"
                name="apellido" value=""
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-4 mt-5">
                <label for="telefono" class="form-label">Teléfono</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">📞</span>
                <input type="number" class="form-control" id="telefono"
                name="telefono" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" aria-describedby="inputGroupPrepend" required>
                
                </div>
            </div>
            <div class="col-md-6">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion"
                name="direccion" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-3">
                <label for="empresa" class="form-label">Empresa</label>
                <select class="form-select" id="empresa"
                name="empresa" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                <option selected disabled value="">Escoge...</option>
                <option value="PEPSI">Pepsi</option>
                <option value="COLANTA">Colanta</option>
                <option value="COCA-COLA">CocaCola</option>
                <option value="BIMBO">Bimbo</option>
                </select>
                
            </div>
           
            <div class="col-12">
                <button class="btn btn-success" name="guardar" type="submit">Guardar</button>
            </div>
        </form>

        {if $seGuardo == true}
        <div class="alert alert-success" role="alert">
        El registro fue guardado exitosamente!
        </div>
        {/if}

    </div>

    <div class="container">
        
        <table class="table table-striped mt-5">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Empresa</th>
            <th>Dirección</th>
            <th>Opción</th>
        </tr>
        {* {section name=i loop=$vendedor} *}
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Teléfono</td>
            <td>Dirección</td>
            <td>Empresa</td>
            <td></td>
        </tr>
        </table>
    </div>
    
</body>
{include file="footer.tpl"}