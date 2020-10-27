<?php
$keyword = $_GET["keyword"];
$con = mysqli_connect("localhost", "root", "", "belajar");
$query = mysqli_query($con, "SELECT * FROM user WHERE nama LIKE '%$keyword%' LIMIT 99");
$user = [];
while ($data = mysqli_fetch_assoc($query)) {
    $user[] = $data;
}

?>
<tbody class="container-table">
    <?php
    $sort = 1;
    foreach ($user  as $u) :
    ?>
        <tr>
            <th scope="row"><?= $sort ?></th>
            <td><?= $u["nama"] ?></td>
            <td><?= $u["company"] ?></td>
            <td>
                <button class="btn-style detail">detail</button>
                <button class="btn-style hapus">hapus</button>
                <button class="btn-style update">update</button>
            </td>
        </tr>

    <?php
        $sort++;
    endforeach;
    ?>
</tbody>