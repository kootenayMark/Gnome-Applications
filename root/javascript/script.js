/* 
created by Mark Trueman
created on 2019-10-18
*/


/* *************************************************

                    Gnome App

************************************************* */

/*
description:
Basic web application which displays random science fiction quotes and authors generated from an array. The array can be expanded with out affecting the application. The user can either choose an completely random selection, or choose an author from a drop down list of unique names generated from the array and have the app display a random quote from the selected author. In addition, 3 random background colours are generated with each selection. The random colours are applied to a picture of a Gnome changing  his hat, tunic, and pants colour.
*/

//Gnome app start
var quotes = [      // creates an array of objects
    {
    name: "Isaac Asimov",
    quote: "People think of education as something they can finish."
    },
    {
    name: "Arthur C. Clarke",
    quote: "Any sufficiently advanced technology is indistinguishable from magic."
    }, 
    {
    name: "Robert A. Heinlein",
    quote: "Progress isn't made by early risers. It's made by lazy men trying to find easier ways to do something."
    },
    {
    name: "Larry Niven",
    quote: "That's the thing about people who think they hate computers...What they really hate are lousy programmers."
    }, 
    {
    name: "Larry Niven",
    quote: "Species evolve to meet the environment. An intelligent species changes the environment to suit itself. As soon as a species becomes intelligent, it should stop evolving."
    }, 
    {
    name: "Larry Niven",
    quote: "A hookup to the basement computer formed the greater part of my desk. Learning how to use it had taken me several months."
    }, 
    {
    name: "Larry Niven",
    quote: "Friends don’t reprogram friends, even when they’re able."
    }, 
    {
    name: "Larry Niven",
    quote: "There is a technical, literary term for those who mistake the opinions and beliefs of characters in a novel for those of the author. The term is 'idiot'."
    }, 
    {
    name: "Arthur C. Clarke",
    quote: "I'm sure the universe is full of intelligent life. It's just been too intelligent to come here."
    },
    {
    name: "J.R.R. Tolkien",
    quote: "Not all those who wander are lost."
    },
    {
    name: "Isaac Asimov",
    quote: "I do not fear computers. I fear the lack of them."
    },
    
    {
    name: "Isaac Asimov",
    quote: "Part of the inhumanity of the computer is that, once it is competently programmed and working smoothly, it is completely honest."
    },
    {
    name: "Isaac Asimov",
    quote: "The saddest aspect of life right now is that science gathers knowledge faster than society gathers wisdom."
    },
    {
    name: "Isaac Asimov",
    quote: "Those people who think they know everything are a great annoyance to those of us who do."
    },
    {
    name: "Arthur C. Clarke",
    quote: "Two possibilities exist: either we are alone in the Universe or we are not. Both are equally terrifying."
    },
    {
    name: "Arthur C. Clarke",
    quote: "Magic's just science that we don't understand yet."
    },
    {
    name: "Arthur C. Clarke",
    quote: "This is the first age that's ever paid much attention to the future, which is a little ironic since we may not have one."
    },
    {
    name: "Arthur C. Clarke",
    quote: "Every revolutionary idea seems to evoke three stages of reaction. They may be summed up by the phrases: (1) It's completely impossible. (2) It's possible, but it's not worth doing. (3) I said it was a good idea all along."
    },
    {
    name: "Arthur C. Clarke",
    quote: "My favourite definition of an intellectual: 'Someone who has been educated beyond his/her intelligence."
    },
    
    {
    name: "Robert A. Heinlein",
    quote: "Never try to outstubborn a cat."
    },
    {
    name: "Robert A. Heinlein",
    quote: "Be wary of strong drink, it can make you shoot at the tax collector...and miss."
    },
    {
    name: "Robert A. Heinlein",
    quote: "Always listen to experts. They'll tell you what can't be done, and why. Then do it."
    },
    {
    name: "Robert A. Heinlein",
    quote: "The supreme irony of life is that hardly anyone gets out of it alive."
    },
    {
    name: "J.R.R. Tolkien",
    quote: "I don't know half of you half as well as I should like; and I like less than half of you half as well as you deserve."
    },
    {
    name: "J.R.R. Tolkien",
    quote:"If more of us valued food and cheer and song above hoarded gold, it would be a merrier world."
    },
    {
    name: "J.R.R. Tolkien",
    quote: "Never laugh at live dragons."
    },
    {
    name: "J.R.R. Tolkien",
    quote: "Courage is found in unlikely places."
    },
    {
    name: "J.R.R. Tolkien",
    quote: "It's the job that's never started as takes longest to finish."
    },
    {
    name: "J.R.R. Tolkien",
    quote: "Do not meddle in the affairs of wizards, for they are subtle and quick to anger."
    }
    ];

// selects elements by id and assigns to variable
var quoteBtn = document.querySelector('#quoteBtn'); 
var quoteAuthor = document.querySelector('#quoteAuthor');
var quote = document.querySelector('#quote');

// creates an array of characters for hex numbers
var hexNumbers = [0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F'];

// selects container for random background (this will be a gnome with random hat/pant colour in final product)
var bkgroundTop = document.querySelector('#top');
var bkgroundMid = document.querySelector('#mid');
var bkgroundBot = document.querySelector('#bottom');

// calls function on button click
quoteBtn.addEventListener('click', displayQuote);
quoteBtn.addEventListener('click', getHex);
authorBtn.addEventListener('click', getHex);
authorBtn.addEventListener('click', selectAuthor);

// creates dropdown menu from form
function dropDown(){
    var select = document.getElementById('selAuthor'); // gets element and assigns to variable
    var checkname = [];     // creates empty array

    for (value in quotes){  // iterates through quotes array 

        // checks 'checkname' array for name and if it's already in the array if it is,
        // goes to next object, if not, executes rest of loop
        if (checkname.includes(quotes[value].name) === false){ 
            var newOption = document.createElement('option'); // creates 'option' element 
            
            // retrieves author name from object and adds to value attribute
            newOption.value = quotes[value].name; 

            // retrieves author name from object and adds text to innerHTML
            newOption.innerHTML = quotes[value].name;
            select.appendChild(newOption); // appends option element to select element
            checkname.push(quotes[value].name); // adds unique author object to array
        }    
    } 
}
dropDown(); // calls function

// displays random quote on button click
function displayQuote(){

    // generates random number between 0-0.99, multiplies by the array length, then
    // rounds it down (generates an integer between 0 and the number of objects in the array)
    var number = Math.floor(Math.random()*quotes.length);
    quoteAuthor.innerHTML = quotes[number].name; // uses random number as the index for
    quote.innerHTML = quotes[number].quote;      // the array and inserts into HTML element
}                                                

// displays random quote by author chosen by user from drop down menu
function selectAuthor(){
    // gets selected value (author name) from drop down on button click 
    var selectedAuthor = document.getElementById('selAuthor').value;
    var selectedAuthorQuotes = []   //creates empty array to hold objects filtered by name
    for (item in quotes){    // iterates through 'quotes' array
        // checks if name property matches user selected name
        if (quotes[item].name === selectedAuthor){
            selectedAuthorQuotes.push(quotes[item]); // if true appends object to array
        
    // displays random quote from filtered array
    var number = Math.floor(Math.random()*selectedAuthorQuotes.length); // as above
        quoteAuthor.innerHTML = selectedAuthorQuotes[number].name;
        quote.innerHTML = selectedAuthorQuotes[number].quote;
        }
}
}

// generate random hex color
function getHex(){
    let hexColTop = '#'; // creates variable
    let hexColMid = '#'; // creates variable
    let hexColBot = '#'; // creates variable

    // loops generating 6 random characters
    for(let i = 0; i<6; i++){
        let randomNum = Math.floor(Math.random() * hexNumbers.length);
        // appends each number to variable
        hexColTop += hexNumbers[randomNum]; 
    }
    for(let i = 0; i<6; i++){
        let randomNum = Math.floor(Math.random() * hexNumbers.length);
        // appends each number to variable
        hexColMid += hexNumbers[randomNum]; 
    }
    for(let i = 0; i<6; i++){
        let randomNum = Math.floor(Math.random() * hexNumbers.length);
        // appends each number to variable
        hexColBot += hexNumbers[randomNum]; 
    }
    bkgroundTop.style.backgroundColor = hexColTop; // changes background color
    bkgroundMid.style.backgroundColor = hexColMid; // changes background color
    bkgroundBot.style.backgroundColor = hexColBot; // changes background color
}

// Gnome app finish

// Dynamic Date

function showTime(){
    var dt = new Date();
    document.getElementById("#datetime").innerHTML = dt.toLocaleString();
}
showTime();
setInterval(showTime, 1000);

// end dynamic date

/* uses lity library to create a light box for larger view of map a work around using a blank img was used to instantiate the div with a defined size. The tiles seem to be slow loading in the larger view.
*/

function mapContainer(){
    var lightbox = lity(document.getElementById('mapid'));
    $(lightbox).on('click','[data-lightbox]',lity);  
}

// end of lightbox 

// begin animated Gnome

var tID; // clear the setInterval() on mouseout
function stopAnimate() {
    clearInterval(tID);
} 

// uses single image "sprite" to animate an image using just a single call by "slicing" the image into multiple frames"
function animateScript() {
    document.getElementById("gnomeImage").style.backgroundPosition = 
`-48px 0px`; // gets image and positions it

    var    position = 48; //start position for the image slicer
    const  interval = 150; //150 ms of interval for the setInterval()

    tID = setInterval ( () => {
        document.getElementById("gnomeImage").style.backgroundPosition = 
    `-${position}px 0px`; //we use the ES6 template literal to insert the variable "position"
    
    // loop through images slices
    if (position < 576){ 
        position = position + 48;
    }
    //we increment the position by 48 each time
    else{ 
        position = 48; 
    }
    //reset the position to 48px, once position exceeds 576px
    }
    , interval ); //end of setInterval
} //end of animateScript

// end animated gnome

// custom mouse pointer

//works until page is scrolled (the custom pointer stalls where it is)

// var cont = document.getElementById('wrapper'); // selects element 'wrapper'
// cont.style.cursor ='none'; // hides default pointer
// cont.onmousemove = applyCustomPointer; //calls function onmousemove event

// var customPointer = document.getElementById('customPointer'); //gets customPointer img element

// // locates custom pointer where default pointer is
// function applyCustomPointer (event) {
//     customPointer.style.left = event.clientX - (customPointer.offsetWidth / 2 + 30) + 'px';
//     customPointer.style.top = event.clientY - (customPointer.offsetHeight / 2 - 20) + 'px';
// }


// 5 element styles
var currentPage = document.querySelector('.current_page');
currentPage.setAttribute('style', 'color: black; background: #69bedd');


var commentBkg = document.querySelectorAll('aside div p');
commentBkg.setAttribute('style', 'background-color: #cfe8ef;font-style: italic; font-size: 0.7rem; line-height: 0.8rem;padding:0.5rem;')

// var mapButton = document.querySelector('#about > button:nth-child(2)');

// mapButton.style.backgroundColor = '#85c7de';
