<nav class="navbar">
        <a href="/" <?= isUri('/') ? 'class="active"' : '' ?>>Home</a>
        <a href="/about" <?= isUri('/about') ? 'class="active"' : '' ?>>About</a>
        <a href="/contacts" <?= isUri('/contacts') ? 'class="active"' : '' ?>>Contact</a>
</nav>