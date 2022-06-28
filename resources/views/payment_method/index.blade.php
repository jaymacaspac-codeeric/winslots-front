@extends('template.template')

@section('custom-css')

@endsection

@section('content')

<div class="sub-area bg-color-1 payment-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h3 class="headline"><span class="title-head">P</span>ayment Methods</h3>
                <p class="head_text">We ensure your deposits and withdrawals are processed securely and quickly. Payment methods are country specific.</p>
                <p class="head_text">We charge no fees however some non EU transfers may be subject to charges applied by processing banks.</p>
                <br><br>
            </div>
        </div>
        <div class="row">                    
            <div class="sub-text ">	
                <div class="panel">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4>Deposit methods</h4>
                        <div class="payment-methods" style="overflow-x:auto;">
                            <table id="payment_methods_table" class="table">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">PAYMENT METHOD</th>
                                        <th class="col-md-2">TYPE</th>
                                        <th class="col-md-2">FEE</th>
                                        <th class="col-md-3">PROCESSING TIME</th>
                                        <th class="col-md-3">LIMIT PER TRANSACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="payment-image"><img src="{{URL::asset('images/icons/btc_pay.png')}}" alt=""></span> 
                                        </td>
                                        <td>BTC</td>
                                        <td><span class="green">Free</span></td>
                                        <td><span class="green">5~10 min</span></td>
                                        <td>Min 0.0000 / max No Limit</td>
                                    </tr>										
                                    <tr>
                                        <td>
                                            <span class="payment-image"><img src="{{URL::asset('images/icons/eth_pay.png')}}" alt=""></span> 
                                        </td>
                                        <td>ETH</td>
                                        <td><span class="green">Free</span></td>
                                        <td><span class="green">5~10 min</span></td>
                                        <td>Min 0.0000 / max No Limit</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="payment-image"><img src="{{URL::asset('images/icons/tether_pay.png')}}" alt=""></span> 
                                        </td>
                                        <td>USDT</td>
                                        <td><span class="green">Free</span></td>
                                        <td><span class="green">5~10 min</span></td>
                                        <td>Min 0.0000 / max No Limit</td>
                                    </tr>																			
                                    <tr>
                                        <td>
                                            <span class="payment-image"><img src="{{URL::asset('images/icons/astropay.png')}}" alt=""></span> 
                                        </td>
                                        <td>Astro Pay</td>
                                        <td><span class="green">Free</span></td>
                                        <td><span class="green">Instant</span></td>
                                        <td>Min 10 $ / max 5,000 $</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="payment-image"><img src="{{URL::asset('images/icons/moonpay.png')}}" alt=""></span> 
                                        </td>
                                        <td>ecoPayz</td>
                                        <td><span class="green">Free</span></td>
                                        <td><span class="green">5~10 min</span></td>
                                        <td>Min 10 $ / max 5,000 $</td>
                                    </tr>	
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                                                
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection


@section('custom-js')



<script>
    $(function() {
		  $(".payment-methods").each(function() {
		    var nmtTable = $(this);
		    var nmtHeadRow = nmtTable.find("thead tr");
		    nmtTable.find("tbody tr").each(function() {
		      var curRow = $(this);
		      for (var i = 0; i < curRow.find("td").length; i++) {
		        var rowSelector = "td:eq(" + i + ")";
		        var headSelector = "th:eq(" + i + ")";
		        var title = nmtHeadRow.find(headSelector).text();
		        if (title =="LIMIT PER TRANSACTION") {
		        	title = "Limit";
		        }
		        curRow.find(rowSelector).attr('data-title', title);
		      }
		    });
		  });
		});
    console.log('working');
    $(function() {
      //  $.ajaxSetup({
//             headers: {
//                 'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
//                 'Access-Control-Allow-Origin': '*',
//                 'Content-Type': 'application/json'
//             }
//         });
    
    function get_info() {
        <?php
        if(isset($_SESSION['f_username'])) { ?>
            $.ajax({
                type: "GET",
                url: "https://api.honorlink.org/api/user?username="{{session('f_username')}},
                headers: {
                    'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
                    'Access-Control-Allow-Origin': '*',
                    'Content-Type': 'application/json'
                },
                success: function (res) {
                    console.log(res);
                    $('.holding-balance').html(res['balance'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '.00');
                    $('.balance span').html(res['balance'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '.00');
                }
            });
       <?php } ?>
    }
    get_info();
        
        $('.submit_btn').on('click', function() {
            var username = $('.uname').val();
            var password = $('.passw').val();
            var data = $('.form-login').serialize();
            $.ajax({
                url: "{{ route('login') }}",
                type:'POST',
                data: data,
                success:function(data) {
                    console.log(data);
                    if(data == 'success') {
                        // $('#modalLogin').modal('hide');
                        console.log('success');
                        $.ajax({
                            // cache: false,
                            type: "GET",
                            url: 'https://api.honorlink.org/api/user?username=' + username,
                                headers: {
                                    'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
                                    'Access-Control-Allow-Origin': '*',
                                    'Content-Type': 'application/json'
                                },
                            success: function (res) {
                                console.log(res);
                                var username = res['username'];
                                var nick = res['nickname'];
                                var balance = res['balance'];
                                var point = res['point'];
                                var agent_id = res['agent_id'];
                                var user_id = res['id'];
                                
                                $.ajax({
                                    // cache: false,
                                    type: "POST",
                                    url: "{{ route('session') }}",
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        'username' : username,
                                        'nick': nick,
                                        'balance': balance,
                                        'point': point,
                                        'agent_id': agent_id,
                                        'user_id': user_id
                                    },
                                    success: function (res) {
                                        location.reload();
                                    }
                                });
                            },
                            error: function (err) {
                                console.log(err);
                                $('.invalid').text('Invalid Credetials').css('display', 'block');
                            }
                        });
                        
                    } else {
                        $('.invalid').text('Invalid Credetials').css('display', 'block');
                    }
                }
            })
        });

        var limit = 102;
        var page = 1;
        var total_page = 1;

        $.ajax({	
            type: "GET",
            url: 'https://api.honorlink.org/api/game-list',
            headers: {
                'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json'
            },
            success:function(data) {
            // 	var list = JSON.parse(data);
                console.log(data);
                var list = data;
                var html = "";
                var total_page = Math.ceil(list.length / limit);
                console.log(list.length);

                var filter_all_games = [];

                var current_list = [];
                var container = $('.game-container');

                var category = 'category_live_casino'; 
                var selected_category = 'all_games';

                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    var target = $(e.target).data("category") // activated tab
                    category = target;

                    console.log(category);

                    if(category == 'favorites') {
                        container.html("");
                        $.ajax({	
                            url:'api/get_data',
                            type:'POST',
                            data: {'cmd' : "get_favorites"},
                            success:function(d) {
                                var fav = JSON.parse(d);
                                console.log(fav);
                                for(var i=0; i < fav.length; i++) {
                                    var data = fav[i];
                                    $('.game-container').append(
                                        '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">' +
                                        '<div class="game-content" style="width: 100%;">' +
                                            '<div class="game-box">' +
                                                '<a href="javascript:void(0)" class="play" data-id="'+data[4]+'" data-type="'+data[3]+'" data-provider="'+data[6]+'" data-vendor="'+data[5]+'" onclick="">' +
                                                    '<div class="game-box-img">' +
                                                        '<img class="game-img lazy" data-vendor="'+data[5]+'" data-src="'+data[7]+'">' +
                                                        '<div class="game-image-layer">' +
                                                            '<img src="{{URL::asset('images/icons/play.png')}}" alt="Game">' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</a>' +
                                                '<span class="title"><h3>'+data[2]+'</h3></span>' +
                                                '<div class="favicon">' +
                                                    '<a href="javascript:void(0)" data-title="'+data[2]+'" data-id="'+data[4]+'" data-type="'+data[3]+'" data-provider="'+data[6]+'" data-vendor="'+data[5]+'" data-src="'+data[7]+'" role="button" class="button-favorite"><i class="fa fa-star select"></i></a> ' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>'
                                    );			
                                }
                                initialize_lazyload();
                            }
                        });
                    } else if(category == 'category_new_games') {
                        container.html("");
                        $('input[name=category_new_games]').change(function () {
                            selected_category = $('input[name=category_new_games]:checked').val();
                            console.log(selected_category);
                        });
                    } else if(category == 'category_slots_jackpots') {
                        filter_all_games = [
                            {type : 'slot'}
                        ];
                        container.html("");
                        current_list = filter_all_game(filter_all_games, list, 'all');

                        // for(var i=0; i < current_list.length; i++) {
                        // 	container.append(game_content(current_list[i]));			
                        // }

                        display_game(current_list, limit, page);

                        // console.log(current_list);
                        $('input[name=category_slots_jackpots]').change(function () {
                            selected_category = $('input[name=category_slots_jackpots]:checked').val();
                            console.log(selected_category);
                        });
                        initialize_lazyload();
                    } else if(category == 'category_live_casino') {
                        filter_all_games = [
                            {type : 'baccarat'},
                            {type : 'blackjack'},
                            {type : 'roullete'},
                            {type : 'poker'},
                            {type : 'live'}
                        ];
                        container.html("");
                        current_list = filter_all_game(filter_all_games, list, 'all');
                        display_game(current_list, limit, page);
                        $('input[name=category_live_casino]').change(function () {
                            selected_category = $('input[name=category_live_casino]:checked').val();
                            console.log(selected_category);
                        });
                        initialize_lazyload();
                    } else if(category == 'category_virtual_games') {
                        container.html("");
                        $('input[name=category_virtual_games]').change(function () {
                            selected_category = $('input[name=category_virtual_games]:checked').val();
                            console.log(selected_category);
                        });
                    } else if(category == 'category_providers') {
                        filter_all_games = [
                            {vendor : 'evolution'},
                            {vendor : 'uig'},
                            {vendor : 'EZugi'},
                            {vendor : 'Sexy Casino'},
                            {vendor : 'PragmaticPlay Live'},
                            {vendor : 'PragmaticPlay'},
                            {vendor : 'Habanero'},
                            {vendor : 'CQ9'},
                            {vendor : 'Booongo'},
                            {vendor : 'Red TIger'},
                            {vendor : 'Quick Spin'},
                            {vendor : 'Netent'},
                            {vendor : 'EVOPLAY'},
                            {vendor : 'YGG'},
                            {vendor : 'Wazdan'},
                            {vendor : 'Playson'},
                            {vendor : 'PlayNGo'},
                            {vendor : 'Relax Gaming'},
                            {vendor : 'Triple Profit Gaming'},
                            {vendor : 'GameArt'}
                        ];
                        container.html("");
                        current_list = filter_all_game_by_vendor(filter_all_games, list, 'all');
                        if(current_list <= limit) {
                            page = 1;
                        }
                        display_game(current_list, limit, page);
                        initialize_lazyload();
                        $('input[name=category_providers]').change(function () {
                            var selected_vendor_category = $('input[name=category_providers]:checked').val();
                            // console.log(selected_category);
                            if(selected_vendor_category == 'all_games') {
                                filter_all_games = [
                                    {vendor : 'evolution'},
                                    {vendor : 'uig'},
                                    {vendor : 'EZugi'},
                                    {vendor : 'Sexy Casino'},
                                    {vendor : 'PragmaticPlay Live'},
                                    {vendor : 'PragmaticPlay'},
                                    {vendor : 'Habanero'},
                                    {vendor : 'CQ9'},
                                    {vendor : 'Booongo'},
                                    {vendor : 'Red TIger'},
                                    {vendor : 'Quick Spin'},
                                    {vendor : 'Netent'},
                                    {vendor : 'EVOPLAY'},
                                    {vendor : 'YGG'},
                                    {vendor : 'Wazdan'},
                                    {vendor : 'Playson'},
                                    {vendor : 'PlayNGo'},
                                    {vendor : 'Relax Gaming'},
                                    {vendor : 'Triple Profit Gaming'},
                                    {vendor : 'GameArt'}
                                ];
                                current_list = filter_all_game_by_vendor(filter_all_games, list, 'all')
                            
                            } else {
                                filter_all_games = [
                                    {vendor : selected_vendor_category}
                                ]
                                current_list = filter_all_game_by_vendor(filter_all_games, list, 'all')
                            }
                            // console.log('all games');
                            // for(var i=0; i < current_list.length; i++) {
                            // 	container.append(game_content(current_list[i]));			
                            // }
                            console.log(selected_vendor_category);
                            console.log(current_list);
                            container.html("");
                            
                            display_game(current_list, limit, page);

                            initialize_lazyload();
                        });
                    }
                });


                if(category == 'category_live_casino') {
                    filter_all_games = [
                        {type : 'baccarat'},
                        {type : 'blackjack'},
                        {type : 'roullete'},
                        {type : 'poker'},
                        {type : 'live'}
                    ];
                    $('input[name=category_live_casino]').change(function () {
                        container.html("");
                        selected_category = $('input[name=category_live_casino]:checked').val();
                        // console.log(selected_category);
                        if(selected_category == 'all_games') {
                            filter_all_games = [
                                {type : 'baccarat'},
                                {type : 'blackjack'},
                                {type : 'roullete'},
                                {type : 'poker'},
                                {type : 'live'}
                            ];
                            current_list = filter_all_game(filter_all_games, list, 'all')
                        } else {
                            filter_all_games = [
                                {type : selected_category}
                            ]
                            current_list = filter_all_game(filter_all_games, list, 'all')
                        }
                        // console.log(current_list);

                        for(var i=0; i < current_list.length; i++) {
                            container.append(game_content(current_list[i]));			
                        }

                        // console.log(current_list);
                        initialize_lazyload();
                    });
                    current_list = filter_all_game(filter_all_games, list, 'all');
                    display_game(current_list, limit, page);
                
                }


                $('.loadmore-game').on('click', function() {
                    if(page != total_page && category != 'favorites') {
                        page++;
                        display_game(current_list, limit, page);
                        initialize_lazyload();
                    }
                });
                
                initialize_lazyload();

                var filter_game = list.filter(function (el) {
                                    return el.type == 'topcard';
                                });
                // console.log(filter_game);

                // filter list by vendor
                // var vendor = "evolution";
                // var filter_game = list.filter(function (el) {
                // 					return el.vendor == vendor;
                // 				});
                // console.log(filter_game);
            
                

                // var all = [];
                // for(var x = 0; x < filter.length; x++) {
                // 	var all_g = list.filter(element => {
                // 		return element.type == filter[x]['type'];
                // 	});
                // 	all.push(all_g);
                // }
                // console.log(filter_all_game(filter_all_games, list, 'single'));
                // console.log(flatten(filter_game(filter, list, 'single')));
            },
            error: function (err) {
                console.log(err);
            }
        });

        function display_game(list, limit, page) {
            var data = paginate(list, limit, page);
            for(var i=0; i < data.length; i++) {
                $('.game-container').append(game_content(data[i]));			
            }
        }

        function filter_all_game(filter, list, type) {
            if(type == 'all') {
                var all = [];
                for(var x = 0; x < filter.length; x++) {
                    var all_g = list.filter(element => {
                        return element.type == filter[x]['type'];
                    });
                    all.push(all_g);
                }
                
                return flatten(all, 'all');
            }
        }

        function filter_all_game_by_vendor(filter, list, type) {
            if(type == 'all') {
                var all = [];
                for(var i = 0; i < filter.length; i++) {
                    var all_g = list.filter(element => {
                        return element.vendor == filter[i]['vendor'];
                    });
                    all.push(all_g);
                }
                
                return flatten(all, 'all');
            }
        }

        function flatten(arr, type) {
            if(type == 'all') {
                var flat = [];
                for (var i = 0; i < arr.length; i++) {
                    flat = flat.concat(arr[i]);
                }
                return flat;
            }
        }

        function paginate(array, page_size, page_number) {
            return array.slice((page_number - 1) * page_size, page_number * page_size);
        }

        function fav_game_content(data) {
            return '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">' +
                        '<div class="game-content" style="width: 100%;">' +
                            '<div class="game-box">' +
                                '<a href="javascript:void(0)" class="play" data-id="'+data[4]+'" data-type="'+data[3]+'" data-provider="'+data[6]+'" data-vendor="'+data[5]+'" onclick="">' +
                                    '<div class="game-box-img">' +
                                        '<img class="game-img lazy" data-vendor="'+data[5]+'" data-src="'+data[7]+'">' +
                                        '<div class="game-image-layer">' +
                                            '<img src="{{URL::asset('images/icons/play.png')}}" alt="Game">' +
                                        '</div>' +
                                    '</div>' +
                                '</a>' +
                                '<span class="title"><h3>'+data['title']+'</h3></span>' +
                                '<div class="favicon">' +
                                    '<a href="javascript:void(0)" data-title="'+data[2]+'" data-id="'+data[4]+'" data-type="'+data[3]+'" data-provider="'+data[6]+'" data-vendor="'+data[5]+'" data-src="'+data[7]+'" role="button" class="button-favorite"><i class="fa fa-star selected"></i></a> ' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
        }

        function game_content(data) {
            var is_favorite = data['is_favorite'] == 1 ? 'select' : '';

            return '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">' +
                        '<div class="game-content" style="width: 100%;">' +
                            '<div class="game-box">' +
                                '<a href="javascript:void(0)" class="play" data-id="'+data['id']+'" data-type="'+data['type']+'" data-provider="'+data['provider']+'" data-vendor="'+data['vendor']+'" onclick="">' +
                                    '<div class="game-box-img">' +
                                        '<img class="game-img lazy" data-vendor="'+data['vendor']+'" data-src="'+data['thumbnails']['300x300']+'">' +
                                        '<div class="game-image-layer">' +
                                            '<img src="{{URL::asset('images/icons/play.png')}}" alt="Game">' +
                                        '</div>' +
                                    '</div>' +
                                '</a>' +
                                '<span class="title"><h3>'+data['title']+'</h3></span>' +
                                '<div class="favicon">' +
                                    '<a href="javascript:void(0)" data-title="'+data['title']+'" data-id="'+data['id']+'" data-type="'+data['type']+'" data-provider="'+data['provider']+'" data-vendor="'+data['vendor']+'" data-src="'+data['thumbnails']['300x300']+'" role="button" class="button-favorite"><i class="fa fa-star '+ is_favorite +'"></i></a> ' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
        }

        function initialize_lazyload() {
            $('img.lazy').lazy({
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                }
            });
        }

        $('.game-container').on('click', '.button-favorite', function(e){ 
            var target = $(e.target); 

            var game_id 		= $(this).data('id');
            var game_title 		= $(this).data('title');
            var game_type 		= $(this).data('type');
            var game_provider 	= $(this).data('provider');
            var game_thumbnail 	= $(this).data('src');
            var game_vendor 	= $(this).data('vendor');
            var user_id 		= "{{session('f_id')}}";
            if(user_id != "") {
                $.ajax({
                    url:'post/favorite.php',
                    type:'POST',
                    data: {
                        'user_id'		: user_id,
                        'title' 		: game_title, 
                        'type' 			: game_type,
                        'game_id' 		: game_id, 
                        'vendor' 		: game_vendor,
                        'provider' 		: game_provider, 
                        'thumbnail' 	: game_thumbnail,
                        'cmd' 			: 'add'
                    },
                    success:function(data) {
                        if(data == 'success') {
                            target.addClass('select');
                        } else if(data == 'remove') {
                            target.removeClass('select');
                        }
                        console.log(data);
                    }
                })
            } else {
                $('#modalLogin').modal('show');
            }
        });

    });


    var user = "{{ session('f_username') }}";
    console.log(user);
    var id = "";
    var provider = "";

    $('.game-container').on('click', '.play', function(){ 
    // $('.play').on('click', function() {
        console.log('play');
        id = $(this).data('id');
        provider = $(this).data('provider');

        if(user != "") {
            $('#gameModal').modal('show');
        } else {
            $('#modalLogin').modal('show');
        }
        gameBg("assets/images/games/bg/alivemegaways_skywind_background.jpg")
    });

    $('#gameModal').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        // var id = $(e.relatedTarget).data('id');
        // var provider = $(e.relatedTarget).data('provider');

        if(user != "") {
            $.ajax({
                type: "PATCH",
                url: 'https://api.honorlink.org/api/user/refresh-token?username={{session('f_username')}}' ,
                headers: {
                    'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
                    // 'Access-Control-Allow-Origin': '*',
                    // 'Content-Type': 'application/json'
                },
                success:function(data) {
                    var token = data['token'];
                    $.ajax({
                        type: "GET",
                        url: 'https://api.honorlink.org/api/get-game-url',
                        headers: {
                            'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
                            // 'Access-Control-Allow-Origin': '*',
                            // 'Content-Type': 'application/json'
                        },
                        data: { 'game_id': id, 'provider': provider, 'token' : token},
                        success:function(data){
                            var url = data['link'];
                            $('.game-modal-frame').attr('src', url);
                        }
                    });
                }
            });
        } else {
            $('#modalLogin').modal('show');
        }
    });
    function number_format(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    $('#gameModal').on('hide.bs.modal', function(e) {
        $('.game-modal-frame').attr('src', "");
        @if(session('f_username'))
            $.ajax({
                type: "GET",
                url: "https://api.honorlink.org/api/user?username={{session('f_username')}}",
                headers: {
                    'Authorization': 'Bearer Wq6U9iv5WErdYetknhvQ4d2Ke4OB36LKaxeDY5yD',
                    'Access-Control-Allow-Origin': '*',
                    'Content-Type': 'application/json'
                },
                success: function (res) {
                    console.log(res);
                    $('.holding-balance').html(res['balance'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '.00');
                    $('.balance span').html(res['balance'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '.00');
                }
            });
        @endif
    });

    $('.form-login input').keypress(function(e) {
        if(e.which == 13) {
            $('.submit_btn').click();
            console.log('submit');
            e.preventDefault();
        }
    });
    $(document).ready(function(){
    	$(".show_currency").show();
        $(".hide_currency").hide();
	});
	
	function add_currency(row_currency, currency_icon) {		
		$(row_currency).show();
		$(currency_icon).addClass("disabled");
	}

</script>
@endsection