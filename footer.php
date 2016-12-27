			</div>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">Shortcut links</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li><a href="index.php">Home</a></li>
							<?php if (isset($_SESSION['name'])) : ?>
								<li><a href="new.php">Add person</a></li>
							<?php endif; ?>
							<?php if (isset($_SESSION['name'])) : ?>
								<li><a href="logout.php" onclick="return confirm('Do you really wanna logout?');">Logout</a></li>
							<?php else : ?>
								<li><a href="login.php">Login</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<footer>
			<p class="text-center text-muted">2016 © Lkhama</p>
		</footer>
	</div>
</body>
</html>