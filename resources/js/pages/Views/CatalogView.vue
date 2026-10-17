<template>
  <div>
            <main id="main-content" tabindex="-1">
          <div class="container page-space">
            <!-- DEMANDE 01 — À PROGRAMMER : Lier le nom, le slogan, le logo et les images avec les données de la boutique. -->
            <section class="hero">
              <div class="hero-copy">
                <p class="eyebrow">
                  <span> </span>
                  Le marché, autrement.
                </p>
                <h1>
                  Les saveurs du quartier.
                  <br />
                  <em> À portée de main. </em>
                </h1>
                <p>
                  Du riz pour le ceebu jën, du bissap à partager… Retrouvez vos
                  essentiels chez Awa, avec toute la teranga.
                </p>
                <a class="btn" href="boutique.html">
                  Faire mon marché
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
                    <path d="M5 12h14m-5-5 5 5-5 5"></path>
                  </svg>
                </a>
                <div class="hero-proof">
                  <span>
                    <svg
                      aria-hidden="true"
                      class="icon"
                      fill="none"
                      height="15"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.7"
                      viewbox="0 0 24 24"
                      width="15"
                    >
                      <path
                        d="M20 3C8 2 2 8 5 15s17 4 15-12ZM5 20l10-10"
                      ></path>
                    </svg>
                    Une sélection de proximité
                  </span>
                  <span>
                    <svg
                      aria-hidden="true"
                      class="icon"
                      fill="none"
                      height="15"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.7"
                      viewbox="0 0 24 24"
                      width="15"
                    >
                      <path
                        d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Zm-5 0a3 3 0 1 1-6 0 3 3 0 0 1 6 0"
                      ></path>
                    </svg>
                    Castors, Dakar
                  </span>
                </div>
              </div>
              <div aria-hidden="true" class="hero-art">
                <span class="hero-stamp">
                  LE GOÛT
                  <br />
                  DU PARTAGE
                </span>
                <img
                  alt=""
                  class="hero-rice"
                  height="280"
                  src="/images/riz.svg"
                  width="250"
                />
                <img
                  alt=""
                  class="hero-veg"
                  height="205"
                  src="/images/tomates.svg"
                  width="205"
                />
                <div class="hero-note">
                  Ñu bokk, ñu partage.
                  <small> Un marché fait pour vous. </small>
                </div>
              </div>
            </section>
            <section class="categories-section">
              <div class="section-heading">
                <div>
                  <p class="overline">À CHAQUE ENVIE, SON RAYON</p>
                  <h2>De quoi se régaler</h2>
                </div>
              </div>
              <!-- DEMANDE 01 / 03 — À PROGRAMMER : Utiliser les catégories de l’API pour les images, la couleur CSS et le filtre. -->
              <div class="categories">
                <a
                  class="category"
                  href="categories/cereales.html"
                  style="--category-color: #b98a38"
                >
                  <img
                    alt=""
                    height="48"
                    src="/images/cereales.svg"
                    width="56"
                  />
                  <span> Céréales </span>
                </a>
                <a
                  class="category"
                  href="categories/legumes.html"
                  style="--category-color: #468060"
                >
                  <img
                    alt=""
                    height="48"
                    src="/images/legumes.svg"
                    width="56"
                  />
                  <span> Légumes </span>
                </a>
                <a
                  class="category"
                  href="categories/epicerie.html"
                  style="--category-color: #b65c3a"
                >
                  <img
                    alt=""
                    height="48"
                    src="/images/epicerie.svg"
                    width="56"
                  />
                  <span> Épicerie </span>
                </a>
                <a
                  class="category"
                  href="categories/poisson.html"
                  style="--category-color: #477d87"
                >
                  <img
                    alt=""
                    height="48"
                    src="/images/poisson.svg"
                    width="56"
                  />
                  <span> Poisson </span>
                </a>
                <a
                  class="category"
                  href="categories/saveurs-locales.html"
                  style="--category-color: #956687"
                >
                  <img alt="" height="48" src="/images/local.svg" width="56" />
                  <span> Saveurs locales </span>
                </a>
              </div>
            </section>
            <section id="catalogue">
              <div class="section-heading">
                <div>
                  <p class="overline">LA SÉLECTION D’AWA</p>
                  <h2>Nos produits du moment</h2>
                </div>
                <a class="text-button" href="boutique.html">
                  Tout le marché
                  <svg
                    aria-hidden="true"
                    class="icon"
                    fill="none"
                    height="16"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.7"
                    viewbox="0 0 24 24"
                    width="16"
                  >
                    <path d="M5 12h14m-5-5 5 5-5 5"></path>
                  </svg>
                </a>
              </div>
              <div class="product-grid">
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="1"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Riz brisé parfumé"
                      href="produits/01-riz.html"
                    >
                      <img
                        alt="Riz brisé parfumé"
                        height="240"
                        loading="lazy"
                        src="/images/riz.svg"
                        width="360"
                      />
                    </a>
                  </div>
                  <div class="product-body">
                    <p class="overline">Vallée du fleuve</p>
                    <h3>
                      <a href="produits/01-riz.html"> Riz brisé parfumé </a>
                    </h3>
                    <p class="muted small">sac de 25 kg · 18 disponible(s)</p>
                    <span class="stock">
                      <span aria-hidden="true"> </span>
                      Disponible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <strong> 17 500 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Riz brisé parfumé au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="2"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Oignons de Potou"
                      href="produits/02-oignons.html"
                    >
                      <img
                        alt="Oignons de Potou"
                        height="240"
                        loading="lazy"
                        src="/images/oignons.svg"
                        width="360"
                      />
                    </a>
                    <span class="promo-tag"> Promo −7 % </span>
                  </div>
                  <div class="product-body">
                    <p class="overline">Potou</p>
                    <h3>
                      <a href="produits/02-oignons.html"> Oignons de Potou </a>
                    </h3>
                    <p class="muted small">kg · 4 disponible(s)</p>
                    <span class="stock low">
                      <span aria-hidden="true"> </span>
                      Stock faible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <del> 750 FCFA </del>
                        <strong> 700 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Oignons de Potou au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="4"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Fonio précuit"
                      href="produits/04-fonio.html"
                    >
                      <img
                        alt="Fonio précuit"
                        height="240"
                        loading="lazy"
                        src="/images/fonio.svg"
                        width="360"
                      />
                    </a>
                    <span class="promo-tag"> Promo −9 % </span>
                  </div>
                  <div class="product-body">
                    <p class="overline">Kédougou</p>
                    <h3>
                      <a href="produits/04-fonio.html"> Fonio précuit </a>
                    </h3>
                    <p class="muted small">
                      sachet de 500 g · 12 disponible(s)
                    </p>
                    <span class="stock">
                      <span aria-hidden="true"> </span>
                      Disponible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <del> 2 200 FCFA </del>
                        <strong> 2 000 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Fonio précuit au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card out-of-stock"
                  data-component="ProductCard"
                  data-product-id="8"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Gombo frais"
                      href="produits/08-gombo.html"
                    >
                      <img
                        alt="Gombo frais"
                        height="240"
                        loading="lazy"
                        src="/images/gombo.svg"
                        width="360"
                      />
                    </a>
                  </div>
                  <div class="product-body">
                    <p class="overline">Thiès</p>
                    <h3>
                      <a href="produits/08-gombo.html"> Gombo frais </a>
                    </h3>
                    <p class="muted small">kg · 0 disponible(s)</p>
                    <span class="stock empty">
                      <span aria-hidden="true"> </span>
                      Rupture de stock
                    </span>
                    <div class="product-bottom">
                      <div>
                        <strong> 1 200 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Gombo frais au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        disabled=""
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="9"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Huile d’arachide"
                      href="produits/09-huile.html"
                    >
                      <img
                        alt="Huile d’arachide"
                        height="240"
                        loading="lazy"
                        src="/images/huile.svg"
                        width="360"
                      />
                    </a>
                    <span class="promo-tag"> Promo −7 % </span>
                  </div>
                  <div class="product-body">
                    <p class="overline">Kaolack</p>
                    <h3>
                      <a href="produits/09-huile.html"> Huile d’arachide </a>
                    </h3>
                    <p class="muted small">
                      bouteille de 2 L · 20 disponible(s)
                    </p>
                    <span class="stock">
                      <span aria-hidden="true"> </span>
                      Disponible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <del> 4 500 FCFA </del>
                        <strong> 4 200 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Huile d’arachide au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="13"
                >
                  <div class="product-media">
                    <a aria-label="Voir Thiof" href="produits/13-thiof.html">
                      <img
                        alt="Thiof"
                        height="240"
                        loading="lazy"
                        src="/images/thiof.svg"
                        width="360"
                      />
                    </a>
                  </div>
                  <div class="product-body">
                    <p class="overline">Joal</p>
                    <h3>
                      <a href="produits/13-thiof.html"> Thiof </a>
                    </h3>
                    <p class="muted small">kg · 8 disponible(s)</p>
                    <span class="stock">
                      <span aria-hidden="true"> </span>
                      Disponible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <strong> 4 500 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Thiof au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="17"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Bissap séché"
                      href="produits/17-bissap.html"
                    >
                      <img
                        alt="Bissap séché"
                        height="240"
                        loading="lazy"
                        src="/images/bissap.svg"
                        width="360"
                      />
                    </a>
                  </div>
                  <div class="product-body">
                    <p class="overline">Kaolack</p>
                    <h3>
                      <a href="produits/17-bissap.html"> Bissap séché </a>
                    </h3>
                    <p class="muted small">
                      sachet de 250 g · 22 disponible(s)
                    </p>
                    <span class="stock">
                      <span aria-hidden="true"> </span>
                      Disponible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <strong> 1 200 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Bissap séché au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
                <!-- DEMANDE 02 / 05 — À PROGRAMMER : Transformer cette carte en ProductCard, déclarer les props et émettre add. Répéter les cartes depuis les données. -->
                <article
                  class="product-card"
                  data-component="ProductCard"
                  data-product-id="18"
                >
                  <div class="product-media">
                    <a
                      aria-label="Voir Bouye en poudre"
                      href="produits/18-bouye.html"
                    >
                      <img
                        alt="Bouye en poudre"
                        height="240"
                        loading="lazy"
                        src="/images/bouye.svg"
                        width="360"
                      />
                    </a>
                    <span class="promo-tag"> Promo −11 % </span>
                  </div>
                  <div class="product-body">
                    <p class="overline">Tambacounda</p>
                    <h3>
                      <a href="produits/18-bouye.html"> Bouye en poudre </a>
                    </h3>
                    <p class="muted small">
                      sachet de 500 g · 13 disponible(s)
                    </p>
                    <span class="stock">
                      <span aria-hidden="true"> </span>
                      Disponible
                    </span>
                    <div class="product-bottom">
                      <div>
                        <del> 1 800 FCFA </del>
                        <strong> 1 600 FCFA </strong>
                      </div>
                      <button
                        aria-label="Ajouter Bouye en poudre au panier"
                        class="add-button"
                        data-action="ajouter-panier"
                        type="button"
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
                          <path d="M12 5v14M5 12h14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </article>
              </div>
            </section>
            <section class="loyalty-banner mt">
              <div>
                <p class="overline">LES PETITS GESTES QUI COMPTENT</p>
                <h2>Un panier généreux, une attention en plus.</h2>
                <p>
                  5 % de réduction dès 25 000 FCFA. Avec TERANGA10, profitez de
                  10 % : seule la meilleure remise est retenue.
                </p>
              </div>
              <span class="coupon">
                TERANGA10
                <small> Votre code de démonstration </small>
              </span>
            </section>
            <section class="promise-strip">
              <div>
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
                <strong> Votre marché, à votre rythme </strong>
                <span> Préparez votre panier depuis chez vous. </span>
              </div>
              <div>
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
                  <path
                    d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Zm-5 0a3 3 0 1 1-6 0 3 3 0 0 1 6 0"
                  ></path>
                </svg>
                <strong> Au cœur du quartier </strong>
                <span> Retrait à Castors ou livraison à domicile. </span>
              </div>
              <div>
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
                  <path d="M20 3C8 2 2 8 5 15s17 4 15-12ZM5 20l10-10"></path>
                </svg>
                <strong> Le plaisir de partager </strong>
                <span> Des essentiels et des saveurs bien de chez nous. </span>
              </div>
            </section>
            <p class="template-note">
              <svg
                aria-hidden="true"
                class="icon"
                fill="none"
                height="16"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.7"
                viewbox="0 0 24 24"
                width="16"
              >
                <path d="m8 6-6 6 6 6m8-12 6 6-6 6M14 3l-4 18"></path>
              </svg>
              <span>
                Les données sont des exemples fixes. Les actions métier seront
                programmées par les étudiants.
              </span>
            </p>
          </div>
        </main>
  </div>
</template>

<script>

</script>

<style>

</style>