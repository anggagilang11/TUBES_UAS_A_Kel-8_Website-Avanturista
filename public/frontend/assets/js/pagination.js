/*============ Template Introduction=====================
Template Name:wend - Tour, Travel & Travel Agency Template
Version: 1.0
Author:Andit Theme/Hadayet
Template URI: http://demo.anditthemes.com/html/travel-agency/
License URI: https://andit.co/
Tags:   hotel, resort, tour, tourism, tourist, tours website, travel, traveler, traveling, traveling websites, rest, Travelo, vacation.
================================================================*/
 $('#pagination-here').bootpag({
            total: 10,
            page: 1,
            maxVisible: 4,
            leaps: true,
            href: "#result-page-{{number}}",
        })
        $('#pagination-here').on("page", function(event, num) {

            $("#content").html("Page " + num);
        });