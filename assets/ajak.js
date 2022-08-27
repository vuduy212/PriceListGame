jQuery(document).ready(function () {
    //Dạng Tab Thay đổi hình ảnh curent Rank
    jQuery("select[name='current_rank']").change(function () {
        $curentValueRank = jQuery(this).val();
        console.log($curentValueRank);
        console.log(jQuery("#rank_" + $curentValueRank).attr('id'));

        if (jQuery("#rank_" + $curentValueRank).hasClass("showCurrentRank")) {
            jQuery("#rank_" + $curentValueRank).removeClass('showCurrentRank');
        }
        else {
            jQuery(".imgCurrentRank").removeClass('showCurrentRank');
            jQuery("#rank_" + $curentValueRank).addClass('showCurrentRank');
        }

    });

    //Dạng Tab Thay đổi hình ảnh divi Rank
    jQuery("select[name='desired_rank']").change(function () {
        $curentValueRank = jQuery(this).val();
        console.log($curentValueRank);
        console.log(jQuery("#rankdivi_" + $curentValueRank).attr('id'));
        if (jQuery("#rankdivi_" + $curentValueRank).hasClass("showCurrentRank")) {
            jQuery("#rankdivi_" + $curentValueRank).removeClass('showCurrentRank');
        }
        else {
            jQuery(".imgDesiredRank").removeClass('showCurrentRank');
            jQuery("#rankdivi_" + $curentValueRank).addClass('showCurrentRank');
        }
    });


    function GetTotalSale() {
        $total = 0;
        $percentageSale = 0;
        jQuery('input[name="extraboost"]:checked').each(function (index) {
            $total += Number(jQuery(this).val());
        });
        $percentageSale = Number(jQuery('input[name="discount"]').attr('data-coupon'));

        return $total - $percentageSale;
    }

    //Divi Boost Lol
    var dataDiviBoostLol = [

        {
            "rank": 9,
            "division": 4,
            "price": 4
        },
        {
            "rank": 9,
            "division": 3,
            "price": 5
        },
        {
            "rank": 9,
            "division": 2,
            "price": 6
        },
        {
            "rank": 9,
            "division": 1,
            "price": 7
        },
        {
            "rank": 1,
            "division": 4,
            "price": 8
        },
        {
            "rank": 1,
            "division": 3,
            "price": 9
        },
        {
            "rank": 1,
            "division": 2,
            "price": 10
        },
        {
            "rank": 1,
            "division": 1,
            "price": 11
        },
        {
            "rank": 2,
            "division": 4,
            "price": 15
        },
        {
            "rank": 2,
            "division": 3,
            "price": 16
        },
        {
            "rank": 2,
            "division": 2,
            "price": 17
        },
        {
            "rank": 2,
            "division": 1,
            "price": 25
        },
        {
            "rank": 3,
            "division": 4,
            "price": 24
        },
        {
            "rank": 3,
            "division": 3,
            "price": 28
        },
        {
            "rank": 3,
            "division": 2,
            "price": 32
        },
        {
            "rank": 3,
            "division": 1,
            "price": 35
        },
        {
            "rank": 4,
            "division": 4,
            "price": 36
        },
        {
            "rank": 4,
            "division": 3,
            "price": 40
        },
        {
            "rank": 4,
            "division": 2,
            "price": 44
        },
        {
            "rank": 4,
            "division": 1,
            "price": 54
        },
        {
            "rank": 5,
            "division": 4,
            "price": 95
        },
        {
            "rank": 5,
            "division": 3,
            "price": 129
        },
        {
            "rank": 5,
            "division": 2,
            "price": 169
        },
        {
            "rank": 5,
            "division": 1,
            "price": 249
        },
        {
            "rank": 6,
            "division": 1,
            "price": 1099
        },
        {
            "rank": 7,
            "division": 1,
            "price": 1899
        },
    ];

    var dataDiviBoostLolferutre = [
        {
            "rank": 9,
            "division": 3,
            "price": 4
        },
        {
            "rank": 9,
            "division": 2,
            "price": 5
        },
        {
            "rank": 9,
            "division": 1,
            "price": 6
        },
        {
            "rank": 1,
            "division": 4,
            "price": 7
        },
        {
            "rank": 1,
            "division": 3,
            "price": 8
        },
        {
            "rank": 1,
            "division": 2,
            "price": 9
        },
        {
            "rank": 1,
            "division": 1,
            "price": 10
        },
        {
            "rank": 2,
            "division": 4,
            "price": 11
        },
        {
            "rank": 2,
            "division": 3,
            "price": 15
        },
        {
            "rank": 2,
            "division": 2,
            "price": 16
        },
        {
            "rank": 2,
            "division": 1,
            "price": 17
        },
        {
            "rank": 3,
            "division": 4,
            "price": 25
        },
        {
            "rank": 3,
            "division": 3,
            "price": 24
        },
        {
            "rank": 3,
            "division": 2,
            "price": 28
        },
        {
            "rank": 3,
            "division": 1,
            "price": 32
        },
        {
            "rank": 4,
            "division": 4,
            "price": 35
        },
        {
            "rank": 4,
            "division": 3,
            "price": 36
        },
        {
            "rank": 4,
            "division": 2,
            "price": 40
        },
        {
            "rank": 4,
            "division": 1,
            "price": 44
        },
        {
            "rank": 5,
            "division": 4,
            "price": 54
        },
        {
            "rank": 5,
            "division": 3,
            "price": 95
        },
        {
            "rank": 5,
            "division": 2,
            "price": 129
        },
        {
            "rank": 5,
            "division": 1,
            "price": 169
        },
        {
            "rank": 6,
            "division": 1,
            "price": 249
        },
        {
            "rank": 7,
            "division": 1,
            "price": 1099
        },
        {
            "rank": 8,
            "division": 1,
            "price": 1899
        },
    ]

    var datanetwinlol = [
        {
            "rank": 9,
            "division": 4,
            "price": 3.95
        },
        {
            "rank": 9,
            "division": 3,
            "price": 4.95
        },
        {
            "rank": 9,
            "division": 2,
            "price": 4.95
        },
        {
            "rank": 9,
            "division": 1,
            "price": 5.95
        },
        {
            "rank": 1,
            "division": 4,
            "price": 4.95
        },
        {
            "rank": 1,
            "division": 3,
            "price": 4.95
        },
        {
            "rank": 1,
            "division": 2,
            "price": 4.95
        },
        {
            "rank": 1,
            "division": 1,
            "price": 4.95
        },
        {
            "rank": 2,
            "division": 4,
            "price": 5.95
        },
        {
            "rank": 2,
            "division": 3,
            "price": 5.95
        },
        {
            "rank": 2,
            "division": 2,
            "price": 5.95
        },
        {
            "rank": 2,
            "division": 1,
            "price": 5.95
        },
        {
            "rank": 3,
            "division": 4,
            "price": 6.95
        },
        {
            "rank": 3,
            "division": 3,
            "price": 6.95
        },
        {
            "rank": 3,
            "division": 2,
            "price": 6.96
        },
        {
            "rank": 3,
            "division": 1,
            "price": 6.95
        },
        {
            "rank": 4,
            "division": 4,
            "price": 9.95
        },
        {
            "rank": 4,
            "division": 3,
            "price": 10.95
        },
        {
            "rank": 4,
            "division": 2,
            "price": 11.95
        },
        {
            "rank": 4,
            "division": 1,
            "price": 14.95
        },
        {
            "rank": 5,
            "division": 4,
            "price": 19
        },
        {
            "rank": 5,
            "division": 3,
            "price": 124
        },
        {
            "rank": 5,
            "division": 2,
            "price": 29
        },
        {
            "rank": 5,
            "division": 1,
            "price": 39
        },
        {
            "rank": 6,
            "division": 0100,
            "price": 44
        },
        {
            "rank": 6,
            "division": 100200,
            "price": 49
        },
        {
            "rank": 6,
            "division": 200300,
            "price": 54
        },
        {
            "rank": 6,
            "division": 300400,
            "price": 59
        },
        {
            "rank": 7,
            "division": 400500,
            "price": 69
        },
        {
            "rank": 7,
            "division": 500600,
            "price": 79
        },
        {
            "rank": 7,
            "division": 600700,
            "price": 109
        },
        {
            "rank": 8,
            "division": 9,
            "price": 109
        },
    ]


    function PriceCalculator(data, dataLol, $curentRank, $currentRankNumber, $furtureRank, $futureRankNumber) {

        $totalPrice = 0;
        $getLastIndex = 0;
        var indexfirst = -1;

        for (let j = 0; j <= 26; j++) {

            if ($curentRank == $furtureRank && $currentRankNumber == $futureRankNumber) {
                $totalPrice = 0;
            }
            else {
                if (data[j]['rank'] == $curentRank && data[j]['division'] == $currentRankNumber) {
                    indexfirst = j;

                    console.log(indexfirst);
                    if (indexfirst >= 0) {

                        for (let i = indexfirst; i <= 26; i++) {
                            if (dataLol[i]['rank'] == $furtureRank && dataLol[i]['division'] == $futureRankNumber) {
                                $totalPrice += dataLol[i]['price'];
                                return $totalPrice;
                                break;
                            }
                            else {
                                $totalPrice += dataLol[i]['price'];
                            }
                        }

                    }
                }
            }
        }
    }


    function TangtienVer1() {
        $priceCurrent = 0;
        $priceRank = 0;
        //Current
        $curentRank = Number(jQuery("select[name='current_rank']").val());
        $currentRankNumber = Number(jQuery("select[name='current_division']").val());
        $curentLP = jQuery("select[name='current_lp']").val();
        //Future
        $fetureRank = Number(jQuery("select[name='desired_rank']").val());
        $futureRankNumber = Number(jQuery("select[name='desired_division']").val());
        //Elo
        $current_elo = Number(jQuery("select[name='current_elo']").val());
        $totalSale = GetTotalSale() + $current_elo;
        if ($curentRank && $currentRankNumber && $fetureRank && $futureRankNumber && $current_elo >= 0) {
            $priceRank = PriceCalculator(dataDiviBoostLol, dataDiviBoostLolferutre, $curentRank, $currentRankNumber, $fetureRank, $futureRankNumber);
            $priceCurrent = $priceRank + ($priceRank * $totalSale) / 100;
            jQuery(".price-current").text($priceCurrent);
        }
        else {
            alert("Vui lòng điền đầy đủ thônng tin !");
        }
    }


    function netwin(data, $curentRank, $curentdivision) {

        for (let i = 0; i <= data.length; i++) {

            if (data[i]["rank"] == $curentRank && data[i]["division"] == $curentdivision) {
                return data[i]["price"];
            }
        }
    }


    function Netwinver1() {
        $curentRank = Number(jQuery("select[name='current_rank']").val());
        $currentRankNumber = Number(jQuery("select[name='current_division']").val());
        $countMatch = Number(jQuery("input[name='games_total']").val());
        //Elo
        $current_elo = Number(jQuery("select[name='current_elo']").val());
        $totalSale = GetTotalSale() + $current_elo;
        if ($curentRank && $currentRankNumber &&  $current_elo >= 0 && $countMatch >=0) {
            $priceRank = netwin(datanetwinlol, $curentRank, $currentRankNumber) *  $countMatch;
            $priceCurrent = $priceRank + ($priceRank * $totalSale) / 100;
            jQuery(".price-current").text($priceCurrent);
        }
        else {
            alert("Vui lòng điền đầy đủ thônng tin !");
        }
    }



    jQuery(".checkPricenetwin").click(function () {
        Netwinver1();
    });
    jQuery(".checkPrice").click(function () {
        TangtienVer1();
    });








});
