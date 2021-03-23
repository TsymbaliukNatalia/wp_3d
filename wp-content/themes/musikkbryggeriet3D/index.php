<?php get_header(); ?>

<main>
    <div class="popup-bg">
        <form class="popup sing-up" action="index.php"><span class="close"> </span>
            <p class="popup-title">SIGN UP</p>
            <p class="mini-inputs input-line"><label for="first-name"><span>First name</span><input id="first-name" type="text" name="first-name" /></label><label for="last-name"><span>Last name</span><input id="last-name" type="text" name="last-name" /></label></p>
            <p class="input-line"> <label for="username"><span>Username</span><input id="username" type="text" name="username" /></label></p>
            <p class="input-line"><label for="email-sing-up"><span>E-mail</span><input id="email-sing-up" type="email" name="email" /></label></p>
            <p class="input-line"> <label for="password"><span>Pasword</span><input id="password-sing-up" type="password" name="password" /></label></p>
            <p class="have-account"> <a class="sing-in-button" href="#">Already have an account?
                    <span>Join</span></a></p>
            <p class="input-line"> <input class="button" id="sing-up" type="submit" value="SIGN UP" /><label for="sing-up"></label></p>
        </form>
        <form class="popup sing-in" action="index.php"><span class="close"> </span>
            <p class="popup-title">SIGN IN</p>
            <p class="input-line"><label for="email"><span>E-mail</span><input id="email-sing-in" type="email" name="email" /></label></p>
            <p class="input-line"> <label class="password-label" for="password"><span>Pasword</span><a class="forgot-password-button" href="#">Forgot your password?</a><input id="password-sing-in" type="password" name="password" /></label></p>
            <p class="have-account"> <a class="sing-up-button" href="#">Dont have a account? <span> Join </span></a>
            </p>
            <p class="input-line"> <input class="button" id="sing-in" type="submit" value="SIGN IN" /><label for="sing-up"></label></p>
        </form>
        <form class="popup forgot-password" action="index.php"><span class="close"> </span>
            <p class="popup-title">FORGOT YOUR PASSWORD?</p>
            <p class="input-line"><label for="email-forgot-password"><span>E-mail</span><input id="email-forgot-password" type="email" name="email-forgot-password" /></label></p>
            <p class="input-line"> <input class="button" id="send-password" type="submit" value="SEND PASSWORD" /><label for="send-password"></label></p>
        </form>
        <div class="popup grey-popup printer-popup"><span class="close"> </span>
            <p class="popup-title printer-popup-title">3D Printer</p>
            <div class="grey-popup-content">
                <div class="popup-images"><img src="img/3d_printer_popup.jpg" alt="3D printer" /><img src="img/3d_printer_popup.jpg" alt="3D printer" /><img src="img/3d_printer_popup.jpg" alt="3D printer" /><img src="img/3d_printer_popup.jpg" alt="3D printer" /></div>
                <div class="popup-text">
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia.
                    </p>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia.
                    </p>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia.
                    </p>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia.
                    </p>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia.
                    </p>
                </div>
            </div>
        </div>
        <div class="popup grey-popup service-popup sittig-popup"><span class="close"> </span>
            <div><img src="img/chair.svg" alt="Free sitting" /></div>
            <p class="service-popup-title">Free sitting</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, sint.</p>
        </div>
        <div class="popup grey-popup service-popup wifi-popup"><span class="close"> </span>
            <div><img src="img/wifi.svg" alt="Free wifi" /></div>
            <p class="service-popup-title">Free wifi</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, sint.</p>
        </div>
        <div class="popup grey-popup service-popup print-popup"><span class="close"> </span>
            <div><img src="img/printer.svg" alt="Printer" /></div>
            <p class="service-popup-title">Printer</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, sint.</p>
        </div>
        <div class="popup grey-popup service-popup microwave-popup"><span class="close"> </span>
            <div><img src="img/microwave.svg" alt="Microwave" /></div>
            <p class="service-popup-title">Microwave</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, sint.</p>
        </div>
        <div class="popup grey-popup basket-popup"><span class="close"> </span><b class="your-order">Your order</b>
            <div class="basket-products">
                <p class="basket-clear">Basket is clear</p>
            </div>
            <form class="order-registration">
                <p class="all-price">To pay <span class="sum-price">0$</span></p>
                <p class="mini-inputs input-line"><label for="pr-first-name"><input id="pr-first-name" type="text" name="pr-first-name" placeholder="First name" /></label><label for="pr-last-name"><input id="pr-last-name" type="text" name="pr-last-name" placeholder="Last name" /></label></p>
                <p class="input-line"> <label for="pr-email"><input id="pr-email" type="email" name="pr-email" placeholder="E-mail" /></label></p>
                <p class="input-line"><label for="pr-tel"><input id="pr-tel" type="tel" name="pr-tel" placeholder="Phone number" /></label></p>
                <p class="input-line"><label for="pr-city"><input id="pr-city" type="text" name="city" placeholder="City"></label></p>
                <label class="pr-submit" for="pr-submit"><input type="submit" value="Confirm the order" /></label>
            </form>
        </div>
    </div>
    <div class="bg-orange">
        <div class="wrapper">
            <section class="about-us">
                <div class="section-content">
                    <h2><?php the_field('about_us_title', '11') ?></h2>
                    <p class="subtitle"><?php the_field('about_us_text', '11') ?>
                    </p><a class="button transparent-button" href="contact.html">Read more</a>
                </div>
                <div class="slider-arrows">
                    <div class="arrow-left arrow-left-event"></div>
                    <div class="arrow-right arrow-right-event"></div>
                </div>
                <?php 
                        $posts = get_posts( array(
                            'numberposts' => 20,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'events',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );        
                ?>
                
                <div class="events-line">
                    <?php foreach( $posts as $post ){
                            setup_postdata($post); ?>
                    <figure class="event">
                        <div class="event-info">
                            <address><?php the_field('venue', $post->ID); ?></address><time><?php the_field('date_event', $post->ID); ?></time>
                        </div>
                        <?php $event_poster = get_field('event_poster', $post->ID); ?>
                        <img src="<?php echo $event_poster["url"]; ?>" alt="<?php the_field('name_of_event', $post->ID); ?>" />
                        <figcaption>
                            <h3><?php the_field('name_of_event', $post->ID); ?></h3>
                            <p class="event-subtitle"><?php the_field('info_about_event', $post->ID); ?></p><a class="button transparent-button event-button" href="event.html">Read more </a>
                        </figcaption>
                    </figure>
                    <?php wp_reset_postdata();
                            } ?>
                </div>
            </section>
                   
            <section class="video">
                <h2 class="title-mb"><?php the_field('video_section_title', '11') ?></h2>
                <div class="video-bg">
                    <div class="video-wrap">
                        <div class="video-block"><?php the_field('video_link', '11') ?></div>
                    </div>
                    <?php the_field('video_description', '11') ?>
                </div>
            </section>
            <section class="gallery">
                <h2 class="title-mb">PHOTO GALLERY </h2>
                <div class="slider-arrows">
                    <div class="arrow-left arrow-left-gallery"></div>
                    <div class="arrow-right arrow-right-gallery"></div>
                </div>
                <div class="gallery-line">
                    <div class="big-photo scrolled-picture"><img src="img/gallery_big.jpg" alt="Description" />
                        <div class="img-hover">
                            <div class="text">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                            </div><a class="more" href="#">more</a>
                        </div>
                    </div>
                    <div class="small-photo-wrap">
                        <div class="small-photo scrolled-picture"><img src="img/gallery_small.jpg" alt="Description" />
                            <div class="img-hover">
                                <div class="text">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                </div><a class="more" href="#">more</a>
                            </div>
                        </div>
                        <div class="small-photo scrolled-picture"><img src="img/gallery_small.jpg" alt="Description" />
                            <div class="img-hover">
                                <div class="text">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                </div><a class="more" href="#">more</a>
                            </div>
                        </div>
                    </div>
                    <div class="big-photo scrolled-picture"><img src="img/gallery_big.jpg" alt="Description" />
                        <div class="img-hover">
                            <div class="text">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                            </div><a class="more" href="#">more</a>
                        </div>
                    </div>
                    <div class="small-photo-wrap">
                        <div class="small-photo scrolled-picture"><img src="img/gallery_small.jpg" alt="Description" />
                            <div class="img-hover">
                                <div class="text">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                </div><a class="more" href="#">more</a>
                            </div>
                        </div>
                        <div class="small-photo scrolled-picture"><img src="img/gallery_small.jpg" alt="Description" />
                            <div class="img-hover">
                                <div class="text">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet</p>
                                </div><a class="more" href="#">more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-line"> <a class="button transparent-button" href="#">View more</a></div>
            </section>
            <div class="services-line">
                <?php $first_preference = get_field('first_preference', '11');?>
                <div class="service service-3d-printer"><img src="<?php echo $first_preference['image_for_the_first_preference']['url'] ?>" alt="<?php echo $first_preference['the_name_of_the_first_preference'] ?>" />
                    <p><?php echo $first_preference['the_name_of_the_first_preference'] ?></p>
                </div>
                <?php $second_preference = get_field('second_preference', '11');?>
                <div class="service service-3d-printer"><img src="<?php echo $second_preference['image_for_the_second_preference']['url'] ?>" alt="<?php echo $second_preference['the_name_of_the_second_preference'] ?>" />
                    <p><?php echo $second_preference['the_name_of_the_second_preference'] ?></p>
                </div>
                <?php $third_preference = get_field('third_preference', '11');?>
                <div class="service service-3d-printer"><img src="<?php echo $third_preference['image_for_the_third_preference']['url'] ?>" alt="<?php echo $third_preference['the_name_of_the_third_preference'] ?>" />
                    <p><?php echo $third_preference['the_name_of_the_third_preference'] ?></p>
                </div>
                <?php $fourth_preference = get_field('fourth_preference', '11');?>
                <div class="service service-3d-printer"><img src="<?php echo $fourth_preference['image_for_the_fourth_preference']['url'] ?>" alt="<?php echo $fourth_preference['the_name_of_the_fourth_preference'] ?>" />
                    <p><?php echo $fourth_preference['the_name_of_the_fourth_preference'] ?></p> 
                </div>
                <?php $fifth_preference = get_field('fifth_preference', '11');?>
                <div class="service service-3d-printer"><img src="<?php echo $fifth_preference['image_for_the_fifth_preference']['url'] ?>" alt="<?php echo $fifth_preference['the_name_of_the_fifth_preference'] ?>" />
                    <p><?php echo $fifth_preference['the_name_of_the_fifth_preference'] ?></p>  
                </div>
            </div>
        </div>
    </div>
    <div class="slider-arrows slider-arrows-sp">
        <div class="arrow-left arrow-left-sp"></div>
        <div class="arrow-right arrow-right-sp"></div>
    </div>
    <div class="sponsor-wrap">
        <div class="sponsor">
            <?php
            $partners = get_field('partners_logo', '11');
            if ($partners) : ?>
                <?php foreach ($partners as $partner) : ?>
                    <div class="sponsor-img-wrap"> <img src="<?php echo $partner['full_image_url'] ?>" alt="<?php echo $partner['title'] ?>" /></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="wrapper bg-black">
        <section class="shop">
            <h2>SHOP </h2>
            <div class="shop-info">
                <div class="shop-cabinet"><span class="balance">0$</span><button class="basket"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/basket.png" alt="Basket" /></button></div>
                <form class="search" action="index.php"><input id="shop-search" type="search" name="shop-search" placeholder="Search" /><label for="shop-search"></label><input class="search-submit" id="search-submit" type="submit" /><label for="search-submit"></label></form>
            </div>
            <div class="slider-arrows">
                <div class="arrow-left arrow-left-shop"></div>
                <div class="arrow-right arrow-right-shop"></div>
            </div>
            <div class="shop-products">
                <figure class="shop-product"> <a class="product-link" href="shop.html"></a>
                    <div class="product-img-wrap"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEBURDxIWFRAVFRUWFhcXFRcWGBYVFRUWGBUVFRUYHSkhGholHRgXITEjJSkrLi4vGB8zODMsNygtLisBCgoKDg0OGhAQGi0lHyUtLS0tKystLS0tKystLS8tLS0tLS0tLS0tLSstLS0tLSstLS0vLS0tKy0rKy0tLS0rK//AABEIAMUBAAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABAIDBQYHCAH/xABIEAABAwIDBAcEBwUFBwUAAAABAAIDBBEFITEGEkFRBxMiMmFxgRRSkaEjM0JicrHBQ2OCkrI0c6LC0SRTlNPh8PEVNURVk//EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EACkRAQEAAgEEAQMEAgMAAAAAAAABAhEDEiExQQQTUfAiYXHBMoEUQlL/2gAMAwEAAhEDEQA/AO4oiICIiAiIgIiICIsdieO0lML1NTFF+ORrT6Am5QZFUNlaTYOBPK4v8F582u29lrZ3t617KNriI4495u+0GwfIRbeLtbHIXGVxc4SLEaVvchfvDRw3WkHmCDcLpx+NbO9ZXk16eoUXD9nulqenh6qeB1QQ47j3Tbrtyws153DvEG/a1ta+lzkx00v/APrx/wASf+SqX4+e/C3XHXUXK4OmMHvULh5TB35sCydP0sUh79PO3yEbh/WCo+hyfZPXj93QUWrUfSFhchANQI3HhK18efIOcA0+hK2Omqo5G70T2vbza4OHxCpccp5iZZfC8iIqpEREBERAREQEREBERAREQEREBERARfHEAXOQC5htx0twwEwYfuyzWO9Kc4mZfZA+sdy0bmMyrY43Lwi3ToWL4vT0sZlqpmRR83uAueTRq4+AzXMNoemtgJZh8Bf+9muxvm2Idpw8y1cgxTFKiqlM1VK+WQ/acb2HJoGTR4AAKwwLpw4J7UubZMY23xSqv11VIGH7ER6lnlZli4fiJWDZDnfidTxPmV9japMbV14ccnhlclLIllhs5ViPrTSziO194wvAtzvbTx0UrZWuign6yZriNxzWuaGudE92TZWtdkS3PXmp2E1sVHI+eGepqapzXMD5rMjaH6uLN97pHDhvEDjZWy6pdYxE17rXWwK8ymUiKNSo41v0s9o8dMr7YVIaxXAxTpXaK6AEWIuDqOaiskkpX9ZE97GXF3Nc5ro7nKzxmW8COF+Sy24rVRCHNs4Xacj5Oy/VVuKZW04H0jVcVm1IE8fE5NkA/EBZ2XMeq6VgWP01Wzep33I7zTk9v4m/rovP2EAmMNdclhfGT/dusCTzIt8FPpppYJBLA8skbo5v5HmPA5Lm5Pi4ck3j2rXHluN7vQyLWNitrGVrCx4DKlg7beDh77PDmOHwJ2deZnhcLqumWWbgiIqpEREBERAREQEREBERAVqqqWRsdJI4NY0EucTYADiVdJXEOkvbL2qQwQO/2WM6j9q8faP3Rw+PK23DxXky16Vzy6Yo282+kqt6OEujpG8NHSW4v5Nyyb8fDlbnkgk6ucScuWmfqcvALJ10n0btczbw/wDOaxbj2W66Hhp2jpzXZnJjrHHwxx3e9GK/GFYYpEYTFNSIwpUYUeMKTGF04s6vxhSYwrEYUmMLWKL8YUmMKzGFJjClVcYFea1UMCvNChCndVEzcj8fgr4C+lqgYfDW2lnbyla/0kZ/rdZB7FAjFql2XfgY/PLON3H4rLOaq4rVEpaqSCVk0J3ZGG4P5g8wRcHzXc8BxVlVTsnj0cMxxa4d5p8QVw6Vi2boyxgw1Rp3H6OfTkJWjI+oBHmGrn+VxdePVPMa8Werp1tEReU6hERAREQEREBERARFTI8NBc42aASTyAzJQaH0sbS+zwCliNpZgd4jVsWh9XaeQcuGTyrN7W4y6qqpZ3aPd2RyYMmD4W9SVrMz16uGH08On37c1vVdlQ68ZGeRB8MwdfkoZPZbrlvDwGd8j6q8HXDhc934kEa+l1Zaexro7TzGZ+QWWV7rRUxSI1GYpEZV8UVLjUmNRIypUZXRipUqNSo1FjKkxlaRRKjUpiixqSxSqksV1oVmNX2qBUAqrIFUiGHqm2qITwJmjPHvDeF1kmd0eQ4W+XBQMZFgx/uTRu9D2SsjGMrcieN+Jt8rKk8relmRqhve5jmyMyexwe08nNNx8wsg8KHUNVx3rDaxs0Mcze7Ixrx5OANvmpK1HourN+gDCc4pHx+l99vydb0W3Lw+THpyuLuxu5sREVEiIiAiIgIiIC1bpLxHqcNlsbOltEP4+9/hDltK5d021nZp4RxMkh9A1rf6nLb4+PVySKZ3WNcfq3rGyuUuqcoDyu/kvdjjH2E9rUi4cMs9WkWsqIj2XC/I+djb9SkTrOab2sRnyz1X2PIuF7ZEedswPksKvBqvsVhqvMWmKKlRlSYyojCpEZW+NZ1NjKkxlQ4ypMZWqlToypMZUOMqVGVKEyNX2qNGVIaiF0KpUtVShDHY3HeKQcdy/G/YcD+ql0z95u9zDXfFoSqZvN3eBDmn1aRmoeCyXiZz3LePYJH6/NR7W9J7gok4UpxUeVTEN06Iajt1MXD6N4/xNd/lXSVyToul3cQc3g6B49Q9h/1XW15Xy5rlrs4r+kREXM0EREBERAREQFxLpkqd6vDeDIWD1Jc4/mF21efukybexKoPJzW/yxsH53XX8Ofrt/Zly+GiVBUN6mVCiPXRmpFoq+T9K7PUvztrvA8PG/zVgq/vfStNz9jO2ejb5cbLKrKGq6xWWq61XiKkMUhhUZivMK2xUqXGVKjKhRlSoitZVKnRlS4ioMRUyIqdqpsakMUWMqQ1ylC+1VqwHqoyIhVLpfkQdL6ELG4Z2S5nuyPHocx/34qeXXBHMHw+axoNpn6Z7j/iBf8AMomMi5yjyOR71HkkUjP9H827icP3hI34xuP6LtK4FsvUbmIUzv3zG/znc/zLvq8z5s/XL+zq4fAiIuNsIiICIiAiIgLzhtpJvV1Uf38o/leW/ovR68z7RuvVTnnPMfjI5d3wvOTHm9NdqAoT1PqAoL1rmpFoq653aYbnRmdtLZZc7WVoq5Ke5me6NRp2jplmFlVw6nzVbVTJ3j5nXI68Qqmq8QvMV5issV5q1ilX41LiUWNSmeOQva54Hx4rTaukuMq+yRY72ho8c8+RHCxVr28C1jmL6ePNOo0zrJv1PoNSqhVj5X/6efgsC2qccgLDh/4V5gedSrSWq2MwazW2thbO2fI8l8dWDPtAaWv87hQI6e+qlR0oWnTUJAr259vjlZpNhy8fNRpahheCN7d3A05WORupcdIFebRjko6TaB7VzPHkR2fXirTp7201PkBwJWVNEFYloByUHZjoavckZIPsPa8fwOB/RelmOBAI0IuPIrzTU0HJdX2J2+pjBFT1j+qnY1rN9+Ub90AB2/o0kWuHWz5ri+XhllJZ6b8WUjoKL41wIuDcHQr6vOdAiIgIiICIiAvMeMG80p5ySf1lenF5ixX62T8b/wCorv8Ag/8Ab/TDm9MNUBQHrJTRmxNjYWv4X0uocsBBIJaCCAe0Drx7N7geC25FYhuVc57mZPZHp2nZD/viqixnGQd62TXHLLtC9r+WuSVR7QFnCzWjMEEgcbHmsKvFUvfdnftHPnmc1XG1ZCnpJpYpKqKnDooXEyu3gbbxuN5hdcgA6gWyPIqB7Y+wAyte1su9e+YzOqvLEJDYDlfK7d4XyuPDmq7sAOZJsLcADxBvyWOL3c7eSp3eat1o0yMle0X3RYG2Qz05E5/NWJK1xN+J4nMqMGqoKOqi4CTqVJiao7FIjKvirU6JSo3rHserrZF0TJSxk45VJjmWIbKrzJlpKrpm45lKjmWBZOpMdSp0jTONcF9LVFwqnmnduQRue7jYZD8TjkPUrO+xUsH9rqN+QfsoLOIPJ0h7I8llllJde/smY1hpIQq2bMVMv1cDyOZG6Pi6wWZbtE1mVLDHF94jrJP53f6KHU4jNKbPle6/DeNj5NGSp+u+tfz+f2ntEvAqHF6EjqpYmxcYZpmlnoL3Yfwkeq6RguM9c36VrY5eIbKyRpP3XNN7eYC5bDs1Uyd2B1vvAM/qsqajYabV74GH70liPgCuXl48Mr3ym/z922GVnp2pFy/Z2pxKjIZ7TTVMH+7dU9to/dvcMvI3Hkuj4fWiVgcAWni11rj1aS0+YJC488Om+dtpltJREWawiIgLz5j2yGLiaUxUD3MLn2d1kLg4FxO8AH3F/QjReg0WnHy5Yb0rcZfLy5U7J4wT26Ko9Iy7TxbdQJdma8d6hqv+HlP+VeskV/r5Xyjojx25m6SCC1wJBFi1zXA5g8QQfhZbxjtsSw5tc3OspQI6kDV0eol9M3er+SzvTdsh1Un/AKjA36KQhs4H2ZDk2Xydk0+NveWg7JY+6iqRLbehcNyZmu9GdcuJGo9RxK6JlMpuKWaqrY/aAUdSHvG9TyDq522uHRu1NuJbe/lccV82xwP2Op3GHep5B1kD73DozoL8S29vgeKr222fFJMHwHeo5x1lO8ZjdOZZf7txbwI8VlNl52YhSHCqhwEzLyUUjjo4Akwk8iL5cr+61Rs00zeX26+TwPje6ORpbIxxa5p1a4agr41TKhWFUFSF9urIXGlXWuUcOX3fVpUaShIqhKoe+m+rdZpOEyrbOscZVteF7K7sQqsUl9kpD3AReon8IYjn/ER42IzU/V0dO0LDYZp5BFTxukkOjWi58zyHibBbQaCiov8A3CXr6kf/ABYHdlp5TzjIfhbn5hYLEtsyIzTYZF7HSnvbpvPNwvNNr/CDlpchYzZ/Bqutk6ukic8jvHRjL8XvOTfLU8AVH1bfN1Pz8/s6WzYjtdPM3qmbsFONIYRuMt94jNx53y8FVgOEVVUf9niLm8XnssHm85egufBVGLCcOyqHjEa0fsozamjdnlI/PfIORGf4QsZjO3FZVDce8RwDIQxDcjA4AgZu9TbwCvjy9tYTX7387ouP3bj7Fh9L/a6kzyjWKDug8nSf9WnwX07Z7nZo4I4G87b7z5uP63XNm1oHkqZMYA7oJ+QVrjhf87v8+yO/pvlRj88v1kzz4bxA/lGSiOmatBnxmT3g3y1WOnxAnvFzvMk/mqZc/Hj4T9K3y6DU1UI70jB5uChxYs2J29BUmN3Nkhb8d05rQ/bDwb81U2qPJZf8rG9lpxad92Q6V4yRDiDm30E7bWP96wafiGXgNV1KGVr2hzHBzXC4IIIIOhBGoXjdj7rZ9ldta/DiOok3ob3ML+1Gee7xYfFtvEFYZ8WOXfFpLry9SItb2I2yp8ThL4uxKywlicbuYToQftMOdnfkbhbIuWyy6rQREUAiIgsV1JHNG+KZofG9pa5p0LXCxC8w7c7KyYdVugdd0Truheftx30J99uh9DxC9SrX9ttl4sRpXQSWbIO1FJa5jkAyPi06EcQfJacWfTe/hXKbcK2Pr4qiE4TWutFIb00h1hnN7NB5EnIeJH2stWxOgno6gxSXjnicCCDxBuyRjuRyIKuYrh0tPM+nqG7k0bt1w/JzTxaRYg8ityopWYzTilncGYpC09RK7ITsGZjeefP+YX7QXXZ7Zo2KxDFqU1sDQMRgaBVRNH10YyE8beJA4eBGdm30VrlkaOqqqCq32XiqYXEOa4fFjx9ppHxFiDoVseM4RFiETsQwxlpBnV0gzdG46yxAd5hzOX53Ar4Gm7ybythy+3U7NK95fd5Wwqgp2hWCpuD4VUVUwgpY3SSu4DgOLnHRrRzKy2yuyMlW11RK8U9BHnJUPybYatiB77r5cgeZyM3GdrY44TRYQx1PRn6yU/X1J03pH6tafdHDLIdlN+onX3SS+gwnJnV12KDV3epaVw90ftZAePC32TkdTxLEairm62okfNO8gAnMm5yYxo0F9GtHopOzeztTXSdVSsBDRd73Hdjib70j+HlmTwC2V+N0WFgx4Vaorrbr657QWMJ1FLGbj+LMeLuEeL96eVuk2Qp6SNtRjkhiDheOjjN6iX8dj9G31HiWnJQcf23nmj9mpWNo6EXAgh7O8OcsgsXk8RkDfO+q1usqpJZHSzPc+R5u57iXOcfElWCVPT9zf2VBXaWGSR4jiY58jsmsY0ucfJozK33Yzonq6u0tXempznYj6Z4+6w9weLs/urtmzey9HQM3KSEMv3nntSP/ABvOZ8tBwAVM+aYpmDjuzfQ5Wz2fWyCmjOe4LSSnwIB3WfF3ktxxTodoDROhpt5tV3mTPeXEuA7rwMgw6HdA4HgulIue8uVadMeOMSwyWCV8M7CyVh3XNOoP6g6gjIg3UM069R9IGwcGJR72UdWwWjltqNdyQDvMv6i9xxB89Yxg09JM6nqozHK3gdHDg5jtHNPMfI5LbCY5qXca91BVbIVkuqXzqlb6KOpHiYpbBkqQxXGhbYY6VtT9l8ckw+sjqoyd1ptIPfiJHWMPpmPEA8F6sY8EAg3BAIPMHRePKs5HyK9b4HG5tLA1/fbDEHeYY0H5rm+RJ2rTCpyIi5lxERAREQaR0m7CtxGHrIQG1sTT1btBI3XqnnlyPAnkSvOz2yRSWO9HNG7PVr2PafiHAr2Aue9JnR22vBqaWzK1ozvk2cAZNeeDxoHehytbfi5ddqpljtz2nqabG42w1TmwYsxtoprWZUAfZcBx+7qMy3K7VpssdbhlXnvQVMehGjm8wdHsPw55hQqulkikcyRro5WOs5rgWuY4c+R438itzwrbaGeEUmNxGeEdycfXRHS5tmfxDPmHLazSizJjuE12eI076WpOtRSi7Xn3pIjfXycfFUt2Hppc6PF6R4OjZSYX28QST8gqsT6O5HM6/Cpm1tMfcc0St8HNyDj5WP3VplXTPiO7NG6N3KRpYfg4BV/hLd2dG5aL1GJ0MTeYl3/kd381ebHs9Q9pz5MSqBo0DcgB5k6OHq/yXP4It87sbS53Jo3j8BmtqwXo8xSpzFOYY9TJOeqaBz3T2z6NT+aIu1O1tTXub1xayCP6qGMbscY0FhxdbK58bWBsp+zmyIfD7biMhpcOGjyPpJzwZAw63963kDmRlGxYLhebnDE69ujRYU0bhxJzDiPNxy0atW2i2hqq6Xrat+8RkxoFo4x7sbL5eeZPElWm72iKyW0e1xmiFJRx+y4c3SFp7Un36h+r3HlcjnvarWF9GZAAuSQABmSToAOJXTNiuiOoqLTYjvQQZERj654+9/ux59rwGqtbjhDVrRtnNnKqvl6qkj3iO845MjB4yP4eWZPAFd62H6NKSgtLJaerGfWOHZYf3TPs/iNz4jRbZhGFQUsQhpo2xxN0a0ceJJ1JPM5lTVy58ty7Tw0mOhERZLCIiAsRtLs3S18PU1Ue8NWuGT43e8x3A/I8QVl0SXQ867XdG1dREviaamm1D2Nu9o/eRjP1bceWi0tkgOhXr5a9j2xGG1hLqimZ1h1kZeOT1eyxPrddOHyLP8mdw+zzIvhK7ZP0J0ZN2VVS0cj1TreAO4FkMJ6H8MicHS9bUEcJXgM/kjDQR4G61vyMFfp1zXou2Mkr6ls8rSKKF4c4kZSvabiJvMXtvHllqV6LVump2RsbHG1rGNFmtaA1rQNAAMgFcXJyZ3O7ayaERFRIiIgIiICIiDVdtthKTEm3kHV1IFmTNA3gODXj7bPA8zYhcE2s2KrcPcfaI7xX7MzLujPK5+wfB1vC69SqmRgcC1wBaRYgi4I5ELXDluPb0rcdvH9HVSwv34JHxv8Aeje5h+LSLhbNTdJWLMG66dsg/exRu+YAJ9V2DH+ifDKgl0TXU0h4wkBl/wC6ILR/CAtIr+hGraT1FVDIOG+18R/w762meFV6bGtydKGLEWZJFH4sgYD/AIrrXsWx+tqv7VUyyj3XPO5/+Ys35Lf6foUxA/WT07PIyP8A8gWcwvoPjBBqqxzx7sUYj9C5xd8gE6sJ7RquJDkNdB/oFvGy3RhiNZZz2ezQH7crSHEfchycfXdHiu5bPbFYdRWNNTsEg/aOu+T+d9yPIWC2BUy5/wDytMGq7I7A0OHgOiZ1k/GaSzn+O7wYPwgeN1tSIsLbe9XERFAIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIP//Z" alt="NAME OF PRODUCT" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name">NAME OF PRODUCT1</h4><span class="price">1$ </span>
                        </div>
                        <p class="product-card-description">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis </p>
                    </figcaption>
                </figure>
                <figure class="shop-product"> <a class="product-link" href="shop.html"></a>
                    <div class="product-img-wrap"><img src="img/sweatshirt.jpg" alt="NAME OF PRODUCT" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name">NAME OF PRODUCT2</h4><span class="price">2$ </span>
                        </div>
                        <p class="product-card-description">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                    </figcaption>
                </figure>
                <figure class="shop-product"> <a class="product-link" href="shop.html"></a>
                    <div class="product-img-wrap"><img src="img/shop_product.jpg" alt="NAME OF PRODUCT" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name">NAME OF PRODUCT3</h4><span class="price">3$ </span>
                        </div>
                        <p class="product-card-description">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                    </figcaption>
                </figure>
                <figure class="shop-product"> <a class="product-link" href="shop.html"></a>
                    <div class="product-img-wrap"><img src="img/shop_product.jpg" alt="NAME OF PRODUCT" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name">NAME OF PRODUCT4</h4><span class="price">4$ </span>
                        </div>
                        <p class="product-card-description">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                    </figcaption>
                </figure>
                <figure class="shop-product"> <a class="product-link" href="shop.html"></a>
                    <div class="product-img-wrap"><img src="img/shop_product.jpg" alt="NAME OF PRODUCT" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name">NAME OF PRODUCT5</h4><span class="price">5$ </span>
                        </div>
                        <p class="product-card-description">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                    </figcaption>
                </figure>
                <figure class="shop-product"> <a class="product-link" href="shop.html"></a>
                    <div class="product-img-wrap"><img src="img/shop_product.jpg" alt="NAME OF PRODUCT" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name">NAME OF PRODUCT6</h4><span class="price">6$ </span>
                        </div>
                        <p class="product-card-description">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                    </figcaption>
                </figure>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>