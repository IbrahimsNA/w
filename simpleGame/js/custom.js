$(document).ready(function(){
    var score = 0;
    var circlesRemaining = 4;
    var clicksRemaining = 10;
    var remaining = true;
    $("html").click(function(){
        if(clicksRemaining>0 && remaining == true){
            clicksRemaining--;
            $("label#clicks-remaining span").text(clicksRemaining);
        }
        if(clicksRemaining == 0 && circlesRemaining > 0){
            $("h2.lose").fadeIn();
            $(".lvl-1").fadeOut();
        }
    });
        $(".lvl-1-circle").click(function(){
            $(this).remove();//hide();//fadeOut();//hide
            score +=2;
            circlesRemaining--;
            $("label#score span").text(score);
            $("label#remaining span").text(circlesRemaining);
            if(score == 8){
                $(".lvl-1-win").fadeIn();
                remaining = false;
            }else if(score == 24){
                $(".lvl-2-win").fadeIn();
                remaining = false;
            }
        });


        var min = -50;
        var max = 120;
        var random;
        var random2;
        /* level One Function */

        function lvlOne(){
            setInterval(function(){
            
                var random = Math.floor(Math.random() * (max - min +1) + min);
                var random2 = Math.floor(Math.random() * (max - min +1) + min);
                    $(".lvl-1-circle:nth-child(1)").animate({
                        "left":random + "%",
                        "top":random2 + "%"
                    },1500 );
        
                    var random = Math.floor(Math.random() * (max - min +1) + min);
                    var random2 = Math.floor(Math.random() * (max - min +1) + min);
                        $(".lvl-1-circle:nth-child(2)").animate({
                            "left":random + "%",
                            "top":random2 + "%"
                        },1500 );
        
                        var random = Math.floor(Math.random() * (max - min +1) + min);
                        var random2 = Math.floor(Math.random() * (max - min +1) + min);
                            $(".lvl-1-circle:nth-child(3)").animate({
                                "left":random + "%",
                                "top":random2 + "%"
                            },1500 );
        
        
        
                        var random = Math.floor(Math.random() * (max - min +1) + min);
                                var random2 = Math.floor(Math.random() * (max - min +1) + min);
                                    $(".lvl-1-circle:nth-child(4)").animate({
                                        "left":random + "%",
                                        "top":random2 + "%"
                                    },1500 );
     
        
                },0);
        }
        lvlOne();
        $(".lvl-1-win span").click(function(){
            $(".lvl-1-win").hide();
            $(".lvl-2").fadeIn();
            remaining = true;
            circlesRemaining = 4;
            $("label#remaining span").text(circlesRemaining);
            lvlTwo();
        });
        /* End Level One Function */

        /* start Level Two function */
        function lvlTwo(){
            setInterval(function(){
            
                var random = Math.floor(Math.random() * (max - min +1) + min);
                var random2 = Math.floor(Math.random() * (max - min +1) + min);
                    $(".lvl-2-circle:nth-child(1)").animate({
                        "left":random + "%",
                        "top":random2 + "%"
                    },1500 );
        
                    var random = Math.floor(Math.random() * (max - min +1) + min);
                    var random2 = Math.floor(Math.random() * (max - min +1) + min);
                        $(".lvl-2-circle:nth-child(2)").animate({
                            "left":random + "%",
                            "top":random2 + "%"
                        },1500 );
        
                        var random = Math.floor(Math.random() * (max - min +1) + min);
                        var random2 = Math.floor(Math.random() * (max - min +1) + min);
                            $(".lvl-2-circle:nth-child(3)").animate({
                                "left":random + "%",
                                "top":random2 + "%"
                            },1500 );
        
        
        
                        var random = Math.floor(Math.random() * (max - min +1) + min);
                                var random2 = Math.floor(Math.random() * (max - min +1) + min);
                                    $(".lvl-2-circle:nth-child(4)").animate({
                                        "left":random + "%",
                                        "top":random2 + "%"
                                    },1500 );
     
        
                },0);
        }
        /* End Level Two function */

























    });
