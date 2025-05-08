<!DOCTYPE html>
<html>
<head><title>User Profile</title></head>
<body>
<h1>User Profile</h1>
<?php if ($user): ?>
    <p>Name: <?php echo htmlspecialchars($user['name']); ?></p>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
<?php else: ?>
    <p>User not found.</p>
<?php endif; ?>
</body>
</html>
