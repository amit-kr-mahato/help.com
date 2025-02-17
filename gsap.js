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

