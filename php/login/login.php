<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="cuerpo-login d-flex align-items-center justify-content-center">

  <div class="tarjeta-login p-4">
    <div class="text-center mb-4">
      <img src="../../img/ofalogos/fulltextpositivo.png" id="logo-login">
    </div>

    <form action="validar_login.php" method="POST" class="formulariologin">
      <div class="mb-3">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario (email o C.I.)">
      </div>

      <div class="mb-3">
        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
      </div>

      <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
      <?php endif; ?>

      <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
  </div>
</body>
</html>
