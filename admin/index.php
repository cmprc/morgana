<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acesso</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Bem-vindo ao Painel Administrativo</h3>
            <p>Entre com seus dados para prosseguir</p>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" id="usuario" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" id="senha" required>
            </div>
            <button type="button" class="btn btn-primary block full-width m-b">Entrar</button>
            <small class="text-danger" style="display: none">Dados não conferem ou o usuário não está cadastrado</small>
        </div>
    </div>

    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {

            $('button').click(function() {
                $('button').html('<i class="fa fa-spinner fa-spin"></i>');
                var email = $('#usuario').val();
                var senha = $('#senha').val();
                $.post("controller/usuario/login.php", {
                    email: email,
                    senha: senha
                }, function(retorno) {
                    if (retorno.includes('success')) {
                        $('small').hide();
                        $('button').html('<i class="fa fa-check"></i>');
                        setTimeout(function() {
                            window.location.href = "view/dashboard/dashboard.php"
                        }, 800);
                    } else {
                        $('button').html('Entrar');
                        $('small').show();
                    }
                });
            });

            $(document).keypress(function(e) {
                if (e.which == 13) {
                    $('button').trigger('click');
                }
            });

        });
    </script>

</body>

</html>