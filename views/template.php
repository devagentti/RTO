<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />    
    <title>Resolve Tudo Online</title>  
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">          
</head>
<body>   
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo BASE_URL; ?>" class="navbar-brand text-danger">Resolve Tudo Online</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                    <li><a href="<?php echo BASE_URL; ?>anuncios">Meus Anúncios</a></li>
                    <li><a href="<?php echo BASE_URL; ?>login/sair">Sair</a></li>
                <?php else: ?>
                    <li><a href="<?php echo BASE_URL; ?>cadastro">Profissional</a></li>                    
                    <li><a href="<?php echo BASE_URL; ?>cadastroLoja">Loja</a></li>
                    <li><a href="<?php echo BASE_URL; ?>login">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>    


    <script src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>