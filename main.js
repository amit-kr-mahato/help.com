



let moreCategories = document.getElementById("moreCategories");
let isShow = false;

function toggleCategories(event) {
    event.preventDefault(); // Prevent the default anchor click behavior
    if (isShow) {
        moreCategories.style.display = "none";
        isShow = false;
    } else {
        moreCategories.style.display = "block";
        isShow = true;
    }
}


// --------------------------show more content---------------------------------
document.addEventListener('DOMContentLoaded', function(event) {
    event.preventDefault();
    const readMoreLink = document.querySelector('.read-more');
    const fullParagraph = document.querySelector('.full-paragraph');
  
    readMoreLink.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default anchor behavior
      fullParagraph.style.display = fullParagraph.style.display === 'none' ? 'block' : 'none';
      readMoreLink.textContent = fullParagraph.style.display === 'block' ? 'Read less' : 'Read more';
    });
  });
  

//  ===================================== image slider========================================
var nextBtn = document.querySelector('.next'),
    prevBtn = document.querySelector('.prev'),
    carousel = document.querySelector('.carousel'),
    list = document.querySelector('.list'), 
    item = document.querySelectorAll('.item'),
    runningTime = document.querySelector('.carousel .timeRunning') 

let timeRunning = 3000 
let timeAutoNext = 4000

nextBtn.onclick = function(){
    showSlider('next')
}

prevBtn.onclick = function(){
    showSlider('prev')
}

let runTimeOut 

let runNextAuto = setTimeout(() => {
    nextBtn.click()
}, timeAutoNext)


function resetTimeAnimation() {
    runningTime.style.animation = 'none'
    runningTime.offsetHeight /* trigger reflow */
    runningTime.style.animation = null 
    runningTime.style.animation = 'runningTime 7s linear 1 forwards'
}


function showSlider(type) {
    let sliderItemsDom = list.querySelectorAll('.carousel .list .item')
    if(type === 'next'){
        list.appendChild(sliderItemsDom[0])
        carousel.classList.add('next')
    } else{
        list.prepend(sliderItemsDom[sliderItemsDom.length - 1])
        carousel.classList.add('prev')
    }

    clearTimeout(runTimeOut)

    runTimeOut = setTimeout( () => {
        carousel.classList.remove('next')
        carousel.classList.remove('prev')
    }, timeRunning)


    clearTimeout(runNextAuto)
    runNextAuto = setTimeout(() => {
        nextBtn.click()
    }, timeAutoNext)

    resetTimeAnimation() // Reset the running time animation
}

// Start the initial animation 
resetTimeAnimation()

// ====================password field show and hide===========================

Shery.mouseFollower();
Shery.makeMagnet(".magnet");

gsap.to(".fleftem", {
  scrollTrigger: {
    trigger: "#featureimg",
    pin: true,
    start: "top top",
    end: "bottom bottom",
    endTrigger: ".last",
    scrub: 1,
  },
  
});



