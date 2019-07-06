$(function () {

    $(document).ready(function () {

        var mainCtr = $("#main-ctr"),
                lEye = $("#l-eye"),
                rEye = $("#r-eye"),
                mouth = $("#mouth"),
                hpLove = $("#hp-love"),
                button = $("button");

        // animatable var

        var wkREye = "#wk-r-eye",
                wkLEye = "#wk-l-eye",
                smMouth1 = "#sm-mouth-1",
                smMouth2 = "#sm-mouth-2",
                smMouth3 = "#sm-mouth-3",
                stREye = "#st-r-eye",
                stLEye = "#st-l-eye",
                rgREye = "#rg-r-eye",
                rgLEye = "#rg-l-eye",
                hgREye = "#hg-r-eye",
                hgLEye = "#hg-l-eye",
                stMouth = "#st-mouth",
                rgMouth = "#rg-mouth";



        var tl = new TimelineMax({});

        function done() {
            $('#main-ctr').hide();
            $('#smileRotate').show();
            smilyRotate();
        }



        tl.set(hpLove, {
            opacity: 0,
            scale: .8
        });
        MorphSVGPlugin.convertToPath("circle");

        // functions

        // rage
        function raging() {
            tl
                    .to(lEye, .3, {
                        delay: .3,
                        morphSVG: rgLEye,
                        strokeWidth: 3
                    }, "-=.3")
                    .to(rEye, .3, {
                        morphSVG: rgREye,
                        strokeWidth: 3
                    }, "-=.3")
                    .to(mouth, .3, {
                        morphSVG: rgMouth
                    }, "-=.3")
                    .to([lEye, rEye, mouth], .3, {
                        y: "-15px"
                    })
                    .to([lEye, rEye, mouth], .3, {
                        delay: .6,
                        y: "15px"
                    })
                    .to([lEye, rEye, mouth], .3, {
                        y: "0"
                    }, "-=.15")
//                    .to(lEye, .3, {
//                        morphSVG: {
//                            shape: stLEye,
//                            shapeIndex: 0
//                        },
//                        strokeWidth: 5
//                    })
//                    .to(rEye, .3, {
//                        morphSVG: stREye,
//                        strokeWidth: 5
//                    }, "-=.3")
                    .to([lEye, rEye], .15, {
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })



        }

        // happy
        function happy() {
            tl
                    .to(lEye, .3, {
                        morphSVG: wkLEye,
                        strokeWidth: 3
                    })
                    .to(rEye, .3, {
                        morphSVG: wkREye,
                        strokeWidth: 3
                    }, "-=.3")
                    .to(mouth, .3, {
                        morphSVG: smMouth3
                    }, "-=.3")
                    .to([lEye, rEye, mouth], .3, {
                        delay: .6,
                        x: "-5px"
                    })
                    .to(lEye, .3, {
                        morphSVG: hgLEye,
                        strokeWidth: 5
                    }, "-=.3")
                    .to(lEye, .15, {
                        delay: .6,
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to(lEye, .15, {
                        scaleY: 1
                    })
                    .to(hpLove, .3, {
                        opacity: 1,
                        x: "-7.5px"
                    }, "-=.3")
                    .to(hpLove, .3, {
                        opacity: 0,
                        y: "-7.5px"
                    }, "-=.15")
                    .to(lEye, .3, {
                        delay: .6,
                        morphSVG: wkLEye,
                        strokeWidth: 3
                    }, "-=.3")
                    .to([lEye, rEye, mouth], .3, {
                        delay: .6,
                        x: "0px",
                    })
                    .set(hpLove, {
                        x: "0px",
                        y: "0px"
                    })
        }

        // smAnim

        function smAnim() {
            tl
                    .to(rEye, .3, {
                        delay: .6,
                        morphSVG: hgREye,
                        strokeWidth: 5
                    })
                    .to(lEye, .3, {
                        morphSVG: hgLEye,
                        strokeWidth: 5
                    }, "-=.3")
                    .to(mouth, .3, {
                        morphSVG: smMouth1
                    }, "-=.3")
                    .to([lEye, rEye], .15, {
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })
        }

        // wink
        function wink() {
            tl
                    .to(lEye, .3, {
                        morphSVG: hgLEye,
                        strokeWidth: 5
                    })
                    .to(rEye, .3, {
                        morphSVG: wkREye,
                        strokeWidth: 3
                    }, "-=.3")
                    .to(mouth, .3, {
                        morphSVG: smMouth1
                    }, "-=.3")
                    .to(mouth, .3, {
                        morphSVG: smMouth2
                    }, "-=.3")
        }

        // standardAnim
        function standardAnim() {
            tl
                    .to([lEye, rEye], .15, {
                        delay: .6,
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })
                    .to([lEye, rEye, mouth], .3, {
                        x: "-5px"
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })
                    .to([lEye, rEye, mouth], .3, {
                        x: "10px"
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 0, transformOrigin: "center center",
                    })
                    .to([lEye, rEye], .15, {
                        scaleY: 1
                    })
                    .to([lEye, rEye, mouth], .3, {
                        x: "0px"
                    })
        }



        // standard
        function standard() {
            tl
                    .to(lEye, .3, {
                        morphSVG: stLEye,
                        strokeWidth: 5
                    })
                    .to(rEye, .3, {
                        morphSVG: stREye,
                        strokeWidth: 5
                    }, "-=.3")
                    .to(mouth, .3, {
                        morphSVG: stMouth
                    }, "-=.3")
        }



        standardAnim();


//        var defaultInterval = window.setInterval(function () {
//            standard();
//            smAnim();
//            standardAnim();
//            standard();
//
//        }, 5000);

        button.on("click", function () {
            var className = this.id;
            mainCtr.attr("class", className);

            $(this).addClass("active").siblings().removeClass("active");

            if (mainCtr.hasClass("average")) {
                standard();
                standardAnim();
            }

            if (mainCtr.hasClass("wink")) {
                wink();
                smAnim();
            }

            if (mainCtr.hasClass("happy")) {
                happy();
                smAnim();
            }

            if (mainCtr.hasClass("rage")) {
                raging();
            }
        });

    });


    function smilyRotate() {


        var mainCtr = $("#main-ctr"),
                hello = $(".hello"),
                eyeLeft = $("#eye-left"),
                eyeRight = $("#eye-right"),
                eyeToLeft = $("#eye-to-left"),
                eyeToRight = $("#eye-to-right"),
                wink = $("#wink"),
                smileUp = $("#smile-up"),
                smileDown = $("#smile-down"),
                smile = $("#smile");

        var tl = new TimelineMax({
            repeat: 0,
            repeatDelay: .3,
            delay: .3
        });

        TweenMax.set([mainCtr, hello], {
            opacity: 0
        });

        tl
                .to(mainCtr, .3, {
                    opacity: 1
                })
                .to(smileDown, .3, {
                    morphSVG: "#smile-up"
                })
                .to(smile, .3, {
                    rotation: -30,
                    transformOrigin: "center center",
                    ease: Circ.ease
                })
                .to(smile, .9, {
                    rotation: 900,
                    transformOrigin: "center center",
                    ease: Circ.easeInOut
                })
                .to(eyeLeft, .3, {
                    morphSVG: "#eye-to-left",
                    ease: Power2.ease
                }, "-=.3")
                .to(eyeRight, .3, {
                    morphSVG: "#eye-to-right",
                    ease: Power2.ease
                }, "-=.3")
                .to(eyeRight, .1, {
                    scaleY: .25,
                    transformOrigin: "center center"
                })
                .to(eyeRight, .1, {
                    scaleY: 1
                })
                .to(hello, .3, {
                    opacity: 1
                }, "-=.3")
                .to(mainCtr, .6, {
                    delay: 1,
                    opacity: 0
                })


    }


});