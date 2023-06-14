var leaders = [{
    name: "Umair Saeed",
    points: "175"
},
{
    name: "Thom Schneider",
    points: "165"
},
{
    name: "Zjuul Rovers",
    points: "160"
},
{
    name: "Jaap Wouters",
    points: "157"
},
{
    name: "Hristo Koltchakov",
    points: "151"
},
{
    name: "Thijs Veth",
    points: "149"
},
{
    name: "Brandon Jackson",
    points: "145"
}, ,
{
    name: "Johnny Okay",
    points: "130"
}, ,
{
    name: "Gunther Lewis",
    points: "126"
}, ,
{
    name: "Katey Wen",
    points: "125"
},
{
    name: "Bran Jacks",
    points: "125"
},
];
var x;

for (x in leaders) {
document.getElementById('board').innerHTML +=
    '<li class="rank">' +
    '<h2 class="name">' +
    leaders[x].name +
    '</h2>' +
    '<small class="pts">' +
    leaders[x].points +
    '</small></li>';
console.log(leaders[x]);


}