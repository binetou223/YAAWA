<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import AppHeader from "./components/AppHeader.vue";

import CatalogView from "./Views/CatalogView.vue";
import AppFooter from "./components/AppFooter.vue";
</script>

<template>
  <div>
    <!DOCTYPE html>
    <html data-theme="light" lang="fr">
      <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta
          content="Bienvenue chez Awa — maquette pédagogique Teranga Market, HTML et CSS sans JavaScript."
          name="description"
        />
        <title>Bienvenue chez Awa | Teranga Market</title>
        <link href="/logo.svg" rel="icon" type="image/svg+xml" />
        <link href="/resources/css/app.css" rel="stylesheet" />
        <link href="/resources/css/template.css" rel="stylesheet" />
      </head>
      <body data-page="index.html" id="page-top">
        <!--
 TERANGA MARKET — TEMPLATE ÉTUDIANT — M. Aly Tall Niang
 Demandes associées : 01, 02, 05, 06, 07, 18, 19
 Aucune bibliothèque et aucun JavaScript n'est chargé.
 Les liens servent à visiter les maquettes. Les boutons data-action restent à programmer.
 Les commentaires DEMANDE et data-component indiquent les futurs composants Vue.
-->
        <!-- DEMANDE 01 / 06 / 11 — À PROGRAMMER : Extraire AppHeader dans le layout. Remplacer les liens HTML par la navigation Vue Router. -->
        <a class="skip-link" href="#main-content"> Aller au contenu </a>

        <AppHeader />
        <main>
          <CatalogView />
        </main>
        <AppFooter />
        <!-- DEMANDE 06 — À PROGRAMMER : Extraire BaseDrawer : slots header/default/footer, prop open et événement close. Ce tiroir utilise uniquement la cible CSS. -->
        <section
          aria-labelledby="drawer-title"
          class="static-overlay drawer-overlay"
          id="panier-apercu"
          role="dialog"
          tabindex="-1"
        >
          <a
            aria-label="Fermer le panier"
            class="overlay-dismiss"
            href="#page-top"
          >
          </a>
          <div class="drawer-panel" data-component="BaseDrawer">
            <header class="dialog-header">
              <div>
                <p class="overline">VOTRE SÉLECTION</p>
                <h2 id="drawer-title">
                  Mon panier
                  <span class="small muted"> 4 unités </span>
                </h2>
              </div>
              <a
                aria-label="Fermer le panier"
                class="icon-button"
                href="#page-top"
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
                  <path d="m6 6 12 12M6 18 18 6"></path>
                </svg>
              </a>
            </header>
            <div class="drawer-body">
              <!-- DEMANDE 05 / 24 — À PROGRAMMER : Afficher les lignes du store panier ; boutons et quantités sans effet dans ce template. -->
              <div class="cart-items">
                <article class="cart-line" data-product-id="1">
                  <img
                    alt="Riz brisé parfumé"
                    height="70"
                    src="/images/riz.svg"
                    width="64"
                  />
                  <div class="cart-line-main">
                    <strong> Riz brisé parfumé </strong>
                    <small> 17 500 FCFA / sac de 25 kg </small>
                    <div class="quantity" data-component="QuantityControl">
                      <button
                        aria-label="Diminuer la quantité de Riz brisé parfumé"
                        class=""
                        data-action="diminuer-quantite"
                        type="button"
                      >
                        −
                      </button>
                      <input
                        aria-label="Quantité de Riz brisé parfumé"
                        id="drawer-1"
                        max="18"
                        min="0"
                        name="quantity"
                        step="1"
                        type="number"
                        value="1"
                      />
                      <button
                        aria-label="Augmenter la quantité de Riz brisé parfumé"
                        class=""
                        data-action="augmenter-quantite"
                        type="button"
                      >
                        +
                      </button>
                    </div>
                  </div>
                  <div class="cart-line-end">
                    <button
                      aria-label="Retirer Riz brisé parfumé"
                      class="icon-button"
                      data-action="retirer-produit"
                      type="button"
                    >
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
                        <path d="m6 6 12 12M6 18 18 6"></path>
                      </svg>
                    </button>
                    <strong> 17 500 FCFA </strong>
                  </div>
                </article>
                <article class="cart-line" data-product-id="2">
                  <img
                    alt="Oignons de Potou"
                    height="70"
                    src="/images/oignons.svg"
                    width="64"
                  />
                  <div class="cart-line-main">
                    <strong> Oignons de Potou </strong>
                    <small> 700 FCFA / kg </small>
                    <div class="quantity" data-component="QuantityControl">
                      <button
                        aria-label="Diminuer la quantité de Oignons de Potou"
                        class=""
                        data-action="diminuer-quantite"
                        type="button"
                      >
                        −
                      </button>
                      <input
                        aria-label="Quantité de Oignons de Potou"
                        id="drawer-2"
                        max="4"
                        min="0"
                        name="quantity"
                        step="1"
                        type="number"
                        value="2"
                      />
                      <button
                        aria-label="Augmenter la quantité de Oignons de Potou"
                        class=""
                        data-action="augmenter-quantite"
                        type="button"
                      >
                        +
                      </button>
                    </div>
                  </div>
                  <div class="cart-line-end">
                    <button
                      aria-label="Retirer Oignons de Potou"
                      class="icon-button"
                      data-action="retirer-produit"
                      type="button"
                    >
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
                        <path d="m6 6 12 12M6 18 18 6"></path>
                      </svg>
                    </button>
                    <strong> 1 400 FCFA </strong>
                  </div>
                </article>
                <article class="cart-line" data-product-id="17">
                  <img
                    alt="Bissap séché"
                    height="70"
                    src="/images/bissap.svg"
                    width="64"
                  />
                  <div class="cart-line-main">
                    <strong> Bissap séché </strong>
                    <small> 1 200 FCFA / sachet de 250 g </small>
                    <div class="quantity" data-component="QuantityControl">
                      <button
                        aria-label="Diminuer la quantité de Bissap séché"
                        class=""
                        data-action="diminuer-quantite"
                        type="button"
                      >
                        −
                      </button>
                      <input
                        aria-label="Quantité de Bissap séché"
                        id="drawer-17"
                        max="22"
                        min="0"
                        name="quantity"
                        step="1"
                        type="number"
                        value="1"
                      />
                      <button
                        aria-label="Augmenter la quantité de Bissap séché"
                        class=""
                        data-action="augmenter-quantite"
                        type="button"
                      >
                        +
                      </button>
                    </div>
                  </div>
                  <div class="cart-line-end">
                    <button
                      aria-label="Retirer Bissap séché"
                      class="icon-button"
                      data-action="retirer-produit"
                      type="button"
                    >
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
                        <path d="m6 6 12 12M6 18 18 6"></path>
                      </svg>
                    </button>
                    <strong> 1 200 FCFA </strong>
                  </div>
                </article>
              </div>
              <!-- DEMANDE 07 — À PROGRAMMER : Vérifier le code, son activité et son expiration ; ne pas cumuler fidélité et code. -->
              <div class="promo-box" data-component="PromoCode">
                <label for="drawer-promo-code">
                  Un petit avantage pour votre marché ?
                </label>
                <div class="input-action">
                  <input
                    aria-describedby="drawer-promo-message"
                    id="drawer-promo-code"
                    name="promoCode"
                    placeholder="Votre code promo"
                    value="TERANGA10"
                  />
                  <button
                    class="btn small-btn"
                    data-action="appliquer-code"
                    type="button"
                  >
                    Appliquer
                  </button>
                </div>
                <p class="code-success" id="drawer-promo-message">
                  <svg
                    aria-hidden="true"
                    class="icon"
                    fill="none"
                    height="14"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.7"
                    viewbox="0 0 24 24"
                    width="14"
                  >
                    <path d="m5 12 4 4L19 6"></path>
                  </svg>
                  Code TERANGA10 appliqué : −10 %.
                </p>
                <small>
                  La meilleure remise est retenue. Les réductions ne se cumulent
                  pas.
                </small>
              </div>
              <!-- DEMANDE 05 / 07 / 09 — À PROGRAMMER : Remplacer ces montants fixes par des propriétés calculées, arrondies au FCFA. -->
              <div class="totals" data-component="Totals">
                <div>
                  <span> Sous-total </span>
                  <strong> 20 100 FCFA </strong>
                </div>
                <div>
                  <span> Réduction (10 %) </span>
                  <strong class="success-text"> −2 010 FCFA </strong>
                </div>
                <div class="total-row">
                  <span> Total hors livraison </span>
                  <strong> 18 090 FCFA </strong>
                </div>
              </div>
              <a class="text-button" href="panier.html">
                Voir le panier en pleine page
              </a>
            </div>
            <footer class="dialog-footer">
              <a class="btn full" href="commande.html">
                Passer ma commande
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
            </footer>
          </div>
        </section>
        <!-- DEMANDE 18 — À PROGRAMMER : Extraire SearchDialog ; ouvrir/fermer avec Vue et appliquer v-focus après rendu. -->
        <section
          aria-labelledby="search-dialog-title"
          class="static-overlay modal-overlay"
          id="recherche-apercu"
          role="dialog"
          tabindex="-1"
        >
          <a
            aria-label="Fermer la recherche"
            class="overlay-dismiss"
            href="#page-top"
          >
          </a>
          <div class="modal-window search-dialog" data-component="SearchDialog">
            <header class="dialog-header">
              <h2 id="search-dialog-title">Une envie particulière ?</h2>
              <a aria-label="Fermer" class="icon-button" href="#page-top">
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
                  <path d="m6 6 12 12M6 18 18 6"></path>
                </svg>
              </a>
            </header>
            <div class="modal-body">
              <label class="field" for="quick-search">
                Rechercher un produit
              </label>
              <div class="input-action mt">
                <input
                  data-focus-target="search"
                  id="quick-search"
                  placeholder="Riz, bissap, légumes…"
                  type="search"
                />
                <button
                  class="btn"
                  data-action="rechercher-produit"
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
                    <path
                      d="m21 21-5-5M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0"
                    ></path>
                  </svg>
                  Rechercher
                </button>
              </div>
              <p class="muted small mt">
                Le focus automatique et la recherche sont à programmer.
              </p>
              <div class="suggestions">
                <a class="chip" href="categories/cereales.html"> Céréales </a>
                <a class="chip" href="categories/legumes.html"> Légumes </a>
                <a class="chip" href="categories/saveurs-locales.html">
                  Saveurs locales
                </a>
              </div>
            </div>
          </div>
        </section>
      </body>
    </html>
  </div>
</template>
