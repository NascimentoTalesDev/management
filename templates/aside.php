
<aside id="aside">
    <div id="logo">
        <a href="<?= $BASE_URL ?>index.php?page=home">
            <img src="<?= $BASE_URL ?>img/logo.png" alt="Logo">
        </a>
    </div>
    <nav id="nav">
        <ul>
            <a href="<?= $BASE_URL ?>index.php?page=home" class="<?php echo $page === 'home' ? 'active' : ''; ?>"><li>Home</li></a>
            <a href="<?= $BASE_URL ?>index.php?page=create" class="<?php echo $page === 'create' ? 'active' : ''; ?>"><li>Create</li></a>
            <a href="<?= $BASE_URL ?>index.php?page=settings" class="<?php echo $page === 'settings' ? 'active' : ''; ?>"><li>Settings</li></a>
        </ul>
    </nav>
</aside>