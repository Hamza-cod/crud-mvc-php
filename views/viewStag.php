<?php
$title = "List de stagiare";
ob_start();

?>
    <a href="index.php?action=add" class="btn btn-primary mx-auto">Ajouter stagiaire</a>
    <table class="table text-darck bg-light">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">prenom</th>
                <th scope="col">nom</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> 
            <?php
            // require_once 'model/userModel.php';
            foreach ($user as $rows):
            ?>
            <tr>
                <td><?= $rows->id?></td>
                <td><?= trim($rows->name)?></td>
                <td><?= $rows->pnom?></td>
                <td><?= $rows->email?></td>
                <td><a  class="btn btn-danger btn-sm" href="index.php?id=<?= $rows->id?>&action=remove" role="button"
                 onclick=
                 "return confirm('are sure wanna delete the user have id:<?= $rows->id?>  name  :<?= trim($rows->name) ?>')">Delete</a></td>
                <td><a  class="btn btn-primary btn-sm"
                      href="index.php?id=<?= $rows->id?>&action=updat" role="button">Update</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php $content = ob_get_clean();
include "layout.php"; ?>