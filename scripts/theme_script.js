function init_dw_Scroll() {
    //Scrollable objects, first variable content holder, 2nd variable content
    //Columns Section 1
    var wndoA = new dw_scrollObj('column_A_content', 'column_A_container');
    var wndoB = new dw_scrollObj('column_B_content', 'column_B_container');
    var wndoC = new dw_scrollObj('column_C_content', 'column_C_container');
    var wndoD = new dw_scrollObj('column_D_content', 'column_D_container');
    //Columns Section 2
    var wndoE = new dw_scrollObj('column_E_content', 'column_E_container');
    var wndoF = new dw_scrollObj('column_F_content', 'column_F_container');
    var wndoG = new dw_scrollObj('column_G_content', 'column_G_container');
    var wndoH = new dw_scrollObj('column_H_content', 'column_H_container');
    //Columns Section 3
    var wndoI = new dw_scrollObj('column_I_content', 'column_I_container');
    var wndoJ = new dw_scrollObj('column_J_content', 'column_J_container');
    var wndoK = new dw_scrollObj('column_K_content', 'column_K_container');

    //Scroll Links Controllers
    //Columns Section 1
    wndoA.setUpScrollControls('scrollLinks_A');
    wndoB.setUpScrollControls('scrollLinks_B');
    wndoC.setUpScrollControls('scrollLinks_C');
    wndoD.setUpScrollControls('scrollLinks_D');
    //Columns Section 2
    wndoE.setUpScrollControls('scrollLinks_E');
    wndoF.setUpScrollControls('scrollLinks_F');
    wndoG.setUpScrollControls('scrollLinks_G');
    wndoH.setUpScrollControls('scrollLinks_H');
    //Columns Section 3
    wndoI.setUpScrollControls('scrollLinks_I');
    wndoJ.setUpScrollControls('scrollLinks_J');
    wndoK.setUpScrollControls('scrollLinks_K');
   

    // code for hiding scroll arrows Column A
    wndoA.on_scroll = wndoA.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_A');
        if (wndoA.y == -wndoA.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_A');
        if (wndoA.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column B
    wndoB.on_scroll = wndoB.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_B');
        if (wndoB.y == -wndoB.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_B');
        if (wndoB.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column C
    wndoC.on_scroll = wndoC.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_C');
        if (wndoC.y == -wndoC.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_C');
        if (wndoC.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column D
    wndoD.on_scroll = wndoD.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_D');
        if (wndoD.y == -wndoD.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_D');
        if (wndoD.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column E
    wndoE.on_scroll = wndoE.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_E');
        if (wndoE.y == -wndoE.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_E');
        if (wndoE.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column F
    wndoF.on_scroll = wndoF.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_F');
        if (wndoF.y == -wndoF.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_F');
        if (wndoF.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column G
    wndoG.on_scroll = wndoG.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_G');
        if (wndoG.y == -wndoG.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_G');
        if (wndoG.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column H
    wndoH.on_scroll = wndoH.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_H');
        if (wndoH.y == -wndoH.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_H');
        if (wndoH.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column I
    wndoI.on_scroll = wndoI.on_glidescroll = function () {

       // id for down arrow
        var el = document.getElementById('down_aro_I');
        /* 
            This line below was added to the original 
            template since this design needed an extra layer
            due to the sound javascript. 
            06242011 - Daza
                                                        */
        
        wndoI.maxY = ( wndoI.lyr.clientHeight / 2 ) + 20;

        if (wndoI.y == -wndoI.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_I');
        if (wndoI.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    //code for hiding scroll arrows Column J
    wndoJ.on_scroll = wndoJ.on_glidescroll = function () {
        
      // id for down arrow
        var el = document.getElementById('down_aro_J');
        /* 
            This line below was added to the original 
            template since this design needed an extra layer
            due to the sound javascript. 
            06242011 - Daza
                                                        */
        wndoJ.maxY = (wndoJ.lyr.clientHeight / 2 ) + 20;

        if (wndoJ.y == -wndoJ.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_J');
        if (wndoJ.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }
    
    //code for hiding scroll arrows Column K
    wndoK.on_scroll = wndoK.on_glidescroll = function () {
        // set id's to match your doc's (id attached to link surrounding image)
        var el = document.getElementById('down_aro_K');
        if (wndoK.y == -wndoK.maxY) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
      // id for up arrow
        el = document.getElementById('up_aro_K');
        if (wndoK.y == 0) {
            el.style.visibility = 'hidden';
        } else {
            el.style.visibility = 'visible';
        }
    }

    // invoke immediately
    wndoA.on_scroll(); 
    wndoB.on_scroll();
    wndoC.on_scroll();
    wndoD.on_scroll();

    wndoE.on_scroll();
    wndoF.on_scroll();
    wndoG.on_scroll();
    wndoH.on_scroll();

    wndoI.on_scroll();
    wndoJ.on_scroll();
    wndoK.on_scroll();  


}

//if code supported, link in the style sheet and call the init function onload
if ( dw_scrollObj.isSupported() ) {
    dw_Util.writeStyleSheet('css/scroll.css');    
    dw_Event.add( window, 'load', init_dw_Scroll);
}


//ShadowBox Controls
//initial configurations
Shadowbox.init({
    animate: true, 
    continuous: true
});

//the changing of classes for the shadowbox (to help with the color change)
jQuery(document).ready(function($){
    $("#column-A a").click(function () {
        $("#sb-content").removeClass();
        var cName = "A" ;
        $("#sb-content").addClass("content-"+ cName);
    });
    $("#column-B a").click(function () {
        $("#sb-content").removeClass();
        var cName = "B" ;
        $("#sb-content").addClass("content-"+ cName);
    });
    $("#column-C a").click(function () {
        $("#sb-content").removeClass();
        var cName = "C" ;
        $("#sb-content").addClass("content-"+ cName);
    });
    $("#column-D a").click(function () {
        $("#sb-content").removeClass();
        var cName = "D" ;
        $("#sb-content").addClass("content-"+ cName);
    });

     $("#column-E a").click(function () {
        $("#sb-content").removeClass();
        var cName = "E" ;
        $("#sb-content").addClass("content-"+ cName);
    });
    $("#column-F a").click(function () {
        $("#sb-content").removeClass();
        var cName = "F" ;
        $("#sb-content").addClass("content-"+ cName);
    });
    $("#column-G a").click(function () {
        $("#sb-content").removeClass();
        var cName = "G" ;
        $("#sb-content").addClass("content-"+ cName);
    });
    $("#column-H a").click(function () {
        $("#sb-content").removeClass();
        var cName = "H" ;
        $("#sb-content").addClass("content-"+ cName);
    });
});
