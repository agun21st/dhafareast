@extends('layout.default')
@section('meta')
    <title>
        Best Apparel Manufacturer in Bangladesh | Reliable Garments Factory
    </title>
    <meta name="description" content="Leading custom clothing manufacturers, suppliers, exporters in Bangladesh sourcing apparels & fashion accessories for our buyers with a sales-network in USA, Australia, Canada, France, Germany, Italy. Call +88028416120">
    <meta name="keywords" content="Bangladesh Clothing Manufacturer, Underwear Manufacturing, Sportswear Manufacturing, Hooded Sweatshirt Manufacturer, workwear manufacturers, thermal winter nightwear supplier, Sports T-shirts Supplier, Garment Factorie in Bangladesh, garment sourcing, Apparel sourcing, clothing sourcing, Bangladesh T-shirts, Made in Bangladesh,  Activewear Manufacturer, Workwear Manufacturer, knitwear, womenswear, organic clothing, sourcing, organic cotton, apparel & fashion, women's apparel">
@stop
@section('all-stories')
    <section class="banner-section" style="background-image: url({{ Voyager::image(setting('admin.bg_image'))}});" alt="Dhaka Fareast LTD">
        <div class="overley"></div>
        <div class="container">
            <div class="row text-justify">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="inner-text-wrapper wow fadeInUp" data-wow-duration="2s">
                        <h1 class="tittle">DHAKA FAREAST LTD.</h1>
                        {{-- <span class="subtitle">100% Export Knite Industry.</span> --}}
                        <span class="subtitle">Your Ultimate Clothing Manufacturer</span>
                        <p style="color: #fff !important">Maximum effort, on-time delivery, best quality products we promise you all!</p>
                        <div class="btn-wrapper">
                            <a href="/about" class="btn boxed-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="widget-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="widget-wrap wow fadeInLeft delay-.2s" data-wow-duration="3s">
                        <a href="/sewing" class="widget_link">
                            <div class="single-service-item">
                                <div class="image-box">
                                    <img class="img-responsive" style="height: 230px;" src="images/garments-img2.webp" alt="Garments">
                                </div>
                                <div class="service-item-content">
                                    <a href="/sewing"><h3 class="tittle">SEWING</h3></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="widget-wrap wow fadeInDown delay-.2s" data-wow-duration="4s">
                    <a href="/cutting" class="widget_link">
                        <div class="single-service-item">
                            <div class="image-box">
                                <img class="img-responsive" style="height: 230px;" src="images/Naimul_1-629x420.webp" alt="Garments 2">
                            </div>
                            <div class="service-item-content">
                                <a href="/cutting"><h3 class="tittle">CUTTING</h3></a>
                            </div>
                        </div>
                    </a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="widget-wrap wow fadeInRight delay-.2s" data-wow-duration="5s">
                    <a href="/finishing" class="widget_link">
                        <div class="single-service-item">
                            <div class="image-box">
                                <img class="img-responsive" style="height: 230px;" src="images/16091594158_7abf05498e_k.webp" alt="Finishing">
                            </div>
                            <div class="service-item-content">
                                <a href="/finishing"><h3 class="tittle">FINISHING</h3></a>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-company-section">
        <div class="container">
            <div class="row vertical_center">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="">
                        <div class="swing_header">
                            <h2 class="title">Proudly "Made in Bangladesh"</h2>
                        </div>
                        <br>
                        <p class="fancy_p" style="line-height: 26px">
                        Looking for a reliable garment factory for your clothing business? Introducing you to Dhaka
                        Fareast LTD, the best apparel manufacturer in Bangladesh. Here, we provide you OEM
                        manufactured workwear, sportswear, activewear. You can rely on us for quality garments in on-
                        time delivery even for bulk orders. We craft plain and fashion t-shirts, tank tops/singlets, polo
                        shirt, hoodies, sweat-shirt, brief, boxers, panties, undershirts, jacket, fleece vest, knitwear,
                        jackets, boluses, casual shirts, jeans, shorts, athletic wear, team-uniforms, workwear, uniforms,
                        and many more.
                        </p>
                        <p class="fancy_p" style="line-height: 26px">
                        Good fabric plays a hand-to-hand role in fashion and comfort. In Dhaka Fareast LTD, we care
                        for your wearable clothes. Excellent texture, great material, and proper preparation are our
                        topmost priority in crafting clothes. Our specialized team always maintains proper procedures for
                        high-quality textiles. From knitting to shipping each product, our expert team assures perfection.
                        To assure flawless delivery in each item, we offer three steps quality check. Sewing to the
                        packaging you will experience a professional touch in our every work. Yarn and threads bring
                        life to any fabric. Understanding this fact, we serve different types of knit and woven fabrics. So,
                        if you want high-grade canvas, poplin, chiffon, linen, polyester, and anything, you are at the right
                        place!
                        </p>
                        <p class="fancy_p" style="line-height: 26px">
                        It is our pride to have thousands of satisfied customers. We have many proven works with our
                        valuable customers worldwide. Since 2011, we have been dominating as a producer, supplier,
                        and exporter in the garment industry. Currently, we have a huge sales network in the United
                        States, UAE, Canada, Italy, France, Germany, Spain, Australia, Malaysia, Saudi Arabia, Qatar,
                        Kuwait, and many other countries.
                        A good work environment brings out the highest productivity. We maintain a healthy and
                        cooperative environment in our workplace. Gladly, we have a great staff to provide top-notch
                        service in every step. Fair wage in the safest ambiance leads our dedicated employees to put in
                        their maximum effort.
                        </p>
                        <p class="fancy_p" style="line-height: 26px">
                        Become an insider in Dhaka Fareast to get 100% export quality garment products. Leave your
                        clothing hassles on us!
                        </p>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-self-center">
                    <div class="">
                        <img src="images/Certificate image.png" class="img-responsive" alt="BKMEA Certificate">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section">
        <div class="container">
            <section class="" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="widget-wrap wow fadeInLeft delay-.2s" data-wow-duration="3s">
                            <a href="/knitwear-manufacturer-and-exporter" class="widget_link">
                                <div class="single-service-item">
                                    <div class="image-box">
                                        <img class="img-responsive" style="height: 300px;" src="images/garments-img2.jpg" alt="Sweeing">
                                    </div>
                                    <div class="service-item-content">
                                        <a href="/knitwear-manufacturer-and-exporter"><h3 class="tittle">Knitwear Manufacturer and Exporter</h3></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="widget-wrap wow fadeInRight delay-.2s" data-wow-duration="5s">
                            <a href="/woven-garment-manufacturer-and-exporter" class="widget_link">
                                <div class="single-service-item">
                                    <div class="image-box">
                                        <img class="img-responsive" style="height: 300px;" src="images/16091594158_7abf05498e_k.jpg" alt="Finishing">
                                    </div>
                                    <div class="service-item-content">
                                        <a href="/woven-garment-manufacturer-and-exporter"><h3 class="tittle">Woven Garment Manufacturer and Exporter</h3></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="">
                        <div class="swing_header">
                            <h2 class="title">Knitwear Manufacturer and Supplier</h2>
                        </div>
                        <p class="fancy_p">
                            High-quality cotton and viscose are provided to make knitwear garments. We make soft, smooth,
                            and stretchable knitwear products. Customized design and longtime color guarantee are our
                            knitwear specialty. You can get a premium quality t-shirt, polo shirt, tank top, hoodies, any kinds
                            of lycra tops, nightwear, jogging suits, tracksuits, panties, boxers, sportswear, and any type of
                            knitwear. We sew-up premium quality team-wear or promotional clothing.
                        </p>
                        <button class="btn btn-success" name="button">Read More</button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="">
                        <div class="swing_header">
                            <h2 class="title">Woven Garment Manufacturer</h2>
                        </div>
                        <p class="fancy_p">
                            More durable and non-starchy woven garments are another category of our product. With the
                            best quality yarn, we make easy-to-make and easy-to-cut woven items. Choose us for any woven
                            item, like- denim jeans, twill, CVC pants, trousers, shorts, Bermuda, casual shirt, rainwear,
                            snowsuit, seasons jacket, casual jackets, uniforms, beachwear, and many more. Also, we make a
                            bulk amount of uniforms for hospitality, healthcare, school, or corporate staff on demand. The
                            plane, till or satin, we provide any fabric on demand.
                        </p>
                        <button class="btn btn-success" name="button">Read More</button>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div>
                        <h4 class="title text-justify" style="line-height: 26px">
                            Dhaka Fareast LTD ensure's 100% quality at every stage in the clothing manufacturing process. We maintains good communication with our clients,
                            factory, and vendors to maintain maximum client satisfaction. Inline quality inspection at each step of the sewing process
                            ensures the final product shipped exceeds client expectations. We do have very good source of Cotton and Stretch items of Twill, Cotton / Polyester / Spandex Twill, Satin, Corduroy, Yarn Dyed,
                            Canvas, Poplin, Woven Denim, Knit Denim, Chiffon, Ponti-roma, Bengaline, Linen, Linen Cotton & Linen Viscose, Tencel Denim, Tencel
                            Twill, Rib-Stop, Taffeta, Micro Fiber Twill & Plain Weave, Lace, Coral Fleece, Fleece, Sherpa, as well as Polyester items, special
                            Knit items & Organic Cotton items
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-products">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="content-header">
                        <h3 class="sub_tittle"><div class="btm-border"></div>Our Products</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-details" style="padding-top: 0;" id="home-product">
        <div class="container">
            <div class="products-short-info">
                {{-- <p class="showing-items">Showing items</p> --}}
                <form class="ordering-class" action="{{ route('search_by_type').'#home-product' }}" method="get">
                    {{-- @csrf --}}
                    <select onchange="this.form.submit()" name="product_type" class="orderby">
                        <option @if ($type=="All") selected @endif value="All" >All Products</option>
                        @php
                            $sub_menue =App\Product::distinct()
                                                    ->get(['product_type']);
                        @endphp
                        @foreach ($sub_menue as $sub_menue)
                            <option @if ($type==$sub_menue->product_type) selected @endif value="{{$sub_menue->product_type}}">{{$sub_menue->product_type}}</option>
                        @endforeach

                    </select>
                </form>
            </div>
            <div class="products-detail-list">
                <div class="row">
                @foreach ($products as $product)
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                        <div class="single-product-details">
                            <a href="{{ route('product_details',$product->slug) }}">
                                <div class="product-image">
                                    <div class="overley"></div>
                                    <a href="{{ route('product_details',$product->slug) }}" class="product-img ">
                                        <img src="{{ Voyager::image( $product->product_img ) }}" class="img-responsive" alt="{{$product->product_title}}">
                                    </a>
                                    <a href="{{ route('product_details',$product->slug) }}" class="btn img-custom-btn">Read More</a>
                                </div>
                            </a>
                            <div class="product-cont">
                                <a href="{{ route('product_details',$product->slug) }}">
                                    <h3 class="title text-center">{{$product->product_title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
            <div class="">
                {{$products->fragment('home-product')->links()}}
            </div>
        </div>
    </section>

    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="content-header">
                        <h3 class="sub_tittle"><div class="btm-border"></div>Our Valuable Clients</h3>
                    </div>
                </div>
            </div>
            <div class="row all-cleints">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/1.png" alt="JULA" class="img-responsive" style="max-width: 250px;height: 100px;">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/2.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="swedol">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/3.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="GROLLS">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/4.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="Gesto">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/5.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="SWEET">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/6.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="EPIC SPORTS">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/7.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="BLUEWEAR">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/8.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="Biornklader">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/9.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="SCHEIBLER">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/10.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="Pinewood">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/11.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="ARRAK">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/12.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="GROLLS">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/13.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="GUINNESS">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/14.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="L.BRADOR">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/15.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="PROMUS">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/16.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="PROONE">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/17.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="STAPLES">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="clients-image" style="max-width: 250px;height: 100px; background: white;">
                        <img src="images/client/18.png" class="img-responsive"  style="max-width: 250px;height: 100px;" alt="TEAM SPORTIA">
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop
@section('scripts')

@stop
