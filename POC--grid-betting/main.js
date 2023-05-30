const odds = [2.27, 0.56, 0.0853] //odds in percentage, first goal
var odd = []
const zone = []
var multiplier

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
    })
})