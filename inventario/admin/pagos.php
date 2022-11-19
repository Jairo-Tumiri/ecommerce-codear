<?php
    include 'header.php';
?>

        <div class="contenedor-pagos">
            <br>
            <br>
            <div class="title">
                <h2>Tabla de Pagos</h2>
            </div>
            <br>
            <table>
                <tr>
                    <th>N°</th>
                    <th>Id-compra</th>
                    <th>Fecha-compra</th>
                    <th>Tipo-transferencia</th>
                    <th>Cuota</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>10</td>
                    <td>Germany</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>11</td>
                    <td>Mexico</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                </tr>
             
            </table>

        </div>

    </div>
    <?php mysqli_close($conexion); ?>
</body>
</html>