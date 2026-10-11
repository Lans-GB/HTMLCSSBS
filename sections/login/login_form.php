<div class="login-wrapper d-flex align-items-center justify-content-center">
  <form id="loginForm" class="login p-4" method="post" action="" novalidate>
    <h3 class="text-center mb-4 fw-bold">LOGIN YOUR ACCOUNT</h3>

    <div class="mb-3">
      <label class="form-label" for="email">
        <i class="bi bi-envelope-fill"></i> Email
      </label>
      <input class="form-control <?= $emailErr ? 'is-invalid' : '' ?>" type="email" id="email" name="email"
             placeholder="name@example.com" value="<?= htmlspecialchars($email) ?>">
      <div class="invalid-feedback"><?= htmlspecialchars($emailErr) ?></div>
    </div>

    <div class="mb-3">
      <label class="form-label" for="password">
        <i class="bi bi-key-fill"></i> Password
      </label>
      <input class="form-control <?= $passwordErr ? 'is-invalid' : '' ?>" type="password" id="password" name="password"
             placeholder="Enter password">
      <div class="invalid-feedback"><?= htmlspecialchars($passwordErr) ?></div>
    </div>

    <div id="loginError" class="text-danger"><?= htmlspecialchars($loginErr) ?></div>

    <button class="btn btn-primary w-100 mt-3" type="submit" name="submit" value="Login"<?= $locked ? ' disabled' : '' ?>>
      LOGIN
    </button>

    <p class="text-center mt-3 mb-0">
      <a href="#">Forgot Password?</a> |
      <a href="register.php">Create Account</a>
    </p>
  </form>
</div>