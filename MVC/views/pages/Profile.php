<main class="profile">
      <div class="container">
        <!-- Search bar -->
        <div class="profile-container">
          <div class="search-bar d-none d-md-flex">
            <input
              type="text"
              name=""
              placeholder="Search for item"
              id=""
              class="search-bar__input"
            />
            <button class="search-bar__submit">
              <img
                src="<?= $icon_path ?>seach.svg"
                alt=""
                class="search-bar__icon icon"
              />
            </button>
          </div>
        </div>
        <div class="profile-container">
          <div class="row gy-md-3">
            <div class="col-3 col-xl-4 col-lg-5 col-md-12">
              <aside class="profile__sidebar">
                <!-- User -->
                <div class="profile-user">
                  <img
                    src="<?= $img_path ?>z4888248915574_b3c4f7538cab253aae1f1560aa4672a3 (1).jpg"
                    alt=""
                    class="profile-user__avatar"
                  />
                  <h1 class="profile-user__name">Imran Khan</h1>
                  <p class="profile-user__desc">Registered: 17th May 2022</p>
                </div>
                <!-- Menu 1 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Manage Account</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a
                        href="http://localhost/projectPTIT/Home/EditPersonalInfo"
                        class="profile-menu__link"
                      >
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>profile.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Personal info
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>local.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Addresses
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>letter.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Communications & privacy
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menu 2 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">My items</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>dowloand.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Reorder
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>heart.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Lists
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>gifl.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Registries
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menu 3 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Subscriptions & plans</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>protect.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Protection plans
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menu 4 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Customer Service</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>help.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Help
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>use.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Terms of Use
                      </a>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
            <div class="col-9 col-xl-8 col-lg-7 col-md-12">
              <div class="cart-info">
                <div class="row gy-3">
                  <!-- My Wallet -->
                  <div class="col-12">
                    <h2 class="cart-info__heading">My Wallet</h2>
                    <p class="cart-info__desc profile__desc">Payment methods</p>
                    <div
                      class="row gy-md-2 row-cols-3 row-cols-xl-2 row-cols-lg-1"
                    >
                      <!-- payment card 1 -->
                      <div class="col">
                        <article
                          class="payment-card"
                          style="--bg-color: #1e2e69"
                        >
                          <img
                            src="<?= $img_path ?>card/plane-bg.svg"
                            alt=""
                            class="payment-card__img"
                          />
                          <div class="payment-card__top">
                            <img src="<?= $img_path ?>card/plane.svg" alt="" />
                            <span class="payment-card__type">FeatherCard</span>
                          </div>
                          <div class="payment-card__number">
                            1234 4567 8901 2221
                          </div>
                          <div class="payment-card__bottom">
                            <div>
                              <p class="payment-card__label">Card Holder</p>
                              <p class="payment-card__value">Imran Khan</p>
                            </div>
                            <div class="payment-card__expired">
                              <p class="payment-card__label">Expired</p>
                              <p class="payment-card__value">10/22</p>
                            </div>
                            <div class="payment-card__circle"></div>
                          </div>
                        </article>
                      </div>
                      <!-- payment card 2 -->
                      <div class="col">
                        <article
                          class="payment-card"
                          style="--bg-color: #354151"
                        >
                          <img
                            src="<?= $img_path ?>card/leaf-bg.svg"
                            alt=""
                            class="payment-card__img"
                          />
                          <div class="payment-card__top">
                            <img src="<?= $img_path ?>card/leaf.svg" alt="" />
                            <span class="payment-card__type">FeatherCard</span>
                          </div>
                          <div class="payment-card__number">
                            1234 4567 0092 2221
                          </div>
                          <div class="payment-card__bottom">
                            <div>
                              <p class="payment-card__label">Card Holder</p>
                              <p class="payment-card__value">Imran Khan</p>
                            </div>
                            <div class="payment-card__expired">
                              <p class="payment-card__label">Expired</p>
                              <p class="payment-card__value">11/22</p>
                            </div>
                            <div class="payment-card__circle"></div>
                          </div>
                        </article>
                      </div>
                      <!-- Add new payment card -->
                      <div class="col">
                        <a href="http://localhost/projectPTIT/Home/AddNewCard" class="new-card">
                          <img
                            src="<?= $icon_path ?>plus.svg"
                            alt=""
                            class="new-card__icon icon"
                          />
                          <p class="new-card__text">Add New Card</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!--Account info  -->
                  <div class="col-12">
                    <h2 class="cart-info__heading">Account info</h2>
                    <p class="cart-info__desc profile__desc">
                      Addresses, contact information and password
                    </p>
                    <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                      <!-- Account info 1 -->
                      <div class="col">
                        <a href="http://localhost/projectPTIT/Home/EditPersonalInfo">
                          <article class="account-info">
                            <div class="account-info__icon">
                              <img
                                src="<?= $icon_path ?>message.svg"
                                alt=""
                                class="icon"
                              />
                            </div>
                            <div>
                              <h3 class="account-info__title">Email Address</h3>
                              <p class="account-info__desc">
                                tarek97.ta@gmail.com
                              </p>
                            </div>
                          </article>
                        </a>
                      </div>
                      <!-- Account info 2 -->
                      <div class="col">
                        <a href="http://localhost/projectPTIT/Home/EditPersonalInfo">
                          <article class="account-info">
                            <div class="account-info__icon">
                              <img
                                src="<?= $icon_path ?>calling.svg"
                                alt=""
                                class="icon"
                              />
                            </div>
                            <div>
                              <h3 class="account-info__title">Phone number</h3>
                              <p class="account-info__desc">
                                +000 11122 2345 657
                              </p>
                            </div>
                          </article>
                        </a>
                      </div>
                      <!-- Account info 3 -->
                      <div class="col">
                        <a href="http://localhost/projectPTIT/Home/EditPersonalInfo">
                          <article class="account-info">
                            <div class="account-info__icon">
                              <img
                                src="<?= $icon_path ?>local.svg"
                                alt=""
                                class="icon"
                              />
                            </div>
                            <div>
                              <h3 class="account-info__title">
                                Add an address
                              </h3>
                              <p class="account-info__desc">
                                Bangladesh Embassy, Washington, DC 20008
                              </p>
                            </div>
                          </article>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!--  Lists-->
                  <div class="col-12">
                    <h2 class="cart-info__heading">Lists</h2>
                    <p class="cart-info__desc profile__desc">
                      2 items - Primary
                    </p>
                    <!-- Favourite item 1 -->
                    <article class="favourite-item">
                      <img
                        src="<?= $img_path ?>products/item1.png"
                        alt=""
                        class="favourite-item__thumb"
                      />
                      <div>
                        <h3 class="favourite-item__title">
                          Coffee Beans - Espresso Arabica and Robusta Beans
                        </h3>
                        <div class="favourite-item__content">
                          <span class="favourite-item__price">$47.00</span>
                          <button class="btn btn--primary btn--rounded">
                            Add to cart
                          </button>
                        </div>
                      </div>
                    </article>

                    <div class="separate" style="--margin: 20px"></div>

                    <!-- Favourite item 2 -->
                    <article class="favourite-item">
                      <img
                        src="<?= $img_path ?>products/item1.png"
                        alt=""
                        class="favourite-item__thumb"
                      />
                      <div>
                        <h3 class="favourite-item__title">
                          Coffee Beans - Espresso Arabica and Robusta Beans
                        </h3>
                        <div class="favourite-item__content">
                          <span class="favourite-item__price">$47.00</span>
                          <button class="btn btn--primary btn--rounded">
                            Add to cart
                          </button>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="delete-confirm" class="modal modal--small hide">
      <div class="modal__content">
        <div class="modal_-text">Do you want to remove this product?</div>
        <div class="modal__bottom">
          <button
            class="btn btn--small btn--outline modal__btn js-toggle"
            toggle-target="#delete-confirm"
          >
            Cancel
          </button>
          <button
            class="btn btn--danger btn--small btn--primary modal__btn btn--no-margin js-toggle"
            toggle-target="#delete-confirm"
          >
            Delete
          </button>
        </div>
      </div>
      <div
        class="modal__overlay js-toggle"
        toggle-target="#delete-confirm"
      ></div>
    </div>