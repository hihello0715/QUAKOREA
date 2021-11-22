function numberCounter(target_frame, target_number) {
    this.count = 0;
    this.diff = 0;
    this.target_count = parseInt(target_number);
    this.target_frame = document.getElementById(target_frame);
    this.timer = null;
    this.counter();
};
numberCounter.prototype.counter = function () {
    var self = this;
    this.diff = this.target_count - this.count;

    if (this.diff > 0) {
        self.count += Math.ceil(this.diff / 5);
    }

    this.target_frame.innerHTML = this.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');

    if (this.count < this.target_count) {
        this.timer = setTimeout(function () {
            self.counter();
        }, 300);
    } else {
        clearTimeout(this.timer);
    }
};

new numberCounter("counter1", 7);
new numberCounter("counter2", 5);
new numberCounter("counter3", 1);
new numberCounter("counter4", 7);
new numberCounter("counter5", 5);



var iw = window.innerWidth;
if (iw < 641) {
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });

    var swiper = new Swiper(".set_box", {
        slidesPerView: 3,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
};
