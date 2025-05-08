<!DOCTYPE html>
<html>
<head><title>All Users</title></head>
<body>
<h1>All Users</h1>
<ul>
<?php foreach ($users as $user): ?>
    <li>
        <a href="/user/<?php echo $user['id']; ?>">
            <?php echo htmlspecialchars($user['name']); ?> (<?php echo htmlspecialchars($user['email']); ?>)
        </a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
