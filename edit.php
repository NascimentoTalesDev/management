<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Edit Contact</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
    <div class="form-group">
      <label for="name">Contact name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $contact['name'] ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Contact phone:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="<?= $contact['phone'] ?>" required>
    </div>
    <div class="form-group">
      <label for="observations">Contact observations:</label>
      <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Enter observations" rows="3"><?= $contact['observations'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-black">Atualizar</button>
  </form>
</div>
