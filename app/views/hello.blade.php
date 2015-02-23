@extends('layouts.template')

@section('css')
<style>
 .developers, .img-circle {
 	height: 180px;
 	width: 180px;
 	margin-top: 35px;
 	margin-bottom: 20px;
 }

 .carousel2 {
 	min-height: 100%;
 	min-width: 100%;
 }
</style>
@stop

@section('content')

    <!-- Carousel Begins -->
    <div class="rev-slider-full">
        <div class="rev-slider-banner-full  rev-slider-full">
            <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                    <img src="/img/yardsale-headvisible.png"  alt="rev-full1" data-fullwidthcentering="on">

                    <div class="carousel-text tp-caption slider-text-title sft str"
                        data-x="20"
                        data-y="150"
                        data-speed="300"
                        data-start="800"
                        data-easing="easeOutCubic" data-end="6000" data-endspeed="500">Promote Yourself</div>

                    <div class="carousel-text tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
                        Your garage sale is serious business - don't let advertising be an afterthought.<br> 
                        It's easy to get started. Create a sale listing 
                        today and give your event a boost!<br/>
                    </div>

                    <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
                        <a href="{{{ action('SalesController@create') }}}" class="button btn-flat">More Info</a>
                    </div>                  
                </li>

                <li data-transition="slideleft" data-slotamount="14">
                    <img id="carousel2" src="/img/garale-sale2-resize.jpg" alt="Rev Full">

                    <div class="carousel-text tp-caption slider-text-title sft str"
                        data-x="20"
                        data-y="150"
                        data-speed="300"
                        data-start="800"
                        data-easing="easeOutCubic" data-end="6000" data-endspeed="500">Something For Everyone</div>

                    <div class="carousel-text tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">

                        Browse local sales or search by item category
                        for your next big-ticket<br /> 
                        find. Connect with sellers and see their
                        hand-picked treasures before<br />
                        you arrive
                    </div>

                    <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
                        <a href="{{{ action('SalesController@index') }}}" class="button btn-flat">More Info</a>
                    </div>                
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div></div><!--.top wrapper end -->

	<div class="loading-container">
	<div class="spinner">
	    <div class="double-bounce1"></div>
	    <div class="double-bounce2"></div>
	</div>
	</div>

	<div class="content-wrapper hide-until-loading">

	<!-- Spinning Icons Container-->
	<div class="section-content top-body">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 col-md-offset text-center">
	                <h2 class="h2-section-title">My Garage Sale</h2>
	            <div class="row">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <h4><em>"All business success rests on something labeled a sale, which at least momentarily weds company and customer."</em></h4>
	                    <footer>- Tom Peters</footer>
	                </div>
	            </div>
	            <hr>
	            <div class="col-md-4">
	                <h4>Avid treasure hunters, artists, thrift store owners, hobbyists and bargain shoppers alike can browse garage sales.  No need to login. Page through local listings and find what piques your interest.</h4>
	            </div>

	            <div class="col-md-4">
	                <h4>Looking to declutter and earn a little extra cash? List your garage sale event and know the <strong>advertising</strong> is being handled by us. Hosting a bazaar? It's easy to join forces and centralize your efforts with a quick sale listing!</h4>
	            </div>

	            <div class="col-md-4">
	                <h4>Stressing over details? There's a better way. Getting a garage sale permit, maximizing your sales strategy, and handling clean-up can be a breeze. Use our helpful tips and resources to plan a stress-free garage sale.</h4>
	            </div>

	            <hr>
	        </div>

	        <div class="row">




				<div class="col-md-4 col-sm-4"> 
	        		<div class="content-box content-style2 anim-opacity animated"
                        data-animtype="fadeIn"
                        data-animrepeat="0"
                        data-animspeed="1s"
                        data-animdelay="0.2s"
                        >
                        <h4 class="h4-body-title">
                            <a href="{{{ action('SalesController@index') }}}"><i class="fa fa-search"></i></a>
                            Browse
                        </h4>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4"> 
	        		<div class="content-box content-style2 anim-opacity animated"
                        data-animtype="fadeIn"
                        data-animrepeat="0"
                        data-animspeed="1s"
                        data-animdelay="0.2s"
                        >
                        <h4 class="h4-body-title">
                            <a href="{{{ action('SalesController@create') }}}"><i class="fa fa-tags"></i></a>
                            Create Sale
                        </h4>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4"> 
	        		<div class="content-box content-style2 anim-opacity animated"
                        data-animtype="fadeIn"
                        data-animrepeat="0"
                        data-animspeed="1s"
                        data-animdelay="0.2s"
                        >
                        <h4 class="h4-body-title">
                            <a href="/tips"><i class="fa fa-lightbulb-o"></i></a>
                            Success Tips
                        </h4>
                    </div>
                </div>
	        </div>
	    </div>
	</div> <!-- /Spinning Icons -->


	<div class="section-content section-color-bg white-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">   
    
                    <h2 class="h2-section-title">Meet The Developers</h2>
                    {{-- <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui. Omittam suscipiantur ex  vel,ex audiam  intellegat gfIn labitur discere eos, nam an feugiat voluptua.</h3> --}}
                </div>
             </div>

			<div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="col-md-4">
						<img class="developers img-circle" src="/img/nicole.jpg">
						<h4 class="h3-section-info">Nicole DeBord</h4>
                    </div>  

                    <div class="col-md-4">
						<img class="developers img-circle" src="/img/kevin.jpg">
						<h4 class="h3-section-info">Kevin Bongiovanni</h4>
                    </div>

                    <div class="col-md-4">
						<img class="developers img-circle" src="/img/felice.jpg">
						<h4 class="h3-section-info">Felice Malaszowski</h4>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
@stop
