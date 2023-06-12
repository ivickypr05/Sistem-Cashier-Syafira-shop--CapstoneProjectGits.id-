<style>
    .nav h6:hover {
        --c: #ff0000;
        --s: .15em;
  
        line-height:1.1em;
        padding-bottom: calc(2.1*var(--s));
        background: 
        conic-gradient(from 135deg at top,var(--c) 90deg,#0000 0) 
        left 0 bottom var(--s)/calc(2*var(--s)) var(--s) repeat-x,
        conic-gradient(from -45deg at bottom,var(--c) 90deg,#0000 0) 
        left var(--s) bottom 0/calc(2*var(--s)) var(--s) repeat-x;
        -webkit-mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0) 0/var(--_p,0%) padding-box no-repeat;
        transition: .3s;
    }
    .hover-h6:hover {
        --_p: 100%;
        color: var(--c);
        }
    </style>
<nav class="sb-sidenav accordion sb-sidenav-dark bg-white" id="sidenavAccordion">
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
