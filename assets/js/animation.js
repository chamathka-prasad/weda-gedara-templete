// menu Scrool
const menuItems = document.querySelectorAll('.menu-item');
gsap.registerPlugin(ScrollTrigger);
function updateActiveState() {
  const scrollPosition = window.scrollY;
  menuItems.forEach(item => {
    const targetId = item.getAttribute('data-target');
    const targetSection = document.getElementById(targetId);
    if (targetSection && targetSection.offsetTop <= scrollPosition && targetSection.offsetTop + targetSection.offsetHeight > scrollPosition) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}
window.addEventListener('scroll', updateActiveState);
menuItems.forEach(item => {
  item.addEventListener('click', function (event) {
    event.preventDefault();
    const targetId = this.getAttribute('data-target');
    const targetSection = document.getElementById(targetId);
    gsap.to(window, { duration: 1, scrollTo: targetSection });
  });
});


// Screen Width
var screen_width = window.screen.width;


// mousemove animation

var $circle = $('.mouse-circle-mover'),
    $follow = $('.mouse-circle-mover-follow');

function moveCircle(e) {
    TweenLite.to($circle, 1, {
        x: e.clientX,
        y: e.clientY
    });
    TweenLite.to($follow, 1.5, {
        x: e.clientX,
        y: e.clientY
    });
}

$(window).on('mousemove', moveCircle);


// Button Hover Animation
var btn_hover_all = document.querySelectorAll(".ch-btn-animated");

if (btn_hover_all) {
    for (const ele of btn_hover_all) {
        var newSpan = document.createElement("span");
        ele.appendChild(newSpan);
    }

    $('.ch-btn-animated').on('mouseenter', function (e) {
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;

        $(this).find('span').css({
            top: y,
            left: x,
        });
    });

    $('.ch-btn-animated').on('mouseout', function (e) {
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;

        $(this).find('span').css({
            top: y,
            left: x,
        });
    });
}

// simpleParallax activation

var image = document.getElementsByClassName('imageParallax');
new simpleParallax(image, {
    delay: .6,
    transition: 'cubic-bezier(0,0,0,1)'
});


var image = document.getElementsByClassName('imageParallax2');
new simpleParallax(image, {
    delay: .6,
    transition: 'cubic-bezier(0,0,0,1)',
    orientation: 'right'
});
var image = document.getElementsByClassName('imageParallax3');
new simpleParallax(image, {
    delay: .6,
    transition: 'cubic-bezier(0,0,0,1)',
    orientation: 'left'
});
var image = document.getElementsByClassName('imageParallax4');
new simpleParallax(image, {
    delay: .6,
    transition: 'cubic-bezier(0,0,0,1)',
    orientation: 'down'
});


//  hover-active
let rightItems = document.querySelectorAll('.ch-service-left-wrap .item');
let leftItems = document.querySelectorAll('.service-image-group .service-image');

rightItems.forEach((rightItem, index) => {
    rightItem.addEventListener('mouseenter', function () {
        handleHover(rightItem, leftItems[index]);
    });
});

function handleHover(rightItem, leftItem) {
    rightItems.forEach(item => {
        item.classList.remove('active');
        item.classList.add('item');
    });
    leftItems.forEach(item => {
        item.classList.remove('active');
        item.classList.add('service-image');
    });
    rightItem.classList.add('active');
    leftItem.classList.add('active');
}


$(window).on('load', function () {
    splitText();
});


/*------------------------------------------
 My ch-site-split text
-------------------------------------------*/
function splitText() {
    $(".site-split-text").each(function (index, el) {
        if (!el) return;

        gsap.registerPlugin(SplitText);
        var splitConfig = {
            type: "lines,words,chars",
            linesClass: "split-line"
        };
        el.split = new SplitText(el, splitConfig);
        gsap.set(el, { perspective: 100 });

        var splitClasses = ['ch-split-in-fade', 'ch-split-in-right', 'ch-split-in-left', 'ch-split-in-up', 'ch-split-in-down', 'ch-split-in-rotate', 'ch-split-in-scale'];
        splitClasses.forEach(function(className) {
            if ($(el).hasClass(className)) {
                var splitSettings = { opacity: 0 };
                switch (className) {
                    case 'ch-split-in-right':
                        splitSettings.x = "70";
                        break;
                    case 'ch-split-in-left':
                        splitSettings.x = "-50";
                        splitSettings.ease = "circ.out";
                        break;
                    case 'ch-split-in-up':
                        splitSettings.y = "80";
                        splitSettings.ease = "circ.out";
                        break;
                    case 'ch-split-in-down':
                        splitSettings.y = "-80";
                        splitSettings.ease = "circ.out";
                        break;
                    default:
                        splitSettings.ease = "Back.easeOut";
                }
                gsap.set(el.split.chars, splitSettings);
            }
        });

        el.anim = gsap.to(el.split.chars, {
            scrollTrigger: {
                trigger: el,
                start: "top 100%"
            },
            x: "0",
            y: "0",
            rotateX: "0",
            scale: 1,
            opacity: 1,
            duration: 0.4,
            stagger: 0.06
        });
    });
}


gsap.registerPlugin(ScrollTrigger);
function smoothScroll(container) {
    gsap.to(container, {
        y: () => -(container.scrollHeight - document.documentElement.clientHeight),
        ease: "none",
        scrollTrigger: {
            trigger: container,
            start: "top top",
            end: () => "+=" + (container.scrollHeight - document.documentElement.clientHeight),
            scrub: 1,
            invalidateOnRefresh: true
        }
    });
}



/* imager scroll animation */
let new_class_name_elements = document.querySelectorAll(".new_img-animet");
new_class_name_elements.forEach((new_class_name_element) => {
    let image = new_class_name_element.querySelector("img");
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: new_class_name_element,
            start: "top 50%",
        }
    });

    tl.set(new_class_name_element, { autoAlpha: 1 });
    tl.from(new_class_name_element, 1.5, {
        xPercent: -100,
        ease: Power2.out
    });
    tl.from(image, 1.5, {
        xPercent: 100,
        scale: 1.3,
        delay: -1.5,
        ease: Power2.out
    });
});


