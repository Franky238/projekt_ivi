<ion:partial view="header" />


<div class="slider_bg"><!-- start slider -->
    <div class="container">
        <div id="da-slider" class="da-slider text-center">
            <ion:page:articles type="slider">
                <ion:article>
                    <div class="da-slide">
                        <h2><ion:title /></h2>
                        <ion:content />
                        <h3 class="da-link"><a href="<ion:url />" class="fa-btn btn-1 btn-1e">Pozrite viac &raquo;</a></h3>
                    </div>
                </ion:article>
            </ion:page:articles>
        </div>
    </div>
</div><!-- end slider -->
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main row">
            <ion:page:articles type="aktivity" limit="3">
                    <div class="col-md-4 images_1_of_4 text-center">
                        <span class="bg"><i class="fa fa-smile-o"></i></span>
                        <h4><a href="<ion:article:url />"><ion:article:title /></a></h4>
                        <div class="para">
                            <ion:article:content words="20"/>
                        </div>
                        <a href="<ion:article:url />" class="fa-btn btn-1 btn-1e">Pozrite viac &raquo;</a>
                    </div>
            </ion:page:articles>

        </div>
    </div>
</div><!-- end main -->

<ion:partial view="footer" />

