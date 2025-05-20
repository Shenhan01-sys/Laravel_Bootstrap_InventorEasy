<div class="nav flex-column nav-pills pt-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }} border-bottom" href="/" role="tab" style>Home</a>
    <a class="nav-link {{ Request::is('master_data') ? 'active' : '' }} border-bottom" href="/master_data" role="tab">List of Items</a>
    <a class="nav-link {{ Request::is('listOfItems') ? 'active' : '' }} border-bottom" href="/listOfItems" role="tab">List of Items with card</a>
    <a class="nav-link {{ Request::is('about') ? 'active' : '' }} border-bottom" href="/about" role="tab">About</a>
    <a class="nav-link {{ Request::is('faq') ? 'active' : '' }} border-bottom" href="/faq" role="tab">FAQ</a>
    <a class="nav-link {{ Request::is('insertItems') ? 'active' : '' }} border-bottom" href="/insertItems" role="tab">Input Item</a>
</div>
