alert('Welcome to Cartoon Recommendation. Enjoy!');

var icon = document.getElementById('icon');
icon.onclick = function(){
    document.body.classList.toggle('darktheme');
    if(document.body.classList.contains('darktheme')){
        icon.src ='sun.png';
    }else{
        icon.src = 'moon.png';
    }
}

// function myFunction() {
//     var popup = document.getElementById("myPopup");
//     popup.classList.toggle("show");
// }

var popup = document.getElementById("popup");
    popup.addEventListener("click", function() {
        var popupText = document.getElementById("myPopup");
        popupText.classList.toggle("show");
});

var cards = document.querySelectorAll(".card");
var info = document.getElementById("info");
var infoContent = document.getElementById("info-content");
var closeinfoButton = document.getElementById("close-info");
    var cartoonData = [
        { description: "Pororo loves hiding behind trees during hide-and-seek." },
        { description: "Blossom's personality ingredient is sugar." },
        { description: "Gumball has a unique animation style." },
        { description: "Finn and Marceline are both ambidextrous, which means they can use both their left and right hands easily." },
        { description: "Snoopy was almost named Sniffy." },
        { description: "Nobody calls Ice Bear by name, except for Ice Bear himself." },
        { description: "In an earlier script, Joy was named Optimism." },
    ];

    cards.forEach(function(card, index) {
        card.addEventListener("click", function() {
            var data = cartoonData[index];
            infoContent.innerHTML = "</h2><p>" + data.description + "</p>";
            info.style.display = "block";
        });
    });

    closeinfoButton.addEventListener("click", function() {
        info.style.display = "none";
    });
