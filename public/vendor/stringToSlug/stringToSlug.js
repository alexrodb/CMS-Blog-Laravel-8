                /* Encode string to slug */
                function stringToSlug( str ) {
                        
                    //replace all special characters | symbols with a space
                    str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

                    // Remove accents, swap ñ for n, etc
                    var from = "ÁÄÂÀÃÅČÇĆĎÉĚËÈÊẼĔȆÍÌÎÏŇÑÓÖÒÔÕØŘŔŠŤÚŮÜÙÛÝŸŽáäâàãåčçćďéěëèêẽĕȇíìîïňñóöòôõøðřŕšťúůüùûýÿžþÞĐđßÆa·/_,:;";
                    var to   = "AAAAAACCCDEEEEEEEEIIIINNOOOOOORRSTUUUUUYYZaaaaaacccdeeeeeeeeiiiinnooooooorrstuuuuuyyzbBDdBAa------";
                    for (var i=0, l=from.length ; i<l ; i++) {
                        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                    }

                    // trim spaces at start and end of string
                    str = str.replace(/^\s+|\s+$/gm,'');

                    // replace space with dash/hyphen
                    str = str.replace(/\s+/g, '-');
                    
                    document.getElementById("slug-text").value= str;
                    //return str;
                }