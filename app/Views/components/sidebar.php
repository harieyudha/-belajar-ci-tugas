<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" href="<?= base_url() ?>">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'keranjang') ? '' : 'collapsed' ?>" href="<?= base_url('keranjang') ?>">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li>

        <?php if (session()->get('role') == 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="<?= base_url('produk') ?>">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'kategori_produk') ? '' : 'collapsed' ?>" href="<?= base_url('kategori_produk') ?>">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'contact') ? '' : 'collapsed' ?>" href="<?= base_url('contact') ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
        <?php endif; ?>

    </ul>
</aside>


</aside><!-- End Sidebar-->