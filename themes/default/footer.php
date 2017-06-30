<div class="chan-trang">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-4-10">
                    <!--<div class="logo">
                        <a href=""><img src="images/logo.png" alt=""></a>
                    </div>-->
                    <div class="title-footer">
                        Cửa hàng
                    </div>
                    <div class="if-footer">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $_web['settings']['address']; ?></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $_web['settings']['hotline']; ?></p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $_web['settings']['email']; ?></p>
                    </div>
                </div>
                   <?php
                            $newArrayMenu = array();
                            foreach ($_web['ava'] as $value) {
                                $parent = $value['parent_id'];
                                $newArrayMenu[$parent][] = $value;
                            }
                            recursiveMenu1($newArrayMenu);
                            ?>
             
            </div>
        </div>
    </div>
    <footer>
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    © 2017 by Hanoi Garden Hotel. Website design by Bivaco
                </div>
            </div>
        </div>
    </footer>
  <!-- Menu Mobi -->
    <div class="menu_mobile">
        <div class="nav-btn-show fix-w">
            <a  href="#menu" class="menu-icon-wrap" >  <i class="fa fa-bars" aria-hidden="true"></i>  </a>
            <nav id="menu">
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Sản phẩm</a>
                        <div class="menu-hover">
                            <ul>
                                <li><a href="">Sub menu</a></li>
                                <li><a href="">Sub menu</a>
                                    <div class="menu-hover-1">
                                        <ul>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="">Sub menu</a></li>
                                <li><a href="">Sub menu</a></li>
                                <li><a href="">Sub menu</a>
                                    <div class="menu-hover-1">
                                        <ul>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                            <li><a href="">Sub menu 1</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Dự án</a></li>
                    <li><a href="">Dịch vụ</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Menu Mobi -->
    <div class="mxh">
        <div><a href=""><i class="fa fa-phone" aria-hidden="true"></i></a></div>
        <div><a href=""><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></div>
        <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
        <div><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></div>
    </div>
    <div id="back-to-top">
        <a href="#" title="Back to top">&uarr;</a>
    </div>
</div>