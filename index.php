<?php
get_header();
$socials = allvipi_get_fields('socials');

$useragent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))
    $mobile = true;
else
    $mobile = false;
?>

<main class="main-wrapper jquery-background-video-wrapper">
    <video class="bg-video jquery-background-video mobile-hide" loop autoplay muted playsinline poster="<?= get_template_directory_uri() ?>/assets/images/aluminium/main-min.jpg">
        <source class=".video" src="<?= get_template_directory_uri() ?>/assets/video/windows-site.mp4" type="video/mp4" loop="loop" />
    </video>

    <video class="bg-video_wood jquery-background-video mobile-hide" loop autoplay muted playsinline poster="<?= get_template_directory_uri() ?>/assets/images/wood/main-min.png">
        <source class=".video" src="<?= get_template_directory_uri() ?>/assets/video/wood.mov" loop="loop" />
    </video>

    <div class="mobile-background">
        <div class="aluminium"></div>
        <div class="wood"></div>
    </div>

    <section class="page-wrapper">
        <div class="center-line"></div>
        <nav class="container navigation">
            <div class="logo"></div>
            <div class="contacts-wrapper">
                <div class="contacts" id="contacts">
                    <div class="phone">
                        <div class="icon"></div>
                    </div>
                </div>

                <div class="contacts contacts-addon">
                    <div class="phone inner">
                        <div class="icon"></div>
                        <a href="tel:+7 777 384 01 25">+7 777 384 01 25</a>
                    </div>
                    <div class="phone inner">
                        <div class="icon"></div>
                        <a href="tel:+7 771 718 46 75">+7 771 718 46 75</a>
                    </div>

                    <div class="socials">
                        <?php foreach ($socials as $social) : ?>
                            <div onclick="openSocial('<?= $social['link'] ?>')" class="icon" style="background-image: url('<?= $social['icon'] ?>')"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </nav>
        <section class="container main-container">
            <aside class="right">
                <div class="right-content">
                    <div class="header">АЛЮМИНИЕВЫЕ ОКНА</div>
                    <div class="caption">
                        Алюминиевые окна <br />
                        подходят для остекления проемов<br />
                        различной ширины и конфигурации
                    </div>
                    <div class="line"></div>
                    <button class="main-button" id="aluminium">Перейти на сайт</button>
                </div>
            </aside>
            <aside class="left">
                <div class="left-content">
                    <div class="header">ДЕРЕВЯННЫЕ ОКНА</div>
                    <div class="caption">
                        Деревянные окна <br />
                        подходят для остекления проемов<br />
                        различной ширины и конфигурации
                    </div>
                    <div class="line"></div>
                    <button class="main-button" id="wood">Перейти на сайт</button>
                </div>
            </aside>
        </section>
    </section>
</main>
<?php get_footer(); ?>