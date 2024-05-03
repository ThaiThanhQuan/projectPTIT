<main class="checkout-page">
      <div class="container">
        <!-- Search bar -->
        <div class="checkout-container">
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
        <!-- Breadcrumbs -->
        <div class="checkout-container">
          <ul class="breadcrumbs checkout-page__breadcrumbs">
            <li>
              <a href="http://localhost/projectPTIT/Home/" class="breadcrumbs__link"
                >Home
                <img src="<?= $icon_path ?>arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="http://localhost/projectPTIT/Home/CheckOut" class="breadcrumbs__link"
                >Checkout
                <img src="<?= $icon_path ?>arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link breadcrumbs__link--current"
                >Shipping
              </a>
            </li>
          </ul>
        </div>
        <!-- Checkout content -->
        <div class="checkout-container">
          <div class="row gy-xl-3">
            <div class="col-8 col-xl-12">
              <div class="cart-info">
                <h1 class="cart-info__heading">
                  1. Shipping, arrives between Mon, May 16—Tue, May 24
                </h1>
                <div class="cart-info__separate"></div>
                <!-- Checkout address -->
                <div class="user-address">
                  <div class="user-address__top">
                    <div>
                      <h2 class="user-address__title">Shipping address</h2>
                      <p class="user-address__desc">
                        Where should we deliver your order?
                      </p>
                    </div>
                    <button
                      class="user-address__btn btn btn--primary btn--rounded btn--small js-toggle"
                      toggle-target="#add-new-address"
                    >
                      <img src="<?= $icon_path ?>plus.svg" alt="" />
                      Add a new address
                    </button>
                  </div>
                  <div class="user-address__list">
                    <!-- Empty message -->
                    <!-- <div class="user-address__message">
                      Not address yet.
                      <a href="#!" class="user-address__link js-toggle" toggle-target="#add-new-address"
                        >Add a new address</a
                      >
                    </div> -->
                    <!-- Address card 1 -->
                    <article class="address-card">
                      <div class="address-card__left">
                        <div class="address-card__choose">
                          <label class="cart-info__checkbox">
                            <input
                              checked
                              name="shipping-address"
                              type="radio"
                              class="cart-info__checkbox-input"
                            />
                          </label>
                        </div>
                        <div class="address-card__info">
                          <h3 class="address-card__title">Imran Khan</h3>
                          <p class="address-card__desc">
                            Museum of Rajas, Sylhet Sadar, Sylhet 3100.
                          </p>
                          <ul class="address-card__list">
                            <li class="address-card__item">Shipping</li>
                            <li class="address-card__item">
                              Delivery from store
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="address-card__right">
                        <div class="address-card__ctrl">
                          <button
                            class="cart-info__edit-btn js-toggle"
                            toggle-target="#add-new-address"
                          >
                            <img
                              class="icon"
                              src="<?= $icon_path ?>edit.svg"
                              alt=""
                            />
                            Edit
                          </button>
                        </div>
                      </div>
                    </article>
                    <!-- Address card 2 -->
                    <article class="address-card">
                      <div class="address-card__left">
                        <div class="address-card__choose">
                        <label class="cart-info__checkbox">
                            <input
                              checked
                              name="shipping-address"
                              type="radio"
                              class="cart-info__checkbox-input"
                            />
                          </label>
                        </div>
                        <div class="address-card__info">
                          <h3 class="address-card__title">Imran Khan</h3>
                          <p class="address-card__desc">
                            Al Hamra City (10th Floor), Hazrat Shahjalal Road,
                            Sylhet, Sylhet, Bangladesh
                          </p>
                          <ul class="address-card__list">
                            <li class="address-card__item">Shipping</li>
                            <li class="address-card__item">
                              Delivery from store
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="address-card__right">
                        <div class="address-card__ctrl">
                          <button class="cart-info__edit-btn">
                            <img src="<?= $icon_path ?>edit.svg" alt="" />
                            Edit
                          </button>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="cart-info__separate"></div>
                <h2 class="cart-info__sub-heading">Items details</h2>
                <div class="cart-info__list">
                  <!-- Cart item 1 -->
                  <article class="cart-item">
                    <a href="http://localhost/projectPTIT/Home/ProductDetail">
                      <img
                        src="<?= $img_path ?>products/item1.png"
                        alt=""
                        class="cart-item__thumb"
                      />
                    </a>
                    <div class="cart-item__content">
                      <div class="cart-item__content-left">
                        <h3 class="cart-item__title">
                          Coffee Beans - Espresso Arabica and Robusta Beans
                        </h3>
                        <p class="cart-item__price-wrap">
                          $47.00 |
                          <span class="cart-item__status">In Stock</span>
                        </p>
                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                          <div class="cart-item__input">
                            LavAzza
                            <img
                              class="icon"
                              src="<?= $icon_path ?>arrow-down-2.svg"
                              alt=""
                            />
                          </div>
                          <div class="cart-item__input">
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?= $icon_path ?>minus.svg"
                                alt=""
                              />
                            </button>
                            <span>1</span>
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?= $icon_path ?>plus.svg"
                                alt=""
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="cart-item__content-right">
                        <p class="cart-item__total-price">47.00$</p>
                        <div class="cart-item__ctrl">
                          <button class="cart-item__ctrl-btn">
                            <img src="<?= $icon_path ?>heart-2.svg" alt="" />
                            Save
                          </button>
                          <button
                            class="cart-item__ctrl-btn js-toggle"
                            toggle-target="#delete-confirm"
                          >
                            <img src="<?= $icon_path ?>trash.svg" alt="" />
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Cart item 2 -->
                  <article class="cart-item">
                    <a href="http://localhost/projectPTIT/Home/ProductDetail">
                      <img
                        src="<?= $img_path ?>products/item2.png"
                        alt=""
                        class="cart-item__thumb"
                      />
                    </a>
                    <div class="cart-item__content">
                      <div class="cart-item__content-left">
                        <h3 class="cart-item__title">
                          Lavazza Coffee Blends - Try the Italian Espresso
                        </h3>
                        <p class="cart-item__price-wrap">
                          $53.00 |
                          <span class="cart-item__status">In Stock</span>
                        </p>
                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                          <div class="cart-item__input">
                            LavAzza
                            <img
                              class="icon"
                              src="<?= $icon_path ?>arrow-down-2.svg"
                              alt=""
                            />
                          </div>
                          <div class="cart-item__input">
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?= $icon_path ?>minus.svg"
                                alt=""
                              />
                            </button>
                            <span>2</span>
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?= $icon_path ?>plus.svg"
                                alt=""
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="cart-item__content-right">
                        <p class="cart-item__total-price">$106.00</p>
                        <div class="cart-item__ctrl">
                          <button class="cart-item__ctrl-btn">
                            <img src="<?= $icon_path ?>heart-2.svg" alt="" />
                            Save
                          </button>
                          <button
                            class="cart-item__ctrl-btn js-toggle"
                            toggle-target="#delete-confirm"
                          >
                            <img src="<?= $icon_path ?>trash.svg" alt="" />
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Cart item 3 -->
                  <article class="cart-item">
                    <a href="http://localhost/projectPTIT/Home/ProductDetail">
                      <img
                        src="<?= $img_path ?>products/item3.png"
                        alt=""
                        class="cart-item__thumb"
                      />
                    </a>
                    <div class="cart-item__content">
                      <div class="cart-item__content-left">
                        <h3 class="cart-item__title">
                          Qualità Oro Mountain Grown - Espresso Coffee Beans
                        </h3>
                        <p class="cart-item__price-wrap">
                          $38.65 |
                          <span class="cart-item__status">In Stock</span>
                        </p>
                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                          <div class="cart-item__input">
                            LavAzza
                            <img
                              class="icon"
                              src="<?= $icon_path ?>arrow-down-2.svg"
                              alt=""
                            />
                          </div>
                          <div class="cart-item__input">
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?= $icon_path ?>minus.svg"
                                alt=""
                              />
                            </button>
                            <span>1</span>
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?= $icon_path ?>plus.svg"
                                alt=""
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="cart-item__content-right">
                        <p class="cart-item__total-price">$38.65</p>
                        <div class="cart-item__ctrl">
                          <button class="cart-item__ctrl-btn">
                            <img src="<?= $icon_path ?>heart-2.svg" alt="" />
                            Save
                          </button>
                          <button
                            class="cart-item__ctrl-btn js-toggle"
                            toggle-target="#delete-confirm"
                          >
                            <img src="<?= $icon_path ?>trash.svg" alt="" />
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="cart-info__bottom d-md-none">
                  <div class="row">
                    <div class="col-8 col-xxl-7">
                      <div class="cart-info__continue">
                        <a href="http://localhost/projectPTIT/Home/" class="cart-info__continue-link">
                          <img
                            class="cart-info__continue-icon icon"
                            src="<?= $icon_path ?>arrow-down-2.svg"
                            alt=""
                          />
                          Continue Shopping
                        </a>
                      </div>
                    </div>
                    <div class="col-4 col-xxl-5">
                      <div class="cart-info__row">
                        <span>Subtotal:</span>
                        <span>$191.65</span>
                      </div>
                      <div class="cart-info__row">
                        <span>Shipping:</span>
                        <span>$10.00</span>
                      </div>
                      <div class="cart-info__separate"></div>
                      <div class="cart-info__row cart-info__row--bold">
                        <span>Total:</span>
                        <span>$201.65</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 col-xl-12">
              <div class="cart-info">
                <div class="cart-info__row">
                  <span
                    >Subtotal
                    <span class="cart-info__sub-label">(items)</span></span
                  >
                  <span>3</span>
                </div>
                <div class="cart-info__row">
                  <span
                    >Price
                    <span class="cart-info__sub-label">(Total)</span></span
                  >
                  <span>$191.65</span>
                </div>
                <div class="cart-info__row">
                  <span>Shipping</span>
                  <span>$10.00</span>
                </div>
                <div class="cart-info__separate"></div>
                <div class="cart-info__row">
                  <span>Estimated Total</span>
                  <span>$201.65</span>
                </div>
                <a
                  href="http://localhost/projectPTIT/Home/Payment"
                  class="cart-info__next-btn btn btn--primary btn--rounded"
                >
                  Continue to checkout
                </a>
              </div>
              <div class="cart-info">
                <a href="#!">
                  <article class="gift-item">
                    <div class="gift-item__icon-wrap">
                      <img
                        src="<?= $icon_path ?>gift.svg"
                        alt=""
                        class="gift-item__icon"
                      />
                    </div>
                    <div class="gift-item__content">
                      <h3 class="gift-item__title">
                        Send this order as a gift.
                      </h3>
                      <p class="gift-item__desc">
                        Available items will be shipped to your gift recipient.
                      </p>
                    </div>
                  </article>
                </a>
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
    <!-- Modal: add new shopping address -->
    <div id="add-new-address" class="modal hide" style="--content-width: 650px">
      <div class="modal__content">
        <form action="" class="form">
          <h2 class="modal__heading">Add new shipping address</h2>
          <div class="modal__body">
            <div class="form__row">
              <div class="form__group">
                <label for="name" class="form__label form__label--small"
                  >Name</label
                >
                <div class="form__text-input form__text-input--small">
                  <input
                    type="text"
                    placeholder="Name"
                    name="name"
                    id="name"
                    class="form__input"
                    required
                    minlength="2"
                  />
                  <img
                    src="<?= $icon_path ?>form__error.svg"
                    alt=""
                    class="form__input-icon-error"
                  />
                </div>
                <p class="form__error">Name must at least 2 characters</p>
              </div>
              <div class="form__group">
                <label for="phone" class="form__label form__label--small"
                  >Phone</label
                >
                <div class="form__text-input form__text-input--small">
                  <input
                    type="tel"
                    placeholder="Phone"
                    name="phone"
                    id="phone"
                    class="form__input"
                    required
                    minlength="10"
                  />
                  <img
                    src="<?= $icon_path ?>form__error.svg"
                    alt=""
                    class="form__input-icon-error"
                  />
                </div>
                <p class="form__error">Phone must at least 11 characters</p>
              </div>
            </div>
            <div class="form__group">
              <label for="address" class="form__label form__label--small"
                >Address</label
              >
              <div class="form__text-area">
                <textarea
                  placeholder="Address (Area and street)"
                  name="address"
                  id="address"
                  class="form__text-area-input"
                  required
                ></textarea>
                <img
                  src="<?= $icon_path ?>form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
              </div>
              <p class="form__error">Phone must at least 11 characters</p>
            </div>
            <div class="form__group">
              <label for="city" class="form__label form__label--small"
                >City/District/Town</label
              >
              <div class="form__text-input form__text-input--small">
                <input
                  id="city"
                  type="text"
                  placeholder="City/District/Town"
                  name=""
                  readonly
                  class="form__input js-toggle"
                  toggle-target="#city-dialog"
                  required
                />
                <img
                  src="<?= $icon_path ?>form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <!-- Select dialog -->
                <div id="city-dialog" class="form__select-dialog hide">
                  <h2 class="form__dialog-heading d-none d-sm-block">
                    City/District/Town
                  </h2>
                  <button
                    class="form__close-dialog d-none d-sm-block js-toggle"
                    toggle-target="#city-dialog"
                  >
                    &times;
                  </button>
                  <div class="form__search">
                    <input
                      type="text"
                      placeholder="search"
                      class="form__search-input"
                    />
                    <img
                      src="<?= $icon_path ?>seach.svg"
                      alt=""
                      class="form__search-icon icon"
                    />
                  </div>
                  <ul class="form__options-list">
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option form__option--current">
                      Ho Chi Minh
                    </li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                  </ul>
                </div>
              </div>
              <p class="form__error">Phone must at least 11 characters</p>
            </div>
            <div class="form__group form__group--inline">
              <label class="form__checkbox">
                <input
                  type="checkbox"
                  name=""
                  id=""
                  class="form__checkbox-input d-none"
                />
                <span class="form__checkbox-label">Set as default address</span>
              </label>
            </div>
          </div>
        </form>
        <div class="modal__bottom">
          <button
            class="btn btn--small btn--text modal__btn js-toggle"
            toggle-target="#add-new-address"
          >
            Cancel
          </button>
          <button
            class="btn btn--small btn--primary modal__btn btn--no-margin js-toggle"
            toggle-target="#add-new-address"
          >
            Create
          </button>
        </div>
      </div>
      <div class="modal__overlay"></div>
    </div>