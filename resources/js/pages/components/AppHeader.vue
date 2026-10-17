<template>
 <div>
     <a class="skip-link" href="#main-content"> Aller au contenu </a>
  <div class="topbar">
    Le marché du quartier, à votre rythme.
    <span> Castors · Dakar · Démonstration </span>
  </div>
  <header class="site-header" data-component="AppHeader">
    <div class="container header-inner">
      <a aria-label="Teranga Market — Accueil" class="brand" href="index.html">
        <img alt="" height="42" src="/logo.svg" width="42" />
        <span>
          teranga
          <b> market. </b>
        </span>
      </a>
      <nav aria-label="Navigation principale">
        <a class="is-active" href="boutique.html"> Le marché </a>
        <a href="suivre.html"> Suivre ma commande </a>
        <a href="admin/index.html"> Espace Awa </a>
      </nav>
      <div class="header-actions">
        <a
          aria-label="Aperçu de la recherche"
          class="icon-button"
          href="#recherche-apercu"
        >
          <svg
            aria-hidden="true"
            class="icon"
            fill="none"
            height="20"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.7"
            viewbox="0 0 24 24"
            width="20"
          >
            <path d="m21 21-5-5M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0"></path>
          </svg>
        </a>
        <a
          aria-label="Voir la variante de thème"
          class="icon-button"
          href="exemples/theme-sombre.html"
        >
          <svg
            aria-hidden="true"
            class="icon"
            fill="none"
            height="20"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.7"
            viewbox="0 0 24 24"
            width="20"
          >
            <path d="M21 13A9 9 0 0 1 11 3a9 9 0 1 0 10 10Z"></path>
          </svg>
        </a>
        <a
          aria-label="Aperçu du panier, 4 unités"
          class="btn small-btn"
          href="#panier-apercu"
        >
          <svg
            aria-hidden="true"
            class="icon"
            fill="none"
            height="20"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.7"
            viewbox="0 0 24 24"
            width="20"
          >
            <path d="M6 7h12l2 14H4L6 7Zm3 0V5a3 3 0 0 1 6 0v2"></path>
          </svg>
          <span> Mon panier </span>
          <b class="cart-count"> 4 </b>
        </a>
      </div>
    </div>
  </header>
 </div>
</template>