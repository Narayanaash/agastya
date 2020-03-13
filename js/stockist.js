(function($) {
    
    $('select#stockist_state').on('change', function() {
        if((this.value ) == 1 ) {
            var newOptions ={"--SELECT LOCATION--": "",
                             "GUWAHATI": "1",
                             "DIBRUGARH": "2",
                             "JORHAT": "3",
                             "NAGAON": "4",
                             "TEZPUR": "5",
                             "LAKHIMPUR": "6",
                             "SIBSAGAR": "7",
                             "NALBARI": "8",
                             "DHEMAJI": "9",
                             "RONGIA": "10",
                             "SILAPATHAR": "11",
                             "TINSUKIA": "14",
                             "GOLAGHAT": "15",
                             "BISWANATH CHARIALI": "16",
                             "HOJAI": "17",
                             "DHEKIAJULI": "19",
                            };
        
        var $el = $("select#stockist_location");
        $el.empty(); // remove old options
        $.each(newOptions, function(key,value) {
          $el.append($("<option></option>")
             .attr("value", value).text(key));
        });
        }
        if((this.value ) == 2 ) {
            var newOptions ={"--SELECT LOCATION--": "",
                             "PASIGHAT": "12",
                             "ITANAGAR": "13"
                            };
        
        var $el = $("select#stockist_location");
        $el.empty(); // remove old options
        $.each(newOptions, function(key,value) {
          $el.append($("<option></option>")
             .attr("value", value).text(key));
        });
        }
        if((this.value ) == 3 ) {
            var newOptions ={"--SELECT LOCATION--": "",
                             "SHILLONG": "18"
                            };
        
        var $el = $("select#stockist_location");
        $el.empty(); // remove old options
        $.each(newOptions, function(key,value) {
          $el.append($("<option></option>")
             .attr("value", value).text(key));
        });
        }
        if((this.value ) > 3 ) {
            $('.section-content').css('display', 'none');
            $('.loader').css('display', 'block');
        } else {
            $('.loader').css('display', 'none');
            $('.section-content').css('display', 'block');
        }
    });

    $('select#stockist_location').on('change', function() {
        if((this.value ) == 1 ) {
            $('.guwahati').css('display', 'block');
        } else {
            $('.guwahati').css('display', 'none');
        }
        
        if((this.value ) == 2 ) {
            $('.dibrugarh').css('display', 'block');
        } else {
            $('.dibrugarh').css('display', 'none');
        }
        
        if((this.value ) == 3 ) {
            $('.jorhat').css('display', 'block');
        } else {
            $('.jorhat').css('display', 'none');
        }
        
        if((this.value ) == 4 ) {
            $('.nogaon').css('display', 'block');
        } else {
            $('.nogaon').css('display', 'none');
        }
        
        if((this.value ) == 5 ) {
            $('.tezpur').css('display', 'block');
        } else {
            $('.tezpur').css('display', 'none');
        }
        
        if((this.value ) == 6 ) {
            $('.lakhimpur').css('display', 'block');
        } else {
            $('.lakhimpur').css('display', 'none');
        }
        
        if((this.value ) == 7 ) {
            $('.sibsagar').css('display', 'block');
        } else {
            $('.sibsagar').css('display', 'none');
        }
        
        if((this.value ) == 8 ) {
            $('.nalbari').css('display', 'block');
        } else {
            $('.nalbari').css('display', 'none');
        }
        
        if((this.value ) == 9 ) {
            $('.dhemaji').css('display', 'block');
        } else {
            $('.dhemaji').css('display', 'none');
        }

        if((this.value ) == 10 ) {
            $('.rongia').css('display', 'block');
        } else {
            $('.rongia').css('display', 'none');
        }

        if((this.value ) == 11 ) {
            $('.silapathar').css('display', 'block');
        } else {
            $('.silapathar').css('display', 'none');
        }

        if((this.value ) == 12 ) {
            $('.pasighat').css('display', 'block');
        } else {
            $('.pasighat').css('display', 'none');
        }

        if((this.value ) == 13 ) {
            $('.itanagar').css('display', 'block');
        } else {
            $('.itanagar').css('display', 'none');
        }

        if((this.value ) == 14 ) {
            $('.tinsukia').css('display', 'block');
        } else {
            $('.tinsukia').css('display', 'none');
        }

        if((this.value ) == 15 ) {
            $('.golaghat').css('display', 'block');
        } else {
            $('.golaghat').css('display', 'none');
        }

        if((this.value ) == 16 ) {
            $('.biswanathchariali').css('display', 'block');
        } else {
            $('.biswanathchariali').css('display', 'none');
        }

        if((this.value ) == 17 ) {
            $('.hojai').css('display', 'block');
        } else {
            $('.hojai').css('display', 'none');
        }

        if((this.value ) == 18 ) {
            $('.shillong').css('display', 'block');
        } else {
            $('.shillong').css('display', 'none');
        }

        if((this.value ) == 19 ) {
            $('.dhekiajuli').css('display', 'block');
        } else {
            $('.dhekiajuli').css('display', 'none');
        }
    });

})(jQuery);