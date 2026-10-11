<div class="login-wrapper d-flex align-items-center justify-content-center p-3">
  <form id="registerForm" class="login p-4 p-sm-5" method="post" action="" novalidate>

    <h3 class="text-center mb-4 fw-bold">REGISTER AN ACCOUNT</h3>

    <div class="mb-3">
      <label for="name" class="form-label">
        <i class="bi bi-person-circle"></i> Name
      </label>
      <input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" id="name" name="name"
             placeholder="Juan Dela Cruz" value="<?= htmlspecialchars($name) ?>">
      <div class="invalid-feedback"><?= htmlspecialchars($errors['name'] ?? '') ?></div>
    </div>

    <div class="mb-3">
      <label for="location" class="form-label">
        <i class="bi bi-pin-fill"></i> Location
      </label>
      <input type="text" class="form-control <?= isset($errors['location']) ? 'is-invalid' : '' ?>" id="location" name="location"
             placeholder="Batangas" value="<?= htmlspecialchars($location) ?>">
      <div class="invalid-feedback"><?= htmlspecialchars($errors['location'] ?? '') ?></div>
    </div>

    <div class="mb-3">
      <label for="mobile" class="form-label">
        <i class="bi bi-phone-fill"></i> Mobile Number
      </label>
      <div class="input-group has-validation">
        <span class="input-group-text">+63</span>
        <input type="text" class="form-control <?= isset($errors['mobile']) ? 'is-invalid' : '' ?>" id="mobile" name="mobile"
               placeholder="9123456789" maxlength="10" value="<?= htmlspecialchars($mobile) ?>">
        <div class="invalid-feedback"><?= htmlspecialchars($errors['mobile'] ?? '') ?></div>
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">
        <i class="bi bi-envelope-open-fill"></i> Email
      </label>
      <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="email" name="email"
             placeholder="name@example.com" value="<?= htmlspecialchars($email) ?>">
      <div class="invalid-feedback"><?= htmlspecialchars($errors['email'] ?? '') ?></div>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">
        <i class="bi bi-key-fill"></i> Password
      </label>
      <input type="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="password"
             name="password" placeholder="Enter password">
      <div class="invalid-feedback"><?= htmlspecialchars($errors['password'] ?? '') ?></div>
    </div>

    <div class="mb-3">
      <label for="confirmPassword" class="form-label">
        <i class="bi bi-shield-lock-fill"></i> Confirm Password
      </label>
      <input type="password" class="form-control <?= isset($errors['confirmPassword']) ? 'is-invalid' : '' ?>" id="confirmPassword"
             name="confirmPassword" placeholder="Confirm password">
      <div class="invalid-feedback"><?= htmlspecialchars($errors['confirmPassword'] ?? '') ?></div>
    </div>

    <button type="submit" name="submit" value="Register" class="btn btn-primary btn-lg w-100 mt-2">
      REGISTER
    </button>

    <p class="text-center mt-3 mb-0">
      Already have an account?
      <a href="login.php">Login</a>
    </p>

  </form>
</div>

<!-- Numbers only on mobile field -->
<script>
  document.getElementById('mobile').addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, '').slice(0, 10);
  });
</script>