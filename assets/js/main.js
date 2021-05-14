// Gumby is ready to go
Gumby.ready(function() {
	Gumby.log('Gumby is ready to go...', Gumby.dump());

	// placeholder polyfil
	if(Gumby.isOldie || Gumby.$dom.find('html').hasClass('ie9')) {
		$('input, textarea').placeholder();
	}

	// skip link and toggle on one element
	// when the skip link completes, trigger the switch
	$('#skip-switch').on('gumby.onComplete', function() {
		$(this).trigger('gumby.trigger');
	});

// Oldie document loaded
}).oldie(function() {
	Gumby.warn("This is an oldie browser...");

// Touch devices loaded
}).touch(function() {
	Gumby.log("This is a touch enabled device...");
});


// Document ready
jQuery(function ($) {


    /* Quicklinks */
    var $quicklinks = $('.quicklinks');

    /* Banners */
    var $mainBanner = $('#UM-highlights');
    var $facultyBanner = $('#UM-faculty');
    
    /* Carousels */
    var $commercialization = $('#commercialization');
    var $research = $('#research');

    /* Accordions */
    var $accordion = $('.accordion');

    /* Map */
    var $map = $('.map');

    /* Mobile menu button */
    var $mobileBtn = $('.mobile-btn');
    var $mobileMainNav = $('.nav--main--mobile');

    /**/
    var $staff = $('.staffcont');


    /* News & Events */
    var $NewsEvents = $('.newsEvents-scroll');

    /* Fixed navigation */
    var sideNav = $.jPanelMenu();

    /* Initiate notification session */
    var notification = new toggleSession('.notification', 'preview');

    /* Initiate Staff Directory*/
    var staffddl = new GenerateStaffDDL();
    var staffcont = new GenerateStaff();

    /* Initiate banners */
    $mainBanner.owlCarousel({
        themeClass: 'owl-highlights',
        items: 1,
        autoplay: true,
        autoplayTimeout: 4500,
        autoplayHoverPause: true,
        loop: true,
        smartSpeed: 1000
        //autoHeight: true
    });

    $facultyBanner.owlCarousel({
        themeClass: 'owl-faculty',
        items: 1,
        dots: false,
        nav: true,
        navRewind: false,
        loop: false,
        navText: ['<i class="icon-left-open"></i>', '<i class="icon-right-open"></i>']
        //autoHeight: true
    });
	
	$commercialization.owlCarousel({
        themeClass: 'owl-commercialization',
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    },
        dots: false,
        nav: false,
        navRewind: false,
        loop: false,
        margin: 20,
        navText: ['<i class="icon-left-open"></i>', '<i class="icon-right-open"></i>']
        //autoHeight: true
    });

	$research.owlCarousel({
        themeClass: 'owl-research',
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    },
        dots: false,
        nav: true,
        navRewind: false,
        loop: false,
        margin: 10,
        navText: ['<i class="icon-left-open"></i>', '<i class="icon-right-open"></i>']
        //autoHeight: true
    });

    // $facultyBanner.on('changed.owl.carousel', function() {
    // 	setTimeout(function() {
    //      sideNav.resetScroller();
    //   }, 600);   
    // });

    /* Initiate siderbar navigation */
    // Must be initiated after banners
    sideNav.init();

    /* Initiate mobile global navi */
    $.UMglobalNav();

    /* Initiate select box */
    $.UMselectbox();

    /* Initiate quicklinks */
    if ($quicklinks.length > 0) {
        $.UMquicklinks();
    }

    /* Initiate course pin it */
    $.UMpinIt();

    /* Initiate standard accordion */
    if ($accordion.length > 0) {
        $accordion.UMaccordion();
    }

    /* Initiate mobile navigation accordion */
    $mobileMainNav.UMaccordion({
        containerElem: '.nav--main--mobile',
        clickElem: '.nav__list',
        contentElem: '.nav__sub',
        defaultActive: false,
        icon: false
    });

    /* Initiate map */
    if ($map.length !== 0) {
        (function () {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?sensor=true&callback=$.UMmap';
            document.body.appendChild(script);
        })();
    }

    /* Calculate landing's news & events tiles */
    calculateWidth('.newsEvents-wrapper', '.newsEvents');

    /* Initiate news & events scroller - landing */
    $NewsEvents.scroller({
        horizontal: true
    })

    /* Global listeners */

    /* Mobile menu button listener */
    $mobileBtn.on(Gumby.click, function (e) {
        if ($mobileMainNav.is(':animated')) {
            return 0;
        } else {
            $(this).toggleClass('is-active');
            $mobileMainNav.slideToggle();
        }
    });

    /* Mobile search button listener */
    $('.search-btn').on(Gumby.click, function (e) {
        $('.search--mobile').toggleClass('is-active');
    });

    $('.btn-popup').on(Gumby.click, function (e) {
        $(this).siblings('.quicklinks__popup').addClass('is-active');
    });

    $(window).resize(function (e) {
        $NewsEvents.scroller("reset");
    })

    $('.notification__close').on(Gumby.click, function (e) {
        $('.notification').slideUp();
        window.sessionStorage.setItem("preview", true);
    });

    $("ul.rddlList li.rddlItem").each(function () {
        $(this).click(function () {
            var text = $(this).text();
            if (text.toLowerCase().indexOf("admission") > 0) {
                $("ul.feedback__form li:gt(0)").each(function () {
                    $(this).hide();
                })
                window.open("https://maya.um.edu.my/sitsvision/wrd/siw_ipp_lgn.login?process=siw_ipp_enq&code1=EQSGEN&code2");
            } else {
                $("ul.feedback__form li:gt(0)").each(function () {
                    $(this).show();
                })
            }
        })
    })


});

// Helper functions
function calculateWidth(mainElem, childElem) {
	var length = $(mainElem).find(childElem).length;
	var size = $(mainElem).find(childElem).outerWidth();

	$(mainElem).width(length * size);
}

function toggleSession(elem, key) {
	var session = window.sessionStorage.getItem(key);
	var $elem = $(elem);

	if(session === null || session === false) {
		$elem.show();
	} else {
		$elem.hide();
	}
}

function GenerateStaff(page,keyword,faculty,department,name,action,ddl_name) {
    if ($(".staffcont").length > 0) {

        var isMainSite = $("[id$='isMainSite']").val();
        var hid_txn_faculty_id = $("[id$='hid_txn_faculty_id']").val();
        
        if (isMainSite == 'False')
            faculty = hid_txn_faculty_id;
        
        var jsapi;
        jsapi = "/services/staff.aspx?page=" + page + "&keyword=" + keyword + "&faculty=" + faculty + "&department=" + department + "&name=" + name + "&ismainsite=" + isMainSite + "&action=" + action + "&ddl_name=" + ddl_name;

        $.ajax({
            url: jsapi,
            type: 'GET',
            dataType: 'json',
            beforeSend: function () { $(".ProgressTemplateWrapper").show() },
            success: function (data) {
                $(".staffcont section").remove();
                $(".pagination a").remove();
                $(".staff_count a").remove();
                $(".l--timestamp span").remove();
                $(".staff_count").html("");                  
                   
                
                $("#staff-directory-count-template").tmpl(data).appendTo(".staff_count");
                $("#staff-directory-lastupdate-template").tmpl(data).appendTo(".l--timestamp");                

                var name = $("#name_" + data.name);
                var name_all = $("#name_all");
                $(".box__list").removeClass("is-active");

                name_all.addClass("box__list is-active");
                if (data.name != '') {
                    name_all.removeClass("is-active");
                    $(".box__list").removeClass("is-active");
                    name.addClass("box__list is-active");
                }
                $.each(data.Data, function (index, item) {
                    $("#staff-directory-template").tmpl(item).appendTo(".staffcont");
                });
                $.each(data.pagination, function (index, item) {
                    $("#staff-directory-pagination-template").tmpl(item).appendTo(".pagination");
                });

                var $keyword = $("#keyword");
                var $dropdownlist = $(".sfaff-ddl-caption")
                $dropdownlist.html(data.ddlname);

                if (data.action == 'isddl' || data.action == 'isname' || data.action == 'isdefault') {
                    $keyword.val("");
                }
                //if (data.action == 'iskeyword') {}
           
                // Accordion 
                $('.staffcont .accordion__title').each(function () {
                    $(this).click(function () {

                        if ($(this).parent().find('.accordion__content').css('display') != 'block') {
                            // Reset
                            $(this).parent().parent().find('.accordion__content').slideUp();
                            // Do something
                            $(this).parent().find('.accordion__content').slideDown(200);
                        }
                    })
                })


                //hide loading bar where load completed
                $(".ProgressTemplateWrapper").hide();
            },
            error: function () { alert('error occured, please try again later'); }
        });
    }
}
function setHeader(xhr) {
    alert("beforeSend");
    $(".ProgressTemplateWrapper").show();
}
function GenerateStaffDDL() {
    if ($(".staffcont").length > 0) {

        var isMainSite = $("[id$='isMainSite']").val();
        var faculty = $("[id$='hid_txn_faculty_id']").val();
        var jsapi;

        if (isMainSite == 'False')
            $(".sfaff-ddl-caption").html("Select Department");
        else
            $(".sfaff-ddl-caption").html("Select Faculty");

        jsapi = "/services/staffddl.aspx?faculty=" + faculty + "&ismainsite=" + isMainSite;

        $.getJSON(jsapi, {
            format: "json"
        }).done(function (data) {
            $(".sfaff-ddl li").remove();
            $.each(data, function (index, item) {
                $("#staff-directory-ddl-template").tmpl(item).appendTo(".sfaff-ddl");
            });
        });

    }
}

