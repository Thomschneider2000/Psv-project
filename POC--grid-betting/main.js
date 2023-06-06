const odds = [2.27, 0.56, 0.0853] //odds in percentage, first goal
var odd = []
const zone = []
var multiplier = 0
var tiles = 10
var payout = 0.00

$(document).ready(function(){
    $("#js-grid").on( "click", function() {
        for (let i = 1; i < 4; i++) {
            zone[i] = $(".zone"+ i +":has(input:checked)")
            odd[i] = zone[i].length * odds[i - 1]
        }
        var sum = odd.reduce((a, b) => a + b, 0)
        multiplier = 1 / (sum / 100)
        if (multiplier === Infinity){
            multiplier = 0
        }
        $("#js-multiplier").text(multiplier.toFixed(2))
        tiles = 10 - $("td:has(input:checked)").length
        $("#js-tiles").text(tiles)
        if (tiles === 0){
            $("td>input:not(:checked)").prop( "disabled", true )
        }
        else{
            $("td>input").prop( "disabled", false )
        }
        calcPayout()
    })
    $("#js-bet").on( "change", function() {
        calcPayout()
    })

    function calcPayout() {
        payout = $("#js-bet").val() * multiplier
        $("#js-payout").text(payout.toFixed(2))
    }

    Swal.fire(
        'Welcome to grid betting!',
        'In grid betting, you can check a maximum of 10 tiles and guess from which position will scored. The fewer tiles you select the higher the number of points you can earn.',
    )
})