{include file="header.tpl" title={$titulo}}
<body>
    
    <div class="container">

        <br>
        <div class="col-12 mt-5">
            <h1 class="display-6">Últimas ventas</h1>
        </div>
    
        <table class="table table-striped mt-3">
        {* TODO: que los nombres de las columnas se inserten como variables tpl *}
            <tr>
                <th># Venta</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
            </tr>
            <tr>
                <td>1121</td>
                <td>Arroz</td>
                <td>25</td>
                <td>$35.000</td>
                <td>24/06/2022 5:21:20PM</td>
            </tr>

        </table>    
    
    </div>
    
</body>
{include file="footer.tpl"}