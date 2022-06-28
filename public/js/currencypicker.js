$(function () {
    var currencys = [
        {
            "name": "BTC",
            "code": "btc"
    },
        {
            "name": "ETH",
            "code": "eth"
    },
    {
	        "name": "USDT",
	        "code": "usdt"
    }
]

    var currencyInput = $(document).find('.currencypicker');
    var currencyList = "";


    //set defaults
    for (i = 0; i < currencyInput.length; i++) {

        //check if coin
        coin = currencyInput.eq(i).data('coin');
        
        if (coin) {
            currencyList = "";
            
            //for each build list with coin
            $.each(currencys, function (index, currency) {
                var coinIcon = "assets/images/icons/" + currency.code + ".png";
                currencyList += "<option data-currency-code='" + currency.code + "' data-tokens='" + currency.code + " " + currency.name + "' style='padding: 8px 8px 8px 38px; margin: 0; color: #ccc; background: rgba(18,16,47,0.80); background-image:url(" + coinIcon + "); background-size: 20px; background-repeat:no-repeat; background-position: 8px 9px;' value='" + currency.name + "'>" + currency.name + "</option>";
            });

            //add coins to button
            currencyInput.eq(i).on('loaded.bs.select', function (e) {
                var button = $(this).closest('.btn-group').children('.btn');
                button.hide();
                var def = $(this).find(':selected').data('currency-code');
             //   var coinIcon = "assets/images/icons/" + def + ".png";
                button.css("background-size", '20px');
                button.css("color", '#787878 !important');
                button.css("border", '0');
                button.css("background-color", 'rgba(12,19,20,0.90) !important');
                button.css("background-position", '8px 13px');
                button.css("padding-left", '10px');
                button.css("background-repeat", 'no-repeat');
             //   button.css("background-image", "url('" + coinIcon + "'");
                button.show();
            });

            //change coin on select change
            currencyInput.eq(i).on('change', function () {
                button = $(this).closest('.btn-group').children('.btn');
                def = $(this).find(':selected').data('currency-code');
                coinIcon = "assets/images/icons/" + def + ".png";
                button.css("background-size", '20px');
                button.css("color", '#c0c0c0 !important');
                button.css("border", '0');
                button.css("background-color", 'rgba(12,19,20,0.90) !important');
                button.css("background-position", '8px 13px');
                button.css("padding-left", '35px');
                button.css("background-repeat", 'no-repeat');
                button.css("background-image", "url('" + coinIcon + "'");

            });
        }else{
            currencyList ="";
            
            //for each build list without coin
            $.each(currencys, function (index, currency) {
                currencyList += "<option data-currency-code='" + currency.code + "' data-tokens='" + currency.code + " " + currency.name + "' value='" + currency.name + "'>" + currency.name + "</option>";
            });
            
            
        }
        
         //append currency list
        currencyInput.eq(i).html(currencyList);


        //check if default
        def = currencyInput.eq(i).data('default');
        //if there's a default, set it
        if (def) {
            currencyInput.eq(i).val(def);
        }


    }









});