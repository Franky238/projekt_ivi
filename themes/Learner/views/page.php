<ion:partial view="page_header" />
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="about details row">
            <ion:article>
                <article>
                    <h2><ion:title /></h2>
                    <ion:subtitle tag="p" class="text-muted" />
                        <!-- intro image -->
                        <ion:medias type="picture" limit="1">
                            <div class="intro-img">
                                <img src="<ion:media:src />" alt="<ion:media:alt />" class="img-responsive"/>
                            </div>
                        </ion:medias >

                    <div class="article-para"><ion:content /></div>
                </article>
                <div class="clearfix">
                    <ion:medias type="picture">

                            <div class="gallery-img col-xs-12 col-lg-4">
                                <img src="<ion:media:src />" alt="<ion:media:alt />" class="img-responsive"/>
                            </div>
                    </ion:medias >
                </div>
            </ion:article>


<ion:partial view="footer" />
