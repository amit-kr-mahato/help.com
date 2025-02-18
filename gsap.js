
gsap.from("#promo #promo-1",{
    scale:0,
    duration:1,
    delay:1,
   
})

gsap.from("#promo #promo-2",{
    scale:0,
    duration:1,
    delay:2,
   
})

gsap.from("#promo #promo-3",{
    scale:0,
    duration:1,
    delay:3,
   
})



window.addEventListener("wheel",function(dets){
    if(dets.deltaY>0){
        gsap.to(".testimonial-card",{
            transform:'translateX(-200%)',
            duration:2,
            repeat:-1,
            ease:"none"
        })
        
    }else{
        gsap.to(".testimonial-card",{
            transform:'translateX(0%)',
            duration:2,
            repeat:-1,
            ease:"none"
    })
    }
})

