@extends('layouts.master')

@section('title')
Tips
@stop

@section('css')
<style type="text/css">
#invisible {
	display: none;
}
.list {
    font-weight: bold;
    /*background-color: #0F0;*/
}
</style>
@stop

@section('top-script')
<script src="/js/jquery.min.js"></script>
<script>

    $('document').ready(function() {
        $('#invisible').click(function(event) {
            event.preventDefault();
            $('dd').toggle('.invisible');
        });
        $('dt').click(function() {
            $(this).next().toggle('.invisible');
        });
    });


</script>
@stop

@section('content')


    <h1>10 facts about Garage Sales</h1>
    <div class="centered important highlighted">
    </div>
    <div>
        
        <d1>
            <dt>1. Advertise your Garage Sale.</dt>
            <dd id = "invisible">There are so many different ways to advertise your garage sale.  Our web application is one but other resources can be helpful also.  Two other great resourse would be Tweeting it and / or posting pictues onto your instagram.</dd><br>

            <dt>2. Place the bigger items in the front.</dt>
            <dd id = "invisible">You have about 3 seconds as a car drives by to make a good first impression. Either they will stop or they will keep on driving. By placing all your large awesome items out front, you are telling the driver/shopper that you have awesome stuff and lots of it.</dd><br>
            
            <dt>3. Have a free pile.</dt>
            <dd id = "invisible">Place a large well-marked “free pile” right out front. The lure of something free will get almost any driver to stop. I put a bunch of stuff I was going to donate that I didn’t think would sell in the free pile. It was just enough temptation to get the shopper out of their car. Also, people feel bad stopping and just taking something for free. They will typically find something to buy so they don’t feel bad for just taking the free stuff.</dd><br>
            
            <dt>4. Combine with your friends and neighbors.</dt>
            <dd id = "invisible">To have a really successful garage sale you need to have lots of stuff. The more stuff you have sitting out, the better your chances that people will pull over and shop. My friend Beth from Free Stylin’ came over and brought a car load of stuff to sell. It was just enough extra that it made our garage sale look full..</dd><br>

            <dt>5. Price to sell.</dt>
            <dd id = "invisible">Having a garage sale is the last-ditch effort to make some cash on stuff you are probably going to donate. If it doesn’t sell, you will get nothing for it, so price it low! A quarter is better than getting nothing and just donating it to goodwill. If you are wanting to make big bucks off your stuff and sell it for what it’s worth, list it on ebay or craigslist. Garage sales are for just getting rid of the crap already!</dd><br>

            <dt>6. Have a price tag on everything.</dt>
            <dd id = "invisible">If you want your stuff to sell, put a price tag on it! Most people won’t ask how much something is. They will just set it back down and move on. If you want to sell it, stick a price tag on it. It takes extra time and energy to price everything, but it is worth it.</dd><br>

            <dt>7. Stay organized!</dt>
            <dd id = "invisible">
			Organization is key when hosting a garage sale. As people shop, corral items closer together. Move shelves closer to the front of the garage as you run out of items. Keep your area clean and tidy.</dd><br>

            <dt>8. Use bags to contain sets.</dt>
            <dd id = "invisible"> Plastic bags are a garage sale hosts best friend. I used gallon-size zip-loc bags to keep items with multiple pieces together. For extra large items I used ikea bags and reusable grocery sacks that were clearly labeled with a black sharpie. All the large bagged items sold within an hour!.</dd><br>

            <dt>9. Display like items together.</dt>
            <dd id = "invisible">The harder you try to keep like items together, the more you will sell. Have an area for bags, kids stuff, kitchen stuff, home decor, books, furniture, clothes and shoes.</dd><br>

            <dt>10. Clearly label everything.</dt>
            <dd id = "invisible">If the price tag on the item wasn’t obvious enough, I’d use tan painters tape and a sharpie to label items even more clearly. I’d label bags with the contents of the bag and I’d label baskets if everything in the basket was the same price.</dd><br>
        </d1>

    </div>

 @stop
</body>
</html>