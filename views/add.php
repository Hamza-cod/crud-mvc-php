<?php
$title = "Ajouter Stagiaire";
ob_start();
?>
<form action="index.php?action=store" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">nom</label>
      <input type="text" class="form-control" name="nom" id="" aria-describedby="emailHelpId" placeholder="">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">prenom</label>
      <input type="text" class="form-control" name="pnom" id="" aria-describedby="emailHelpId" placeholder="">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content = ob_get_clean();
include "layout.php"; ?>