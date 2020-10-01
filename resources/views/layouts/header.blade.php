<header>
    <div class="black-header">
        <div class="container">
            <div class="inner-black">
                <div class="mobile d-none d-md-flex">
                    <img src="/src/images/call-icon.svg" alt="">
                    <a href="#">+7 707 180 63 86</a>
                </div>
                <div class="search-input">
                    <input type="text" placeholder="Поиск">
                    <img src="/src/images/search-icon.png" alt="" class="search-icon">
                </div>
            </div>
        </div>
    </div>
    <div class="white-header">
        <div class="container">
            <div class="inner-white d-none d-md-flex">
                <div class="left-side">
                    <a href="/"><img src="/src/images/big-logo.png" alt="" class="logo"></a>
                </div>
                <div>
                    <?php $uriList = explode("/", $_SERVER['REQUEST_URI']); ?>
                   <a href='/products'  <?php echo 'class="'.($uriList[1]=='products' ? 'active' : '').'"'; ?>>Товары и услуги</a>
                   <a href='/news'      <?php echo 'class="'.($uriList[1]=='news' ? 'active' : '').'"'; ?>>Новости</a>
                   <a href='/about-us'  <?php echo 'class="'.($uriList[1]=='about-us' ? 'active' : '').'"'; ?>>О нас</a>
                   <a href='/contacts'  <?php echo 'class="'.($uriList[1]=='contacts' ? 'active' : '').'"'; ?>>Контакты</a>
                </div>
                <div class="right-side">
                    <button class="korzina-btn">Корзина <div class="cart-red-count">1</div></button>
                </div>
            </div>
            <div class="inner-white-mobile d-md-none">
                <img src="/src/images/big-logo.png" alt="" class="logo-m">
                <div class="right-side">
                    <img src="/src/images/menu-mobile-icon.svg" onclick="openNav()" alt="">
                </div>
                <div id="myNav" class="overlay">
                    <img src="/src/images/close-icon.svg" alt="" class="closebtn" onclick="closeNav()">
                    <div class="overlay-content">
                        <p class="mob-menu-logo">luxurymebel</p>

                        <?php
                        //                    $uri = explode( '/', $_SERVER['REQUEST_URI'])[0];
//                        $uri = $_SERVER['REQUEST_URI'];
//                        $routes = require '../config/routes.php';
//                        foreach ($routes as $route => $value) {
//                            $activeClass = $uri === '/'.$value['file_location'] ? "class='active'" : "";
//                            echo "<a href='/{$value['file_location']}' {$activeClass}>{$value['name']}</a>";
//                        }
                        ?>

                        <div class="border-line"></div>
                        <a href="">+7 777 229 88 89</a>
                        <a href="">+7 747 981 98 62</a>
                        <button class="green-btn-outline" type="button" data-toggle="modal" data-target="#zayavkaModal">Оставить заявку</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Korzina -->
    <div class="cart-open-block">
        <div class="mobile-cart-title">
            <p>Корзина</p>
            <img class="mobile-cart-close" src="/src/images/korzina-close.png">
        </div>
        <div class="cart-not-empty">
            <div class="cart-open-list">
                <div class="d-flex align-items-center cart-item">
                    <img class="cart-item-img" src="/src/images/p1.png">
                    <div>
                        <p class="cart-item-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="cart-plus-minus d-flex justify-content-between align-items-center">
                            <button class="cart-plus-minus-btn"></button>
                            <p class="cart-tovar-sani">7</p>
                            <button class="cart-plus-minus-btn cart-plus-btn"></button>
                        </div>
                    </div>
                    <p class="cart-item-price">8 700 KZT</p>
                    <img class="cart-unselect" src="/src/images/unselect.svg">
                </div>
                <div class="d-flex align-items-center cart-item">
                    <img class="cart-item-img" src="/src/images/p1.png">
                    <div>
                        <p class="cart-item-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="cart-plus-minus d-flex justify-content-between align-items-center">
                            <button class="cart-plus-minus-btn"></button>
                            <p class="cart-tovar-sani">7</p>
                            <button class="cart-plus-minus-btn cart-plus-btn"></button>
                        </div>
                    </div>
                    <p class="cart-item-price">8 700 KZT</p>
                    <img class="cart-unselect" src="/src/images/unselect.svg">
                </div>
                <div class="d-flex align-items-center cart-item">
                    <img class="cart-item-img" src="/src/images/p1.png">
                    <div>
                        <p class="cart-item-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="cart-plus-minus d-flex justify-content-between align-items-center">
                            <button class="cart-plus-minus-btn"></button>
                            <p class="cart-tovar-sani">7</p>
                            <button class="cart-plus-minus-btn cart-plus-btn"></button>
                        </div>
                    </div>
                    <p class="cart-item-price">8 700 KZT</p>
                    <img class="cart-unselect" src="/src/images/unselect.svg">
                </div>

            </div>
            <div class="cart-open-buttons d-flex justify-content-between align-items-center">
                <div class="cart-open-itog">
                    <p>Итог:</p>
                    <h5>8 700 KZT</h5>
                </div>
                <button class="green-btn cart-open-btn">Оформить заказ</button>
            </div>
        </div>
        <div class="cart-if-empty">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="cart-empty">
                    <img src="/src/images/cart-empty.png">
                    <p>Ваша корзина пуста</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade zayavka-modal" id="zayavkaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <form action="../app/mail.php" method="post">
                    <div class="modal-header justify-content-end">
                        <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку</h5>
                        <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="/src/images/modal-close.png"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Телефон</label>
                            <input type="text" class="form-control" id="recipient-phone" placeholder="Введите телефон" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Имя</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Введите имя" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Город</label>
                            <input type="text" class="form-control" id="recipient-city" placeholder="С какого вы города" name="city" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="green-btn detail-info-btn" type="submit"><span>Отправить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade zayavka-modal" id="zayavkaOkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заявка отправлена</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="/src/images/modal-close.png"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Спасибо что оставили заявку. Скоро свяжемся с вами!</p>
                </div>
                <div class="modal-footer">
                    <button class="green-btn detail-info-btn" type="button" data-dismiss="modal" aria-label="Close"><span>Закрыть</span></button>
                </div>
            </div>
        </div>
    </div>
    <?php
//    if(!empty($_SESSION['message']) && $_SESSION['message'] === 'success') {
    ?>
        <script>
            // $('#zayavkaOkModal').modal('show')
        </script>
    <?php
//        unset($_SESSION['message']);
//    };
    ?>
    <script>
        const reorganizeCartOpen = function() {
            if ($('.cart-open-list').children().length > 0) {
                $('.cart-not-empty').show();
                $('.cart-if-empty').hide();
            }
        }
        const clickOutside = function() {
            $(document).mouseup(function(e) {
                var container = $(".cart-open-block");
                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && container.has(e.target).length === 0)
                {
                    container.hide(500);
                }
            });
        }
    </script>
    <script>
        clickOutside()
        reorganizeCartOpen();

        $('.korzina-btn, .black-cart, .mobile-cart-close').on('click', function () {
            $('.cart-open-block').toggle(500)
        })

    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</header>
