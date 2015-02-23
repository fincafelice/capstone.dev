@extends('layouts.template')

@section('title')
Tips
@stop

@section('css')
    <style type="text/css">
        .invisible {
        	display: none;
            text-align: left;
        }
        .list {
            font-weight: bold;
        }
        dt {
            text-align: left;
            font-size: 120%;
        }
        dd {
            font-size: 100%;
        }

        .content-box {
            margin-top: 50px;
        }

        .row {
            margin-top: 20px;
        }

        h2 {
            margin-bottom: -5px;
        }
        #sale-tips {
            margin-top: 20px;
            text-align: left; 
        }
    </style>
@stop

@section('topscript')
<script src="/js/jquery.min.js"></script>
<script>

    $('document').ready(function() {
        $('.invisible').click(function(event) {
            event.preventDefault();
            $('dd').togglClass('invisible');
        });
        $('dt').click(function() {
            $(this).next().toggleClass('invisible');
        });
    });


</script>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Garage Sale Tips</h1>
            <hr>
        </div>
    </div>

    <div class="col-md-7">

        <div class="row">

            <div class="col-md-5">
                <h3>Permits</h3>
                <p>A garage sale permit may be required by your city. Plan ahead, know local permit requirements, and apply in advance before planning your sale. Visit your city's website or call for details.</p>
            </div>

            <div class="col-md-2">
                <div class="content-box content-style2 anim-opacity animated"
                    data-animtype="fadeIn"
                    data-animrepeat="0"
                    data-animspeed="1s"
                    data-animdelay="0.2s"
                    >
                    <h4>
                        <a href="http://www.sanantonio.gov/ces/garagesales.aspx"><i class="fa fa-gavel"></i></a>
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-5">
                <h3>Donating</h3>
                <p>Cleaning up after your garage sale can be a daunting task. Partner with local community organizations, donate unwanted items, or arrange to have items picked up after your sale</p>
            </div>

            <div class="col-md-2">
                <div class="content-box content-style2 anim-opacity animated"
                    data-animtype="fadeIn"
                    data-animrepeat="0"
                    data-animspeed="1s"
                    data-animdelay="0.2s"
                    >
                    <h4>
                        <a href="http://www.salvationarmyusa.org/"><i class="fa fa-truck"></i></a>
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-5">
                <h3>Transactions</h3>
                <p>Have cash and coinage stored safely on your person to make change. Accepting checks from strangers carries risk of fraud. If you have costly items for sale, consider mobile payment providers that offer for pay as you go plans </p>
            </div>

            <div class="col-md-2">
                <div class="content-box content-style2 anim-opacity animated"
                    data-animtype="fadeIn"
                    data-animrepeat="0"
                    data-animspeed="1s"
                    data-animdelay="0.2s"
                    >
                    <h4>
                        <a href="http://payments.intuit.com/mobile-credit-card-processing/"><i class="fa fa-money"></i></a>
                    </h4>
                </div>
            </div>
        </div>
        </div>


    <div id="sale-tips" class="col-md-5">
        <h3>Having a Successful Garage Sale</h3>
        <div class="important highlighted">
        </div>
        <div>
            
            <d1>
                <dt>Brand yourself</dt>
                <dd class="invisible">Differentiate your sale with a descriptive name to attract interested buyers. Lots of computers and comic books to unload? Have a geeky garage sale! Cleaning out the craft room? Try an arts and crafts themed sale</dd><br>

                <dt>Advertise your sale</dt>
                <dd class="invisible">There are so many different ways to advertise your garage sale. Don't stop here! Include your sales link in a newspaper listing, tweet it, or post pictues to Instagram and share them</dd><br>

                <dt>Place big-ticket items in front</dt>
                <dd class="invisible">You have about three seconds as a car drives by to make a good first impression. Placing all of your large, awesome items out front lets passersby know that you have great stuff and lots of it</dd><br>
                
                <dt>Have a free pile</dt>
                <dd class="invisible">Place a large, well-marked “free pile” somewhere visible to tempt potential customers. You may end up donating items that don't sell at the end of the day - giving some away upfront can help drum up business</dd><br>
                
                <dt>Combine with friends and neighbors</dt>
                <dd class="invisible">To have a really successful garage sale, you need to have lots of stuff. The more stuff you have sitting out, the better your chances that people will pull over and shop. Join forces: organize, synergize, monetize!</dd><br>

                <dt>Price to sell</dt>
                <dd class="invisible">Pricing items at a quarter of their worth is a good rule of thumb. Haggle, negotiate discounts for bundled purchases, and your garage sale is sure to be a success</dd><br>

                <dt>Stay organized</dt>
                <dd class="invisible">Organization is key when hosting a garage sale. As people shop, corral items closer together. Move displays closer to the front of the garage as you run out of items. Keep your area clean and tidy</dd><br>

                <dt>Display items by category</dt>
                <dd class="invisible">The harder you try to keep like items together, the more you will sell. Have an area for bags, children's items, kitchen, home decor, books, furniture, clothes and shoes. Organize your sale like you would a store and label prices clearly</dd><br>
                

                <dt>Get help</dt>
                <dd class="invisible">Large garage sales can be chaotic. Invite your friends to help customers, quote prices, and handle money. </dd><br>

            </d1>
        </div>
    </div>
</div>

 @stop
</body>
</html>