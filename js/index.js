
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

const heroImages = document.querySelectorAll('.hero-images img');
const heroImages2 = document.querySelectorAll('.hero-img-bx-2 img');


class Carousel{

    constructor(images){
        this.count = 0;
        this.images = images;
    }


    prev(){

        if(this.count <= 0){
            this.count = this.images.length-1;
        }

        else this.count--;   
        
        this.images.forEach((image,index) =>{

            this.count === index ? image.style.display = "flex" : image.style.display = "none";
        })

    }

    next(){

        if(this.count === this.images.length - 1){
            this.count = 0;
        }

        else if(this.count <= this.images.length-1){
            this.count++;   
        }
        
        
        this.images.forEach((image,index) =>{
            
            this.count === index ? image.style.display = "flex" : image.style.display = "none"; 
        })
    }
}

const carousel = new Carousel(heroImages);
const carousel2 = new Carousel(heroImages2);

prevBtn.addEventListener('click',carousel.prev.bind(carousel));
prevBtn.addEventListener('click',carousel2.prev.bind(carousel2));

nextBtn.addEventListener('click',carousel.next.bind(carousel));
nextBtn.addEventListener('click',carousel2.next.bind(carousel2));