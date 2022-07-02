class GradientAnimation {
    constructor() {
      this.cnv        = document.querySelector(`canvas`);
      this.ctx        = this.cnv.getContext(`2d`);
  
      this.circlesNum = 10;
      this.minRadius  = 400;
      this.maxRadius  = 400;
      this.speed      = .010;
      
      (window.onresize = () => {
        this.setCanvasSize();
        this.createCircles();
      })();
      this.drawAnimation();
  
    }
    setCanvasSize() {
      this.w = this.cnv.width  = innerWidth * devicePixelRatio;
      this.h = this.cnv.height = innerHeight * devicePixelRatio;
      this.ctx.scale(devicePixelRatio, devicePixelRatio)
    }
    createCircles() {
      this.circles = [];
      for (let i = 0 ; i < this.circlesNum ; ++i) {
        this.circles.push(new Circle(this.w, this.h, this.minRadius, this.maxRadius));
      }
    }
    drawCircles() {
      this.circles.forEach(circle => circle.draw(this.ctx, this.speed));
    }
    clearCanvas() {
      this.ctx.clearRect(0, 0, this.w, this.h); 
    }
    drawAnimation() {
      this.clearCanvas();
      this.drawCircles();
      window.requestAnimationFrame(() => this.drawAnimation());
    }
  }
  
  class Circle {
    constructor(w, h, minR, maxR) {
      this.x = Math.random() * w;
      this.y = Math.random() * h;
      this.angle  = Math.random() * Math.PI * 2;
      this.radius = Math.random() * (maxR - minR) + minR;
      this.firstColor  = `hsla(${Math.random() * 360}, 40%, 40%, 1)`;
      this.secondColor = `hsla(${Math.random() * 360}, 40%, 40%, 1)`;
    }
    draw(ctx, speed) {
      this.angle += speed;
      const x = this.x + Math.cos(this.angle) * 200;
      const y = this.y + Math.sin(this.angle) * 200;
      const gradient = ctx.createRadialGradient(x, y, 0, x, y, this.radius);
            gradient.addColorStop(0, this.firstColor);
            gradient.addColorStop(1, this.secondColor);
  
      ctx.globalCompositeOperation = `overlay`;
      ctx.fillStyle = gradient;
      ctx.beginPath();
      ctx.arc(x, y, this.radius, 0, Math.PI * 2);
      ctx.fill(); 
    }
  }
  
  window.onload = () => {
    new GradientAnimation();
  }





// $(document).ready(function() {
//     // Inline popups
//     $('.popup').magnificPopup({
//       delegate: 'a',
//       removalDelay: 500, 
//       callbacks: {
//         beforeOpen: function() {
//           this.st.mainClass = this.st.el.attr('data-effect');
//         }
//       },
//       midClick: true,
//     });
// });



// popup 
$(".popup-with-zoom-anim").magnificPopup({
  type: "inline",

  fixedContentPos: false,
  fixedBgPos: true,

  overflowY: "auto",

  preloader: false,

  midClick: true,
  removalDelay: 300,
  mainClass: "my-mfp-zoom-in",
});






let copy = document.querySelector(".copy");
copy.querySelector("button").addEventListener("click",function(){
  let input = copy.querySelector("input.coupon_text");
  input.select();
  document.execCommand("copy");
  copy.classList.add("copy_active");
  window.getSelection().removeAllRanges();
  setTimeout(function(){
    copy.classList.remove("copy_active")
  }, 2500)
});