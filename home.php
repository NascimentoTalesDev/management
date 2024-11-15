<div class="container">
  <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?= htmlspecialchars($printMsg) ?></p>
  <?php endif; ?>
  <h1 id="main-title">My Contacts</h1>
  <?php if(count($contacts) > 0): ?>
    <table class="table" id="contacts-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col" id="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($contacts as $contact): ?>
          <tr>
            <td scope="row" class="col-id"><?= htmlspecialchars($contact["id"]) ?></td>
            <td scope="row"><?= htmlspecialchars($contact["name"]) ?></td>
            <td scope="row"><?= htmlspecialchars($contact["phone"]) ?></td>
            <td class="actions">
              <a title="Show" href="<?= $BASE_URL ?>index.php?page=show&id=<?= htmlspecialchars($contact["id"]) ?>"><i class="fas fa-eye check-icon"></i></a>
              <a title="Edit" href="<?= $BASE_URL ?>index.php?page=edit&id=<?= htmlspecialchars($contact["id"]) ?>"><i class="far fa-edit edit-icon"></i></a>
              <form title="Delete" class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="id" value="<?= htmlspecialchars($contact["id"]) ?>">
                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>  
    <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>index.php?page=create">clique aqui para adicionar</a>.</p>
  <?php endif; ?>
</div>
