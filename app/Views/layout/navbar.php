<body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/img/logotoko4.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/pages/pembelian"><b>PEMBELIAN</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk/"><b>PRODUK</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/produk/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>E-COMMERCE</b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" target="_blank" href="https://www.tokopedia.com/enterkomputer"><b>TOKOPEDIA</b></a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://shopee.co.id/enterkom"><b>SHOPEE</b></a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://www.bukalapak.com/u/enterkomp"><b>BUKALAPAK</b></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <?php if (logged_in()) : ?>
                <ul class="nav navbar-expand-lg navbar-nav navbar-right">
                    <li><a class="text-white" href="/logout"><span></span><b>LOGOUT</b></a></li>
                </ul>
            <?php else : ?>
                <ul class="nav navbar-expand-lg navbar-nav navbar-right">
                    <li><a class="text-white" href="/login"><span></span><b>LOGIN</b></a></li>
                </ul>
            <?php endif;  ?>
        </div>
    </nav>