<nav class="navigation">
    <div class="logo">Optica Admin</div>
    <ul>
        <li><a href="#" class="prod-btn">Produits
                <span class="fas fa-caret-down first"></span> </a>
            <ul class="prod-show">
                <li><a href="{{ route('products.create') }}">Nouveau</a></li>
                <li><a href="{{ route('products.list') }}">Liste</a></li>
            </ul>
        </li>
        <!-- message -->
        <li><a href="{{ route('contacts.list') }}">Message</a></li>
        <li><a href="#" class="category-btn">Catégories
                <span class="fas fa-caret-down category"></span> </a>
            <ul class="category-show">
                <li><a href="{{ route('categories.create') }}">Nouveau</a></li>
                <li><a href="{{ route('categories.list') }}">Liste</a></li>
            </ul>
        </li>
    </ul>
</nav>
