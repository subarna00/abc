<div class="uk-container">
    <?php //$i=0; $args = array('showposts' =>1, 'page_id' => '120096'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
    <div id="corona"></div>
    <div class="row corona-update uk-visible@m">
        <div class="col-md-12">
            <div class="corona-nepal">
                <div class=" corona-title">
                    <h4>
                        <span class="corona-live">लाइभ अपडेट</span>: कोरोना भाइरस
                    </h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table mb-0">
                            <?php //if( have_rows('corona_update') ):?>
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="dext-title text-center">देश</div>
                                    </th>
                                    <th scope="col">
                                        <div class="dext-title text-center">मृत्यु</div>
                                    </th>
                                    <th scope="col">
                                        <div class="dext-title text-center">संक्रमित</div>
                                    </th>
                                    <th scope="col">
                                        <div class="dext-title text-center">निको भएका</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="Data">
                                <?php //while ( have_rows('corona_update') ) : the_row();?>




                                <?php //endwhile;?>
                            </tbody>
                            <?php //endif;?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="corona-source">
                <!-- अपडेटः <?php //the_time('j F, Y g:i a ' ); ?> बजे । स्रोत :
                coronavirus.jhu.edu -->
            </div>
        </div>
    </div>
    <?php //endwhile;wp_reset_postdata();?>
    <div class="uk-grid uk-grid-small uk-child-width-1-2@m" uk-grid>
        <div class="double-add">
            <?php dynamic_sidebar('corona-left'); ?>
        </div>
        <div class="double-add">
            <?php dynamic_sidebar('corona-right'); ?>
        </div>
    </div>
    <style>
        .corona-update {
            background: #027ab5;
            margin: 0;
            padding: 30px 30px 15px;
            margin-bottom: 10px;
            background-size: cover;
            text-align: center;
            background-image: url(https://www.abcnepal.tv/wp-content/uploads/2020/03/coronanepal.jpg);
        }

        .corona-title h4 {
            margin-bottom: 15px;
            color: #fff;
            font-weight: bold;
            font-size: 38px;
        }

        .corona-data {
            display: flex;
            justify-content: center;
            align-self: center;
        }

        .dext-title {
            font-size: 23px;
            font-weight: 700;
            color: #fff;
        }

        .number-of-deth {
            margin-top: 5px;
            font-size: 32px;
            font-weight: 700;
            color: #fecf00;
        }

        .number-of-deth-bishow {
            margin-top: 5px;
            font-size: 22px;
            font-weight: 500;
            color: #fff;
        }

        .table-deth {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .corona-nepali-title {
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
            font-size: 28px;
            padding: 5px;
        }

        .corona-nepal {
            border: 1px solid #ddd;
        }

        .corona-source {
            text-align: center;
            padding-top: 15px;
            color: #ddd;
        }

        .deth {
            background-color: rgba(225, 27, 34, .68);
        }

        .infected {
            background-color: rgba(225, 162, 27, .68);
        }

        .recover {
            background-color: rgba(133, 201, 46, .68);
        }

        .corona-title {
            text-align: center;
            padding-top: 22px;
        }
    </style>
</div>
<script>
    var devanagariDigits = {
        '0': '०',
        '1': '१',
        '2': '२',
        '3': '३',
        '4': '४',
        '5': '५',
        '6': '६',
        '7': '७',
        '8': '८',
        '9': '९'
    };
    // json practice section ended
    var nepalData = document.getElementById("Data");
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://nepalcorona.info/api/v1/data/world');
    console.log(ourRequest);
    ourRequest.onload = function () {
        if (ourRequest.status >= 200 && ourRequest.status < 400) {
            var data = JSON.parse(ourRequest.responseText);
            createHTML(data);
            create(data);
        } else {
            console.log('we connect to the server, but it return an error');
        }
    };
    ourRequest.onerror = function () {
        console.log('connection error');
    };
    ourRequest.send();

    function createHTML(nepalList) {
        var ourHTMLstring = "";
        for (i = 0; i < nepalList.length; i++) {
            var recover = nepalList[i].totalRecovered.toString().replace(/[0123456789]/g, function (s) {
                return devanagariDigits[s];
            });
            var death = nepalList[i].totalDeaths.toString().replace(/[0123456789]/g, function (s) {
                return devanagariDigits[s];
            });
            var infected = nepalList[i].totalCases.toString().replace(/[0123456789]/g, function (s) {
                return devanagariDigits[s];
            });
            var Idint = nepalList[i].country;
            var countryName = ["Nepal", "India", "USA", "China", "World"];
            for (j = 0; j < countryName.length; j++) {
                if (Idint == countryName[j]) {
                    ourHTMLstring += ' <tr><td><div class="table-deth"> <div class="number-of-deth-bishow">' +
                        nepalList[i].country +
                        '</div> </div></td><td class="deth"><div class="table-deth"> <div class="number-of-deth-bishow">' +
                        death +
                        '</div> </div></td><td class="infected"><div class="table-deth"> <div class="number-of-deth-bishow">' +
                        infected +
                        '</div> </div></td><td class="recover"><div class="table-deth"> <div class="number-of-deth-bishow">' +
                        recover + '</div> </div></td></tr>';
                    nepalData.innerHTML = ourHTMLstring;
                }
            }
        }
    };
</script>