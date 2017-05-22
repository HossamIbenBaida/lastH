@extends('layouts.app') @section('content')

    <main id="main" class="tg-page-wrapper tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="main-page-wrapper tg-haslayout">
                    <div class="fw-page-builder-content">
                        <section class="tg-main-section haslayout ">
                            <div class="builder-items">
                                <div class="col-xs-12 col-md-12 builder-column ">

                                    <div class="section-current-width"></div>
                                    <section class="tg-main-section haslayout default" ,style="background-color:#ecf0f1 padding-top:0px;padding-bottom:0px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;">
                                        <div class="builder-items" >
                                            <div class="col-xs-12  col-md-4 builder-column ">
                                                <div class="sc-services">

                                                    <div class="tg-search-categories">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12 tg-expectwidth" >
                                                                <div class="tg-search-category">
                                                                    <div class="tg-displaytable">

                                                                        <div class="tg-displaytablecell">
                                                                            <div class="tg-box">
                                                                                <a href="#"><h3>CONTACT INFO</h3></a>
                                                                                <img src="//themographics.com/wordpress/docdirect/wp-content/uploads/2016/03/contact-us.png" alt="CONTACT INFO"> <span class="service-list">123 Eccles Old Road, Uk, M6 7AF</span><span class="service-list">+44 235 856843</span>
                                                                                <span
                                                                                        class="service-list">+44 235 856843</span><span class="service-list">admin@company.com</span>
                                                                                <a href="#"><span class="tg-show"><em class="icon-add"></em></span></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xs-12 col-md-8 builder-column ">
                                                <div class="sc-contact-form">
                                                    <div class="tg-refinesearcharea contact_wrap">
                                                        <div class="tg-heading-border tg-small">
                                                            <h2>refine search</h2>
                                                        </div>

                                                        <form class="form-refinesearch tg-haslayout contact_form">
                                                            <div class="message_contact theme-notification"></div>
                                                            <fieldset>
                                                                <div class="row form-data" data-success="Message Sent." data-error="Message Fail." data-email="">
                                                                    <input id="security" name="security" value="48bcdacdd2" type="hidden"><input name="_wp_http_referer" value="/wordpress/directory/contact-us/" type="hidden">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="subject" placeholder="Subject" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="username" placeholder="Name" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="useremail" placeholder="Email" type="email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="phone" placeholder="Phone" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="description" placeholder="Message"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button type="submit" class="tg-btn contact_now">Send</button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="map"></div>
                                            <script>
                                                function initMap() {
                                                    var uluru = {lat: 30.3304801, lng: -9.5288253};
                                                    var map = new google.maps.Map(document.getElementById('map'), {
                                                        zoom: 4,
                                                        center: uluru
                                                    });
                                                    var marker = new google.maps.Marker({
                                                        position: uluru,
                                                        map: map
                                                    });
                                                }
                                            </script>
                                            <script async defer
                                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs5RbB4RUil5D_hpcm3_PojqxERC9K_SY&callback=initMap">
                                            </script>
                                        </div>
                                    </section>
                                </div>

                               </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
