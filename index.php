<?php require_once 'autoload.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Viewing of Data -->
<h1>Viewing of Data</h1>
<?php $user = new User(); ?>
<?php $userData = $user->getUserList(); ?>
<h3>List of Users</h3>
<?php if ($userData): ?>
<?php foreach ($userData as $data): ?>
	<?= $data['username'] ?>
<?php endforeach; ?>
<?php else: ?>
No Users Yet
<?php endif; ?>
<!-- Inserting of Data -->
<h1>Inserting of Data</h1>
<?php
	if (isset($_REQUEST['submit'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$insertUser = $user->insertUser($username, $password);
		if ($insertUser) {
			header('Location: index.php');
			exit();
		}
	}
?>
<form method="post">
	<p>Username: <input type="text" name="username" required></p>
	<p>Password: <input type="text" name="password" required></p>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
