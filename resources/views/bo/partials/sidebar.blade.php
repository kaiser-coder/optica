<nav class="navigation">
    <div class="logo">Optica Admin</div>
    <ul>
        {{-- <li><a href="no-route">Acceuil</a></li> --}}

        <li class="disable"><a href="#" class="prod-btn">Produits
                <span class="fas fa-caret-down first"></span> </a>
            <ul class="prod-show">
                {{-- <li><a href="no-route">Nouveau</a></li> --}}
                <li><a href="{{ route('products.list') }}">Listes</a></li>
            </ul>
        </li>

        <!-- Menu Approvisionement -->
        {{-- <li>
            <a href="#" class="aprov-btn">Approvisionement
                <span class="fas fa-caret-down second"></span></a>
            <ul class="aprov-show">
                <li><a href="no-route">Nouveau</a></li>
                <li><a href="no-route">Listes</a></li>
            </ul>
        </li> --}}


        <!-- message -->
        <li><a href="{{ route('contacts.list') }}">Message</a></li>

        <!-- utilisateur -->

        {{-- <li><a href="no-route">Utilisateur</a></li>

        <li><a href="no-route">Categorie</a></li>

        <li><a href="no-route">Fournisseur</a></li> --}}

    </ul>
</nav>
