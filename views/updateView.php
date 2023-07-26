<?php
$title = "Modifier";
ob_start();
?>
<form action="index.php?id=<?= $userupd->id?>&action=updateact" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control"
      value="<?= $userupd->email ?>"
       name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">nom</label>
      <input type="text" class="form-control" name="nom" id="" aria-describedby="emailHelpId"
      value="<?= $userupd->name ?>" placeholder="">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">prenom</label>
      <input type="text" class="form-control" name="pnom" id=""
      value="<?= $userupd->pnom ?>"
       aria-describedby="emailHelpId" placeholder="">
      <small id="emailHelpId" class="form-text text-muted">Help text</small> 
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php
//  endforeach;
  ?>
<?php
 $content = ob_get_clean();
include "layout.php"; ?>