<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? "" : "collapsed" ?>" href="<?= base_url('/') ?>">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="<?= base_url('keranjang') ?>">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->

        <?php if (session()->get('role') == 'admin') : ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk') ? "" : "collapsed" ?>" href="<?= base_url('produk') ?>">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Nav -->

            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'kategori_produk') ? '' : 'collapsed' ?>" href="<?= base_url('kategori_produk') ?>">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori Produk</span>
                </a>
            </li><!-- End ProdukCategory Nav -->
        <?php endif; ?>

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'profile') ? "" : "collapsed" ?>" href="<?= base_url('profile') ?>">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Nav -->

        <?php if (session()->get('role') === 'admin') : ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'admin/diskon') ? "" : "collapsed" ?>" href="<?= base_url('admin/diskon') ?>">
                    <i class="bi bi-tag"></i>
                    <span>Manajemen Diskon</span>
                </a>
            </li><!-- End Diskon Nav -->
        <?php endif; ?>

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'contact') ? "" : "collapsed" ?>" href="<?= base_url('contact') ?>">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Nav -->

    </ul>

</aside><!-- End Sidebar -->
