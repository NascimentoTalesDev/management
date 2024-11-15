<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">New Contact</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
      <label for="name">Contact name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-group">
      <label for="phone">Contact phone:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
    </div>
    <div class="form-group">
      <label for="observations">Contact observations:</label>
      <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Enter observations" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-black">Create</button>
  </form>
</div>
