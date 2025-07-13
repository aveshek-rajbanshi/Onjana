const throttleFunction = (func, delay) =>{
   let prev = 0;
   return (...args) =>{
     const now = new Date().getTime();
     if(now - prev > delay){
        prev = now;
        return func(...args);
     }
   } 
} 

const images = [
    "Images/item1.jpeg",
    "Images/item2.jpg",
    "Images/item3.jpg",
    "Images/item4.jpg",
    "Images/item5.jpg",
    "Images/item6.jpg",
    "Images/item7.jpg",
];

document.querySelector("#imgSurface").addEventListener("mousemove", throttleFunction( (e)=>{
    let div = document.createElement("div");
    div.classList.add("imgDiv");

    div.style.left = e.clientX + "px";
    div.style.top = e.clientY + "px";

    let randomImage = Math.floor(Math.random() * images.length);
    let img = document.createElement("img");
    img.setAttribute("src", images[randomImage]);
    div.appendChild(img); // Add the image to the div

    document.body.appendChild(div);

    
    // Animation
let tl = gsap.timeline();
tl.fromTo(div,{
    y: "100%", 
    scale: 0.8,
    rotation:-10,
    opacity:0
},{
    y: "0%",
    scale:1,
    rotation:0,
    opacity:1,
    duration: 0.6,
    ease: "power3.out"
});

tl.to(div,{
   y: "-100%",
   rotation:10,
   opacity:0,
   duration: 0.6,
   ease:"power2.in",
   delay:1,
   onComplete: () => div.remove()
});

},250));

