<?php
include '../public/top.php';

use David\Shop\model\Database;

require_once '../src/model/Database.php';
$db = new Database();
if (isset($_SESSION['user'])) {
    echo "<h2>Hola" . $_SESSION['user'] . "</h2>";
}
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $db->selectAll('products');
        while ($products = $result->fetch(PDO::FETCH_OBJ)) {
        ?>
            <tr>
                <td><?= $products->name ?></td>
                <td> <?= $products->description ?> </td>
                <td> <?= $products->price ?> </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">Total</td>
            <td>1000€</td>
        </tr>
    </tfoot>
</table>
<?php
include '../public/bottom.php';
?>