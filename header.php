<!DOCTYPE html>
<html>
    <head>
        <title>JAFAR</title>
        <meta charset="UTF-8">
        <link href="styles/styles.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/jpg" href="images/JAFAR-favicon.ico"/>
        <link rel="icon" type="image/png" href="images/JAFAR-favicon.png"/>
		<!--<link rel="icon" type="image/png" href="https://example.com/images/JAFAR-favicon.png"/>-->

        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>        
        
        <span id="modetoggle"></span>
        <header>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="left">
                        <img src="images/JAFAR-logotype.png" width="300" id="j_logo">
                    </td>
                    <td align="right">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <ul>
                                        <li><a href="https://confluence.profusion.com/x/XgB0Aw" target="_blank">Docs</a></li>
                                        <li><a href="mailto:jackp@profusion.com">Feedback</a></li>
                                        <li><a href="ruleset.php" target="_blank">Ruleset</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </header>
        <script>
            // Toggle styling setting
            $( "#modetoggle" ).click(function() {
                $( "body" ).toggleClass("darkmode");
                if($("#j_logo").attr("src") == "images/JAFAR-logotype.png"){
                    $("#j_logo").attr("src", "images/JAFAR-logotype-rev.png");
                }else{
                    $("#j_logo").attr("src", "images/JAFAR-logotype.png");
                }
                
            });
        </script>