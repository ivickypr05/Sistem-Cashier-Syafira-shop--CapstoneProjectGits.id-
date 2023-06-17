<style>
    body {background-color:aliceblue: 'Familjen Grotesk', sans-serif;
    }

    .nav h6:hover {
        text-shadow:0px -40px 0px rgba(255, 0, 0, 0);
        transform:translateY(0%) translateZ(0) scale(1.1);
         font-weight:600;
    }
    .hover-:hover {
        --_p: 100%;
        color: var(--c);
        }

</style>
<nav class="sb-sidenav accordion sb-sidenav-dark bg-white" id="sidenavAccordion" style="background:#F7F7F7 !important">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading text-dark"><h6><i class="fa fa-receipt"></i>‎ Penjualan</h6></div>
            <a class="nav-link text-dark" href="/cashier">
                <div class="sb-nav-link-icon text-dark"></div>
                Produk SRC Syafira
            </a>
            <a class="nav-link text-dark" href="/cart">
                <div class="sb-nav-link-icon text-dark"></div>
                Keranjang
            </a>
            <div class="sb-sidenav-menu-heading text-dark"><h6><i class="fa fa-history"></i> Riwayat Penjualan</h6></div>
            <a class="nav-link text-dark collapsed" href="{{ url('/transaction') }}">‎
                Riwayat Transaksi</a>
        </div>
    </div>
</nav>
